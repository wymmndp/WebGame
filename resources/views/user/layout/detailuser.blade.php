<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('user_css/detailuser.css')}}">
    <link rel="stylesheet" href="{{asset('admin_css/sleek.css')}}">
    @include('user/layout/header')

<body class="push-body html not-front logged-in no-sidebars page-user page-user- ">
    <div id="main">
        <div id="main_inner">
            <div class="region region-content">
                <div class="recent-games__wrapper" style="min-height: 0px;"></div>
                <div id="block-system-main" class="block block-system block-odd first last clearfix">
                    <div class="profile" typeof="sioc:UserAccount" about="/users/duyphuc">
                        <div class="container">
                            <div class="profile-content">
                                <div class="user-name">
                                    <dt>Username:</dt>
                                    <dd>{{session()->get('username')}}</dd>
                                </div>
                                <div class="field field-name-field-tokens field-type-number-integer field-label-above">
                                    <div class="field-label">Type:&nbsp;</div>
                                    <div class="field-items">
                                        <div class="field-item even">{{$account->type}}</div>
                                    </div>
                                </div>
                                <div class="user-picture">
                                    <div title="View user profile." class="active img-upload" style="width: 104px;height: 104px;">
                                        <label style="cursor: pointer;width: 100%;height: 100%;" for="img-input"><img id="coverImage" style="width: 100%;height: 100%;" typeof="foaf:Image" src="{{$account->avatar}}"></label>
                                        <input id="img-input" type="file" />
                                    </div>
                                </div>
                                <div class="field field-name-field-tokens field-type-number-integer field-label-above">
                                    <div class="field-label">Coin:&nbsp;</div>
                                    <div class="field-items">
                                        <div class="field-item even">{{$account->coinhave}}</div>
                                    </div>
                                </div>
                                <div class="field field-name-field-tokens field-type-number-integer field-label-above">
                                    <div class="field-items">
                                        <a href="#uploadYourGame" type="submit" id="upload" class="form-submit upload field-item even" data-toggle="modal" style="border: 1px solid red;border-radius:4px;padding-left: 10px;padding-right: 10px"><span style="font-size: 20px;">Upload Game</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-form">
                                <form id="user-profile-form" accept-charset="UTF-8">
                                    <div>
                                        <div id="edit-account" class="form-wrapper">
                                            <div class="form-item form-type-textfield form-item-mail">
                                                <div class="form-item form-type-email" style="margin-bottom: 17px;">
                                                    <label for="edit-email">Email</label>
                                                    <input class="email-field form-text email-processed" type="text" id="edit-mail" name="email" size="25" maxlength="128" value="{{$account->email}}">
                                                </div>
                                                <div class="form-item form-type-realname" style="display: flex;flex-direction: row;">
                                                    <div class="lastname" style="margin-right: 15px;">
                                                        <label for="edit-lastname">Họ</label>
                                                        <input class="lastname-field form-text" type="text" id="edit-lastname" name="lastname" size="25" maxlength="128" value="{{$account->lastname}}">
                                                    </div>
                                                    <div class="firstname">
                                                        <label for="edit-firstname">Tên</label>
                                                        <input class="firstname-field form-text" type="text" id="edit-firstname" name="firstname" size="25" maxlength="128" value="{{$account->firstname}}">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-item form-type-password-confirm form-item-pass">
                                                <div class="form-item form-type-password form-item-old-pass password-parent" style="margin-bottom: 17px;">
                                                    <label for="edit-pass-old-pass">Mật khẩu cũ</label>
                                                    <input class="password-field form-text password-processed" type="password" id="edit-pass-old-pass" name="old-pass" size="25" maxlength="128">
                                                </div>
                                                <div class="form-item form-type-password form-item-pass-pass1 password-parent" style="margin-bottom: 17px;">
                                                    <label for="edit-pass-pass1">Mật khẩu mới</label>
                                                    <input class="password-field form-text password-processed" type="password" id="edit-pass-pass1" name="pass[pass1]" size="25" maxlength="128">
                                                </div>
                                                <div class="form-item form-type-password form-item-pass-pass2 confirm-parent">
                                                    <label for="edit-pass-pass2">Xác nhận mật khẩu mới</label>
                                                    <input class="password-confirm form-text" type="password" id="edit-pass-pass2" name="confirmpass" size="25" maxlength="128">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions form-wrapper" id="edit-actions--4">
                                            <a href="javascript:void(0)" type="submit" id="save" class="form-submit save"><span style="font-size: 20px;">Save</span></a>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="clear:both;"></div>
        </div>
        <div class="modal fade" id="uploadYourGame" tabindex="-1" aria-labelledby="exampleModalLarge" style="display: none;" aria-modal="true" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLarge">Upload Game Của Bạn</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4" style="border-right: 1px solid black;">
                                <div class="card text-center widget-profile px-0 border-0">
                                    <img src="https://images.summitmedia-digital.com/preview/images/instagram-placeholder.png" alt="" id="pre-img-game" style="width: 100%;height: 100%;">
                                </div>
                            </div>
                            <div class="col-8">
                                <form id="new-game-form">
                                    <div class="form-group mb-4">
                                        <label for="coverImage">Hình Game</label>
                                        <div class="">
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
                                        <input type="text" class="form-control" name="namegame" id="gameName" placeholder="Nhập tên game">
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="description">Description</label>
                                        <div class="description" id="description" require></div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="description">Link game</label>
                                        <input type="text" class="form-control" name="linkgame" id="gameLink" placeholder="Nhập link game">
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="coin">Coin</label>
                                        <input type="text" class="form-control" id="coin">
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="firstName">Thể Loại</label>
                                                <select style="font-size: 18px;margin-left: 10px;" name="type" id="danhmucgame" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                    @foreach($danhmuc as $dm)
                                                    <option value="{{$dm->iddanhmuc}}">{{$dm->tendanhmuc}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end mt-5">
                                        <a href="#" id="upgame" type="submit" class="upload btn btn-primary mb-2 btn-pill">Upload
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
    <script src="{{asset('asset/slimscrollbar/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('js/jekyll-search.min.js')}}"></script>
    <script src="{{asset('js/sleek.bundle.js')}}"></script>
    <script src="{{asset('asset/ckeditor5-build-classic/ckeditor.js')}}"></script>
    <script>
        var content = "";
        ClassicEditor
            .create(document.querySelector('#description'))
            .then(editor => {
                content = editor;
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        $(document).ready(function() {
            //remove tag p
            function filter_ptags_on_images($content) {
                return $content.replace(/<p[^>]*>/g, '').replace(/<\/p>/g, '');
            }
            // change img game
            var imgGameBase64 = "";
            function readFileGame() {

                if (this.files && this.files[0]) {
                    imgGameBase64 = "";
                    var FR = new FileReader();

                    FR.addEventListener("load", function(e) {
                        document.getElementById("pre-img-game").src = e.target.result;
                        imgGameBase64 += e.target.result;
                    });

                    FR.readAsDataURL(this.files[0]);
                }

            }
            document.getElementById("file-img").addEventListener("change", readFileGame);
            // change avatar
            var imgBase64 = "";

            function readFile() {

                if (this.files && this.files[0]) {
                    imgBase64 = "";
                    var FR = new FileReader();

                    FR.addEventListener("load", function(e) {
                        document.getElementById("coverImage").src = e.target.result;
                        imgBase64 += e.target.result;
                    });

                    FR.readAsDataURL(this.files[0]);
                }

            }
            document.getElementById("img-input").addEventListener("change", readFile);
            // validate form
            $('#user-profile-form').validate({
                rules: {
                    confirmpass: {
                        equalTo: "#edit-pass-pass1"
                    }
                },
                messages: {
                    confirmpass: {
                        equalTo: "Vui lòng nhập đúng mật khẩu"
                    }
                }
            });
            // update information
            function updateInformation(username, firstname, lastname, avatar, email, oldpass, newpass) {
                $.ajax({
                    url: "{{route('updateInformationUser')}}",
                    method: "post",
                    data: {
                        _token: '{{csrf_token()}}',
                        username: username,
                        firstname: firstname,
                        lastname: lastname,
                        avatar: avatar,
                        email: email,
                        oldpass: oldpass,
                        newpass: newpass
                    },
                    success: function(data) {
                        if (data == 1) {
                            alert("Cập nhập thành công")
                            location.reload();
                        } else if (data == -1) {
                            alert("Nhập sai mật khẩu cũ");
                        }
                    }
                })
            }
            $('#save').on('click', function() {
                var username = "{{session()->get('username')}}";
                var firstname = $("#edit-firstname").val();
                var lastname = $("#edit-lastname").val();
                var avatar = imgBase64;
                var email = $("#edit-mail").val();
                var oldpass = $("#edit-pass-old-pass").val();
                var newpass = $("#edit-pass-pass1").val();
                updateInformation(username, firstname, lastname, avatar, email, oldpass, newpass);
            })

            // upload game
            function uploadYourGame(username,namegame, imggame, linkgame, detail, coin, theloai) {
                $.ajax({
                    url: "{{route('upGame')}}",
                    method: "post",
                    data: {
                        _token: '{{csrf_token()}}',
                        username: username,
                        namegame: namegame,
                        imggame: imggame,
                        linkgame: linkgame,
                        detail: detail,
                        coin: coin,
                        theloai: theloai,
                    },
                    success: function(data) {
                        if (data == 1) {
                            alert("Up thành công. Xin vui lòng kiểm tra email thường xuyên !!! (Chúng tôi sẽ thông báo khi chúng tôi duyệt hoặc từ chối game của bạn)")
                            location.reload();
                        }
                    }
                })
            }
            $('#upgame').on('click',function(){
                var username ="{{$account->username}}";
                var namegame = $('#gameName').val();
                var linkgame = $('#gameLink').val();
                var detail = filter_ptags_on_images(content.getData());
                var coin = $('#coin').val();
                var theloai = $("#danhmucgame option:selected" ).attr('value');
                uploadYourGame(username,namegame,imgGameBase64,linkgame,detail,coin,theloai);
            }) 
              
            
        })
    </script>
    </script>
</body>

</html>