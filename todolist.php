<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id"
        content="<YOUR-CLIENT-ID>.apps.googleusercontent.com.apps.googleusercontent.com">
    <title>Todolist</title>
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
    }

    body {
        background-color: #dddddd;
    }

    .generality {
        width: 50%;
        height: 70%;
        margin: auto;
    }

    .image {
        margin: auto;
        width: 200px;
        height: 200px;
    }

    .image img {
        max-width: 100%;
        max-height: 100%;
    }

    .form_all {
        width: 100%;
        height: 300px;
    }


    .input_txt input {
        padding: 15px;
        width: 95%;
        margin-bottom: 0px;
        margin-top: 1%;
        border-radius: 5px;
        display: inline-block;
        font-size: 15px;
        background-color: #000000e3;
        color: #dddddd;
    }

    h3 {
        font-size: 30px;
        margin-bottom: 10px;
    }

    .but input {
        display: block;
        border: 1px solid rgba(29, 5, 5, 0.46);
        border-radius: 5px;
        padding: 15px;
        outline: none;
        width: 100%;
        margin-top: 20px;
        margin-bottom: 20px;
        cursor: pointer;
    }

    .but {
        width: 50%;
        margin: auto;

    }

    .but input:hover {
        color: black;
        background-color: #a2d5f2;
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        -webkit-transition-duration: 0.4s;
        transition-duration: 0.4s;
    }

    .signin {
        background-color: #133B5C;
        color: white;
    }

    .signup {
        background-color: #1E5F74;
        color: white;
    }

    .googleSignIn {
        width: 100px;
        height: 50px;
        margin: auto;
    }

    .googleSignIn img {
        max-width: 100%;
        max-height: 100%;
    }

    .google_a {
        width: 250px;
        margin: auto;
    }

    .google_a a {
        text-decoration: none;
        color: black;
        font-family: 'Courier New', Courier, monospace;
    }

    .erro {
        width: 100%;
        height: 10px;
        color:red;
        margin-left: 20px;
    }

</style>

<script>
    var signin_btn = document.getElementById('sigin');
    var signup_btn = document.getElementById('signup');

    signin_btn.addEventListener('click', function(){
        FormData.myform.action = 'mytodolist.php';
    })
</script>   
<body>

    <div class="generality">
        <div class="image">
            <img src="php.png" alt="">
        </div>
        <div class="title_signin">
            <h3>Sign In</h3>
        </div>
        <div class="form_all">
            <form action="" method="post" name="myform" class="form" id="form">
                <div class="login">
                    <div class="input_txt">
                        <input name="email" type="email" id="email" placeholder="Email...">
                    </div>
                    <div class="erro">
                        <p> </p>
                    </div>
                    <div class="input_txt">
                        <input name="password" type="password" placeholder="Password...">
                    </div>

                    <div class="erro">
                    </div>

                    <div class="but">
                        <input type="submit" class="signin" id="signin" value="Sign in to Account"
                            style=" opacity: 0.6;">
                    </div>
                    <div class="but">
                        <input type="submit" class="signup" id="signup" value="Signup to creat Account"
                            style=" opacity: 0.6;">
                    </div>
            </form>
                    <div class="google_a">
                        <a href="">or Sign in with Google</a>
                    </div>
                    <div class="googleSignIn">
                        <img src="google.png" alt="" id="googleSignIn">
                        <!-- <script src="https://apis.google.com/js/platform.js?onload=onLoadGoogleCallback" async -->
                            defer></script>
                    </div>
                </div>
            
        </div>
        <!-- end form_all -->
    </div>
    <!-- end generality -->

</body>



<!-- <script>
    function onLoadGoogleCallback() {
        gapi.load('auth2', function () {
            auth2 = gapi.auth2.init({
                client_id: '<YOUR-CLIENT-ID>.apps.googleusercontent.com',
                cookiepolicy: 'single_host_origin',
                scope: 'profile'
            });

            auth2.attachClickHandler(element, {},
                function (googleUser) {
                    console.log('Signed in: ' + googleUser.getBasicProfile().getName());
                }, function (error) {
                    console.log('Sign-in error', error);
                }
            );
        });

        element = document.getElementById('googleSignIn');
    }
</script> -->



</html>