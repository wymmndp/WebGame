<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="user_css/register.css">
</head>
@include('user/layout/header')

<body class="push-body html not-front not-logged-in no-sidebars page-user page-user-register">
    <div id="main">
        <div id="main_inner">
            <div id="block-system-main" class="block block-system block-odd first last clearfix">
                <form method="POST" id="user-register-form" action="{{Asset('register')}}"
                    class="user-info-from-cookie">
                    @csrf
                    <div>
                        <div class="register-form--title">
                            Tạo Tài Khoản Mới
                        </div>
                        <div id="edit-account" class="form-wrapper">
                            <div class="form-item form-type-textfield form-item-name form-register">
                                <label for="edit-name" class="">
                                    Username
                                    <span class="form-required" title="Bắt buộc nhập">*</span>
                                </label>
                                <input name="username" type="text" class="username form-text required" id="edit-name"
                                    value="" size="60" maxlength="16">
                                <div class="err checkAcc" style="display: none;">
                                    <div class="checkAccount err-inner">

                                    </div>
                                </div>
                            </div>
                            <div class="form-item form-type-textfield form-item-pass form-register">
                                <label for="edit-pass" class="">
                                    Password
                                    <span class="form-required" title="Bắt buộc nhập">*</span>
                                </label>
                                <input name="pass" type="password" class="username form-text required" id="edit-pass"
                                    value="" size="60" maxlength="20">
                            </div>
                        </div>
                        <div id="edit-actions" class="form-actions form-wrapper">
                            <input type="submit" id="register-submit" name="register" class="form-submit"
                                value="Đăng Ký">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <script>
        $(document).ready(function() {
            $('#user-register-form').validate({
                rules: {
                    username: {
                        required: true,
                        minlength: 3,
                    },
                    pass: {
                        required: true,
                        minlength: 6
                    }
                }
            })
            $('#edit-name').keyup(function() {
                var username = $(this).val().trim();
                if (username != '' && username.length>3) {
                    $.ajax({
                        url: "{{route('checkUsername')}}",
                        type: 'post',
                        data: {
                            _token: '{{csrf_token()}}',
                            username: username
                        },
                        success: function(data) {
                            $('.checkAcc').css('display', 'block');
                            $('.checkAccount').html(data);
                        }
                    });
                } else {
                    $('.checkAcc').css('display', 'none');
                    $(".checkAccount").html("");
                }
            });
        });
        </script>
    </footer>
</body>

</html>