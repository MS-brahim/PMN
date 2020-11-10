<?php
session_start();
if (isset($_SESSION['user'])){
  header('location:../');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Créer un compte</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../public/css/bootstrap.min.css">
  </head>
  <body>
    <section class="container mt-5">
        <div class="card text-left">
          <img class="card-img-top" src="holder.js/100px180/" alt="">
          <form class="card-body" method="POST" action="../../../app/controller/registerController.php">
            <h4 class="card-title"><center>Créer un nouveau compte</center></h4>
            <?php
              if(isset($_SESSION['message'])){
            ?>
                <div class="alert alert-danger text-center">
                  <?php echo $_SESSION['message']; ?>
                </div>
            <?php
              unset($_SESSION['message']);
              }
            ?>
            <div class="row">
                <div class="col-sm-6 form-group">
                  <label for="">Nom</label>
                  <input type="text" name="firstname" id="" class="form-control" placeholder="votre nom" aria-describedby="helpId">
                  <small id="helpId" class="text-muted"></small>
                </div>
                <div class="col-sm-6 form-group">
                  <label for="">Prénom</label>
                  <input type="text" name="lastname" id="" class="form-control" placeholder="votre prenom" aria-describedby="helpId">
                  <small id="helpId" class="text-muted"></small>
                </div>
                <div class="col-sm-6 form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="" class="form-control" placeholder="exemple@gmail.com">
                  <small id="helpId" class="text-muted"></small>
                </div>
                <div class="col-sm-6 form-group">
                  <label for="phone">Téléphone</label>
                  <input type="tel" name="phone" id="" class="form-control" placeholder="+212 X XX XX XX XX">
                  <small id="helpId" class="text-muted"></small>
                </div>
                <div class="col-sm-6 form-group">
                  <label for="password">Mot de passe</label>
                  <input type="password" name="password" id="" class="form-control" placeholder="***********">
                  <small id="helpId" class="text-muted"></small>
                </div>
                <div class="col-sm-6 form-group">
                  <label for="password">Retaper votre mot de passe</label>
                  <input type="password" name="pwd" id="" class="form-control" placeholder="***********">
                  <small id="helpId" class="text-muted"></small>
                </div>
                <div class="col-sm-12 form-group">
                  <label for="password">Votre adresse actuel</label>
                  <textarea  name="address" id="" class="form-control" placeholder=""></textarea>
                  <small id="helpId" class="text-muted"></small>
                </div>
                <div class="col-sm-4 form-group">
                  <label for="">Pays</label>
                  <input type="text" name="country" id="" class="form-control" placeholder="votre pays" aria-describedby="helpId">
                  <small id="helpId" class="text-muted"></small>
                </div>
                <div class="col-sm-4 form-group">
                  <label for="">ville</label>
                  <input type="text" name="city" id="" class="form-control" placeholder="votre ville actuel" aria-describedby="helpId">
                  <small id="helpId" class="text-muted"></small>
                </div>
                <div class="col-sm-4 form-group">
                  <label for="">zipCode</label>
                  <input type="text" name="zipcode" id="" class="form-control" placeholder="EX: 46000" aria-describedby="helpId">
                  <small id="helpId" class="text-muted"></small>
                </div>
            </div>
            <center>
            <button type="submit" name="submit" class="btn btn-primary col-3 mt-3 form-control">Créer un compte</button>
            <p class="mt-5">Vous avez déjà un compte?  <a href="login.php">s'identifier</a>.</p></center>
          </form>
        </div>
    </section>

    
    <!-- font awsome  -->
    <script src="https://kit.fontawesome.com/8f45faa16b.js" crossorigin="anonymous"></script>
    <!-- Optional JavaScript -->
    <script src="../../../public/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../../../public/js/popper.min.js"></script>
    <script src="../../../public/js/bootstrap.min.js"></script>  </body>
</html>