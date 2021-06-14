<?php

  session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/b2e1bca07e.js" crossorigin="anonymous"></script>
    <script src="create.js" type="text/javascript"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hash1.css" type = "text/css">
    <link rel="stylesheet" href="phpcolom.css" type = "text/css">
    <title>visitsrilanka.home</title>
   <style>
      a:hover,a:active{
          text-decoration:none;
          color:blue;
          cursor:pointer;
      }

      q{
        font-size:30px;
      }

      .row1{
        display:inline-block;
        width:40%;
        margin:50px;
      }

      .imgflex{
        width:400px;
        height:400px;
        
      }
    </style>
</head>
<body>
   <div class="row">
      <div class="phpcol-1">
     <div style="width:100%;"><img src="images/20201121_125324_0000.png" class="bgimage1"></div>
            <div class="bgcolor" style="height:250px;"></div>
      </div>
      <div class="phpcol-2">
      <div>
                <div class="s1">
                <div style="padding-top:30px;padding-left:30px;">
                 <button type="submit" value="submit" onclick="myFunction()" class="submit" id="button"><img src="images/15211315791553239378-512.png" class="imge"></button>
               </div>
               <div id="heading1"></div>
               <div id="clz" class="side" style="position: fixed;top:0px;">
                <div>
                    <ol class="list" style="list-style-type: none;padding-left:30px;">
                       <li><button value="button" class="btn" onclick="myFunction1()"><img src="images/close.png"></button></li>
                       <br>
                       <li><a href="index.php">Home</a></li>
                       <li><a href="articles.php">articles</a></li>
                       <li><a href="about us.html">about us</a></li>
                       <li><a href="contact us.html">Contact us</a></li>
                    </ol>
                </div>
              </div>
              <div class="centerimg">
                <img src="images/Village life (2).png" class="headimg">
              </div>
                <div class="search">
                  <form class="example" method="POST" action="home.php" enctype="multipart/form-data" target="_blank" style="padding-left:100px;padding-top:40px;">
                  <input type="search" placeholder="search" name="search1" list="browsers" autocomplete="off" class="border" id="search1" >
                   <datalist id="browsers" class="scroll">
                     <option value="Home">
                     <option value="Contact me">
                  </datalist>
                  <button type="submit" value="submit" name="submit-name"><img class="img1" src="images/search.png"></button>
                </form>
                </div>
                </div>
                </div>
      </div>
      <div class="phpcol-3">
      <div class="main">
                <div class="new">
                <?php

if($_SERVER["REQUEST_METHOD"] == "POST"){  
    $name = htmlspecialchars($_REQUEST['search1']);
    echo "<h3 style='margin-left:20px;'>search results for <q>$name</q></h3>
          <hr style='width:100%;'>";
    if(empty($name)){
        echo "<center>"."<h1>"."name is empty!"."</h1>"."</center>";
    }
    else{
    if(isset($_POST['submit-name'])) {  
        
        define('DB_SERVER', 'localhost');
        define('DB_SEARCH', 'root');
        define('DB_PASSWORD','');
        define('DB_DATABASE', 'searchresults');
        $db = mysqli_connect(DB_SERVER,DB_SEARCH,DB_PASSWORD,DB_DATABASE);
        
        $uName = mysqli_real_escape_string($db,$_POST["search1"]);
     
        $sql = "SELECT * FROM resul WHERE search LIKE '%$uName%'";
        $result = mysqli_query($db,$sql);

       /* $fName = $row['result'];
        $sName = $row['search'];
        $img = $row['images'];*/
        $count = mysqli_num_rows($result);

          if($count > 0){
             echo "<ul>";
              while($row = mysqli_fetch_assoc($result)){
                $fName = $row['result'];
                $sName = $row['search'];
                $img = $row['images'];
            /*session_start(); 
            $_SESSION['result'] = $fName;
            $_SESSION['search'] = $sName;
            $_SESSION['images'] = $img;
            $_SESSION["search1"] =  $name;
            header("location:home.php");*/
            echo "<li style='font-size:30px;' class='row1'>
                     <p>$sName</p>
                     <br>
                     <a href='$fName'><img src='$img' class='imgflex'></a>
                  </li>";
              }
              echo "</ul>";
            }
            else{
             echo "<p style='margin-left:20px;'>search results is not Found!</p>";
            }
        }
}
}
?>
                </div>  
                <div class="color" style="width:100%;">
          <div class="center">
          <img src="images/IMG-20210304-WA0006-1-01.jpeg" class="profile">
          </div>
          <div style="display:block;position: absolute;margin:5%;margin-top:0%;text-align: center;">
            <h2 style="letter-spacing:5px;">hi!</h2>
            <p>visitsrilanka is an independent media site championing outdoor lifestyle,environmental stewardship and regenerative living.
              through celebrating the stories of those inspired by nature,we encourage people to connect with the natural world
              in meaningful ways so they may become active stewards of our planet.</p>
              <hr style="border-bottom:1px solid white;">
              <h3 style="color: blanchedalmond;padding-bottom:15px;">here are social links</h3>
          <!--<div>
            <h3 style="letter-spacing:5px;">Hi!</h3>
            <p style="font-style: oblique;">My name is hashan malinda.nowadays I'm still studing a degree of which is computer science.</p>
        </div>-->
        <div class="sociallink1">
          <a href=""><i class="fab fa-facebook" id="fb"></i></a>
          <a href=""><i class="fab fa-instagram" id="insta"></i></a>
          <a href=""><i class="fa fa-youtube-play" id="yt"></i></a>
       </div>
       </div>
        </div>
            </div>
        </div>
      </div>
    </div>
</body>
</html>