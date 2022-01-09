@extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')
@section('content')



    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="content">Title</label>
            <textarea class="form-control" id="title" rows="1" width="5" name="title">{{ $new->title }}</textarea>
        </div>

        <div class="form-group">
            <label for="content">Story</label>
            <textarea class="form-control" id="content" name="content" rows="3">{{ $new->content }}</textarea>
        </div>


        <div class="form-group">
            <label for="photo">Attach a photograph</label>
            <input type="file" name="photo" id="photo" accept="image/*" class="form-control-file">
        </div>
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        @csrf
        <div class="mb-3">
            <button type="submit">Save</button>
        </div>
    </form>
@endsection
