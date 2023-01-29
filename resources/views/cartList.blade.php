@extends('master')
@section('content')
    <div class="custom-product">
        <div class="col-sm-10">
            <div class="">
                <a class="go"href="/">Go Back</a>
                <h4> Your Products</h4>
                <a href="/ordernow" class="btn btn-success go ">Order Now</a><br><br>
                @foreach ($products as $item)
                    <div class="row searched-item cart-list">
                        <div class="col-sm-3">
                            <a href="detail/{{ $item->id }}">
                                <img class="trending-img" src="{{ $item->gallery }}" alt="">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <div class="">
                                <h3><a href="detail/{{ $item->id }}">{{ $item->name }}</a></h3>
                                <h5>{{ $item->description }}</h5>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <a href="/removecart/{{ $item->cart_id }}"class="btn btn-warning"> Remove </a>
                        </div>
                    </div>
                @endforeach
                <a href="ordernow" class="btn btn-success go">Order Now</a>
            </div>
        </div>
    </div>
@endsection
