<div class="menumenu__container clearfix">
    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
        <div class="logo">
            <a href="index.html"><img src="/assets/images/logo/4.png" alt="logo images"></a>
        </div>
    </div>
    <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
        <nav class="main__menu__nav hidden-xs hidden-sm">
            <ul class="main__menu">
                @foreach ($items as $menu_item)
                <li class="active">
                    <a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a>
                </li>
                @endforeach
            </ul>
        </nav>

        <div class="mobile-menu clearfix visible-xs visible-sm">
            <nav id="mobile_dropdown">
                <ul>
                    @foreach ($items as $menu_item)
                    <li class="">
                        <a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a>
                    </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
    <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
        <div class="header__right">
            <div class="header__search search search__open">
                <a href=""><i class="icon-magnifier icons"></i></a>
            </div>
            <div class="header__account">
                <a href="" class="user__menu"><i class="icon-user icons"></i></a>
            </div>
            <div class="htc__shopping__cart">
                <a class="cart__menu" href=""><i class="icon-handbag icons"></i></a>
                @if (Cart::instance('default')->count() > 0)
                <a href="{{ route('cart.index') }}"><span class="htc__qua">{{ Cart::instance('default')->count() }}</span></a>
                @endif
            </div>
        </div>
    </div>
</div>