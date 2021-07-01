<!-- <?php
/* if(isset($_GET["action"]) && $_GET["action"]=="suppr")
{
$sql="DELETE FROM registre_client WHERE $id=$_GET[$id]"; */
/* mysql_query($sql) or die(mysql_error()); */
/* } */
?> -->
<div class="container mt-5">
        <div class="row">
        <div class="col-md-8 col-sm-12 offset-md-2">
        <div class="card text-left w-100">
          <div class="card-body">
            <h4 class="card-title text-center text-primary">Formulaire</h4>
            <form action="" method="POST">
                <a name="" id="" class="btn btn-primary" href="<?=WEB_ROUTE .'?controllers=admin&vue=confirme&id='.$use['id'] ?>" role="button">non</a>
                <a name="" id="" class="btn btn-danger" href="<?=WEB_ROUTE .'?controllers=admin&vue=confirme&id='.$use['id'].'&action=delete' ?>" role="button">oui</a>
            </form>
          </div>
        </div>
        </div>
        </div>
      </div>
      <style>
          /* .btn{
              border: 1px solid red;
              background-color: red;
              color: white;
              width: 1%;
          } */
      </style>