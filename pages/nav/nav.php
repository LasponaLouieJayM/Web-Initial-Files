<h1>Home</h1>
<button onclick="to_home()" class="btn btn-dark">Back</button>
<script>
        function to_home() {
$.post("pages/home/home_main.php", {},function (data) {
      $("#contents").html(data);  
    });
}  
</script>