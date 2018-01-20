@extends('layouts.app') @section('content')
<div class="container">
  <div class="row">
    <div class="col-md-7 col-md-offset-2">
      <div class="panel panel-primary">
        <div class="panel-heading text-center"> {{$note->title}}</div>
        <div class="panel-body">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title"> </h2>
              <p class="card-text">{{$note->content}}</p>
            </div>
                
            <div class="container">
              <div class="row">
                <footer style="padding-top: 2%;">
                  <div class="col-xs-4">
                    Tags: {{$note->tags}}
                  </div>
                      
                  <div class="col-xs-4">
                    <a href="{{ route('createcomment', ['id' => $note->id]) }}" class="btn btn-primary"> 
                      Add comment
                    </a>
                  </div>
                </footer>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
        
    <div class="col-md-7 col-md-offset-2">
      <div class="panel panel-info">
        <div class="panel-heading text-left"> Comments</div>
        <div class="panel-body">
          <div class="card">
            <div class="card-body">
              @foreach ($comments as $comment)
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="http://placehold.it/140x100" alt="...">
                  </a>
                </div>
                  
                <div class="media-body">
                  <h5 class="media-heading"><b>{{$comment->username }}</b></h5>
                  {{$comment->comment}}
                </div>
                <div class="text-right">
                  <a class="btn btn-primary link">
                    <i class="ion-thumbsup" style="font-size: 1.8rem">
                      <span class="badge" style="margin-left: 3%; font-size:8px">
                        0
                      </span>
                    </i>
                  </a>
                  <a class="btn btn-primary link">
                    <i class="ion-thumbsdown" style="font-size: 1.8rem;">
                      <span class="badge" style="margin-left: 3%; font-size:8px">0</span>
                    </i>
                  </a>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

<script> 
  var x = document.getElementsByClassName("link");
</script>
<script src="{{ asset('dist/main.bundle.js') }}" defer></script>