<!-- Header -->
<?php
$title = "Mock-2";
require_once("header.php");
?>

<!-- Page Content -->
<div class="col-lg-12">

  <h3>Test 02</h3>
  <p>
    This page implements an ajax load during a scroll action .
  </p>


  <div class="well col-lg-12">

    <div>
      <h4>This is an Ajax loaded text ! </h4>

      <p>
        Le Lorem Ipsum est simplement du faux texte employé dans
        la composition et la mise en page avant impression.
        Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500,
        quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un
        livre spécimen de polices de texte.
      </p>
    </div>

    <div>
      <h4>This is an Ajax loaded text ! </h4>

      <p>
        Le Lorem Ipsum est simplement du faux texte employé dans
        la composition et la mise en page avant impression.
        Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500,
        quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un
        livre spécimen de polices de texte.
      </p>
    </div>

    <div>
      <h4>This is an Ajax loaded text ! </h4>

      <p>
        Le Lorem Ipsum est simplement du faux texte employé dans
        la composition et la mise en page avant impression.
        Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500,
        quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un
        livre spécimen de polices de texte.
      </p>
    </div>

    <div>
      <h4>This is an Ajax loaded text ! </h4>

      <p>
        Le Lorem Ipsum est simplement du faux texte employé dans
        la composition et la mise en page avant impression.
        Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500,
        quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un
        livre spécimen de polices de texte.
      </p>
    </div>

    <div>
      <h4>This is an Ajax loaded text ! </h4>

      <p>
        Le Lorem Ipsum est simplement du faux texte employé dans
        la composition et la mise en page avant impression.
        Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500,
        quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un
        livre spécimen de polices de texte.
      </p>
    </div>

    <div>
      <h4>This is an Ajax loaded text ! </h4>

      <p>
        Le Lorem Ipsum est simplement du faux texte employé dans
        la composition et la mise en page avant impression.
        Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500,
        quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un
        livre spécimen de polices de texte.
      </p>
    </div>



    <div id="zone">

    </div>

  </div>

</div>
<!-- End Page Content -->

</div>
<!-- End Container -->

<script type="text/javascript">

$( document ).ready(function() {

  $(window).on("scroll", function() {
    var scrollHeight = $(document).height();
    var scrollPosition = $(window).height() + $(window).scrollTop();
    if ((scrollHeight - scrollPosition) / scrollHeight === 0) {
      $("#zone").slideDown(1000, function(){
        $(this).load('text.php');
      });
    }
  });

});

</script>

</body>
</html>
