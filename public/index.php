<html>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
<form action="roadmapgen.php" method="get">
<script>
$(function() {
    $('#row_mark1,#row_mark2').hide(); 
    $('#type').change(function(){
        if($('#type').val() == 'ntest') {
            $('#row_mark1').show();
            $('#row_mark2').hide(); 
        } else {
            $('#row_mark1').hide(); 
            $('#row_mark2').show();
        } 
    });
});
</script>

<script>
$(function() {
    $('#OD,#ODF,#other').hide(); 
    $('#roadmap').change(function(){
        if($('#roadmap').val() == 'Oxford Discover') {
            $('#OD').show();
            $('#ODF').hide(); 
            $('#other').hide(); 
        } else if ($('#roadmap').val() == 'Oxford Discover Futures') {
            $('#OD').hide();
            $('#ODF').show(); 
            $('#other').hide(); 
        } else {
            $('#OD').hide();
            $('#ODF').hide(); 
            $('#other').show(); 
        }
    });
});
</script>

<style>
.center {
  text-align: center;
}
</style>


<div class="center">
Name: <input type="text" name="name"><br>
<title>Static Dropdown List</title> 
<div class="giaotrinh">
Lộ trình: 
<select name="roadmap" id="roadmap">  
  <option value="Select">Select</option>}  
  <option value="Oxford Discover">Oxford Discover (Lớp 1 - 5)</option>  
  <option value="Oxford Discover Futures">Oxford Discover Futures (Lớp 5 -11)</option>  
  <option value="English File">English File (học sinh cấp 3, thi đại học, sinh viên, người đi làm)</option>  
  <option value="Business Result">Business Result (Doanh nhân)</option>  
</select>
</div>  

<div class="row">    
    Type of Test
        <select name="type" id="type" style="margin-left:57px; width:153px;">
                <option value="Select">Select</option>}  
                <option name="Normal Test" value="ntest">Normal Test</option>
                <option name="Reading and Listening Test" value="r&ltest">Reading and Listening Test</option>
        </select>                    
</div>

<div class="row" id="row_mark1">
    Marks
        <input type="number" name="a1" class="mark" placeholder="A1">
        <input type="number" name="a2" class="mark" placeholder="A2">
        <input type="number" name="b1" class="mark" placeholder="B1">
</div>
<div class="row" id="row_mark2">
    Marks
        <input type="number" name="reading" class="mark" placeholder="Reading">
        <input type="number" name="listening" class="mark" placeholder="Listening">
</div>

<title>Static Dropdown List</title>  

<div class="giaotrinh" id ="OD">
Mục tiêu:  
<select name="muctieu" style="margin-left:57px; width:153px;">  
  <option value="Select">Select</option>}  
  <option value="3">A1-</option>  
  <option value="5">A1</option>  
  <option value="7">A1+</option>  
  <option value="9">A2-</option>  
  <option value="11">A2</option>  
  <option value="13">A2+</option>  
  <option value="15">B1-</option>  
  <option value="17">B1</option>  
  <option value="19">B1+</option>  
  <option value="21">B2-</option>  
  <option value="23">B2</option>  
  <option value="25">B2+</option>  
</select>  
</div> 
<div class="giaotrinh" id ="ODF">
Mục tiêu:  
<select name="muctieu" style="margin-left:57px; width:153px;">  
  <option value="Select">Select</option>}  
  <option value="9">A2-</option>  
  <option value="11">A2</option>  
  <option value="13">A2+</option>  
  <option value="15">B1-</option>  
  <option value="17">B1</option>  
  <option value="19">B1+</option>  
  <option value="21">B2-</option>  
  <option value="23">B2</option>  
  <option value="25">B2+</option>  
  <option value="27">C1 Ielts 7.0 - Toefl 94-101</option>  
  <option value="29">C1 Ielts 7.5 - Toefl 102-109</option>  
  <option value="31">C1+ Ielts 8.0 - Toefl 110-114</option>  
  <option value="33">C2- Ielts8.0 - Toefl 110-114</option>  
  <option value="35">C2 Ielts8.5 - Toefl 115-117</option>  
  <option value="37">C2+ Ielts9.0 - Toefl 118-120</option>  
</select>  
</div> 
<div class="giaotrinh" id ="other">
Mục tiêu:  
<select name="muctieu" style="margin-left:57px; width:153px;">  
  <option value="Select">Select</option>}  
  <option value="3">A1-</option>  
  <option value="5">A1</option>  
  <option value="7">A1+</option>  
  <option value="9">A2-</option>  
  <option value="11">A2</option>  
  <option value="13">A2+</option>  
  <option value="15">B1-</option>  
  <option value="17">B1</option>  
  <option value="19">B1+</option>  
  <option value="21">B2-</option>  
  <option value="23">B2</option>  
  <option value="25">B2+</option>  
  <option value="27">C1 Ielts 7.0 - Toefl 94-101</option>  
  <option value="29">C1 Ielts 7.5 - Toefl 102-109</option>  
  <option value="31">C1+ Ielts 8.0 - Toefl 110-114</option>  
  <option value="33">C2- Ielts8.0 - Toefl 110-114</option>  
  <option value="35">C2 Ielts8.5 - Toefl 115-117</option>  
  <option value="37">C2+ Ielts9.0 - Toefl 118-120</option>  
</select>  
</div> 
<input type="submit">
</form>

</div>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
img {
  width: 100%;
  height: auto;
}
</style>

    <img src="Reference.png">

</body>
</html>
