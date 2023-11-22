<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <script src="https://kit.fontawesome.com/6ea69205c8.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">


  <title>submission page </title>

  <style>
    .smaller-image {
      width: 250px;
      /* Réglez la largeur souhaitée */
      height: auto;
      /* Maintient le rapport largeur/hauteur d'origine */
    }

    #inp {
      margin: auto;
      padding-left: 100px;


    }

    #m {
      height: 100px;
    }

    #s {
      background-color: rgb(12, 52, 230);
    }



    body {
      background: linear-gradient(to right, #e0dbdd 0%, #0a5203 100%);
      font-size: 12px;
    }

    body,
    button,
    input {
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
      letter-spacing: 1.4px;
    }

    .background {
      display: flex;
      min-height: 100vh;
    }

    .container {
      flex: 0 1 700px;
      margin: auto;
      padding: 10px;
    }

    .screen {
      position: relative;
      background: #3e3e3e;
      border-radius: 15px;
    }

    .screen:after {
      content: '';
      display: block;
      position: absolute;
      top: 0;
      left: 20px;
      right: 20px;
      bottom: 0;
      border-radius: 15px;
      box-shadow: 0 20px 40px rgba(0, 0, 0, .4);
      z-index: -1;
    }

    .screen-header {
      display: flex;
      align-items: center;
      padding: 10px 20px;
      background: #4d4d4f;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
    }

    .screen-header-left {
      margin-right: auto;
    }

    .screen-header-button {
      display: inline-block;
      width: 8px;
      height: 8px;
      margin-right: 3px;
      border-radius: 8px;
      background: white;
    }

    .screen-header-button.close {
      background: #ed1c6f;
    }

    .screen-header-button.maximize {
      background: #e8e925;
    }

    .screen-header-button.minimize {
      background: #74c54f;
    }

    .screen-header-right {
      display: flex;
    }

    .screen-header-ellipsis {
      width: 3px;
      height: 3px;
      margin-left: 2px;
      border-radius: 8px;
      background: #999;
    }

    .screen-body {
      display: flex;
    }

    .screen-body-item {
      flex: 1;
      padding: 50px;
    }

    .screen-body-item.left {
      display: flex;
      flex-direction: column;
    }

    .app-title {
      display: flex;
      flex-direction: column;
      position: relative;
      color: #047517;
      font-size: 26px;
    }

    .app-title:after {
      content: '';
      display: block;
      position: absolute;
      left: 0;
      bottom: -10px;
      width: 25px;
      height: 4px;
      background: #02420a;
    }

    .app-contact {
      margin-top: auto;
      font-size: 8px;
      color: #888;
    }

    .app-form-group {
      margin-bottom: 15px;
    }

    .app-form-group.message {
      margin-top: 40px;
    }

    .app-form-group.buttons {
      margin-bottom: 0;
      text-align: right;
    }

    .app-form-control {
      width: 100%;
      padding: 10px 0;
      background: none;
      border: none;
      border-bottom: 1px solid #666;
      color: #ddd;
      font-size: 14px;
      text-transform: uppercase;
      outline: none;
      transition: border-color .2s;
    }

    .app-form-control::placeholder {
      color: #666;
    }

    .app-form-control:focus {
      border-bottom-color: #ddd;
    }

    .app-form-button {
      background: none;
      border: none;
      color: #04661c;
      font-size: 14px;
      cursor: pointer;
      outline: none;
    }

    .app-form-button:hover {
      color: #036b2b;
    }

    .credits {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 20px;
      color: #ffa4bd;
      font-family: 'Roboto Condensed', sans-serif;
      font-size: 16px;
      font-weight: normal;
    }

    .credits-link {
      display: flex;
      align-items: center;
      color: #fff;
      font-weight: bold;
      text-decoration: none;
    }

    .dribbble {
      width: 20px;
      height: 20px;
      margin: 0 5px;
    }

    @media screen and (max-width: 520px) {
      .screen-body {
        flex-direction: column;
      }

      .screen-body-item.left {
        margin-bottom: 30px;
      }

      .app-title {
        flex-direction: row;
      }

      .app-title span {
        margin-right: 12px;
      }

      .app-title:after {
        display: none;
      }
    }

    @media screen and (max-width: 600px) {
      .screen-body {
        padding: 40px;
      }

      .screen-body-item {
        padding: 0;
      }
    }
  </style>
  <?php
include 'db.php';
$conn = openConnection();

// Insert the data into the database
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $no = $_POST['no'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contacts (name, no, message) VALUES ('$name', '$no', '$message')";
   
    $result = $conn->query($sql);
   
}

// Close db connection
closeConnection($conn);
?>





</head>


<body>

  <body class="ap">
    <!-- ---main-nav start--- -->



    <div class="navbar navbar-expand-md bg-dark navbar-dark text-white">
      <!--navbar-expand-md haydi kmel lishaya lmahtuta mn fo2 iza zghriet lsccren aan lmd ysiru ykhtfu-->
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

    <!--form submission -->
    <form action="customer.php" method="post">
      <div class="container">
        <div class="screen">
          <div class="screen-header">
            <div class="screen-header-left">
              <div class="screen-header-button close"></div>
              <div class="screen-header-button maximize"></div>
              <div class="screen-header-button minimize"></div>
            </div>
            <div class="screen-header-right">
              <div class="screen-header-ellipsis"></div>
              <div class="screen-header-ellipsis"></div>
              <div class="screen-header-ellipsis"></div>
            </div>
          </div>
          <div class="screen-body">
            <div class="screen-body-item left">
              <div class="app-title">
                <span>CONTACT</span>
                <span>US</span>
              </div>

            </div>
            <div class="screen-body-item">
              <div class="app-form">
                <div class="app-form-group">
                <input class="app-form-control" placeholder="NAME" name="name" required>

                </div>

                <div class="app-form-group">
                <input class="app-form-control" placeholder="no" name="no">

                </div>
                <div class="app-form-group message">
                <input class="app-form-control" placeholder="MESSAGE" name="message" required>

                </div>
                <div class="app-form-group buttons">

                  <button type="submit" class="app-form-button" name="send">SEND</button>
                 
                </div>
              </div>
            </div>
          </div>
        </div>

        </a>
      </div>
      </div>
      </div>
    </form>
    
    


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  </body>

</html>