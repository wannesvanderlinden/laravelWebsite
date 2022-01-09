@extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')
@section('content')
    @if ($questions->isEmpty())
        <h1 style="margin:auto; position: absolute;
                                                                                    top: 50%;
                                                                                    left: 50%;
                                                                                    margin-right: -50%;
                                                                                    transform: translate(-50%, -50%)">No
            questions
            at
            the
            moment
        </h1>
    @endif
    <br>
    @foreach ($questions as $question)

        <div class="card">
            <div class="card-header">
                <b> {{ $question->title }}</b>
            </div>
            <div class="card-body">

                <p class="card-text">{{ $question->answer }}</p>
            </div>
        </div>

    @endforeach
    <br>
    @if (Auth::user() !== null)
        <p>If you want to pose a question for the FAQ put it here</p>
        <form class="form-horizontal " action="" method="post">
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Question" name="question">
                </div>
                <div class="col">
                    @csrf
                    <button type="submit" class="btn btn-primary">Pose</button>
                </div>
            </div>
        </form>
    @endif



@endsection
