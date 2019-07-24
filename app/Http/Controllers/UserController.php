<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('admin:admin');
    }

    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }
    public function create()
    {
        return view('admin.users.create');
    }
    public function store(UserRequest $request)
    {
        User::create([
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
        ]);
        return redirect('admin/users/index')->with('success','เพิ่มสมาชิกเรียบร้อย');
    }

    public function edit($id)
    {
        $data = User::find($id);
        return view('admin.users.edit', compact('data'));
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
        ];

        $this->validate($request, array(

            'username' => "required|string|max:50|unique:admin,username,$id",
            'password' => 'nullable|string|min:6|confirmed',
            'email' => "required|email|max:255|unique:admin,email,$id",
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'gender' => 'required|string|max:50',
            'id_card' => 'required|string|max:20',
            'tel' => 'required|string|max:20',
            'birthday' => 'required',
            'address' => 'required|string|max:255',
        ));

        $admin = User::find($id);
        if (!empty($request->password))
        {
            $newPassword = Hash::make($request['password']);
            $admin->password = $newPassword;
        }
//        $admin->save();
        $admin->update($editAdmin);
        return redirect('admin/users/index')->with('edit','แก้ไขข้อมูลเรียบร้อย');
//        return redirect()->back()->withSuccess('แก้ไขข้อมูลเรียบร้อย');
    }

    public function destroy($id)
    {
        $admin = User::find($id);

        $admin->delete();

//        Storage::delete();

        return redirect()->route('admin.users.index')->with('deleted','ลบพนักงานเรียบร้อย');
    }
}
