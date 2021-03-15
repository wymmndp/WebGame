<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="{{asset('asset/bootstrap/dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('asset/hamburgers-master/dist/hamburgers.css')}}">
    <link rel="stylesheet" href="{{asset('user_css/headermenu.css')}}">
    <link rel="stylesheet" href="{{asset('user_css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('user_css/style.css')}}">
    <link rel="stylesheet" href="{{asset('user_css/util.css')}}">
    <link rel="stylesheet" href="{{asset('user_css/requirelogin.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="{{asset('asset/jquery/dist/jquery.js')}}"></script>
    <script src="{{asset('asset/jquery-validation/dist/jquery.validate.js')}}"></script>
    <script src="{{asset('asset/OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/mordernizr.js')}}"></script>
</head>

<body>
    <header class="head_sec">
        <div class="container-fluid">
            <div class="inn_main_head">
                <button class="hamburger hamburger--minus" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
                <a href="{{URL::to('/')}}" title="Home" rel="home" id="logo" class="navbar-brand">
                    Addicting Games
                </a>
                <div class="search_box hidden-md">
                    <div class="inn_search_box">
                        <form action="{{route('searchGame')}}" accept-charset="UTF-8" method="GET" id="search-block-form">
                            <div class="form-item form-type-textfield form-item-search-block-form">
                                <label for="edit-search-block-form--2" class="element-invisible">Search</label>
                                <input type="text" placeholder="Nhập Tên Game Cần Tìm" id="edit-search-block-form--2" name="namesearch" size="15" maxlength="128" class=" form-autocomplete ui-autocomplete-processed ui-autocomplete-input" data-sa-theme="basic-green">
                                <span role="status" class="ui-helper-hidden-accessible"></span>
                                <ul style="display: none;" class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all">
                                </ul>
                            </div>
                            <div class="form-actions form-wrapper" id="edit-actions">
                                <input type="submit" id="edit-submit" name="op" value class="form-submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="account-trigger"></div>
                <div class="rt_buttins region region-menu-bar">
                    <a title="Toggle Menu" class="menu-toggle">
                        <span class="lines">
                            <span class="line first-line first">
                                <span class="line first-line first">
                                </span>
                                <span class="line"></span>
                                <span class="line last-line last"></span>
                            </span>
                        </span>
                        <span class="toggle-help">
                            Header main menu
                        </span>
                    </a>
                    <ul id="menu-header-main-menu" class="menu-header-main-menu responsive-menu links">
                        <li class="menu-item menu-item-primary first">
                            <a href="javascript:void(0)" title="Games">
                                Games
                            </a>
                        </li>
                        <li class="menu-item menu-item-primary">
                            <a href="javascript:void(0)" title="Hot">
                                Hot
                            </a>
                        </li>
                        <li class="menu-item menu-item-primary">
                            <a href="javascript:void(0)">
                                Multiplayer
                            </a>
                        </li>
                        <li class="menu-item menu-item-primary">
                            <a href="javascript:void(0)">
                                Game Pass
                            </a>
                        </li>
                        <li class="menu-item menu-item-primary">
                            <div id="cd-cart_trigger">
                                <a class="cd-img-replace" href="javascript:void(0)">Cart</a>
                            </div>
                        </li>
                        @if(!session()->has('username'))
                        <li class='menu-item menu-item-primary'>
                            <a href="{{ URL::to('register') }}">
                                Đăng Ký
                            </a>
                        </li>
                        <li class='menu-item menu-item-primary'>
                            <a href="{{ URL::to('login') }}">
                                Đăng Nhập
                            </a>
                        </li>
                        @else
                        <li class='menu-item menu-item-primary'>
                            <a href="{{ URL::to('user/' . session()->get('username')) }}">
                                Tài Khoản
                            </a>
                        </li>
                        <li class='menu-item menu-item-primary'>
                            <a href='{{URL::to("logout")}}'>
                                Đăng Xuất
                            </a>
                        </li>

                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <section class="top_panel_sec region region-header">
        <div class="container-fluid">
            <div class="mobile-menu animate__animated" style="display: none;">
                <div class="search">
                    <div class="searh_bx">
                        <form autocomplete="off" action="/all-games" method="post" id="search-block-form--2" accept-charset="UTF-8">
                            <div>
                                <div class="form-item form-type-textfield form-item-search-block-form">
                                    <label class="element-invisible" for="edit-search-block-form--4">Search </label>
                                    <input title="Enter the terms you wish to search for." autocomplele="new-search" placeholder="Search for a game" type="text" id="edit-search-block-form--4" name="search_block_form" value="" size="15" maxlength="128" class="form-text">
                                </div>
                                <div class="form-actions form-wrapper" id="edit-actions--2"><input type="submit" id="edit-submit--2" name="op" value="" class="form-submit"></div><input type="hidden" name="form_build_id" value="form-iAPQUatCxiLbQRMl7t-OgG9HIdv4XFD1ObzyUQxrCN8">
                                <input type="hidden" name="form_id" value="search_block_form">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mobile-menu__tiles">
                    <div class="topgm">
                        <div class="rt_buttins">
                            <ul class="menu">
                                <ul class="menu">
                                    <li class="first leaf games mid-2214"><a href="javascript:void(0)" title="games" class="active">Games</a></li>
                                    <li class="leaf hot mid-2839"><a href="javascript:void(0)" title="">Hot</a></li>
                                    <li class="leaf multiplayer mid-2216"><a href="javascript:void(0)" title="">Multiplayer</a></li>
                                    <li class="leaf game-pass mid-5715"><a href="javascript:void(0)">Game Pass</a></li>
                                    <li class="leaf register mid-2156"><a href="javascript:void(0)">Register</a></li>
                                    <li class="last leaf login mid-2157"><a href="javascript:void(0)" rel="nofollow">Login</a></li>
                                </ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="block-views-tags-block" class="new-carao block block-views block-odd first clearfix">
                <div class="owl-carousel owl-custom owl-theme owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-4816.625, 0px, 0px); transition: all 0.25s ease 0s; width: 21010px;">
                            @foreach($danhmuc as $danhmuc)
                            <div class="owl-item cloned" style="width: 155.375px; margin-right: 5px;">
                                <a href="{{ URL::to('tag/' . $danhmuc->iddanhmuc) }}" class="item caro-itm media">
                                    <div class="media-left">
                                        <img typeof="foaf:Image" src="{{$danhmuc->imgdanhmuc}}" width="68" height="60" alt="">
                                    </div>
                                    <div class="media-body">
                                        {{$danhmuc->tendanhmuc}}
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="more-categories hvr-float-shadow">
                    <div class="media-more">
                        <div class="media-left">
                            <div class="more-categories__burger"></div>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">More</h4>
                            <p>Categories</p>
                        </div>
                    </div>
                    <a href="{{URL::to('all-categories')}}" class="abs_button toggle-menu menu-left push-body jPushMenuBtn"></a>
                </div>
            </div>
        </div>
    </section>
    <div id="cd-cart">
        @if(session()->has('username'))
        <h2>Cart</h2>
        <ul class="cd-cart-items">
            <div class="load"></div>
        </ul>
        <div class="cd-cart-your-coin">
            <p>Your Coin <span class="coinhave">


                </span></p>
        </div>
        <div class="cd-cart-total" style="border-bottom: 1px solid #e0e6ef;">
            <p>Total <span class="precoin" style="color: red;">


                </span></p>
        </div>
        <div class="cd-cart-coin-minus">
            <p>Coin is return<span class="coinreturn" style="color: red;">


                </span></p>
        </div>
        <a href="javascript:void(0)" class="checkout-btn">Thanh toán</a>
        @else
        <div class="wrap-login100">
            <div style="margin: auto;" class="login100-pic js-tilt" data-tilt>
                <img src="{{asset('image/img-01.png')}}" alt="IMG">
                <div style="width: 100%;display: flex;flex-direction: column;padding: 20px;">
                    <a href="{{URL::to('login')}}" type="button" class="btn btn-success">Đăng Nhập</a>
                    <a href="{{URL::to('register')}}" style="margin-top: 15px;" type="button" class="btn btn-danger">Đăng Ký</a>
                </div>
            </div>
        </div>
        @endif
    </div>
    <script>
        $(document).ready(function() {
            function loadPreInvoice(username) {
                $.ajax({
                    url: "{{route('loadPreInvoice')}}",
                    method: "POST",
                    data: {
                        _token: '{{csrf_token()}}',
                        username: username
                    },
                    success: function(data) {
                        var html = "";
                        for (var k in data) {
                            var idgame = data[k].idgame;
                            var name = data[k].namegame;
                            var coin = data[k].coin;
                            html += '<li>' + name + '<div class="cd-price">' + coin +
                                '</div><a href="javascript:void(0)" data-idgame="' + idgame +
                                '" class="cd-item-remove cd-img-replace">Remove</a></li>';
                        }
                        $('.load').html(html);
                    }
                })
            }

            function loadCoin(username) {
                $.ajax({
                    url: "{{route('loadCoin')}}",
                    method: "post",
                    data: {
                        _token: '{{csrf_token()}}',
                        username: username
                    },
                    success: function(data) {
                        $('.coinhave').html(data['coinhave'] + " Coin");
                        $('.precoin').html(data['precoin'] + " Coin");
                        if (data['coinminus'] >= 0) {
                            $('.coinreturn').html(data['coinminus'] + " Coin");
                            $('.checkout-btn').css('display', "block");
                        } else {
                            $('.coinreturn').html('Không đủ COIN để mua hàng');
                            $('.checkout-btn').css('display', "none");
                        }
                    }
                })
            }

            function removeGameFromCart(username, id) {
                $.ajax({
                    url: "{{route('removeGameFromCart')}}",
                    method: "post",
                    data: {
                        _token: '{{csrf_token()}}',
                        username: username,
                        id: id
                    },
                    success: function(data) {}
                })
            }

            function buy(username, listIDgame) {
                $.ajax({
                    url: "{{route('buy')}}",
                    method: "get",
                    data: {
                        _token: '{{csrf_token()}}',
                        username: username,
                        listIDgame: listIDgame
                    },
                    success: function(data) {
                        alert(data);
                        loadPreInvoice(username);
                        loadCoin(username);
                        location.reload();
                    }
                })
            }
            $('#cd-cart_trigger').on('click', function() {
                var username = '{{session()->get("username")}}';
                loadPreInvoice(username);
                loadCoin(username);
            })
            $(document).on('click', '.cd-item-remove', function() {
                var username = '{{session()->get("username")}}';
                var idgame = $(this).data("idgame");
                removeGameFromCart(username, idgame);
                loadPreInvoice(username);
                loadCoin(username);
            });
            $('.checkout-btn').on('click', function() {
                var username = '{{session()->get("username")}}';
                var dataList = $(".cd-item-remove").map(function() {
                    return $(this).data("idgame");
                }).get();
                var listIDArray = dataList.splice(',');
                buy(username, listIDArray);
            })

        })
    </script>
    <script>
        jQuery(document).ready(function($) {
            //if you change this breakpoint in the style.css file (or _layout.scss if you use SASS), don't forget to update this value as well
            var $L = 1200,
                $menu_navigation = $('#main-nav'),
                $cart_trigger = $('#cd-cart_trigger'),
                $hamburger_icon = $('#cd-hamburger-menu'),
                $lateral_cart = $('#cd-cart'),
                $shadow_layer = $('#cd-shadow-layer');

            //open lateral menu on mobile
            $hamburger_icon.on('click', function(event) {
                alert(123);
                event.preventDefault();
                //close cart panel (if it's open)
                $lateral_cart.removeClass('speed-in');
                toggle_panel_visibility($menu_navigation, $shadow_layer, $('body'));
            });

            //open cart
            $cart_trigger.on('click', function(event) {
                event.preventDefault();
                //close lateral menu (if it's open)
                $menu_navigation.removeClass('speed-in');
                toggle_panel_visibility($lateral_cart, $shadow_layer, $('body'));
            });

            //close lateral cart or lateral menu
            $shadow_layer.on('click', function() {
                $shadow_layer.removeClass('is-visible');
                // firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
                if ($lateral_cart.hasClass('speed-in')) {
                    $lateral_cart.removeClass('speed-in').on(
                        'webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',
                        function() {
                            $('body').removeClass('overflow-hidden');
                        });
                    $menu_navigation.removeClass('speed-in');
                } else {
                    $menu_navigation.removeClass('speed-in').on(
                        'webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',
                        function() {
                            $('body').removeClass('overflow-hidden');
                        });
                    $lateral_cart.removeClass('speed-in');
                }
            });

            //move #main-navigation inside header on laptop
            //insert #main-navigation after header on mobile
            move_navigation($menu_navigation, $L);
            $(window).on('resize', function() {
                move_navigation($menu_navigation, $L);

                if ($(window).width() >= $L && $menu_navigation.hasClass('speed-in')) {
                    $menu_navigation.removeClass('speed-in');
                    $shadow_layer.removeClass('is-visible');
                    $('body').removeClass('overflow-hidden');
                }

            });
        });

        function toggle_panel_visibility($lateral_panel, $background_layer, $body) {
            if ($lateral_panel.hasClass('speed-in')) {
                // firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
                $lateral_panel.removeClass('speed-in').one(
                    'webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',
                    function() {
                        $body.removeClass('overflow-hidden');
                    });
                $background_layer.removeClass('is-visible');

            } else {
                $lateral_panel.addClass('speed-in').one(
                    'webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',
                    function() {
                        $body.addClass('overflow-hidden');
                    });
                $background_layer.addClass('is-visible');
            }
        }

        function move_navigation($navigation, $MQ) {
            if ($(window).width() >= $MQ) {
                $navigation.detach();
                $navigation.appendTo('header');
            } else {
                $navigation.detach();
                $navigation.insertAfter('header');
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                margin: 10,
                loop: true,
                reponsiveClass: true,
                dots: false,
                items: '{{ $danhmuc->count() }}',
                autoplay: true,
                autoplayTimeout: 1000,
                autoHeight: true
            })
            $(".owl-carousel").owlCarousel();
            $(".hamburger").on('click', function() {
                if ($('.hamburger').hasClass('is-active')) {
                    $('.mobile-menu').removeClass('animate__bounceIn');
                    $('.mobile-menu').addClass('animate__bounceOut');
                    $('.mobile-menu').css('display', 'none');
                } else {
                    $('.mobile-menu').removeClass('animate__bounceOut');
                    $('.mobile-menu').css('display', 'block');
                    $('.mobile-menu').addClass('animate__bounceIn');
                    $('.moblie-menu').removeClass('is-active');
                }
            });
            var forEach = function(t, o, r) {
                if ("[object Object]" === Object.prototype.toString.call(t))
                    for (var c in t) Object.prototype.hasOwnProperty.call(t, c) && o.call(r, t[c], c, t);
                else
                    for (var e = 0, l = t.length; l > e; e++) o.call(r, t[e], e, t)
            };

            var hamburgers = document.querySelectorAll(".hamburger");
            if (hamburgers.length > 0) {
                forEach(hamburgers, function(hamburger) {
                    hamburger.addEventListener("click", function() {
                        this.classList.toggle("is-active");
                    }, false);
                });
            }

        });
    </script>
</body>

</html>