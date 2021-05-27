
@extends('layouts.app')

@section('content')
<h1 class='pagetitle'>ドリンク投稿ページ</h1>
<div class="row justify-content-center container">
    <div class="col-md-10">
      <form method='POST' action="{{ route('store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label>ショップ名</label>
                <input type='text' class='form-control' name='shop' placeholder='ショップ名を入力'>
              <div class="form-group">
                <label>ドリンク名</label>
                <input type='text' class='form-control' name='drink' placeholder='ドリンク名を入力'>
              </div>
              <div class="form-group">
                <label>カスタマイズ内容</label>
                <input type='text' class='customize form-control my-3' name='customize' placeholder='カスタマイズ内容を入力'>
                <input type='text' class='customize form-control my-3' name='customize'>
                <input type='text' class='customize form-control my-3' name='customize'>
              </div>
              <div class="form-group">
                <label>価格</label>
                <input type='integer' class='form-control' name='price' placeholder='価格を入力'>円
              <div class="form-group">
                <label for="file1">画像</label>
                <input type="file" id="file1" name='image' class="form-control-file">
              </div>
              <input type='submit' class='btn btn-primary' value='ドリンクを登録'>
            </div>
        </div>
      </form>
    </div>
</div>
@endsection
