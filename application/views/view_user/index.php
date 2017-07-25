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
    <h1>VIEW USER</h1><br>

<?php foreach ($results as $user)
{ ?>
       <!-- Inicio do formulario -->
      <form form action="" method="POST">
        <label>User ID:</label> <input type="number" disabled value="<?php echo $user['id_user']?>"><br>
        <label>Name:</label> <input type="text" disabled value="<?php echo $user['name']?>"><br>
        <label>Birthday:</label> <input type="date" disabled value="<?php echo $user['birthday']?>"><br>
        <label>Biography:</label> <input type="text" disabled value="<?php echo $user['biography']?>"><br>
        <label>Cep:</label>
        <input name="cep" type="text" id="cep" size="10" maxlength="9" disabled value="<?php echo $user['cep']?>"/><br/>
        <label>Street:</label>
        <input name="street" type="text" id="rua" size="60" disabled value="<?php echo $user['street']?>"/>
        <label>Numero:</label>
        <input name="num" type="number" style="width: 5em"; disabled value="<?php echo $user['num']?>" /><br/>
        <label>Neigborhood:</label>
        <input name="neighborhood" type="text" id="bairro" disabled size="40" value="<?php echo $user['neighborhood']?>"/><br />
        <label>City:</label>
        <input name="city" type="text" id="cidade" size="40" disabled value="<?php echo $user['city']?>"/><br />
        <label>State:</label>
        <input name="state" type="text" id="uf" size="2" disabled value="<?php echo $user['state']?>"/><br />
        <label>Phone:</label> <input type="text" name="phone" disabled value="<?php echo $user['phone']?>"><br>
      </form>

<?php } ?>
      <br><button type="button" class="btn btn-primary">Back</button>

     <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <!-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>