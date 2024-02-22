@extends('layout.app')


@section('content')


<div class="container">
     <div class="row">
          <div class="col-12">
               <h1 class="d-flex justify-content-center p-5">Modifica Fumetto</h1>

               <form action="{{route('comics.update',$comic->id)}}" method="post">

                    @csrf
                    @method('PUT')
                    <div class="form-group my-3">
                         <input type="text" name="title" id="title" class="form-control" placeholder="title" required
                              value="{{ $comic->title}}">
                    </div>
                    <div class="form-group my-3">
                         <textarea name="description" id="description" class="form-control" rows="9" cols="100"
                              placeholder="description" required>{{ $comic->description}}
                         </textarea>
                    </div>
                    <div class="form-group my-3">
                         <input type="text" name="thumb" id="thumb" class="form-control" placeholder="thumb" required
                              value="{{ $comic->thumb}}">
                    </div>
                    <div class="form-group my-3">
                         <input type="text" name="price" id="price" class="form-control" placeholder="price" required
                              value="{{ $comic->price}}">
                    </div>
                    <div class="form-group my-3">
                         <input type="text" name="series" id="series" class="form-control" placeholder="series" required
                              value="{{ $comic->series}}">
                    </div>
                    <div class="form-group my-3">
                         <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="sale date"
                              required value="{{ $comic->sale_date}}">
                    </div>
                    <div class="form-group my-3">
                         <input type="text" name="type" id="type" class="form-control" placeholder="type" required
                              value="{{ $comic->type}}">
                    </div>
                    <div class="form-group my-3">
                         <input type="text" name="artists" id="artists" class="form-control" placeholder="artists"
                              required value="{{ $comic->artists}}">
                    </div>
                    <div class="form-group my-3">
                         <input type="text" name="writers" id="writers" class="form-control" placeholder="writers"
                              required value="{{ $comic->writers}}">
                    </div>
                    <div class="form-group my-3">
                         <button class="btn btn-success">salva</button>
                    </div>
               </form>
          </div>
     </div>
</div>
@endsection