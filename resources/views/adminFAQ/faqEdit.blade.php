@extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')
@section('content')
    <br>
    <div class="card text-center">

        <div class="card-body">
            <h5 class="card-title">Categories</h5>
            <p class="card-text">Down here you can edit categories and there qoustions and add some</p>

        </div>

    </div>

    <br>

    @foreach ($categories as $categorie)


        <div class="card shadow-lg p-3 mb-5 bg-body rounded " style="margin-right:auto; margin-left:auto; width: 50%; ">
            <div class="card-body">
                <h5 class="card-title">{{ $categorie->name }}</h5>
                <p class="card-text">{{ $categorie->summary }}
                <p>
                    <a href="/FAQ/categorie/{{ $categorie->id }}/edit" class="btn btn-primary">edit categorie</a>
                    <a href="/FAQ/categorie/{{ $categorie->id }}/delete" class="btn btn-primary">delete categorie</a>
                    <a href="/FAQ/categorie/{{ $categorie->id }}/edit/questions" class="btn btn-primary">edit
                        questions</a>
                    <a href="/FAQ/question/add" class="btn btn-primary">add question</a>
            </div>
        </div>

    @endforeach
    <br>

    @if (Session::has('succes'))
        <div class="alert alert-success">
            {{ Session::get('succes') }}
        </div>
    @endif
@endsection
