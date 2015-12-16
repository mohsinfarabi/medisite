 <?php 
 error_reporting(0);
    session_start(); 
    // print_r($_SESSION["user"]);
    if(! isset($_SESSION["user"])){
        header("Location: index.php");
    }
    require("connection.php"); 
    if(isset($_GET['page'])){ 
          
        $pages=array("products", "cart"); 
          
        if(in_array($_GET['page'], $pages)) { 
              
            $_page=$_GET['page']; 
              
        }else{ 
              
            $_page="products"; 
              
        } 
          
    }else{ 
          
        $_page="products"; 
          
    } 
  
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
      
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <!-- <link rel="stylesheet" href="css/reset.css" />  -->
    <link rel="stylesheet" href="styles.css" /> 
      
  
    <title>Home</title> 
  
  
</head> 
  
<body> 
<h1> Welcome to mediSite! </h1>
<!-- <h1 style="color:red">Limit is : 110.00 </h1> -->
<a href="logout.php" style="float:right">Logout</a>
<?php
// Echo session variables that were set on previous page
        echo "Welcome " . $_SESSION["user"] . ".<br>";
        ?>
      
    <div id="container"> 
  
        <div id="main"> 
              
            <?php require($_page.".php"); ?> 
  
        </div><!--end of main--> 
          
        <div id="sidebar"> 
        <h1>Cart</h1> 
<?php 
  
    if(isset($_SESSION['cart'])){ 
          
        $sql="SELECT * FROM products WHERE id_product IN ("; 
          
        foreach($_SESSION['cart'] as $id => $value) { 
            $sql.=$id.","; 
           // $sql1= "INSERT INTO cart (contents) VALUES ('" . $_SESSION["cart"]. "')";
        } 
          
        $sql=substr($sql, 0, -1).") ORDER BY name ASC"; 
        $query=mysql_query($sql); 
        // $query1= mysql_query($sql1);
        while($row=mysql_fetch_array($query)){ 
              
        ?> 
            <p><?php echo $row['name'] ?> x <?php echo $_SESSION['cart'][$row['id_product']]['quantity'] ?></p> 
        <?php 
              
        } 
    ?> 
        <hr /> 
        <a href="home.php?page=cart">Go to cart</a> 
    <?php 
          
    }else{ 
          
        echo "<p>Your Cart is empty. Please add some products.</p>"; 
          
    } 
  
?>
              
        </div><!--end of sidebar--> 
  
    </div><!--end container--> 
  
</body> 
</html>