@extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')
@section('content')

    <form action="" method="post">
        @method('PUT')
        <legend>Add a question</legend>


        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" id="title" name="title" class="form-control" value="">
        </div>
        <div class="mb-3">
            <label for="answer" class="form-label">answer:</label>
            <input type="text" id="answer" name="answer" class="form-control" value="">
        </div>
        <label for="categories">Choose a categorie:</label>
        <select name="categories" id="categories">
            @foreach ($categories as $categorie)
                <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
            @endforeach
        </select>
        <br><br>

        @csrf
        <div class="mb-3">
            <button type="submit">Save</button>
        </div>
    </form>
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
@endsection
