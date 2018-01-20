<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller {

    public function commentForm($id) {
        $note = Note::find($id);
        return view('commentform')->with('note', $note);
    }

    public function postComment(Request $request, $id) {
        
        $comment = new Comment;
        $comment->comment = $request->input('content');
        $comment->username = Auth::user()->name;
        $comment->userid = Auth::user()->id;

        $saved = $comment->save();
        
        if ($saved) {
            return redirect()->route('viewnote', [$id]);
        }
    }

}
