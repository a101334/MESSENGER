<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

  </head>
<body>

<?php foreach ($results as $user)
{ ?>
      <div class="container">

  <div class="row">

    <div class="col-md-2">
  
    </div>

    <div class="col-md-8" >
          <h1 style="text-align:center;"><strong>VIEW USER INFORMATION</strong></h1><br>

            <!-- Inicio do formulario -->
              <form form action="home" method="POST">

                <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label"><strong>ID USER</strong></label>
                  <div class="col-9">
                    <input class="form-control" type="text" name="name" disabled value="<?php echo $user['id_user']?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label"><strong>NAME</strong></label>
                  <div class="col-9">
                    <input class="form-control" type="text" name="name" disabled value="<?php echo $user['name']?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="example-date-input" class="col-3 col-form-label"><strong>BIRTHDAY</strong></label>
                   
                  <div class="col-9">
                    <input class="form-control" type="date" name="birthday" disabled value="<?php echo $user['birthday']?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label"><strong>BIOGRAPHY</strong></label>
                  <div class="col-9">
                    <input class="form-control" type="text" name="biography" disabled value="<?php echo $user['biography']?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label"><strong>CEP</strong></label>
                  <div class="col-9">
                    <input class="form-control"  disabled value="<?php echo $user['cep']?>">
                  </div>
                </div>

                <div class="form-group row">

                  <label for="example-text-input" class="col-3 col-form-label"><strong>STREET</strong></label>
                  <div class="col-6">
                    <input class="form-control"  name="street" type="text" id="rua" size="60" disabled value="<?php echo $user['street']?>" >
                  </div>

                  <label for="example-text-input" class="col-2 col-form-label"><strong>NUMBER</strong></label>
                  <div class="col-1">
                    <input class="form-control"  name="num" type="number" style="width: 5em"; disabled value="<?php echo $user['num']?>">
                  </div>

                </div>

                <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label"><strong>NEIGHBORHOOD</strong></label>
                  <div class="col-9">                                                
                    <input class="form-control"  name="neighborhood" type="text" id="bairro" size="40" disabled value="<?php echo $user['neighborhood']?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label"><strong>CITY</strong></label>
                  <div class="col-9">
                    <input class="form-control"  name="city" type="text" id="cidade" size="40" disabled value="<?php echo $user['city']?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label"><strong>STATE</strong></label>
                  <div class="col-9">
                    <input class="form-control"  name="state" type="text" id="uf" size="2" disabled value="<?php echo $user['state']?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label"><strong>PHONE:</strong></label>
                  <div class="col-9">
                    <input class="form-control"  type="text" name="phone" disabled value="<?php echo $user['phone']?>">
                  </div>
                </div>
              </form>
        </div>
    
        <div class="col-md-2">
          
        </div>

      </div>
</div>

<?php } ?>

     <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <!-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>