<?php 

namespace App\Http\Controllers;

use App\Note;
use App\Comment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class NoteController extends Controller {


    public function noteForm() {
      return view('noteform');
      
    }

    public function addNote(Request $request) {
        $note = new Note;
        $note->title = $request->title;
        $note->description = $request->description;
        $note->content = $request->content;
        $note->tags = $request->tags;
        $note->userid = Auth::user()->id;

        $saved = $note->save();

        if ($saved) {
            return redirect('/dashboard')->with('status', 'Your note has been added.');
        }
    }

    public function viewNote($id) {
        $note = Note::find($id);
        $comment = Comment::all();

        return view('viewnote')
                            ->with('note', $note)
                            ->with('comments', $comment);
    }

    public function editNoteForm($id) {
        $note = Note::where('id', $id)->get();
        return view('editnoteform')->with('note', $note);
    }

    public function editNote(Request $request, $id) {
        $note = Note::find($id);
        $note->title = $request->title;
        $note->description = $request->description;
        $note->content = $request->content;
        $note->tags  = $request->tags;
        
        $updated = $note->save();

        if ($updated) {
            return redirect('/dashboard')->with('message', 'Your note has been updated.');
        }
    }

    public function deleteNote($id) {
        $note = Note::find($id);
        $deleted = $note->delete();
        if ($deleted) {
            return redirect('/dashboard')->with('message', 'Note Deleted.');
        }
    }

    public function postLike($id) {
        echo json_encode("hello world");
    }

}