<?php
/**
 * Created by PhpStorm.
 * User: zak
 * Date: 12.04.2017
 * Time: 11:13
 */

    require "libs/smarty.class.php";

    $smarty = new Smarty();

$table = array(array("V","O","R","T","D","K","K"),array("V","Ý","R","T","D","K","K"),array("V","O","B","T","D","K","K"),array("V","O","R","O","D","K","K"),array("V","O","R","T","R","K","K"),array("V","O","R","T","D","N","K"),array("V","O","R","T","D","K","Ě"));

    //print_r($table);
    $smarty->assign("arrForExtract",$table);
    $smarty->display("ExtractTpl.tpl");
?>