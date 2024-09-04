<?php
  date_default_timezone_set('Asia/Manila');
  include 'heralddbh.inc.php';
  include 'heraldcomments.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Herald Howler</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400;0,600;0,700;0,800;1,600&display=swap" />
    <link rel="stylesheet" href="styles/howler.css" />
  </head>
  <body>
    <div class="main-container">
      <div class="heading">
        <div class="frame">
          <a href="../index.php" class="home">
            <div class="home-1"><span class="home-2">HOME</span></div>
            <div class="ion-home"></div>
          </a>
          <div class="logo"></div>
          <a href="../others/editorialboard.html" class="editorial-board">
            <span class="editorial-board-3">EDITORIAL BOARD</span>
          </a>
          <div class="group">
            <a href="https://www.facebook.com/upangherald" class="vector"></a>
            <a href="../others/contactUS.html" class="vector-4"></a>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=sh.journ@gmail.com&subject=Subject%20Line" class="vector-5"></a>
          </div>
        </div>
      </div>
      



      <div class="frame-6">
        <div class="herald-howler-7">
          <span class="herald">HERALD</span><span class="nbsp"> </span
          ><span class="howler">HOWLER</span>
        </div>
        <button class="frame-8">
          <div class="opinion-student">
            <span class="opinion-student-9">“Bilang </span>
            <span class="opinion-student-a"
              >estudyante, ano ang opinyon mo sa pagtaas ng drainage system na
              ginagawa ngayon sa Arellano Street na nagdulot sa pagsara ng main
              gate ng ating unibersidad?”</span>
          </div>
        </button>

        <?php
        $cid = $_POST['cid'];
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

          echo "<form method='POST' action='".editComments($conn)."'>
            <input type='hidden' name='cid' value='".$cid."'>
            <input type='hidden' name='uid' value='".$uid."'>
            <input type='hidden' name='date' value='".$date."'>
            <textarea name='message'>".$message."</textarea><br>
            <button type='submit' name='commentSubmit'>Edit</button>
          </form>";
           
        ?>


      </div>

      


      <div class="footer">
        <div class="logo-28">
          <div class="logo-29"></div>
          <div class="logo-2a"></div>
          <span class="official-publication"
            >THE OFFICIAL PUBLICATION OF PHINMA UNIVERSITY OF PANGASINAN</span
          >
          <div class="icons">
            <a href="https://www.facebook.com/upangherald" class="vector-2b"></a>
            <a href="contactUS.html" class="vector-2c"></a>
            <a href="https://issuu.com/thestudentsheraldofficial?fbclid=IwAR039y8iqXxhC-Kgz-VOSO4JzdL-1Ne8zl2dpXTzWHIkEx3NfVih0aFP7-s" class="vector-2d"></a>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=sh.journ@gmail.com&subject=Subject%20Line" class="vector-2e"></a>
          </div>
        </div>
        <div class="text-2f">
          <div class="flex-row-ba">
            <span class="company">COMPANY</span
            ><span class="categories">CATEGORIES</span>
          </div>
          <div class="flex-row-bdd">
            <a href="../index.php" class="home-30">HOME</a>
            <a href="../sections/SECTIONSnews.html" class="news">NEWS</a>
          </div>
          <a href="../sections/SECTIONSfeature.html" class="feature">FEATURE</a
          ><a href="../others/contactUS.html" class="contact-us">CONTACT US</a
          ><a href="../sections/SECTIONSeditorial.html" class="editorial">EDITORIAL</a
          ><a href="../others/editorialboard.html" class="editorial-board-31">EDITORIAL BOARD</a
          ><a href="../sections/SECTIONSliterary.html" class="literary">LITERARY</a
          ><a href="../sections/SECTIONSliterary.html" class="devcom">DEVCOM</a
          ><a href="../sections/SECTIONSgraphics.html" class="entertainment">ENTERTAINMENT</a
          ><a href="../sections/SECTIONSgraphics.html" class="graphics">GRAPHICS</a
          ><a href="../sections/SECTIONSsports.html" class="sports">SPORTS</a>
        </div>
      </div>
    </div>
  </body>
</html>
