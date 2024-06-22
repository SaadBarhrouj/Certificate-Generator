<?php
header('content-type:image/jpeg');
$font=realpath('arial.ttf');
$image=imagecreatefromjpeg('cer.jpg');
$color=imagecolorallocate($image,51,51,102);
$student='saad barhrouj';
$teacher='amine';
$numcert='120-120-120';
imagettftext($image,45,0,120,530,$color,$font,$student);
imagettftext($image,20,0,255,1130,$color,$font,$teacher);
imagettftext($image,20,0,255,1190,$color,$font,$numcert);
imagejpeg($image);
imagedestroy($image);


?>