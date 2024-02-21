@extends('layout.app')


@section('content')
<div class="row single_photo">
     <div class="col-12 p-5 bg-primary">
          <img src="{{ $comic['thumb']}}" alt="">
     </div>

</div>
<div class="container ">
     <div class="row py-5">
          <div class="col-8">
               <h2>{{ $comic['title']}}</h2>

               <div class="col-12 prezzo p-2">
                    <div>US price {{ $comic['price']}}</div>
                    <div>AVAILABLE</div>
               </div>

               <p class="my-4">{{ $comic['description']}}</p>
          </div>
          <div class="col-4">
               <img src="{{ Vite::asset('resources/img/adv.jpg')}}" alt="">
          </div>
     </div>
</div>
<div class="bg-secondary">
     <div class="container">
          <div class="row py-5 bg-secondary vw-100">
               <div class="col-12 ">
                    <div class="w-100">
                         <h3>Talent/Specs</h3>
                    </div>
                    <div class="d-flex">
                         <h5>U.S Price: </h5>
                         <p> {{ $comic['price']}}</p>
                    </div>
                    <div class="d-flex">
                         <h5>Series: </h5>
                         <p> {{ $comic['series']}}</p>
                    </div>
                    <div class="d-flex">
                         <h5>On Sale Date: </h5>
                         <p> {{ $comic['sale_date']}}</p>
                    </div>
                    <div class="d-flex">
                         <h5>Type: </h5>
                         <p> {{ $comic['type']}}</p>
                    </div>

               </div>

          </div>
     </div>
</div>
@endsection