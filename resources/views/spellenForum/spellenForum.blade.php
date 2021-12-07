@extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')
@section('content')

    <br>
    <div class="container">
        <div class="col-md-12">
            @foreach ($spellen as $spel)
                <h1>{{ $spel->title }}</h1>
                @foreach ($spel->Leeftijdsgroepen as $leeftijdsgroep)
                    <span class="badge badge-warning">{{ $leeftijdsgroep->name }}</span>
                @endforeach

                <p>{{ $spel->explenation }}</p>
                <div>

                </div>
                <hr><br>

            @endforeach

        </div>
    </div>

@endsection
