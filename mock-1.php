<!-- Header -->
<?php
$title = "Mock-1";
require_once("header.php");
?>

<!-- Page Content -->
<div class="col-lg-12">

<h3>Test 01</h3>
<p>
  This page implements an ajax load from another page when pressing the "load" button.
</p>

<div>
  <a href="#" id="load-btn" class="btn btn-primary">  _Load_ </a>
  <a href="http://google.com/" class="btn btn-primary">  _Slow_ </a>
  <a href="http://yahoo.com/" class="btn btn-primary">  _Snow_ </a>
  <a href="text.php" class="btn btn-primary">  _Lambda_ </a>
</div>

<div class="well col-lg-12" id="zone">

</div>

</div>
<!-- End Page Content -->

</div>
<!-- End Container -->

<script type="text/javascript">

$( document ).ready(function() {

  $("#zone").hide();

  $("#load-btn").click(function(event){
    $("#zone").slideDown(1000, function(){
      $(this).load('text.php');
    });
  });
});

</script>

</body>
</html>
