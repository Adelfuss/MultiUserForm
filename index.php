<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <style>
       .container{
           margin-text-outline: 30px;
       }
       :root {
           --input-padding-x: .75rem;
           --input-padding-y: .75rem;
       }

       html,
       body {
           height: 100%;
       }

       body {
           display: -ms-flexbox;
           display: -webkit-box;
           display: flex;
           -ms-flex-align: center;
           -ms-flex-pack: center;
           -webkit-box-align: center;
           align-items: center;
           -webkit-box-pack: center;
           justify-content: center;
           padding-top: 40px;
           padding-bottom: 40px;
           background-color: #f5f5f5;
       }

       .form-signin {
           width: 100%;
           max-width: 420px;
           padding: 15px;
           margin: 0 auto;
       }

       .form-label-group {
           position: relative;
           margin-bottom: 1rem;
       }

       .form-label-group > input,
       .form-label-group > label {
           padding: var(--input-padding-y) var(--input-padding-x);
       }

       .form-label-group > label {
           position: absolute;
           top: 0;
           left: 0;
           display: block;
           width: 100%;
           margin-bottom: 0; /* Override default `<label>` margin */
           line-height: 1.5;
           color: #495057;
           border: 1px solid transparent;
           border-radius: .25rem;
           transition: all .1s ease-in-out;
       }

       .form-label-group input::-webkit-input-placeholder {
           color: transparent;
       }

       .form-label-group input:-ms-input-placeholder {
           color: transparent;
       }

       .form-label-group input::-ms-input-placeholder {
           color: transparent;
       }

       .form-label-group input::-moz-placeholder {
           color: transparent;
       }

       .form-label-group input::placeholder {
           color: transparent;
       }

       .form-label-group input:not(:placeholder-shown) {
           padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
           padding-bottom: calc(var(--input-padding-y) / 3);
       }

       .form-label-group input:not(:placeholder-shown) ~ label {
           padding-top: calc(var(--input-padding-y) / 3);
           padding-bottom: calc(var(--input-padding-y) / 3);
           font-size: 12px;
           color: #777;
       }
   </style>
</head>
<body>
<div class="container">
    <div class="row">
        <?php if (isset($_REQUEST['error'])): ?>
        <div class="col-lg-12">
            <span class="alert alert-danger"></span>
        </div>
        <?php endif;?>
    </div>
    <div class="row">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
            <form class="form-signin" method="post" action="login.php">
                <div class="text-center mb-4">
                    <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                    <h1 class="h3 mb-3 font-weight-normal">Floating labels</h1>
                </div>
                <div class="form-label-group">
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
                    <label for="inputEmail">Email address</label>
                </div>
                <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                    <label for="inputPassword">Password</label>
                </div>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
            </form>
        </div>
        <div class="col-lg-4">

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>