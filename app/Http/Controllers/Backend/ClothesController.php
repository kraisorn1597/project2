<?php

namespace App\Http\Controllers\Backend;

use App\Clothes;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClothesRequest;
use Illuminate\Http\Request;

class ClothesController extends Controller
{

    public function index()
    {
        $clothes = Clothes::all();
        return view('admin.clothes.index', compact('clothes'));
    }

    public function create()
    {
        return view('admin.clothes.create');
    }

    public function store(ClothesRequest $request)
    {
        Clothes::create([
            'name' => $request['name'],
            'price' => $request['price'],
        ]);
       return redirect('admin/clothes/index')->with('success','เพิ่มเสื้อผ้าเรียบร้อย');
    }

    public function edit($id)
    {
        $data = Clothes::find($id);
        return view('admin.clothes.edit', compact('data'));
    }

    public function update(ClothesRequest $request, $id)
    {
        $clothes = Clothes::find($id);
        $editAdmin = [
            'name' => $request['name'],
            'price' => $request['price'],
        ];
        $clothes->update($editAdmin);
        return redirect('admin/clothes/index')->with('edit','แก้ไขข้อมูลเรียบร้อย');
    }

    public function destroy($id)
    {
        $clothes = Clothes::find($id);

        $clothes->delete();

        return redirect()->route('admin.clothes.index')->with('deleted','ลบเสื้อผ้าเรียบร้อย');
    }
}
