@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> Create New Note </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="{{ route('addnote') }}">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title" class="col-md-4 control-label"> Title </label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-md-4 control-label"> Description </label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="content" class="col-md-4 control-label"> Content </label> 

                            <div class="col-md-6">
                                <textarea id="content" class="form-control" name="content" rows="10" value="" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tags" class="col-md-4 control-label"> Tags </label>

                            <div class="col-md-6">
                                <input id="tags" type="text" class="form-control" name="tags" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
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