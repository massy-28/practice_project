<!-- header部分にあたるコードを書いてください。 -->

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA=Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Mincho&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/header.css">
  <script src="./js/jquery-3.7.0.min.js"></script>
  <script src="./js/header.js"></script>
  <script src="./js/order.js"></script>
  <?php
    $page = basename($_SERVER['PHP_SELF']); // 現在のページファイル名を取得
      // index.phpの場合はindex.cssを読み込む
      if ($page === 'index.php') {
        echo '<link rel="stylesheet" href="./css/index.css">';
      }
      // contact.phpの場合はcontact.cssを読み込む
      elseif ($page === 'contact.php') {
        echo '<link rel="stylesheet" href="./css/contact.css">';
      }
      // company.phpの場合はcompany.cssを読み込む
      elseif ($page === 'company.php') {
        echo '<link rel="stylesheet" href="./css/company.css">';
      }
      // order.phpの場合はorder.cssを読み込む
      elseif ($page === 'order.php') {
        echo '<link rel="stylesheet" href="./css/order.css">';
      }
      // service.phpの場合はservice.cssを読み込む
      elseif ($page === 'service.php') {
        echo '<link rel="stylesheet" href="./css/service.css">';
      }
      // service_detail.phpの場合はservice_detail.cssを読み込む
      elseif ($page === 'service_detail.php') {
        echo '<link rel="stylesheet" href="./css/service_detail.css">';
      }
    ?>
  <title>株式会社浩文社</title>
</head>
<body>
</body>
</html>


