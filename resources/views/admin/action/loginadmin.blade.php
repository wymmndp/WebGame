<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Transparent Login Form UI</title> -->
    <title>Đăng Nhập Admin</title>
    <link rel="stylesheet" href="{{asset('admin_css/loginadmin.css')}}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <div class="bg-img">
        <div class="content">
            <header>Addicting Games</header>
            <form action="#">
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" required placeholder="Admin">
                </div>
                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" class="pass-key" required placeholder="Password">
                    <span class="show">SHOW</span>
                </div>
                
                <div class="field" style="margin-top: 15px;">
                    <input type="submit" value="LOGIN">
                </div>
            </form>
        </div>
    </div>
    <script>
    const pass_field = document.querySelector('.pass-key');
    const showBtn = document.querySelector('.show');
    showBtn.addEventListener('click', function() {
        if (pass_field.type === "password") {
            pass_field.type = "text";
            showBtn.textContent = "HIDE";
            showBtn.style.color = "#3498db";
        } else {
            pass_field.type = "password";
            showBtn.textContent = "SHOW";
            showBtn.style.color = "#222";
        }
    });
    </script>
</body>

</html>