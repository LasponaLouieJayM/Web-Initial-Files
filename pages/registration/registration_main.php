<link rel="stylesheet" href="pages/registration/style3.css">

   <div class= "body">
   <div class="main">
        <form method="POST">
            <h2 class="first_title">Create an account</h2>
            <div class="input">
                <input type="text" placeholder="First Name" class="first_name" name="firstname" id="row1"  />
                <input type="text" placeholder="Middle Name" class="middle_name" name="middlename" id="row1"  />
                <input type="text" placeholder="Last Name" class="last_name" name="lastname" id="row1"  />
                <input type="text" placeholder="Street" class="street" name="street" id="row2"  />
                <input type="text" placeholder="Barangay" class="barangay" name="barangay" id="row2"  />
                <br />
                <input type="text" placeholder="Municipality" class="municipality" name="municipality" id="row3"  />
                <input type="text" placeholder="Province" class="province" name="province" id="row3"  />
                <br />
                <input type="text" placeholder="Zipcode" class="zipcode" name="zipcode" id="row4"  />
                <input type="text" placeholder="Mobile number" name="mobilenumber" id="row5"  />
                <input type="text" placeholder="Email" name="email" id="row5"  />
                <br />
                <input type="text" placeholder="Password" name="password" id="row6"  />
                <input type="text" placeholder="Confirm Password" name="confirmpassword" id="row6"  />
                <br />
            </div>
            <input type="text" placeholder="Birthday" class="birthday" name="birthday" id="row2"  />
                <input type="text" placeholder="Sex" class="sex" name="sex" id="row2"  />
                <br />
            <div class="sub_title_4">
                <input type="checkbox" id="privacy-checkbox" name="privacy-checkbox" >
                <label for="privacy-checkbox">I already read and understand the <a href="#">privacy details</a>.</label>
            </div>
            <button onclick="to_sucess()" name="submit" class="submit">Create account</button>
            <p class="sub_title_5 text-dark">
                Go back to <button onclick="to_login()" class="bg-transparent">Login form</button>.
            </p>
        </form>
    </div>
    </div>
  
    <script>
         function to_sucess() {
$.post("pages/registration/success.php", {},function (data) {
      $("#contents").html(data);  
    });
}   
    </script>

<script>
        function to_login() {
$.post("pages/login/login_main.php", {},function (data) {
      $("#contents").html(data);  
    });
}   
    </script>