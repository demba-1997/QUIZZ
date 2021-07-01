<meta name="vueport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
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
                        <th scope="col">modif ou suppression</th>
                      </tr>
                      <?php foreach ($arrayUser as $user): ?>
                        <?php if ($user['role'] == 'ROLE_ADMIN') : ?>  
                    </thead>
                    <tbody>
                        <td><?=$user['prenom'].''.$user['nom']  ?></td>
                        <td><?=$user['role']  ?></td>
                        <td>
                          <a name="" id="" class="btn bns btn-success" href="<?= WEB_ROUTE .'?controllers=admin&vue=edit&id='.$user['id']?>" role="button">MODIFIER&nbsp;<i class="icon-edit"></i></a>
                          <a name="" id="" class="btn bt btn-danger" href="<?= WEB_ROUTE .'?controllers=admin&vue=delete&id='.$user['id']?>"  role="button">SUPPRIMER&nbsp;<i class="icon-trash"></i></a>
                        </td>
                      </tr>
                      <?php endif; ?>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                              </table>
                </div>
              </div>
    </div>
</div>
  <style>
    .bns{
      background-color: yellowgreen;
    }
       .manga{
          position: absolute;
          left: 49%;
          top: 42%;
          border-style: solid;
          border-color: red;
          background-color: lightgrey;
      }
      .btn{
        color: white;
      }
      .bt{
        background-color: red;
      }
      @media screen and (max-width: 641px) {
  .manga {
   /*  display: block; */
    float: left;
    margin-top: 115%;
    margin-left: -39%;
  }
  /* .bt */
}
  </style>