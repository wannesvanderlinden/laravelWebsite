  @extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')
  @section('content')
      <form action="" method="post">
          @csrf
          <div class="form-group">
              <label for="username" class="text-info">Email:</label><br>
              <input type="text" name="email" id="email" class="form-control">
          </div>
          <div class="form-group">
              <div class="col-md-12 text-right">
                  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
          </div>
      </form>
      @if ($errors->has('email'))
          <div class="alert alert-danger" role="alert">
              {{ $errors->first('email') }}
          </div>
          @if (Session::has(' status'))
              <div class="alert alert-success">
                  {{ Session::get(' status') }}
              </div>
          @endif


      @endif
  @endsection
