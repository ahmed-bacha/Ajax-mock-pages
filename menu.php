<nav role="navigation" class="navbar navbar-default">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>


        <a href="#" class="text-center navbar-brand">Ajax-Mock-Tests</a>

    </div>


    <!-- Collection of nav links, forms, and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">

        <ul class="nav navbar-nav navbar-right">

        <!-- BLOC DES VUES  -->

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Mock-Pages
                <span class="caret"></span>
            </a>
          <ul class="dropdown-menu" role="menu">
            <li>
                <a href="mock-1.php">Mock-1</a>
                <a href="mock-2.php">Mock-2</a>
                <a href="mock-3.php">Mock-3</a>
            </li>
          </ul>
        </li>

        <!-- END BLOC DES VUES  -->
        </ul>
    </div>

    <!-- Activation de la fonction DropDown du menu -->
    <script type="text/javascript">
    $('.dropdown-toggle').dropdown();
    </script>

</nav>
