@extends(Auth::user() !==null? (Auth::user()->admin ==1 ? 'layouts.admin' : 'layouts.user'):'layouts.user')
@section('content')
    <br>
    <div class="card text-center">

        <div class="card-body">
            <h5 class="card-title">Game creator</h5>
            <p class="card-text">You can create your game down here</p>

        </div>

    </div>
    <br>
    <form class="form-horizontal " action="" method="post">


        <br>
        <div class="card shadow-lg p-3 mb-5 bg-body rounded" style=" width:50%; margin:auto;">
            <br>
            <div class="form-row">
                <div class="form-group">
                    <label for="formGroupExampleInput" style="  margin:auto;">Title: <input type="text"
                            class="form-control" name="title" id="formGroupExampleInput" placeholder="title"></label>

                </div>
                @if ($errors->has('title'))
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first('title') }}
                    </div>

                @endif
                <div class="card-body">
                    <div class="form-group">
                        <label for="explenation">Explenation:<br> <textarea id="explenation" name="explenation" rows="4"
                                cols="50">   </textarea></label>

                    </div>
                    @if ($errors->has('explenation'))
                        <div class="alert alert-danger" role="alert">
                            {{ $errors->first('explenation') }}
                        </div>


                    @endif
                </div>
                <div class="form-group">
                    <p>
                        Age groups:</p>
                    <input type="checkbox" id="kleuters" name="kleuters" value="2">
                    <label for="kleuters"> kleuters</label><br>
                    <input type="checkbox" id="GrootPlein" name="GrootPlein" value="3">
                    <label for="GrootPlein">Groot Plein</label><br>
                    <input type="checkbox" id="+13" name="plusd" value="1">
                    <label for="+13"> +13</label><br>

                    @csrf
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
@endsection
