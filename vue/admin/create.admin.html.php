<?php

if (isset($_SESSION['arrayError'])){
  $arrayErrors = $_SESSION['arrayError'];
  unset($_SESSION['arrayError']);
}

/* if (est_admin()) {
    require_once(ROUTE_DIR.'vue/inc/menu.html.php');
  } */
?>

<div class="container">
    <div class="row">
    
        <div class="col-md-4"><?php require_once(ROUTE_DIR . "vue/inc/menu.html.php"); ?>
        </div>
        <div class="col-md-8">
        <div class="manga">
        <form enctype="multipart/form-data" action="<?=WEB_ROUTE ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="controllers" value="admin" />
                <input type="hidden" name="action" value="<?=!isset($users['id']) ? 'inscription' : 'edit'; ?>" />
                <input type="hidden" name="id" value="<?=isset($users['id']) ? $users['id'] : ''; ?>" />
                <?php if (isset($arrayErrors['arrayConnexion'])) :?>
            <div class="alert alert-danger" role="alert">
            <?php echo isset($arrayErrors['arrayConnexion']) ? $arrayErrors['arrayConnexion'] : ''; ?>
              <strong>danger</strong>
              <?php endif;?>
                <div class="form-group">
                <div>
                <label for="">NOM</label><br/>
            <input type="text" name="nom" value="<?=isset($user['nom']) ? $user['nom'] : ''; ?>"><br/><br/>
            <small class="text">
            <?php echo isset($arrayErrors['nom']) ? $arrayErrors['nom'] : ''; ?>
            </small>
            </div>
            <div>
            <label for="">PRENOM</label><br/>
            <input type="text" name="prenom" value="<?=isset($user['prenom']) ? $user['prenom'] : ''; ?>"><br/><br/>
            <small class="text-danger"><?php echo isset($arrayErrors['prenom']) ? $arrayErrors['prenom'] : ''; ?></small></div>
            <div>
            <label for="">login</label><br/>
            <input type="text" name="login" value="<?=isset($user['login']) ? $user['login'] : ''; ?>"><br/><br/>
            <small class="text">
            <?php echo isset($arrayErrors['login']) ? $arrayErrors['login'] : ''; ?>
            </small></div>
            <div>
            <label for="">Mot de passe</label><br/>
            <input type="password" name="password" value="<?=isset($user['password']) ? $user['password'] : ''; ?>"><br/><br/>
            <small class="text">
            <?php echo isset($arrayErrors['password']) ? $arrayErrors['password'] : ''; ?></small>
            </div>
            <div>
            <label for="">Confirmer le mot de passe</label><br/>
            <input type="password" name="confirmpassword" value=""><br/><br/>
            <small class="text">
            <?php echo isset($arrayErrors['confirmpassword']) ? $arrayErrors['confirmpassword'] : ''; ?>
            </small>
            </div>
            <div>
            <label for="">Avatar</label>
            <input type="file" name="avatar" value="" /></div><br/><br/>
            <small class="text">
            <?php echo isset($arrayErrors['avatar']) ? $arrayErrors['avatar'] : ''; ?>
            </small><br/><br/>
            <a href="<?=WEB_ROUTE.'?controllers=security&vue=connexion' ?>">Se connecter</a>
                </div>
                <div class="">
                    <button type="submit" name="inscription" class=" btn btn-danger text-white"><?=!isset($user['id']) ? 'inscription' : 'modifier'; ?></button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<style>
    .btn {
        background-color: red;
        color: white;
    }
    .text{
        color: red;
    }
     .manga{
        position: absolute;
        left: 49%;
        top: 42%;
        border-style: solid;
        border-color: red;
        background-color: lightgrey;
    }
    @media screen and (max-width: 641px) {
  .manga {
   /*  display: block; */
    float: left;
    margin-top: 115%;
    margin-left: -39%;
  }
}
</style>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>