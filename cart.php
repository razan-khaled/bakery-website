
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/6ea69205c8.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="css/cart.css">
    <title>cart page </title>

</head>
<body >
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
    
    <div class="row content">
        <?php
        include 'db.php';
        $conn = openConnection();

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (!isset($_SESSION['user_id'])) {
          header('Location: signup.php');
       }

        if (isset($_POST['remove'])) {
            $sql = "DELETE FROM cart WHERE user_id = $_SESSION[user_id] AND id = $_POST[cart_id]";
            $conn->query($sql);
        }

        if (isset($_POST['checkout'])) {
            $sql = "INSERT INTO orders (user_id, product_id, quantity) SELECT $_SESSION[user_id], product_id, quantity FROM cart WHERE user_id = $_SESSION[user_id]";
            $conn->query($sql);
            $sql = "DELETE FROM cart WHERE user_id = $_SESSION[user_id]";
            $conn->query($sql);
        }
        
        if (isset($_POST['quantity']) && $_POST['quantity'] > 0) {
            $user_id = $_SESSION['user_id'];
            $product_id = $_POST['product_id'];
            $quantity = $_POST['quantity'];
            $sql = "INSERT INTO cart (user_id, product_id, quantity) VALUES ($user_id, $product_id, $quantity)";
            $result = $conn->query($sql);
            if ($result) {
                $sql = "SELECT * FROM products WHERE id = $product_id";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                
            } else {
                $_SESSION['noti'] = ["Failed to add to cart!"];
            }
        }
        ?>
        
        <?php if (isset($_GET['id'])) { ?>
           
            <div class="cart_add">
                <!--- Select quantity and display price and place order -->
        <h1>Add to Cart</h1>
        <?php
        $product_id = $_GET['id'];
        $sql = "SELECT * FROM products WHERE id = $product_id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        ?>
        <h2><?php echo $row['name']; ?></h2>
        <img src="images/products/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>" width="200px">
        <form action="cart.php" method="post">
            <input type="hidden" name="product_id" value="<?php echo $_GET['id']; ?>">
            <label for="quantity">Amount:</label>
            <input type="number" name="quantity" id="quantity" min="1" max="100" value="1">
            <input type="submit" name="submit" value="Add to cart">
        </form>
            </div>
        <?php } else { ?>  
           
            <div>
               <!--- Display all products in cart as table with remove button -->
            <?php 
            $sql = "SELECT * FROM cart WHERE user_id = $_SESSION[user_id]";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) { ?>
                <h1 class="center">Your Cart</h1>
                <table class="mar">
                    <tr >
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $total = 0;
                    while ($row = $result->fetch_assoc()) {
                        $sql = "SELECT * FROM products WHERE id = $row[product_id]";
                        $result2 = $conn->query($sql);
                        $row2 = $result2->fetch_assoc();
                        $total += $row2['price'] * $row['quantity'];
                       
                    
                        echo '<tr>';
                        echo '<td><form action="cart.php" method="post">';
                        echo '<input type="hidden" name="cart_id" value="' . $row['id'] . '">';
                        echo '<input type="hidden" name="remove">';
                        echo '<input type="image" src="images/delete.svg" alt="X" name="submit" remove>';
                        
                        echo '</form>' . $row2['name'] . '</td>';
                       
                        echo '<td>' . $row['quantity'] . '</td>';
                      
                        echo '<td>$' . $row2['price'] . '</td>';
                      
                        echo '<td>$' . $row['quantity'] * $row2['price'] . '</td>';
                        echo '</tr>';
                       
                    } ?>
                </table>
                <div class="cart_checkout">
                    <h3>Total: $<?php echo $total; ?></h3>
                    <form action="cart.php" method="post">
                        <input type="hidden" name="checkout">
                        <input type="submit" name="submit" value="Checkout">
                    </form>
                </div>


            <?php } else {  

                echo '<h1 class=" center">Your cart is empty !</h1>';
            }?>
            </div>
        <?php } ?>
        
        <?php
        closeConnection($conn);
        ?>

    
    <!-- scripts JavaScript  ici -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
    integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
    crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
    integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
    crossorigin="anonymous"></script>
    </div>
</body>
</html>
