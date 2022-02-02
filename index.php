<?php 
    include("layout/header.php");
    include("lib/Db.php");
    $db = new Db;
    $conn = $db->getConnection();
?>
<h1>Hello World</h1>


<?php include("layout/footer.php"); ?>