<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['vue'])) {
        if ($_GET['vue']== 'connexion') {
            require(ROUTE_DIR.'vue/security/connexion.html.php');
        }elseif ($_GET['vue']== 'inscription') {
            require(ROUTE_DIR.'vue/security/inscription.html.php');
        }elseif ($_GET['vue']== 'deconnexion') {
            deconnexion();
            require(ROUTE_DIR.'vue/security/connexion.html.php');
        }
    }else {
        require(ROUTE_DIR.'vue/security/connexion.html.php');
    }
}elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'connexion') {
            connexion($_POST['login'],$_POST['password']);
    }elseif ($_POST['action'] == 'inscription') {
        unset($_POST['controllers']);
        unset($_POST['connexion']);
        unset($_POST['confirmpassword']);
        unset($_POST['inscription']);
        unset($_POST['action']);
       inscription($_POST);
    }
}
}

function connexion(string $login , string $password): void {
    $arrayError = [];
    validation_login($login, 'login', $arrayError);
    validation_password($password, 'password', $arrayError);
    if (form_valid($arrayError)) {
        $user= find_login_password($login, $password);
        if (count($user) == 0) {
            $arrayError['arrayConnexion'] = 'login or password is incorrect';
            $_SESSION['arrayError'] = $arrayError;
            header("location:".WEB_ROUTE.'?controllers=security&vue=connexion');

        }else{
            $_SESSION['userConnect'] = $user;
            if ($user['role']=='ROLE_ADMIN'){
                header("location:".WEB_ROUTE.'?controllers=admin&vue=liste.question');
            }elseif ($user['role']=='ROLE_JOUEUR'){
                header("location:".WEB_ROUTE.'?controllers=joueur&vue=jeu');
            }
        }
    }else{
        $_SESSION['arrayError']= $arrayError;
        header("location:".WEB_ROUTE.'?controllers=security&vue=connexion');
    }
    
}
function inscription(array $data): void {
    $arrayError = [];
    extract($data);
    validation_login($login, 'login', $arrayError);
    validation_password($password, 'password', $arrayError);
    validation_champ($prenom, 'prenom', $arrayError);
    validation_champ($nom, 'nom', $arrayError);
    // if ($password!= $confirmpassword) {
    //     $arrayError['confirmpassword'] = 'la confirmation password est obligatoire';
    // }
    if (est_vide($prenom , $nom)) {
        $_SESSION['arrayError'] = $arrayError;
        header("location:".WEB_ROUTE.'?controllers=security&vue=inscription');
    }
    if (form_valid($arrayError)) {

        if (est_admin()) {
            $data['role'] = 'ROLE_JOUEUR';
           }else {
                $data['role'] = 'ROLE_JOUEUR';
           }
        //    if (login_exists($login)) {
        //     $arrayError['login'] = 'ce est login enregistrer';
        //     $_SESSION['arrayError'] = $arrayError;
        //     header("location:".WEB_ROUTE.'?controllers=security&vue=inscription');
        // }
        // //$extentions = ['jpg','png','jpeg','gif'];
        // if(empty($files['avatar']['name'])){
        //     $arrayError['avatar'] = 'le champ est obligatoire';
        // }elseif ($files['avatar']['size'] > 70000) {
        //     $arrayError['avatarsize'] = 'la taille est grande';
        // }

        // if (upload_image($_FILES)){
        //     $data['avatar'] = $files['avatar']['name']; 
        // }
           add_user($data);
            header("location:".WEB_ROUTE.'?controllers=security&vue=connexion');
    }else{
        $_SESSION['arrayError']= $arrayError;
        header("location:".WEB_ROUTE.'?controllers=security&vue=inscription');
    }
}
function deconnexion(): void {
    unset($_SESSION['userConnect']);
}
function supp_user(){
    
}

?>