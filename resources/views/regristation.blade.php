@extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')
@section('content')


    @if ($errors->has('email') || $errors->has('username') || $errors->has('birthday') || $errors->has('name') || $errors->has('password'))

        <div class="alert alert-danger" role="alert">
            You let somthing open!
        </div>

    @endif
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                            <form action="" method="post">

                                <div class="form-outline mb-4">
                                    <textarea name="name" id="name" cols="30" rows="1"
                                        class="form-control form-control-lg"></textarea>
                                    <label class="form-label" for="name">Your Name</label>

                                </div>
                                <div class="form-outline mb-4">
                                    <textarea name="username" id="username" cols="30" rows="1"
                                        class="form-control form-control-lg"></textarea>
                                    <label class="form-label" for="username">username</label>
                                </div>

                                <div class="form-outline mb-4">

                                    <input type="email" name="email" id="email" class="form-control form-control-lg">
                                    <label class="form-label" for="email">Your Email</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" name="password" id="password"
                                        class="form-control form-control-lg">
                                    <label class="form-label" for="password">Password</label>


                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="birthday">Your birthday</label>
                                        <input type="date" name="birthday" id="birthday"
                                            class="form-control form-control-lg">
                                    </div>



                                    @if (Session::has('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                        </div>
                                    @endif
                                </div>





                                <div class="d-flex justify-content-center">
                                    @csrf
                                    <button type="submit"
                                        class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                </div>

                                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="/login"
                                        class="fw-bold text-body"><u>Login here</u></a></p>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
