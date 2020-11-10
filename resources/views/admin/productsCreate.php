<!doctype html>
<html lang="en">
  <head>
    <title>Ajouter un produit</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../public/css/bootstrap.min.css" >
    <link rel="stylesheet" href="../../../public/css/styles.css" >
  </head>
    <body class="sb-nav-fixed">
        <?php include_once 'navbar.php';?>
        <div id="layoutSidenav">
            <?php include_once 'sidebar.php';?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Ajouter des  produits</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Produits</li>
                        </ol>
                        <div class="card mb-4">
                            <form  method="POST" action="../../../app/controller/producsCreateController.php">
								<div class="modal-header">
									<h5 class="modal-title">
										Ajouter des produits
									</h5>
								</div>
								<div class="modal-body"  >
									<div class="row">
										<div class="col-12">
											<div class="form-group">
												<label for="">Titre de produit</label>
												<input type="text" name="title"  class="form-control" placeholder="Titre de produit" aria-describedby="helpId">
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<label for="">Description</label>
												<textarea class="form-control" name="description" placeholder="Description de produit"  rows="3"></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												<label for="">Prix</label>
												<input type="text" name="price" class="form-control" placeholder="000.00" aria-describedby="helpId">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="">Ancien prix</label>
												<input type="text" name="oldPrice" class="form-control" placeholder="000.00" aria-describedby="helpId">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="">Stock</label>
												<input type="number" name="stock" class="form-control" placeholder="000" aria-describedby="helpId">
											</div>
										</div>
										<div class="col-sm-3">						
											<label for="">Catégorie</label>
											<select class="form-control" name="categorie_id" >
												<option value="">Select catégorie</option>
                                                <?php 
                                                include_once "../../../app/model/categorie.php";
												$categ = new Categorie();
												$mr = $categ->select("categories");
												foreach ($mr as $catRows){
												?>
												
                                           		<option value="<?php echo $catRows['id'];?>"><?php echo $catRows['name'];?></option>
											<?php }?>
											</select>
										</div>
									</div>
									<div class="row mt-3 mb-3">
										<div class="my-1 col-sm-3">
											<div class="form-group custom-file">
												<label for="" class="custom-file-label">image accueil</label>
												<input type="file" class="custom-file-input" name="image" placeholder="" aria-describedby="fileHelpId">
											</div>
										</div>
										<div class="my-1 col-sm-3">
											<div class="form-group custom-file">
												<label for="" class="custom-file-label">image 1</label>
												<input type="file" class="custom-file-input" name="image1" placeholder="" aria-describedby="fileHelpId">
											</div>
										</div>
										<div class="my-1 col-sm-3">
											<div class="form-group custom-file">
												<label for="" class="custom-file-label">image 2</label>
												<input type="file" class="custom-file-input" name="image2"  placeholder="" aria-describedby="fileHelpId">
											</div>
										</div>
										<div class="my-1 col-sm-3">
											<div class="form-group custom-file">
												<label for="" class="custom-file-label">image 3</label>
												<input type="file" class="custom-file-input" name="image3"  placeholder="" aria-describedby="fileHelpId">
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<input type="submit" name="createProd" class="btn btn-primary" value="Enregistrer">
									</div>
								</div>
							</form>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; BarBerTooLs 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/8f45faa16b.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../../../public/js/datatables-demo.js"></script>
        <script src="../../../public/js/chart-area-demo.js"></script>
        <script src="../../../public/js/chart-bar-demo.js"></script>
        <script src="../../../public/js/scripts.js"></script>
        
    </body>
</html>