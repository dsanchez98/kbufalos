<div class="sidebar" data-color="purple" data-background-color="white" data-image="<?= \Yii::getAlias('@web/img/sidebar-1.jpg'); ?>">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="<?=\yii\helpers\Url::to(['/dashboard']);?>" class="simple-text logo-normal">
          KairishAPP
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          
          <li class="nav-item ">
            <!-- <a class="nav-link" data-toggle="collapse" href="#yii2Example" aria-expanded="true">
              <i><img style="width:25px" src="<?= \Yii::getAlias('@web/img/yii-logo.svg'); ?>"></i>
              <p>Yii2 Examples
                <b class="caret"></b>
              </p>
            </a> -->
            <div class="collapse show" id="yii2Example">
              <ul class="nav">
              <?php if(Yii::$app->user->identity->rol=='ADM'){?>
                <li class="nav-item">
                  <a class="nav-link" href="<?=\yii\helpers\Url::to(['/users']);?>">
                    <span class="sidebar-mini"> UM </span>
                    <span class="sidebar-normal"> Administración de usuarios </span>
                  </a>
                </li>
              <?php }?>
              <?php if(Yii::$app->user->identity->rol=='ADM'){?>
                <li class="nav-item">
                  <a class="nav-link" href="<?=\yii\helpers\Url::to(['/permisos']);?>">
                    <span class="sidebar-mini"> UM </span>
                    <span class="sidebar-normal"> Administrar los permisos. </span>
                  </a>
                </li>
              <?php }?>
                <li class="nav-item">
                  <a class="nav-link" href="<?=\yii\helpers\Url::to(['/site/profile']);?>">
                  <i class="material-icons">account_box</i>
                    <p class="sidebar-normal"> Editar perfil </p>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['/tables']);?>">
              <i class="material-icons">volume_up</i>
              <p>Tu Kairish Me Suena</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['/premios']);?>">
              <i class="material-icons">weekend</i>
              <p>Premios Kairish Bufalos</p>
            </a>
          </li>
         
          <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="">Cuenta</p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?=\yii\helpers\Url::to(['/site/logout']);?>">Log out</a>
                </div>
              </li>



              
          <!-- <li class="nav-item ">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['/typography']);?>">
              <i class="material-icons">library_books</i>
              <p>Typography</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['/icons']);?>">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['/map']);?>">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['/notifications']);?>">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['/rtl']);?>">
              <i class="material-icons">language</i>
              <p>RTL Support</p>
            </a>
          </li> -->
        </ul>
      </div>
    </div>