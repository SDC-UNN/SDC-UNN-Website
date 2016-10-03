<?php
/** Generic Pages. Filled the db areas with dummy data.
	Also included/requires LatoFonts to reveal the beauty 8-) . Hope it did be included to the codebase dir. 


**/
?>
@extends('layouts.default') <!-- inherit the default layout-->
@section('content') <!-- Content Begins -->
<!--The Background url can be a cover image from db ||  a default img if there is none-->
			<section style="background:linear-gradient(rgba(76,76,76,1), rgba(255, 0, 0, 0.55)),url('./images/woekdev.jpg'); height:250px; background-size: fixed; background-position:50% 50%;background-attachment: scroll; padding-top:20px; padding-bottom:10px;">

				<!-- Title of the Page as gotten from DB-->
				<center><h3 style="text-align:center; font-family:'LatoWebLight'; color:white;">Title of the Page {{$page->name}}</h3>
				<span style="color:white; font-family:'LatoWebLight';">(A Little Tagline to Spice it Up) <!-- Felt Like it should be added--></span>
				<hr style="width:100px;"></center>
			</section>

			<main class="mdl--layout__content">
				<div class="page-content" style="margin-left:50px; margin-top:40px; ">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--7-col" style=" padding-right:20px; margin-right:50px; margin-left:50px;" >
					<!-- Content of the Page-->
						<span style="padding-right:30px;">
							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt libero commodi voluptatum temporibus placeat iure excepturi aut dicta corrupti nulla sint minus ut, quos quis nesciunt eligendi, ipsa dolore perferendis.

                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus laborum provident illo tenetur ipsam maxime, deleniti tempora recusandae voluptatibus, at animi unde velit earum, nisi eum error quam cum soluta.

                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt libero commodi voluptatum temporibus placeat iure excepturi aut dicta corrupti nulla sint minus ut, quos quis nesciunt eligendi, ipsa dolore perferendis.</p><br>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus laborum provident illo tenetur ipsam maxime, deleniti tempora recusandae voluptatibus, at animi unde velit earum, nisi eum error quam cum soluta.

                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt libero commodi voluptatum temporibus placeat iure excepturi aut dicta corrupti nulla sint minus ut, quos quis nesciunt eligendi, ipsa dolore perferendis.

                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus laborum provident illo tenetur ipsam maxime, deleniti tempora recusandae voluptatibus, at animi unde velit earum, nisi eum error quam cum soluta.</p><br>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt libero commodi voluptatum temporibus placeat iure excepturi aut dicta corrupti nulla sint minus ut, quos quis nesciunt eligendi, ipsa dolore perferendis.

                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus laborum provident illo tenetur ipsam maxime, deleniti tempora recusandae voluptatibus, at animi unde velit earum, nisi eum error quam cum soluta.</p>
						</span>
					</div>

					

					<div class="mdl-layout--large-screen-only" style="height:500px;width:0;border:0;border-left:1px;border-style:dashed;border-color:black"></div>
					

					<div class="mdl-cell mdl-cell--4-col" style="padding-left:20px; ">
					<!-- Sidebar Section (Related Pages)--> 
						<span><h4 style="font-family:'LatoWebBold';">Related Pages</h4></span>

						<!-- Related Pages from the DB-->

						<ul class="dd">
							<li class="mdl-navigation__link"><a href="#">About</a></li>
							<li class="mdl-navigation__link"><a href="#">Yet Another Page</a></li>
							<li class="mdl-navigation__link"><a href="#">Yet Another </a></li>
							<li class="mdl-navigation__link"><a href="#">And Then This One</a></li>
							<li class="mdl-navigation__link"><a href="#">Sorry, Another.</a></li>
						</ul>

						<style type="text/css">
							ul.dd li,ul.dd li a{
								text-decoration: none;
								list-style-type: none;
								color: blue;
							}
							ul.dd li::before{
								content: "> "
							}
						</style>
					</div>
				</div>
				</div>
			</main>
@endsection <!-- End of Section -->