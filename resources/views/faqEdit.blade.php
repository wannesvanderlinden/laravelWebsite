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
 <h1>Categories</h1>
@foreach ($categories as $categorie )
    
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{$categorie->name}}</h5>
        <p class="card-text">{{$categorie->summary}}<p>
        <a href="/FAQ/categorie/{{$categorie->id}}/edit" class="btn btn-primary">edit categorie</a>
        <a href="/FAQ/categorie/{{$categorie->id}}/delete" class="btn btn-primary">delete categorie</a>
        <a href="/FAQ/categorie/{{$categorie->id}}/edit/questions" class="btn btn-primary">edit questions</a>
        <a href="/FAQ/question/add" class="btn btn-primary">add question</a>
      </div>
    </div>
  </div>
@endforeach
<br>
<a href="/FAQ/categorie/create" class="btn btn-primary">Create categorie</a>
  @if(Session::has('succes'))
            <div class="alert alert-success">
                {{Session::get('succes')}}
            </div>
        @endif
@endsection
</body>
</html>