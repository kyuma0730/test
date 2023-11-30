<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];

// メール本文を作成
$mailText = '名前：'.$fullname."\r\n"
           .'メールアドレス：'.$email."\r\n"
           .'お問い合わせ内容：'.$message."\r\n";

mail('yuma.073025@gmail.com', 'お問い合わせ', $mailText);
?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/pc/style__pc.css">
    <link rel="stylesheet" href="css/responsive/style__res.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>サンプルページ</title>
  </head>
  <body>
      <h1>送信完了</h1>
      <p>お問い合わせありがとうございます。<br>
      送信が完了しました。</p>
      <div class="button">
        <a href="index.html">トップに戻る</a>
      </div>
  </body>
</html>
