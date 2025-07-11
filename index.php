<?php
  $router=explode("/",$_GET['url']);
  switch ($router[0]) {
    case '':
        include 'public/index.html';
        break;
    
    default:
        include 'public/400.html';
        break;
  }