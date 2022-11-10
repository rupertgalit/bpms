
<!DOCTYPE html>
<html lang="en">

<head>
    <title>BPMS||Home Page</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/87a348d4c3.js" crossorigin="anonymous"></script>
    
</head>

<body>


<?php 

// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

include('includes/dbconnection.php');
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if (strlen($_SESSION['login_ses']==0)) {
    header('location:logout.php');
    } 



if(isset($_POST['submit']))
  {


    // echo "<script>window.location.href='login.php'</script>";
    $name=$_POST['name'];
    $email=$_POST['email'];
    $services=$_POST['services'];
    $staff=$_POST['staff'];
    $adate=$_POST['adate'];
    $atime=$_POST['atime'];
    $phone=$_POST['phone'];
    $aptnumber = mt_rand(100000000, 999999999);
    $mobile_no = "+63$phone";
    $User_id = $_SESSION['login_ses'];



	$blkd=mysqli_query($con,"SELECT * FROM tblappointment WHERE AptDate = '$adate' AND AptTime = '$atime' AND Staff = '$staff'");

	if(mysqli_num_rows($blkd)) {
		
		    echo '<script>
            $(document).ready(function(){
            
            $("#exampleModalCenter").modal("show");
            }
            )	   
		  </script>';
		}
		else{
	 
				$query=mysqli_query($con,"insert into tblappointment(User_id,AptNumber,Name,Email,PhoneNumber,AptDate,AptTime,Services,Staff) value('$User_id','$aptnumber','$name','$email','$mobile_no','$adate','$atime','$services','$staff')");
				if ($query) {
					$ret=mysqli_query($con,"select AptNumber from tblappointment where Email='$email' and  PhoneNumber='$mobile_no'");
					$result=mysqli_fetch_array($ret);
					$_SESSION['aptno']=$result['AptNumber'];
					echo "<script>window.location.href='thank-you.php'</script>";	
				}
				else
				{
				$msg="Something Went Wrong. Please try again";
				}

                               

                // Your Account SID and Auth Token from twilio.com/console
                $sid = 'ACb2c05a13f30e7b1ebfc43e8b88a351d6';
                $token = 'ccccccb8c5c8f3c2307d751008540a2b';
                $client = new Client($sid, $token);

                // Use the client to do fun stuff like send text messages!
                $client->messages->create(
                    // the number you'd like to send the message to
                    $mobile_no,
                    [
                        // A Twilio phone number you purchased at twilio.com/console
                        'from' => '+17087874269',
                        // the body of the text message you'd like to send
                        'body' => "You successfully Booked an Appointment, Your Booking No. #$aptnumber"
                    ]
                );
                

			}
  }

?>

    


    <?php include_once('includes/user-header.php');?>
    <!-- END nav -->

    <section id="home-section" class="hero" style="background-image: url(images/bg.jpg);"
        data-stellar-background-ratio="0.5">
        <div class="home-slider owl-carousel">
            <div class="slider-item js-fullheight">
                <div class="overlay"></div>
                <div class="container-fluid p-0">
                    <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end"
                        data-scrollax-parent="true">
                        <img class="one-third align-self-end order-md-last img-fluid" src="images/bg_1.png" alt="">
                        <div class="one-forth d-flex align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text mt-5">
                                <span class="subheading">Beauty Parlour</span>
                                <h1 class="mb-4">Get Pretty Look</h1>
                                <p class="mb-4">We pride ourselves on our high quality work and attention to detail. The
                                    products we use are of top quality branded products.</p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item js-fullheight">
                <div class="overlay"></div>
                <div class="container-fluid p-0">
                    <div class="row d-flex no-gutters slider-text align-items-center justify-content-end"
                        data-scrollax-parent="true">
                        <img class="one-third align-self-end order-md-last img-fluid" src="images/bg_2.png" alt="">
                        <div class="one-forth d-flex align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text mt-5">
                                <span class="subheading">Natural Beauty</span>
                                <h1 class="mb-4">Beauty Salon</h1>
                                <p class="mb-4">This parlour provides huge facilities with advanced technology
                                    equipments and best quality service. Here we offer best treatment that you might
                                    have never experienced before.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <br>
    <section class="ftco-section ftco-no-pt ftco-booking">
        <div class="container-fluid px-0">
            <div class="row no-gutters d-md-flex justify-content-end">
                <div class="one-forth d-flex align-items-end">
                    <div class="text">
                        <div class="overlay"></div>
                        <div class="appointment-wrap">
                            <span class="subheading">Reservation</span>
                            <h3 class="mb-2">Make an Appointment</h3>
                            <form action="" method="post" class="appointment-form">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" placeholder="Name"
                                                name="name" >
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="appointment_email"
                                                placeholder="Email" name="email" >
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="services" id="services" 
                                                    class="form-control">
                                                    <option value="">Select Services</option>
                                                    <?php $query=mysqli_query($con,"select * from tblservices");
                                                    while($row=mysqli_fetch_array($query))
                                                    {
                                                    ?>
                                                    <option value="<?php echo $row['ServiceName'];?>">
                                                        <?php echo $row['ServiceName'];?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="staff" id="staff" 
                                                    class="form-control">
                                                    <option value="">Select Staff</option>
                                                    <?php $query=mysqli_query($con,"select * from tblstaff");
                                                    while($row=mysqli_fetch_array($query))
                                                    {
                                                    ?>
                                                    <option value="<?php echo $row['Staff_Name'];?>">
                                                        <?php echo $row['Staff_Name'];?>-<?php echo $row['Name'];?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control appointment_date" placeholder="Date"
                                                name="adate" id='adate' >
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control appointment_time" placeholder="Time"
                                                name="atime" id='atime' >
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="phone" name="phone"
                                                placeholder="Phone"  maxlength="10" pattern="[0-9]+">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Make an Appointment"
                                        class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="one-third">
                    <div class="img" style="background-image: url(images/bg-1.jpg);">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <br>


            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" >
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">SCHEDULE NOT AVAILABLE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span >&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Try Different Date, Time or Staff for Appointment Schedule.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
                </div>
            </div>
            </div>



    <?php include_once('includes/footer.php');?>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>                                                     
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

	
	

</body>

</html>