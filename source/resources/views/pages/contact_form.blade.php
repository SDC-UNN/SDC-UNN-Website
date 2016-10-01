<?php
/**
 * Project: srcng.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    9/29/2016
 * Time:    2:59 PM
 **/

/**
 * Project: contact page
 * Author:  Victor Alagwu (victoralagwu@gmail.com)
 * Date:    9/30/2016
 */

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contact Page</title>
	        <link rel="icon" type="image/png" href="image/src-logo.jpg">
	        <link rel="stylesheet" type="text/css" href="css/material-icons.css">
	        <link rel="stylesheet" type="text/css" href="css/materialize.css">
	        <meta charset="utf-8" view="viewport" content="width=device-width, initial scale=1.0" />
	        <script type="text/javascript" href="jquery.min.css"></script>
	        <script type="text/javascript" href="materialize.css"></script>
    </head>
	    <style type="text/css">
		    body
		        {
			        background-image: url("image/background.jpg");
			        display: flex;
			        min-height: 100vh;
			        flex-direction: column;
			        background-size: fit;

		    }

		    .nav-wrapper .brand-logo img
		        {
			        height: 50px;
			        margin-top: 10px;
				    margin-left: 17px;
		    }
		    @media(max-width: 600px)
		       {
			        .nav-wrapper .brand-logo img
			            {
				            height: 50px;
				            margin-top: 10px;
					        margin-left: 17px;
		            }
		    }
		    .nav-wrapper  #menu
		        {
			   		margin-left:70px;
					margin-bottom:-49px;
					font-family: "Monotype Corsiva";
					font-size: 34px;

		    }
		    .contact_images img
		        {
			        width: 50px;
		    }
		    .contain
		        {
			        background-image: url("image/back1.jpg");
			        color: white;

		    }
		    #side_bar
		        {
			        color: white;
			        font-size: 15px;
			        font-family: "Lucida Handwriting";
		    }
		    footer
		        {
			        text-align: center;
			        color: white;
			        font-family:"Harlow Solid Italic";
		    }
		    #name
		        {
			        font-family: "Monotype Corsiva";
		    }
		    #email
		        {
			        font-family: "Monotype Corsiva";
			}
		    #company_name
		        {
			        font-family: "Monotype Corsiva";
		    }
		    #telephone
		        {
			        font-family: "Monotype Corsiva";
		    }
	    </style>
<body>

<div class="all_pages">
		<!--Navigation Row-->
    <div class="navbar-fixed">
        <nav class="transparent">
			<div class="nav-wrapper">
				<a href="#" class="brand-logo"><img src="image/src-logo.jpg" class="circle responsive-img"></a>
				<a href="" id="menu">SRC-NG</a>
			</div>
		</nav>
	</div>
		<!--Navigation Row-->
	<br/>


	<div class="row contain container">
	    <br/>
	    <h5 style="text-align: center; font-family: Bernard MT Condensed; font-size: 30px; margin-top: 15px;">Contact Us</h5>

	    	<!--Beginning of first column-->
	   	    <div class="col s12 m6 l8">
	   	    	<!--Container for form-->
				<div class="container">
					<!--Form-->
					<form>

						<!--Row for Name-->
						<div class="row">
							<div class="input-field col s12">
								<label for="name">Name</label>
								<br/>
								<input type="text" name="name" id="name" placeholder="First Name Or Username" class="validate" required />
							</div>
						</div>
						<!--Row for Name End-->


						<!--Row for Email and Telephone Number-->
						<div class="row">

						   <!--Column for Email-->
							<div class="input-field col s12 m6 l6">
							    <label for="email">Email</label>
							    <br/>
								<input type="text" name="email" id="email" placeholder="example@******.com" class="validate" required />
							</div>
						   <!--Column for Email End-->


							<!--Column for telephone input-->
							<div class="input-field col s12 m6 l6">
							    <label for="telephone">Telephone</label>
							    <br/>
								<input type="tel" name="telephone" id="telephone" placeholder="+(CountryCode)(Phone Num.)" class="validate" />

							</div>
							<!--Column for telephone input End-->

						</div>
						<!--Row for Email and Telephone Number End-->

						<!--Row for School or Company Name-->
						<div class="row">
							<div class="input-field col s12">
								<label for="name">School/Organisation Name</label>
								<br/>
								<input type="text" name="company_name" id="company_name" placeholder="Enter your School or Organisation Name" class="validate" required="required" />
							</div>
						</div>
						<!--Row for School or Company Name End-->

						<!--Row for Comment(Textfield)-->
						<div class="row">
							<div class="input-field col s12">
								<label for="message">Message</label><br/>
								<textarea name="message" class="materialize-textarea"></textarea>
							</div>
						</div>
						<!--Row for Comment(Textfield) End-->
					</form>
					<!--Form Ends-->
						<button class="waves-effect waves-light btn">Submit</button>
				</div>
				<!--Container for form ends-->
		    </div>
		    <!--Ending of first column-->

			<div class="col s12 m6 l4 ">
			    <div class="containe">
			        <br/>
				        <b id="side_bar">You can also contact us through the following channels:</b><br/>
				            <div class="contact_images">
				                <!--First row of images-->
						        <div class="row">
						        	<!--Images by the left side-->
							        <div class="col s6 m6 l6" id="left_side">
								        <a href="https://facebook.com/src"><img src="image/facebook.png" class="circle responsive-img"></a>
							        </div>
							        <!--Images by the left side-->

							        <!--Images by the right side-->
							        <div class="col s6 m6 l6" >
								        <a href="https://youtube.com/src"><img src="image/youtube.png" class="circle responsive-img"></a>
							        </div>
							        <!--Images by the right side-->
						        </div>
					            <!--First row of images-->

					            <!--Second row of images-->
						        <div class="row">
						            <!--Images by the left side-->
							        <div class="col s6 m6 l6" id="left_side">
								        <a href="https://blogger.com"><img src="image/blogger.png" class="circle responsive-img"></a>
							        </div>
							        <!--Images by the left side-->

							        <!--Images by the right side-->
							        <div class="col s6 m6 l6" >
								        <a href="https://googleplus.com"><img src="image/googleplus.png" class="circle responsive-img"></a>
							        </div>
							        <!--Images by the right side-->
						        </div>
					            <!--Second row of images-->

					            <!--Third row of images-->
					        	<div class="row">
					        	    <!--Images by the left side-->
							        <div class="col s6 m6 l6" id="left_side">
								       <a href="https://linkedin.com"><img src="image/linkedin.png" class="circle responsive-img"></a>
							        </div>
                                    <!--Images by the left side-->

                                    <!--Images by the right side-->
							        <div class="col s6 m6 l6" >
								       <a href="https://twitter.com"><img src="image/twitter.png" class="circle responsive-img"></a>
							        </div>
						        </div>
					           <!--Third row of images-->
				            </div>

				            <!--Row for Address,Phone number etc-->
				            <div class="row">
					            <div class="col s12">
					            	<b style="font-size: 18px;">Address</b><br/>
						            <p style="font-size: 15px;">University of Nigeria, Nsukka,
						            <br/>Enugu,
						            <br/>Nigeria.
						            </p>
						            <hr>

						            <b style="font-size: 18px;">Phone Number</b><br/>
						            <i class="material-icons md-59">phone</i> +234 (0) ***********
						            <hr>

						            <b style="font-size: 18px;">Email Address</b><br/>
						            <i class="material-icons">email</i> email@****.com
					            </div>
				            </div>
				            <!--Row for Address,Phone number etc-->
			    </div>
		    </div>
	</div>


	<footer class="page-footer transparent">
	    Design with
	    <i class="material-icons" style="color: red;">favorite</i> by Victor
	    <p style="font-family:'Arial Black'; color:black;">&copy; All Rights Reserved.</p>
	</footer>
</div>

</body>
</html>
