@extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')

@section('content')
    <br>
    <div class="card text-center">

        <div class="card-body">
            <h5 class="card-title">News manager</h5>
            <p class="card-text">Down here you can see the news items and can delete and edit them</p>

        </div>

    </div>
    <br>
    <div class="row">
        @foreach ($news as $new)


            <div class="col-sm-6 d-flex justify-content-center">
                <div class="card shadow-lg p-3 mb-5 bg-body rounded"
                    style="width: 18rem;margin-left:0em; margin-right:0em;margin-top:1em;">
                    <img class="card-img-top" src="{{ asset('storage/news/' . $new->img) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $new->title }}</h5>
                        <p class="card-text">{{ $new->content }}</p>
                        <a href="/news/{{ $new->id }}/edit" class="btn btn-primary">edit</a>
                        <a href="/news/{{ $new->id }}/delete" class="btn btn-primary">delete</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
@endsection
