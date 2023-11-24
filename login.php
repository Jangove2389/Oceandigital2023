<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    </head>
    <body>
    <form action="insertar.php "id="formulario" method="POST">
      <div class="container text-center">

          <div class="row align-items-start" >
                <div class="col">
                  <input type="text" name="nomape" class="form-control" placeholder="Nombre y Apellido" aria-label="First name">
                </div>
              <div class="col">
                <input type="text" name ="email"class="form-control" placeholder="Email" aria-label="Last name">
              </div>
              <div class="col">
                <input type="text" name="celular"class="form-control" placeholder="N Celular" aria-label="Last name">
              </div>
              <div class="form-floating">
                <textarea class="form-control"  name="Comentario" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
  
              </div>
              <button id="btningresar type="button submit" class="btn btn-success">Success</button>

          </div> 
      </div>
    </form>
    <script text="text/javascript">
      // var liga="http://localhost/1/login.php";

      // $("#btningresar").on('click',function(){
      //   var url = liga +"insertar.php";
      //   $.ajax({
      //     type:'POST',
      //     url: 'url',
      //     data:$("#formulario").serialize(),
      //     success:function(data){
      //       alert(data);
      //     }

      //   });
      //   return false;
      // });

    </script>


    </body>
</html>