@extends('layouts.master')

@section('title', 'Furni')

@section('hero')
<div class="hero">
    <div class="container">
        <div class="intro-excerpt">
            <h1>Shop</h1>   
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="untree_co-section product-section before-footer-section">
    <div class="container">
        <div class="row">
        @foreach ($data as $item)
            <div class="col-12 col-md-4 col-lg-3 mb-5">
                <a class="product-item" href="#">
                    <img src="{{ asset('assets/images/' . $item['image']) }}" class="img-fluid product-thumbnail">
                    <h3 class="product-title">{{ $item['title'] }}</h3>
                    <strong class="product-price">{{ $item['product-price'] }}</strong>
                    <span class="icon-cross">
                        <img src="{{ asset('assets/images/cross.svg') }}" class="img-fluid">
                    </span>
                </a>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection


