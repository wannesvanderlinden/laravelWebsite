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
   
   <form action="/FAQ/question/{{$question->id}}/save" method="post">
   @method('PUT')
    <legend>Edit categorie {{ $question->categorie->name }}</legend>

    
    <div class="mb-3">
      <label for="title" class="form-label">Title:</label>
         <input type="text" id="title"name="title" class="form-control" value="{{$question->title}}">
    </div>
      <div class="mb-3">
      <label for="answer" class="form-label">answer:</label>
       <input type="text" id="answer"name="answer" class="form-control" value="{{$question->answer}}">
    </div>
<label for="cars">Choose a categorie:</label>
  <select name="categories" id="categories">
  @foreach ($categories as $categorie)
        <option value="{{$categorie->id}}">{{$categorie->name}}</option>
  @endforeach
  </select>
  <br><br>
 

  @csrf
<div class="mb-3">
      <button type="submit">Save</button>
    </div>
</form>
@endsection
        
</body>