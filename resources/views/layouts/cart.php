<!doctype html>
<html lang="en">
  <head>
    <title>Panier</title>
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
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="200">image</th>
                    <th >produits</th>
                    <th >price</th>
                    <th>Quantité</th>
                    <th><i class="fa fa-trash" aria-hidden="true"></i></th>
                </tr>
            </thead>
            <tbody>
            <?php 
                @$idCart = $_GET['idcart'];
                if ($idCart=='' ) {
                    echo "<h5 class='text-danger'> aucun article trouvé dans le panier </h5>";
                }else{
                $cartId = $cart->showCart($idCart);
                foreach ($cartId as $cartRow){ ?>
                    <tr>
                        <td><img src="../../../public/images/products/<?php echo $cartRow['image'] ?>" class="img-fluid " width="200"></td>
                        <td><?php echo $cartRow['title'] ?>
                            <p><?php echo $cartRow['description'] ?></p>
                        </td>
                        <td><?php echo $cartRow['price'] ?>  Dhs<br></td>
                        <td width="100"><?php echo $cartRow['qty'] ?></td>
                        <td>
                            <a href="../../../app/controller/cartDelete.php?D_cart=<?php echo $idCart ?>" class="text-danger"><i class="fas fa-times-circle"></i></a>
                        </td>
                    </tr>
                <?php }  } ?>                
            </tbody>
        </table>
    </div>
        <div class="my-2">
            <b>TOTAL :  <?php echo $cartRow['price']*$cartRow['qty'] ?> Dhs</b><br>
        </div>
        <a type="button" href="confirmerCommand.php?idcart=<?php echo $idCart ?>" class="btn btn-warning text-white mt-2"><b>FINALISER VOTRE COMMANDE</b> </a>
        <a type="button" href="../index.php" class="btn btn-light mt-2">POURSUIVRE VOS ACHATS</a>
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