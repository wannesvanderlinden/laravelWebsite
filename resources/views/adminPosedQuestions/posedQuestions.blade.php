@extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')
@section('content')
    @if ($questions->isEmpty())
        <h1
            style="margin:auto; position: absolute;
                                                                                            top: 50%;
                                                                                            left: 50%;
                                                                                            margin-right: -50%;
                                                                                            transform: translate(-50%, -50%)">
            No posed
            questions
            at
            the
            moment
        </h1>
    @endif
    <br>

    <br>
    @foreach ($questions as $question)
        <form action="" method="post">
            <div class="card  shadow-lg p-3 mb-5 bg-body rounded"
                style="width: 50%; height:5%; margin-right:auto; margin-left:auto; ">
                <div class="card-body">
                    <h5 class="card-title">Question of user: {{ $question->question }}</h5>
                    <input type="hidden" id="title" name="title" value="{{ $question->question }}">
                    <input type="hidden" id="id" name="posedId" value="{{ $question->id }}">
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Answer:</label>
                        <textarea name="answer" id="aboutMe" cols="60%" rows="10" width="100%"
                            style="display:block;">   </textarea>
                    </div>
                    <label for="categories">Choose a categorie:</label>
                    <select name="categories" id="categories">
                        @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                        @endforeach
                    </select>
                </div> @csrf
                <div class="mb-3">
                    <button type="submit">add</button>
                </div>
        </form>
        <a href="/FAQ/question/posed/delete/{{ $question->id }}" class="btn btn-primary">delete</a>
        </div>
        @if ($errors->has('title'))
            <div class="alert alert-danger" role="alert">
                {{ $errors->first('title') }}
            </div>

        @endif
        @if ($errors->has('answer'))
            <div class="alert alert-danger" role="alert">
                {{ $errors->first('answer') }}
            </div>

        @endif
        @if ($errors->has('categories'))
            <div class="alert alert-danger" role="alert">
                {{ $errors->first('categories') }}
            </div>

        @endif


    @endforeach

@endsection
