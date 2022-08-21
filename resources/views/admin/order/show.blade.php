@extends('layouts.app')

@section('title' , 'The' . ' - ' . $order->id . 'Order')

@section('content')
    <section>
        <div class="container">
            <h1>Order Details</h1>
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Order Id: {{ $order->id }}</h5>
                  <p class="card-text">
                      <p>Payment Method : {{ $order->payment_method }}</p>
                      <p>Order's Status : {{ $order->status }}</p>
                      <p>Order's Quantity : {{ $order->quantity }}</p>
                    </p>
                </div>
              </div>
        </div>
    </section>
@endsection
