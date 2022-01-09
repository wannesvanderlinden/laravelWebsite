@extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')
@section('content')
    <br>
    <div class="card shadow-lg p-3 mb-5 bg-body rounded" style=" width:50%; margin:auto;">
        <div class="card text-center">

            <div class="card-body">

                <img src="{{ asset('storage/profile/' . Auth::user()->img) }}" class="rounded-circle" alt="..."
                    width="100%" height="100%" style=" width:auto;
                max-width:300px;">
                <br>
            </div>

        </div>
        <br>

        @if ($errors->has('username'))
            <div class="alert alert-danger" role="alert">
                {{ $errors->first('username') }}
            </div>
        @elseif($errors->has('name'))
            <div class="alert alert-danger" role="alert">
                {{ $errors->first('name') }}
            </div>
        @elseif($errors->has('aboutMe'))
            <div class="alert alert-danger" role="alert">
                {{ $errors->first('aboutMe') }}
            </div>
        @endif

        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-row">


                <div class="form-group col-md-6">
                    <label for="disabledTextInput" class="form-label">Username:</label>
                    <input type="text" id="username" name="username" class="form-control"
                        value="{{ Auth::user()->username }}">
                </div>


                <div class="form-group col-md-6">
                    <label for="disabledTextInput" class="form-label">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ Auth::user()->name }}">
                </div>
            </div>

            <div class="mb-3">

                <label for="disabledTextInput" class="form-label">Birthday:</label>
                <input type="date" id="birthday" name="birthday" class="form-control"
                    value="{{ Auth::user()->birthday }}">
            </div>


            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">AboutMe:</label>
                <textarea name="aboutMe" id="aboutMe" cols="60%" rows="10" width="100%"
                    style="display:block;">{{ Auth::user()->aboutMe }}   </textarea>
            </div>
            <div class="form-group">
                <label for="photo">Attach a photograph</label>
                <input type="file" name="photo" id="photo" accept="image/*" class="form-control-file">
            </div>

            @csrf
            <div class="mb-3">
                <button type="submit">Save</button>
            </div>
    </div>
    </form>
@endsection
