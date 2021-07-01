<?php
if (isset($_SESSION['arrayError'])){
  $arrayErrors = $_SESSION['arrayError'];
  unset($_SESSION['arrayError']);
}
require_once(ROUTE_DIR."vue/inc/header.html.php"); 
?>
<img src="<?=WEB_ROUTE.'img/LOGO.png'  ?>" class="rounded-pill" id="lo" alt="">
<h3 id="se">Le plaisir de jouer</h3><br/><br/><br/>
<!-- <video autoplay muted loop id="myVideo">
  <source src="<?=WEB_ROUTE.'img/est.mp4'  ?>" type="video/mp4">
</video> -->
<!-- <div class="idiot"><h2 data-text="creative...">papa est au travail</h2></div>
 -->    <div class="container mt-5">
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
                    <input type="password" name="password" class="form-control">
                    <small>
                    <?php echo isset($arrayErrors['password']) ? $arrayErrors['password'] : ''; ?>
                    </small>

                </div>
                <a href="<?= WEB_ROUTE.'?controllers=security&vue=inscription'?>">S'inscrire en tant que joueur</a>
                <div class="col-md-2 offset-md-8">
                    <button type="submit" name="connexion" class="btn btn-danger text-white">Connexion</button>
                </div>
            </form>
          </div>
        </div>
        </div>
        </div>
      </div>
      <style>
       /*  @keyframes example {
          0%   {background-color: red; transform: translate(0, 0); width: 0;}
  /* 25%  {background-color: yellow;}
  50%  {background-color: blue;} */
  /* 100% {background-color: green; transform: translate(0, 100%); width: 100%;}
  
} */ 
/* h2{
  font-size: 14vw;
  -webkit-text-stroke: 0.3vw #383d52;
  text-transform: uppercase;
}
h2::before{
  content: attr(data-text);
  position: absolute;
  top: 0;
  left: 0;
  width: 0;
  height: 100%;
  color: #01fe87;
  -webkit-text-stroke: 0vw #383d52;
  border-right: solid 2px #01fe87;
  overflow: hidden;
  animation: animate 6s linear infinite;
} */
/* .idiot {
  width: 100%;
  height: 100px;
  background-color: red;
  animation-name: example;
  animation-duration: 4s;
  /* animation: linear infinite; */
/* }  */*/
      </style>
      <?php 
          require_once(ROUTE_DIR.'vue/inc/footer.html.php');
      ?>