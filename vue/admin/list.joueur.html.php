<div class="container">
    <div class="row">
        <div class="col-md-4"><?php require_once(ROUTE_DIR ."vue/inc/menu.html.php"); ?>
        </div>
        <?php 
          $json = file_get_contents(ROUTE_DIR.'data/user.data.json');
          $arrayUser = json_decode($json, true);   
         ?>
      <div class="col-md-8">
            <div class="manga">
               
              <table class="tabl">
              <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">NOM & prenom</th>
                        <th scope="col">ROLE</th>
                      </tr>
                      <?php foreach ($arrayUser as $user): ?>
                        <?php if ($user['role'] == 'ROLE_JOUEUR') : ?>  
                    </thead>
                    <tbody>
                        <td><?=$user['prenom'].''.$user['nom']  ?></td>
                        <td><?=$user['role']  ?></td>
                       <!--  <td>
                          <a name="" id="" class="btn bns btn-success" href="<?//= //WEB_ROUTE .'?controllers=admin&vue=create.admin&id='.$user['id']?>" role="button">MODIFIER&nbsp;<i class="icon-edit"></i></a>
                          <a name="" id="" class="btn bt btn-danger" href="<?//= //WEB_ROUTE .'controllers=admin&vue=create.admin'?>" role="button">SUPPRIMER&nbsp;<i class="icon-trash"></i></a>
                        </td> -->
                      </tr>
                      <?php endif; ?>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </table>
                    <nav aria-label="Page navigation example">
                      <ul class="pagination">
                        <li class="page-item display-flex"><a class="page-link" href="#">précédent</a></li>
                        <li class="page-item"><a class="page-link" href="#">suivant</a></li>
                      </ul>
                    </nav>
                </div>
              </div>
    </div>
</div>
<style>
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