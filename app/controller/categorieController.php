<?php 
include_once "../../../app/model/categorie.php";
$categorie = new Categorie();
$resault = $categorie->select("categories");
foreach($resault as $row){?>
    <li class="nav-item">
        <a href="products.php?id<?php echo $row['id'] ?>" class="nav-link"><?php echo $row['name'] ?></a>
    </li>
<?php } ?>