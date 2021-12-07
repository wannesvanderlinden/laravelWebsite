
    @extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')
   @section('content')
   
   
   <fieldset disabled>
    <legend>Profile</legend>
    <img src="{{asset('storage/profile/profile.jpg')}}" class="img-thumbnail" alt="..." width="240px" height="240px">
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">username:</label>
         <input type="text"  id="disabledTextInput" name="username" class="form-control" value="{{$user->username}}">
    </div>
      <div class="mb-3">
      <label for="disabledTextInput" class="form-label">name:</label>
       <input type="text" id="disabledTextInput"name="name" class="form-control" value="{{$user->name}}">
    </div>
     
        </div>
      <div class="mb-3">
        
      <label for="disabledTextInput" class="form-label">Birthday:</label>
      <input type="date" id="disabledTextInput"name="birthday" class="form-control" value="{{$user->birthday}}">
    </div>
     </div>
        </div>
      <div class="mb-3">
      <label for="disabledTextInput" class="form-label">aboutMe:</label>
      <textarea name="aboutMe"id="disabledTextInput" cols="30" rows="10" >{{$user->aboutMe}}   </textarea>
    </div>
   </fieldset> 

@endsection
        
