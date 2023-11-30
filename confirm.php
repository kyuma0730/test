<?php
// $_POST[]によって受け取ったデータを変数に代入
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];
?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="reset.css">
    <!-- <link rel="stylesheet" href="css/style__contact.scss">
    <link rel="stylesheet" href="css/style__contact.min.css"> -->

    <link rel="stylesheet" href="css/pc/style__contact__pc.scss">
    <link rel="stylesheet" href="css/pc/style__contact__pc.min.css">
    <link rel="stylesheet" href="css/responsive/style__contact__res.scss">
    <link rel="stylesheet" href="css/responsive/style__contact__res.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>サンプルページ</title>
  </head>
  <body>

    <div class="contact confirm">
      <h1>確認画面</h1>
      <div class="form">
        <form action="send.php" method="post">
          <!-- $_POST[]の部分を変数に書き換える -->
          <div class="form__content">
            <p>名前</p>
            <input type="text" name="fullname" value="<?php echo $fullname; ?>" disabled>
          </div>
          <div class="form__content">
            <p>メールアドレス</p>
            <input type="email" name="email" value="<?php echo $email; ?>" disabled>
          </div>

          <div class="form__textarea">
            <p>お問い合わせ内容</p>
            <textarea name="message" rows="8" cols="80" disabled><?php echo $message; ?></textarea>
          </div>

          <!-- 入力画面から受け取ったデータを格納 -->
          <input type="hidden" name="fullname" value="<?php echo $fullname; ?>">
          <input type="hidden" name="email" value="<?php echo $email; ?>">
          <input type="hidden" name="message" value="<?php echo $message; ?>">

          <div class="submit">
            <input type="submit" value="送信" class="submit__content">
          </div>
        </form>
      </div>
    </div>

    <footer>
      <p>© UMA All rights reserved.</p>
    </footer>

  </body>
</html>
