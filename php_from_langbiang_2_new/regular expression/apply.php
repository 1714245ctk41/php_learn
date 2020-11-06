<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>preg_match</title>
  <style type="text/css">
    input, button{
      padding:5px;
      font-size:20px;
      border-radius: 5px;
      border:1px solid gray;
    }
    input{
      width:350px;
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
  <?php 
  $subject = '1714245ctk41@gmail.com';
  $pattern_email = '#^[a-z0-9][a-z0-9_\.]{4,31}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}#';
    $flag = false;
  function checkEmail($value){
    $pattern = '#^[a-z0-9][a-z0-9_\.]{4,31}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}#';
    $flag = false;
    if (preg_match($pattern, $value)) {
      $flag = true;
    }
    return $flag;
  }
   $pattern_password = '#^(?=.*\d)(?=.*\W)(?=.*[A-Z]).{8,8}#';
  function checkpassword($value){
    $pattern = '#^(?=.*\d)(?=.*\W)(?=.*[A-Z]).{8,8}#';
    $flag = false;
    if (preg_match($pattern, $value)) {
      $flag = true;
    }
    return $flag;
  }
   $pattern_hostname = '#^(https?:\/\/)?(www\.)?[a-z0-9\-\@\:\%\.\_\+\~\#\=]{2,256}(\.[a-z]{2,10}){1,2}\b[-a-zA-Z0-9\-\@\:\%\.\_\+\~\#\=\/\/]*#';
  function checkhostname($value){
    $pattern = '#^(https?:\/\/)?(www\.)?[a-z0-9\-\@\:\%\.\_\+\~\#\=]{2,256}(\.[a-z]{2,10}){1,2}\b[-a-zA-Z0-9\-\@\:\%\.\_\+\~\#\=\/\/]*#';

    $flag = false;
    if (preg_match($pattern, $value)) {
      $flag =true;
    }
    return $flag;
  }
  $pattern_username = '#^[a-z_][a-z0-9_\.\s]{4,31}#';
  function checkUsername($value){
    $pattern = '#^[a-z_][a-z0-9_\.\s]{4,31}#';
    $flag = false;
    if (preg_match($pattern, $value)) {
      $flag = true;
    }
    return $flag;
  }
  $email = (isset($_POST['email']))? $_POST['email']: '';
  $password = (isset($_POST['password']))? $_POST['password']: '';
  $hostname = (isset($_POST['hostname']))? $_POST['hostname']: '';
  $username = (isset($_POST['username']))? $_POST['username']: '';
  if (trim($username) == '') {
    echo 'giá trị không được rỗng';
  }

  function createInput($label, $input, $name, $pattern){
    $xhtml = '';
      $xhtml .= '<td>
          <label>'.$label.' </label>
        </td>
        <td>'.$input.'</td>';
        if (preg_match($pattern, $GLOBALS[''.$name.''])) {
           $xhtml.= '<td>Hợp lệ</td>';
          }else {
            $xhtml.='<td>Không hợp lệ</td>';
          }
    return $xhtml;
  }
  ?>
  
  <form method="post" action="#" >
    <table cellpadding="20px">
      <tr>
        <th colspan="2"><h1>Nhập thông tin để kiểm tra</h1></th>
      </tr>
      <tr>
       <?php echo createInput('Nhập email để kiểm tra: ','<input type="text" name="email" autofocus value="'.$email.'">', 'email', $pattern_email ) ?>
      </tr>
      <tr>
        <?php echo createInput('Nhập tên người dùng', '<input type="text" name="username" value="'.$username.'">', 'username', $pattern_username) ?>
      </tr>
      <tr>
        
        <?php echo createInput('Nhập password(có ít nhất 1 chữ in hoa, 1 số,<br> 1 kí tự đặc biệt) de kiem tra:', '<input type="text" name="password" value="'.$password.'">', 'password', $pattern_password) ?>
      </tr>
      <tr>
       
        <?php echo createInput('Nhập tên miền để kiểm tra: ', '<input type="text" name="hostname" value="'.$hostname.'">', 'hostname', $pattern_hostname) ?>
      </tr>
      <tr>
        <td colspan="2" style="text-align:center"><button type="submit">Click to text</button>
        </td>
      </tr>
    </table>

  </form>
</body>
</html>