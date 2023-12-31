<?php   
  foreach ($datos as $key ): 
      $id = $key->id;
      $tarea = $key->tarea;
      $estado = $key->estado;
  endforeach
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  
    <title>Actualizar tarea</title>
  </head>
  <body>
    <div class="container">
        <form method="post" action="<?php echo base_url().'/actualizar'?>">
            <div class="row justify-content-center m-auto shadow bg-whiter mt-3 py-3 col-md-6">
              <h1 class="text-center text-primary font-monospace">Update</h1>
            <div class="col-8">
              <input type="text" id="id" name="id" hidden="" value="<?php echo $id?>">
              <input type="text" name="tarea" id="tarea" class="form-control" value="<?php echo $tarea ?>">
            </div>
            <div class="col-8">
              <button class="btn btn-warning" type="submit">Guardar</button>
            </div>
        </form>
        <form method="post" action="<?php echo base_url().'/terminar'?>">
            <input type="text" id="id" name="id" hidden="" value="<?php echo $id?>">
            <button class="btn btn-warning" type="submit">Finalizar</button>
        </form>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
   
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->


  </body>
</html>