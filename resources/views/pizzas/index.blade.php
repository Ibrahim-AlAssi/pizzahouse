@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-index">

<h1>pizza orders</h1>
        @foreach($pizzas as $pizza)
          <div class="pizza-item">
            <img src="/img/pizaanew.jpg" alt="pizza">
        <h4><a href="/pizzas/{{ $pizza ->id }}" >  {{  $pizza->name  }} </a></h4>
          </div>
        @endforeach

<div>
@endsection
