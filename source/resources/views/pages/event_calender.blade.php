<?php
/**
 * Project: srcng.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    9/29/2016
 * Time:    3:04 PM
 **/
 
 ?>

 @extends("app")
  <script type="text/javascript" src="jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="jquery-ui.css">

 @section
 	<div class="mdl-grid">
 		
    <!-- For the main Section -->
    <section style="background:linear-gradient(rgba(76,76,76,1), rgba(255, 0, 0, 0.55)),url('./images/woekdev.jpg'); height:100px; background-size: fixed; background-position:50% 50%;background-attachment: scroll; padding-top:20px; padding-bottom:10px; color: white;">
    <style type="text/css">
        input[type=date]
        {
            outline: none;
            border: none;
        }
    </style>
        <div class="container mdl-grid" style="margin-top:30px;">

            <div class="mdl-cell mdl-cell--3-col" style="height:60px;">
                <span style="font-family: 'LatoWebLight'; font-size: 30px;">Events</span>
            </div>
            
            <div class="ruler" style="height: 40px; background: white; border:1px solid white; "> </div>
        </div>
    </section>

    <section> <!-- Dynamic Calendar -->
        <div class="container"  style="background: gray; height: 300px; padding-top: 40px;">
           <center> <h2 style="margin-top:50px; padding-top: : 50px; text-align: center; font-family: 'LatoWebLight';">{{Dynamic Calendar!}}</h2></center>
        </div>
    </section>

 	</div>
 @stop
