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

<div class="card text-center">
  
  <div class="card-body">
    <h5 class="card-title">Active news</h5>
    <p class="card-text">Down here you can see the news items</p>

  </div>
 
</div>
<span class="border">
    @foreach($news as $new)

 @csrf





      <div class="card" style="width: 100%; height:5%;">
  <img class="card-img-top" src="{{asset('storage/news/'.$new->img)}}" alt="Card image cap" style=" height:400px;">
  <div class="card-body">
    <h5 class="card-title">{{$new->title}}</h5>
    <p class="card-text">{{$new->content}}</p>
      <p class="card-text"><small class="text-muted">Created at:{{$new->created_at}} </small></p>
@foreach ($new->reactions as $reaction)
<br>
<div class="card">
  <div class="card-header">
     Reaction: {{$reaction->name}}
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>{{$reaction->content}}</p>
      <footer class="blockquote-footer">{{$reaction->created_at}}</footer>
    </blockquote>
  </div>
</div>
    
@endforeach
     
      <form action="" method="post">
       @csrf
    <label class="form-label" for="content">reaction</label> 
<input type="text" name="content" id="reaction" width="100px">
<button type="submit">post</button>
 <input type="hidden" id="news_id" name="news_id" value="{{$new->id}}">
  </div>
</div>  
</form>          
@endforeach
</span>
@endsection



</body>
</html>
