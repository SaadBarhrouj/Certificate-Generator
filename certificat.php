<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        h1 {
            color: #333366;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #333366;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: #555588;
        }
       

    </style>
</body>

<?php
/*
// En-tête HTTP pour indiquer le type de contenu comme une image JPEG
header('Content-Type: image/jpeg');

// Chemin vers la police de caractères
$font = realpath('arial.ttf');

// Création d'une image à partir d'un fichier JPEG
$image = imagecreatefromjpeg('cer.jpg');

// Définition de la couleur du texte (RVB: 51, 51, 102)
$color = imagecolorallocate($image, 51, 51, 102);

// Texte à ajouter à l'image
$student = 'saad barhrouj';
$teacher = 'amine';
$numcert = '120-120-120';

// Ajout du texte sur l'image
imagettftext($image, 45, 0, 120, 530, $color, $font, $student);
imagettftext($image, 20, 0, 255, 1130, $color, $font, $teacher);
imagettftext($image, 20, 0, 255, 1190, $color, $font, $numcert);

// Envoi de l'image au navigateur en tant que JPEG
imagejpeg($image);
imagejpeg($image,"student/".$student.".jpg");

// Libération de la mémoire
imagedestroy($image);
*/


if (isset($_POST['add'])) {
    // Chemin vers la police de caractères
    $font = 'arial.ttf';

    // Création d'une image à partir d'un fichier JPEG
    $image = imagecreatefromjpeg('cer.jpg');

    // Définition de la couleur du texte (RVB: 51, 51, 102)
    $color = imagecolorallocate($image, 51, 51, 102);

    // Ajout du texte sur l'image
    imagettftext($image, 45, 0, 120, 530, $color, $font, $_POST['student']);
    imagettftext($image, 20, 0, 255, 1130, $color, $font, $_POST['teacher']);
    imagettftext($image, 20, 0, 255, 1190, $color, $font, $_POST['numb']);

    // Envoi de l'image au navigateur en tant que JPEG
    $filename = 'student/'. $_POST['student']. '.jpg';
    imagejpeg($image, $filename);

    // Libération de la mémoire
    imagedestroy($image);

    // Génération du lien de téléchargement
    $download_link = '<a href="'. $filename. '" download="'. $_POST['student']. '.jpg">Télécharger votre certificat</a>';

    echo "<center><h1>successfully add certificate</h1></center>";
    echo $download_link;

    
}
?>
</html>