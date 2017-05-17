<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="display-1 text-center">TOJ分數查詢工具</h1>
            <p class="text-center">by lys0829</p>

            <center>
            <?php if(!$query){?>
                <form class="form-inline" action="index.php" method="get">
                  <div class="form-group">
                    <input name="uid" type="text" class="form-control" placeholder="uid">
                  </div>
                  <button type="submit" class="btn btn-primary">查詢</button>
                </form>
            <?php }else{?>
              <p><?=$ac_times?></p>
            <?php }?>
            </center>
          </div>
        </div>
      </div>
  </body>
</html>