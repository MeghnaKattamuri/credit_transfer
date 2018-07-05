<!DOCTYPE html>
<html lang="en">

  <head>
<style>
.cont{
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-userss-select: none;
    -moz-userss-select: none;
    -ms-userss-select: none;
    userss-select: none;
}

/* Hide the browser's default radio button */
.cont input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.cont:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.cont input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.cont input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.cont .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CREDIT TRANSFER SYSTEM</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Credit Transfer</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Let's Go!</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/portfolio/credit.png" alt="">
        <h1 class="text-uppercase mb-0">Credit Transfer</h1>
        <hr class="star-light">
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Let's Transfer</h2>
        <hr class="star-dark mb-5">
        <div class="row">
         
          <div class="col-md-5 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <h3 class="text-center">Select Sender</h3>
              <img class="img-fluid" src="img/profile.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <h3 class="text-center">Insert amount</h3>
              <img class="img-fluid" src="img/portfolio/safe.png" alt="">
            </a>
          </div>
          <div class="col-md-5 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-6">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <h3 class="text-center">Select Receiver</h3>
              <img class="img-fluid" src="img/profile.png" alt="">
            </a>
          </div>
        </div>
      </div>
	  <div class="text-center"> 
                <input class="btn btn-primary btn-lg rounded-pill" type="submit" name="transfer" value="Tranfer" >
				<br><?php
$res="";
if(isset($_POST['transfer'])){
if(isset($_POST['sender'])){
	if(isset($_POST['credit'])){
		if(isset($_POST['receiver'])){
			$conn=mysqli_connect('localhost','root','','credit_transfer');
			$senderid=$_POST['sender'];
			$receiverid=$_POST['receiver'];
			$creditvalue=$_POST['credit'];
			if($senderid!=$receiverid){
				$sendercreditquery="select current_credit from userss where unique_id='$senderid'";
				$sendercredit=mysqli_query($conn,$sendercreditquery) or die(mysqli_error($conn));
				$sendercredit=mysqli_fetch_assoc($sendercredit);
				$sendercredit=$sendercredit['current_credit'];
				if($creditvalue<$sendercredit)
				{
					
				    $receivercreditquery="select current_credit from userss where unique_id='$receiverid'";
					$receivercredit=mysqli_query($conn,$receivercreditquery);
					$receivercredit=mysqli_fetch_assoc($receivercredit);
					$receivercredit=$receivercredit['current_credit'];
					if(mysqli_query($conn,"update userss set current_credit='$sendercredit'-'$creditvalue' where unique_id='$senderid'"))
						{
							if(mysqli_query($conn,"update userss set current_credit='$receivercredit'+'$creditvalue' where unique_id='$receiverid'"))
								{
									if(mysqli_query($conn,"insert into transfer values('$senderid','$receiverid','$creditvalue')"))
									$res="Transferred successfully!";
								}
						}
				}
				else{
					
					$res="Can't transfer. Insufficient credit!";
					
				}
			}
			else
			{
			?><p color='red'>SENDER and Receiver can't be same!</p><?php
			}
		}
	}
}}
 echo $res; ?>
              </div>
    </section>

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">About</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">A simple dynamic site for Credit Management. Credit is sort of points which can be transferred from one userss to another userss.</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">Flow: Home Page > View all userss > Select and View one userss > Transfer Credit > Select userss to transfer to > View all userss.</p>
          </div>
        </div>
        
      </div>
	 
    </section>

    
    <!-- Footer -->
    <footer class="footer text-center" id="contact">
      <div class="container">
	  <a href="userss">
      <input class="btn btn-primary btn-lg rounded-pill" type="button" name="userss" value="View All userss" href="userss"></a>
				 </div>
    </footer>


    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Select Sender</h2>
              <hr class="star-dark mb-5">
               <p class="mb-5">
			  
			  <?php
			  $con=mysqli_connect('localhost','root','','credit_transfer');
			  $sql="SELECT * FROM userss";
			  $credit_error="";
				$result = mysqli_query($con,$sql) or mysqli_error($con);
				echo"<div class='table table-responsive'>";
                 echo"<table chass='text-center' >";
				 echo "<th>Name</th><th>E-mail</th><th>Current Credit</th><th></th>";
				while($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {
					echo"<tr style='cursor:pointer'>";
				echo "<td>" . $row['username'] . "</td>";
				echo "<td>" . $row['email'] . "</td>";
				echo "<td>" . $row['current_credit'] . "</td>";
				echo '<td>'?><label class="cont">Select<input type="radio" name="sender" value='<?php echo $row["unique_id"]; ?>' >
  <span class="checkmark"></span>
</label><?php echo'</td>';
				echo"</tr>";
				
				}
				echo "</table></div>";
              ?>
			  </p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                Done</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Select credit value</h2>
              <hr class="star-dark mb-5">
              <p class="mb-5">
			  <input type="number" class="form-control" name="credit" />
			  <?php
			  echo $credit_error;
			  ?>
			  </p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                
                Done</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Select Receiver</h2>
              <hr class="star-dark mb-5">
              <p class="mb-5">
			   <?php
			    $result = mysqli_query($con,$sql) or mysqli_error($con);
				echo"<div class='table table-responsive'>";
                 echo"<table chass='text-center' >";
				 echo "<th>Name</th><th>E-mail</th><th>Current Credit</th><th></th>";
				while($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {
					echo"<tr style='cursor:pointer'>";
				echo "<td>" . $row['username'] . "</td>";
				echo "<td>" . $row['email'] . "</td>";
				echo "<td>" . $row['current_credit'] . "</td>";
				echo '<td>'?><label class="cont">Select<input type="radio" name="receiver" value='<?php echo $row["unique_id"]; ?>' >
  <span class="checkmark"></span>
</label><?php echo '</td>';
				echo"</tr>";
				
				}
				echo "</table></div>";
              ?>
			 
			  </p>
			  <br><br><a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
               
                Done </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>


    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>
	
			  <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
      </form>
  </body>

</html>
