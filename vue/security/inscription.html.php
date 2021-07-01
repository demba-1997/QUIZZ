<?php

if (isset($_SESSION['arrayError'])){
  $arrayErrors = $_SESSION['arrayError'];
  unset($_SESSION['arrayError']);
}
require_once(ROUTE_DIR."vue/inc/header.html.php");
/* if (est_admin()) {
    require_once(ROUTE_DIR.'vue/inc/menu.html.php');
  } */
?>
<img src="<?=WEB_ROUTE.'img/LOGO.png'  ?>" class="rounded-pill" id="lo" alt="">
<h3 id="se">Le plaisir de jouer</h3><br/><br/><br/>
<video autoplay muted loop id="myVideo">
  <source src="<?=WEB_ROUTE.'img/est.mp4'  ?>" type="video/mp4">
</video>
  <div class="container mt-5">
        <div class="row">
        <div class="col-md-8 col-sm-12 offset-md-2">
        <div class="card text-left w-100">
          <div class="card-body">          
              <h4 class="" id="si">login form</h4>
            
            <form enctype="multipart/form-data" action="<?=WEB_ROUTE ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="controllers" value="security" />
                <input type="hidden" name="action" value="inscription" />
                <?php if (isset($arrayErrors['arrayConnexion'])) :?>
            <div class="alert alert-danger" role="alert">
            <?php echo isset($arrayErrors['arrayConnexion']) ? $arrayErrors['arrayConnexion'] : ''; ?>
              <strong>danger</strong>
              <?php endif;?>
                <div class="form-group">
                <div>
                <label for="">NOM</label><br/>
            <input type="text" name="nom" value=""><br/><br/>
            <small>
            <?php echo isset($arrayErrors['nom']) ? $arrayErrors['nom'] : ''; ?>
            </small>
            </div>
            <div>
            <label for="">PRENOM</label><br/>
            <input type="text" name="prenom" value=""><br/><br/>
            <small><?php echo isset($arrayErrors['prenom']) ? $arrayErrors['prenom'] : ''; ?></small></div>
            <div>
            <label for="">login</label><br/>
            <input type="text" name="login" value=""><br/><br/>
            <small>
            <?php echo isset($arrayErrors['login']) ? $arrayErrors['login'] : ''; ?>
            </small></div>
            <div>
            <label for="">Mot de passe</label><br/>
            <input type="password" name="password" value=""><br/><br/>
            <small>
            <?php echo isset($arrayErrors['password']) ? $arrayErrors['password'] : ''; ?></small>
            </div>
            <div>
            <label for="">Confirmer le mot de passe</label><br/>
            <input type="password" name="confirmpassword" value=""><br/><br/>
            <small>
            <?php echo isset($arrayErrors['confirmpassword']) ? $arrayErrors['confirmpassword'] : ''; ?>
            </small>
            </div>
            <div>
            <label for="">Avatar</label>
            <input type="file" name="avatar" value="" /></div><br/><br/>
            <a href="<?=WEB_ROUTE.'?controllers=security&vue=connexion' ?>">Se connecter</a>
                </div>
                <div class="">
                    <button type="submit" name="inscription" class=" btn btn-primary">inscription</button>
                </div>
            </form>
          </div>
        </div>
        </div>
        </div>
      </div>
      <?php 
          require_once(ROUTE_DIR.'vue/inc/footer.html.php');
      ?>