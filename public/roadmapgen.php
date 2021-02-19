<html>
<body>

<?php

$Name = $_GET["name"];
$roadmap =  $_GET["roadmap"];
$A1 =  $_GET["a1"];
$A2 =  $_GET["a2"];
$B1 =  $_GET["b1"]; 
$Goal =  $_GET["muctieu"]; 

if ($A1 < "4") {
    $Batdau = "1";
} elseif ($A1 < "10") {
    $Batdau = "2";
} elseif ($A1 < "21") {
    $Batdau = "3";
} elseif ($A1 < "51") {
    $Batdau = "4";
} elseif ($A1 < "70") {
    $Batdau = "5";
} elseif ($A1 < "90") {
    $Batdau = "6";
} elseif ($A2 < "4") {
    $Batdau = "7";
} elseif ($A2 < "10") {
    $Batdau = "8";
} elseif ($A2 < "21") {
    $Batdau = "9";
} elseif ($A2 < "51") {
    $Batdau = "10";
} elseif ($A2 < "70") {
    $Batdau = "11";
} elseif ($A2 < "90") {
    $Batdau = "12";
}elseif ($B1 < "4") {
    $Batdau = "13";
} elseif ($B1 < "10") {
    $Batdau = "14";
} elseif ($B1 < "22") {
    $Batdau = "15";
} elseif ($B1 < "52") {
    $Batdau = "16";
} elseif ($B1 < "70") {
    $Batdau = "17";
} elseif ($B1 < "90") {
    $Batdau = "18";
} elseif ($B1 < "100") {
    $Batdau = "19";
}
ob_clean();

//pick the right image

if ($Goal < "14") {
    $img = imagecreatefrompng('A2.png');
    $loc = "1";
} elseif ($Goal <"20") {
    $img = imagecreatefrompng('B1.png');
    $loc = "2";
} elseif ($Goal <"26") {
    $img = imagecreatefrompng('B2.png');
    $loc = "3";
} elseif ($Goal<"34") {
    $img = imagecreatefrompng('C1.png');
    $loc = "4";
} else {
    $img = imagecreatefrompng('C2.png');
    $loc = "5";
}

//input black and pink arrow

$barrow = imagecreatefrompng('blackarrow.png');
$parrow = imagecreatefrompng('pinkarrow.png');

//Write name
$black =imagecolorallocate($img, 0,0,0);
$font = 'arial.ttf';

// THE IMAGE SIZE
$width = imagesx($img);
$height = imagesy($img);

// THE TEXT SIZE
$name_size = imagettfbbox(120, 0, $font, $Name);
$name_width = max([$name_size[2], $name_size[4]]) - min([$name_size[0], $name_size[6]]);
$name_height = max([$name_size[5], $name_size[7]]) - min([$name_size[1], $name_size[3]]);

// CENTERING THE TEXT BLOCK
$centerX = CEIL(($width - $name_width) / 2);
$centerX = $centerX<0 ? 0 : $centerX;
$centerY = CEIL(($height - $name_height) / 2);
$centerY = $centerY<0 ? 0 : $centerY;
imagettftext($img, 120, 0, $centerX, 200, $black, $font, $Name);

// THE TEXT SIZE
$roadmap = "Lộ trình Tiếng anh (" . $roadmap .")";
$rm_size = imagettfbbox(80, 0, $font, $roadmap);
$rm_width = max([$rm_size[2], $rm_size[4]]) - min([$rm_size[0], $rm_size[6]]);
$rm_height = max([$rm_size[5], $rm_size[7]]) - min([$rm_size[1], $rm_size[3]]);

// CENTERING THE TEXT BLOCK
$rmcenterX = CEIL(($width - $rm_width) / 2);
$rmcenterX = $rmcenterX<0 ? 0 : $rmcenterX;
$rmcenterY = CEIL(($height - $rm_height) / 2);
$rmcenterY = $rmcenterY<0 ? 0 : $rmcenterY;
imagettftext($img, 80, 0, $rmcenterX, 320, $black, $font, $roadmap);

// add arrow

$name1_size = imagettfbbox(35, 0, $font, $Name);
$name1_width = max([$name1_size[2], $name1_size[4]]) - min([$name1_size[0], $name1_size[6]]);
$name1_height = max([$name1_size[5], $name1_size[7]]) - min([$name1_size[1], $name1_size[3]]);

$hientai = "hiện tại";
$hientai_size = imagettfbbox(35,0, $font, $hientai);
$hientai_width = max([$hientai_size[2], $hientai_size[4]]) - min([$hientai_size[0], $hientai_size[6]]);
$hientai_height = max([$hientai_size[5], $hientai_size[7]]) - min([$hientai_size[1], $hientai_size[3]]);

$mtieu = "Mục tiêu";
$mtieu_size = imagettfbbox(35,0, $font, $mtieu);
$mtieu_width = max([$mtieu_size[2], $mtieu_size[4]]) - min([$mtieu_size[0], $mtieu_size[6]]);
$mtieu_height = max([$mtieu_size[5], $mtieu_size[7]]) - min([$mtieu_size[1], $mtieu_size[3]]);

$hta1 = "Hoàn thành A1,";
$hta1_size = imagettfbbox(35,0, $font, $hta1);
$hta1_width = max([$hta1_size[2], $hta1_size[4]]) - min([$hta1_size[0], $hta1_size[6]]);
$hta1_height = max([$hta1_size[5], $hta1_size[7]]) - min([$hta1_size[1], $hta1_size[3]]);

$hta1x = "lên A2";
$hta1x_size = imagettfbbox(35,0, $font, $hta1x);
$hta1x_width = max([$hta1x_size[2], $hta1x_size[4]]) - min([$hta1x_size[0], $hta1x_size[6]]);
$hta1x_height = max([$hta1x_size[5], $hta1x_size[7]]) - min([$hta1x_size[1], $hta1x_size[3]]);

$hta2 = "Hoàn thành A2,";
$htb1 = "Hoàn thành B1,";
$htb2 = "Hoàn thành B2,";
$hta2x = "lên B1";
$htb1x = "lên B2";
$htb2x = "lên C1";
$htc1 = "8.0IELTS";
$htc1_size = imagettfbbox(35,0, $font, $htc1);
$htc1_width = max([$htc1_size[2], $htc1_size[4]]) - min([$htc1_size[0], $htc1_size[6]]);

if ($loc == "1") {
    imagecopyresampled($img,$barrow,530 + 181*($Batdau-1),1030,0,0,49,225,49,225);
    // text name hien tai
    $textX = ceil(530 + 181*($Batdau-1) - $name1_width/2 +25);
    $textX = $textX <0 ? 0 : $textX;
    imagettftext($img, 35, 0, $textX, 1320,$black, $font, $Name);
    unset($textX);
    $textX = ceil(530 + 181*($Batdau-1) - $hientai_width/2 +25);
    $textX = $textX <0 ? 0 : $textX;
    imagettftext($img, 35, 0, $textX, 1375,$black, $font, $hientai);
    unset($textX);
    imagecopyresampled($img,$barrow,530 + 181*($Goal-1),1030,0,0,49,225,49,225);
    $textX = ceil(530 + 181*($Goal-1) - $mtieu_width/2 +25);
    $textX = $textX <0 ? 0 : $textX;
    imagettftext($img, 35, 0, $textX, 1320,$black, $font, $mtieu);
    unset($textX);
    if ($Batdau <"7" && ($Goal - 7) > 2 && (7-$Batdau)>1) {
        imagecopyresampled($img,$barrow,530 + 181*6,1030,0,0,49,225,49,225);
        $textX = ceil(530 + 181*6 - $hta1_width/2 +25);
        $textX = $textX <0 ? 0 : $textX;
        imagettftext($img, 35, 0, $textX, 1320,$black, $font, $hta1);
        unset($textX);
        $textX = ceil(530 + 181*6 - $hta1x_width/2 +25);
        $textX = $textX <0 ? 0 : $textX;
        imagettftext($img, 35, 0, $textX, 1375,$black, $font, $hta1x);
        unset($textX);
        imagecopyresampled($img,$parrow,530 + 181*($Batdau-1) + 50,1090,0,0,181*(6-$Batdau +1) - 50,26,443,26);
        imagecopyresampled($img,$parrow,530 + 181*6 + 50,1090,0,0,181*($Goal - 7) - 50,26,443,26);
    } else {
        imagecopyresampled($img,$parrow,530 + 181*($Batdau-1) + 50,1090,0,0,181*($Goal - $Batdau) - 50,26,443,26);
    }
} elseif ($loc == "2") {
    imagecopyresampled($img,$barrow,285 + 144*($Batdau-1),1030,0,0,49,225,49,225);
    $textX = ceil(285 + 144*($Batdau-1) - $name1_width/2  +25);
    $textX = $textX <0 ? 0 : $textX;
    imagettftext($img, 35, 0, $textX, 1320,$black, $font, $Name);
    unset($textX);
    $textX = ceil(285 + 144*($Batdau-1) - $hientai_width/2  +25);
    $textX = $textX <0 ? 0 : $textX;
    imagettftext($img, 35, 0, $textX, 1375,$black, $font, $hientai);
    unset($textX);
    imagecopyresampled($img,$barrow,285 + 144*($Goal-1),1030,0,0,49,225,49,225);
    $textX = ceil(285 + 144*($Goal-1) - $mtieu_width/2  +25);
    $textX = $textX > $width - $mtieu_width -10 ? $width - $mtieu_width -10 : $textX;
    imagettftext($img, 35, 0, $textX, 1320,$black, $font, $mtieu);
    unset($textX);
    if ($Batdau < "13" && ($Goal - 13) > 2 && (13-$Batdau)>1) {
        imagecopyresampled($img,$barrow,285 + 145*12,1030,0,0,49,225,49,225);
        $textX = ceil(285 + 144*12 - $hta1_width/2  +25);
        $textX = $textX <0 ? 0 : $textX;
        imagettftext($img, 35, 0, $textX, 1320,$black, $font, $hta2);
        unset($textX);
        $textX = ceil(285 + 144*12 - $hta1x_width/2  +25);
        $textX = $textX <0 ? 0 : $textX;
        imagettftext($img, 35, 0, $textX, 1320,$black, $font, $hta2x);
        unset($textX);
        imagecopyresampled($img,$parrow,285 + 145*12 + 50,1090,0,0,144*($Goal - 13) - 50,26,443,26);
        if ($Batdau < "7" && (7-$Batdau)>1) {
            imagecopyresampled($img,$barrow,285 + 144*6,1030,0,0,49,225,49,225);
            $textX = ceil(285 + 144*6 - $hta1_width/2  +25);
            $textX = $textX <0 ? 0 : $textX;
            imagettftext($img, 35, 0, $textX, 1320,$black, $font, $hta1);
            unset($textX);
            $textX = ceil(285 + 144*6 - $hta1x_width/2  +25);
            $textX = $textX <0 ? 0 : $textX;
            imagettftext($img, 35, 0, $textX, 1375,$black, $font, $hta1x);
            unset($textX);
            imagecopyresampled($img,$parrow,285 + 144*6 + 50,1090,0,0,144*(13-7) - 50,26,443,26);
            imagecopyresampled($img,$parrow,285 + 144*($Batdau-1) + 50,1090,0,0,144*(7-$Batdau) - 50,26,443,26);
        } else {
            imagecopyresampled($img,$parrow,285 + 144*($Batdau-1) + 50,1090,0,0,144*(13-$Batdau) - 50,26,443,26);
        }
    } else {
        imagecopyresampled($img,$parrow,285 + 144*($Batdau-1) + 50,1090,0,0,144*($Goal-$Batdau) - 50,26,443,26);
    }
} elseif ($loc == "3") {
    imagecopyresampled($img,$barrow,230 + 111*($Batdau-1),1030,0,0,49,225,49,225);
    $textX = ceil(230 + 111*($Batdau-1) - $name1_width/2  +25);
    $textX = $textX <0 ? 0 : $textX;
    imagettftext($img, 35, 0, $textX, 1320,$black, $font, $Name);
    unset($textX);
    $textX = ceil(230 + 111*($Batdau-1) - $hientai_width/2  +25);
    $textX = $textX <0 ? 0 : $textX;
    imagettftext($img, 35, 0, $textX, 1375,$black, $font, $hientai);
    unset($textX);
    imagecopyresampled($img,$barrow,230 + 110*($Goal-1),1030,0,0,49,225,49,225);
    $textX = ceil(230 + 111*($Goal-1) - $mtieu_width/2  +25);
    $textX = $textX > $width - $mtieu_width -10 ? $width - $mtieu_width -10 : $textX;
    imagettftext($img, 35, 0, $textX, 1320,$black, $font, $mtieu);
    unset($textX);
    if ($Batdau < "19" && ($Goal - 19) > 2 && (19-$Batdau)>1) {
        imagecopyresampled($img,$barrow,230 + 111*18,1030,0,0,49,225,49,225);
        $textX = ceil(230 + 111*18 - $hta1_width/2  +25);
        $textX = $textX <0 ? 0 : $textX;
        imagettftext($img, 35, 0, $textX, 1320,$black, $font, $htb1);
        unset($textX);
        $textX = ceil(230 + 111*18 - $hta1x_width/2  +25);
        $textX = $textX <0 ? 0 : $textX;
        imagettftext($img, 35, 0, $textX, 1375,$black, $font, $htb1x);
        unset($textX);
        imagecopyresampled($img,$parrow,230 + 111*18 + 50,1090,0,0,110*($Goal - 19) - 60,26,443,26);
        if ($Batdau < "13" && (13-$Batdau)>1) {
            imagecopyresampled($img,$barrow,230 + 111*12,1030,0,0,49,225,49,225);
            $textX = ceil(230 + 111*12 - $hta1_width/2  +25);
            $textX = $textX <0 ? 0 : $textX;
            imagettftext($img, 35, 0, $textX, 1320,$black, $font, $hta2);
            unset($textX);
            $textX = ceil(230 + 111*12 - $hta1x_width/2  +25);
            $textX = $textX <0 ? 0 : $textX;
            imagettftext($img, 35, 0, $textX, 1375,$black, $font, $hta2x);
            unset($textX);
            imagecopyresampled($img,$parrow,230 + 111*12 + 50,1090,0,0,111*(19-13) - 50,26,443,26);
            imagecopyresampled($img,$parrow,230 + 111*($Batdau-1) + 50,1090,0,0,111*(13-$Batdau) - 50,26,443,26);
        } else {
            imagecopyresampled($img,$parrow,230 + 111*($Batdau-1) + 50,1090,0,0,111*(19-$Batdau) - 50,26,443,26);
        }
    } else {
        imagecopyresampled($img,$parrow,230 + 111*($Batdau-1) + 50,1090,0,0,111*($Goal-$Batdau) - 50,26,443,26);
    }
} elseif ($loc == "4") {
    imagecopyresampled($img,$barrow,190 + 84*($Batdau-1),1030,0,0,49,225,49,225);
    $textX = ceil(190 + 84*($Batdau-1) - $name1_width/2  +25);
    $textX = $textX <0 ? 0 : $textX;
    imagettftext($img, 35, 0, $textX, 1320,$black, $font, $Name);
    unset($textX);
    $textX = ceil(190 + 84*($Batdau-1) - $hientai_width/2  +25);
    $textX = $textX <0 ? 0 : $textX;
    imagettftext($img, 35, 0, $textX, 1375,$black, $font, $hientai);
    unset($textX);
    imagecopyresampled($img,$barrow,190 + 84*($Goal-1),1030,0,0,49,225,49,225);
    $textX = ceil(190 + 84*($Goal-1) - $mtieu_width/2  +25);
    $textX = $textX > $width - $mtieu_width -10 ? $width - $mtieu_width -10 : $textX;
    imagettftext($img, 35, 0, $textX, 1320,$black, $font, $mtieu);
    unset($textX);
    if ($Batdau < "25" && ($Goal - 25) > 2 && (25-$Batdau)>1) {
        imagecopyresampled($img,$barrow,190 + 84*24,1030,0,0,49,225,49,225);
        $textX = ceil(190 + 84*24 - $hta1_width/2  +25);
        $textX = $textX <0 ? 0 : $textX;
        imagettftext($img, 35, 0, $textX, 1320,$black, $font, $htb2);
        unset($textX);
        $textX = ceil(190 + 84*24 - $hta1x_width/2  +25);
        $textX = $textX <0 ? 0 : $textX;
        imagettftext($img, 35, 0, $textX, 1375,$black, $font, $htb2x);
        unset($textX);
        imagecopyresampled($img,$parrow,190 + 84*24 + 50,1090,0,0,84*($Goal - 24) - 120,26,443,26);
        if ($Batdau < "13" && (13-$Batdau)>1) {
            imagecopyresampled($img,$barrow,190 + 84*12,1030,0,0,49,225,49,225);
            $textX = ceil(190 + 84*12 - $hta1_width/2  +25);
            $textX = $textX <0 ? 0 : $textX;
            imagettftext($img, 35, 0, $textX, 1320,$black, $font, $htb1);
            unset($textX);
            $textX = ceil(190 + 84*12 - $hta1x_width/2  +25);
            $textX = $textX <0 ? 0 : $textX;
            imagettftext($img, 35, 0, $textX, 1375,$black, $font, $htb1x);
            unset($textX);
            imagecopyresampled($img,$parrow,190 + 84*12 + 50,1090,0,0,84*(25 - 13) - 60,26,443,26);
            imagecopyresampled($img,$parrow,190 + 84*($Batdau-1) + 50,1090,0,0,84*(13-$Batdau) - 50,26,443,26);
        } else {
            imagecopyresampled($img,$parrow,190 + 84*($Batdau-1) + 50,1090,0,0,84*(25-$Batdau) - 50,26,443,26);
        } 
    } else {
        imagecopyresampled($img,$parrow,190 + 84*($Batdau-1) + 50,1090,0,0,84*($Goal-$Batdau) - 50,26,443,26);
    }
} else {
    imagecopyresampled($img,$barrow,170 + 75*($Batdau-1),1030,0,0,49,225,49,225);
    $textX = ceil(170 + 75*($Batdau-1) - $name1_width/2  +25);
    $textX = $textX <0 ? 0 : $textX;
    imagettftext($img, 35, 0, $textX, 1320,$black, $font, $Name);
    unset($textX);
    $textX = ceil(170 + 75*($Batdau-1) - $hientai_width/2  +25);
    $textX = $textX <0 ? 0 : $textX;
    imagettftext($img, 35, 0, $textX, 1375,$black, $font, $hientai);
    unset($textX);
    imagecopyresampled($img,$barrow,170 + 75*($Goal-1),1030,0,0,49,225,49,225);
    $textX = ceil(170 + 75*($Goal-1) - $mtieu_width/2  +25);
    $textX = $textX > $width - $mtieu_width -10 ? $width - $mtieu_width -10 : $textX;
    imagettftext($img, 35, 0, $textX, 1320,$black, $font, $mtieu);
    unset($textX);
    if ($Batdau < "33" && ($Goal - 33) > 2 && (33-$Batdau)>1) {
        imagecopyresampled($img,$barrow,170 + 75*32,1030,0,0,49,225,49,225);
        $textX = ceil(170 + 75*32 - $htc1_width/2  +25);
        $textX = $textX <0 ? 0 : $textX;
        imagettftext($img, 35, 0, $textX, 1320,$black, $font, $htc1);
        unset($textX);
        imagecopyresampled($img,$parrow,170 + 75*32 + 50,1090,0,0,75*($Goal - 32) - 120,26,443,26);
        if ($Batdau < "25" && (25-$Batdau)>1) {
            imagecopyresampled($img,$barrow,170 + 75*24,1030,0,0,49,225,49,225);
            $textX = ceil(170 + 75*24 - $hta1_width/2  +25);
            $textX = $textX <0 ? 0 : $textX;
            imagettftext($img, 35, 0, $textX, 1320,$black, $font, $htb2);
            unset($textX);
            $textX = ceil(170 + 75*24 - $hta1x_width/2  +25);
            $textX = $textX <0 ? 0 : $textX;
            imagettftext($img, 35, 0, $textX, 1375,$black, $font, $htb2x);
            unset($textX);
            imagecopyresampled($img,$parrow,170 + 75*24 + 50,1090,0,0,75*(32 - 24) - 50,26,443,26);
            if ($Batdau < "13" && (13-$Batdau)>1) {
                imagecopyresampled($img,$barrow,170 + 75*12,1030,0,0,49,225,49,225);
                $textX = ceil(170 + 75*12 - $hta1_width/2  +25);
                $textX = $textX <0 ? 0 : $textX;
                imagettftext($img, 35, 0, $textX, 1320,$black, $font, $htb1);
                unset($textX);
                $textX = ceil(170 + 75*12 - $hta1x_width/2  +25);
                $textX = $textX <0 ? 0 : $textX;
                imagettftext($img, 35, 0, $textX, 1375,$black, $font, $htb1x);
                unset($textX);
                imagecopyresampled($img,$parrow,170 + 75*12 + 50,1090,0,0,75*(25 - 13) - 60,26,443,26);
                imagecopyresampled($img,$parrow,170 + 75*($Batdau-1) + 50,1090,0,0,75*(13-$Batdau) - 50,26,443,26);
            } else {
                imagecopyresampled($img,$parrow,170 + 75*($Batdau-1) + 50,1090,0,0,75*(25-$Batdau) - 50,26,443,26);
            } 
        } else {
            imagecopyresampled($img,$parrow,170 + 75*($Batdau-1) + 50,1090,0,0,75*(33-$Batdau) - 50,26,443,26);
        }
    } else {
        imagecopyresampled($img,$parrow,170 + 75*($Batdau-1) + 50,1090,0,0,75*($Goal-$Batdau) - 50,26,443,26);
    }
}

// show image

header('Content-Type: image/png');
imagepng($img);
imagedestroy($img);

?>

</body>
</html>
