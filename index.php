<?php

include('views/header.html');

$page = (empty($_GET['page']))?'' : $_GET['page'];

switch($page) {
    case 'overons';
        include 'views/overons.html';
        break;

    case 'home';
        include 'views/home.html';
        break;

    case 'contact';
        include 'views/contact.html';
        break;


    default:
        include 'views/home.html';

};

include('views/footer.html');
?>
