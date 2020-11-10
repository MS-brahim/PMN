<?php
session_start();
if (isset($_SESSION['user'])){
  header('location:../');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>s'identifier</title>
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
          <form class="card-body" method="POST" action="../../../app/controller/loginController.php">
            <h4 class="card-title"><center>Connection</center></h4>
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
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" id="" class="form-control" placeholder="exemple@gmail.com">
              <small id="helpId" class="text-muted"></small>
            </div>
            <div class="form-group">
              <label for="password">Mot de passe</label>
              <input type="password" name="password" id="" class="form-control" placeholder="***********">
              <small id="helpId" class="text-muted"></small>
            </div>
            <button type="submit" name="submit" class="btn btn-primary form-control">Connection</button>
            <p class="mt-5">Vous n'avez pas de compte? <a href="register.php">Créer un compte</a>.</p>
          </form>
        </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- font awsome  -->
    <script src="https://kit.fontawesome.com/8f45faa16b.js" crossorigin="anonymous"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../../public/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../../../public/js/popper.min.js"></script>
    <script src="../../../public/js/bootstrap.min.js"></script>  </body>
</html>