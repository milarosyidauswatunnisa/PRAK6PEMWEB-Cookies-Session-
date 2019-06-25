<html>
<head>
<style>	
@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);
body {
				background: #CD5C5C ;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
}





.form-4 {
    /* Size and position */
    width: 300px;
    margin: 60px auto 30px;
    padding: 10px;
    position: relative;

    /* Font styles */
    font-family: 'Raleway', 'Lato', Arial, sans-serif;
    color: white;
   
}

.form-4 h1 {
    font-size: 22px;
    padding-bottom: 20px;
}

.form-4 input[type=text],
.form-4 input[type=password] {
    /* Size and position */
    width: 100%;
    padding: 8px 4px 8px 10px;
    margin-bottom: 15px;

    /* Styles */
    
    border: 1px solid rgba(78,48,67, 0.8);
    background: rgba(0,0,0,0.15);
    font-weight: bold;

    /* Font styles */
    font-family: Arial, sans-serif;
    color: #fff;
    font-size: 13px;
}

/* Placeholder style (from http://stackoverflow.com/questions/2610497/change-an-inputs-html5-placeholder-color-with-css) */

.form-4 input::-webkit-input-placeholder {
    color: rgba(37,21,26,0.5);
    text-shadow: 0 1px 0 rgba(255,255,255,0.15);
}

.form-4 input:-moz-placeholder {
    color: rgba(37,21,26,0.5);
    text-shadow: 0 1px 0 rgba(255,255,255,0.15);
}

.form-4 input:-ms-input-placeholder {
    color: rgba(37,21,26,0.5);
    text-shadow: 0 1px 0 rgba(255,255,255,0.15);
}

.form-4 input[type=text]:hover,
.form-4 input[type=password]:hover {
    border-color: #333;
}

.form-4 input[type=text]:focus,
.form-4 input[type=password]:focus,
.form-4 input[type=submit]:focus {
    box-shadow: 
        0 1px 0 rgba(255,255,255,0.2), 
        inset 0 1px 1px rgba(0,0,0,0.1),
        0 0 0 3px rgba(255,255,255,0.15);
    outline: none;
}


.form-4 input[type=submit] {
    /* Size and position */
    width: 100%;
    padding: 8px 5px;
    background: #F9AF80;
    

    /* Font styles */
    color: white;
    font-size: 16px;
    font-weight: bold;
    font-family: 'Raleway', 'Lato', Arial, sans-serif;
}


}



</style>
<body>
    <div class = "container">
        	<section class="main">
				<form class="form-4" action="hasilform.php" method="POST">
				    <h1>Login</h1>
				    <p>
				        <label for="login">Username</label>
				        <input type="text" name="uname"  required>
				    </p>
				    <p>
				        <label for="password">Password</label>
				        <input type="password" name='pwd'  required> 
				    </p>

				    <p>
				        <input type="submit" name="submit" value="Continue">
				    </p>       
				</form>​
			</section>
<!--
<form action="hasilform.php" method="POST">
Uname: <input type="text" name="uname"> <br>
Pwd: <input type="password" name="pwd"> <br>
<input type ="submit" value="Enter">
</form>-->

</div>
</body>
</head>
</html>