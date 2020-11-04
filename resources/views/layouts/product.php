<!doctype html>
<html lang="en">
  <head>
    <title>Produit</title>
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
            <span> <i class="fas fa-angle-double-down"></i></span>
        </a>
        <div class="collapse navbar-collapse" id="collapse-tabs">
            <ul class=" nav nav-tabs w-100" >
            <?php include_once "../../../app/controller/categorieController.php" ?>
            </ul>
        </div>
    </nav>
    <?php 
    include_once "../../../app/model/product.php";
    $p = new Product();

    $id = $_GET['id'];
    $rows = mysqli_fetch_assoc($p->showProdById($id));

    ?>
    <div class="container-fluid">
        <h1 class="text-center p-3 mt-5 bg-light "><b><?php echo $rows['title']?> </b></h1>
        <div class="row mt-3">
            <div class="col-sm-6">
                <img id="expandedImg" class="card-img-top" src="../../../public/images/products/<?php echo $rows['image']?>" width=100% alt="">
            </div>
            <div class="col-sm-6 mt-3">
                <div class="row">
                    <div class="col-3">
                        <img class="card-img-top" src="../../../public/images/products/<?php echo $rows['image']?>" width=100% alt="" onclick="slideShow(this);">
                    </div>
                    <div class="col-3">
                        <img class="card-img-top" src="../../../public/images/products/<?php echo $rows['image1']?>" width=100% alt="" onclick="slideShow(this);">
                    </div>
                    <div class="col-3">
                        <img class="card-img-top" src="../../../public/images/products/<?php echo $rows['image2']?>" width=100% alt="" onclick="slideShow(this);">
                    </div>
                    <div class="col-3">
                        <img  class="card-img-top" src="../../../public/images/products/<?php echo $rows['image3']?>" width=100% alt="" onclick="slideShow(this);">
                    </div>
                </div>
                <div class="my-3">
                    <h3><b><?php echo $rows['price']?> Dhs</b></h3>
                    <h3 class="text-secondary"><b><del><?php echo $rows['oldPrice']?> Dhs</del></b></h3>
                    <p></p>
                    <div class="row form-group">
                      <label class="col-2 mr-2" for="">Quantité </label>
                        <?php  if($rows['stock'] >=1){ 
                        echo '
                        <div class="col-2">
                            <input type="number" name="product_qty" class="w-100" value="1" min="1" max="10">
                        </div>
                        <div class="col-6">
                            <h5 class="text-success"><b>En Stock</b></h5>
                        </div>';  
                      }else{ echo '
                        <div class="col-2">
                           <input type="number" class="w-100" disabled>
                       </div>
                       <div class="col-6">
                           <h5 class="text-secondary"><b>Not available</b></h5>
                       </div>';
                        ?>
                        <?php }?>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-warning">Ajouter au panier</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-5">
        <h2 class="bg-light p-3">Description</h2>
            <div class="mt-4 ml-2">
                <p><b><?php echo $rows['title']?></b></p>
                <p><?php echo $rows['discription']?></p>
            </div>           
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- font awsome  -->
    <script>
function slideShow(imgs) {
  var expandImg = document.getElementById("expandedImg");
  expandImg.src = imgs.src;
}
</script>
    <script src="https://kit.fontawesome.com/8f45faa16b.js" crossorigin="anonymous"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../../public/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../../../public/js/popper.min.js"></script>
    <script src="../../../public/js/bootstrap.min.js"></script>
  </body>
</html>