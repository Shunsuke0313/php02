<?php
// 1. POSTデータ取得
$book_name = $_POST["book_name"];
$book_url = $_POST["book_url"];
$book_comment = $_POST["book_comment"];
$s_date = $_POST["s_date"];
$f_date = $_POST["f_date"];


// 2. DB接続します
require_once('funcs.php');
$pdo = db_conn();


// ３．SQL文を用意(データ登録：INSERT)
$stmt = $pdo->prepare(
  "INSERT INTO gs_bm_table(id,book_name,book_url,book_comment,s_date,f_date, indate )
  VALUES(NULL, :book_name,:book_url,:book_comment,:s_date,:f_date, sysdate())"
);

// 4. バインド変数を用意
$stmt->bindValue(':book_name', $book_name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':book_url', $book_url, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':book_comment', $book_comment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':s_date', $s_date, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':f_date', $f_date, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)

// 5. 実行
$status = $stmt->execute();

// 6．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("ErrorMassage:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location:index.php"); 
}
?>
