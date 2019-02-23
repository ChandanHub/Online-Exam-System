<DOCTYPE! html>
 <html>
  <head>
   <title>DS Quiz 1</title>
   <style>
   img.a {
    position: absolute;
    left: 2px;
    top: 2px;
    z-index: +1;
}
h2 {
    color: MidnightBlue;
    text-align: left;
}

p {
    font-family: verdana;
    font-size: 20px;
}
body {
    background-color: OldLace;
}
div.part {
	position: static;
	height: 3800px;
    width: 70%;
    border: 1px solid yellow;
    background-color:white;
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
   <script language="javascript" type="text/javascript" >
   function checkvalue()
   {
   if (document.phpquiz1.q1.value=="")
  {
    alert("Attempt Question Number 1");
  return false;
  }
  if (document.phpquiz1.q2.value=="")
  {
    alert("Attempt Question Number 2");
  return false;
  }
  if (document.phpquiz1.q3.value=="")
  {
    alert("Attempt Question Number 3");
  return false;
  }
  if (document.phpquiz1.q4.value=="")
  {
    alert("Attempt Question Number 4");
  return false;
  }
  if (document.phpquiz1.q5.value=="")
  {
    alert("Attempt Question Number 5");
  return false;
  }
  if (document.phpquiz1.q6.value=="")
  {
    alert("Attempt Question Number 6");
  return false;
  }
  if (document.phpquiz1.q7.value=="")
  {
    alert("Attempt Question Number 7");
  return false;
  }
  if (document.phpquiz1.q8.value=="")
  {
    alert("Attempt Question Number 8");
  return false;
  }
  if (document.phpquiz1.q9.value=="")
  {
    alert("Attempt Question Number 9");
  return false;
  }
  if (document.phpquiz1.q10.value=="")
  {
    alert("Attempt Question Number 10");
  return false;
  }
  if (document.phpquiz1.q11.value=="")
  {
    alert("Attempt Question Number 11");
  return false;
  }
  if (document.phpquiz1.q12.value=="")
  {
    alert("Attempt Question Number 12");
  return false;
  }
  if (document.phpquiz1.q13.value=="")
  {
    alert("Attempt Question Number 13");
  return false;
  }
  if (document.phpquiz1.q14.value=="")
  {
    alert("Attempt Question Number 14");
  return false;
  }
  if (document.phpquiz1.q15.value=="")
  {
    alert("Attempt Question Number 15");
  return false;
  }
  if (document.phpquiz1.q16.value=="")
  {
    alert("Attempt Question Number 16");
  return false;
  }
  if (document.phpquiz1.q17.value=="")
  {
    alert("Attempt Question Number 17");
  return false;
  }
  if (document.phpquiz1.q18.value=="")
  {
    alert("Attempt Question Number 18");
  return false;
  }
  if (document.phpquiz1.q19.value=="")
  {
    alert("Attempt Question Number 19");
  return false;
  }
  if (document.phpquiz1.q20.value=="")
  {
    alert("Attempt Question Number 20");
  return false;
  }
 
  
  
   }
    </script>
  </head >
  <body style="color:Navy" >
  <a href="home.php"><img class="a" src="TT.png" style="width:100px;height:75px;"></a>
    <a href="logout.php"><img class="out" src="out.png" style="width:109px;height:42px;"></a>
  <a href="dash.php"><img class="dash" src="dashbut.png" style="width:109px;height:42px;"></a>
  <table width="100%" border="0" bgcolor="blue" height="60px" >
<tr ><td style="color:yellow"><center><h1><b>Data Structures Quiz</b><h1></center></td></tr>
</table><hr><br><div class="part">
<form name="phpquiz1" action="dsres1.php" onsubmit="return checkvalue()" method="POST">
  <h2> &nbsp; 1.) &nbsp;&nbsp; PHP files have a default file extension of..  </h2>
	   <input type="radio" name="q1" value="a" />&nbsp; a)&nbsp; .html
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q1" value="b" />&nbsp; b)&nbsp; .xml
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q1" value="c" /> &nbsp;c)&nbsp; .php
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q1" value="d" /> &nbsp;d)&nbsp; PHP 6
	   <br><br><br><br>
 <h2>  &nbsp; 2.) &nbsp;&nbsp; Which version of PHP introduced Try/catch Exception?  </h2>
	    <input type="radio" name="q2" value="a" />&nbsp; a)&nbsp;PHP 4
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q2" value="b" />&nbsp; b)&nbsp;PHP 5
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q2" value="c" /> &nbsp;c)&nbsp; PHP 5.3
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q2" value="d" />&nbsp; d)&nbsp; .ph
	   <br><br><br><br>
<h2>  &nbsp; 3.) &nbsp;&nbsp; Which of the below statements is equivalent to $add += $add ?  </h2>
	   <input type="radio" name="q3" value="a" />&nbsp; a)&nbsp; $add = $add
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q3" value="b" />&nbsp; b)&nbsp; $add = $add +$add
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q3" value="c" /> &nbsp;c)&nbsp; $add = $add + 1
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q3" value="d" /> &nbsp;d)&nbsp; $add = $add + $add + 1
	   <br><br><br><br>
	   <h2>  &nbsp; 4.) &nbsp;&nbsp; Which statement will output $x on the screen?  </h2>
	   <input type="radio" name="q4" value="a" />&nbsp; a)&nbsp; echo “\$x”;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q4" value="b" />&nbsp; b)&nbsp; echo “$$x”;
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q4" value="c" /> &nbsp;c)&nbsp; echo “/$x”;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q4" value="d" /> &nbsp;d)&nbsp; echo “$x;”;
	   <br><br><br><br>
	   <h2>  &nbsp; 5.) &nbsp;&nbsp; If $a = 12 what will be returned when ($a == 12) ?5 : 1 is executed?  </h2>
	   <input type="radio" name="q5" value="a" />&nbsp; a)&nbsp; 12
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q5" value="b" />&nbsp; b)&nbsp; 1
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q5" value="c" /> &nbsp;c)&nbsp; Error
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q5" value="d" /> &nbsp;d)&nbsp; 5
	   <br><br><br><br>
	   <h2>  &nbsp; 6.) &nbsp;&nbsp; Which one of the following is the right way of defining a function in PHP?  </h2>
	   <input type="radio" name="q6" value="a" />&nbsp; a)&nbsp; function { function body }
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q6" value="b" />&nbsp; b)&nbsp; data type functionName(parameters) { function body }
	   <br><br>
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q6" value="c" /> &nbsp;c)&nbsp; functionName(parameters) { function body }
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q6" value="d" /> &nbsp;d)&nbsp; function fumctionName(parameters) { function body }
	   <br><br><br><br>
	   <h2>  &nbsp; 7.) &nbsp;&nbsp; Which of the following PHP functions can be used for generating unique id’s?  </h2>
	   <input type="radio" name="q7" value="a" />&nbsp; a)&nbsp; uniqueid()
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q7" value="b" />&nbsp; b)&nbsp; id()
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q7" value="c" /> &nbsp;c)&nbsp; md5()
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q7" value="d" /> &nbsp;d)&nbsp; mdid()
	   <br><br><br><br>
	   <h2>  &nbsp; 8.) &nbsp;&nbsp; Which function will return true if a variable is an array or false if it is not?  </h2>
	   <input type="radio" name="q8" value="a" />&nbsp; a)&nbsp; this_array()
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q8" value="b" />&nbsp; b)&nbsp; is_array()
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q8" value="c" /> &nbsp;c)&nbsp; do_array()
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q8" value="d" /> &nbsp;d)&nbsp; in_array()
	   <br><br><br><br>
	   <h2>  &nbsp; 9.) &nbsp;&nbsp; Which in-built function will add a value to the end of an array?  </h2>
	   <input type="radio" name="q9" value="a" />&nbsp; a)&nbsp; array_unshift()
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q9" value="b" />&nbsp; b)&nbsp; into_array()
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q9" value="c" /> &nbsp;c)&nbsp; inend_array()
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q9" value="d" /> &nbsp;d)&nbsp; array_push()
	   <br><br><br><br>
	   <h2>  &nbsp; 10.) &nbsp;&nbsp; Which of the functions is used to sort an array in descending order?  </h2>
	   <input type="radio" name="q10" value="a" />&nbsp; a)&nbsp; sort()
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q10" value="b" />&nbsp; b)&nbsp; asort()
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q10" value="c" /> &nbsp;c)&nbsp; rsort()
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q10" value="d" /> &nbsp;d)&nbsp; dsort()
	   <br><br><br><br>
	   <h2>  &nbsp; 11.) &nbsp;&nbsp; The practice of separating the user from the true inner workings of an application through well-known interfaces is known as..  </h2>
	   <input type="radio" name="q11" value="a" />&nbsp; a)&nbsp; Polymorphism
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q11" value="b" />&nbsp; b)&nbsp; Inheritance
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q11" value="c" /> &nbsp;c)&nbsp; Encapsulation
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q11" value="d" /> &nbsp;d)&nbsp; Abstraction
	   <br><br><br><br>
	   <h2>  &nbsp; 12.) &nbsp;&nbsp; Which of the following term originates from the Greek language that means “having multiple forms,” defines OOP’s ability to redefine, a class’s characteristics?  </h2>
	   <input type="radio" name="q12" value="a" />&nbsp; a)&nbsp; Abstraction
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q12" value="b" />&nbsp; b)&nbsp; Polymorphism
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q12" value="c" /> &nbsp;c)&nbsp; Inheritance
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q12" value="d" /> &nbsp;d)&nbsp; Differential
	   <br><br><br><br>
	   <h2>  &nbsp; 13.) &nbsp;&nbsp; Which one of the following property scopes is not supported by PHP?  </h2>
	   <input type="radio" name="q13" value="a" />&nbsp; a)&nbsp; friendly
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q13" value="b" />&nbsp; b)&nbsp; final
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q13" value="c" /> &nbsp;c)&nbsp; public
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q13" value="d" /> &nbsp;d)&nbsp; static
	   <br><br><br><br>
	   <h2>  &nbsp; 14.) &nbsp;&nbsp; Which one of the following is the right way to invoke a method?  </h2>
	   <input type="radio" name="q14" value="a" />&nbsp; a)&nbsp; $object->methodName();
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q14" value="b" />&nbsp; b)&nbsp; object->methodName();
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q14" value="c" /> &nbsp;c)&nbsp; object::methodName();
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q14" value="d" /> &nbsp;d)&nbsp; $object::methodName();
	   <br><br><br><br>
	   <h2>  &nbsp; 15.) &nbsp;&nbsp; When you use the $_POST variable to collect data, the data is visible to..  </h2>
	   <input type="radio" name="q15" value="a" />&nbsp; a)&nbsp; none
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q15" value="b" />&nbsp; b)&nbsp; only you
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q15" value="c" /> &nbsp;c)&nbsp; everyone
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q15" value="d" /> &nbsp;d)&nbsp; selected few
	   <br><br><br><br>
	   <h2>  &nbsp; 16.) &nbsp;&nbsp; Which variable is used to collect form data sent with both the GET and POST methods?  </h2>
	   <input type="radio" name="q16" value="a" />&nbsp; a)&nbsp; $BOTH
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q16" value="b" />&nbsp; b)&nbsp; $_BOTH
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q16" value="c" /> &nbsp;c)&nbsp; $REQUEST
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q16" value="d" /> &nbsp;d)&nbsp; $_REQUEST
	   <br><br><br><br>
	   <h2>  &nbsp; 17.) &nbsp;&nbsp; The date() function returns ___ representation of the current date and/or time.  </h2>
	   <input type="radio" name="q17" value="a" />&nbsp; a)&nbsp; Integer
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q17" value="b" />&nbsp; b)&nbsp; String
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q17" value="c" /> &nbsp;c)&nbsp; Boolean
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q17" value="d" /> &nbsp;d)&nbsp; Float
	   <br><br><br><br>
	   <h2>  &nbsp; 18.) &nbsp;&nbsp; Which one of the following function is useful for producing a timestamp based on a given date and time.  </h2>
	   <input type="radio" name="q18" value="a" />&nbsp; a)&nbsp; time()
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q18" value="b" />&nbsp; b)&nbsp; mktime()
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q18" value="c" /> &nbsp;c)&nbsp; mrtime()
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q18" value="d" /> &nbsp;d)&nbsp; mtime()
	   <br><br><br><br>
	   <h2>  &nbsp; 19.) &nbsp;&nbsp; The filesize() function returns the file size in ___.  </h2>
	   <input type="radio" name="q19" value="a" />&nbsp; a)&nbsp; bits
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q19" value="b" />&nbsp; b)&nbsp; bytes
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q19" value="c" /> &nbsp;c)&nbsp; kilobytes
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q19" value="d" /> &nbsp;d)&nbsp; gigabytes
	   <br><br><br><br>
	   <h2>  &nbsp; 20.) &nbsp;&nbsp; Which one of the following function outputs the contents of a string variable to the specified resource?  </h2>
	   <input type="radio" name="q20" value="a" />&nbsp; a)&nbsp; filewrite()
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q20" value="b" />&nbsp; b)&nbsp; fwrite()
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q20" value="c" /> &nbsp;c)&nbsp; filewrites()
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q20" value="d" /> &nbsp;d)&nbsp; fwrites()
	   
	   
	   
	   <br><br><br><br><br><center> 
	  
	   <input type="submit" value="Submit Test" style="width:150px;height:50px;color:white;background-color:black" />
	   </center>
</div>	   
</form>
   </body>
  </html>