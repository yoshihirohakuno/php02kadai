<!-- 課題用index.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ログインページ</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">ログイン</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="login_act.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ログイン</legend>
     <label>ID：<input type="text" name="lid" id="lid"></label><br>
     <label>PW：<input type="text" name="lpw"></label><br>
    
     <input type="submit" value="送信" id="button">

    </fieldset>
  </div>
</form>
<!-- Main[End] -->
    <ul>  
        <li><a href="select.php">あなたの積み本リスト</a></li>
    </ul>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>    
<script>
  document.getElementById("button").onclick = function(){
    if($('input[name="lid"]').val() == ""){
      alert('IDが入力されていません');
      return false;
    }else{
      alert('ログインが成功しました！');
    }
    
  };
  
</script>    
</body>
</html>