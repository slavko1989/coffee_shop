@extends('coffee_shop/head')
@section('title','Coffee shop')
@section('links')

@endsection

@include('coffee_shop/navbar')


  <div class="flex min-h-screen">
        @include('coffee_shop/sidebar')
        <div id="product">
            <product-list  :products="{{ json_encode($products) }}"></product-list>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
  </div>
@include('coffee_shop/footer')


