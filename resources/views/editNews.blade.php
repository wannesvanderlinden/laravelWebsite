

@extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')
 
   @section('content')
@foreach ($news as $new )
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{asset('storage/news/'.$new->img)}}" alt="Card image cap">
  <div class="card-body">
  <h5 class="card-title">{{$new->title}}</h5>
    <p class="card-text">{{$new->content}}</p>
    <a href="/news/{{$new->id}}/edit" class="btn btn-primary">edit</a>
    <a href="/news/{{$new->id}}/delete" class="btn btn-primary">delete</a>
  </div>
</div>
@endforeach
  @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
@endsection
