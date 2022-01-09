<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!doctype html>
<html>
<head>
<title>Table with database</title>
<style type="text/css">
table{
  border-collapse : collapse;
  width:100%;
  color:#d96459;
  font-family : poppins;
  font-size:20px;
  text-align:left;
}
th{
  background-color:#d96459;
  color:white;
  padding:5px;
}
tr:nth-child(even).{background-color:f2f2f2};
</style>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <table>
    <tr>
    <h1>Client</h1>
    <th>Id</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Numero</th>
    </tr>
    <?php
      $conn=mysqli_connect("localhost" , "root" ,"","db1");
      if($conn->connect_error){
          die("Connection field".$conn->connect_error);
      }
      $sql="SELECT id, nom, prenom,numero from client ";
      $result=$conn-> query($sql);
      if($result -> num_rows > 0){
          while($rows = $result->fetch_assoc() ){
              echo "<tr><td>" . $row["id"]."</td><td>".$row["nom"]."</td><td>".$row["prenom"]."</td><td>".$row["password"]."</td></tr>";
          }
            echo "</table>";
        }
          else{
            echo "0 result";
                   }
      $conn->close();
    
    ?>
    </table>
    

    <table>
    <tr>
    <h1>Commande</h1>
    <th>Id</th>
    <th>Nom_cm</th>
    <th>Qounteti</th>
    </tr>
    <?php
      $conn=mysqli_connect("localhost" , "root" ,"","db1");
      if($conn->connect_error){
          die("Connection field".$conn->connect_error);
      }
      $sql="SELECT id, nom_cm, qounteti from comande ";
      $result=$conn-> query($sql);
      if($result -> num_rows > 0){
          while($rows = $result->fetch_assoc() ){
              echo "<tr><td>" . $row["id"]."</td><td>".$row["nom_cm"]."</td><td>".$row["qounteti"]."</td></tr>";
          }
            echo "</table>";
        }
          else{
            echo "0 result";
                   }
      $conn->close();
    
    ?>
    </table>
    <table>
    <tr>
    <h1>Fournisseur</h1>
    <th>Id</th>
    <th>Nom_four</th>
    <th>Prenom_four</th>
    <th>Num_four</th>
    </tr>
    <?php
      $conn=mysqli_connect("localhost" , "root" ,"","db1");
      if($conn->connect_error){
          die("Connection field".$conn->connect_error);
      }
      $sql="SELECT id, nom_four, prenom_four , num_four from fournisseur ";
      $result=$conn-> query($sql);
      if($result -> num_rows > 0){
          while($rows = $result->fetch_assoc() ){
              echo "<tr><td>" . $row["id"]."</td><td>".$row["nom_four"]."</td><td>".$row["prenom_four"]."</td><td>".$row["num_four"]."</td></tr>";
          }
            echo "</table>";
        }
          else{
            echo "0 result";
                   }
      $conn->close();

    ?>
  </table>
  <?php
    $hostname="localhost";
    $username="root";
    $password="";
    $databasename="db1";
    $connect= mysqli_connect($hostname,$username,$password,$databasename);
    $query="SELECT * from produit";
    $result1=mysqli_query($connect,$query);
    ?>
  <table>
    <tr>
    <h1>Produit</h1>
    <th>Id</th>
    <th>Nom_pr</th>
    <th>Prix_p</th>
    </tr>

    <?php
     while($row1=mysqli_fetch_array($result1)):;
     error_reporting(0);
    ?>
    
    <tr>
    
      <td><?php echo $row1[0]; ?> </td>
      <td><?php echo $row1[1]; ?> </td>
      <td><?php echo $row1[2]; ?> </td>
      <td><?php echo $row1[3]; ?> </td>
    </tr>
    <?php endwhile; ?>
  </table>
  <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
</body>
</html>