<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('asset/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('user_css/detailgame.css')}}">
</head>
@include('user/layout/header')

<body class="push-body html front not-logged-in no-sidebars page-games">
    <div id="main" style="margin-top: 15px;">
        <div id="main-inner">
            <div class="ProductDetailHeader">
                <div class="mobile" style="display:none"></div>
                <div class="desktop">
                    <div class="nonloop owl-carousel owl-loaded owl-drag owl-theme">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <div class="owl-item active center">
                                    <div class="item">
                                        <img class="" src="https://cdn2.unrealengine.com/Diesel%2Fproductv2%2Fheather%2Fhome%2FEGS_RockstarGames_RedDeadRedemption2_G1A_00-1920x1080-308f101576da37225c889173094f373f2afc56c1.jpg?h=1080&resize=1&w=1920" alt="">
                                    </div>
                                </div>
                                <div class="owl-item active">
                                    <div class="item">
                                        <img src="https://cdn2.unrealengine.com/egs-dragonquestxisechoesofanelusiveage-squareenix-g1a-05-1920x1080-960515148.jpg?h=1080&resize=1&w=1920" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="css-1sbdg19-StorePageContent__styles" data-component="StorePageContent">
                    <div class="css-1ir4vgx-DescriptionFullBleed__wrapper" data-component="DescriptionWrapper">
                        <div class="css-y3p1h8-Description-styles__container-ProductDescription__description" data-component="Description">
                            <div class="css-cvywoi-Description-styles__imageContainerSimple" data-component="renderContent">
                                <div class="css-u421q6" data-component="AspectRatioContainer">
                                    <div class="css-dr0sk9-AspectRatioContainer__content">
                                        <div class="css-dx2499">
                                            <img src="{{$game->imggame}}" alt="" class="css-1bha1hk-Description-styles__image" style="width: 100%;height: 100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="css-8netip" data-component="renderContent">
                                <div class="css-167ntke">{{$game->detailgame}}</div>
                            </div>
                            <div class="css-qh9qd6" data-component="renderContent">
                                <div class="css-1fdl3ev-Description-styles__ctaInner"><span class="css-r50pc8"></span>
                                    <div class="css-9t5xdr">
                                        <div class="css-1wmqosr-PurchaseButton-styles__wrapper-PurchaseButton-styles__main" data-component="PurchaseButton">
                                            <div class="css-4xz9ug" data-component="PriceLayout">
                                                <div class="css-4tpn3e" data-component="PurchasePrice">
                                                    <div class="css-r6gfjb-PurchasePrice__priceContainer"><span class="css-8v8on4" data-component="Price">
                                                            @if($havegame>0)

                                                            @else
                                                            {{$game->coin}} coin
                                                            @endif
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="css-1tv9h97">
                                                <div class="css-shjp5s-PurchaseButton-styles__ctaButtons">
                                                    <div class="css-lax46w-ButtonGroup__buttonGroup" style="justify-content: center;" data-component="ButtonGroup">
                                                        @if($havegame>0)
                                                        <a href="{{ URL::to('game/play/'.$game->id) }}" class="css-1775eex btn-play" data-testid="purchase-cta-button" data-component="BaseButton"><span class="css-70r44h-PurchaseCTA__ctaText" data-component="Message">
                                                                Chơi Game
                                                            </span></a>
                                                        @else
                                                        <button class="css-1775eex btn-add" data-testid="purchase-cta-button" data-component="BaseButton"><span class="css-70r44h-PurchaseCTA__ctaText" data-component="Message">
                                                                Thêm vào giỏ hàng
                                                            </span></button>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="css-1sbdg19-StorePageContent__styles" data-component="StorePageContent">
                    <div class="css-88eoaf-TwoColumnGroup__group-ProductDetails-styles__group" data-component="TwoColumnGroup">
                        <div class="css-pgs42s-TwoColumnGroup__left" data-testid="left-column">
                            <div class="css-qqz4er" data-component="DesktopStickToTop">
                                <h2 class="css-ktp848" id=""><span data-component="Message">About
                                        {{$game->namegame}}</span></h2>
                            </div>
                        </div>
                        <div class="css-1wd5p3d-TwoColumnGroup__right" data-testid="right-column">
                            <div id="META" data-component="OffsetAnchor"></div>
                            <div class="css-1nilh6d" data-component="GameMeta">
                                <div class="css-1xb5nah-GameMeta-styles__metaItem" data-component="MetaList"><span class="css-y2j3ic" data-component="Message">Developer</span>
                                    <div class="css-8lm9zv-GameMeta-styles__metaList">
                                        <div class="css-xs9fqv">
                                            <div class="css-yqbyl2-GameMeta-styles__items">
                                                <div class="css-1a9lf9m-GameMeta-styles__listData" data-component="MetaList">Supergiant Games</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="css-1xb5nah-GameMeta-styles__metaItem" data-component="MetaList"><span class="css-y2j3ic" data-component="Message">Publisher</span>
                                    <div class="css-8lm9zv-GameMeta-styles__metaList">
                                        <div class="css-xs9fqv">
                                            <div class="css-yqbyl2-GameMeta-styles__items">
                                                <div class="css-1a9lf9m-GameMeta-styles__listData" data-component="MetaList">Supergiant Games</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="css-1xb5nah-GameMeta-styles__metaItem" data-component="MetaDate">
                                    <div><span class="css-y2j3ic" data-component="Message">Release Date</span>
                                        <div class="css-1sf6b85-GameMeta-styles__data"><time datetime="2018-12-06T13:00:00.000Z" data-component="Time">Dec 6,
                                                2018</time></div>
                                    </div>
                                </div>
                                <div class="css-1xb5nah-GameMeta-styles__metaItem" data-component="MetaList"><span class="css-y2j3ic" data-component="Message">Tags</span>
                                    <div class="css-8lm9zv-GameMeta-styles__metaList">
                                        <div class="css-xs9fqv">
                                            <div class="css-yqbyl2-GameMeta-styles__items">
                                                <div class="css-1a9lf9m-GameMeta-styles__listData" data-component="MetaList"><span data-component="Message">Action</span></div>
                                                <div class="css-1a9lf9m-GameMeta-styles__listData" data-component="MetaList"><span data-component="Message">RPG</span>
                                                </div>
                                                <div class="css-1a9lf9m-GameMeta-styles__listData" data-component="MetaList"><span data-component="Message">Rogue-Lite</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="css-88eoaf-TwoColumnGroup__group-ProductDetails-styles__group" data-component="TwoColumnGroup">
                        <div class="css-pgs42s-TwoColumnGroup__left" data-testid="left-column">
                            <div class="css-qqz4er" data-component="DesktopStickToTop">
                                <h2 class="css-ktp848" id=""><span data-component="Message">Lịch sử cập nhập</span></h2>
                            </div>
                        </div>
                        <div class="css-1wd5p3d-TwoColumnGroup__right" data-testid="right-column">
                            <div id="" data-component="OffsetAnchor"></div>
                            <div class="css-1yaqpae" data-component="ProductCard">
                                <div class="product-card-top-row css-em30bi-ProductCardTopRow-styles__content" data-component="ProductCardTopRow">
                                    <div class="css-k6m3tj">
                                        <div data-testid="picture" data-component="Picture"><img alt="Hades" src="https://cdn2.unrealengine.com/hades-eventcover-01-800x450-983740629.png?h=270&amp;resize=1&amp;w=480" class="css-owehw2-Picture-styles__image-ProductImage-styles__inner-Picture-styles__visible" data-image="https://cdn2.unrealengine.com/hades-eventcover-01-800x450-983740629.png?h=270&amp;resize=1&amp;w=480" data-testid="picture-image" data-component="FallbackImage"></div>
                                    </div>
                                    <div class="css-1ohpt5u-ProductCardTopRow-styles__leftContent">
                                        <div class="css-x4sczz-ProductCardTopRow-styles__titleRow">
                                            <div>
                                                <div class="css-1et9q09"><span data-component="Message">Version</span>
                                                </div>
                                                <div class="css-1kwq346-ProductCardTopRow-styles__title">Hades [1.1.1]
                                                </div>
                                            </div>
                                        </div>
                                        <div class="css-1njyyf0-ProductCardTopRow-styles__description">
                                            <div class="css-1spdmlf-LineClamp__wrapper" data-component="LineClamp">
                                                <div class="css-1ifvig7">Sửa lỗi, thêm quái vật,thêm map</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="css-1yaqpae" data-component="ProductCard">
                                <div class="product-card-top-row css-em30bi-ProductCardTopRow-styles__content" data-component="ProductCardTopRow">
                                    <div class="css-k6m3tj">
                                        <div data-testid="picture" data-component="Picture"><img alt="Hades + Soundtrack" src="https://cdn2.unrealengine.com/Diesel%2Fproductv2%2Fhades%2Fhome%2FFeatured-Carasoul-1360x766-169e92da6351ea44fa0bc5b3ae7797bd070b403d.jpg?h=270&amp;resize=1&amp;w=480" class="css-owehw2-Picture-styles__image-ProductImage-styles__inner-Picture-styles__visible" data-image="https://cdn2.unrealengine.com/Diesel%2Fproductv2%2Fhades%2Fhome%2FFeatured-Carasoul-1360x766-169e92da6351ea44fa0bc5b3ae7797bd070b403d.jpg?h=270&amp;resize=1&amp;w=480" data-testid="picture-image" data-component="FallbackImage"></div>
                                    </div>
                                    <div class="css-1ohpt5u-ProductCardTopRow-styles__leftContent">
                                        <div class="css-x4sczz-ProductCardTopRow-styles__titleRow">
                                            <div>
                                                <div class="css-1et9q09"><span data-component="Message">Version</span>
                                                </div>
                                                <div class="css-1kwq346-ProductCardTopRow-styles__title">Hades: The
                                                    Phantom [1.1.0]</div>
                                            </div>
                                        </div>
                                        <div class="css-1njyyf0-ProductCardTopRow-styles__description">
                                            <div class="css-1spdmlf-LineClamp__wrapper" data-component="LineClamp">
                                                <div class="css-1ifvig7">Bản mở rộng mới, nhiều quái vật, vũ khí mới.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <script>
            $('.nonloop').owlCarousel({
                center: true,
                items: 2,
                loop: false,
                margin: 30,
                nav: true,
            });
            $(document).ready(function() {
                function addProductToCart(username, id) {
                    $.ajax({
                        url: "{{route('addProductToCart')}}",
                        type: 'post',
                        data: {
                            _token: '{{csrf_token()}}',
                            username: username,
                            id: id
                        },
                        success: function(data) {
                            alert(data);
                        },
                    });
                }
                $('.btn-add').on('click', function() {
                    var idgame = '{{$game->id}}';
                    var username = '{{session()->get("username")}}';
                    addProductToCart(username, idgame);
                });
            })
        </script>
    </footer>
</body>

</html>