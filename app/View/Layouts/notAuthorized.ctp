<!DOCTYPE html>
<html lang="en">
  <head>
	<?php echo $this->Html->charset(); ?>
	<title>
		111<?php echo $title_for_layout; ?>
	</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Felix Guerrero">

    <!-- Le styles -->
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
	<?php echo $this->Html->css('bootstrap.css'); ?>
	<?php echo $this->Html->css('bootstrap-responsive.css'); ?>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/rs/img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/rs/img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/rs/img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/rs/img/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Project name</a>
      </div>
    </div>

    <div class="container">
	<div id="header">
	</div>
	<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
	</div>
	<div id="footer">
		<?php echo $this->element('sql_dump'); ?>
	</div>
    </div> <!-- /container -->




    <!-- Le javascript ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

<?php echo $this->Html->script('jquery.js'); ?>
<?php echo $this->Html->script('bootstrap.js'); ?>
<?php echo $this->Html->script('bootstrap-transition.js'); ?>
<?php echo $this->Html->script('bootstrap-alert.js'); ?>
<?php echo $this->Html->script('bootstrap-modal.js'); ?>
<?php echo $this->Html->script('bootstrap-dropdown.js'); ?>
<?php echo $this->Html->script('bootstrap-scrollspy.js'); ?>
<?php echo $this->Html->script('bootstrap-tab.js'); ?>
<?php echo $this->Html->script('bootstrap-tooltip.js'); ?>
<?php echo $this->Html->script('bootstrap-popover.js'); ?>
<?php echo $this->Html->script('bootstrap-button.js'); ?>
<?php echo $this->Html->script('bootstrap-collapse.js'); ?>
<?php echo $this->Html->script('bootstrap-carousel.js'); ?>
<?php echo $this->Html->script('bootstrap-typeahead.js'); ?>

</body>
</html>

