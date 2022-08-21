@extends('layouts.app')

@section('title' , 'Orders')

@section('content')
    <section>
        <div class="container">
            <h1>The Orders</h1>
                <table class="table">
                    <thead>
                        <th>Id</th>
                        <th>The Product</th>
                        <th>Buyer</th>
                        <th>Seller</th>
                        <th>Details</th>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order )
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->product_id }}</td>
                                <td>{{ $order->buyer_id }}</td>
                                <td>{{ $order->seller_id }}</td>
                                <td><a href="{{ route('admin.order.show' , $order) }}">Go</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </section>
@endsection
