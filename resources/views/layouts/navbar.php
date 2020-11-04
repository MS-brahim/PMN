<div class="container-fluid bg-dark" >
    <nav class="navbar navbar-expand-sm navbar-dark ">
        <a class="navbar-brand" href="../index.php">Logo</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <div class="row">
                    <div class="col-6 text-right">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> &nbsp <i class="fa fa-user" aria-hidden="true"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="../auth/login.php">login </a>
                            <a class="dropdown-item" href="../auth/register.php">register</a>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div class="btn-group dropleft">
                            <a type="button" id="cartDropdown" class="nav-link dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span class="badge badge-danger">
                            <?php 
                            session_start();
                            if (!isset($_SESSION['carts']) || (trim($_SESSION['carts'])=='')) {
                                echo '0';
                            }else {
                                echo $_SESSION['carts'];
                             } ?> 
                            </span>
                            </a>
                            <div class="dropdown-menu">
                                <?php 
                                    if (@$_SESSION['carts']> 0) {
                                        echo '<a class="dropdown-item" href="cart.php">voir tout</a>';
                                    }else{
                                        echo '<a class="dropdown-item href="#">aucun article trouvé dans le panier</a>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </form>
        </div>
    </nav>
</div>
