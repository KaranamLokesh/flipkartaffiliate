<?php 
session_start();

?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
  </head>
  <body>
    <div class="s130">
      <form>
        <div class="inner-form">
          <div class="input-field first-wrap">
            <div class="svg-wrapper">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
              </svg>
            </div>
           <form method="get" action="result.php" enctype="multipart/form-data">
            <input id="search" type="text" name="search" placeholder="What are you looking for?" />
          </div>
          <div class="input-field second-wrap">
            <input type="submit" class="btn-search" onclick="func()">
            
          </div>
        </form>
          </div>
        </div>
        <span class="info">ex. Mobiles,Accessories,Gadgets</span>
      </form>
    </div>
    <script type="text/javascript">
      function func(){
        var search=document.getElementById("search").value;
        // alert(search);
        var url ="result.php?search=" +search;
        window.open(url);
      }
    </script>
    <script src="js/extention/choices.js"></script>
    

  </body>
</html>
