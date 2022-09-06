<!DOCTYPE html>
<html>
<head>
  <title>Giriş Yap</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <div class="login">
    <div class="login-screen">
      <div class="app-title">
        <h1>Giriş Yap</h1>
      </div>
   <form action="islem.php" method="post">
      <div class="login-lorf">
        <div class="control-group">
          <input type="text" name="username" class="login-field" placeholder="Kullanıcı Adı" id="login-name">
          <label class="login-field-icon fui-user" for="login-pass"></label>
        </div>
        <div class="control-group">
            <input type="password" name="password" class="login-field" placeholder="Şifre" id="login-pass">
            <label class="login-field-icon fui-user" for="login-pass"></label>
        </div>
     </div>
     <button href="index.php" name="giriş" class="btn btn-primary btn-large btn-block">Giriş Yap </button>
     </form>  
     <a href="kayit.php"><button class="btn btn-primary btn-large btn-block">Kayıt Ol </button></a>
     </div>  
    </div>
    
</body>
</html>