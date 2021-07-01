<?php //require_once(ROUTE_DIR . "vue/inc/header.html.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-md-4"><?php require_once(ROUTE_DIR ."vue/inc/menu.html.php"); ?></div>
        <div class="col-md-8">
        <?php   $json= file_get_contents(ROUTE_DIR.'data/question.json');
                         $arrayQuestion= json_decode($json ,true);

                         $nombrePage=0;
                         $page=0;
                         $suivant=2;
                         $precedent=0;

                        if (!isset($_GET['page'])) {
                          $page=1;
                          $_SESSION['questionlist'] = $arrayquestion;
                          $nombrePage=nombrePageTotal(  $_SESSION['questionlist'],1);
                          $listquest=get_element_to_play(  $_SESSION['questlist'],$page,1);
 
                          
                        }
                        if (isset($_GET['page'])) {
                          $page=$_GET['page'];
                          $suivant=$page+1;
                          $precedent=$page-1;
                          $nombrePage=nombrePageTotal(  $_SESSION['questionlist'],1);
                          $listquest=get_element_to_play(  $_SESSION['questionlist'],$page,1);
 
                        }

                  ?>
            
            <table class="table">
                 <tbody>
              
           
                      <?php $j=0;
                      foreach($listquest as $value): ?> 
                        
<tr>
  <td><?php echo $value['question'];?><br>
  <?php if($value['typereponse']=='checkbox'):?>
    <!-- <?php for ($i=0; $i < $value['nbreponse']; $i++):?> -->
      <input type="checkbox" name="check<?=$i?>" value="choix<?=$i?>"> <?php echo($value["reponse".$i]);?><br> 
     <!--  <?php endfor ?> -->
          
    <?php endif ?>
    <?php if($question['type']=='text'):?>
<!-- <?php for ($i=0; $i < $value['nbreponse']; $i++):?> -->
       <input type="text" name="text"><br>
   <!--  <?php endfor ?> -->      
    <?php endif ?>
    <?php if($question['typereponse']=='radio'):?>
    <!-- <?php for ($i=0; $i < $value['nbreponse']; $i++):?> -->
 <input type="radio" name="radio<?=$j?>" value="choix<?=$i?>"><?php echo($value["reponse".$i]);?> <br>            
    <!--  <?php endfor ?> -->
    <?php endif ?>
  </td>
  </td>
</tr>
<?php $j++; 
endforeach ?>
              </tbody>
            </table> 
            <div id="pagination">
            <a name="" id="" class="btn btn-primary" href="<?=WEB_ROUTE.'?controllers=joueur&views=jeux&page='.$precedent?>" role="button">precedent</a>
             <a name="" id="" class="btn btn-primary" href="<?=WEB_ROUTE.'?controllers=joueur&views=jeux&page='.$suivant?>" role="button">suivant</a>            
        </div>
       </div>
        <div class="sene col-md-4">
        <?php   $json= file_get_contents(ROUTE_DIR.'data/user.data.json');
                         $data= json_decode($json ,true);?>
                         <?php for ($i=0; $i <count($data)-1 ; $i++):?>
                          <?php for ($j=0; $j <count($data) ; $j++):?>
                             <?php if ($data[$i]['score']>=$data[$j]['score']):?>
                                <?php $svg=$data[$i]['score'];  
                                       $data[$i]['score']=$data[$j]['score'];
                                       $data[$j]['score']=$svg
                                ?>
                              <?php endif ?>
                         <?php endfor ?>
                         <?php endfor ?> 
                         <h5  class="lil">the best player of the game</h5>
                         <table class="table">
                            <tbody>
                            <?php for ($i=0; $i <5; $i++):?>
                            <tr>
                             <td><?php echo $data[$i]['nom'] ?></td>
                             <td><?php echo $data[$i]['prenom'] ?></td>
                             <td><?php echo $data[$i]['score'] ?></td>
                              </tr>
                              <?php endfor ?>
                            </tbody>
                            </table>
                         
    </div>
        
    </div>
</div>
<?php //require_once(ROUTE_DIR . "vue/inc/header.html.php"); ?>