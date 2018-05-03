<?php //include('_server/server.php'); ?>

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

      <form>
          <div class="form-group">
              <label for="description">Description</label>
              <input type="text" class="form-control" id="description" placeholder="Type Descrition" >
          </div>

          <div class="form-group">
              <label for="price">Price</label>
              <input type="number" class="form-control" id="price" placeholder="Type price" min="0" max="500">
          </div>
<!---->
<!--          <div class="form-group">-->
<!--              <label for="comment">Description</label>-->
<!--              <textarea class="form-control" id="comment" rows="3"></textarea>-->
<!--          </div>-->

          <button type="button" class="btn btn-success" id="submit_btn">SAVE</button>
<!--          <button type="button" class="btn btn-success"id="update_btn" style="display: none;">UPDATE</button>-->
      </form>
  </div>

  <div class="row">

      <div class="col-md-6 offset-md-3">
          <h4 class="mt-5">Produts</h4>
          <table class="table table-sm" id="products-table">
              <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">Description</th>
                  <th scope="col">Price</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
              </tr>
              <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
              </tr>
              <tr>
                  <th scope="row">3</th>
                  <td colspan="2">Larry the Bird</td>

              </tr>
              </tbody>
          </table>
      </div>
  </div>




  <!-- Add JQuery -->

  <script src="_js/jquery.min.js"></script>
  <script src="_js/bootstrap.min.js"></script>
  <script src="_js/scripts.js"></script>
</body>
</html>
