<!DOCTYPE html>
<html lang="en">
<head>
	<title>Complete Purchase</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
                Complete the spaces to process your shipment
				</span>

				<label class="label-input100" for="first-name">Your Name *</label>
				<div class="wrap-input100 rs1 validate-input">
					<input id="first-name" class="input100" type="text" name="first-name" placeholder="First name">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs1 validate-input">
					<input class="input100" type="text" id="last-name" name="last-name" placeholder="Last name">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Email Address *</label>
				<div class="wrap-input100 validate-input">
					<input id="email" class="input100" type="email" name="email" placeholder="Eg. example@email.com">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Phone Number</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +1 800 000000">
					<span class="focus-input100"></span>
                </div>
                
                <label class="label-input100" for="first-name">Address *</label>
				<div class="wrap-input100 rs1 validate-input">
					<input id="line1" class="input100" type="text" name="line1" placeholder="Line 1">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs1 validate-input">
					<input id="line2" class="input100" type="text" name="line2" placeholder="Line 2">
					<span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="items">Select your products *</label>
                
                <div class="wrap-input100 validate-input">
                    <label style="color:#555555">Gray Puffer</label>
                    <input id="gray" class="input100" type="checkbox" name="gray" value="Gray Puffer">
                    <span class="focus-input100"></span>
                    <label class="label-input100" for="email">Number of elements</label>
					<input id="graynumber" class="input100" type="number" name="graynumber" style="border-bottom:1px solid #A8A999;">
                </div>
                
                <div class="wrap-input100 validate-input">
                    <label style="color:#555555">Shearling Jacket</label>
                    <input id="shearling" class="input100" type="checkbox" name="shearling" value="Shearling Jacket">
                    <span class="focus-input100"></span>
                    <label class="label-input100" for="email">Number of elements</label>
					<input id="shearlingnumber" class="input100" type="number" name="shearlingnumber" style="border-bottom:1px solid #A8A999;">
                </div>

                <div class="wrap-input100 validate-input">
                    <label style="color:#555555">Black Jacket</label>
                    <input id="black" class="input100" type="checkbox" name="black" value="Black Jacket">
                    <span class="focus-input100"></span>
                    <label class="label-input100" for="email">Number of elements</label>
					<input id="blacknumber" class="input100" type="number" name="blacknumber" style="border-bottom:1px solid #A8A999;">
                </div>

                <div class="wrap-input100 validate-input">
                    <label style="color:#555555">Purple Jacket</label>
                    <input id="purple" class="input100" type="checkbox" name="purple" value="Purple Jacket">
                    <span class="focus-input100"></span>
                    <label class="label-input100" for="email">Number of elements</label>
					<input id="purplenumber" class="input100" type="number" name="purplenumber" style="border-bottom:1px solid #A8A999;">
                </div>

                <h3 class="label-input100" for="message" style="font-size:10px !important">for items you did not purchase, please select and mark 0</h3>
                <br>
                <br>
                <label class="label-input100" for="email">PayPal Transaction ID *</label>
				<div class="wrap-input100 validate-input">
					<input id="ppid" class="input100" type="text" name="ppid" minlength="17" maxlength="17" placeholder="ID Number IMPORTANT">
					<span class="focus-input100"></span>
				</div>
				

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="enviarcorreo()">
						<span>
							Submit
							<i class="zmdi zmdi-arrow-right m-l-8"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');

  function enviarcorreo(){
      var firstname = $("#first-name").val();
      var lastname = $("#last-name").val();
      var email = $("#email").val();
      var phonenumber = $("#phone").val();
      var addressline1 = $("#line1").val();
      var addressline2 = $("#line2").val();
      var paypalid = $("#ppid").val();
      var graypuffer = $("#gray").val();
      var shearlingjacket = $("#shearling").val();
      var blackjacket = $("#black").val();
      var purplejacket = $("#purple").val();
      var graynumber = $("#graynumber").val();
      var shearlingnumber = $("#shearlingnumber").val();
      var blacknumber = $("#blacknumber").val();
      var purplenumber = $("#purplenumber").val();
      $.ajax(
          {
              url:'enviar.php',
              type:'POST',
              data:{
                  first:firstname,
                  last:lastname,
                  email:email,
                  phone:phonenumber,
                  add1:addressline1,
                  add2:addressline2,
                  ppid:paypalid,
                  gp:graypuffer,
                  sj:shearlingjacket,
                  bj:blackjacket,
                  pj:purplejacket,
                  gn:graynumber,
                  sn:shearlingnumber,
                  bn:blacknumber,
                  pn:purplenumber,


              }
          }
      )
  }
</script>

</body>
</html>
