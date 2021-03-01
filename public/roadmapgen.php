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
} elseif ($A2 < "4") {
    $Batdau = "6";
} elseif ($A2 < "10") {
    $Batdau = "8";
} elseif ($A2 < "21") {
    $Batdau = "9";
} elseif ($A2 < "51") {
    $Batdau = "10";
} elseif ($A2 < "70") {
    $Batdau = "11";
}elseif ($B1 < "4") {
    $Batdau = "12";
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
    $start = 530; // vi tri dau tien cua bang, tinh tu CEFR
    $gap = 181; // khoang cach cua tung o
} elseif ($Goal <"20") {
    $img = imagecreatefrompng('B1.png');
    $loc = "2";
    $start = 285; // vi tri dau tien cua bang, tinh tu CEFR
    $gap = 144; // khoang cach cua tung o
} elseif ($Goal <"26") {
    $img = imagecreatefrompng('B2.png');
    $loc = "3";
    $start = 215; // vi tri dau tien cua bang, tinh tu CEFR
    $gap = 111; // khoang cach cua tung o
} elseif ($Goal<"34") {
    $img = imagecreatefrompng('C1.png');
    $loc = "4";
    $start = 190; // vi tri dau tien cua bang, tinh tu CEFR
    $gap = 84; // khoang cach cua tung o
} else {
    $img = imagecreatefrompng('C2.png');
    $loc = "5";
    $start = 170; // vi tri dau tien cua bang, tinh tu CEFR
    $gap = 75; // khoang cach cua tung o
}


if ($roadmap =="Oxford Discover") {
    $ttime = "1";
    $ttimea1 = $ttimea2 = $ttimeb1 = $ttimeb2 = 9;
    $ttimea1x = $ttimea2x = $ttimeb1x = $ttimeb2x = 13;
    $ttimec1x = $ttimec2 = $ttimec1 = 0;
} elseif ($roadmap =="Oxford Discover Futures") {
    $ttime = "2";
    $ttimea1 = $ttimea1x = 0;
    $ttimea2 = 8;
    $ttimea2x = 10;
    $ttimeb1 =$ttimeb2= 16;
    $ttimeb1x =$ttimeb2x = 19;
    $ttimec1 = 18;
    $ttimec1x = $ttimec2 = 24;
} elseif ($roadmap =="English File") {
    $ttime = "3";
    $ttimea1 = 11;
    $ttimea1x = 14;
    $ttimea2 = 9;
    $ttimea2x = 12;
    $ttimeb1 = 14;
    $ttimeb1x = 18;
    $ttimeb2 = 16;
    $ttimeb2x = 19;
    $ttimec1 = 18;
    $ttimec1x = 24;
    $ttimec2 = 24;
} elseif ($roadmap=="Business Result") {
    $ttime = "4";
    $ttimea1 = 6;
    $ttimea1x = 7;
    $ttimea2 = 9;
    $ttimea2x = 10;
    $ttimeb1 = 11;
    $ttimeb1x = 13;
    $ttimeb2 = 16;
    $ttimeb2x = 18;
    $ttimec1 = 16;
    $ttimec1x = 18;
    $ttimec2 = 24;
}

$apps = "≈ ";
$mth = "tháng";
$yr = "năm";



//input black and pink arrow

$barrow = imagecreatefrompng('blackarrow.png');
$parrow = imagecreatefrompng('pinkarrow.png');

//Write name
$black =imagecolorallocate($img, 0,0,0);
$font = 'arial.ttf';
$pink = imagecolorallocate($img, 203,41,123);

// creat function get width
function get_width($sizey,$angle,$fonty,$namey) {
    $sizex = imagettfbbox($sizey,0,$fonty,$namey);
    $widthx = max([$sizex[2], $sizex[4]]) - min([$sizex[0], $sizex[6]]);
    return $widthx;
}



// THE IMAGE SIZE
$width = imagesx($img);
$height = imagesy($img);

// THE TEXT SIZE
$name_width = get_width(120,0,$font,$Name);

// CENTERING THE TEXT BLOCK
$centerX = CEIL(($width - $name_width) / 2);
$centerX = $centerX<0 ? 0 : $centerX;
//$centerY = CEIL(($height - $name_height) / 2);
//$centerY = $centerY<0 ? 0 : $centerY;
imagettftext($img, 120, 0, $centerX, 200, $black, $font, $Name);

// THE TEXT SIZE
$roadmap = "Lộ trình Tiếng anh (" . $roadmap .")";
$rm_size = imagettfbbox(60, 0, $font, $roadmap);
$rm_width = get_width(60,0,$font,$roadmap);

// CENTERING THE TEXT BLOCK
$rmcenterX = CEIL(($width - $rm_width) / 2);
$rmcenterX = $rmcenterX<0 ? 0 : $rmcenterX;
//$rmcenterY = CEIL(($height - $rm_height) / 2);
//$rmcenterY = $rmcenterY<0 ? 0 : $rmcenterY;
imagettftext($img, 60, 0, $rmcenterX, 320, $black, $font, $roadmap);

// add arrow

$name1_width = get_width(28, 0, $font, $Name);

$hientai = "hiện tại";
$hientai_width = get_width(28, 0, $font, $hientai);

$mtieu = "Mục tiêu";
$mtieu_width = get_width(28, 0, $font, $mtieu);

$hta1 = "Hoàn thành A1,";
$hta1_width = get_width(28,0, $font, $hta1);

$hta1x = "lên A2";
$hta1x_width = get_width(28,0, $font, $hta1x);

$hta2 = "Hoàn thành A2,";
$htb1 = "Hoàn thành B1,";
$htb2 = "Hoàn thành B2,";
$hta2x = "lên B1";
$htb1x = "lên B2";
$htb2x = "lên C1";
$htc1 = "7.5IELTS";
$htc1x = "8.0IELTS";
$htc1xy = " ";
$htc1_width = get_width(28,0, $font, $htc1);

$text1array = array($hta1,$hta2,$htb1,$htb2,$htc1x);
$line1array = array($hta1x,$hta2x,$htb1x,$htb2x,$htc1xy);

// Tao array bao gom cac diem can ve arrow
$input_array = array(7,13,19,25,33);
$output_array = array($Batdau);
$writetext1 = array($Name);
$writeline1 = array($hientai);

for($i=0;$i < (count($input_array));$i++){
    if($input_array[$i] > $Batdau && $input_array[$i] < $Goal && ($input_array[$i]-$Batdau)>1 && ($Goal -$input_array[$i])>2) {
        $output_array[] = $input_array[$i];
        $writetext1[] = $text1array[$i];
        $writeline1[] = $line1array[$i];
    }
}

$output_array[] = $Goal;
$writetext1[] = $mtieu;
$writeline1[] = $htc1xy;

//tao array de tinh khoang cach
$output_array2 = array($Batdau);
for($i=0;$i < (count($input_array));$i++)   {
    if($input_array[$i] > $Batdau && $input_array[$i] < $Goal)    {
        $output_array2[] = $input_array[$i];
    }
}
$output_array2[] = $Goal;

//tạo array khoảng cách
for($i=0;$i < (count($output_array2) -1);$i++)   {
    $item = $output_array2[$i+1]-$output_array2[$i];
    $khoangcach[] = $item;
    if ($output_array2[$i]>=1 && $output_array2[$i+1] <=7){
        $vitri1[] = $ttimea1;
        $vitri2[] = $ttimea1x;
    } elseif ($output_array2[$i]>=7 && $output_array2[$i+1] <=13) {
        $vitri1[] = $ttimea2;
        $vitri2[] = $ttimea2x;
    } elseif ($output_array2[$i]>=13 && $output_array2[$i+1] <=19) {
        $vitri1[] = $ttimeb1;
        $vitri2[] = $ttimeb1x;
    } elseif ($output_array2[$i]>=19 && $output_array2[$i+1] <=25) {
        $vitri1[] = $ttimeb2;
        $vitri2[] = $ttimeb2x;
    } elseif ($output_array2[$i]>=25 && $output_array2[$i+1] <=33) {
        $vitri1[] = $ttimec1;
        $vitri2[] = $ttimec1x;
    } elseif ($output_array2[$i]>=33 && $output_array2[$i+1] <=39) {
        $vitri1[] = $ttimec2;
        $vitri2[] = $ttimec2;
    }
}


unset($i);

// tao array khoang cach * thoi gian

$tgian1 = array_map(function($x, $y) {
    return $x * $y*(1/6);
}, $khoangcach, $vitri1);
$tgian2 = array_map(function($x, $y) {
    return $x * $y*(1/6);
}, $khoangcach, $vitri2);

$countkc = count($khoangcach);

if(($khoangcach[0])==1) {
    $first_element1 = $tgian1[0]+$tgian1[1];
    unset($tgian1[0]);
    unset($tgian1[1]);
    array_unshift($tgian1, $first_element1);
    $tgian1 = array_values($tgian1);
    $first_element2 = $tgian2[0]+$tgian2[1];
    unset($tgian2[0]);
    unset($tgian2[1]);
    array_unshift($tgian2, $first_element2);
    $tgian2 = array_values($tgian2);
    $first_element3 = $khoangcach[0]+$khoangcach[1];
    unset($khoangcach[0]);
    unset($khoangcach[1]);
    array_unshift($khoangcach, $first_element3);
}

$countkc = count($khoangcach);

if(($khoangcach[($countkc)-1])<=2){
    $first_element1 = $tgian1[($countkc)-1] + $tgian1[($countkc)-2];
    echo $first_element1;
    unset($tgian1[($countkc)-1]);
    unset($tgian1[($countkc)-2]);
    $tgian1 = array_values($tgian1);
    $tgian1[] = $first_element1;
    $first_element2 = $tgian2[($countkc)-1] + $tgian2[($countkc)-2];
    unset($tgian2[($countkc)-1]);
    unset($tgian2[($countkc)-2]);
    $tgian2 = array_values($tgian2);
    $tgian2[] =  $first_element2;
}

ob_clean();
// ve arrow va dien text

for($i=0; $i <= (count($output_array)-1); $i++) {
    $itemarrow = $output_array[$i];
    $textarrow1 = $writetext1[$i];
    $textarrow2 = $writeline1[$i];
    imagecopyresampled($img,$barrow,$start + $gap*($itemarrow-1),1030,0,0,49,225,49,225); // tao arrow tai diem output thu $i
    $textarrow1_width = get_width(28,0,$font,$textarrow1);
    $textX = ceil($start + $gap*($itemarrow-1) - $textarrow1_width/2 +25);
    $textX = $textX <0 ? 0 : $textX;
    $textX = ($textX+$textarrow1_width)>2932 ? (2932 - $textarrow1_width - 15) : $textX;
    imagettftext($img, 28, 0, $textX, 1320,$black, $font, $textarrow1); // dien text 1
    unset($textX);
    $textarrow2_width = get_width(28,0,$font,$textarrow2);
    $textX = ceil($start + $gap*($itemarrow-1) - $textarrow2_width/2 +25);
    $textX = $textX <0 ? 0 : $textX;
    imagettftext($img, 28, 0, $textX, 1375,$black, $font, $textarrow2); // dien text 2
    unset($textX);
    if($i != (count($output_array)-1)) {
        imagecopyresampled($img,$parrow,$start + $gap*($itemarrow-1) + 50,1090,0,0,$gap*($output_array[$i+1]-$itemarrow) - 50,26,443,26); // ve pink arrow den diem tiep theo
        //time convert
        if ($tgian2[$i] > 12) {
            if (round($tgian1[$i]/12,1)==round($tgian2[$i]/12,1)) {
                $timetext = $apps . round($tgian1[$i]/12,1) . " ". $yr;
            } else {
                $timetext = $apps . round($tgian1[$i]/12,1) . " - " . round($tgian2[$i]/12,1) . " " . $yr;
            }
            $timetext_size = imagettfbbox(28,0, $font, $timetext);
            $timetext_width = max([$timetext_size[2], $timetext_size[4]]) - min([$timetext_size[0], $timetext_size[6]]);
            imagettftext($img, 28,0, $start + $gap*(($output_array[$i+1]+$itemarrow-2)/2) - ($timetext_width/2) +25, 1165, $pink, $font, $timetext);
        } else {
            $timetext = $apps . round($tgian1[$i]) . " - " . round($tgian2[$i]) . " " . $mth;
            $timetext_size = imagettfbbox(28,0, $font, $timetext);
            $timetext_width = max([$timetext_size[2], $timetext_size[4]]) - min([$timetext_size[0], $timetext_size[6]]);
            imagettftext($img, 28,0, $start + $gap*(($output_array[$i+1]+$itemarrow-2)/2) - ($timetext_width/2) +25, 1165, $pink, $font, $timetext);
        }
    } 
}

// dien cau cuoi
$line1 = $Name . " có thể lên trình độ nhanh hơn rất nhiều nếu kết hợp việc học tại 2204";
$line1_width = get_width(35,0,$font,$line1);
$line1x = $Name . " có thể lên trình độ nhanh hơn rất nhiều";
if ($ttime == 1 || $ttime == 2) {
    $line2 = "với tự rèn luyện tại nhà theo hướng dẫn và học Tiếng Anh trên trường lớp.";

} else {
    $line2 = "với tự rèn luyện tại nhà theo hướng dẫn.";
}

$line2_width = get_width(35,0,$font,$line2);

// CENTERING THE TEXT BLOCK
$centerX = CEIL(($width - $line1_width) / 2);
$centerX = $centerX<0 ? 0 : $centerX;
imagettftext($img, 35, 0, $centerX, 1500, $black, $font, $line1);
imagettftext($img, 35, 0, $centerX, 1500+1, $pink, $font, $line1x);
imagettftext($img, 35, 0, $centerX, 1500+2, $pink, $font, $line1x);
imagettftext($img, 35, 0, $centerX+1, 1500, $pink, $font, $line1x);
imagettftext($img, 35, 0, $centerX+2, 1500, $pink, $font, $line1x);

$centerX = CEIL(($width - $line2_width) / 2);
$centerX = $centerX<0 ? 0 : $centerX;
imagettftext($img, 35, 0, $centerX, 1550, $black, $font, $line2);




end:
// show image

header('Content-Type: image/png');
imagepng($img);
imagedestroy($img);

?>

</body>
</html>
