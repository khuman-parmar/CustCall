<?php

/**
 * Admin side Login file
 * 
 * 
 * @author Khuman Parmar <kp67869@gmail.com >
 * @version 1.0
 * @package CustCall
 * 
 */
if (!isset($_SESSION['user'])) {
    if ($_REQUEST['username']) {

        $user_name = _escape($_REQUEST['username']);
        $password = _escape($_REQUEST['password']);
        if (User::doLogin($user_name, $password)) {
            User::initUserSession($user_name);
            _R(lr('dashboard'));
            //_R(lr('infusionsoft_order'));
        } else {
            $error = "Invalid Credentials";
        }
        $jsInclude = "login.js.php";
    }
    $no_visible_elements = true;
} else {
    _R(lr('dashboard'));
}
_cg("page_title", "Login");
?>