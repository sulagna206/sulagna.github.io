<?php 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>bootstrap
    </title>
    <style>
      .text
      {
        text-align: right;
      }
      .des
      {
        text-align: center;
        font-size: medium;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-style: italic;
      }
    </style>
    <script type = "text/javascript">  
      function msgprint(p)
     {  
       if(p==1)
       {
          var x=document.getElementById("exampleInputEmail1").value;
          if(x==""){alert("Email cant be empty!");
                  return false;}
          else{alert("Successfully signed in!")}
       }
       else{
         var y=document.getElementById("exampleInputEmail2").value;
         var z=document.getElementById("exampleInputName").value;
         var a=document.getElementById("exampleInputName2").value;
         if(z==""||a==""||y==""){alert("Fill the necessary details!");
                  return false;}
          else{alert("Successfully signed up!")}
       }
           
     }
</script> 
  </head>                
  <body onload="loadjs()">
    <div class="container-fluid" style="background-color:rgb(147, 175, 221)">
        <div class="row">
          <div class="col-lg-12"><p class="des"><b>**********************************Educating Generations********************************</b><p></div>
        </div>
        <div class="row">
            <div class="col-lg-6 py-2"><img src="image/book-learn-education-school-logo-vector-5138511.jpg" height="100%" width="30%"></div>
            <div class="col-lg-6"><p class="font-italic text"><b>Mobile no.-900712304</b></p></div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning mt-1 sticky-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav nav-pills nav-fill mr-auto">                     
            <li class="nav-item active">
              <a class="nav-link" href="#"><b>Home</b> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about"><b>About</b></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <b>Services</b>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#"  >Hostels</a>
                <a class="dropdown-item" href="#"  >Bus</a>
                <a class="dropdown-item" href="#"  >Canteen</a>
                <a class="dropdown-item" href="#"   >Food Court</a>
                <a class="dropdown-item" href="#"  >Library</a>
                <a class="dropdown-item" href="#"  >Cinemax</a>
                <div class="dropdown-divider"></div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#login"><b>Register</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#feedback"><b>Feedback</b></a>
            </li>
          </ul>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
              <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
            </svg>
          </button>
        </div>
      </nav>
      <br>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="http://www.csm.edu/sites/default/files/styles/extra_large/public/large-ad-image/Special%20Education%20Slider.jpg?itok=Z9OcAdVQ" height="300px" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://avartanslider.com/wp-content/uploads/2016/06/education-slider.png  " height="300px" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://ciyashop.potenzaglobalsolutions.com/books/wp-content/uploads/sites/48/2017/08/blog-04.jpg" height="300px" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://www.jbcnschool.edu.in/wp-content/uploads/2017/03/borivali-slider-three.jpg" height="300px" alt="Fourth slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://ciyashop.potenzaglobalsolutions.com/books/wp-content/uploads/sites/48/2017/08/blog-03.jpg" height="300px" alt="Fifth slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="jumbotron m-2 mt-4 " id="about">
        <h1  >About Us</h1>
        <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
          Aliquam incidunt eius dolores facere enim, accusamus libero facilis. Dicta atque provident laboriosam delectus, tempora obcaecati tenetur in incidunt nesciunt, deleniti illum?
          nt eius dolores facere enim, accusamus libero facilis. Dicta atque provident laboriosam delectus, tempora obcaecati tenetur in incidunt nesciunt, deleniti illum?
          nt eius dolores facere enim, accusamus libero facilis. Dicta atque provident laboriosam delectus, tempora obcaecati tenetur in incidunt nesciunt, deleniti illum?.</p>
        <hr class="my-4">
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="card border-dark m-1">
            <div class="card-body">
              <h5 class="card-title">Hostel</h5>
              <img class="card-img" src="https://cf.bstatic.com/images/hotel/max1024x768/280/280853814.jpg" height="300px">
              <a href="#" class="btn btn-primary">Checkout now!!!</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card border-dark m-1">
            <div class="card-body">
              <h5 class="card-title">Bus</h5>
              <img class="card-img" src="https://png.pngtree.com/png-clipart/20201208/original/pngtree-front-view-yellow-cartoon-school-bus-clipart-png-image_5574132.jpg" height="300px">
              <a href="#" class="btn btn-primary">Checkout now!!!</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card border-dark m-1">
            <div class="card-body">
              <h5 class="card-title">Canteen</h5>
              <img class="card-img" src="https://www.cambridgeschool.eu/fileadmin/user_upload/images/cis-canteen-1.jpg" height="300px">
              <a href="#" class="btn btn-primary">Book now!!!!!!!</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card border-dark m-1">
            <div class="card-body">
              <h5 class="card-title">Food Court</h5>
              <img class="card-img" src="data:image/png;base64,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" height="300px">
              <a href="#" class="btn btn-primary">Checkout now!!!</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card border-dark m-1">
            <div class="card-body">
              <h5 class="card-title">Library</h5>
              <img class="card-img" src="https://images.pexels.com/photos/1926988/pexels-photo-1926988.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" height="300px">
              <a href="#" class="btn btn-primary">Checkout now!!!</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card border-dark m-1">
            <div class="card-body">
              <h5 class="card-title">Cinemax</h5>
              <img class="card-img" src="https://images.unsplash.com/photo-1604975701397-6365ccbd028a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHRoZWF0cmV8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" height="300px">
              <a href="#" class="btn btn-primary">Checkout now!!!</a>
            </div>
          </div>
        </div>
      </div>
      <div class="container embed-responsive-1by1 border-dark mt-2" style="background-color:rgb(147, 175, 221)" id="login">
        <div class="row">
          <div class="col-lg-12"><p class="des"><b>************************Contact Us***************************</b></p></div>
        </div>
        <div class="row">
          <div class="col-lg-6 border border-dark">
            <form action="first.php" method="$_POST">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                  <input name="email_user" required type="email" class="form-control" autocomplete="off" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                  <input name="pwd" type="password" required class="form-control" id="exampleInputPassword1" placeholder="Password">
                  <span id="span3"></span>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
              </div>
               <button type="submit" class="btn btn-primary">Sign In</button>
            </form>
            <?php if(isset($_SESSION['error'])) {?>
              <div class="alert alert-danger" style="color:black">
                Username or Password incorrect!
              </div>
            <?php unset($_SESSION['error']); }?>
          </div>
          <div class="col-lg-6 border border-dark"><p>New to this page??? Sign Up for More</p>
            <form >
              <div class="form-group">
                <label for="exampleInputName"><p>First Name</p></label>
                <input type="text" class="form-control" id="exampleInputName"  placeholder="Enter First Name">
              </div>
              <div class="form-group">
                <label for="exampleInputName2"><p>Last Name</p></label>
                <input type="text" class="form-control" id="exampleInputName2"  placeholder="Enter Last Name">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail2"><p>Email address</p></label>
                <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
              </div>
              <input type="submit" class="btn btn-primary" value="Sign Up">
            </form>
          </div>
        </div>
      </div>
    
      <div class="jumbotron m-2 mt-4 " id="feedback">
        <h1  style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Feedback</h1>
        <h3 style="text-align: center;">Your feedback is precious!!</h3>
        <hr>
        <p style="font-size: medium; text-align: center; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"><b>Rate us!</b></p>
        <div class="form-check-inline">
          <label class="form-check-label px-5">
            <input type="radio" class="form-check-input" name="optradio">Poor
          </label>
        </div>
        <div class="form-check-inline px-5">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="optradio">Bad
          </label>
        </div>
        <div class="form-check-inline px-5">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="optradio">Average
          </label>
        </div>
        <div class="form-check-inline px-5">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="optradio">Good
          </label>
        </div>
        <div class="form-check-inline px-5">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="optradio">Great
          </label>
        </div>
        <div class="form-check-inline px-5">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="optradio">Awesome
          </label>
        </div>
        <hr>
        <form>
          <label for="remarks"  class="px-5" style="text-align: center;">Remarks if any:</label>
          <textarea id="remarks" rows="4" cols="50" placeholder="Enter remarks">
          </textarea>
          <br><br>
            <input type="submit" class="btn btn-primary" value="Submit">
        </form>
      </div>

<!-- Modal starts here -->
<div class="modal fade"  id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Recent Notifications</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam et nobis deleniti est explicabo vel dignissimos, adipisci at ipsum inventore magni dolorum consequuntur rem alias odio eveniet iusto sapiente illo!
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  </body>
</html>