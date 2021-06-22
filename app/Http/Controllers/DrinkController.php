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
        $validatedData = $request->validate([
            'shop' => 'required|max:255',
            'drink' => 'required|max:255',
            'customize' => 'required',
            'price' => 'required|integer',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $data = ['user_id' => \Auth::id(), 'shop' => $form['shop'], 'drink' => $form['drink'], 'customize' => $form['customize'], 'price' => $form['price']];

        if ($request->hasFile('image')) {
            
            $request->file('image')->store('/public/images');
            $data = [
                'user_id' => \Auth::id(), 
                'shop' => $form['shop'], 
                'drink' => $form['drink'], 
                'customize' => $form['customize'], 
                'price' => $form['price'], 
                'image' => $request->file('image')->hashName(),
            ];
        
        } else {

            $data = [
                'user_id' => \Auth::id(), 
                'shop' => $form['shop'], 
                'drink' => $form['drink'], 
                'customize' => $form['customize'], 
                'price' => $form['price'], 
            ];

        }

        
        $drink->create($data);

        return redirect('/');
    }


}
