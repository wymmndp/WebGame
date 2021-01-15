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
                        <a href="{{ URL::to('game/' . $allsearch->id) }}" class="pic_box">
                            <img typeof="foaf:Image" src="{{$allsearch->imggame}}" width="180" height="117" alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><a
                                href="{{ URL::to('game/' . $allsearch->id) }}">{{$allsearch->namegame}}</a>
                        </h4>
                        <p>{{$allsearch->detailgame}}</p>
                        <h5>Category:</h5>
                        <ul class="category_list">
                            <li><a href="{{ URL::to('tag/' . $allsearch->iddanhmuc) }}">{{$allsearch->tendanhmuc}}</a>
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
                        <a href="{{ URL::to('game/' . $allsearch->id) }}" class="pic_box">
                            <img typeof="foaf:Image" src="{{$allsearch->imggame}}" width="180" height="117" alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><a
                                href="{{ URL::to('game/' . $allsearch->id) }}">{{$allsearch->namegame}}</a>
                        </h4>
                        <p>{{$allsearch->detailgame}}</p>
                        <h5>Category:</h5>
                        <ul class="category_list">
                            <li><a href="{{ URL::to('tag/' . $allsearch->iddanhmuc) }}">{{$allsearch->tendanhmuc}}</a>
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