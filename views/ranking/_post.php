<?php use app\controllers\PermisosController;?>

                    <tr>
                      <td>
                        <?=
                        $model['first_name'].' ' .$model['last_name']?>
                      </td>
                      <td>
                       <?php echo $model['t_ganados'];
                    ?> 
                      </td>
                      <td class="text-primary">
                       <?=$model['puntos']?>
                      </td>
                    </tr>
                   