<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>App</title>
  <style>
    body {
      background-color: #330099;
    }
    .content {
      width: 60%;
      margin: 100px auto;
      background-color: white;
      border-radius: 20px;
      padding: 20px;
    }
  </style>
</head>
<body>
  <div class="content">
    @yield('content')
  </div>
</body>
</html>