
<?php
function upload_image(){
    $target_file = UPLOADIMAGE. basename($_FILES["userfile"]["name"]);
    if (move_uploaded_file($_FILES['userfile']['tmp_name'],$target_file)) {
        echo "L'image est valide, et a été téléchargé
               avec succès.";
    } else {
        echo "Erreur de téléchargement";
    }
}
?>