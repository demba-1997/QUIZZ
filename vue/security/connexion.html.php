<?php
if (isset($_SESSION['arrayError'])){
  $arrayErrors = $_SESSION['arrayError'];
  unset($_SESSION['arrayError']);
}
require_once(ROUTE_DIR."vue/inc/header.html.php"); 
?>
<img src="<?=WEB_ROUTE.'img/LOGO.png'  ?>" class="rounded-pill" id="lo" alt="">
<h3 id="se">Le plaisir de jouer</h3><br/><br/><br/>
    <div class="container mt-5">
        <div class="row">
        <div class="col-md-8 col-sm-12 offset-md-2">
        <div class="card text-left w-100">
          <div class="card-body">
            <h4 class="rounded" id="si">login form</h4>
            </div>
           
            <form action="<?=WEB_ROUTE ?>" method="POST">
            <input type="hidden" name="controllers" value="security" />
        <input type="hidden" name="action" value="connexion" />
        <?php if (isset($arrayError['arrayConnexion'])) :?>
            <div class="alert alert-danger" role="alert">
            <strong><?php echo isset($arrayErrors['arrayConnexion']) ? $arrayErrors['arrayConnexion'] : ''; ?></strong>
              <?php endif;?>
                <div class="form-group">
                    <label for="">login</label>
                    <input type="text" name="login" class="form-control">
                    <small>
                    <?php echo isset($arrayErrors['login']) ? $arrayErrors['login'] : ''; ?>
                    </small>
                </div>
                <div class="form-group">
                    <label for="">MOT DE PASS</label>
                    <input type="text" name="password" class="form-control">
                    <small>
                    <?php echo isset($arrayErrors['password']) ? $arrayErrors['password'] : ''; ?>
                    </small>
                </div>
                <a href="<?= WEB_ROUTE.'?controllers=security&view=inscription'?>">S'inscrire en tant que joueur</a>
                <div class="col-md-2 offset-md-8">
                    <button type="submit" name="connexion" class="btn btn-danger text-white">Connexion</button>
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