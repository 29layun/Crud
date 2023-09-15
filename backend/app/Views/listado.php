<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Crud de code</title>
  </head>
  <body>
    <div class="container">
       
        
        <form method="post" action="<?php echo base_url().'/crear'?>">
            <div class="container">
                <div class="row justify-content-center m-auto shadow bg-whiter mt-3 py-3 col-md-6">
                <h1 class="text-center text-primary font-monospace">To-do list using </h1>
                <div class="col-8">
                    <input type="text" name="tarea" id="tarea" class="form-control">
                </div>
                    <input type="hidden" name="estado" id="estado" value="Pendiente" class="form-control">
                <div class="col-2"> 
                    <button class="btn btn-primary" type="submit">Guardar</button>
                </div>
                </div>
            </div>
        </form>
        

        
        <hr>
        <div class="row">
            <div class="col-md-6 bg-white mt-6 m-auto py-3">
            <h1 class="text-center text-primary font-monospace">Lista de Tareas</h1>
                <div class="table table-responsive ">
                    <table class="table table-light ">
                        <tr>
                          <th>#</th>
                          <th>Tarea</th>
                          <th>Estado</th>
                          <th>Acciones</th>
                          <th></th>
                        </tr>
                      <?php foreach($datos as $key ): ?>
                        <tr>
                          <td><?php echo $key->id ?></td>
                          <td><?php echo $key->tarea ?></td>
                          <td><?php echo $key->estado ?></td>
                          <?php if ($key->estado == 'Finalizado'){ ?>
                            <td></td>
                            <td><a href="<?php echo base_url().'eliminar/'.$key->id ?>" 
                            class="btn btn-danger btn-sm">Elliminar</a></td>
                          <?php }else {?>
                          <td><a href="<?php echo base_url().'obtener/'.$key->id ?>" 
                          class="btn btn-warning btn-sm">Editar</a></td>
                           <td><a href="<?php echo base_url().'eliminar/'.$key->id ?>" 
                          class="btn btn-danger btn-sm">Elliminar</a></td>
                          <?php }?>
                        </tr>
                      <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
      let mensaje = '<?php echo $mensaje ?>';
      if (mensaje == '1'){
        swal(':D','Agregado con exito!','success');
      }else if(mensaje == '0'){ 
        swal(':(','Fallo al agregar!','error');
      }else if(mensaje == '2'){
        swal(':D','Actualizado correctamente!','success');
      }else if(mensaje == '3'){ 
        swal(':(','Fallo al actualizar!','error');
      }else if(mensaje == '4'){
        swal(':D','Eliminado correctamente!','success');
      }else if(mensaje == '5'){ 
        swal(':(','Fallo al eliminar!','error');
      }else if(mensaje == '6'){
        swal(':D','Finalizado correctamente!','success');
      }else if(mensaje == '7'){ 
        swal(':(','Fallo al Finalizar!','error');
      }
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>