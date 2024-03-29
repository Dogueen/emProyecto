<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login</title>
      <link rel="stylesheet" href="<?php echo base_url('backend/src/styles.login.css'); ?>">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="login-form">
         <div class="text">
            LOGIN
         </div>
         <form>
            <div class="field">
               <div class="fas fa-envelope"></div>
               <input type="text" placeholder="ID de Usuario">
            </div>
            <div class="field">
               <div class="fas fa-lock"></div>
               <input type="password" placeholder="Password">
            </div>
            <button>LOGIN</button>
         </form>
      </div>
   </body>
</html>