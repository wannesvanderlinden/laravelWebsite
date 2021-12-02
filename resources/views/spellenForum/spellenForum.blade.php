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
    
   <br>
 <div class="container">
<div class="col-md-12">
@foreach ($spellen as $spel )
    <h1>{{$spel->title}}</h1>
    @foreach ($spel->Leeftijdsgroepen as $leeftijdsgroep )
        <span class="badge badge-warning">{{$leeftijdsgroep->name}}</span> 
    @endforeach
    
    <p>{{$spel->explenation}}</p>
    <div>
   
     </div>
    <hr><br>
    
       @endforeach
   
</div>
</div>

   @endsection
        
      
</body>
</html>