<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <title>USC Women in Engineering</title>
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
  <meta name="keywords" content="">
  <meta name="description" content="">

  <link href="/img/icons/favicon.ico" rel="shortcut icon" type="image/x-icon">
  
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:type" content="website">
  <meta property="og:url" content="APP_URL">
  <meta property="og:image" content="APP_LOGO">
  <meta property="og:site_name" content="">
  <meta property="fb:admins" content="APP_ADMIN">

  <?php   
   $posIndex = strpos( $_SERVER['PHP_SELF'], '/index.php');
   $baseUrl = substr( $_SERVER['PHP_SELF'], 0, $posIndex)
  ?>

  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $baseUrl?>/frontend/assets/css/sandstone.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl?>/frontend/assets/css/common.css">
  <link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>   

</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation" >
  <div class="container">
  <div class="navbar-header">          
          <a class="navbar-brand" href="/wie/">USC Women in Engineering</a>
  </div>
    <ul class="nav navbar-nav pull-right">
            <li class="active"><a href="/wie/">Home</a></li>
            <li class="active"><a href="/wie/index.php/About">About</a></li>
            <li class="active"><a href="/wie/index.php/Events">Events</a></li>
            <li class="active"><a href="/wie/index.php/Resources">Resources</a></li>
            <li class="active"><a href="/wie/index.php/Contact">Contact Us</a></li>
    </ul>
  </div>
</nav>

  <section id="base-content">
    <?php echo $_html; ?>
  </section>

</body>
</html>