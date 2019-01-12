<?php
session_start();
?>
<html>
<head>
	<title>A New Tinder!</title>
	<style>
		body {
			margin: 0px;
			/*margin-right: 5px;*/
		}
		.header {
			/*position: fixed;*/
			height: 10%;
			width: 100%;
			top: 0px;	
			z-index: 3;		
		}
		.header #background, .header #labels {
			position: absolute;
			/*background-color: white;*/
			/*padding: 0 0 5%;*/
			width: 100%;
			height: 100%;
			background-size: 100%;
			/*margin-right: auto;*/
			/*margin-left: auto;*/
		}

		.header #labels {
			position: fixed;
			background-color: transparent;
			color: #006793;
		}

		.header #background {
			position: absolute;
			background-color: darkblue;
			height: 10%;
			width: 100%;
			opacity: 0.6;
		}

		.header #search {
			position: fixed;
			width: 30%;
			height: 7%;
			left: 35%;
			top: 1.5%;
			background-color: #f29b9b;
			opacity: 0.5;
		}

		.header #logo {
			position: fixed;
			/*margin-top: 1.5%*/
			/*margin-left: 5%;*/
			left: 1.5%;
			top: 1.5%;
			width: 12%;
			height: 7%;
			margin-left: auto;
			margin-right: auto;
		}

		.header #login {
			position: fixed;
			right: 1.5%;
			top: 2%;
			width: 5%;
			height: 7%;
			margin-left: auto;
			margin-right: auto;
		}

		.dropbtn {
			position: fixed;
			right: 1.5%;
			top: 1.5%;
			width: 7%;
			height: 7%;
			margin-left: auto;
			margin-right: auto;
			cursor: pointer;
			font-size: 120%;
			font-family: "Herculanum";
		}

		.dropdown {
			/*right: 0;*/
			background-color: : #006793;
		    position: relative;
		    display: inline-block;
		}

		.dropdown-content {
			display: none;
			position: fixed;
			right: 1.5%;
			top: 8.5%;
			margin-right: auto;
			background-color: green;
			border: 1px;
			border-color: black
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
		}

		.dropdown-content a {
			/*right: 10%;*/
		    color: black;
		    padding: 12px 16px;
		    text-decoration: none;
		    display: block;
			font-family: "Herculanum";
		}

		.dropdown-content a:hover {background-color: #fff;}

		.dropdown:hover .dropdown-content {display: block;}

		.dropdown:hover .dropbtn {background-color: #006793;}

		.content{
		    width:100%;
	    	height:5000px;
	    	background-color:#005b8e;
		}

		.back { 
			position: absolute;
			top: 12%;
			left: 10%;
			width: 40%;
			height: 80%;
		}

		table.form {
			position: absolute;
			top: 20%;
			right: 10%;
			table-layout: fixed;
			width: 20%;
			/*width: 5%;*/
			/*column-width: 250px;*/
		}

		input::-webkit-input-placeholder {
		    font-size: 20px;
		    line-height: 3;
		    font-family: Herculanum;
		}

		input.empty {
			font-family: FontAwesome;
			font-style: normal;
			font-weight: normal;
			text-decoration: inherit;
		}
		
		.slider {
			-webkit-appearance: none;
			width: 100%;
			height: 25px;
			background: #d3d3d3;
			outline: none;
			opacity: 0.7;
			-webkit-transition: .2s;
			transition: opacity .2s;
		}

		.slider:hover {
			opacity: 1;
		}

		.slider::-webkit-slider-thumb {
			-webkit-appearance: none;
			appearance: none;
			width: 25px;
			height: 25px;
			background: #4CAF50;
			cursor: pointer;
		}

		.slider::-moz-range-thumb {
			width: 25px;
			height: 25px;
			background: #4CAF50;
			cursor: pointer;
		}

	</style>
	<!-- <script type="text/javascript" src="./lib/jquery-3.3.1.min.js"></script> -->
	<script type="text/javascript">
		function an_alert() {
			alert("Hi")
		}

		var slider = document.getElementById("myRange");
		var output = document.getElementById("demo");
		output.innerHTML = slider.value;

		slider.oninput = function() {
			output.innerHTML = this.value;
		}
	</script>
</head>
<body bgcolor = "#006973">
	<image src = "Back_image.jpg" class = "back" id = "back"></image>
	<table class = "form">
	<form method = "post" action = "">
		<tr>
			<td>
				Minimum Age:
			</td>
			<td>
				<input type = "range" min = 14 max = 60 id = "myRange" class = "slider">
			</td>
			<td>
				<p>Value: <span id = "demo"></span></p>
			</td>
		</tr>
		<tr>
			<td>
				Maximum Age:
			</td>
			<td>
				<input type = "range" min = 14 max = 60>
			</td>
<!-- 			<td>
				<p id = "maxage"></p>
			</td>
 -->		</tr>
		<tr>
			<td>
				State: 
			</td>
			<td>
				<select name = "State">
  					<option value="" selected disabled hidden>Choose here</option>
  					<option value = "1">Andaman and Nicobar Islands</option>
					<option value = "2">Andhra Pradesh</option>
  					<option value = "3">Arunachal Pradesh</option>
					<option value = "4">Assam</option>
  					<option value = "5">Bihar</option>
					<option value = "6">Chandigarh</option>
  					<option value = "7">Chattisgarh</option>
					<option value = "8">Dadra and Nagar Haveli</option>
  					<option value = "9">Daman and Diu</option>
					<option value = "10">Delhi NCR</option>
  					<option value = "11">Goa</option>
					<option value = "12">Gujarat</option>
  					<option value = "13">Haryana</option>
					<option value = "14">Himachal Pradesh</option>
  					<option value = "15">Jammu and Kashmir</option>
					<option value = "16">Jharkhand</option>
  					<option value = "17">Karnataka</option>
					<option value = "18">Kerala</option>
  					<option value = "19">Lakshwadeep</option>
					<option value = "20">Madhya Pradesh</option>
  					<option value = "21">Maharashtra</option>
					<option value = "22">Manipur</option>
  					<option value = "23">Meghalaya</option>
					<option value = "24">Mizoram</option>
					<option value = "25">Nagaland</option>
  					<option value = "26">Odisha</option>
					<option value = "27">Puducherry</option>
  					<option value = "28">Rajasthan</option>
					<option value = "29">Sikkim</option>
  					<option value = "30">Tamil Nadu</option>
					<option value = "31">Telangana</option>
  					<option value = "32">Tripura</option>
					<option value = "33">Uttar Pradesh</option>
  					<option value = "34">Uttarakhand</option>
					<option value = "35">West Bengal</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				Any Keywords we can go on with?
			</td>
			<td>
				<input type = "textbox" name = "keywords">
			</td>
		</tr>
		<tr>
			<td>
				<input type = "submit" name = "submit" value = "Search!">
			</td>
		</tr>
	</form>
	</table>
	<div class = "header">
		<div id = "background"></div>
			<a href = "artist_homepage.html"><image src = "Aircraft_Carrier_Design.jpg" id = "logo"></image></a>
			<form method = "post" action = ""><input id = "search" type = "text" placeholder = "&#xF002; Enter What you wish to search. "></form>
	</div>
	<div class = "dropdown">
		<button class = "dropbtn">Settings</button>
		<div class = "dropdown-content">
			<a href = "artist_homepage.html">Your Profile</a>
			<a href = "artist_personal_settings.html">Personal Settings</a>
			<a href = "index.html">Logout</a>
		</div>
	</div>
	<div class = "content">
	</div>
</body>
</html>