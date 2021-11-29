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
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
    <label for="content">Title</label>
    <textarea class="form-control" id="title" rows="1" width="5" name="title"></textarea>
     @if($errors->has('title'))
                        
                        <div class="alert alert-danger" role="alert">
{{ $errors->first('title') }}
</div>
          
            
                     @endif
  </div>

<div class="form-group">
    <label for="content">Story</label>
    <textarea class="form-control" id="content" name="content" rows="3"></textarea>
     @if($errors->has('content'))
                        
                        <div class="alert alert-danger" role="alert">
{{ $errors->first('content') }}
</div>
          
            
                     @endif
  </div>


<div class="form-group">
  <label for="photo">Attach a photograph</label>
  <input type="file" name="photo" id="photo" accept="image/*" class="form-control-file">
   @if($errors->has('photo'))
                        
                        <div class="alert alert-danger" role="alert">
{{ $errors->first('photo') }}
</div>
          
            
                     @endif
</div>
          @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
   @csrf
<div class="mb-3">
      <button type="submit">Save</button>
    </div>
</form>
@endsection
</body>
</html>