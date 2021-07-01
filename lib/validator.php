<?php
// function de validation
function est_vide($val): bool {
    return empty($val);
}

function form_valid($arrayError): bool{
    return count($arrayError) == 0;
}

function est_entier($val): bool {
    return is_numeric($val);
}
function validation($val, string $key) {
    $arrayError=array();
    if (empty($val)) {
      $arrayError[$key]="Ce champ est obligatoire";
    }else {
       
}

function est_superieur(string $valeur): bool{
    $entier= is_numeric($valeur);
    return $valeur > VAL;
}
function verif_taille(string $valeur): bool{
    return $valeur <= 19;
}
function verif_taille1(string $valeur): bool{
    return $valeur <= 25;
}
function est_chaine(string $chaine): bool{
    return $chaine;
}
function est_phrase(string $chaine): bool{
    return $chaine;
}
function valide_phrase(string $text): bool{
    return $text;
}
function est_videe(string $chaine): bool{
    return empty($chaine);
}
function verif_taile(string $chaine): bool {
    return $chaine;
}
function est_valide(string $separator): bool{
    return empty($text);
}
}
function est_mail(string $val): bool{
    if (filter_var($val , FILTER_VALIDATE_EMAIL)) {
       return true;
    } else {
        return false;
    }
    
}

function validation_login($val , string $key,array &$arrayError){
    if (est_vide($val)) {
        $arrayError[$key]="Le login est obligatoire";
    } elseif (!est_mail($val)) {
        $arrayError[$key]="Le login doit etre un mail ";
    }
    
}
function validation_naisse(string $val, string $key, array &$arrayError){
    if (est_vide($val)){
        $arrayError[$key]="Le champ est obligatoire";
    }elseif (!est_entier($val)) {
        $arrayError[$key]="La saisie doit etre numérique";
    }
}

function validation_password($val , string $key,array &$arrayError, int $min=6, int $max=10){
    if (est_vide($val)) {
        $arrayError[$key]="Le password est obligatoire";
    }elseif (strlen($val) < $min || strlen($val) > $max) {
        $arrayError[$key]="Le password doit etre entre $min et $max";
    }
    
}
function validation_champ($val , string $key ,array &$arrayError){
    if (est_vide($val)) {
        $arrayError[$key]="Le champ est obligatoire";
    }
    
}
function valid_input($valeur, string $key, array &$arrayError)
{
    if (est_vide($valeur)) {
        $arrayError[$key] = "Le champ doit etre obligatoire  ";
    } elseif (est_entier($valeur)) {
        $arrayError[$key] = "Veuillez poser une question";
    }
}

function valid_point($valeur, string $key, array &$arrayError)
{
    if (est_vide($valeur)) {
        $arrayError[$key] = "Le champ doit etre obligatoire ";
    } elseif ($valeur <= 0) {
        $arrayError[$key] = "Veillez saisir un nombre positif";
    }
}


function valid_nbr_reponse($valeur, string $key, array &$arrayError)
{
    if (est_vide($valeur)) {
        $arrayError[$key] = "Ce champ est obligatoire ";
    } elseif ($valeur <= 0) {
        $arrayError[$key] = "Veillez saisir un nombre positif";
    }
}

function valid_type_reponse($valeur, string $key, array &$arrayError)
{
    if (est_vide($valeur)) {
        $arrayError[$key] = "Ce champ est obligatoire ";
    }
}
/**
 * validation
 *
 * @param miexed $valeur
 * @param string $key
 * @return array
 */
function validation_input($valeur, string $key): array
{
    $error = [];
    if (empty($valeur)) {
        $error[$key] = "Champ obligatoire";
    } elseif (!is_numeric($valeur)) {
        $error[$key] = "Saisir une valeur entière";
    } elseif ($valeur <= 0) {
        $error[$key] = "Saisir une valeur positive";
    }
    return $error;
}

function verif_mois($valeur): bool
{
    return $valeur > 0 && $valeur <= 12;
}

function is_annee_bissextile(int $annee): bool
{
    return $annee % 400 == 0 || ($annee % 4 == 0 && $annee % 100 != 0);
}

function verif_date(int $jour, int $mois, int $annee): bool
{
    if (verif_mois($mois)) {
        switch ($mois) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                return $jour > 0 && $jour <= 31;
            case 4:
            case 6:
            case 9:
            case 11:
                return $jour > 0 && $jour <= 30;
            case 2:
                if (is_annee_bissextile($annee)) {
                    return $jour > 0 && $jour <= 29;
                } else {
                    return $jour > 0 && $jour <= 28;
                }
            default:
                return false;
        }
    } else {
        return false;
    }
}

$arrayErrors = [];
$resultat = $rest = $an = "";
if (isset($_POST['inscription'])) {
    $arrayErrors['jour'] = validation_input($_POST['jour'], 'jour');
    $arrayErrors['mois'] = validation_input($_POST['mois'], 'mois');
    $arrayErrors['annee'] = validation_input($_POST['annee'], 'annee');
}elseif (isset($_POST['connexion'])) {
    $arrayErrors['jour'] = validation_input($_POST['jour'], 'jour');
    $arrayErrors['mois'] = validation_input($_POST['mois'], 'mois');
    $arrayErrors['annee'] = validation_input($_POST['annee'], 'annee');
}

function provideValuesForValidation(): array
    {
        $hexMutations = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f'];

        $testValues = [];

        foreach ($hexMutations as $version) {
            foreach ($hexMutations as $variant) {
                $testValues[] = [
                    'value' => "ff6f8cb0-c57d-{$version}1e1-{$variant}b21-0800200c9a66",
                    'expected' => true,
                ];
            }
        }

        return array_merge($testValues, [
            [
                'value' => 'zf6f8cb0-c57d-11e1-9b21-0800200c9a66',
                'expected' => false,
            ],
            [
                'value' => '3f6f8cb0-c57d-11e1-9b21-0800200c9a6',
                'expected' => false,
            ],
            [
                'value' => 'af6f8cb-c57d-11e1-9b21-0800200c9a66',
                'expected' => false,
            ],
            [
                'value' => 'af6f8cb0c57d11e19b210800200c9a66',
                'expected' => false,
            ],
            [
                'value' => 'ff6f8cb0-c57da-51e1-9b21-0800200c9a66',
                'expected' => false,
            ],
            [
                'value' => "ff6f8cb0-c57d-11e1-1b21-0800200c9a66\n",
                'expected' => false,
            ],
            [
                'value' => "\nff6f8cb0-c57d-11e1-1b21-0800200c9a66",
                'expected' => false,
            ],
            [
                'value' => "\nff6f8cb0-c57d-11e1-1b21-0800200c9a66\n",
                'expected' => false,
            ],
        ]);
    }
?>