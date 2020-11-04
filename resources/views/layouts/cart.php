<!doctype html>
<html lang="en">
  <head>
    <title>Products</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../public/css/cart.css">

  </head>
  <body>
    <?php include_once "navbar.php"; ?>
    <nav class="navbar-expand-sm">
        <a class="navbar-toggler d-lg-none my-3" type="button" data-toggle="collapse" data-target="#collapse-tabs" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">Catégories
            <span class=""> <i class="fas fa-angle-double-down"></i></span>
        </a>
        <div class="collapse navbar-collapse" id="collapse-tabs">
            <ul class=" nav nav-tabs w-100" >
            <?php include_once "../../../app/controller/categorieController.php" ?>
            </ul>
        </div>
    </nav>
    <section class="container my-5">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="200">image</th>
                <th >produits</th>
                <th >price</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            include_once "../../../app/model/cart.php";
            $cart = new Cart();
            $idCart =  38;
            $cartId = $cart->showCart($idCart);

            foreach ($cartId as $cartRow){ ?>
                <tr>
                    <td><img src="../../../public/images/products/<?php echo $cartRow['image'] ?>" class="img-fluid " width="200"></td>
                    <td><?php echo $cartRow['title'] . $cartRow['id'];  ?>
                        <p><?php echo $cartRow['discription'] ?></p>
                    </td>
                    <td width="370"><?php echo $cartRow['price'] ?> <br>
                        <div class="d-flex align-items-end">
                            <div class="p-3">
                                <a href="" class=""> view <i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <div class="p-3">
                                <a href=""> edit <i class="fas fa-edit"></i></a>
                            </div>
                            <div class="p-3">
                                <a href=""> supprimer <i class="fa fa-trash" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </td>
                </tr>
           <?php }

        ?>
            
        </tbody>
    </table>
        
    </section>
    <!-- Optional JavaScript -->
    <!-- font awsome  -->
    <script src="https://kit.fontawesome.com/8f45faa16b.js" crossorigin="anonymous"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../../public/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../../../public/js/popper.min.js"></script>
    <script src="../../../public/js/bootstrap.min.js"></script>
  </body>
</html>