<?php

require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Auth;
use App\classes\Prime;
$home = new Home();

if (isset($_GET['page'])) {
    if ($_GET['page'] == 'home') {
        $home->index();
    } elseif ($_GET['page'] == 'product') {
        $home->product();
    }
    elseif ($_GET['page'] == 'detail')
    {
        $home->detail($_GET['id']);
    }
    elseif($_GET['page'] == 'login')
    {
        $home->login();
    }
    elseif($_GET['page'] == 'prime')
    {
        $home->prime();
    }
}
elseif (isset($_POST['login_btn']))
{
    $auth = new Auth();
    $auth->login($_POST);
}
elseif (isset($_POST['prime_btn']))
{
    $prime = new prime($_POST);
    $prime->index();
}