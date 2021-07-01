<meta name="vueport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-md-4"><?php require_once(ROUTE_DIR ."vue/inc/menu.html.php"); ?>
        </div>
        <div class="col-md-8">
        <?php 
          $json = file_get_contents(ROUTE_DIR.'data/question.json');
          $arrayQuestion = json_decode($json, true);  
          $nombrePage = 0;
          $page = 0;
          $suivant = 2;
          $precedent = 0;
          
          if (!isset($_GET['page'])) {
            $page = 1;
            $_SESSION['questionlist'] = $arrayQuestion;
            $nombrePage = nombrePageTotal($_SESSION['questionlist'] , 3);
            $listquestions = get_element_to_play($_SESSION['questionlist'] ,$page , 3);
          }

          if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $suivant = $page+1;
            $precedent = $page-1;
            $nombrePage = nombrePageTotal($_SESSION['questionlist'] , 3);
            $listquestions = get_element_to_play($_SESSION['questionlist'] ,$page , 3);
          }
         ?>
        <div class="manga">
        <tr>
            <th scope="col">Question</th>
            <th scope="col">modif ou suppression</th><br/><br/>
        </tr>
        <?php $j = 0; foreach ($listquestions as $question): ?>
                       <tr> <td><?php echo ($question['question']) ; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a name="" id="" class="btn bns btn-success" href="<?= WEB_ROUTE .'?controllers=admin&vue=edit&id='.$question['question']?>" role="button">MODIFIER&nbsp;<i class="icon-edit"></i></a>
                          <a name="" id="" class="btn bt btn-danger" href="<?= WEB_ROUTE .'?controllers=admin&vue=delete&id='.$question['question']?>"  role="button">SUPPRIMER&nbsp;<i class="icon-trash"></i></a><br/></td></tr><br/>  
                  <?php if ($question['type']=='radio'): ?>
                    <?php foreach($question['reponse'] as $reponse) :?>
                      <?php for($i=0; $i<$reponse['bon_reponse']; $i++) :?>
                      <input type="radio" name="bon_reponse<?= $j ?>" value="choix<?=$i ?>"><?=$reponse['bon_reponse'.$i] ?><br>
                      <?php endfor ?>
                    <?php endforeach ?>
              <?php endif ?>
                <?php if ($question['type']=='checkbox'): ?>
                
                <?php foreach($question['reponse'] as $reponse) :?>
                  <?php for($i=0; $i<$reponse['bon_reponse']; $i++) :?>
                    <input type="checkbox" name="bon_reponse<?= $j ?> " value="choix<?=$i ?>"><?=$reponse['bon_reponse'.$i] ?><br>
                    <?php endfor ?>
                <?php endforeach ?>
        <?php endif ?>
        <?php foreach($question['reponse'] as $reponse) :?>
        <?php if ($question['type']=='text'): ?>
          <?php for($i=0; $i<$reponse['bon_reponse']; $i++) :?>
                <input type="text" name="bon_reponse<?= $j ?>" value="choix<?=$i ?>"><?=$reponse['bon_reponse'.$i] ?></td><br>
                <?php endfor ?>
        <?php endif ?>
        <?php endforeach ?>
        </tr>
                      <?php $j++; ?>
                      <?php endforeach; ?>
                    <div>
                      <a name="" id="" class="btn bns btn-success" href="<?= WEB_ROUTE .'?controllers=admin&vue=liste.question&page='.$precedent?>" role="button">PRECEDENT&nbsp;<i class="icon-edit"></i></a>
                          <a name="" id="" class="btn bt btn-danger" href="<?= WEB_ROUTE .'?controllers=admin&vue=liste.question&page='.$suivant?>"  role="button">SUIVANT&nbsp;<i class="icon-trash"></i></a>
                          </div>
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
  }/* 
  .pt{
    display:
  } */
}
</style>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>