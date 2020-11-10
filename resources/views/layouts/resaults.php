<!doctype html>
<html lang="en">
  <head>
    <title>Recherche</title>
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
    <section class="container-fluid mt-2">
        <h1 class="text-center my-5"><b>résultats de recherche</b></h1>
        <?php if (isset($_SESSION['message'])) {?>
        <script>alert('<?php echo $_SESSION['message'] ?>'); </script>
        <?php unset($_SESSION['message']); }?>
        <div class="row">
        <?php
        if (isset($_POST['search'])) {
            $catSearch = new Categorie();
            $catName = $_POST['search'];
            $resaultSearch = $catSearch->search($catName);
            if ($resaultSearch == true) {
                foreach($resaultSearch as $row){?>
                    <div class="col-md-3 mb-5">
                        <form class="card text-left" method="POST" action="../../../app/controller/addToCartController.php?id=<?php echo $row['id'];?>">
                            <a href="product.php?id=<?php echo $row['id'];?>">
                            <img class="card-img-top" src="../../../public/images/products/<?php echo $row['image'];?>" alt="">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['title'];?></h5>
                                <p class="card-text"><?php echo $row['price'];?> Dh  &nbsp <small> <del><?php echo $row['oldPrice'];?> Dh</del></small> 
                                    <input type="number" name="qty" class="w-25 ml-4" value="1" min="1" max="<?php echo $row['stock'];?>">
                                </p>
                                <button  type="submit" name="addToCart" class="btn btn-warning">
                                Ajouter au panier 
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i></button> 
                            </div>
                        </form>              
                    </div>
        <?php } } } ?>
        </div>
        
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