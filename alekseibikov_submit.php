<?php
  
  session_start();
   if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
   }
   var_dump($_SESSION['counter']);

   $hide = "style='display:block;'";
   $show = "style='display:none;'";
   if ($_SESSION['counter'] >= 3) {
    $hide = "style='display:none;'";
    $show = "style='display:block;'";
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
      h1 {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
      }
      .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
      }
      }
    </style>
    <title>PHP_Movies_Project</title>
  </head>
  <body>

  <h1>I'M a DB for movies</h1>
  <div class="container"> <div class=" text-center mt-5 ">
  </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
            <button onclick="document.location='alekseibikov_output.php'" class="btn-info">Viev all records</button>
                <div class="card-body bg-light">
                  
                    <div class="container">
                      
                        <form id="form" role="form" action="alekseibikov_output.php" method="POST" <?php echo $hide ?>>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_title">Title *</label> <input id="form_title" name="movieTitle" class="form-control" placeholder="Please enter movie title *" required="required" data-error="Please specify the Title."> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_need">Rate the movie *</label> <select id="form_need" name="movieRating" class="form-control" required="required" data-error="Please specify your rating.">
                                                <option value="1">1 - Skip it</option>
                                                <option value="2">2 - Worth watching</option>
                                                <option value="3">3 - Must see</option>
                                                 </select> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="submit rating" id="submit"> </div>
                                </div>
                                
                            </div>
                        </form>
                        <div class="alert alert-warning" role="alert" <?php echo $show ?>>
                                  Max submissions reached. Try again later.
                                </div>
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
</div>
  <!-- <div class="container">
    <button onclick="document.location='alekseibikov_output.php'">Viev all records</button>
   <div class="container">
    <form action="alekseibikov_output.php" method="POST" <?php echo $hide ?>>
      <label for="movieTitle">Movie Title</label>
      <input type="text" id="movieTitle" name="movieTitle">
      <label for="movieRating">Movie Rating:</label>
      <select name="movieRating" id="movieRating" name="movieRating">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
      <button type="submit" name="submit" >Submit</button>
   </form>
   </div>
   </div>
    <div class="alert alert-warning" role="alert" <?php echo $show ?>>
      Max submissions reached. Try again later.
    </div> -->

   



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
 </body>
</html>