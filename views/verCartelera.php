<?php  
require_once(VIEWS_PATH.'header.php');
Controllers\UsuarioController::verifUserLogueado();
$_SESSION['btnPeli'] = 0;
?>
<div class="container">
    <div class="d-flex justify-content-center">
    <button class="btn btn-warning btn-lg mt-3 mb-3" onclick="validarSala(<?=$id_cine?>,<?=$id_sala ?>)"><i class="fas fa-plus"></i>&nbsp;&nbsp;Agregar Funcion a Sala</button>
    </div>
    <section class="busqueda col-md-12">
        <form method="get" class="form-inline" action="<?php echo FRONT_ROOT?>Funcion/verFuncionOneSala">    
                
              <input type="hidden" name="id_cine" value="<?=$id_cine ?>">
              <label for="sala">Sala:</label>  
                <select class="form-control mb-2 mr-sm-2 mb-sm-0"  onchange="this.form.submit()" id="Selectsala" name="sala" >
                    <option value="">-- Seleccione una Sala --</option>
                    <?php
                        
                      foreach ($arrSalas as $key => $value) {
                        ?> <option value="<?=$value->getId_sala();?>" <?php if($value->getId_sala() == $id_sala){ echo 'selected="selected"'; } ?>><?= $value->getNombre_sala(); ?></option>
                            
                        <?php
                        
                    }

                    ?>
                </select>
        </form>
    </section>
    <section>
    <table id="tablaCines" class="table tableCines">
        <thead>
            <tr>
                <th>Titulo Pelicula</th>
                <th>Idioma</th>
                <th>duracion</th>
                <th>Fecha Proyección</th>
                <th>Horario Proyección</th>
                <th><i class="fa fa-pencil" aria-hidden="true"></i></th>
                <th><i class="fa fa-trash" aria-hidden="true"></i></th>
            </tr>
        </thead>
        <tbody>
            <?php
              
                foreach ($arrFunciones as $key => $value) {
                    $arrIdiomas = $this->buscarLenguajesXidPelicula($value->getId_pelicula());
                    $objectFuncion = $this->modificaFuncion($value->getId_funcion());
                    require(VIEWS_PATH.'modify_funcion.php');
                    ?>
                    <tr>
                        <td><?= $value->getTitulo_pelicula(); ?></td>
                        <td><?= $value->getIdioma(); ?></td>
                        <td><?= $value->getDuracion(); ?></td>
                        <td><?= date("d/m/Y", strtotime($value->getFecha())); ?></td>
                        <td><?= $value->getHora(); ?></td>
                        <td>
                          <button class="btn btn-primary" onclick="validarSalaModificar(<?=$value->getId_funcion()?>)" type="button" data-toggle="modal" ><i class="fa fa-pencil" aria-hidden="true"></i></button>  
                        </td>
                        <td>
                            <form method="post" onsubmit="return confirm('¿Seguro que quiere Eliminar esa funcion?');" name="formCine" action="<?php echo FRONT_ROOT ?>Funcion/ElimFuncion">
                            <input type="hidden" name="id_cine"  value="<?= $id_cine?>">
                            <input type="hidden" name="id_sala" value="<?= $id_sala?>"> 
                            <input type="hidden" name="id_funcion"  value=<?= $value->getId_funcion(); ?>> 
                                <button class="btn btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    
                    <?php
                    
                }
                
               
            ?>
        </tbody>
    </table>
    <section>        
</div>
<?php require_once(VIEWS_PATH.'footer.php');



    