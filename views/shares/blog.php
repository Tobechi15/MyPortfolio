<html>

<head>
    <title>inline css</title>
    <link rel="stylesheet" href="\finance\landing\assets/css/index.css">
    <link rel="stylesheet" href="\finance\landing\assets\css\finacial.css">
    <link rel=stylesheet type="text/css" href="\finance\landing\assets\css\blog.css">
    <link rel="stylesheet" href="/finance/landing/assets/css/vendor/font-awesome-4.7/css/font-awesome.min.css">
</head>
<body>
    <div class="header" id="coo">
        <div class="title">money pooping machine</div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        <div class="option">
            <a class="home" href="<?php echo ROOT_URL; ?>">
                <li>Home</li>
            </a>
            <a class="" href="<?php echo ROOT_URL; ?>shares">
                <li>finance center</li>
            </a>
            <a class="about" href="<?php echo ROOT_URL; ?>shares/about">
                <li>About us</li>
            </a>
            <a class="sign in" href="<?php echo ROOT_URL; ?>users/login">
                <li>Sign in</li>
            </a>
        </div>
    </div>
    <br><br><br><br><br><br><br>
    <div id=container>
        <article>
            <section class="post-head">
                <h2>blog post title</h2>
                <small>posted on <time datetime="2019-07-10">july 10, 2019</time></small>
            </section>
            <section class="post-body">
                <p>whats up hey how are you doing i hope every thing is alright is aunt libro around i wanted to inform her i am traveling to calfonia to futher my education i'm gonna be staying in an apartment close by so i'll be visiting</p>
                <p>check out the latest html project video</p>
                <video width="600" height="400" controls>
                    <source src="C:\Users\user\Downloads\movie\tfpdl.com-incr21872b.mkv" type="video/mp4">
                </video>
            </section>
            <section class="post-foot">
                <p>filed under general</p>
                <p>written by Tobechi</p>
            </section>
        </article>
        <article>
            <section class="post-head">
                <h2>blog post title</h2>
                <small>posted on <time datetime="2019-07-10">july 10, 2019</time></small>
            </section>
            <section class="post-body">
                <p>whats up hey are you doing i hope every thing is alright is aunt libro around i wanted to inform her i am traveling to calfonia to futher my education i'm gonna be staying in an apartment close by so i'll be visiting</p>
                <video width="600" height="400" controls>
                    <source src="C:\Users\user\Downloads\movie\Aladdin_(2019)_CAMRip_high_(fzmovies.net).mp4" type="video/mp4">
                </video>
            </section>
            <section class="post-foot">
                <p>filed under general</p>
                <p>written by Tobechi</p>
            </section>
        </article>
        <script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("coo").style.top = "0";
            } else {
                document.getElementById("coo").style.top = "-65px";
            }
            prevScrollpos = currentScrollPos;
        }

        function myFunction() {
            var x = document.getElementById("coo");
            if (x.className === "header") {
                x.className += " responsive";
            } else {
                x.className = "header";
            }
        }
        </script>
    </div>
    <div id=dounut>
        <article>check out this song <br>
            <audio controls>
                <source src="Over%20the%20Horizon.mp3" type="audio/mp4">
            </audio>
        </article>
    </div>
    <footer>
        <p>&copy;2019&bull;Tobechi ogaziechi</p>
    </footer>

</body>

</html>