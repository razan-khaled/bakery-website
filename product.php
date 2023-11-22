 <!-- ---VIEW RECIPIES PAGE--- -->
 <html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- ---font google--- -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/6ea69205c8.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Leckerli+One& family-Montserrat:wght@300;400 500 600; 700; 800;900&display-swap" rel="stylesheet">

 
  <title>signin page </title>
  <style>

.content {
        margin-left: 50px;
        margin-right: 50px;
        
 
}
.title {font-size: 2.3rem;
  font-weight: 800;   
  color: #12661dea;
  font-family: 'Leckerli One', cursive;}
</style>
  
</head>
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
 
 
 
 <?php
include 'db.php';
$conn = openConnection();
$sql = "SELECT * FROM products JOIN recipes ON products.id = recipes.id WHERE products.id = " . $_GET['id'];
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="row content">';
        echo '<h1 class="title">' . $row['name'] . '</h1>';
        echo '<img src="images/products/' . $row['image'] . '" alt="' . $row['name'] . '" style="max-width: 100%; border-radius: 40px;">';
        // print the ingredients as list
        echo '<h3  class="title">Ingredients</h3>';
        echo '<ul>';
        $ingredients = explode('#', $row['ingredients']);
        foreach ($ingredients as $ingredient) {
            echo '<li>' . $ingredient . '</li>';
        }
        echo '</ul>';
        // print the instructions as list
        echo '<h3 class="title">Instructions</h3>';
        echo '<ol>';
        $instructions = explode('#', $row['instructions']);
        foreach ($instructions as $instruction) {
            echo '<li>' . $instruction . '</li>';
        }
        echo '</ol>';
        echo '</div>';
    }
}
closeConnection($conn);


?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
    integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
    crossorigin="anonymous"></script>
</body>
</html>