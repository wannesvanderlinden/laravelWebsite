
    @extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')
   @section('content')
   
   <form action="" method="post">
 
    <legend>Create Categorie</legend>
    <div class="mb-3">
      <label for="name" class="form-label">Name:</label>
         <input type="text" id="name"name="name" class="form-control" value="">
    </div>
      <div class="mb-3">
      <label for="summary" class="form-label">Summary:</label>
       <input type="text" id="summary"name="summary" class="form-control" value="">
    </div>

  @csrf
<div class="mb-3">
      <button type="submit">create</button>
    </div>
</form>
  @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
@endsection
        
