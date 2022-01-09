@extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')

@section('content')
    <br>
    <div class="card text-center" style="opacity: 0.7;">

        <div class="card-body">
            <h5 class="card-title">Active news</h5>
            <p class="card-text">Down here you can see the news items</p>

        </div>

    </div>
    <br>


    @foreach ($news as $new)



        @csrf
        <div class="card  shadow-lg p-3 mb-5 bg-body rounded"
            style="width: 50%; height:5%; margin-right:auto; margin-left:auto; ">
            <img class="card-img-top" src="{{ asset('storage/news/' . $new->img) }}" alt="Card image cap" style=" width:auto;
                                max-width:900px;">
            <div class="card-body">
                <h5 class="card-title">{{ $new->title }}</h5>
                <p class="card-text">{{ $new->content }}</p>
                <p class="card-text"><small class="text-muted">Created at:{{ $new->created_at }}
                    </small></p>


                @if (Auth::user() !== null)
                    <form action="" method="post">
                        @csrf
                        <label class="form-label" for="reaction">reaction</label>
                        <input type="text" name="reaction" id="reaction" width="100px">
                        <button type="submit">post</button>
                        <input type="hidden" id="news_id" name="news_id" value="{{ $new->id }}">
                @endif
            </div>
            <hr>
            @foreach ($new->reactions as $reaction)

                <br>
                <div class="card" style="width: 100%;">
                    <div class="card-header">
                        Reaction: <a class="nav-link"
                            href="/profile/user/{{ $reaction->user_id }}">{{ $reaction->name }}</a>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>{{ $reaction->content }}</p>
                            <footer class="blockquote-footer">{{ $reaction->created_at }}</footer>
                        </blockquote>
                    </div>
                </div>

            @endforeach


            @if ($errors->has('reaction'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('reaction') }}
                </div>

            @endif

        </div>
        </form>


        <br>

    @endforeach
    </div>
    <br>
@endsection
