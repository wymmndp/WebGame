<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('user_css/search.css')}}">
</head>
@include('user/layout/header')

<body>
    <div id="main">
        <div id="main_inner">
            <div class="region region-content">
                <div class="recent-games__wrapper">
                    <section class="recent-games panel1_boxes panel1_boxestab">
                        <div class="container">
                            <div class="inn_panel1_box">
                                <div class="inn_boxes_panel1">
                                </div>
                            </div>
                            <div class="close-button"></div>
                        </div>
                    </section>
                </div>
                <div id="block-system-main" class="block block-system block-odd first last clearfix">
                    <section
                        class="blck-sec search_panel_sec view view-search view-id-search view-display-id-page view-dom-id-7dfda79a61a01c7fea224eb357e4aacd jquery-once-2-processed">
                        <div class="container">
                            <div class="inn_search_panel_sec">
                                <div class="row visible-sm visible-xs">
                                    <div class="col-sm-12">
                                        <div class="inn_search_rt tab_mob_sec">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="">
                                        <div class="inn_search_rt">
                                            @if(!$count>0)
                                            <div class="top_search">
                                                <h3>Không có kết quả nào</h3>
                                            </div>
                                            @else
                                            <div class="rt_tbl_boxes">
                                                <div class="rt_tbl_top">
                                                    <div class="tbl_box">
                                                        <div class="top-head-rt">

                                                        </div>
                                                    </div>
                                                    <div class="tbl_box">
                                                        <h6>Coin</h6>
                                                    </div>
                                                    <div class="tbl_box">
                                                        <h6>NGÀY THÊM</h6>
                                                    </div>

                                                </div>
                                                @foreach($allgamesearch as $allsearch)
                                                @if($loop->first)
                                                <div class="rt_tbl_bottom no-border">
                                                    <div class="tbl_box">
                                                        <div class="media">
                                                            <div class="media-left hasVideo">
                                                                <a href="{{ URL::to('game/' . $allsearch->id) }}"
                                                                    class="pic_box">
                                                                    <img typeof="foaf:Image"
                                                                        src="{{$allsearch->imggame}}" width="180"
                                                                        height="117" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a
                                                                        href="{{ URL::to('game/' . $allsearch->id) }}">{{$allsearch->namegame}}</a>
                                                                </h4>
                                                                <p>{{$allsearch->detailgame}}</p>
                                                                <h5>Category:</h5>
                                                                <ul class="category_list">
                                                                    <li><a
                                                                            href="{{ URL::to('tag/' . $allsearch->iddanhmuc) }}">{{$allsearch->tendanhmuc}}</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <ul class="bottom_sec">
                                                            <li>Coin: <span> {{$allsearch->coin}}</span></li>
                                                            <li>Ngày Thêm: <span>{{$allsearch->time}}</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="tbl_box">
                                                        <p>
                                                            <strong>
                                                                <span>
                                                                    {{$allsearch->coin}}</span>
                                                            </strong>
                                                        </p>
                                                    </div>
                                                    <div class="tbl_box">
                                                        <p>
                                                            <strong>
                                                                <span>
                                                                    {{$allsearch->time}} </span>
                                                            </strong>
                                                        </p>
                                                    </div>
                                                </div>
                                                @else
                                                <div class="rt_tbl_bottom">
                                                    <div class="tbl_box">
                                                        <div class="media">
                                                            <div class="media-left hasVideo">
                                                                <a href="{{ URL::to('game/' . $allsearch->id) }}"
                                                                    class="pic_box">
                                                                    <img typeof="foaf:Image"
                                                                        src="{{$allsearch->imggame}}" width="180"
                                                                        height="117" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading"><a
                                                                        href="{{ URL::to('game/' . $allsearch->id) }}">{{$allsearch->namegame}}</a>
                                                                </h4>
                                                                <p>{{$allsearch->detailgame}}</p>
                                                                <h5>Category:</h5>
                                                                <ul class="category_list">
                                                                    <li><a
                                                                            href="{{ URL::to('tag/' . $allsearch->iddanhmuc) }}">{{$allsearch->tendanhmuc}}</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <ul class="bottom_sec">
                                                            <li>Coin: <span> {{$allsearch->coin}}</span></li>
                                                            <li>Ngày Thêm: <span>{{$allsearch->time}}</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="tbl_box">
                                                        <p>
                                                            <strong>
                                                                <span>
                                                                    {{$allsearch->coin}}</span>
                                                            </strong>
                                                        </p>
                                                    </div>
                                                    <div class="tbl_box">
                                                        <p>
                                                            <strong>
                                                                <span>
                                                                    {{$allsearch->time}} </span>
                                                            </strong>
                                                        </p>
                                                    </div>
                                                </div>
                                                @endif
                                                @endforeach
                                            </div>
                                            @endif
                                            <div class="bottom_pagination" style="width: 100%;">
                                                <div class="pagination_sec" style="text-align: center;">
                                                    {!! $allgamesearch->links() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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