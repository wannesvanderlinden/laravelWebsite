@extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')
@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Message</th>
                <th scope="col"> Email</th>
                <th scope="col"> Send Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($forms as $form)
                @if ($form->isReply == 0)
                    <tr>
                        <th scope="row">{{ $form->id }}</th>
                        <td>{{ $form->name }}</td>
                        <td>{{ $form->message }}</td>
                        <td>{{ $form->email }}</td>
                        <td> <a class="nav-link" href="/admin/{{ $form->id }}/reply">Reply</a></td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
@endsection
