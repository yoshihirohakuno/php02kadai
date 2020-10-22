<!-- 課題用u_view.php -->
<?php
// 1.GETでid値を取得
$id = $_GET["id"];


//2. DB接続します----ここをコピーして他のものでも使用できる-----
//接続実行とエラー----
try {
    //ID MAMP ='root'
    //Password:MAMP='root',XAMPP=''
    $pdo = new PDO('mysql:dbname=gs_book_db;charset=utf8;host=localhost','root','root');
  } catch (PDOException $e) {
    exit('データベースに接続できませんでした。'.$e->getMessage());
  }
  
//３．SELECT
$sql = "SELECT * FROM gs_bm_table WHERE id =:id" ;
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();


// 4.データ表示
$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //1データのみ抽出の場合は、whileループで取り出さない
  $row = $stmt->fetch();
   
}

?>


<!--------- ここからHTML部分 ----------->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>更新する</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ更新</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>※更新※本をブックマークするDB</legend>
     <label>TITLE：<input type="text" name="title" value="<?=$row["title"]?>"></label><br>
     <label>URL：<input type="text" name="url" value="<?=$row["url"]?>"></label><br>
     <label>COMMENT<textArea name="comment" rows="4" cols="40"><?=$row["comment"]?></textArea></label><br>
    <input type="hidden" name="id" value="<?=$row["id"]?>">
     <input type="submit" value="送信" id="button">

    </fieldset>
  </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>    
<script>
  document.getElementById("button").onclick = function(){

      alert('内容を変更しました！');
    
  };
  
</script> 
</body>
</html>