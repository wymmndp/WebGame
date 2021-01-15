@extends('admin/layout/headeradmin')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cập nhập game</title>
</head>

<body>
    @section('content')
    <div class="content">
        <div class="bg-white border rounded">
            <div class="row no-gutters">
                <div class="col-lg-4 col-xl-3">
                    <div class="profile-content-left pt-5 pb-3 px-3 px-xl-5">
                        <div class="card text-center widget-profile px-0 border-0" style="width: 200px;height: 190px;">
                            <img src="{{$game->imggame}}" alt="" id="pre-img" style="width: 100%;height: 100%;">
                        </div>
                        <hr class="w-100">
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="profile-content-right py-5">
                        <div class="tab-content px-3 px-xl-5" id="myTabContent">
                            <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                <div class="mt-5">
                                    <form id="new-game-form">
                                        <div class="form-group row mb-6">
                                            <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">Hình
                                                game</label>
                                            <div class="col-sm-8 col-lg-10">
                                                <div class="custom-file mb-1">
                                                    <input type="file" name="files" multiple class="custom-file-input" id="file-img" required>
                                                    <label class="custom-file-label" for="coverImage">Choose
                                                        file...</label>
                                                    <div class="invalid-feedback">Example invalid custom file feedback
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="gameName">Tên Game</label>
                                            <input type="text" class="form-control" name="namegame" id="gameName" value="{{$game->namegame}}">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="description">Description</label>
                                            <div class="description" id="description" require></div>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="gameName">Link Game</label>
                                            <input type="text" class="form-control" name="linkgame" id="gameLink" value="{{$game->linkgame}}">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="coin">Coin</label>
                                            <input type="text" class="form-control" id="coin" value="{{$game->coin}}">
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="firstName">Danh Mục</label>
                                                    <select style="font-size: 18px;margin-left: 10px;" name="type" id="danhmucgame" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                        @foreach($alldanhmuc as $danhmuc)
                                                        @if($game->iddm == $danhmuc->iddanhmuc)
                                                        <option value="{{$danhmuc->iddanhmuc}}" selected>{{$danhmuc->tendanhmuc}}</option>
                                                        @else
                                                        <option value="{{$danhmuc->iddanhmuc}}">{{$danhmuc->tendanhmuc}}</option>
                                                        @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end mt-5">
                                            <a href="#giftGame" id="gift" type="submit" data-toggle="modal" class=" upload btn btn-success mb-2 btn-pill">
                                                Tặng Game
                                            </a>
                                            <a href="#deleteGame" style="margin-left: 15px;" id="deletegame" data-toggle="modal" type="submit" class="upload btn btn-danger mb-2 btn-pill">
                                                Xoá Game
                                            </a>
                                            <a href="javascript:void(0)" style="margin-left: 15px;" id="updategame" type="submit" class="upload btn btn-primary mb-2 btn-pill">
                                                Cập nhập Game
                                            </a>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="deleteGame" class="modal fade" style="">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Xoá game {{$game->namegame}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                        <p>Bạn có chắc muốn xoá game này?</p>
                        <p class="text-warning"><small>Việc xoá này không thể hoàn lại.</small></p>
                    </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <a type="submit" class="btn btn-success add-category-btn" id="delete" style="color:white">Xoá</a>
                </div>
            </div>
        </div>
    </div>
    <div id="giftGame" class="modal fade" style="">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tặng game {{$game->namegame}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div id="gift-body" class="modal-body">
                    @include('admin/action/game/user')
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <a type="submit" class="btn btn-success add-category-btn" id="giftgame" style="color:white">Tặng</a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('asset/ckeditor5-build-classic/ckeditor.js')}}"></script>
    <script>
        var content = "";
        ClassicEditor
            .create(document.querySelector('#description'))
            .then(editor => {

                editor.setData('{{$game->detailgame}}');
                content = editor;
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        $(document).ready(function() {
            var checkmap = document.getElementsByClassName('check');
            for (var i = 0; i < checkmap.length; i++) {
                console.log(checkmap[i]);
            }
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Select/Deselect checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function() {
                if (this.checked) {
                    checkbox.each(function() {
                        this.checked = true;
                    });
                } else {
                    checkbox.each(function() {
                        this.checked = false;
                    });
                }
            });
            checkbox.click(function() {
                if (!this.checked) {
                    $("#selectAll").prop("checked", false);
                }
            });

            function filter_ptags_on_images($content) {
                return $content.replace(/<p[^>]*>/g, '').replace(/<\/p>/g, '');
            }
            var imgBase64 = "";

            function readFile() {

                if (this.files && this.files[0]) {
                    imgBase64 = "";
                    var FR = new FileReader();

                    FR.addEventListener("load", function(e) {
                        document.getElementById("pre-img").src = e.target.result;
                        imgBase64 += e.target.result;
                        alert(imgBase64);
                    });

                    FR.readAsDataURL(this.files[0]);
                }

            }
            document.getElementById("file-img").addEventListener("change", readFile);
            //updategame
            function updategame(idgame, imggame, namegame, description, coin,linkgame,iddm) {
                $.ajax({
                    url: "{{route('updategame')}}",
                    method: "post",
                    data: {
                        _token: '{{csrf_token()}}',
                        idgame: idgame,
                        imggame: imggame,
                        namegame: namegame,
                        description: description,
                        coin: coin,
                        linkgame: linkgame,
                        iddm: iddm
                    },
                    success: function(data) {
                        if (data == 1) {
                            alert('Cập nhập game thành công');
                            location.reload();
                        }
                    }
                })
            }
            $('#updategame').on('click', function() {
                var idgame = '{{$game->id}}'
                var namegame = $('#gameName').val();
                var description = filter_ptags_on_images(content.getData());
                var coin = $('#coin').val();
                var linkgame = $('#gameLink').val();
                var iddm = $("#danhmucgame option:selected" ).attr('value');
                updategame(idgame, imgBase64, namegame, description, coin,linkgame,iddm);
            })
            //deletegame
            function deleteGame(idgame) {
                $.ajax({
                    url: "{{route('deletegame')}}",
                    method: "post",
                    data: {
                        _token: '{{csrf_token()}}',
                        idgame: idgame
                    },
                    success: function(data) {
                        if (data == 1) {
                            alert('Xoá game thành công');
                            location.reload();
                        }
                    }
                })
            }
            $('#delete').on('click',function() {
                var idgame = '{{$game->id}}';
                deleteGame(idgame);
            }) 
            //giftgame
            function giftGame(idgame, listusername) {
                $.ajax({
                    url: "{{route('giftgame')}}",
                    method: "post",
                    data: {
                        _token: '{{csrf_token()}}',
                        idgame: idgame,
                        listusername: listusername
                    },
                    success: function(data) {
                        if (data == 1) {
                            alert("Tặng quà thành công");
                            location.reload();
                        }
                    }
                })
            }
            $('#giftgame').on('click', function() {
                var idgame = "{{$game->id}}";
                var alluserchecked = "";
                $('#gift-body input[type="checkbox"].check').each(function() {
                    if ($(this).is(":checked")) {
                        var username = $(this).attr("data-username");
                        alluserchecked += username + ";";
                    }
                });
                var listUsernameArray = alluserchecked.split(';');
                giftGame(idgame, listUsernameArray);
            })
        })
    </script>
    @stop
</body>

</html>