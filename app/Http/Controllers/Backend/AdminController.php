<?php

namespace App\Http\Controllers\Backend;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin:admin');
    }

    public function index()
    {
        return view('admin.home');
    }

    public function edit()
    {
        $data = auth()->user();
        return view('admin.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $id = Auth::user()->id;

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
            'salary' => 'nullable|string|max:100',
        ));

        $admin = Admin::find($id);
        if (!empty($request->password))
        {
            $newPassword = Hash::make($request['password']);
            $admin->password = $newPassword;
        }
//        $admin->save();
        $admin->update($editAdmin);
        return redirect('admin/employee/index')->with('edit','แก้ไขข้อมูลเรียบร้อย');
    }

}
