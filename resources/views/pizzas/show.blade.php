@extends('layouts.layout')

@section('content')
<div class = "wrapper pizza-work">
    <h1>order for {{ $pizza->name }} </h1>
    <p class="type">type - {{ $pizza->type }} </p>
    <p class="base">base - {{ $pizza->base }} </p>
    <p class="toppings">toppings </p>
 <ul>
     @foreach($pizza->toppings as $topping)
     <li> {{ $topping }} </li>
     @endforeach

</ul>
<form action="/pizzas/{{ $pizza->id }}" method="POST">
@csrf
@method('DELETE')
<button>complet order</button>
</form>

</div>
<a href="/pizzas" class ="back"><- back to pizzas></a>
@endsection
