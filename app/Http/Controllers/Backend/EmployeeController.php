<?php

namespace App\Http\Controllers\Backend;

use App\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class EmployeeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('admin:admin');
    }

    public function index()
    {
        $search = "";
        $admins = Admin::paginate(2);
        return view('admin.employee.index', compact('admins','search'));
    }
    public function create()
    {
        $roles = Role::where('id','!=','1')
         ->get();
        return view('admin.employee.create', compact('roles'));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        if ($search == ""){
            $admins = Admin::query()
//                ->where('id', '!=', 1)
                ->paginate(2);
            return view('admin.employee.index',['admins' => $admins,'search' => $search]);
        }
        else{
            $admins = Admin::query()
//                ->where('id', '!=', 1)
                ->where('first_name','LIKE','%'.$search.'%')
//                ->where('last_name','LIKE','%'.$search.'%')
                ->paginate(2);
            $admins->appends($request->only('search'));
            return view('admin.employee.index',compact('admins','search'));
        }
    }

    public function store(Request $request)
    {
//        dd($request);
        $data = $request->all();
        $this->validateCreate($data)->validate();
        Admin::create([
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
            'email' => $request['email'],
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'gender' => $request['gender'],
            'id_card' => $request['id_card'],
            'tel' => $request['tel'],
            'birthday' => $request['birthday'],
            'address' => $request['address'],
            'role_id' => $request['role_id'],
            'salary' => $request['salary'],
            'image' => $request['image']->store('uploads','public'),
        ]);
        return redirect('admin/employee/index')->with('success','เพิ่มพนักงานเรียบร้อย');
    }
    protected function validateCreate(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:50', 'unique:admin'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admin'],
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'gender' => ['required', 'string', 'max:50'],
            'id_card' => ['required','string','max:20'],
            'tel' => ['required','string','max:20'],
            'birthday' => ['required'],
            'address' => ['required','string','max:255'],
            'salary' => ['nullable','string','max:100'],
            'image' => ['required', 'file', 'image', 'max:5000'],
        ]);
    }

    public function edit($id)
    {
        $data = Admin::find($id);
        $roles = Role::all();
        return view('admin.employee.edit', compact('data','roles'));
    }
    public function update(Request $request, $id)
    {

        $editAdmin = [
            'username' => $request['username'],
            'email' => $request['email'],
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'gender' => $request['gender'],
            'id_card' => $request['id_card'],
            'tel' => $request['tel'],
            'birthday' => $request['birthday'],
            'address' => $request['address'],
            'salary' => $request['salary'],
        ];
        $data = [
            'username' => "required|string|max:50|unique:admin,username,$id",
//            'password' => 'nullable|string|min:6|confirmed',
            'email' => "required|email|max:255|unique:admin,email,$id",
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'gender' => 'required|string|max:50',
            'id_card' => 'required|string|max:20',
            'tel' => 'required|string|max:20',
            'birthday' => 'required',
            'address' => 'required|string|max:255',
            'salary' => 'nullable|string|max:100',
            ];

        if (!empty($request['image'])) {
            $data += ['image' => ['required', 'file', 'image', 'max:5000'],];
        };

        $this->validate($request, $data);


        $admin = Admin::find($id);

        if(isset($request['image']))
        {
            Storage::delete('public/'.$admin->image);
            $editAdmin += [ 'image' => ($request['image'])->store('uploads','public')];
        }

        if (!empty($request->password))
        {
            $newPassword = Hash::make($request['password']);
            $admin->password = $newPassword;
        }
        $admin->update($editAdmin);
        return redirect('admin/employee/index')->with('edit','แก้ไขข้อมูลเรียบร้อย');
    }
    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->forcedelete();
        Storage::delete('public/'.$admin->image);
        return redirect()->route('admin.employee.index')->with('deleted','ลบพนักงานเรียบร้อย');
    }


}
