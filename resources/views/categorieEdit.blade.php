@extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')
@section('content')

    <form action="/FAQ/categorie/{{ $categorie->id }}" method="post">
        @method('PUT')
        <legend>Edit Categorie</legend>
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $categorie->name }}">
        </div>
        <div class="mb-3">
            <label for="summary" class="form-label">Summary:</label>
            <input type="text" id="summary" name="summary" class="form-control" value="{{ $categorie->summary }}">
        </div>

        @csrf
        <div class="mb-3">
            <button type="submit">Save</button>
        </div>
    </form>
@endsection
