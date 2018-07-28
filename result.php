<?php require 'db_connect.php';
 
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Farmer</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#"><img src="logo.png" style="width: 150px" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="contact.php">Contact</a>
          </li>
          
        </ul>
        
      </div>
    </nav>
    <main role="main">
      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron" style="background-image: url('banner.jpeg')">
        <div class="container">
          <h1 class="display-3">Welcome To Our Page</h1>
          <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
          
        </div>
      </div>
      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="offset-md-2 col-sm-8 ">
  <?php 
 // echo "select * form user_data where id='".$_GET['id']."'";
    $res =$mysqli->query("select * from user_data where id='".$_GET['id']."'");
    $data = $res->fetch_assoc();
  //  print_r($data);
   // echo "select *  from prices where crop_name='".$data['crop']."'";
    $q1 = $con->query("select *  from prices where crop_name='".$data['crop']."'");
    $crop = $q1->fetch_assoc();
    $q2 = $con->query("select *  from main_table where soil_type='".$data['soiltype']."' limit 10");
   
    
   ?>
            <div class="card" >
              <div class="card-body">
                <h5 class="card-title text-center">Crop Price</h5>
                <table class="table table-responsive">
                  <tr>
                    <th>Carop Name</th>
                    <th>Price</th>
                  </tr>
                  <tr>
                    <td><?=$data['crop']?></td>
                    <td><?=$crop['price']?></td>
                  </tr>
            
                </table>
                               
                </div>
              </div>
            </div>
             <div class="card" >
              <div class="card-body">
                <h5 class="card-title text-center"><?=$data['soiltype']?></h5>
                <table class="table table-responsive">
                  <tr>
                    <th>City</th>
                    <th>Crop Year</th>
                    <th>Soil Composition</th>
                    <th>Season</th>
                    <th>fertilizers</th>
                  </tr>
                  
                  <?php while($detail = $q2->fetch_assoc() ) {?>
                     <tr>
                    <td><?=$detail['district_name']?></td>
                    <td><?=$detail['crop_year']?></td>
                    <td><?=$detail['soil_composition']?></td>
                    <td><?=$detail['season']?></td>
                    <td><?=$detail['fertilizers']?></td>
                  </tr>
                <?php } ?>

                </table>
                               
                </div>
              </div>
            </div>
            
            
          </div>
          <hr>
          </div> <!-- /container -->
        </main>
        <footer class="container">
          <p>&copy; Company 2017-2018</p>
        </footer>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      
      </body>
    </html>