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
<h1>Active news</h1>

    @foreach($news as $new)

 @csrf

<div class="card mb-3">
  <img class="card-img-top" src=".../100px180/" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$new->title}}</h5>
    <p class="card-text">{{$new->content}}</p>
    <p class="card-text"><small class="text-muted">Created at:{{$new->created_at}} </small></p>
    <label class="form-label" for="reaction">reaction</label> 
<input type="text" name="reaction" id="reaction" width="100px">
<button type="submit">post</button>
  </div>



                  
@endforeach
@endsection



</body>
</html>
