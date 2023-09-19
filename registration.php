<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <title>Furniture Management System - Registration</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="http://localhost:81/MYSITE/login/registervalidation.php" method="POST">
                    <h2>Registration</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" name="name" required>
                        <label for="name">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" id="password"required>
                        <label for="password">Password</label>
                    </div>
		    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="cpassword" id="cpassword"required>
                        <label for="cpassword">Conform Password</label>
                    </div>		
	
		   <div class="inputbox">
    			<ion-icon name="mail-outline"></ion-icon>
    			<input type="email" name="email" id="email" required>
    			<label for="email">Email</label>
		   </div> 
		   <div>
		   <button id="registerbtn" type="submit" name="registerbtn">Register</button><br><br>
                Already a user? <a href="index.html">Login here</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

