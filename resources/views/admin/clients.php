
<!doctype html>
<html lang="en">
  <head>
    <title>Clients</title>
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
                        <h1 class="mt-4">Les clients</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Clients</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>nom</th>
                                                <th>prenom</th>
                                                <th>email</th>
                                                <th>phone</th>
                                                <th>city</th>
                                                <th width="60">Edit/Supp</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>nom</th>
                                                <th>prenom</th>
                                                <th>email</th>
                                                <th>phone</th>
                                                <th>city</th>
                                                <th width="60">Edit/Supp</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php 
                                        include_once "../../../app/model/user.php";
                                        $clients = new User();
                                    
                                        $row = $clients->select();
                                        foreach ($row as $rowlist) {
                                        ?>
                                            <tr>
                                                <td><?php echo $rowlist['firstname']; ?></td>
                                                <td><?php echo $rowlist['lastname']; ?></td>
                                                <td><?php echo $rowlist['email']; ?></td>
                                                <td><?php echo $rowlist['phone']; ?></td>
                                                <td><?php echo $rowlist['city']; ?></td>
                                                <td>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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