<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@extends('layouts\user')
@section('content')
 @if( Auth::user() !== null)
<h1>Active news</h1>


    @foreach($news as $new)
{{$new->name}}
@endforeach

   


@else
<h1>not log</h1>
    @endif

@endsection
</body>
</html>
