<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('user_css/viewfromcategory.css')}}">
</head>
@include('user/layout/header')

<body>
    <div id="main">
        <div id="main_inner">
            <div class="region region-content">
                <div class="recent-games__wrapper" style="min-height: 0px;"></div>
                <div id="block-system-main" class="block block-system block-odd first last clearfix">
                    <section
                        class="blck-sec category_games1 view view-genres-and-tags view-id-genres_and_tags view-display-id-page view-dom-id-b04104a1b2de66eed6a872f079dce67b jquery-once-2-processed">
                        <div class="container">
                            <div class="addiction-game-sec new-game">
                                <div class="top-head">
                                    <h1>{{$categories->tendanhmuc}}</h1>
                                    <div class="breadcrumb"><a href="/">Games</a> » {{$categories->tendanhmuc}}</div>
                                </div>
                                <div class="game-gallerty inn_panel1_box stra_games">
                                    <div class="row">
                                        @foreach($gameincategories as $game)
                                        <div class="col-lg-2 col-md-2 col-sm-2 inn_box_panel1">
                                            <div class="inn_box_panel1_box">
                                                <a href="{{ URL::to('game/' . $game->id) }}" class="pic_box" data-nid="23238">
                                                    <div class="thumbnail-image mobile-enabled">
                                                        <div class="b-loader b-loading">
                                                            <img class="b-lazy b-error"
                                                                src="{{$game->imggame}}">
                                                        </div>
                                                    </div>
                                                </a>
                                                <h4 class="txt_box"><a href="{{ URL::to('game/' . $game->id) }}">{{$game->namegame}}</a></h4>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="text-center">
                                    {!! $gameincategories->links() !!}
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
</body>

</html>