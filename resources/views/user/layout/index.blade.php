<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('user_css/index.css')}}">
</head>
@include('user/layout/header')
<body class="push-body html front not-logged-in no-sidebars page-games">
    <div id="main">
        <div id="main_inner">
            <div class="region region-content">
                <div class="recent-games__wrapperr" style="min-height:0px"></div>
            </div>
            <div id="block-system-main" class="block block-system block-odd first last clearfix">
                <div class="panel-display panel-1col clearfix">
                    <div class="panel-panel panel-col">
                        <div>
                            <div class="panel-pane pane-custom pane-1">
                                <div class="pane-content">
                                    <div style="clear:both;"></div>
                                </div>
                            </div>
                            <div class="panel-separator"></div>
                            <div class="addiction-game-sec panel-pane pane-views pane-index-page-games-sections">
                                <div class="container">
                                    <div class="index-page-games-section ">
                                        <div class="top-head">
                                            <h2 class="new-games-head">
                                                Game Mới
                                            </h2>
                                        </div>
                                        <div class="game-gallerty inn_panel1_box stra_games">
                                            <div class="row">
                                            @foreach ($gamenew as $gamenew)
                                                <div class="col-lg-2 col-md-2 col-sm-2 inn_box_panel1">
                                                    <div class="inn_box_panel1_box hasVideo">
                                                        <a data-id="{{$gamenew->id}}" href="" class="pic_box">
                                                            <div class="thumbnail-image mobile-enabled">
                                                                <div class="b-loader">
                                                                   <img data-id="{{$gamenew->id}}" class="b-lazy b-loaded" src="{{$gamenew->imggame}}" alt="">
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <h4 style="display:flex" class="txt_box my-h4">
                                                            <div class="">
                                                                <a  href="{{ URL::to('game/' . $gamenew->id) }}">{{$gamenew->namegame}}</a>
                                                            </div>
                                                        </h4>
                                                    </div>
                                                </div>
                                            @endforeach  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-separator"></div>
                            <div class="addiction-game-sec panel-pane pane-views pane-index-page-games-sections">
                                <div class="container">
                                    <div class="index-page-games-section ">
                                        <div class="top-head">
                                            <h2 class="new-games-head">
                                                Game Hay
                                            </h2>
                                        </div>
                                        <div class="game-gallerty inn_panel1_box stra_games">
                                            <div class="row">
                                            @foreach ($gamerandom as $gamerandom)
                                                <div class="col-lg-2 col-md-2 col-sm-2 inn_box_panel1">
                                                    <div class="inn_box_panel1_box hasVideo">
                                                        <a data-id="{{$gamerandom->id}}" href="" class="pic_box">
                                                            <div class="thumbnail-image mobile-enabled">
                                                                <div class="b-loader">
                                                                   <img data-id="{{$gamerandom->id}}" class="b-lazy b-loaded" src="{{$gamerandom->imggame}}" alt="">
                                                                </div>
                                                            </div>
                                                        </a>    
                                                        <h4 style="display:flex" class="txt_box my-h4">
                                                            <div class="">
                                                                <a  href="{{ URL::to('game/' . $gamerandom->id) }}">{{$gamerandom->namegame}}</a>
                                                            </div>
                                                        </h4>
                                                    </div>
                                                </div>
                                            @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>