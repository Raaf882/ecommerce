@extends('master')
@section('content')
    <div class="custom-product">
        <div class="col-sm-10">
            <div class="">
                <a class="go"href="/">Go Back</a>
                <h4>My Orders</h4>
                @foreach ($orders as $item)
                    <div class="row searched-item cart-list">
                        <div class="col-sm-3">
                            <a href="detail/{{ $item->id }}">
                                <img class="trending-img" src="{{ $item->gallery }}" alt="">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <div class="">
                                <h3><a href="detail/{{ $item->id }}">{{ $item->name }}</a></h3>
                                <h5>Delivery Status: {{ $item->status }}</h5>
                                <h5>Address: {{ $item->address }}</h5>
                                <h5>Payment method: {{ $item->payment_method }}</h5>
                                <h5>Payment Status: {{ $item->payment_status }}</h5>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
