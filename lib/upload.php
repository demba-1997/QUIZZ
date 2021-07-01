
<?php
function upload_image(string $files){
    $target_file = UPLOADIMAGE. basename($files["avatar"]["name"]);
    if (move_uploaded_file($files['avatar']['tmp_name'],$target_file)) {
        return true;
    } else {
        return false;
    }
}
if (isset($_POST['inscription'])){
    $target_file = UPLOADIMAGE. basename($files["avatar"]["name"]);
    if (move_uploaded_file($files['avatar']['tmp_name'],$target_file)) {
        return true;
    } else {
        return false;
    }
}
?>