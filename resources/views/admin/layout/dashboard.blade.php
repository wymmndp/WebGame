@extends('admin/layout/headeradmin')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <style>
    </style>
</head>

<body>
    @section('content')
    <div class="content">
        <div class="bg-white border rounded">
            <div class="row no-gutters">
                <div class="col-lg-4 col-xl-3">
                    <div class="profile-content-left profile-left-spacing pt-5 pb-3 px-3 px-xl-5">
                        <div class="card text-center widget-profile px-0 border-0">
                            <div class="card-img mx-auto rounded-circle">
                                <img id="userimg" src="{{$detailadmin->avatar}}" alt="user image"
                                    style="width: 100px;height: 100px;">
                            </div>
                            <div class="card-body">
                                <h4 class="py-2 text-dark">{{$detailadmin->lastname}} {{$detailadmin->firstname}}</h4>
                                <p>{{$detailadmin->email}}</p>
                            </div>
                        </div>
                        <hr class="w-100">
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="profile-content-right profile-right-spacing py-5">
                        <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="settings-tab" data-toggle="tab" href="#settings"
                                    role="tab" aria-controls="settings" aria-selected="true">Settings</a>
                            </li>
                        </ul>
                        <div class="tab-content px-3 px-xl-5" id="myTabContent">
                            <div class="tab-pane fade active show" id="settings" role="tabpanel"
                                aria-labelledby="settings-tab">
                                <div class="tab-pane-content mt-5">
                                    <form id="edit-information">
                                        <div class="form-group row mb-6">
                                            <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">User
                                                Image</label>
                                            <div class="col-sm-8 col-lg-10">
                                                <div class="custom-file mb-1">
                                                    <input type="file" class="custom-file-input" id="coverImage">
                                                    <label class="custom-file-label" for="coverImage">Choose
                                                        file...</label>
                                                    <div class="invalid-feedback">Example invalid custom file feedback
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="firstName">Tên</label>
                                                    <input type="text" class="form-control" id="firstName"
                                                        value="{{$detailadmin->firstname}}">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Họ</label>
                                                    <input type="text" class="form-control" id="lastName"
                                                        value="{{$detailadmin->lastname}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="userName">User name</label>
                                            <input type="text" disabled class="form-control" id="userName"
                                                value="{{$detailadmin->username}}">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="email">Email</label>
                                            <input name="email" type="email" class="form-control" id="email"
                                                value="{{$detailadmin->email}}">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="oldPassword">Old password</label>
                                            <input name="oldpass" type="password" class="form-control" id="oldPassword">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="newPassword">New password</label>
                                            <input name="newpass" type="password" class="form-control" id="newPassword">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="conPassword">Confirm password</label>
                                            <input name="confirmpass" type="password" class="form-control"
                                                id="conPassword">
                                        </div>

                                        <div class="d-flex justify-content-end mt-5">
                                            <a id="btn-update" href="javascript:void(0)" type="submit" class="btn btn-primary mb-2 btn-pill">Update
                                                Profile</a>
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
        var imgBase64 = "";

        function readFile() {

            if (this.files && this.files[0]) {
                imgBase64 = "";
                var FR = new FileReader();

                FR.addEventListener("load", function(e) {
                    document.getElementById("userimg").src = e.target.result;
                    imgBase64 += e.target.result;
                    alert(imgBase64);
                });

                FR.readAsDataURL(this.files[0]);
            }

        }
        document.getElementById("coverImage").addEventListener("change", readFile);
        $('#edit-information').validate({
            rules: {
                confirmpass: {
                    equalTo: "#newPassword"
                }
            },
            messages: {
                confirmpass: {
                    equalTo: "Vui lòng nhập đúng mật khẩu"
                }
            }
        });
        function updateInformation(username,firstname,lastname,avatar,email,oldpass,newpass) {
            $.ajax({
                    url: "{{route('updateInformation')}}",
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
                        if(data==1) {
                            alert("Cập nhập thông tin thành công");
                            location.reload();
                        } else alert("Nhập sai mật khẩu cũ");
                    }
                })
        }
        $('.btn-pill').on('click',function() {
            var username = $("#userName").val();
            var firstname = $("#firstName").val();
            var lastname = $("#lastName").val();
            var avatar = imgBase64;
            var email = $("#email").val();
            var oldpass = $("#oldPassword").val();
            var newpass = $("#newPassword").val();
            updateInformation(username,firstname,lastname,avatar,email,oldpass,newpass);
        })
    })
    </script>
    @stop
</body>

</html>