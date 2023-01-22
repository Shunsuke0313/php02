<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>読書記録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">読書履歴へ</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend class="book_record">読書記録</legend>
     <label>書籍名:<input type="text" name="book_name"></label><br>
     <label>書籍URL:<input type="text" name="book_url"></label><br>
     <label>書評:<textArea name="book_comment" rows="4" cols="40"></textArea></label><br>
     <label>読み始めた日:<input type="date" name="s_date"></label><br>
     <label>読み終えた日:<input type="date" name="f_date"></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
