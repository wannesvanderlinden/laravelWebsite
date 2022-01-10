@extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')
@section('content')
    <br>
    <div class="card text-center">

        <div class="card-body">
            <h5 class="card-title">
                <legend>Create Categorie</legend>
            </h5>
            <p class="card-text">Down here you can create a categorie</p>

        </div>

    </div>
    <br>
    <form action="" method="post">


        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control" value="">
            @if ($errors->has('name'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('name') }}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="summary" class="form-label">Summary:</label>
            <input type="text" id="summary" name="summary" class="form-control" value="">
            @if ($errors->has('summary'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('summary') }}
                </div>
            @endif
        </div>

        @csrf
        <div class="mb-3">
            <button type="submit">create</button>
        </div>
    </form>
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
@endsection
