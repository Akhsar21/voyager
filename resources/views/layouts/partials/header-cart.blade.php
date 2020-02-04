<div class="offset__wrapper">
    <!-- Start Search Popap -->
    <div class="search__area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search__inner">
                        <form action="#" method="get">
                            <input placeholder="Search here... " type="text">
                            <button type="submit"></button>
                        </form>
                        <div class="search__close__btn">
                            <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Search Popap -->
    <!-- Start Cart Panel -->
    <div class="shopping__cart">
        <div class="shopping__cart__inner">
            <div class="offsetmenu__close__btn">
                <a href="#"><i class="zmdi zmdi-close"></i></a>
            </div>

            @if (Cart::count() > 0)
            <div class="shp__cart__wrap">
                @foreach (Cart::content() as $item)
                <div class="shp__single__product">
                    <div class="shp__pro__thumb">
                        <a href="{{ route('shop.show', $item->model->slug) }}">
                            <img src="/assets/images/product-2/sm-smg/1.jpg" alt="{ $item->model->name }}">
                        </a>
                    </div>
                    <div class="shp__pro__details">
                        <h2><a href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->name }}</a></h2>
                        <span class="quantity">QTY: 1</span>
                        <span class="shp__price">{{ $item->model->price }}</span>
                    </div>
                    <div class="remove__btn">
                        <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a><button type="submit" class="cart__header">
                                    <i class="zmdi zmdi-close"></i>
                                </button></a>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
            <ul class="shoping__total">
                <li class="subtotal">Subtotal:</li>
                <li class="total__price">{{ Cart::subtotal() }}</li>
            </ul>
            <ul class="shopping__btn">
                <li><a href="{{ route('cart.index') }}">View Cart</a></li>
                <li class="shp__checkout"><a href="checkout.html">Checkout</a></li>
            </ul>
            @else
            <h4>No items in Cart!</h4>
            @endif
        </div>
    </div>
    <!-- End Cart Panel -->
</div>