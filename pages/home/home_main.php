<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="pages/home/style.css">
  <title>Document</title>
</head>
<body>
  

<div class= "background">
<nav class="navbar navbar-expand-lg navbar-light bg-#00bd35">
  <div class="container-fluid">
  <div class= "m-2" style= "width: 5%">
    <img src="https://scontent.fcgy2-2.fna.fbcdn.net/v/t1.15752-9/379542265_795343829015785_8437403992906128062_n.png?_nc_cat=103&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeHgNUhPLzNHFM30_YwOYWAPOKTDS_MvIoc4pMNL8y8ih-CPXqfQbQJok7ktocvLkKeAjT3a-INpEOBAH2G6zROW&_nc_ohc=ohWa5iCp4pQAX_eMKAJ&_nc_ht=scontent.fcgy2-2.fna&oh=03_AdQ8mVWDk0DfVEyABjaxI8lCLQTy83PP64ok6jRp2IgdhA&oe=65405FEE" class="img-fluid" alt="">
    </div> 
    <a class="navbar-brand text-light" >Devbugs/Octawiz</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item m-3 text-light">
          <a onclick="to_admin()" aria-current="page" style="cursor: pointer;">Admin User List</a>
        </li>
        <li class="nav-item m-3 text-light">
          <a onclick="to_home()" aria-current="page" style="cursor: pointer;">Home</a>
        </li>
        <li class="nav-item m-3 text-light">
          <a onclick="to_aboutus()" aria-current="page" style="cursor: pointer;">About Us</a>
        </li>
        <li class="nav-item m-3 text-light">
          <a onclick="to_contact()" aria-current="page" style="cursor: pointer;">Contact Us</a>
        </li>
       
      </ul>
    </div>
  
        <a onclick="to_login()" class="text-danger bg-transparent">Log Out</a>
      
  </div>
</nav>
<script>
    function to_home() {
$.post("pages/nav/nav.php", {},function (data) {
      $("#contents").html(data);  
    });
}  
</script>
<script>
    function to_admin() {
$.post("pages/admin/admin_main.php", {},function (data) {
      $("#contents").html(data);  
    });
}  
</script>
<script>
    function to_aboutus() {
$.post("pages/aboutUs/aboutus_main.php", {},function (data) {
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

<h1 id="card">Welcome to Customer FeedBack Management System</h1>
<b class="card-text" id= "card1">"Customer Quote </b>
<div class= "d-flex">
 <p id="card2">Find a way to be personal with your customers and connect with them on a human Level</p>

   

 <div class="card bg-#00bd35" id="card3" style="width:auto">
  <div class="card-body bg-#00bd35 fold">
    <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/384495735_1079695106724748_6308730744944070082_n.png?_nc_cat=110&ccb=1-7&_nc_sid=aee45a&_nc_eui2=AeGaqG0l7sganTDCH_iC3453MmS11oSqKhYyZLXWhKoqFrfvxxsN839fmrMaHFxw4HlRvOMkTtJf6nNHSHdZPang&_nc_ohc=btC84cGdAX8AX_3c1mR&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdQeiB4flavkMLh4Ttv24im_yhCbz1xDGYEumWDmO6MxoQ&oe=6540AB70" class="img-fluid" alt="">
   </div>   
 </div>
 </div>
 <h3 id="card4">We Team Devbugs&Octawiz We Guide, We Trust.</h3>
 </div>
 </body>
</html>
