<?php

namespace App\Http\Controllers\Backend;

use App\Articles;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        //
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
