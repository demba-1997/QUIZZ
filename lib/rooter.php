<?php
if (isset($_REQUEST['controllers'])) {
    if ($_REQUEST['controllers'] == 'security') {
        require_once(ROUTE_DIR.'controllers/security.php');
    }elseif($_REQUEST['controllers'] == 'admin') {
        require_once(ROUTE_DIR.'controllers/admin.php');
    }elseif($_REQUEST['controllers'] == 'joueur') {
        require_once(ROUTE_DIR.'controllers/joueur.php');
    }else {
        require_once(ROUTE_DIR.'vue/security/connexion.html.php');
    }
}else {
    require_once(ROUTE_DIR.'vue/security/connexion.html.php');
}
?>