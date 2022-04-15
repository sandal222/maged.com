<html>
<head>
<title>البيانات الصيدلية</title>

<style>
html{
height:400px;
width:400px;
}
.input{
	background-image:url(gt.jfif);
font-size:24px;
font-style:blue;
backgrcound-color:whiate;
color:black
;
border:0.7rem outset yellow;
outline:0.7rem solid  red;
box-shadow:0 0 0 2rem red;
border-radius:30px;
font:bold 1rem sans-seif;
margin:2rem;
padding: 1rem;
outline-offset:0,5rem;
width:550px;
height:400px;
margin-left:300px;
margin-top:100px;

}
.com{

background-color:whiate;

width:100px;
height:50px;
font-size:20px;
color :red;
margin-left:280px;
margin-top:20px;
}
.nice{
	margin-left:120px;

font-size:30px;
}

</style>


</head>


<body>




<center-left-side>
<div  class="input">

<form  action="yodd.php" method="POST">

<input type="text" name="number" placeholder= "ادخل رقم  الدواء " class="nice" require/> <br><br>

<input type="text" name="name" placeholder= " ادخل اسم الدواء" class="nice" require/   ><br><br>

<input type="text" name="parice" placeholder= "ادخل سعر الدواء " class="nice"  require/> <br><br>

<input type="text" name="surnumber" placeholder="ادخل رقم التسلسلي  " class="nice"    require/ > <br><br>
<input type="submit"  name="add" value="تاكيد" class="com" require "/>

</form>

</div>
<center-left-side>




</body>

</html>