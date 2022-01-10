@extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')
@section('content')

    <form action="/FAQ/question/{{ $question->id }}/save" method="post">
        @method('PUT')
        <legend>Edit categorie {{ $question->categorie->name }}</legend>


        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $question->title }}">
            @if ($errors->has('title'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('title') }}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="answer" class="form-label">answer:</label>
            <input type="text" id="answer" name="answer" class="form-control" value="{{ $question->answer }}">
            @if ($errors->has('answer'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('answer') }}
                </div>
            @endif
        </div>
        <label for="cars">Choose a categorie:</label>
        <select name="categories" id="categories">
            @foreach ($categories as $categorie)
                <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
            @endforeach
        </select>
        @if ($errors->has('categories'))
            <div class="alert alert-danger" role="alert">
                {{ $errors->first('categories') }}
            </div>
        @endif
        <br><br>


        @csrf
        <div class="mb-3">
            <button type="submit">Save</button>
        </div>
    </form>
@endsection
