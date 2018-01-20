@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table"> 
                        <thead> 
                            <th> Title </th>
                            <th> Description </th> 
                            <th> Tags </th>
                            <th>
                                <a href="{{ route('createnote') }}">
                                    <button type="button" class="btn btn-primary">Add Note </button>
                                </a>
                            </th>
                        </thead>
                        <tbody>
                            @foreach ($notes as $note) 
                                <tr> 
                                    <td><a href="{{ route('viewnote',['id'=> $note->id]) }}"> {{ $note->title}} </a></td>  
                                    <td> {{ $note->description }}
                                    <td><a href="#"> {{ $note->tags}} </a></td>
                                </tr>
                            @endforeach 
                        </tbody>  
                    </table>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Your Notes </div>

                <div class="panel-body">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                    <table class="table"> 
                        <thead> 
                            <th> Title </th>
                            <th> Description </th> 
                            <th> Tags </th>
                        </thead>
                        <tbody>
                            @foreach ($usernotes as $usernote) 
                                <tr> 
                                    <td><a href="/dashboard"> {{ $usernote->title}} </a></td>  
                                    <td> {{ $usernote->description }}
                                    <td><a href="#"> {{ $usernote->tags}} </a></td>
                                    <td>
                                        <a href="{{ route('editnoteform', ['id' => $usernote->id]) }}" 
                                            class="btn btn-primary">
                                            Edit
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('deletenote', ['id'=> $usernote->id]) }}"
                                           class="btn btn-danger">
                                           Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach 
                        </tbody>  
                    </table>
                </div>
        </div>
    </div>
</div>
@endsection
