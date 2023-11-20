<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function ajoutCommentaire(Request $req)
    {
        $userId=$req->validate([
            'contenu'=>'required',      
        ]);

        $comment= new Comment();
        $comment->contenu=$req->contenu;
        $comment->user_id=$req->user_id;
        $comment->bien_id=$req->bien_id;
        $comment->save();
        return back();

    }

    /**
     * Show the form for creating a new resource.
     */
    // public function listerComment()
    // {
    //     $comments=Comment::all();
    //     return view('biens.detail',compact('comments'));
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
