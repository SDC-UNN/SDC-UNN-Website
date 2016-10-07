<?php
/**
 * Project: srcng.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    9/29/2016
 * Time:    3:04 PM
 **/
?>
@extends('layouts.default')
@section('extra_heads')
    <!-- you can put page specific css here-->
    <link rel="stylesheet" type="text/css" href="{{url('css/jquery-ui.css')}}">
    <style type="text/css">
    
    input[type=text]
        {
            outline: none;
            border: none;
        }

     .sectiontitle{
     	background:linear-gradient(rgba(76,76,76,1), rgba(255, 0, 0, 0.55)),url('./images/woekdev.jpg'); 
     	height:100px;
     	background-size: fixed;
     	background-position:50% 50%;
     	background-attachment: scroll;
     	padding-top:20px;
     	padding-bottom:10px;
     	color: white;
     }   
     #container1{
     	margin-top:30px;
     }
     #containertitle{
     	height:60px;
     }
     #eventName{
     	font-family: 'Roboto';
     	font-size: 30px
     }
     #vertical_line{
     	height: 40px;
     	background: white;
     	border:1px solid white;
     	margin-right: 30px;
     }
     #day{
     	height: 30px;
     	padding-left: 10px;
     }
     #day2{
     	height:30px;
     	padding-left: 10px;
     }
     #checkit{
     	height:30px;
     	background:rgb(63,81,181);
     	border:none;outline: none;
     	width: 100px; color: white;
     }
     #checkit:hover{
        background: white;
        color: black;
        }
      #mainHeaderCont{
      	background: gray;
      	height: 300px;
      	padding-top: 40px;
      }  
        #mainHeader{
        	margin-top:50px;
        	padding-top:  50px;
        	text-align: center;
        	font-family: 'Roboto';
        }
        #eventsTable{
        	width:1000px; /** Not Responsive == Would work on that. **/
        }
        #eventsTableData{
        	margin-top:50px;
        }
    </style>
@endsection
@section('extra_scripts')
    <script type="text/javascript" src="{{url('js/jquery-ui.js')}}"></script>
    <script type="text/javascript">
        //For the DataPicker..

        $(document).ready(function(){
            
            
            //alert("Hello");
            $("#day").datepicker();
            $("#day2").datepicker();

        });
    </script>
@endsection
@section('content')
    <!-- your content goes here -->

    <!-- For the main Section -->
    <section class="sectiontitle">
    
        <div class="container mdl-grid" id="container1">

            <div class="mdl-cell mdl-cell--3-col" id="containertitle">
                <span id="eventName">Events</span>
            </div>
            
            <div class="ruler mdl-layout--large-screen-only" id="vertical_line"> </div>

            <div class="mdl-cell mdl-cell--7-col">
                <!-- Simple Textfield -->
                   From: <input type="text" name="fromDate" id="day"  placeholder="Start Date">

                    To: <input type="text" name="ToDate" id="day2" placeholder="End Date">


                    <a><input type="button" name="checkevent" value="Check" id="checkit"></a>
            </div>
        </div>
    </section>

    <section> <!-- Dynamic Calendar -->
        <div class="container"  id="mainHeaderCont">
           <center> <h2 id="mainHeader">{{Dynamic Calendar!}}</h2></center>
        </div>
    </section>

   <section id="eventsTableData" class="container">
    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width" id="eventsTable">
        <thead>
            <tr>
                <th class="mdl-data-table__cell--non-numeric full-width" >Events</th>
                <th class="mdl-data-table__cell--non-numeric">Venue</th>
                <th class="mdl-data-table__cell--non-numeric">Date/Time</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td class="mdl-data-table__cell--non-numeric">Event 1</td> <!-- Properties and then -- as = Sign -->
                <td class="mdl-data-table__cell--non-numeric">UNN</td>
                <td class="mdl-data-table__cell--non-numeric">Today</td>
            </tr>

            <tr>
                <td class="mdl-data-table__cell--non-numeric">Event 2</td>
                <td class="mdl-data-table__cell--non-numeric">ABSU</td>
                <td class="mdl-data-table__cell--non-numeric">Yesterday</td>
            </tr>
            
             <tr>
                <td class="mdl-data-table__cell--non-numeric">Event 3</td>
                <td class="mdl-data-table__cell--non-numeric">EBSU</td>
                <td class="mdl-data-table__cell--non-numeric">Yesterday Evening</td>
            </tr>
        </tbody>
    </table>
    </section>
@endsection