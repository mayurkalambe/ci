<head>
<h1> Welcome to Online Room Booking </h1>
</head>
<style>
		body {
		background-image:url("http://wallalay.com/wp-content/uploads/2014/05/Background-Wallpaper-Flowers-22.jpg");
		}
		
		#login_form{
		width:300px;
		background: f0f0f0 url(../images/1.jpg)
		border: 1px solid white;
		margin : 250px auto 0;
		padding: 1em;
		-moz-border-radius:3px;
		}
		h1,h2,h3,h4,h5{
		margin-top:0;
		font-family: arial black, arial;
		text-align: center;
		}
		input[type=text], input[type=password]{
		display:block;
		margin:0 0 1em 0;
		width: 280px;
		border:5px;
		-moz-border-radius:1px;
		-webkit-border-radius: 1px;
		padding: 1em;
		}
		input[type=submit], form a{
		border:none;
		margin-right:1em;
		padding:6px;
		text-decoration: none;
		font-size: 12px;
		-moz-border-radius: 4px;
		-webkit-border-radius = 4px;
		background : #348075;
		color: white;
		box-shadow: 0 1px 0 white;
		-moz-box-shadow: 0 1px 0 white;
		-webkit-box-shadow: 0 px 0 white;
		}

		input[type=submit]:hover, form a:hover {
		background: #287368;
		cursor : pointer;
		}

		.error{
		color : #393939;
		font-size: 15px;
		}
		fieldset{
		width : 300px;
		margin: auto;
		margin-bottom: 2em;
		display: block;
		}
	</style>
<div id="login_form"
<fieldset>
 <h1>Login</h1>
 <?php
 
   echo form_open('login/validate');
   echo form_input('username', set_value('username'), 'placeholder="Username"');
   echo form_password('password', '', 'placeholder="Password"');
   echo form_submit('submit', 'Log in');
   echo anchor('login/reg', 'Register!');
   
   
   
   
   
   
   ?>    
 </fieldset>
 </div>
 
