<!-- store page -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/6ea69205c8.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!------footer links ---------->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <link rel="stylesheet" href="css/productstyle.css">
    <link rel="stylesheet" href="css/style.css">
    <title>store </title>
    <link rel="stylesheet" href="css/style2.css">

    <!------font google links  ---------->

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Leckerli+One& family-Montserrat:wght@300;400 500 600; 700; 800;900&display-swap" rel="stylesheet">
    <!------ links  product shopping grids ---------->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>


<body>

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
    <!-- ----home section --- -->
    <section class="home">
        <div class="slider">
            <div class="slider-image " style="background-image: url(images/piz.jpg);">

                <div class="home-textsl">
                    <h1>visit our <br> cafe</h1>
                    <p>Enjoy Some Delicious Treats Available <br> Only At Our Cafe. <br> To Provide Your Opinion .</p>
                    <a href="customer.php" class="btnn"> Click here</a>
                </div>
            </div>
        </div>

        <!-- Ajoutez plus d'images ici -->

        <div class="home-text">
            <h1>visit our <br> cafe</h1>
            <p>Enjoy Some Delicious Treats Available <br> Only At Our Cafe. <br> To Provide Your Opinion .</p>
            <a href="#" class="btnn"> Click here</a>
        </div>
        

    </section>
    

    <div class="container">
        <h3 class="h3">Holidays offers </h3>
    </div>
    <!---banner section--->
    <section class="banner">
        <div class="banner-img"> <img src="images/cika.jpeg"> </div>
        <div class="banner-img"> <img src="images/crr1.jpeg"> </div>
        <div class="banner-img"> <img src="images/pizza.jpeg"> </div>

    </section>
    <!------custom js link--- -->
    <!------slider--- -->
    <script>
        const sliderImages = document.querySelectorAll(".slider-image");
        let currentImageIndex = 0;

        function changeImage() {
            sliderImages[currentImageIndex].classList.remove("active");
            currentImageIndex = (currentImageIndex + 1) % sliderImages.length;
            sliderImages[currentImageIndex].classList.add("active");
        }

        setInterval(changeImage, 5000);
    </script>


    <!-- ----New Product Section--- -->
    <section class="new product">
        <div class="containerr">
            <h3 class="h3">View Our Products </h3>
            <div class="row">
                <?php
                include 'db.php';
                $conn = openConnection();
                $sql = "SELECT * FROM products";
                $result = $conn->query($sql);
                $itemCounter = 0;
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $itemCounter++;
                        echo ' <div class="col-md-3 col-sm-6">';
                        echo ' <div class="product-grid2">';
                        echo '       <div class="product-image2">';

                        echo '<img src="images/products/' . $row['image'] . '" alt="' . $row['name'] . '">';
                        echo '<ul class="social">';
                        echo '<li><a href="product.php?id=' . $row['id'] . '" data-tip="View Recipe"><i class="fa fa-eye"></i></a></li>';
                     
                            echo '<li><a href="cart.php?id=' . $row['id'] . '" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>';
                  
                        echo '</ul>';
                        
                            echo '<a class="add-to-cart" href="cart.php?id=' . $row['id'] . '">Add to Cart</a>';
                       
                        echo '</div>';
                        echo '<div class="product-content">';
                        echo '<h3 class="title">' . $row['name'] . '</h3>';
                        echo '<span class="price">$' . $row['price'] . '</span>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        if ($itemCounter == 8) {
                            // <!-- ----banner 02 section--- -->
                            echo '<section class="tt"> ';
                            echo '<h3 class="tth3">  Opening Hours </h3>';
                            echo ' </section>';
                            echo '<section class="banner"> ';
                            echo '<div class="banner-img">';
                            echo '<img src="images/ban1.jpeg">';
                            echo ' </div>';
                            echo '<div class="banner-img">';
                            echo '<img src="images/ban2">';
                            echo ' </div>';
                            echo ' </section>';
                            echo '<section class="tt"> ';
                            echo '<h3 class="tth3">   </h3>';
                            echo ' </section>';
                        }
                    }
                } else {
                    echo "No products found.";
                }

                closeConnection($conn);
                ?>


            </div>
    </section>

    <!-- Footer -->
    <section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="index.html"><i class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="index.html#about"><i class="fa fa-angle-double-right"></i>About</a></li>

                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="index.html#faq"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                        <li><a href="store.php"><i class="fa fa-angle-double-right"></i>Store</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled quick-links">

                        <li><a href="#" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Customers sevice</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href=""><i class="fa fa-tiktok"></i></a></li>

                        <li class="list-inline-item"><a href="https://instagram.com/razan____khaled?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D"><i class="fa fa-instagram"></i></a></li>


                    </ul>
                </div>

            </div>


        </div>
        </div>
    </section>
    <!-- ./Footer -->






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>