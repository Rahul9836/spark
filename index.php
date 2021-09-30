<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Basic Banking System</title>
  </head>
  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class=" intro my-1" style="background-image :linear-gradient(#81f9bc,#00495f)">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>🅾🅽🅻🅸🅽🅴</h3>
                  <h1>🆂🅿🅰🆁🅺 🅱🅰🅽🅺</h1>
                  <p></p>
                  <h4 style="color : white;font-size: 20px;">ʙᴜɪʟᴅɪɴɢ ᴀ ʙᴇᴛᴛᴇʀ ᴡᴏʀʟᴅ ᴛʜʀᴏᴜɢʜ ʙᴀɴᴋɪɴɢ</h4>
                  <!-- <img src="img/flag.png" class="img-fluid"> -->
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <!-- <img src="img/bpng.png" class="img-fluid pt-2"> -->
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center" style="background-image : linear-gradient(#b3bfbd,black);">
                  <div class=" col-md act">
                    <img src="img/u.png" class="a img-fluid">
                    <br>
                    <a href="createuser.php"><button style="background-color :green ;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/tran.jpg" class="imaa img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #3e056d;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/his.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #f13f09;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center py-3">
        <p>Made with ❤️ by <b>Rahul Banerjee</b></p>
  <a href="" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="" class="github"><i class="bx bxl-github"></i></a>
        <a href="" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </h3>   
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>