<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="reso\css\style.css">
      <!-- =====BOX ICONS===== -->
      <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    

    <title>Portfolio website complete</title>
  </head>
  <body>
    <!--===== HEADER =====-->

    <?php include "reso\include\header.php"; ?>

    <!-- <main class="onemain"> -->
      <!--===== HOME =====-->
     
      <?php include "reso\include\home.php"; ?>

      <!--===== ABOUT =====-->
      
     <!-- php include "reso\include\about.php";  -->

      <!--===== SKILLS =====-->
      
      <?php include "reso\include\skills.php"; ?>

      <!--===== WORK =====-->
      
      <?php include "reso\include\works.php"; ?>
      

       <!--===== knowledge =====-->
      
      <?php include "reso\include\knowledge.php" ?>

      <!--===== CONTACT =====-->
      
      <?php include "reso\include\contact.php"; ?>

   

    <!--===== FOOTER =====-->
    
    

    <footer class="footer">
    
    <p class="footerTitle">Chamith</p>
    <div class="footerSocial">
      <a
        href="https://www.facebook.com/profile.php?id=100008457066600"
        target="_blank"
        class="footerIcon"
        ><i class="bx bxl-facebook"></i
      ></a>
      <a
        href="https://www.instagram.com/chamith_s_kulathunga_/"
        target="_blank"
        class="footerIcon"
        ><i class="bx bxl-instagram"></i
      ></a>
      <a
        href="https://twitter.com/ChamithSadeepa"
        target="_blank"
        class="footerIcon"
        ><i class="bx bxl-twitter"></i
      ></a>
    </div>
    <p class="footerCopy">&#169; Chamith. All rigths reserved</p>

  </footer>


    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--===== MAIN JS =====-->
    <script src="reso\js\main.js"></script>
    <script src="reso\js\mode-toggle.js"></script>
  </body>
</html>
