<?php

namespace App\Http\Controllers\Backend;

use App\Articles;
use App\ArticlesCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticlesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin:admin');
    }

    public function index()
    {
        return view('admin.articles.index');
    }

    public function create()
    {
        $articlescategory = ArticlesCategory::all();
        return view('admin.articles.create',compact('articlescategory'));
    }

    public function store(Request $request)
    {
        $articles = new Articles;
        $articles->admin_id = Auth::user()->id;
        $articles->articles_category_id = $request['articles_category_id'];
        $articles->title = $request['title'];
        $articles->short_description = $request['short_description'];
        $articles->description = $request['description'];
        $articles->image = $request['image']->store('uploads','public');
        $articles->save();
        return redirect()->route('admin.articles.index')->with('success','เพิ่มข่าวสาร');
    }

    public function show(Articles $articles)
    {
        //
    }

    public function edit(Articles $articles)
    {
        //
    }

    public function update(Request $request, Articles $articles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articles $articles)
    {
        //
    }
}
