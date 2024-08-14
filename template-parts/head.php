<!doctype html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title>
    <?php wp_title(''); ?>
  </title>
  <?= get_template_part('template-parts/favicon');  ?>
  <link href="//www.google-analytics.com" rel="dns-prefetch">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <script>
    document.getElementsByTagName("html")[0].className += " js";
  </script>

  <script src="//code.jquery.com/jquery-latest.min.js"></script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/33e1d82b6d.js" crossorigin="anonymous"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  <!-- <script>
    (function() {
      var ldTheme = localStorage.getItem('ldSwitch');
      if (ldTheme == 'dark' || (ldTheme == 'system' && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
        htmlEl.setAttribute('data-theme', 'dark');
      }
    }());
  </script> -->

  <?php wp_head(); ?>

</head>