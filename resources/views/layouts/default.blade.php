<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
  <style>
    body {
      background-color:indigo;
      display:flex;
      justify-content:center;
      align-items:center;
    }
    .TodoList {
      background-color:white;
      border-radius:10px;
      display:flex;
      flex-direction:column;
      padding:10px 30px;
      width:600px;
    }
    p {
      font-size:25px;
      font-weight:bold;
      margin:5px;
    }
  </style>
</head>
<body>
  <div class="TodoList">
    <p>Todo List</p>
    @yield('form')
  </div>
</body>
</html>