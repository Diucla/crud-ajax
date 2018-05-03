<?php include('_server/server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CRUD from MySQL database with ajax</title>

  <link rel="stylesheet" type="text/css" href="_css/bootstrap.min.css">
  <link rel="stylesheet" href="_css/styles.css">


</head>
<body>


  <?php include('_views/navbar.php'); ?>

  <div class="col-md-6 offset-md-3">

      <?php echo $comments; ?>

      <form>
          <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Type Name">
          </div>
          <div class="form-group">
              <label for="comment">Comment</label>
              <textarea class="form-control" id="comment" rows="3"></textarea>
          </div>

          <button type="button" class="btn btn-primary" id="submit_btn">POST</button>
          <button type="button" class="btn btn-success"id="update_btn" style="display: none;">UPDATE</button>
      </form>
  </div>

<!---->
<!--<div class="list-group">-->
<!--  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">-->
<!--    <div class="d-flex w-100 justify-content-between">-->
<!--      <h5 class="mb-1">List group item heading</h5>-->
<!--      <small>3 days ago</small>-->
<!--    </div>-->
<!--    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>-->
<!--    <small>Donec id elit non mi porta.</small>-->
<!--  </a>-->
<!--</div>-->
<!--  -->

  <!-- Add JQuery -->

  <script src="_js/jquery.min.js"></script>
  <script src="_js/bootstrap.min.js"></script>
  <script src="_js/scripts.js"></script>
</body>
</html>
