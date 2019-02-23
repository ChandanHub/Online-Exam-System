<DOCTYPE! html>
 <html>
  <head>
   <title>PHP Quiz 1</title>
   <style>
   img.a {
    position: absolute;
    left: 2px;
    top: 2px;
    z-index: +1;
}
h2 {
    color: OrangeRed;
    text-align: center;
}
h3 {
    color: Green;
    text-align: center;
}
body {
    background-color: Chartreuse;
}

div.part {
	position: static;
	height: 3800px;
    width: 70%;
    border: 1px solid yellow;
    background-color:LightYellow;
	margin-top: 30px;
    margin-bottom: 0px;
    margin-right: 200px;
    margin-left: 200px;
	}
img.out {
    position: absolute;
    right: 18px;
    top: 18px;
    z-index: +1;
}
	img.dash {
    position: absolute;
    right: 135px;
    top: 18px;
    z-index: +1;
}
   </style>
  </head >
  <body style="color:Navy" >
  <a href="home.php"><img class="a" src="TT.png" style="width:100px;height:75px;"></a>
   <a href="logout.php"><img class="out" src="out.png" style="width:109px;height:42px;"></a>
  <a href="dash.php"><img class="dash" src="dashbut.png" style="width:109px;height:42px;"></a>
  <table width="100%" border="0" bgcolor="blue" height="60px" >
<tr ><td style="color:yellow"><center><h1><b>PHP Quiz Result</b><h1></center></td></tr>
</table><hr><br>
  <div class="part">
  <?php
  $q = array();
  $q[0]=$_POST["q1"];
  $q[1]=$_POST["q2"];
  $q[2]=$_POST["q3"];
  $q[3]=$_POST["q4"];
  $q[4]=$_POST["q5"];
  $q[5]=$_POST["q6"];
  $q[6]=$_POST["q7"];
  $q[7]=$_POST["q8"];
  $q[8]=$_POST["q9"];
  $q[9]=$_POST["q10"];
  $q[10]=$_POST["q11"];
  $q[11]=$_POST["q12"];
  $q[12]=$_POST["q13"];
  $q[13]=$_POST["q14"];
  $q[14]=$_POST["q15"];
  $q[15]=$_POST["q16"];
  $q[16]=$_POST["q17"];
  $q[17]=$_POST["q18"];
  $q[18]=$_POST["q19"];
  $q[19]=$_POST["q20"];
  $q[20]=$_POST["q21"];
  $q[21]=$_POST["q22"];
  $q[22]=$_POST["q23"];
  $q[23]=$_POST["q24"];
  $q[24]=$_POST["q25"];
  
  $ans=array('c','b','b','a','d','d','a','b','d','c','c','b','a','a','b','d','b','b','b','b','d','b','c','a','a' );
  
  $correct= 0;
  /* $unattempted= 0; */
  $wrong= 0;
  
for($i=0;$i<25;$i++)
{
if($q[$i]==$ans[$i]){ $correct=$correct+1; }	
/* else if ($q[$i]==NULL){ $unattempted=$unattempted+1; } */
else { $wrong = $wrong+1; }	
}
$percentage= ($correct/25) * 100;

echo "<br><h2>Correct Answers &nbsp;&nbsp; --  &nbsp;&nbsp;&nbsp;  $correct </h2>";

echo "<h2> Wrong Answers &nbsp;&nbsp; -- &nbsp;&nbsp;&nbsp; $wrong </h2>";
echo "<h2> Percentage &nbsp;&nbsp; -- &nbsp;&nbsp;&nbsp; $percentage </h2>";
if($percentage>=40)
{
	echo "<h3> You Are Pass !  </h3><hr><hr>";
}
else{
	echo "<h3> You Are Fail !  </h3><hr><hr>";
}
echo "<center>";
echo "<table border=\"1\"  width=\"80%\" >  ";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:red;\"><td><b>Question no.</b></td><td><b>Correct Answer</b></td><td><b>Your Answer</b></td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>1</b></td><td><b>C</b></td><td>$q[0]</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>2</b></td><td><b>B</b></td><td>$q[1]</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>3</b></td><td><b>B</b></td><td>$q[2]</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>4</b></td><td><b>A</b></td><td>$q[3]</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>5</b></td><td><b>D</b></td><td>$q[4]</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>6</b></td><td><b>D</b></td><td>$q[5]</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>7</b></td><td><b>A</b></td><td>$q[6]</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>8</b></td><td><b>B</b></td><td>$q[7]</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>9</b></td><td><b>D</b></td><td>$q[8]</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>10</b></td><td><b>C</b></td><td>$q[9]</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>11</b></td><td><b>C</b></td><td>$q[10]</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>12</b></td><td><b>B</b></td><td>$q[11]</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>13</b></td><td><b>A</b></td><td>$q[12]</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>14</b></td><td><b>A</b></td><td>$q[13]</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>15</b></td><td><b>B</b></td><td>$q[14]</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>16</b></td><td><b>D</b></td><td>$q[15]</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>17</b></td><td><b>B</b></td><td>$q[16]</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>18</b></td><td><b>B</b></td><td>$q[17]</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>19</b></td><td><b>B</b></td><td>$q[18]</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>20</b></td><td><b>B</b></td><td>$q[19]</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>21</b></td><td><b>D</b></td><td>$q[20]</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>22</b></td><td><b>B</b></td><td>$q[21]</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>23</b></td><td><b>C</b></td><td>$q[22]</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>24</b></td><td><b>A</b></td><td>$q[23]</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>25</b></td><td><b>A</b></td><td>$q[24]</td></tr>";

echo "</table>";
echo "</center>"
  ?>
  </div>
   </body>
  </html>