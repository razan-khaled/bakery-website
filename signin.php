<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/6ea69205c8.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="css/snp.css">
    <title>signin page </title>



</head>

<body class="ap">
    <!-- ---main-nav start--- -->



    <div class="navbar navbar-expand-md bg-dark navbar-dark text-white">
        <!--navbar-expand-md haydi krmel lishaya lmahtuta mn fo2 iza zghriet lsccren aan lmd ysiru ykhtfu-->
        <div class="container"><!--waet zdet haydi ldiv loho baad shwey aan tarab abl mahatta ken mlaza2 aal taraf-->
            <a href="#" class="navbar-brand">SHR Bakes</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
                <span class="navbar-toggler-icon"></span> <!--haydi hon hiye li tal3et ltat shahtet aal taraf-->

            </button>

            <div class="collapse navbar-collapse " id="mainmenu">
                <ul class="navbar-nav ms-auto"> <!--ms-auto btkhali lishya li bl nav tkun aal tarf -->
                    <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="index.html#about" class="nav-link">About</a></li>
                    
                    <li class="nav-item"><a href="store.php" class="nav-link">Store</a></li>
                        
                    <li class="nav-item"><a href="customer.php" class="nav-link">Get in touch</a></li>


                </ul>
            </div>
            <div class="pin">
                <div class="position-relative">

                    <a href="orders.php" class="text-decoration-none text-light mx-2"><!-- l'icône du panier-->
                        <i class="fa-solid fa-cart-arrow-down nav-icon"></i>
                    </a>
                    <a href="signin.php" class="text-decoration-none text-light mx-2"><!-- l'icône de l'utilisateur (user).-->
                        <i class="fa-solid fa-user nav-icon"></i>
                    </a>
                    <a href="signout.php" class="text-decoration-none text-light mx-2"><!-- l'icône du logout-->
                    <i class="fa-solid fa-arrow-right-from-bracket" style="color: #42c41a;"></i>
                  </a>
                </div>
                <div class="position-absolute rounded-circle cart"></div>
                <div class="position-absolute rounded-circle user"></div>
            </div>


        </div>
    </div>

    <!-- ----first nav end--- -->





    <!-- Sign In Page -->
    <div class="row content">
        <div class="container">
            <div class="center-text">
                <h1 class="center-text">Signin</h1>
                <br>

                <form action="login.php" method="post">
                    <div class="field">
                        <input class="input" type="text" name="username" id="username" required>
                        <label class="label" for="username">Username</label>
                    </div>

                    <br>
                    <div class="field">
                        <input class="input" type="password" name="password" id="password" required>
                        <label class="label" for="password">Password</label>

                    </div>

                    <br>
                    <div class="h-field">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember me</label>
                    </div>
                    <div class="field">
                        <input class="btn" type="submit" value="Signin" name="log_user">
                    </div>
                </form>
                <p class="center-text"> Don't have an account? </p>
                <a class="btn" href="signup.php">Signup</a>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
    integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
    crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
    integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
    crossorigin="anonymous"></script>

</html>