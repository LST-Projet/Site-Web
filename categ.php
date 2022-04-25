<!DOCTYPE html>
<html>
  <head>
    <title>Titre du document</title>
<link rel="stylesheet" href="./search.css">
<link rel="stylesheet" href="./catégories/style.css">
     
  </head>
  <body>
    <section class="top-page">
      <header class="head">
       <div classe="image">
        <a href="./index.php" ><img src="./image/AM (2).png" alt="Logo du site"></a>
      </div>
 
 <nav>
 <div id="menu">
  <ul>

          <li>  <spanid="menu_catégorie"><a href="./catégories/bureau.php" class=>FournituresBureau </a></li></span>
          <li> <span id="menu_catégorie"><a href="./catégories/school.php" class=>FournituresScolaire</a></li></span>
          <li> <span id="menu_catégorie"><a href="./catégories/artcr.php" class=>ArtCréatif</a></li></span>
          </ul>
 </div>
</nav>
</header>
</section>
               <h2> Explorer les articles</h2>
               <form method="POST" action="categ.php">
      <input type="search" name="search" class="search" placeholder="Recherchez un article"/>
      <input type="submit" name="submit" class="submit" value="Rechercher" />
    </form>
    <style>
      form{
        width:1250px;
        margin-left:100px;
      }
      .submit {
    width: 180px;
    background-color: #927e8c;
    color: black ;
    height:80px ;
  }
  select{
    width: 120px;
    background-color: #927e8c;
    color: black ;
    height:80px ; }
    body {
    background-color: #c2bfbf ;
  }
  #menu li a
  { color: #000;
  }
  h2{
    color:#000;
    font-size: 46px;
    margin-left: 490px;
  }
 
  
      </style>
      <?php
   // FIRST ESSAY
     /* if (isset($_POST['submit'])){
        $connection = new mysqli($host="localhost", $username="root", $passwd="", $dbname="phpsearch");
        $q = $connection->real_escape_string($_POST['q']);
        $column = $connection->real_escape_string($_POST['column']);

        if ($column == "" || ($column != "NomProduit" && $column != "prix"))
          $column = "NomProduit";
            $sql = $connection->query( query: " SELECT* FROM products WHERE $column LIKE '%$q%' ");
            if ($sql->num_rows > 0){
                while ($data = $sql->fetch_array())
                echo $data['NomProduit'] . "<br>";
            }else
            echo "Votre recherche ne correspond à aucune donnée" ;
          }*/
      ?>
      <?php
      // Conexion db
      $conn = new mysqli($host="localhost", $username="root", $passwd="", $dbname="phpsearch");
      ?>
      <?php
      $search = $conn->real_escape_string($_POST['search']);

     // GET the search keyword
      $search = $_POST['search'];

     //SQL Query to get foods based on search keyword
     $sql = "SELECT * FROM produits WHERE NomProduit LIKE '%$search%'";

     //Execute the query
     $res = mysqli_query($conn, $sql);
     // Count rows
     $count = mysqli_num_rows($res);
     //Check whether article available of not
     if($count>0)
     {
       //Article available
       while($row=mysqli_fetch_assoc($res))
       {
         //Get the details
         $id = $row['id'];
         $NomProduit = $row['NomProduit'];
         $prix = $row['prix'];
         $image_name = $row['image_name'];
      
     
             ?>
              <div class="row">
              <div class="col-4">
             
                  <?php
            // check whether imagr name is available or not 
            if($image_name=="")
            {
                // image not available
                echo"<div class='error'>Image not Available.</div>";
            }
            else{
                //image available
             ?>  
                <img src="./catégories/Img/ <?php echo $image_name; ?>" alt="fournitures">
           
<?php
            }
                 ?>
              
               
         
  
                    <h3><?php echo $NomProduit; ?></h3>
                    <div class="price"><?php echo $prix; ?></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">Ajouter au panier</a>
                </div>  
       </div>
            <?php
        }
      }
    else 
    {
      //Article Not Available
      echo"<div class='error'>Aticle pas trouvé.</div>";
    }
    ?>