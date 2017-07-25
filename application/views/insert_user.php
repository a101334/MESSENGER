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

    <!-- Adicionando JQuery -->
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Adicionando Javascript -->
    <script type="text/javascript">

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>

  </head>
<body>
  <div class="container">

  <div class="row">

    <div class="col-md-2">
  
    </div>

    <div class="col-md-8" >
        	<h1 style="text-align:center;"><strong>INSERT USER</strong></h1><br>

            <!-- Inicio do formulario -->
              <form form action="InsertUser" method="POST">

                <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label"><strong>NAME</strong></label>
                  <div class="col-9">
                    <input class="form-control" type="text" name="name">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="example-date-input" class="col-3 col-form-label"><strong>BIRTHDAY</strong></label>
                   
                  <div class="col-9">
                    <input class="form-control" type="date" name="birthday">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label"><strong>BIOGRAPHY</strong></label>
                  <div class="col-9">
                    <input class="form-control" type="text" name="biography">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label"><strong>CEP</strong></label>
                  <div class="col-9">
                    <input class="form-control"  name="cep" type="text" id="cep" value="" size="10" maxlength="8">
                  </div>
                </div>

                <div class="form-group row">

                  <label for="example-text-input" class="col-3 col-form-label"><strong>STREET</strong></label>
                  <div class="col-6">
                    <input class="form-control"  name="street" type="text" id="rua" size="60" >
                  </div>

                  <label for="example-text-input" class="col-2 col-form-label"><strong>NUMBER</strong></label>
                  <div class="col-1">
                    <input class="form-control"  name="num" type="number" style="width: 5em"; >
                  </div>

                </div>

                <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label"><strong>NEIGHBORHOOD</strong></label>
                  <div class="col-9">                                                
                    <input class="form-control"  name="neighborhood" type="text" id="bairro" size="40" >
                  </div>
                </div>

                <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label"><strong>CITY</strong></label>
                  <div class="col-9">
                    <input class="form-control"  name="city" type="text" id="cidade" size="40">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label"><strong>STATE</strong></label>
                  <div class="col-9">
                    <input class="form-control"  name="state" type="text" id="uf" size="2" >
                  </div>
                </div>

                <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label"><strong>PHONE:</strong></label>
                  <div class="col-9">
                    <input class="form-control"  type="text" name="phone">
                  </div>
                </div>

                <button type="submit" name="submit" class="btn btn-success" value="REGISTER">REGISTER</button>
              </form>
                    
        </div>
    
        <div class="col-md-2">
          
        </div>

      </div>
</div>


	 <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <!-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>