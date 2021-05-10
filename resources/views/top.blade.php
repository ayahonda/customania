@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Enjoy Drink with Customize !</h3>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class='image-wrapper'><img class='drink-image img-fluid' src="{{ asset('images/drink-latte.jpg') }}" ></div>
                    <p class='shop'>
                        ショップ名
                    </p>
                    <h3 class='h3 book-title'>ドリンク名</h3>
                    <p class='price'>
                        ¥---
                    </p>
                    <p class='user'>
                        ユーザー名
                    </p>
                    <a href=""class='btn btn-secondary detail-btn'>see more</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



