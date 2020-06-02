<!DOCTYPE html>
<html lang="en" dir ="ltr">
    <head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-
         scale=1.0">
         <title>Login</title>
          <!--load bootstrap css-->
          <link rel="stylesheet" href="assets/css/bootstrap.min.css">
          <!--load jquery and bootstrap js-->
          <script src="assets/js/jquery.min.js"></script>
          <script src="assets/js/popper.min.js"></script>
          <script src="assets/js/bootstrap.js"></script>
          <script type="text/javascript"> </script>
         


    </head>
    <style>
    body{
        background : url('gradasi.jpg')
    }
    </style>
    <body>
        <form method ="post" action = "filelogin.php">
        <div class ="container">
            <div class ="row">
            <div class="card col-5" style="margin-left: 337px; margin-top: 150px;" >
            <div class = "card-header bg-warning text-black">login</div>
            email :
            <input type="email" name="username" class="form-control">
            password :
            <input type = "password" name="password" class="form-control">
            <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-success">
                        login
                    </button>
</div>
</div>
</div>
</div>
</body>
</html>

