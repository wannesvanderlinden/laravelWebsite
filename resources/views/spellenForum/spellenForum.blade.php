@extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')
@section('content')
    <br>
    <div class="card text-center" style="opacity: 0.7;">

        <div class="card-body">
            <h5 class="card-title">Games</h5>
            <p class="card-text">Down here you see some game ideas</p>

        </div>

    </div>
    <br>
    <br>
    <div class="card  shadow-lg p-3 mb-5 bg-body rounded" style="opacity: 0.7;">
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
    </div>

@endsection
