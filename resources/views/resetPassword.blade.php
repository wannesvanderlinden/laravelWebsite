  @extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')
   @section('content')
<form action="" method="post" >
@csrf
<div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation" class="text-info">Password:</label><br>
                                <input type="password_confirmation" name="password_confirmation" id="password_confirmation" class="form-control">
                            </div>
                            <input type="hidden" name="token" id="token" class="form-control" value={{$token}}>
                            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
</form>
   @endsection