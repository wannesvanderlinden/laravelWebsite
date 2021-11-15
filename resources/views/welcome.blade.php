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
    <figure class="figure">
    {{$new->name}}
    <br>
  <img src="..." class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption">{{$new->content}}</figcaption>
</figure>
@endforeach
@endsection



</body>
</html>
