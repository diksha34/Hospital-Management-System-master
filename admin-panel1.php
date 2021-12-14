<!DOCTYPE html>
<?php 
$con=mysqli_connect("localhost","root","","myhmsdb");

include('newfunc.php');

if(isset($_POST['A_V_submit']))
{
  $V_ava = $_POST['Vacc_Available'];
  $query = "Update vaccine SET available='$V_ava';";
  $result = mysqli_query($con,$query);
}

if(isset($_POST['Total_vaccine']))
{
  $Total = $_POST['Total'];
  $query = "Update vaccine SET total='$Total';";
  $result = mysqli_query($con,$query);
}

if(isset($_POST['A_B_submit']))
{
  $B_ava = $_POST['bed_Available'];
  $query = "Update bed SET available='$B_ava';";
  $result = mysqli_query($con,$query);
}

if(isset($_POST['Total_bed']))
{
  $BTotal = $_POST['BTotal'];
  $query = "Update bed SET total='$BTotal';";
  $result = mysqli_query($con,$query);
}

?>
<html lang="en">

  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  

  <script >
    var check = function() {
  if (document.getElementById('dpassword').value ==
    document.getElementById('cdpassword').value) {
    document.getElementById('message').style.color = '#5dd05d';
    document.getElementById('message').innerHTML = 'Matched';
  } else {
    document.getElementById('message').style.color = '#f55252';
    document.getElementById('message').innerHTML = 'Not Matching';
  }
}

    function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};
  </script>

  <style >
.bg-primary {
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}

.col-md-4{
  max-width:20% !important;
}

.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #12232E;
    border-color: #007bff;
}

.text-primary {
    color: #342ac1!important;
}

.btn{
  background-color: #12232E;
  color:white;
}
.btn:hover{
  color: #FF6103;
}

#cpass {
  display: -webkit-box;
}

#list-app{
  font-size:15px;
}

{
  background-color: #3c50c1;
  border-color: #3c50c1;
}
  </style>

  
  </head>
  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
  </style>

  <body style="padding-top:50px;">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #12232E;">
    <div class="container">

      <a class="navbar-brand js-scroll-trigger" href="#" style="margin-top: 10px;margin-left:-65px;font-family: 'IBM Plex Sans', sans-serif;"><h4><i class="far fa-hospital"></i>&nbsp; <b><i>Co-vacx Hospital</i></b></h4></a>
      
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="logout1.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
  </div>
      
    </div>
  </nav>

    <!--<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" style="background-color: #12232E;">
      <a class="navbar-brand" href="#"><h4><i class="far fa-hospital"></i>&nbsp; <b><i>Co-vacx Hospital</i></b></h4></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="logout1.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
  </div>
</nav>-->

   <div class="container-fluid" style="margin-top:50px;">
    <h3 style = "margin-left: 40%; padding-bottom: 20px;font-family: 'IBM Plex Sans', sans-serif;"><b> WELCOME RECEPTIONIST </b>  </h3>
    <div class="row">
  <div class="col-md-4" style="max-width:25%;margin-top: 3%;">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-dash-list" data-toggle="list" href="#list-dash" role="tab" aria-controls="home">Dashboard</a>
      <a class="list-group-item list-group-item-action" href="#list-app" id="list-app-list"  role="tab" data-toggle="list" aria-controls="home">Appointment Details</a>
      <a class="list-group-item list-group-item-action" href="#list-settings" id="list-adoc-list"  role="tab" data-toggle="list" aria-controls="home">Vaccine Details</a>
      <a class="list-group-item list-group-item-action" href="#list-settings1" id="list-ddoc-list"  role="tab" data-toggle="list" aria-controls="home">Bed's Details</a>

    </div><br>
  </div>
  <div class="col-md-8" style="margin-top: 3%;">
    <div class="tab-content" id="nav-tabContent" style="width: 950px;">



      <div class="tab-pane fade show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
        <div class="container-fluid container-fullw bg-white" >
              <div class="row">

                <div class="col-sm-12">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Appointment Details</h4>
                    
                      <p class="cl-effect-1">
                        <a href="#app-hist" onclick="clickDiv('#list-app-list')">
                          View Appointments
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
                </div>

                <div class="row">
                <div class="col-sm-4" style="left: 13%;margin-top: 5%;">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x"></i> <i class="fas fa-syringe fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Vaccine Details</h4>
                    
                      <p class="cl-effect-1">
                        <a href="#list-pres" onclick="clickDiv('#list-pres-list')">
                          Vaccine Details
                        </a>
                      </p>
                    </div>
                  </div>
                </div>


                <div class="col-sm-4" style="left: 18%;margin-top: 5%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x"></i> <i class="fas fa-procedures fa-stack-1x fa-inverse"></i></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Bed's Details</h4>
                    
                      <p class="cl-effect-1">
                        <a href="#app-hist" onclick="clickDiv('#list-ddoc-list')">
                          Bed's Details
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
                </div>
                
              </div>
            </div>
              


      <div class="tab-pane fade" id="list-app" role="tabpanel" aria-labelledby="list-pat-list">

         <div class="col-md-20">
      <form class="form-group" action="appsearch.php" method="post">
        <div class="row">
        <div class="col-md-10"><input type="text" name="app_contact" placeholder="Enter Contact" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="app_search_submit" class="btn" value="Search"></div></div>
      </form>
    </div>
        
              <table class="table table-hover">
                <thead class="thead-light">
                  <tr>
                  <th scope="col">Appointment ID</th>
                  <th scope="col">Patient ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Appointment Time</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 

                    $con=mysqli_connect("localhost","root","","myhmsdb");
                    global $con;

                    $query = "select * from appointmenttb;";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){
                  ?>
                      <tr>
                        <td><?php echo $row['ID'];?></td>
                        <td><?php echo $row['pid'];?></td>
                        <td><?php echo $row['fname'];?></td>
                        <td><?php echo $row['lname'];?></td>
                        <td><?php echo $row['gender'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['contact'];?></td>
                        <td><?php echo $row['appdate'];?></td>
                        <td><?php echo $row['apptime'];?></td>
                      </tr>
                    <?php } ?>
                </tbody>
              </table>
        <br>
      </div>

<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>

      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
        <table class="table table-hover">
                <thead class="thead-light">
                  <tr>
                  <th scope="col">Total Vaccine</th>
                  <th scope="col">Available</th>
                </thead>
                <tbody>
                  <?php 

                    $con=mysqli_connect("localhost","root","","myhmsdb");
                    global $con;

                    $query = "select * from vaccine;";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){
                  ?>
                  <tr>
                        <td><?php echo $row['total'];?></td>
                        <td><?php echo $row['available'];?></td>
                      </tr>
                  <?php } ?>
                </tbody>
      </table>
        <br><br><hr>
        <h4>Edit Section</h4><br>
          <form class="form-group" method="post">
            <div class="row">
            <div class="col-md-10">
            <label>Available Vaccine</label>
            <input type="text" name="Vacc_Available" placeholder="Enter Available Vaccine" class = "form-control"></div>
            <div class="col-md-2"><input type="submit" name="A_V_submit" class="btn" value="Edit"></div></div>
          </form>
          <br>
          <form class="form-group" method="post">
            <div class="row">
            <div class="col-md-10">
            <label>Total Vaccine</label>
            <input type="text" name="Total" placeholder="Enter Total Vaccine" class = "form-control"></div>
            <div class="col-md-2"><input type="submit" name="Total_vaccine" class="btn" value="Edit"></div></div>
          </form>
      </div>

      <div class="tab-pane fade" id="list-settings1" role="tabpanel" aria-labelledby="list-settings1-list">
        <table class="table table-hover">
                <thead class="thead-light">
                  <tr>
                  <th scope="col">Total Bed's</th>
                  <th scope="col">Available</th>
                </thead>
                <tbody>
                  <?php 

                    $con=mysqli_connect("localhost","root","","myhmsdb");
                    global $con;

                    $query = "select * from Bed;";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){
                  ?>
                  <tr>
                        <td><?php echo $row['total'];?></td>
                        <td><?php echo $row['available'];?></td>
                      </tr>
                  <?php } ?>
                </tbody>
      </table>
      <br><br><hr>
        <h4>Edit Section</h4><br>
          <form class="form-group" method="post">
            <div class="row">
            <div class="col-md-10">
            <label>Available Bed's</label>
            <input type="text" name="bed_Available" placeholder="Enter Available Bed" class = "form-control"></div>
            <div class="col-md-2"><input type="submit" name="A_B_submit" class="btn" value="Edit"></div></div>
          </form>
          <br>
          <form class="form-group" method="post">
            <div class="row">
            <div class="col-md-10">
            <label>Total Bed's</label>
            <input type="text" name="BTotal" placeholder="Enter Total Bed's" class = "form-control"></div>
            <div class="col-md-2"><input type="submit" name="Total_bed" class="btn" value="Edit"></div></div>
          </form>
      </div>  

    </div>
  </div>
</div>
   </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
  </body>
</html>