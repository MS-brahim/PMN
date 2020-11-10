<div class="container-fluid bg-dark" >
    <nav class="navbar navbar-expand-sm navbar-dark ">
        <a class="navbar-brand" href="../index.php">IMMOBILIERS</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 w-100">
                <li class="nav-item w-75 ml-4">
                    <form class="nav-link" action="resaults.php" method="POST">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="search">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit" ><i class="fa fa-search text-white"></i></button>
                            </div>
                        </div>
                    </form> 
                </li>
            </ul>
            <div class="form-inline my-2 my-lg-0">
                <?php 
                include_once "../../../app/model/cart.php";
                include_once "../../../app/model/user.php";
                include_once "../../../app/model/product.php";
                $showProduct = new Product();
                $cart = new Cart();
                $user = new User();
                session_start();
                @$sql = "SELECT * FROM users WHERE id = '".$_SESSION['user']."'";
                $rowU = $user->sessionUser($sql);
                ?> 
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 w-100">
                    <?php if (isset($_SESSION['user'])) { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $rowU['firstname']?> &nbsp<i class="fas fa-user fa-fw"></i></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <?php if ($rowU['role']==1) { ?>
                                    <a class="dropdown-item" href="../admin/dashboard.php">Dashboard</a>
                                    <a class="dropdown-item" href="../../../app/controller/logout.php">Déconncter</a>
                                <?php } 
                                else {?>
                                    <a class="dropdown-item" href="../../../app/controller/logout.php">Déconncter</a>
                                <?php } ?>
                            </div>
                        </li>
                    <?php } else {?>
                        <li class="nav-item ">
                            <a class="nav-link text-white" href="../auth/login.php">Connecter </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white" href="../auth/register.php">S'inscrire</a>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </nav>
</div>
