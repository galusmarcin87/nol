<?php
// comment out the following two lines when deployed to production

if($_COOKIE['userToken'] == '12345'){
    setcookie('userLoggedIn', 1);
}

if($_COOKIE['userToken'] == '67890'){
    setcookie('userLoggedIn', 0);
}

