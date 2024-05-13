<?php

namespace App\Http\Controllers;

use App\Models\ACME\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($p_slug = null)
    {
        $pages = Page::whereIsRoot()->get();
        $cpage = is_null($p_slug) ? $pages->first() : Page::where('slug', $p_slug)->first();
        return view('admin.page.__page', compact('pages', 'cpage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($p_slug = null)
    {
        $cpage = is_null($p_slug) ? Page::first() : Page::where('slug', $p_slug)->first();
        return view('admin.page.form', compact('cpage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $p_slug)
    {
        $this->validate($request, [
            'title' => 'required',
            // 'uri' => 'required',
            // 'route' => 'required',
            'content' => 'required'
        ]);

        $page = Page::create([
            'title' => $request->title,
            'content' => $request->content,
            'view' => "frontend.page",
        ]);

        $cpage = is_null($p_slug) ? Page::first() : Page::where('slug', $p_slug)->first();
        $cpage->appendNode($page);

        return redirect()->route('admin.pages', $cpage->slug)->withSuccess("Page created successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ACME\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ACME\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('admin.page.editor', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ACME\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $page->content = $request->content;
        $page->title = $request->title;
        $page->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ACME\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
}
