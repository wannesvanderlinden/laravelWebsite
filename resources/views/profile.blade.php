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
   @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
   <fieldset disabled>
    <legend>Profile</legend>
    <img src="..." class="img-thumbnail" alt="...">
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">username:</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{Auth::user()->username}}">
    </div>
      <div class="mb-3">
      <label for="disabledTextInput" class="form-label">name:</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{Auth::user()->name}}">
    </div>
      <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Created at:</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{Auth::user()->created_at}}">
    </div>
        </div>
      <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Birthday:</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{Auth::user()->birthday}}">
    </div>
     </div>
        </div>
      <div class="mb-3">
      <label for="disabledTextInput" class="form-label">aboutMe:</label>
      <textarea name="aboutMe" id="aboutMe" cols="30" rows="10" disabled>{{Auth::user()->aboutMe}}   </textarea>
    </div>
   
</fieldset> 
<div class="mb-3">
      <button type="button" onclick="window.location='http://127.0.0.1:8000/profile/edit'">Edit data</button>
    </div>
@endsection
</body>
</html>