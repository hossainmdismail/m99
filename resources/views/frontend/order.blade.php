@extends('frontend.layouts.app')

@section('content')
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ route('index') }}" rel="nofollow">Home</a>
                <span></span>
                <a href="{{ route('profile') }}" rel="nofollow">Profile</a>
                <span></span> Order
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-6 m-auto">
                <form method="post" action="{{ route('profile.order.update') }}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <h4>Order ID</h4>
                            <strong>#{{ $order->order_id }}</strong>
                        </div>
                        <div class="form-group col-md-6 text-end">
                            <h4>Status</h4>
                            <p>{{ $order->order_status }}</p>
                        </div>
                        <div class="form-group col-md-12">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Unit Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($order->products)
                                        @foreach ($order->products as $product)
                                            <tr>
                                                @if ($product->product)
                                                    <input type="hidden" name="shipping"
                                                        value="{{ $order->shipping_charge }}">
                                                    <input type="hidden" name="order_id" value="{{ $order->id }}">
                                                    <input type="hidden" name="id[]" value="{{ $product->id }}">
                                                    <td>{{ $product->product->product->name }}</td>
                                                    <td>{{ $product->product->product->getFinalPrice() }}</td>
                                                    <td>
                                                        <input class="form-control" type="number" name="qnt[]"
                                                            value="{{ $product->qnt }}">
                                                    </td>
                                                    <td>৳ {{ $product->price * $product->qnt }}</td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-fill-out submit" name="submit"
                                value="Submit">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
