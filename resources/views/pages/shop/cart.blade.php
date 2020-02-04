@extends('layouts.app')

@section('title','Cart Page')

@section('header')
<!-- Start Bradcaump area -->
@include('layouts.partials.bradcaump')
<!-- End Bradcaump area -->
@endsection

@section('content')
<!-- cart-main-area start -->
<div class="cart-main-area ptb--100 bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="fa fa-cog fa-spin"></i><strong>Success!</strong> {{ session()->get('success')}}
                </div>
                @endif

                @if (count($errors) > 0)
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if (Cart::count() > 0)
                <div class="table-content table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th class="product-thumbnail">products</th>
                                <th class="product-name">name of products</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Total</th>
                                <th class="product-remove">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (Cart::content() as $item)
                            <tr>
                                <td class="product-thumbnail">
                                    <a href="{{ route('shop.show', $item->model->slug) }}">
                                        <img src="/assets/images/product-2/cart-img/1.jpg"
                                            alt="{{ $item->model->name }}" />
                                    </a>
                                </td>
                                <td class="product-name"><a
                                        href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->name }}</a>
                                    <ul class="pro__prize">
                                        <li class="old__prize">$82.5</li>
                                        <li>$75.2</li>
                                    </ul>
                                </td>
                                <td class="product-price"><span class="amount">{{ $item->model->price }}</span></td>
                                <td class="product-quantity"><input type="number" value="1" /></td>
                                <td class="product-subtotal">£165.00</td>
                                <td class="product-remove">
                                    <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="cart cart__delete" title="Remove">
                                            <i class="icon-trash icons"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="buttons-cart--inner">
                            <div class="buttons-cart">
                                <a href="#">Continue Shopping</a>
                            </div>
                            <div class="buttons-cart checkout--btn">
                                <a href="#">update</a>
                                <a href="#">checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="ht__coupon__code">
                            <span>enter your discount code</span>
                            <div class="coupon__box">
                                <input type="text" placeholder="">
                                <div class="ht__cp__btn">
                                    <a href="#">enter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 smt-40 xmt-40">
                        <div class="htc__cart__total">
                            <h6>cart total</h6>
                            <div class="cart__desk__list">
                                <ul class="cart__desc">
                                    <li>cart subtotal</li>
                                    <li>tax</li>
                                    <li>shipping</li>
                                </ul>
                                <ul class="cart__price">
                                    <li>{{ Cart::subtotal() }}</li>
                                    <li>$9.00</li>
                                    <li>0</li>
                                </ul>
                            </div>
                            <div class="cart__total">
                                <span>order total</span>
                                <span>{{ Cart::total() }}</span>
                            </div>
                            <ul class="payment__btn">
                                <li><a href="#">continue shopping</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @else

                <h4>No items in Cart!</h4>
                <a href="{{ route('shop.index') }}" class="fr__btn">Continue Shopping</a>

                @endif
            </div>
        </div>
    </div>
</div>
<!-- cart-main-area end -->
<!-- Start Brand Area -->
@include('layouts.partials.brand')
<!-- End Brand Area -->
@endsection