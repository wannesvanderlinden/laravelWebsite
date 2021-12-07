
    @extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')
   @section('content')
   
   <form action="" method="post">
   
    <legend>Profile</legend>
    <img src="{{asset('storage/profile/profile.jpg')}}" class="img-thumbnail" alt="..." width="240px" height="240px">
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">username:</label>
         <input type="text" id="username"name="username" class="form-control" value="{{Auth::user()->username}}">
    </div>
      <div class="mb-3">
      <label for="disabledTextInput" class="form-label">name:</label>
       <input type="text" id="name"name="name" class="form-control" value="{{Auth::user()->name}}">
    </div>
     
        </div>
      <div class="mb-3">
        
      <label for="disabledTextInput" class="form-label">Birthday:</label>
      <input type="date" id="birthday"name="birthday" class="form-control" value="{{Auth::user()->birthday}}">
    </div>
     </div>
        </div>
      <div class="mb-3">
      <label for="disabledTextInput" class="form-label">aboutMe:</label>
      <textarea name="aboutMe" id="aboutMe" cols="30" rows="10" >{{Auth::user()->aboutMe}}   </textarea>
    </div>
   

  @csrf
<div class="mb-3">
      <button type="submit">Save</button>
    </div>
</form>
@endsection
        
