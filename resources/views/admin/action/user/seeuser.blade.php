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
                                <img src="{{$account->avatar}}" alt="user image" style="width: 100px;height: 100px;">
                            </div>
                            <div class="card-body">
                                <h4 class="py-2 text-dark">{{$account->lastname}} {{$account->firstname}}</h4>
                                <p>{{$account->email}}</p>
                            </div>
                        </div>
                        <hr class="w-100">
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="profile-content-right profile-right-spacing py-5">
                        <div class="tab-content px-3 px-xl-5" id="myTabContent">
                            <div class="tab-pane fade active show" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                <div class="tab-pane-content mt-5">
                                    <form>
                                        <div class="row mb-2">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="firstName">Tên</label>
                                                    <input type="text" class="form-control" id="firstName" value="{{$account->firstname}}">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lastName">Họ</label>
                                                    <input type="text" class="form-control" id="lastName" value="{{$account->lastname}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="userName">User name</label>
                                            <input type="text" class="form-control" id="userName" value="{{$account->username}}" disabled>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" value="{{$account->email}}">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="oldPassword">Password</label>
                                            <input type="text" class="form-control" id="Password" value="{{$account->password}}">
                                        </div>
                                        @if($detailadmin->type=="sadmin")
                                        <div class="row mb-2">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="firstName">Type</label>
                                                    <select style="font-size: 18px;margin-left: 10px;" name="type" id="typeee" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                        @if($account->type=="sadmin" || $account->type=="admin")
                                                        <option value="admin" selected>Admin</option>
                                                        <option value="member">Thành Viên</option>
                                                        @elseif($account->type=="member")
                                                        <option value="member" selected>Thành Viên</option>
                                                        <option value="admin">Admin</option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="d-flex justify-content-end mt-5">
                                            <a href="#giftUser" class="btn btn-primary mb-2 btn-pill" data-toggle="modal"><span class="material-icons" data-toggle="tooltip" title="Gift">Gift Coin
                                                </span></a>
                                            <a href="#deleteUser" style="margin-left: 10px;" class="btn btn-primary mb-2 btn-pill" data-toggle="modal"><span class="material-icons" data-toggle="tooltip" title="Delete">Delete
                                                    User</span></a>
                                            <a type="submit" id="update" style="margin-left:10px;color: white;" class="btn btn-primary mb-2 btn-pill" >Update User</a>
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
    <div id="deleteUser" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Xoá người dùng</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Bạn có chắc muốn xoá người dùng này?</p>
                        <p class="text-warning"><small>Việc xoá này không thể hoàn lại.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="giftUser" class="modal fade" style="">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Tặng Coin cho người dùng {{$account->username}}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Coin</label>
                            <input type="text" class="form-control edit-category-add" id="coin" required placeholder="Nhập số coin muốn tặng">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <a type="submit" href="javascript:void(0)" class="btn btn-success add-category-btn" id="gcoin">Tặng</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            //gift coin
            function giftCoin(senduser,receiveuser,coin) {
                $.ajax({
                    url: "{{route('giftcoin')}}",
                    method: "get",
                    data: {
                        senduser: senduser,
                        receiveuser: receiveuser,
                        coin: coin,
                    },
                    success: function(data) {
                        if(data==1) {
                            alert("Tặng Coin thành công");
                        }
                    }
                }) 
            }
            $('#gcoin').on('click',function() {
                var senduser = "{{$detailadmin->username}}";
                var receiveuser  = "{{$account->username}}";
                var coin = $('#coin').val();
                giftCoin(senduser,receiveuser,coin);
            })
        })
    </script>
    @stop
</body>

</html>