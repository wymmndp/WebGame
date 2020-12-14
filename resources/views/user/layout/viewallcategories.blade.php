<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('user_css/viewallcategories.css')}}">
</head>
@include('user/layout/header')

<body>
    <div id="main">
        <div id="main_inner">
            <div class="region region-content">
                <div id="block-system-main" class="block block-system block-odd first last clearfix">
                    <div
                        class="view view-tags view-id-tags view-display-id-page_1 view-dom-id-58e37c6453d9d5e2bbc6f99da703015d">
                        <h2>Tất cả danh mục</h2>
                        <div class="tags_panel_boxes container">
                            <div class="new-carao">
                                <div class="tags_panel">
                                    <div class="row">
                                        @foreach($danhmuc as $dm)
                                        <div class="col-sm-2">
                                            <a href="{{URL::to('tag/' . $dm->iddanhmuc)}}" class="item caro-itm media" data-tid="137">
                                                <div class="media-left">
                                                    <img typeof="foaf:Image" src="{{$dm->imgdanhmuc}}" width="68"
                                                        height="60" alt="">
                                                </div>
                                                <div class="media-body">
                                                    {{$dm->tendanhmuc}}
                                                </div>
                                            </a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div style="clear:both;"></div>
    </div>
    </div>
</body>

</html>