<?php

// 1.POSTでid,title,url,commentを取得
$id      = $_POST["id"];
$title   = $_POST["title"];
$url     = $_POST["url"];
$comment = $_POST["comment"];

//2. DB接続します----ここをコピーして他のものでも使用できる-----
//接続実行とエラー----
try {
    $dsn = getenv('DB_DSN') ?: 'mysql:dbname=gs_book_db;charset=utf8;host=localhost';
    $db_user = getenv('DB_USER');
    $db_password = getenv('DB_PASSWORD');
    if ($db_user === false || $db_password === false) {
        exit('DB credentials are not configured.');
    }
    $pdo = new PDO($dsn, $db_user, $db_password);
  } catch (PDOException $e) {
    exit('データベースに接続できませんでした。'.$e->getMessage());
  }

//３．UPDATE
$sql = 'UPDATE gs_bm_table SET title=:title, url=:url, comment=:comment  WHERE id =:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':title',$title,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':url',$url,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':comment',$comment,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':id',$id,PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

// 4.データ登録処理後
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //select.phpへリダイレクト
  header("Location: select.php");
  exit;
   
}







?>
