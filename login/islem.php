<?php

require 'baglan.php';


if(isset($_POST['kayit'])){
   $username = $_POST['username'];
   $password = $_POST['password'];
   $password_again = @$_POST['password_again'];

   if(!$username){
      echo "Lütfen Kullanıcı Adınızı Giriniz";
   } elseif(!$password || ! $password_again){
      echo"Lütfen Şifrenizi Girin";
   } elseif($password  != $password_again){
      echo "Girdiğiniz Şifreler Birbiriyle Aynı Değil.";
   }
   else{
      //ver,tabanı kayıt işlemi
      $sorgu = $db->prepare('INSERT INTO users SET user_name = ?, user_password = ?');
      $ekle = $sorgu->execute(array($username,$password));
   
      if($ekle){
         echo "kayıt başarı ile gerçekleşti, yönlendiriliyorsunuz";
         header ('Refresh:2; index.php');
      }else{
         echo "bir hata oluştu, tekrar kontrol ediniz";
      }
   }
}

if(isset($_POST['giriş'])){
   $username = $_POST['username'];
   $password = $_POST['password'];

   if(!$username){
      echo "kullanıcı adını girin";
   }elseif(!$password){
      echo "şifrenizi girin";
   }else{
         $kullanici_sor = $db->prepare('SELECT * FROM users WHERE user_name = ? && user_password = ?');
         $kullanici_sor->execute([
            $username, $password
         ]);
         $say = $kullanici_sor->rowCount();
         if($say){
         $_SESSION['username']=$username;
            echo "başarıyla giriş yaptınız, yönlendiriliyorsunuz";
            header ('Refresh:2; index.php');
         } else{
            echo "bir hata oluştu tekrar kontrol ediniz";
         }
      }
   }
   


?>