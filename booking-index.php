<?php
//-----------------Require_Once------------------

//controller
require_once("controller/logincontroller.php");
require_once("controller/registercontroller.php");
//model
require_once("model/loginmodel.php");
require_once("model/logoutmodel.php");
require_once("model/registermodel.php");
//session
require_once("session/session.php");
//users
require_once("users/user.php");
//view
require_once("view/adminview.php");
require_once("view/loginview.php");
require_once("view/mainview.php");
//firebase
require_once("firebase/database.php");
require_once("firebase/firebaseInterface.php");
require_once("firebase/firebaseLib.php");
require_once("firebase/firebaseStub.php");
//error

//-----------------------------------------------
//database
$firebase = new \firebase\FirebaseLib('https://destination-cannes-c07ab.firebaseio.com/','AIzaSyAaUSc20e-UJ-Z9pwiRXVIq-G2PC2CaWxo');
$database = new DataBase($firebase);

$session = new Session();

$loginmodel = new Loginmodel($session, $database);

$loginview = new Loginview();

$mainview = new Mainview();

$mainview->render($loginview);

?>