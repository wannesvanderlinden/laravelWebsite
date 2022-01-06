@extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')
@section('content')

    <h1>Categories</h1>
    @foreach ($categories as $categorie)
        <div class="col-sm-6">
            <div class="card  shadow-lg p-3 mb-5 bg-body rounded">
                <div class="card-body">
                    <h5 class="card-title">{{ $categorie->name }}</h5>
                    <p class="card-text">{{ $categorie->summary }}</p>
                    <a href="/FAQ/{{ $categorie->id }}/show" class="btn btn-primary">Go to questions</a>
                </div>
            </div>
        </div>
        </div>
    @endforeach

@endsection
