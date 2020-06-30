<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /*
     * Display a listing of the resource.
     */
    public function index()
    {
        return \DB::table('posts')->get();
    }

    /*
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return ['view' => 'with a form to create a post'];
    }

    /*
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /*
     * Display the specified resource.
     */
    public function show($id)
    {
        $posts = ['post 0', 'post 1', 'post 2', 'post 3'];

        return ['show' => $posts[$id]];
    }

    /*
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return ['edit' => 'form for post with an id of ' . $id];
    }

    /*
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /*
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
