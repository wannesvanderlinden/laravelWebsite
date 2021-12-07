


@extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')
@section('content')

@foreach ($questions as $question)
    
<div class="card">
  <div class="card-header">
  <b> {{$question->title}}</b>
  </div>
  <div class="card-body">
    
    <p class="card-text">{{$question->answer}}</p>
  </div>
</div>

  @endforeach


  
  @endsection

