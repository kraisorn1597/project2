<?php

namespace App\Http\Controllers\Backend;

use App\ArticlesCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleCategoryRequest;
use Illuminate\Http\Request;

class ArticlesCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin:admin');
    }
    public function index()
    {
        $articlescategory = ArticlesCategory::paginate(2);
        return view('admin.articles-category.index',compact('articlescategory'));
    }

    public function create()
    {
        return view('admin.articles-category.create');
    }

    public function store(ArticleCategoryRequest $request)
    {
        ArticlesCategory::create([
            'name' => $request['name'],
        ]);
        return redirect('admin/articlescategory/index')->with('success','เพิ่มประเภทข่าวสาร');
    }

    public function edit($id)
    {
        $data = ArticlesCategory::find($id);
        return view('admin.articles-category.edit',compact('data'));
    }

    public function update(ArticleCategoryRequest $request, $id)
    {
        $category = ArticlesCategory::find($id);
        $category->name = $request['name'];
        $category->update();
        return redirect('admin/articlescategory/index')->with('edit','แก้ไขข้อมูลเรียบร้อย');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ArticlesCategory  $articlesCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articlescategory = ArticlesCategory::find($id);

       $articlescategory->delete();

        return redirect()->route('admin.articlescategory.index')->with('deleted','ลบประเภทข่าวสารเรียบร้อย');
    }
}
