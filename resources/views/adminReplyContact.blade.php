@extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')
@section('content')
    <form action="" method="post">
        <div class="card">
            <div class="card-header">
                Form of user
            </div>
            <div class="card-body">
                <h5 class="card-title">Name: {{ $contact->name }}</h5>
                <p class="card-text">Message: {{ $contact->message }}</p>
            </div>
        </div>


        <div class="card">
            <div class="card-header">
                Reply Admin
            </div>
            <div class="card-body">
                <h5 class="card-title">Name: <input type="text" id="name" name="name"> </h5>
                @if ($errors->has('name'))
                    <div class="error">
                        {{ $errors->first('name') }}
                @endif
            </div>
            <p class="card-text">Message: <textarea id="message" name="message" rows="4" cols="50">
    </textarea>
                @if ($errors->has('message'))
                    <div class="error">
                        {{ $errors->first('message') }}
                @endif
        </div>
        </p>

        @csrf
        <input type="submit" value="Reply">
        </div>
        </div>


    </form>



@endsection
