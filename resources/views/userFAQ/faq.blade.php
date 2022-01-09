@extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')
@section('content')
    <br>
    <div class="card text-center">

        <div class="card-body">
            <h5 class="card-title">Frequently-asked questions</h5>
            <p class="card-text">Down here you see which questions is asked frequently </p>

        </div>

    </div>
    <br>

    <h1 style="text-align:center;">Categories</h1>
    <br>
    @foreach ($categories as $categorie)
        <div class="col-sm-6" style="margin:auto;">
            <div class="card  shadow-lg p-3 mb-5 bg-body rounded">
                <div class="card-body">
                    <h2 class="card-title">{{ $categorie->name }}</h2>
                    <p class="card-text">{{ $categorie->summary }}</p>
                    <a href="/FAQ/{{ $categorie->id }}/show" class="btn btn-primary"
                        style="position: absolute; bottom: 1em; right: 1em; width: 130px; text-align:right;">Go to
                        questions</a>
                </div>
            </div>
        </div>
        </div>
    @endforeach

@endsection
