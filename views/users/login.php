<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial0-scale=1">
    <title>money pooping machine</title>
    <link rel="stylesheet" href="\finance\landing\assets\css\index.css">
    <link rel="stylesheet" href="/finance/landing/assets/css/vendor/font-awesome-4.7/css/font-awesome.min.css">
</head>

<body>
    <div class="header" id="coo">
        <div class="title">money pooping machine</div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        <div class="option">
            <a class="" href="<?php echo ROOT_URL; ?>">
                <li>Home</li>
            </a>
            <a class="" href="<?php echo ROOT_URL; ?>shares">
                <li>finance center</li>
            </a>
            <a class="about" href="<?php echo ROOT_URL; ?>shares/about">
                <li>About us</li>
            </a>
            <a class="home" href="<?php echo ROOT_URL; ?>users/login">
                <li>Sign in</li>
            </a>
        </div>
    </div>
    <div class="body" style="height: 100%;">
        <div class="ani">
            <div>$</div>
            <div>$</div>
            <div>$</div>
            <div>$</div>
            <div>$</div>
            <div>$</div>
            <div>$</div>
            <div>$</div>
        </div>
        <br><br><br><br><br><br><br><br>
        <div class="panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Login</h3>
            </div>
            <div class="panel-body">
                <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <label>Name</label><br>
                        <input type="text" name="name" class="form-control" />
                    </div><br>
                    <div class="form-group">
                        <label>Email</label><br>
                        <input type="text" name="email" class="form-control" />
                    </div><br>
                    <div class="form-group">
                        <label>Password</label><br>
                        <input type="password" name="password" class="form-control" />
                    </div><br>
                    <input class="btn primary" name="submit" type="submit" value="Submit" /><br><br>
                    <a class="tiny">Don't have an account <a href="<?php echo ROOT_URL; ?>users/register">register</a></a>
                </form>
            </div>
        </div>
        <script src="assets/JS/index.js"></script>
    </div>
</body>

</html>