<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style type="text/css">
    input, button{
      padding:5px;
      font-size:20px;
      border-radius: 5px;
      border:1px solid gray;
      letter-spacing: 1px;
    }
    button{
      padding:5px 10px;
    }
    input:focus, button:focus{
      outline:none;
    }
  </style>
</head>
<body>
  <fieldset>
    <legend>filter_validate</legend>
    <form action="filter.php" method="POST" name="mainForm" >
      Email:<input type="text" name="email" placeholder="Nhập email" autofocus>
      <p>Age:<input type="text" name="age"></p>
      <p>Name:<input type="text" name="name"></p>
      <p><input type="submit" name="" value="Submit"></p>
    </form>
  </fieldset>
</body>
</html>