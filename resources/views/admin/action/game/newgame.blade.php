@extends('admin/layout/headeradmin')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Thêm Game mới</title>
</head>

<body>
    @section('content')
    <div class="content">
        <div class="bg-white border rounded">
            <div class="row no-gutters">
                <div class="col-lg-4 col-xl-3">
                    <div class="profile-content-left pt-5 pb-3 px-3 px-xl-5">
                        <div class="card text-center widget-profile px-0 border-0" style="width: 200px;height: 190px;">
                            <img src="https://images.summitmedia-digital.com/preview/images/instagram-placeholder.png" alt="" id="pre-img" style="width: 100%;height: 100%;">
                        </div>
                        <hr class="w-100">
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="profile-content-right py-5">
                        <div class="tab-content px-3 px-xl-5" id="myTabContent">
                            <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                <div class="mt-5">
                                    <form id="new-game-form"  action="{{route('addgame')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row mb-6">
                                            <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">Hình Game</label>
                                            <div class="col-sm-8 col-lg-10">
                                                <div class="custom-file mb-1">
                                                    <input type="file" name="imggame" multiple class="custom-file-input" id="file-img" required>
                                                    <label class="custom-file-label" for="coverImage">Choose
                                                        file...</label>
                                                    <div class="invalid-feedback">Example invalid custom file feedback
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="gameName">Tên Game</label>
                                            <input type="text" class="form-control" name="namegame" id="gameName" placeholder="Nhập tên game">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="description">Description</label>
                                            <input type="text" class="form-control" name="description" id="gameName" placeholder="Nhập tên game">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="description">Link game</label>
                                            <input type="text" class="form-control" name="linkgame" id="gameLink" placeholder="Nhập link game">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="coin">Coin</label>
                                            <input type="text" class="form-control" name="coin" id="coin">
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="firstName">Danh Mục</label>
                                                    <select style="font-size: 18px;margin-left: 10px;" name="type" id="danhmucgame" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                        @foreach($alldanhmuc as $danhmuc)
                                                            <option value="{{$danhmuc->iddanhmuc}}">{{$danhmuc->tendanhmuc}}</option>
                                                        @endforeach
                                                    </select>
                                                    <input type="hidden" id="iddm" name="iddanhmuc" value=""/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end mt-5">
                                            <button href="javascript:void(0)" id="newgame" type="submit" class="upload btn btn-primary mb-2 btn-pill">Add
                                                New Game
                                            </button>
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
    <script>
        $(document).ready(function() {
            function filter_ptags_on_images($content) {
                return $content.replace(/<p[^>]*>/g, '').replace(/<\/p>/g, '');
            }
            $("#danhmucgame").change(function() {
                var x = $("#danhmucgame option:selected" ).attr('value');
                $("#iddm").val(x)
            })
            var imgBase64 = "";
            function readFile() {
                if (this.files && this.files[0]) {
                    imgBase64 = "";
                    var FR = new FileReader();

                    FR.addEventListener("load", function(e) {
                        document.getElementById("pre-img").src = e.target.result;
                        imgBase64 += e.target.result;
                    });
                    FR.readAsDataURL(this.files[0]);
                }

            }
            document.getElementById("file-img").addEventListener("change", readFile);

            // function newgame(imggame, namegame, description, coin,linkgame,iddanhmuc) {
            //     $.ajax({
            //         url: "{{route('addgame')}}",
            //         method: "post",
            //         data: {
            //             _token: '{{csrf_token()}}',
            //             imggame: imggame,
            //             namegame: namegame,
            //             description: description,
            //             coin: coin,
            //             linkgame: linkgame,
            //             iddanhmuc: iddanhmuc
            //         },
            //         success: function(data) {
            //             if (data == 1) {
            //                 alert('Thêm game thành công');
            //                 location.reload();
            //             }
            //         }
            //     })
            // }
            // $('#newgame').on('click', function() {
            //     var namegame = $('#gameName').val();
            //     var description = filter_ptags_on_images(content.getData());
            //     var coin = $('#coin').val();
            //     var linkgame = $('#gameLink').val();
            //     var iddanhmuc = $("#danhmucgame option:selected" ).attr('value');
            //     newgame(imgBase64, namegame, description, coin,linkgame,iddanhmuc);
            // })
        })
    </script>
    @stop
</body>

</html>