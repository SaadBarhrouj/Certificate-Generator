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
if(isset($_POST['add'])){


// Chemin vers la police de caractères
    $font = realpath('arial.ttf');

// Création d'une image à partir d'un fichier JPEG
    $image = imagecreatefromjpeg('cer.jpg');

// Définition de la couleur du texte (RVB: 51, 51, 102)
    $color = imagecolorallocate($image, 51, 51, 102);

// Ajout du texte sur l'image
    imagettftext($image, 45, 0, 120, 530, $color, $font, $_POST['student']);
    imagettftext($image, 20, 0, 255, 1130, $color, $font,$_POST['teacher']);
    imagettftext($image, 20, 0, 255, 1190, $color, $font, $_POST['numb']);

// Envoi de l'image au navigateur en tant que JPEG

    imagejpeg($image,"student/".$student.".jpg");

// Libération de la mémoire
    imagedestroy($image);
}

?>


