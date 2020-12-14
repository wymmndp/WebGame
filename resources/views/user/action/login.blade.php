<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="user_css/login.css">
</head>
@include('user/layout/header')
<body class="push-body html not-front not-logged-in no-sidebars page-user">
    <div id="main">
        <div id="main_inner">
            <div class="region region-content">
                <div class="block block-system block-odd first last clearfix" id="block-system-main">
                    <form id="user-login" action="{{Asset('login')}}" method="POST">
                        <div>
                            <div class="form-item form-type-textfield form-item-name">
                                <label for="edit-name">
                                    Username
                                    <span class="form-required" title="Bắt buộc nhập">
                                        *
                                    </span>
                                </label>
                                <input type="text" id="edit-name" name="username" value="" size="60" maxlength="16" class="form-text required">
                            </div>
                            <div class="form-item form-type-password form-item-pass">
                                <label for="edit-pass">
                                    Password
                                    <span class="form-required" title="Bắt buộc nhập">*</span>
                                </label>
                                <input type="password" id="edit-pass" name="pass" size="60" maxlength="20" class="form-text required">
                            </div>
                            <div class="form-actions form-wrapper" id="edit-action">
                                <input type="submit" id="" name="login" value="Đăng nhập" class="click-login">
                            </div>
                            {{ csrf_field() }}
                            @if(session('fail'))
                            <div class="form-actions form-wrapper" style="text-align: center;margin-top:5px;color:red;font-size:20px">
                                {{session('fail')}}
                            </div>
                            @endif
                            @if(session('success'))
                            <div class="form-actions form-wrapper" style="text-align: center;margin-top:5px;color:green;font-size:20px">
                                {{session('success')}}
                            </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#user-login').validate({
                rules: {
                    username: {
                        required:true,
                        minlength:3,
                    },
                    pass: {
                        required:true,
                        minlength:6
                    }
                }
            });
        })
    </script>
</body>


</html>