<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CommentController extends Controller
{
    /**
     * Store a newly created comment in storage.
     */
    public function store(Request $request, string $bienId)
    {
        $request->validate([

            'contenu'=>'required|string',
        ]);

        $comment = new Comment();
        $comment->user_id = $request->user_id;
        $comment->contenu = $request->contenu;
        $comment->bien_id = $request->bien_id;
        $comment->save();

        return redirect()->route('biens.show', ['id' => $bienId])->with('status', 'Commentaire ajouté avec succès !!');
    }

    /**
     * Update the specified comment in storage.
     */
   
        public function edit( $id)
        {
            $comment = comment::find($id);
            return view('biens.update', compact('comment'));
        }

        public function update(Request $request, string $id)
    {
        $request->validate([
            'contenu'=>'required|string',
        ]);
        $comment = comment::find($id);

        $comment->user_id = $request->user_id;
        $comment->contenu = $request->contenu;
        $comment->bien_id = $request->bien_id;
            
        $comment->update();

        $idBien=$comment->bien_id;
        return Redirect::route('biens.show',['id'=>$idBien]);
    }

    public function delete($id){
        $comment = comment::find($id);
        $comment->delete();
        return back();
         
    }

 } 

