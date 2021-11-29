<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')
 
   @section('content')
@foreach ($news as $new )
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{asset('storage/news/'.$new->img)}}" alt="Card image cap">
  <div class="card-body">
  <h5 class="card-title">{{$new->title}}</h5>
    <p class="card-text">{{$new->content}}</p>
    <a href="/news/{{$new->id}}/edit" class="btn btn-primary">edit</a>
    <a href="/news/{{$new->id}}/delete" class="btn btn-primary">delete</a>
  </div>
</div>
@endforeach
  @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
@endsection
   
</body>
</html>