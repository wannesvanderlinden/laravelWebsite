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
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        <fieldset disabled>




            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="disabledTextInput" class="form-label">Username:</label>
                    <input type="text" id="disabledTextInput" class="form-control"
                        placeholder="{{ Auth::user()->username }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="disabledTextInput" class="form-label">Name:</label>
                    <input type="text" id="disabledTextInput" class="form-control"
                        placeholder="{{ Auth::user()->name }}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="disabledTextInput" class="form-label">Created at:</label>
                    <input type="text" id="disabledTextInput" class="form-control"
                        placeholder="{{ Auth::user()->created_at }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="disabledTextInput" class="form-label">Birthday:</label>
                    <input type="text" id="disabledTextInput" class="form-control"
                        placeholder="{{ Auth::user()->birthday }}">
                </div>
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">AboutMe:</label>
                <textarea name="aboutMe" id="aboutMe" cols="60%" rows="10" width="100%" disabled
                    style="display:block;">{{ Auth::user()->aboutMe }}   </textarea>
            </div>


        </fieldset>
        <div class="mb-3">
            <button type="button" onclick="window.location='http://127.0.0.1:8000/profile/edit'"
                style="  margin-left:80%;">Edit data</button>
        </div>
    </div>
@endsection
