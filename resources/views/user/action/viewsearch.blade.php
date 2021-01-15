<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('user_css/search.css')}}">
</head>
@include('user/layout/header')

<body class="push-body html not-front not-logged-in no-sidebars page-search">
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
                                    <div class="col-md-3 col-sm-12">
                                        <div class="inn_serach_lt">
                                            <form  method="get" id="views-exposed-form-search-page"
                                                accept-charset="UTF-8" class="jquery-once-2-processed">
                                                <div>
                                                    <div class="search-form">
                                                        <div class="lt_search_box hidden-sm hidden-xs">
                                                            <h5>Search</h5>
                                                            <div
                                                                class="form-item form-type-textfield form-item-search-api-views-fulltext">
                                                                <input placeholder="Search here" type="text"
                                                                    id="search-content-input"
                                                                    name="search_api_views_fulltext" value="{{$content}}" size="30"
                                                                    maxlength="128" class="form-text">
                                                            </div>
                                                        </div>
                                                        <div class="views-exposed-widget views-submit-button">
                                                            <a href="javascript:void(0)" type="submit" id="edit-submit-search" name=""
                                                                value="" class="form-submit"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="price" style="display: flex;font-size: 16px;margin-top: 15px;">
                                                <input type="number" 
                                                    class="input-price-number col-filter-price" value="0"
                                                    name="filter_price_from" id="mincoin">
                                                <p style="font-size: 16px;margin-right: 10px;margin-left: 10px;"> to </p>
                                                <input type="number" 
                                                    class="input-price-number col-filter-price" value="0"
                                                    name="filter_price_from" id="maxcoin">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-9 col-sm-12 sorting-by">
                                        <div class="loadResult">
                                        @include('user/action/searchgamebycoin')
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
    <script>
        $(document).ready(function() {
            function search(content,mincoin,maxcoin) {
                $.ajax({
                    url: "{{route('searchCoin')}}",
                    type: 'get',
                    data: {
                        _token: '{{csrf_token()}}',
                        content : content,
                        mincoin: mincoin,
                        maxcoin: maxcoin,
                    },
                    success: function(data) {
                        $('.loadResult').html(data);
                    },
                });
            }
            $('#edit-submit-search').on('click',function() {
                var content = $('#search-content-input').val();
                var mincoin = $('#mincoin').val();
                var maxcoin = $('#maxcoin').val();
                search(content,mincoin,maxcoin);
            })
        })
    </script>
</body>

</html>