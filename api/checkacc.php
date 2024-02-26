<?php
include_once "db.php";
// ' OR 1=1; <=SQL注入
// 過濾表單資料
// $acc=$_POST['acc'];
// $pw=$_POST['pw'];
// $acc=htmlspecialchars($_POST['acc']);
// $pw=htmlspecialchars($_POST['pw']);

// $checkacc=$Checkacc->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);

// dd($checkacc);

if ($Checkacc->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']])>0) {
    $_SESSION['login']=$_POST['acc'];
    to("../back.php");
}else{
    to("../index.php?do=login&error='帳號或密碼錯誤'");
}