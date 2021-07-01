<?php
if(!est_admin()) header("location:".WEB_ROUTE.'?controllers=security&vue=connexion');
if ($_SERVER['REQUEST_METHOD']== 'GET') {
    if(isset($_GET['vue'])){
        if ($_GET['vue']=='liste.question') {
            require_once(ROUTE_DIR.'vue/admin/liste.question.html.php');
        }elseif ($_GET['vue'] == 'create.question') {
            require(ROUTE_DIR.'vue/admin/create.question.html.php'); 
        }elseif ($_GET['vue'] == 'liste.joueur') {
            require(ROUTE_DIR.'vue/admin/list.joueur.html.php'); 
        }elseif ($_GET['vue'] == 'create.admin') {
            require(ROUTE_DIR.'vue/admin/create.admin.html.php'); 
        }elseif ($_GET['vue'] == 'tableau.bord') {
            require(ROUTE_DIR.'vue/admin/tableau.bord.html.php'); 
        }elseif ($_GET['vue'] == 'liste.admin') {
            require(ROUTE_DIR.'vue/admin/liste.admin.html.php'); 
        }elseif ($_GET['vue'] == 'edit') {
            $id = $_GET['id'];
            $user = find_user_by_id($id);
            require(ROUTE_DIR.'vue/admin/create.admin.html.php'); 
        }elseif ($_GET['vue'] == 'delete') {
            $id = $_GET['id'];
            $user = find_user_by_id($id);
            require_once(ROUTE_DIR.'vue/admin/confirmation.html.php'); 
        }elseif ($_GET['vue'] == 'confirme') {
            if(isset($_GET['id'])){
                $id = $_GET['id'];
               $use = suppression_user($_GET['id']);
               /* delet($_GET['id']); */
                require_once(ROUTE_DIR.'vue/admin/liste.admin.html.php'); 
            }
           /*  $user = find_user_by_id($id); */
            
        }
    }/* else {
        require_once(ROUTE_DIR.'vue/security/connexion.html.php');
    } */
}elseif ($_SERVER['REQUEST_METHOD']== 'POST'){
    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'create.question') {
            if (isset($_POST['btn_submit'])) {
            unset($_POST['controllers']);
            unset($_POST['action']);
            question($_POST);
            header("location:".WEB_ROUTE.'?controllers=admin&vue=create.question');
        }elseif(isset($_POST['btn_plus'])) {
            $nbr_reps = $_POST['nbr_reps'];
            $_SESSION['nbr_reps'] = $nbr_reps;
            $typrep = $_POST['typrep'];
            $_SESSION['typrep'] = $typrep;
           /*  $arrayQuestion = $_SESSION['questionlist']  ; */
            header("location:".WEB_ROUTE.'?controllers=admin&vue=create.question');
        }
    }elseif ($_POST['action']== 'inscription'){
            unset($_POST['controllers']);
            unset($_POST['connexion']);
            unset($_POST['confirmpassword']);
            unset($_POST['inscription']);
            unset($_POST['action']);
            inscription_admin($_POST, $_FILES);
            header("location:".WEB_ROUTE.'?controllers=admin&vue=create.admin');
        }
        }
}
    

function inscription_admin(array $data): void {
    $arrayError = [];
    extract($data);
    validation_login($login, 'login', $arrayError);
    validation_password($password, 'password', $arrayError);
    validation_champ($prenom, 'prenom', $arrayError);
    validation_champ($nom, 'nom', $arrayError);
    // if ($password!= $confirmpassword) {
    //     $arrayError['confirmpassword'] = 'la confirmation password est obligatoire';
    // }
    // if (login_exists($login)) {
    //     $arrayError['login'] = 'ce est déjà login enregistrer';
    //     $_SESSION['arrayError'] = $arrayError;
    //     header("location:".WEB_ROUTE.'?controllers=admin&vue=liste.question');
    // }
    // $extentions = ['jpg','png','jpeg','gif'];
    // if(empty($files['avatar']['name'])){
    //     $arrayError['avatar'] = 'le champ est obligatoire';
    // }elseif ($files['avatar']['size'] > 70000) {
    //     $arrayError['avatarsize'] = 'la taille est grande';
    // }
    if (est_vide($prenom , $nom)) {
        $_SESSION['arrayError'] = $arrayError;
        header("location:".WEB_ROUTE.'?controllers=admin&vue=liste.question');
    }
    if (form_valid($arrayError)) {
        // if (upload_image($_FILES)){
        //     $data['avatar'] = $files['avatar']['name']; 
        // }

        if (est_admin()) {
            $data['role'] = 'ROLE_ADMIN';
           }
           add_user($data);
            header("location:".WEB_ROUTE.'?controllers=admin&vue=liste.question');
            
    }else{
        $_SESSION['arrayError']= $arrayError;
        header("location:".WEB_ROUTE.'?controllers=admin&vue=create.admin');
    }
}

function question(array $data): void {
    $arrayError = [];
    extract($data);
    valid_input($question, 'question', $arrayError);
    valid_point($point, 'nbre_reps', $arrayError);
    if (form_valid($arrayError)) {
        add_question($data);
        header("location:".WEB_ROUTE.'?controllers=admin&vue=liste.question');
    }else{
        $_SESSION['arrayError']= $arrayError;
        header("location:".WEB_ROUTE.'?controllers=admin&vue=create.question');
    }
}
function delet(array $data): void {
    $id= $_SESSION['id'];
    $ok = suppression_user($id);
    if ($ok){
        unset($data[$id]);
        header("location:".WEB_ROUTE.'?controllers=admin&vue=liste.admin');
    }
}
?>