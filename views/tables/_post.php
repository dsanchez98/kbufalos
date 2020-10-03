<?php use app\controllers\PermisosController;?>

                    <tr>
                      <td>
                        <?=$model->first_name .' '. $model->last_name?>
                      </td>
                      <td>
                       <?php $cosa =PermisosController::comprobarcancion();
                        if($cosa)
                       echo $model->cancion;
                       else
                       echo "No disponible hasta el día del concurso";?> 
                      </td>
                      <td class="text-primary">
                       <?=$model->puntos?>
                      </td>
                    </tr>
                   