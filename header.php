<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Roma's Portfolio</title>

  <!--Unicons Fonts-->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

  <!--devicon icon-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">

  <!--styles.css-->

  <link rel="icon" href="img/logo.ico" type="image/x-icon">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!--Font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <?php wp_head(); ?>
</head>
<body>
  <header class="header" id="header">
    
    <nav class="nav container">
      <a href="#" class="nav_logo">Roma</a>

      <div class="nav_menu" id="nav-menu">
        <ul class="nav_list grid">
          <li class="nav_item">
            <a href="#home" class="nav_link active-link">
              <i class="uil uil-estate nav_icon"></i> Home
            </a>
          </li>

          <li class="nav_item">
            <a href="#about" class="nav_link">
              <i class="uil uil-user nav_icon"></i> About
            </a>
          </li>

          <li class="nav_item">
            <a href="#skills" class="nav_link">
              <i class="uil uil-file-alt nav_icon"></i> Skills
            </a>
          </li>

          <li class="nav_item">
            <a href="#certifications" class="nav_link">
            <i class="uil uil-award nav_icon"></i> Certifications
            </a>
          </li>

          <li class="nav_item">
            <a href="#projects" class="nav_link">
              <i class="uil uil-scenery nav_icon"></i> Projects
            </a>
          </li>

          <li class="nav_item">
            <a href="#contact" class="nav_link">
              <i class="uil uil-message nav_icon"></i> Contact
            </a>
          </li>
        </ul>
        <i class="uil uil-times nav_close" id="nav-close"></i>
      </div>

      <div class="nav_btns">
        <!--Theme Change Button-->
        <i class="uil uil-moon change-theme" id="theme-button"></i>

        <div class="nav_toggle" id="nav-toggle">
          <i class="uil uil-apps"></i>
        </div>
      </div>
    </nav>
  </header>

  <main class="main">