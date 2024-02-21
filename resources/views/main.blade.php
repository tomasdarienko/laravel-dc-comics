@extends('layout.app')


@section('content')

<div class="bg-black">
     <div class="container">
          <div class="row">

               @foreach($comics as $comic)
               <div class="col-2">
                    <!-- <a href="route('single',['param' => $comic['id']])"> -->
                         <div class="carta">

                              <img src="{{ $comic['thumb']}}" alt="" class="img-fluid">
                              <h5>{{ $comic['title']}}</h5>
                         </div>
                    <!-- </a> -->
               </div>
               @endforeach

          </div> 
     </div>
</div>
<div class="bg-primary">
     <div class="container">
          <div class="row striscia">
               <div class="col-2">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
                    <h4>digital comics</h4>
               </div>
               <div class="col-2">
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
                    <h4>merchandise</h4>
               </div>
               <div class="col-2">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
                    <h4>shop</h4>
               </div>
               <div class="col-2">
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
                    <h4>subscriptions</h4>
               </div>
               <div class="col-2">
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
                    <h4>power visa</h4>
               </div>
          </div>
     </div>
</div>

@endsection