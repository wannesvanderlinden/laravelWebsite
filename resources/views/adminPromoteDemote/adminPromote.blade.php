@extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')
@section('content')


    <table class="table">
        <caption>List of users</caption>
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">username</th>
                <th scope="col">email</th>
                <th scope="col">Admin</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->admin }}</td>
                    @if ($user->admin !== 1)
                        <td> <a href="/user/promote/{{ $user->id }}" class="btn btn-primary">Promote</a></td>


                    @else
                        <td> <a href="/user/demote/{{ $user->id }}" class="btn btn-primary">Demote</a></td>
                    @endif
                </tr>
            @endforeach

        </tbody>
    </table>
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
@endsection
