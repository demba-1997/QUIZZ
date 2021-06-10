<?php
if(!est_joueur()) header("location:".WEB_ROUTE.'?controllers=security&view=connexion');
if ($_SERVER['REQUEST_METHOD']== 'GET') {
    if(isset($_GET['view'])){
        if ($_GET['view']=='jeu') {
            require_once(ROUTE_DIR.'vue/joueur/joueur.html.php');
        }
    }else {
        require_once(ROUTE_DIR.'vue/security/connexion.html.php');
    }
}
?>