<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Jasamarga - HCS</title>
      
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
  <link rel="icon" href="<?php echo base_url(); ?>assets/logo.png" >

  
</head>

<body>
<div class="container">
  <div class="profile">
    <button class="profile__avatar" id="toggleProfile">
     <img src= "<?php echo base_url(); ?>assets/logo.png" alt="Avatar" /> 
    </button>
    <form action="<?php echo base_url('index.php/login/aksi_login'); ?>" method="post">
    <div class="profile__form">
      <div class="profile__fields">
        <div class="field">
          <input type="text" id="fieldUser" name="username" class="input" required pattern=.*\S.* />
          <label for="fieldUser" class="label">Username</label>
        </div>
        <div class="field">
          <input type="password" id="fieldPassword" name="password" class="input" required pattern=.*\S.* />
          <label for="fieldPassword" class="label">Password</label>
        </div>
        <button type="submit">Login</button>
      </div>
     </div>
     </form>
  </div>
</div>
  
    <script src="<?php echo base_url(); ?>assets/js/index.js"></script>

</body>
</html>
