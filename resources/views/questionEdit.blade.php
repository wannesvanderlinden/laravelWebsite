@extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')
@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">answer</th>
                <th scope="col"> edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($questions as $question)
                <tr>
                    <th scope="row">{{ $question->id }}</th>
                    <td>{{ $question->title }}</td>
                    <td>{{ $question->answer }}</td>
                    <td> <a class="nav-link" href="/FAQ/questions/{{ $question->id }}/edit">Edit</a></td>
                    <td> <a class="nav-link" href="/FAQ/questions/{{ $question->id }}/delete">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    @endsection
