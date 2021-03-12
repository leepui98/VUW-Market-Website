<?php


$conn = mysqli_connect("localhost", "myuser", "mypass", "mydb");



// Check connection

if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);

}
?>

<!DOCTYPE html>
<head>
  <title>CV Webpage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel= "stylesheet" type="text/css" href= "style.css" />
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
   
            
           

            
        
            <div class="container-fluid px-0 ">
                <div class="top">
                    <nav class="navbar navbar-expand-md">
                        <a href= "https://www.wgtn.ac.nz/" > <img class="navbar-brand" src="logo_nav-283.png"></img> </a>
                        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="main-navigation">
                          <ul class="navbar-nav">
                            
                            <li class="nav-item">
                              <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#contact">Contact</a>
                            </li>
                            <li>
                              <a class="nav-link" href="web2.php">More </a>
</li>
                          </ul>
                        </div>
                      </nav>

                      <div class="titleT">
                      <h1>Welcome to VUW Wednesday Market Page!</h1>
  <p>Our market is held on every Wednesday from 8am to 4pm at Victoria University of Wellington Kelburn campus. Our veggies and fruits are fresh and cheap!</p>
</div>



                </div>


                <div class="bottom" id="about">
                
              
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <h2 class="feature-title">Vegetable</h2>
                    <img src="depositphotos_5309803-stock-photo-veggie-market.jpg " class="img-fluid">
                    <p>Our vegetables are fresh and 100% organic planted locally in NZ!</p>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <h3 class="feature-title">Fruit</h3>
                    <img src="istockphoto-965003780-1024x1024.jpg" class="img-fluid">
                    <p>Our fruits are mostly imported from trusted farms in Fiji and Australia.100% organic and tasty!</p>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <h4 class="feature-title">Bread </h4>
                  <img src="Hearty-Yeast-Free-Bread-WS-Thumbnail.jpg" class="img-fluid">
                  <p>We bake our own tasty fresh bread and it's healty!Gluten-free bread is available too!</p>
</div>
                </div> 
                </div>

              <div class="bottom2">
              <div class="row justify-content-center">
              
<div class="form-group col-md-4 col-md-offset-5 align-center">    
                    <h5 class="feature-title">Give us your feedback!</h5>
                    
                    <form action="webCV.php" method="POST" class="form-horizontal">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Name" name="pplname" required>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email Address" name="email" required>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" rows="4" name="textfeedback" required></textarea>
                    </div>
                    <input type="submit" class="btn btn-secondary btn-block" value="Send" name="Sub">
                
                   
                
                  </form>    
                <?php
                
  if (isset($_POST["Sub"])){
  $name = (($_POST["pplname"]));

  $email = ( ($_POST["email"]));
  
  $text = (($_POST["textfeedback"]));

  
                
  
  // if (empty($name)){
  //   $errors['nameE'] = "<p style='color:red'>Enter name</p>" ;
  // }
  
  // if (empty($email)){
  //   $errors['emailE'] = "<p style='color:red'>Enter email</p>" ;
  // }
  
  // if(empty($textfeedback)){
  //   $errors['textE'] = "<p style='color:red'>Enter text</p>" ;
  // }
  
  
  
  
  $sql = "INSERT INTO tbl_feedback VALUE ('$name', '$email','$text',default)";
  
  
  if ($conn->query($sql)===TRUE){
  
  echo "New record created successfully";
  
  } else {
  
  echo "Error: " . $sql. "<br>" .$conn->error;
  
  }
  
  
  $conn->close();
}
                ?>
                 <p><?php if(isset($errors['nameE'])) echo $errors['nameE']; ?></p>
                    <p><?php if(isset($errors['emailE'])) echo $errors['emailE']; ?></p>
                    <p><?php if(isset($errors['textE'])) echo $errors['textE']; ?></p>
                  

</div>

</div>
                </div>

                <div class="bottom3">
                <div class="row justify-content-center">
              
              <div class="form-group col-md-4 col-md-offset-5 align-center"> 
              <h6 class="feature-title">Subscribe us!</h6>
              <form action="webCV.php" method="POST" class="form-horizontal">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Name" name="subname" required>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email Address" name="subemail"  required>
                    </div>
                    <input type="submit" id="subscribeBtn" class="btn btn-secondary btn-block" value="Send" name="Subscribe">
                
                  </form>    
                  <?php
                
                if (isset($_POST["Subscribe"])){
                $Sname = (($_POST["subname"]));
              
                $Semail = ( ($_POST["subemail"]));

              
                              
                
                // if (empty($Sname)){
                //   $errors['SnameE'] = "<p style='color:red'>Enter name</p>" ;
                // }
                
                // elseif (empty($Semail)){
                //   $errors['SemailE'] = "<p style='color:red'>Enter email</p>" ;
                // }
                
                
                $sql = "INSERT INTO tbl_subcribe VALUE ('$Sname', '$Semail')";
                
                
                if ($conn->query($sql)===TRUE){
                
                echo "Subscribed";
                
                } else {
                
                echo "Error: " . $sql. "<br>" .$conn->error;
                
                }
                
                
                $conn->close();
              }
                              ?>
                               <p><?php if(isset($errors['SnameE'])) echo $errors['SnameE']; ?></p>
                                  <p><?php if(isset($errors['SemailE'])) echo $errors['SemailE']; ?></p>
                                  

</div>
</div>
</div>

</div>
<footer class="page-footer">
  <div class="container" id="contact">
  
    <div class="row justify-content-center">
      <div class="col-md-4 col-md-offset-5 align-center">
      <h6 class="text-uppercase font-weight-bold">Contact us</h6>
      <p>leepui@vuw.ac.co.nz
      <br/>+ 01 234 567 89
      <br/>https://www.facebook.com/VUWMarket</p>
            </div>
    </div>
  </div>
</footer>

              

            
<script src="webCVj.js"></script>
<script src="subscribe.js"></script>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</body>

</html>