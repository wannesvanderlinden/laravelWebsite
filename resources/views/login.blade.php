
@extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')

@section('content')


    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Email:</label><br>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group"  class="text-right">
                            <div>  
                             <a href="/forgot-password" class="text-info">Forgot password?</a>
                            </div>
                         
                            <br>
                            @csrf
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>




                            <div id="register-link" class="text-right">
                            
                                <a href="/regristation" class="text-info">Register here</a>
                            </div>

                             
                            
                        </form>
                        @if($errors->has('email'))
                        <div class="error">
            {{ $errors->first('email') }}
             @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
