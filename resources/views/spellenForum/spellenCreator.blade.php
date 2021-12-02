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
 <form class="form-horizontal" action="" method="post">
  
  

<div class="card text-center">
  <div class="card-header">
    
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Title</label>
    <input type="text" class="form-control" name="title" id="formGroupExampleInput" placeholder="title">
  </div>
  <div class="card-body">
    <div class="form-group">
    <label for="explenation">explenation</label>
    <textarea id="explenation" name="explenation" rows="4" cols="50">
</textarea>
  </div>
  <p>Leeftijdsgroepen</p>
<input type="checkbox" id="kleuters" name="kleuters" value="2">
<label for="kleuters"> kleuters</label><br>
<input type="checkbox" id="GrootPlein" name="GrootPlein" value="3">
<label for="GrootPlein">Groot Plein</label><br>
<input type="checkbox" id="+13" name="plusd" value="1">
<label for="+13"> +13</label><br>
@csrf

  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</div>
</form>
@if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
   @endsection
        
      
</body>
</html>