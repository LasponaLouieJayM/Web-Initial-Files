$(document).ready(function () {
   to_login();
});

function to_login() {
$.post("pages/login/login_main.php", {},function (data) {
      $("#contents").html(data);  
    });
} 

function to_dash() {
   $.post("pages/dash/dash_main.php", {},function (data) {
         $("#contents").html(data);  
       });
   } 
   

