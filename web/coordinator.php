<?php
// comment out the following two lines when deployed to production

if($_GET['test'] == 1){
    setcookie('userLoggedIn', 123);
}

if($_GET['test'] == 2){
    setcookie('userLoggedIn', 0);
}

