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
    <link rel="stylesheet" href="colom.css" type = "text/css">
    <title>visitsrilanka.homepage</title>
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
       /* width:40%;*/
       /* margin:50px;*/
      }

      /*.imgflex{
        width:400px;
        height:400px;
        
      }*/
      @media only screen and (max-width:768px) and (min-width:500px){
        .centerimg{bottom:44%;}
    .headimg{
        width:175px;
        height:125px;
    }
      }
      @media only screen and (max-width:500px){
        .centerimg{bottom:42%;}
    .headimg{
        width:40%;
        height:30%;
    }
      }
      @media only screen and (min-width:768px) and (max-width:1200px){
        .centerimg{bottom:35%;}
    .headimg{
        width:22%;
        height:12%;
    }
      }
      @media only screen and (min-width:1200px){
        .centerimg{bottom:15%;}
    .headimg{
        width:200px;
        height:150px;
    } 
      }
    </style>
</head>
<body onload="loadtextsix(); getLocation1();">
    <div class="row" style="font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen-Sans,Ubuntu,Cantarell,Helvetica Neue,sans-serif;font-size:30px;">
        <div class="phpcol-1" style="height:750px;">
            <div style="width:100%;"><img src="images/photo-1619974643633-12acfdcedd16.jfif" class="bgimage" ></div>
            <div class="bgcolor"></div>
    <div class="box1">
      <blockquote class="fonts">Hello! 
    You are welcome!
    </blockquote>
    </div>
        </div>
            <div class="phpcol-2" style="font-family:'proxima-nova',sans-serif;font-size:30px;text-align:left;">
                <div>
                <div class="s1" style="z-index:5;position:absolute">
                <div style="padding-top:30px;padding-left:30px;">
                 <button type="submit" value="submit" onclick="myFunction()" class="submit" id="button"><img src="images/15211315791553239378-512.png" class="imge"></button>
               </div>
               <div id="heading1"></div>
               <div id="clz" class="side" style="position: fixed;top:0px;">
                <div>
                    <ol class="list" style="list-style-type: none;padding-left:30px;">
                       <li><button value="button" class="btn" onclick="myFunction1()"><img src="images/close.png"></button></li>
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
          <h2 style="padding:5%;padding-bottom:0px;">Nature of srilanka is ....</h2>
          <img src="images/sale.jpg" class="first">
          <p id="loadtext"></p>
        </div>
        <div class="phpcol-3">
        <h3 style="margin:5%;text-align:left;">Be friendly and love to the mothernature.....</h3>
          <div class="col-4" style="padding:5%;padding-top:0px;"><img src="images/Blacck-While-Thore-2-c-Nadeera-Udayanga-2-768x459.jpg" class="logimage">
          </div> 
          <div class="col-8" style="padding-left:5%;word-wrap:break-word;">
            <p>Every child, young and adult in the world is accustomed to visiting zoos for their enjoyment and happiness. 
               In some zoos around the world, animals are kept in cages not only for exhibit but also....<a href="journel.html" style="text-decoration:none;">see more</a></p>
               <br><br>
          </div> 
        </div>
        <div class="phpcol-3 fiximage">
            <div class="innerimage"></div>
        </div>
        <div class="phpcol-3">
        <div class="main">
                <div class="new">
                  <h1 style="text-align:center;">featured articles</h1>
                  <hr style="width:100%;">
                     <?php

/*if($_SERVER["REQUEST_METHOD"] == "POST"){  
    $name = htmlspecialchars($_REQUEST['search1']);
    if(empty($name)){
        echo "<center>"."<h1>"."name is empty!"."</h1>"."</center>";
    }
    else{
    if(isset($_POST['submit-name'])) { */ 
        
      define('DB_SERVER', 'localhost');
      define('DB_SEARCH', 'root');
      define('DB_PASSWORD','');
      define('DB_DATABASE', 'searchresults');
        $db = mysqli_connect(DB_SERVER,DB_SEARCH,DB_PASSWORD,DB_DATABASE);
        
      /*  $uName = mysqli_real_escape_string($db,$_POST["search1"]);*/
     
        $sql = "SELECT * FROM resul";
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
             echo "<p>search results is not Found!</p>";
            }
      /*  }
}
}*/
?>
                </div>  
            </div>
        </div>
        <div class="phpcol-3">
        <div class="col-4">
            <h2 style="text-align: center;">GET IN TOUCH TODAY TO START YOUR JOURNEY</h2>
            <br>
            <p style="text-align: center;">TAKE THE FIRST STEP TOWARDS YOUR DREAM JOURNEY AND CONTACT US TODAY.</p>
            <br><br>
            </div>
            <form action="welcome.html" method="POST" enctype="multipart/form-data" class="example1" onsubmit="checkcookie()" >
                  <div class="col-8">
                  <input type="email" name="email" placeholder="E-mail" cols="10">
                  <br><br>
                  <div class="col-8">
                  <button type="submit" value="SUBMIT" name="submit_form" style="margin-bottom:30px;" onclick="submitform()">Sign up</button><br><br>
                </div>
                </div>
                 </form>
        </div>
        <div class="phpcol-4 color">
          <div class="center">
          <img src="images/IMG-20210304-WA0006-1-01.jpeg" class="profile">
          </div>
          <div style="display:block;position: absolute;margin:5%;margin-top:0px;text-align: center;">
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
</body>
</html>