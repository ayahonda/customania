<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;
use App\User;


class DrinkController extends Controller
{
    public function index()
    {
        $drinks = Drink::orderBy('created_at', 'DESC')->get();
        return view('top', compact('drinks'));
    }

    public function create()
    {
        return view('post');
    }

    public function store(Request $request)
    {

        $drink = new Drink;
        $form = $request->all();
        $data = ['user_id' => \Auth::id(), 'shop' => $form['shop'], 'drink' => $form['drink'], 'customize' => $form['customize'], 'price' => $form['price']];
        
        $drink->create($data);

        return redirect('/');
    }


}
