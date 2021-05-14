@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="my-4 text-center">Enjoy Drink with CUSTOMIZE !</h3>
    <div class="row justify-content-center">
    @foreach($drinks as $drink)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class='image-wrapper'><img class='drink-image img-fluid' src="{{ asset('images/drink-latte.jpg') }}" ></div>
                    <p class='shop'>{{ $drink->shop }}</p>
                    <h3 class='h3 book-title'>{{ $drink->drink }}</h3>
                    <p class='customize'>{{ $drink->customize }}</p>
                    <p class='price'>¥{{ $drink->price }}</p>
                    <p class='user'>{{ $drink->user->name }}</p>
                    <a href=""class='btn btn-secondary detail-btn'>see more</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>

@endsection



