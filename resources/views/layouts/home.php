<!doctype html>
<html lang="en">
  <head>
    <title>Home</title>
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
          <div class="row">
            <div class="col-sm-8">
                <div id="carouselId" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselId" data-slide-to="1"></li>
                    <li data-target="#carouselId" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active" style="height:340px">
                      <img src="../../../public/images/products/slide.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item" style="height:340px">
                      <img src="../../../public/images/products/slide.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item" style="height:340px">
                      <img src="../../../public/images/products/slide.jpg" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-left">
                  <img class="card-img-top" src="../../../public/images/products/slide.jpg" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Body</p>
                  </div>
                </div>
            </div>
          </div>
          <h1 class="text-center my-5"><b>Produits populaires</b></h1>
          <div class="row">
          <?php 
          include_once "../../../app/model/product.php";
          $products = new Product();
          $resault = $products->select6();
          foreach($resault as $row){?>
          <div class="col-md-3 mb-5">
              <form class="card text-left" method="POST" action="../../../app/controller/addToCartController.php?id=<?php echo $row['id'];?>">
                  <a href="#">
                    <img class="card-img-top" src="../../../public/images/products/<?php echo $row['image'];?>" alt="">
                  </a>
                  <div class="card-body">
                      <h5 class="card-title"><?php echo $row['title'];?></h5>
                      <p class="card-text"><?php echo $row['price'];?> Dh  &nbsp <small> <del><?php echo $row['oldPrice'];?> Dh</del></small></p>
                      <button  type="submit" name="addToCart" class="btn btn-warning">
                        Ajouter au panier 
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i></button> 
                  </div>
              </form>              
          </div>
          <?php } ?>


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