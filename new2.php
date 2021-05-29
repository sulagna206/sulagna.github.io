<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }
        .back{
  background-image: url("https://img.freepik.com/free-photo/book-with-green-board-background_1150-3837.jpg?size=626&ext=jpg");
}
        </style>
<script>
        
            $(document).ready(function(){
              $('#block').hide();
                $('#Fname').change(function(){
                    var letters = /^[A-Za-z]+$/;
                    var str1 = $("#Fname").val();
                    var str2 = $("#Lname").val();
                    if(str1.match(letters))
                    {
                        if(str1.length>3){
                            $('#span1').html(`<span style="color:green">Input accepted</span>`);
                            $('#exampleInputEmail1').val(str1+str2+"@gmail.com");
                        }
                        else{$('#span1').html(`<span style="color:red">Length should be more than 3</span>`)}
                    }
                    else{
                        $('#span1').html(`<span style="color:red">Denied</span>`);
                    }
                });
                $('#Lname').change(function(){
                    var letters = /^[A-Za-z]+$/;
                    var str2 = $("#Lname").val();
                    var str1 = $("#Fname").val();
                    if(str2.match(letters))
                    {
                        if(str2.length>3){
                            $('#span2').html(`<span style="color:green">Input accepted</span>`);
                            $('#exampleInputEmail1').val(str1+str2+"@gmail.com");
                        }
                        else{$('#span2').html(`<span style="color:red">Length should be more than 3</span>`)}
                    }
                    else{
                        $('#span2').html(`<span style="color:red">Denied</span>`);
                    }
                    
                });
                $('#Gname').change(function(){
                    var letters = /^[a-zA-Z ]*$/;
                    var str2 = $('#Gname').val();
                    if(str2.match(letters))
                    {
                        if(str2.length>3){
                            $('#span6').html(`<span style="color:green">Input accepted</span>`);
                        }
                        else{$('#span6').html(`<span style="color:red">Length should be more than 3</span>`)}
                    }
                    else{
                        $('#span6').html(`<span style="color:red">Denied</span>`);
                    }
                    
                });
                $('#exampleInputPassword1').change(function(){
                    var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
                    var p=$('#exampleInputPassword1').val();
                    if(p.match(passw))
                    {
                        $('#span3').html(`<span style="color:green">Input Accepted</span>`);
                        
                    }
                    else { $('#span3').html(`<span style="color:red">Denied : must have 6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter</span>`);}
                });
                $('#Contact').change(function(){
                    var phoneno = /^\d{10}$/;
                    var phn=$('#Contact').val();
                    if(phn.match(phoneno))
                    {
                        $('#span4').html(`<span style="color:green">Input Accepted</span>`);
                    }
                    else { $('#span4').html(`<span style="color:red">Enter a correct 10 digit no.</span>`);}
                });
                $('#btn2').click(function(){
                  $('#block').toggle();
                });
                $('input').focus(function(){
                  $(this).css("background-color","black");
                  $(this).css("color","white");
                });
                $('input').blur(function(){
                  $(this).css("background-color","white");
                  $(this).css("color","black");
                });
        });
</script>
</head>
<body class="back">
  <div class="container-fluid bg-light">
    <div class="row">
      <div class="col-10">
      <?php if (isset($_SESSION['name'])) { ?>
                <?php echo "Welcome, ".$_SESSION['name']." you have successfully logged in"?>
                <?php } ?>
      </div>
      <div class="col-2">
        <a href="bootst.php"><button id="btn_logout" class="btn btn-success">Log Out</button></a>
      </div>
    </div>
  </div> 
  <div>
    <button class="btn btn-primary" style="margin-left: 530px; margin-top: 50px;" id="btn2">Open/hide form</button>
</div>
  <br><br>
    <div class="container bg-light mt-4" style="width: 40%;;" id="block">
        <form class="p-2">
            <div class="form-group" action="/action_page.php" method="post">
                <label for="Fname">First Name</label>
                <input type="text" class="form-control" id="Fname" required autocomplete="off" placeholder="Enter First Name">
                <span id="span1"></span>
            </div>
            
            <div class="form-group" action="/action_page.php" method="post">
                <label for="Lname">Last Name</label>
                <input type="text" class="form-control" id="Lname" required autocomplete="off" placeholder="Enter Last Name">
                <span id="span2"></span>
            </div>
            <div class="form-group" action="/action_page.php" method="post">
              <label for="Gname">Guardian's Name</label>
              <input type="text" class="form-control" id="Gname" required autocomplete="off" placeholder="Enter Guardian's Name">
              <span id="span6"></span>
          </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" readonly aria-describedby="emailHelp" placeholder="Email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="DOB" class="textdes">Date of birth</label>
                <input type="date" class="form-control" id="DOB" max="2003-12-31">
            </div>
            <div class="form-group">
                <label for="sex">Sex</label>
                <select class="form-control" id="sex">
                  <option>M</option>
                  <option>F</option>
                  <option>Others</option>
                </select>
              </div>
              <div class="form-group">
                <label for="Contact" >Your Contact no.</label>
                <input type="number" class="form-control" id="Contact" required placeholder="Enter Your Contact no." >
                <span id="span4"></span>
            </div>
            <p>Category</p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Radio1" value="General" >
                <label class="form-check-label" for="Radio1"  >General</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Radio2" value="OBC">
                <label class="form-check-label" for="Radio2"  >OBC</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Radio3" value="SC">
                <label class="form-check-label" for="Radio3"  >SC</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Radio4" value="ST">
                <label class="form-check-label" for="Radio4"  >ST</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Radio5" value="Others">
                <label class="form-check-label" for="Radio5" >Others</label>
            </div>
            <hr>
            <p>Branch</p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="branch1" value="CSE" >
                <label class="form-check-label" for="branch1"  >CSE</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="branch2" value="ECE">
                <label class="form-check-label" for="branch2"  >ECE</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="branch3" value="EEE">
                <label class="form-check-label" for="branch3"  >EEE</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="branch4" value="EIE">
                <label class="form-check-label" for="branch4"  >EIE</label>
              </div>
              <br><br>
            <p>Check the facilities needed</p>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Hostel">
                    <label class="form-check-label textdes" for="inlineCheckbox1">Hostel</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Bus">
                    <label class="form-check-label textdes" for="inlineCheckbox2">Bus</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Canteen" >
                    <label class="form-check-label textdes" for="inlineCheckbox3">Canteen</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="Library" >
                    <label class="form-check-label textdes" for="inlineCheckbox4">Library</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="Cinemax" >
                    <label class="form-check-label textdes" for="inlineCheckbox5">Cinemax</label>
                  </div>
                  <br><br>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" required id="exampleInputPassword1" placeholder="Set your Password">
              <span id="span3"></span>
            </div>
            
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <button type="submit" class="btn btn-danger" id="btn1">Submit</button>
          </form>
    </div>
</body>
</html>