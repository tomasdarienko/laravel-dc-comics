@extends('layout.app')


@section('content')


<div class="container">
     <div class="row">
          <div class="col-12">
               <h1 class="d-flex justify-content-center p-5">Aggiungi Un Nuovo Fumetto</h1>

                <form action="{{route('comics.store')}}" method="post">

                @csrf

                    <div class="form-group my-3">
                         <input type="text" name="title" id="title" class="form-control" placeholder="title" required>
                    </div>
                    <div class="form-group my-3">
                         <input type="textarea" name="description" id="description" class="form-control " placeholder="description" required>
                    </div>
                    <div class="form-group my-3">
                         <input type="text" name="thumb" id="thumb" class="form-control" placeholder="thumb" required>
                    </div>
                    <div class="form-group my-3">
                         <input type="text" name="price" id="price" class="form-control" placeholder="price" required>
                    </div>
                    <div class="form-group my-3">
                         <input type="text" name="series" id="series" class="form-control" placeholder="series" required>
                    </div>
                    <div class="form-group my-3">
                         <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="sale date" required>
                    </div>
                    <div class="form-group my-3">
                         <input type="text" name="type" id="type" class="form-control" placeholder="type" required>
                    </div>
                    <div class="form-group my-3">
                         <input type="text" name="artists" id="artists" class="form-control" placeholder="artists" required>
                    </div>
                    <div class="form-group my-3">
                         <input type="text" name="writers" id="writers" class="form-control" placeholder="writers" required>
                    </div>
                    <div class="form-group my-3">
                         <button type="submit" class="btn btn-success">salva</button>
                    </div>
               </form>
          </div>
     </div>
</div>
@endsection