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
    <div class="container">
        <div class="row">

            <div class="col-md-2">
            
            </div>

            <div class="col-md-8">
                    <div class="row">
            	       <h1 style="text-align:center;">Welcome</h1><br>
                    </div>

                    <div class="row form-group col-md12">

                    <form action="Message" method="POST">

                        <div class="form-group">
                            <label for="exampleSelect1">Select User</label>
                            <select class="form-control" id="exampleSelect1">
                                <?php 
                                    foreach($results as $user)
                                    { ?>
                                        <option><?php echo $user['name'] ?></option>
                            <?php } ?> 
                                
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">Text Message</label>
                            <textarea class="form-control" id="exampleTextarea" rows="4" cols="100"></textarea>
                          </div>
                          <button type="submit" class="btn btn-primary" name="send-message">Send Message</button>

                    </form>

                    </div>

                    <h1 style="text-align:center;">Contact List</h1>
                	<table class="table">

                    <thead class="thead-inverse">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>PHONE</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($results as $user)
                            { ?>
                                <tr>
                                    <td><?php echo $user['id_user'] ?></td>
                                    <td><?php echo $user['name'] ?></td>
                                    <td><?php echo $user['phone'] ?></td>

                                    <td>
                                        <form action="viewUser" method="POST">
                                            <input type="number" name="id_user" hidden value="<?php echo $user['id_user'] ?>">
                                            <button type="submit" name="view" class="btn btn-info">VIEW</button>
                                        </form>
                                    </td>

                                    <td>
                                        <form action="updateUser" method="POST">
                                            <input type="number" name="id_user" hidden value="<?php echo $user['id_user'] ?>">
                                            <button type="submit" name="edit" class="btn btn-primary">EDIT</button>
                                        </form>
                                    </td>

                                    <td>
                                        <form action="home" method="POST">
                                            <input type="number" name="id_user" hidden value="<?php echo $user['id_user'] ?>">
                                            <button type="submit" name="delete" class="btn btn-danger">DISSABLE</button>
                                        </form>
                                    </td>

                                </tr>
                      <?php } ?>
                    </tbody>
                  </table>
             </div>

             <div class="col-md-2">
            
            </div>
        </div>
    </div>
	 <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>