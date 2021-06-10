<?php
function find_login_password(string $login, string $password): array{
    $json= file_get_contents(ROUTE_DIR.'data/user.data.json');
    $arrayUser = json_decode($json, true);
    foreach ($arrayUser as $user) {
        if($user['login']== $login && $user['password']== $password){
            return $user;
        }
    }
    return [];
}

function add_user(array $user){
   $json = file_get_contents(ROUTE_DIR.'data/user.data.json');
   $arrayUser = json_decode($json, true);
   $arrayUser[] = $user;
   $json = json_encode($arrayUser);
   file_put_contents(ROUTE_DIR.'data/user.data.json' , $json);
}

?>