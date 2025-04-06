@extends('coffee_shop/head')
@section('title','Coffee shop')
@section('links')

@endsection

@include('coffee_shop/navbar')


  <div class="flex min-h-screen">
        @include('coffee_shop/sidebar')

        @if(session()->has('message'))
        {{ session()->get('message') }}
        @endif
        <div id="app">
            <create-product :category="{{ json_encode($category) }}"></create-product>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
  </div>
@include('coffee_shop/footer')


