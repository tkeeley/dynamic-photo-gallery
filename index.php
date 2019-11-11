<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Image Loop</title>

    <style>
      .wrap {
        overflow: hidden;
        margin: 10px;
      }
      .box {
        float: left;
        position: relative;
        width: 20%;
        padding-bottom: 20%;
      }
      .boxInner {
        position: absolute;
        left: 10px;
        right: 10px;
        top: 10px;
        bottom: 10px;
        overflow: hidden;
      }
      .boxInner img {
        width: 100%;
      }

      /* Responsive */
      @media only screen and (max-width: 480px) {
        /* Smartphone view: 1 tile */
        .box {
          width: 100%;
          padding-bottom: 100%;
        }
      }
      @media only screen and (max-width: 650px) and (min-width: 481px) {
        /* Tablet view: 2 tiles */
        .box {
          width: 100%;
          padding-bottom: 50%;
          /* height: auto; */
        }
      }
      @media only screen and (max-width: 1050px) and (min-width: 651px) {
        /* Small desktop / ipad view: 3 tiles */
        .box {
          width: 50%;
          padding-bottom: 50%;
        }
      }
      @media only screen and (max-width: 1290px) and (min-width: 1051px) {
        /* Medium desktop: 4 tiles */
        .box {
          width: 25%;
          padding-bottom: 25%;
        }
      }
    </style>
  </head>
  <body>
    <section class="no-touch">
      <div class="wrap" id="holder">
        <!-- Images appear in here -->
      </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- Add images from images folder -->

    <!-- Count the Number of files in images folder and index -3 for hidden or system files -->
    <!-- Change "images" to your image directory -->
    <?php $count = count(scandir('images'))-3;?> 
      
    <script>
      
     //Sets up the Div structure HTML
      $(document).ready(function() {
        $(".wrap div").each(function(i) {
          $(this).append(
            "<div class='box'><div class='boxInner'><img src='images/" +
              ++i +
              ".png' /></div></div>"
          );
        });
      });

      // Create divs for images
      var n = "<?php echo $count ?>"; //number of divs to create using the $count var
      for (var i = 0; i < n; i++) {
        var div = document.createElement("div");
        document.getElementById("holder").appendChild(div);
      }
    </script>
  </body>
</html>
