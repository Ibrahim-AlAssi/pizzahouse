<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;


class PizzaController extends Controller
{

  public function index()
  {
    // get data from a database
    $pizzas = Pizza::all();


    return view('pizzas.index', compact('pizzas'));
  }

  public function show(Pizza $pizza)
  {
    return view('pizzas.show', compact('pizza'));
  }
  public function create()
  {

    return view('pizzas.create');
  }
  public function store(Request $request)
  {

    Pizza::create($request->validate([
      'name'      => 'required',
      'base'      => 'required',
      'type'      => 'required',
      'toppings'  => 'required',
    ]));

    // error_log($pizza);

    return redirect('/')->with('mssg', 'thank for order');
  }
  public function destroy(Pizza $pizza)
  {
    $pizza->delete();
    return redirect('/pizzas');
  }
}