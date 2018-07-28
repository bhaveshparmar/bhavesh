<?php require 'db_connect.php'; ?>
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
          <li class="nav-item ">
            <a class="nav-link" href="about.php">About Us <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="contact.php">Contact Us <span class="sr-only">(current)</span></a>
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

            <div class="card" >
              <div class="card-body">
                <h5 class="card-title text-center">Form</h5>
                <h6 class="card-subtitle mb-2 text-muted text-center">Get Detail</h6>
                <form method="post" action="action.php" style="display: flex;">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Farmer Name</label>
                        <input type="text" class="form-control" name="famname" placeholder="Enter Name" required/>
                      </div>
                      <div class="form-group">
                        <label>Mobile Number:</label>
                        <input type="number" class="form-control" name="mobnum" placeholder="Enter Mobile Number" required/>
                      </div>
                      <div class="form-group">
                        <label>Aadhar Number:</label>
                        <input type="number" class="form-control" name="aadnum" placeholder="Enter Aadhar Number" required/>
                      </div>
                      <div class="form-group">
                        <label>State:</label><br />
                        <select   class="form-control" name="state"
                          id="statelist" onchange="getcity('statelist');" class="demoInputBox">
                          
                          <option value="">Select State</option>
                          <?php
                          $query="SELECT DISTINCT state_name FROM `states`";
                          $result = mysqli_query($con, $query);
                          while($row=mysqli_fetch_array($result)) {
                          $title=$row["state_name"];
                          echo "<option value='$title' >$title</option>";
                          /*$id = $row["id"];
                          $state = $row["state_name"];
                          echo '<option value='.$id.'>'.$state.'</option>';*/
                          }
                          
                          ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>City:</label><br />
                        <select class="form-control" name="city"
                          id="city-list" onchange="getsoil('city-list')" class="demoInputBox">
                          <option value=''>Select City</option>
                        </select>
                      </div>
                  </div>
                  <div class="col-sm-6">
                       <div class="form-group">
                      <label>Enter Taluka:</label>
                      <input type="text" class="form-control" name="taluka" required="" placeholder="Enter Taluka"/>
                    </div>
                    <div class="form-group">
                      <label>Enter Village:</label>
                      <input type="text" class="form-control" name="village" required="" placeholder="Enter Village"/>
                    </div>
                      <div class="form-group">
                        <label>Soil type:</label><br />
                        <select name="soiltype" class="form-control" id="solilist" onchange="getcrop('solilist')" class="demoInputBox">
                          <option value="">Soil type</option>
                        </select>
                      </div>
                       <div class="form-group">
                      <label>Crop:</label><br />
                      <select name="crop" class="form-control" id="crop-list" class="demoInputBox">
                        <option value="">Crop</option>
                      </div>
                      <div class="form-group form-check">
                          <input  style="display: none;"  type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label style="display: none;" class="form-check-label" for="exampleCheck1"></label>
                         
                        </div>
                        
                    </div>

                  </div>
                   <button type="submit" class="btn btn-primary btn-block text-center">Submit</button>
                  
                 
                  </form>
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
        <script>
        function getcity(e){
        
        var state = $('#'+e).val();
       // alert(state);
        $.ajax({
        url:'get_city.php',
        type:'POST',
        data:{state:state},
        success:function(res){
         //console.log(res);
        $('#city-list').html(res);
        }
        });
        }
        function getsoil(e){
        
        var city = $('#'+e).val();
        var state = $('#statelist').val();
        //alert(state);
        $.ajax({
        url:'get_soil.php',
        type:'POST',
        data:{state:state,city:city},
        success:function(res){
        console.log(res);
        $('#solilist').html(res);
        }
        });
        }
        function getcrop(e){
          
          var soil = $('#'+e).val();
          
          //alert(state);
          $.ajax({
            url:'get_crop.php',
            type:'POST',
            data:{soil:soil},
            success:function(res){
              console.log(res);
              $('#crop-list').html(res);
            }

          });
        }
        </script>
      </body>
    </html>