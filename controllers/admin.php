<?php
if(!est_admin()) header("location:".WEB_ROUTE.'?controllers=security&view=connexion');
if ($_SERVER['REQUEST_METHOD']== 'GET') {
    if(isset($_GET['view'])){
        if ($_GET['view']=='liste.question') {
            require_once(ROUTE_DIR.'vue/admin/liste.question.html.php');
        }elseif ($_GET['view'] == 'create.question') {
            require(ROUTE_DIR.'vue/admin/create.question.html.php'); 
        }
    }else {
        require_once(ROUTE_DIR.'vue/security/connexion.html.php');
    }
}
?>