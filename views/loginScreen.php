
<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>

<head>

<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
	background: url(images/app-header-bg.jpg) no-repeat center center fixed;
}
	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
	border-top-left-radius: 6px;

border-bottom-left-radius: 6px;

	border-top-right-radius: 6px;

border-bottom-right-radius: 6px;
}



        .button-success,
        .button-error,
        .button-warning,
        .button-secondary {
            color: white;
            border-radius: 4px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
        }

        .button-success {
            background: rgb(28, 184, 65); /* this is a green */
        }

        .button-error {
            background: rgb(202, 60, 60); /* this is a maroon */
        }

        .button-warning {
            background: rgb(223, 117, 20); /* this is an orange */
        }

        .button-secondary {
            background: rgb(66, 184, 221); /* this is a light blue */
        }



h1 {
  text-shadow: 0 1px 0 #ccc,
               0 2px 0 #c9c9c9,
               0 3px 0 #bbb,
               0 4px 0 #b9b9b9,
               0 5px 0 #aaa,
               0 6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);
}
input[type=button], input[type=submit], input[type=reset] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
.custom-restricted-width {
    /* To limit the menu width to the content of the menu: */
    display: inline-block;
    /* Or set the width explicitly: */
    width: 10em; */
	
</style>
</style>
</head>

<?php


echo '<body bgcolor=#9E9E9E><center>
	<table border="0" width="90%">
		<tr>
		<td><center><img SRC="images/logo.png"></center></td>
		</tr>
	
		<td>
		<center>
			<ul>
		
				
			</ul>
		</center>
		</td>
		</tr>
		<tr>
		<td><span style="color:red">



	<div class="pure-g">
	
    <div class="pure-u-1-3"></div>
    <div class="pure-u-1-3"><p> <table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
		<tr>
		<form method="post" action="index.php" name="loginform">
		<td>
		
		<table width="100%" border="0" cellpadding="3" cellspacing="1">
		<tr>
		<center>
		<br><br><br>
		<h1>NCIC Login</h1>
		</center>
		</tr>
		<br><br>
		<tr>

    <label for="login_input_username">Username</label>
    <input id="login_input_username" class="login_input" type="text" name="user_name" required />

	<br><br>
	
   <td> <label for="login_input_password">Password</label>
    <input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required />

		
		
		
		</tr>
		</table>
		<center>
		<br><br><input type="submit"  name="login" value="Log in" />
		</center>
		
		</td>
		</form>
		</tr>
		</table></p></div>
    <div class="pure-u-1-3"><p></p></div>
</div>



	</table>
	</center></body>';
?>