@extends('layouts.layout')

@section('content')
<
   <div class ="wrapper create-pizza"> 
       <h1>create a new pizza</h1>
       <form action ="/pizzas" method="post">
       @csrf
           <label for="name" >yourname:</label>
           <input type="text" id="name" name="name">
           <label for="name" >choose pizza</label>
<select name="type" id="type">
            <option value ="margarita">margarita</option>
            <option value ="hawaliian">hawaliian</option>
            <option value ="veg supreme">veg supreme</option>
            <option value ="volcano">volcano</option>
</select>
<label for="base" >choose base </label>
<select name="base" id="base">
            <option value ="chessy crust">chessy crust</option>
            <option value ="garlic crust">garlic crust</option>
            <option value ="thin & cripsy">thin & cripsy</option>
            <option value ="thick">thick</option>
</select>
<filedset>
<br />
   <label>Extra toppings</label> 
   <input type="checkbox" name ="toppings[]" value="mushrooms"> Mushrooms <br />
   <input type="checkbox" name ="toppings[]" value="perpers"> perpers <br />
   <input type="checkbox" name ="toppings[]" value="garlic"> garlic <br />
   <input type="checkbox" name ="toppings[]" value="olives"> olives <br />


</filedset>
<input type="submit" value="Order Pizza">

</form>
   </div>

@endsection
