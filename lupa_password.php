<?php
    // session start();
    if(!empty($_SESSION)){ }else{ session_start(); }
?>
<!doctype html>
<html>
    <head>
        <title>Lupa Kata Sandi</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </head>
    <body style="background:#586df5;">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                <br/><br/>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Lupa Kata Sandi</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="proses/lupa_password.php" id="formlupa">
                            <div class="form-group">
                                <label>Nama Pengguna</label>
                                <input name="user" class="form-control" placeholder="nama pengguna" type="text" required="required" autocomplete="off">
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" class="form-control" placeholder="email" type="email" required="required" autocomplete="off">
                            </div> <!-- form-group// --> 
                            <div class="form-group">
                                <button type="submit" name="proses_lupa" class="btn btn-primary btn-block"> Kirim  </button>
                            </div> <!-- form-group// -->                                                           
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
            </div>
        </div> 
    </div>
    </body>
</html>