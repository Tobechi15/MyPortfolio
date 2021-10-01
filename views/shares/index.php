<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Finance center</title>
    <link rel="stylesheet" href="\finance\landing\assets/css/index.css">
    <link rel="stylesheet" href="\finance\landing\assets\css\finacial.css">
    <link rel="stylesheet" href="/finance/landing/assets/css/vendor/font-awesome-4.7/css/font-awesome.min.css">
</head>

<body>
    <div class="header" id="coo">
        <div class="title">Finance center</div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        <div class="option">
            <a class="" href="<?php echo ROOT_URL; ?>">
                <li>Home</li>
            </a>
            <a class="home" href="<?php echo ROOT_URL; ?>shares">
                <li>finance center</li>
            </a>
            <a class="about" href="<?php echo ROOT_URL; ?>shares/about">
                <li>About us</li>
            </a>
            <a class="sign in" href="">
                <li>Sign in</li>
            </a>
        </div>
    </div>
    <menu type="context">
    </menu>
    <br><br><br><br>
    <div class="quickactivity">
        <a href="<?php echo ROOT_URL; ?>shares/blog" class="quick-card">
            <div>
                <img src="" alt="">
                <div class="name">posts</div>
            </div>
        </a>
        <div id="myBtn2" class="quick-card">
            <img src="" alt="">
            <div class="name">Skills</div>
        </div>
        <div id="myBtn" class="quick-card">
            <img src="" alt="">
            <div class="name">How to get started</div>
        </div>
        <br><br>
    </div>
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Some text in the Modal..</p><br>
            <video id="vid" class="myvideo" controls>
                <source src="\finance\landing\assets\video\1.Ultimate Web Designer & Developer Course- Build 23 Projects! - Udemy[via torchbrowser.com].mp4">
            </video>
        </div>
    </div>
    <div id="myModal2" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Some text in the Modal..</p><br>
            <div class="item1">
                <h3>Skills</h3><br>
                <li>
                    Cryptocurrencies<br>
                    <a class="time">3 hours ago</a>
                </li><br>
                <li>
                    Forex<br>
                    <a class="time">5 hours ago</a>
                </li><br>
                <li>
                    robot trading<br>
                    <a class="time">1 day ago</a>
                </li><br>
            </div>
        </div>
    </div>
    <div class="grid-container">
        <div class="item1">
            <h3>Popular Topics</h3><br>
            <li>
                jhg kjhc kyufuhksckjdijaisncdib ijewhro3rn v3r983<br>
                <a class="time">3 hours ago</a>
            </li><br>
            <li>
                i oujin 0909ii40i094 9 i i4uti0i ij 0t3i0 iiu3 0<br>
                <a class="time">5 hours ago</a>
            </li><br>
            <li>
                094090r0 8 32 m84 ru0 0[3 8283982 2 t434n 4 4 h4<br>
                <a class="time">1 day ago</a>
            </li><br>
        </div>
        <div class="item2">
            <h3>Dont see a topic your <br>interested in ?</h3><br>

            read the latest finace advice learn to <br> use our matirial
            <br><br>
            <a class="menu-btn">Ask Question</a>
        </div>
        <div class="item3">
            <h3>Events</h3>
            <table>
                <tr>
                    <td>v v ,kjh vihuyjgvuygbju</td>
                    <td>gcuguugviyyvi</td>
                </tr>
            </table>
        </div>
        <div class="item4">
            <h3>latest update</h3><br>
            <li>
                jhg kjhc kyufuhksckjdija<br>
                <a class="time">3 hours ago</a>
            </li><br>
            <li>
                i oujin 0909ii40i094 9 <br>
                <a class="time">5 hours ago</a>
            </li><br>
            <li>
                094090r0 8 32 m84 ru0 <br>
                <a class="time">1 day ago</a>
            </li><br>
        </div>
    </div>
    <div class="footer">
        <div class="address">
            <a class="f-head">About us</a><br><br><br>
            hiweweuorpcqroobe4tviurhtv34uhotiu43ioouoiyouiivcytcfvvyvfyyyvftcscvtcbytytybnybybybtytbybytuuytcfffffffjtrtrrurbygtytyt
        </div>
        <div class="links">
            <a class="f-head">Quick links</a> <br><br>

            <a href="">How it works</a><br>
            <a href="">admin</a><br>
            <a href="">FAQs</a><br>
            <a href="">Contact us</a><br>
            <a href="">Blog</a><br>
            <a href="">Online store</a><br>
        </div>
        <div>
            jvkjcuvolio
            iuybiniubuivuygoikyckvylylyylyooiucby2iyq2r3bricb3iurbcibriuby293rni23i3r3uryiu2y3iruc24yuyucbyu4ryu4ucnqiubyucuquy4c
        </div>
    </div>
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
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block"
            document.getElementById('vid').play();
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
            document.getElementById('vid').pause();
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        var modal2 = document.getElementById("myModal2");

        // Get the button that opens the modal
        var btn2 = document.getElementById("myBtn2");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[1];

        // When the user clicks on the button, open the modal
        btn2.onclick = function() {
            modal2.style.display = "block"
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal2.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal2) {
                modal2.style.display = "none";
            }
        }
    </script>
    <footer>
        ©2020 Money pooping machine.com &nbsp;all right reserved <br>
        Made by Tobechi Ogaziechi
    </footer>
</body>

</html>