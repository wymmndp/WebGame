@extends('admin/layout/headeradmin')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>

<body>
    @section('content')
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom d-flex justify-content-between">
                        <h2>Tất cả Trò Chơi</h2>
                    </div>
                    <div class="card-body">
                        <div class="hoverable-data-table">
                            <div id="hoverable-data-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row justify-content-between top-information">
                                    <div class="dataTables_length" id="hoverable-data-table_length"><label>Show <select name="hoverable-data-table_length" aria-controls="hoverable-data-table" class="custom-select custom-select-sm form-control form-control-sm" id="showgame">
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="50">50</option>
                                                <option value="-1">All</option>
                                            </select> entries</label></div>
                                    <div id="hoverable-data-table_filter" class="dataTables_filter"><label>Search:<input type="search" id="search-field" class="form-control form-control-sm" placeholder="" aria-controls="hoverable-data-table"></label></div>
                                </div>
                                <div class="show-table">
                                    @include('admin/action/gameofuser/paginationgameofuser')
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- playVideo -->
    <div class="modal fade" id="playVideo" tabindex="-1" aria-labelledby="exampleModalLarge" style="display: none;" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <iframe width="600" height="400" src="https://www.youtube.com/embed/LembwKDo1Dk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- modal accept -->
    <div id="acceptGame" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Chấp nhận</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Bạn có chắc muốn chấp nhận game này?</p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <a type="submit" class="btn btn-danger accept-category-btn" style="color: white;">Chấp nhận</a>
                </div>
            </div>
        </div>
    </div>
    <!-- modal refuse -->
    <div id="refuseGame" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Xoá game</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Bạn có chắc muốn xoá game này?</p>
                    <p class="text-warning"><small>Việc xoá này không thể hoàn lại.</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <a type="submit" href="javascript:void(0)" class="btn btn-danger delete-category-btn">Delete</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            var idaccept = "";
            var idrefuse = "";
            var username = "";
            var imggame = "";
            var description = "";
            var linkgame = "";
            var coin = "";
            var iddm = "";
            var namegame = "";
            //send mail
            function sendMailSuccess(username) {
                $.ajax({
                    url: "{{route('sendMailSuccess')}}",
                    method: "POST",
                    data: {
                        _token: '{{csrf_token()}}',
                        username: username
                    },
                    success: function(data) {}
                })
            }

            function sendMailRefuse(username) {
                $.ajax({
                    url: "{{route('sendMailRefuse')}}",
                    method: "POST",
                    data: {
                        _token: '{{csrf_token()}}',
                        username: username
                    },
                    success: function(data) {}
                })
            }
            // support function 
            function getInformationOfGame(idgame) {
                $.ajax({
                    url: "{{route('getInformationOfGame')}}",
                    method: "POST",
                    data: {
                        _token: '{{csrf_token()}}',
                        idgame: idgame
                    },
                    success: function(data) {
                        username = data['username'];
                        namegame = data['namegame'];
                        imggame = data['imggame'];
                        description = data['description'];
                        linkgame = data['linkgame'];
                        coin = data['coin'];
                        iddm = data['iddm'];
                    }
                })
            }
            // delete game
            function deleteGame(idgame) {
                $.ajax({
                    url: "{{route('deleteGameOfUserUpload')}}",
                    method: "POST",
                    data: {
                        _token: '{{csrf_token()}}',
                        idgame: idgame
                    },
                    success: function(data) {
                        location.reload();
                    }
                })
            }
            $('.refuse').on('click', function() {
                idrefuse = $(this).data('idrefuse');
                getInformationOfGame(idrefuse);
                $('.delete-category-btn').on('click', function() {
                    sendMailRefuse(username); 
                    deleteGame(idrefuse);
                })
            })
            // accept game
            function acceptGame(username, namegame, imggame, description, linkgame, coin, iddanhmuc) {
                $.ajax({
                    url: "{{route('addgame')}}",
                    method: "POST",
                    data: {
                        _token: '{{csrf_token()}}',
                        namegame: namegame,
                        imggame: imggame,
                        description: description,
                        linkgame: linkgame,
                        coin: coin,
                        iddanhmuc: iddanhmuc
                    },
                    success: function(data) {
                        sendMailSuccess(username);
                    }
                })
            }
            $('.accept').on('click', function() {
                idaccept = $(this).data('idaccept');
                getInformationOfGame(idaccept);
                $('.accept-category-btn').on('click', function() {
                    alert(username);
                    acceptGame(username, namegame, imggame, description, linkgame,coin,iddm);
                    deleteGame(idaccept);
                })
            })
        })
    </script>
    @stop

</body>

</html>