</div>


    <?php wp_footer(); ?> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
let images = document.querySelectorAll(".lazyload");
lazyload(images);


$("#tab1").click(function(){
  $("#tab2").removeClass("active");
  $("#tab1").addClass("active");
});

$("#tab2").click(function(){
  $("#tab1").removeClass("active");
  $("#tab2").addClass("active");
});

</script>
</body>

</html>