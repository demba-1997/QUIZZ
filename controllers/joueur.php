<?php
if(!est_joueur()) header("location:".WEB_ROUTE.'?controllers=security&vue=connexion');
if ($_SERVER['REQUEST_METHOD']== 'GET') {
    if(isset($_GET['vue'])){
        if ($_GET['vue']=='jeu') {
            require_once(ROUTE_DIR.'vue/joueur/joueur.html.php');
        }
    }else {
        require_once(ROUTE_DIR.'vue/security/connexion.html.php');
    }
}
?>