<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/public/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/public/css/sign-up.css">
    <link rel="stylesheet" type="text/css" href="/public/css/aos.css">
</head>

<body>
    <div class="login-page" data-aos="fade-up">
        <div class="form">
            <form class="login-form" method="POST" action="" id="login-form">
                <span  id="log_required" class="asign"></span>
                <input type="text" name="login_name" placeholder="username" id="log_usr" />
                <span  id="pass_required" class="asign"></span>
                <input type="password" name="login_pass" placeholder="password" id="log_pass" />
                <button type="submit" name="login">login</button>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="/public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/public/js/sign-up.conf.js"></script>
    <script type="text/javascript" src="/public/js/aos.js"></script>
    <script type="text/javascript" src="/public/js/aos.conf.js"></script>
    <script type="text/javascript" src="/public/js/validate.js"></script>

</body>

</html>