@extends('admin/layout/headeradmin')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
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
                                <img src="https://i.pinimg.com/736x/27/bc/7b/27bc7b1d116c83824fbdf4547308a296.jpg" alt="user image" style="width: 100px;height: 100px;">
                            </div>
                            <div class="card-body">
                                <h4 class="py-2 text-dark">Duy Phúc</h4>
                                <p>ndphuc.19it1@vku.udn.vn</p>
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
                                    <form>
                                        <div class="form-group row mb-6">
                                            <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">User
                                                Image</label>
                                            <div class="col-sm-8 col-lg-10">
                                                <div class="custom-file mb-1">
                                                    <input type="file" class="custom-file-input" id="coverImage"
                                                        required="">
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
                                                        value="Phúc">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Họ</label>
                                                    <input type="text" class="form-control" id="lastName"
                                                        value="Nguyễn">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="userName">User name</label>
                                            <input type="text" class="form-control" id="userName" value="wymmndp">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email"
                                                value="ndphuc.19it1@vku.udn.vn">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="oldPassword">Old password</label>
                                            <input type="password" class="form-control" id="oldPassword">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="newPassword">New password</label>
                                            <input type="password" class="form-control" id="newPassword">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="conPassword">Confirm password</label>
                                            <input type="password" class="form-control" id="conPassword">
                                        </div>

                                        <div class="d-flex justify-content-end mt-5">
                                            <button type="submit" class="btn btn-primary mb-2 btn-pill">Update
                                                Profile</button>
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
    @stop
</body>

</html>