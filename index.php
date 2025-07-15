<?php 
  $data=json_decode(file_get_contents("public/waget/setup.json"),true);
  $url = isset($_GET['url']) ? trim($_GET['url'], '/') : '';
  $router = explode('/', $url);

switch ($router[0]) {
  case '':
    include 'public/index.html';
    break;
  case 'home':
    include 'public/index.html';
    break;
  case 'about-us':
    include 'public/about.html';
    break;
  case 'service':
    include 'public/service.html';
    break;
  case 'contact':
    include 'public/contact.html';
    break;
  case 'booking':
    include 'public/booking.html';
    break;
  case 'team':
    include 'public/team.html';
    break;
  case 'testimonial':
    include 'public/testimonial.html';
    break;

  case 'admin':
        switch (isset($router[1]) ? $router[1] : ''){
          case 'dashboard':
              include 'zygot/index.html';
            break;
          case 'layout':
              include 'zygot/layout.html';
            break;
          default:
            include 'zygot/login.php';
            break;
        }
    break;
  default:
    include 'public/404.html';
    break;
}
