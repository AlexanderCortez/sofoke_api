<?php
  Router::add("cookies", "cookies", "CookieController", "fetch");
  Router::add("cookies/", "cookies", "CookieController", "fetch");
?>