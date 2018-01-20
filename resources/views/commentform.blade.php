
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center"> Your Comment </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="{{ route('addcomment', ['id' => $note->id]) }}">
                    {{ csrf_field() }}
                        

                        <div class="form-group">
                            <label for="content" class="col-md-4 control-label"> Content </label> 

                            <div class="col-md-6">
                                <textarea id="content" class="form-control" name="content" rows="10" value="" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection 