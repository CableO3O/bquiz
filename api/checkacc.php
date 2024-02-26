<?php
include_once "db.php";
// 過濾表單資料
$acc=htmlspecialchars($_POST['acc']);
$pw=htmlspecialchars($_POST['pw']);

$checkacc=$Checkacc->count(['acc'=>$acc,'pw'=>$pw]);

// dd($checkacc);

if ($checkacc) {
    $_SESSION['login']=$acc;
    to("../back.php");
}else{
    to("../index.php?do=login&error='帳號或密碼錯誤'");
}