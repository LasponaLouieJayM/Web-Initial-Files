  <link rel="stylesheet" href="pages/login/style2.css">
 <div class="background"></div>
<div class= "body">
 <div class="container">
        <label class="login">Log In</label>
        <div class="login-container">
            <form action="pages/home/home_main.php" method="POST">
                <div class="entryarea">
                    <input type="text" id="email" class="form-control" name="email" required>
                    <p for="email">Email</p>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="entryarea">
                    <input type="password" id="username" class="form-control" name="password" required>
                    <p for="password">Password</p>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="remember-forgot">
                    <input type="checkbox" id="checkbox"></input>
                    <p1>Remember me</p1>
                    <a href="#">Forgot password?</a>
                </div>
                <button onclick="to_home()" name="submit" class="submit">Login</button>
                <div class="register-link">
                    <p>Don't have an account? <div class="text-dark" ></p>
                       <b>
                       <button onclick="to_regis()">Create one</button></div>
                       </b>  
                </div>
            </form>
        </div>
    </div>
    </div>
    <script>
         function to_regis() {
$.post("pages/registration/registration_main.php", {},function (data) {
      $("#contents").html(data);  
    });
}   
    </script>
     <script>
         function to_home() {
$.post("pages/home/home_main.php", {},function (data) {
      $("#contents").html(data);  
    });
}   
    </script>
