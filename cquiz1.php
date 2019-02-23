<DOCTYPE! html>
 <html>
  <head>
   <title>C Quiz 1</title>
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
 if (document.phpquiz1.q21.value=="")
  {
    alert("Attempt Question Number 21");
  return false;
  }
  if (document.phpquiz1.q22.value=="")
  {
    alert("Attempt Question Number 22");
  return false;
  }
  if (document.phpquiz1.q23.value=="")
  {
    alert("Attempt Question Number 23");
  return false;
  }
  if (document.phpquiz1.q24.value=="")
  {
    alert("Attempt Question Number 24");
  return false;
  }
  if (document.phpquiz1.q25.value=="")
  {
    alert("Attempt Question Number 25");
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
<tr ><td style="color:yellow"><center><h1><b>C Language Quiz</b><h1></center></td></tr>
</table><hr><br><div class="part">
<form name="phpquiz1" action="cres1.php" onsubmit="return checkvalue()" method="POST">
  <h2> &nbsp; 1.) &nbsp;&nbsp; The precedence of arithmetic operators is (from highest to lowest)  </h2>
	   <input type="radio" name="q1" value="a" />&nbsp; a)&nbsp; %, *, /, +, –
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q1" value="b" />&nbsp; b)&nbsp; %, +, /, *, –
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q1" value="c" /> &nbsp;c)&nbsp; +, -, %, *, /
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q1" value="d" /> &nbsp;d)&nbsp; %, +, -, *, /
	   <br><br><br><br>
 <h2>  &nbsp; 2.) &nbsp;&nbsp; Which of the following is not an arithmetic operation?  </h2>
	    <input type="radio" name="q2" value="a" />&nbsp; a)&nbsp; a *= 10;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q2" value="b" />&nbsp; b)&nbsp; a /= 10;
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q2" value="c" /> &nbsp;c)&nbsp; a != 10;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q2" value="d" />&nbsp; d)&nbsp; a %= 10;
	   <br><br><br><br>
<h2>  &nbsp; 3.) &nbsp;&nbsp; Which of the following is not a valid variable name declaration?  </h2>
	   <input type="radio" name="q3" value="a" />&nbsp; a)&nbsp; int __a3;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q3" value="b" />&nbsp; b)&nbsp; int __3a;
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q3" value="c" /> &nbsp;c)&nbsp; int __A3;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q3" value="d" /> &nbsp;d)&nbsp; None of the mentioned
	   <br><br><br><br>
	   <h2>  &nbsp; 4.) &nbsp;&nbsp; All keywords in C are in  </h2>
	   <input type="radio" name="q4" value="a" />&nbsp; a)&nbsp; LowerCase letters
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q4" value="b" />&nbsp; b)&nbsp; UpperCase letters
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q4" value="c" /> &nbsp;c)&nbsp; CamelCase letters
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q4" value="d" /> &nbsp;d)&nbsp; None
	   <br><br><br><br>
	   <h2>  &nbsp; 5.) &nbsp;&nbsp; enum types are processed by  </h2>
	   <input type="radio" name="q5" value="a" />&nbsp; a)&nbsp; Compiler
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q5" value="b" />&nbsp; b)&nbsp; Preprocessor
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q5" value="c" /> &nbsp;c)&nbsp; Linker
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q5" value="d" /> &nbsp;d)&nbsp; Assembler
	   <br><br><br><br>
	   <h2>  &nbsp; 6.) &nbsp;&nbsp; Which of the following declaration is not supported by C?  </h2>
	   <input type="radio" name="q6" value="a" />&nbsp; a)&nbsp; String str;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q6" value="b" />&nbsp; b)&nbsp; char *str;
	   <br><br>
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q6" value="c" /> &nbsp;c)&nbsp; float str = 3e2;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q6" value="d" /> &nbsp;d)&nbsp; Both (a) and (c)
	   <br><br><br><br>
	   <h2>  &nbsp; 7.) &nbsp;&nbsp; Which among the following is NOT a logical or relational operator? </h2>
	   <input type="radio" name="q7" value="a" />&nbsp; a)&nbsp; !=
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q7" value="b" />&nbsp; b)&nbsp;  ==
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q7" value="c" /> &nbsp;c)&nbsp; ||
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q7" value="d" /> &nbsp;d)&nbsp; =
	   <br><br><br><br>
	   <h2>  &nbsp; 8.) &nbsp;&nbsp; #include <stdio.h> is called  </h2>
	   <input type="radio" name="q8" value="a" />&nbsp; a)&nbsp; Preprocessor directive
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q8" value="b" />&nbsp; b)&nbsp; Inclusion directive
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q8" value="c" /> &nbsp;c)&nbsp;  File inclusion directive
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q8" value="d" /> &nbsp;d)&nbsp; None of the mentioned
	   <br><br><br><br>
	   <h2>  &nbsp; 9.) &nbsp;&nbsp; C preprocessor is conceptually the first step during compilation  </h2>
	   <input type="radio" name="q9" value="a" />&nbsp; a)&nbsp; true
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q9" value="b" />&nbsp; b)&nbsp; false
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q9" value="c" /> &nbsp;c)&nbsp; Depends on the compiler
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q9" value="d" /> &nbsp;d)&nbsp; Depends on the standard
	   <br><br><br><br>
	   <h2>  &nbsp; 10.) &nbsp;&nbsp; What is the scope of an external variable?  </h2>
	   <input type="radio" name="q10" value="a" />&nbsp; a)&nbsp; Whole source file in which it is defined
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q10" value="b" />&nbsp; b)&nbsp; From the point of declaration to the end of the file in which it is defined
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q10" value="c" /> &nbsp;c)&nbsp; Any source file in a program
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q10" value="d" /> &nbsp;d)&nbsp; From the point of declaration to the end of the file being compiled
	   <br><br><br><br>
	   <h2>  &nbsp; 11.) &nbsp;&nbsp; Can function definition be present in header files?  </h2>
	   <input type="radio" name="q11" value="a" />&nbsp; a)&nbsp;  Yes
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q11" value="b" />&nbsp; b)&nbsp; No
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q11" value="c" /> &nbsp;c)&nbsp; Depends on the compiler
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q11" value="d" /> &nbsp;d)&nbsp; Depends on the standard
	   <br><br><br><br>
	   <h2>  &nbsp; 12.) &nbsp;&nbsp; What is the scope of a function?  </h2>
	   <input type="radio" name="q12" value="a" />&nbsp; a)&nbsp; Whole source file in which it is defined
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q12" value="b" />&nbsp; b)&nbsp; From the point of declaration to the end of the file in which it is defined
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q12" value="c" /> &nbsp;c)&nbsp; Any source file in a program
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q12" value="d" /> &nbsp;d)&nbsp; From the point of declaration to the end of the file being compiled
	   <br><br><br><br>
	   <h2>  &nbsp; 13.) &nbsp;&nbsp; Comment on the following pointer declaration? <br> int *ptr, p;  </h2>
	   <input type="radio" name="q13" value="a" />&nbsp; a)&nbsp;  ptr is a pointer to integer, p is not
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q13" value="b" />&nbsp; b)&nbsp; ptr and p, both are pointers to integer
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q13" value="c" /> &nbsp;c)&nbsp; ptr is a pointer to integer, p may or may not be
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q13" value="d" /> &nbsp;d)&nbsp; ptr and p both are not pointers to integer
	   <br><br><br><br>
	   <h2>  &nbsp; 14.) &nbsp;&nbsp; Which of the following cannot be static in C?  </h2>
	   <input type="radio" name="q14" value="a" />&nbsp; a)&nbsp; Variables
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q14" value="b" />&nbsp; b)&nbsp; Functions
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q14" value="c" /> &nbsp;c)&nbsp; Structures
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q14" value="d" /> &nbsp;d)&nbsp; None of the mentioned
	   <br><br><br><br>
	   <h2>  &nbsp; 15.) &nbsp;&nbsp; Which of the following uses structure?  </h2>
	   <input type="radio" name="q15" value="a" />&nbsp; a)&nbsp; Array of structures
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q15" value="b" />&nbsp; b)&nbsp; Linked Lists
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q15" value="c" /> &nbsp;c)&nbsp; Binary Tree
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q15" value="d" /> &nbsp;d)&nbsp; All of the mentioned
	   <br><br><br><br>
	   <h2>  &nbsp; 16.) &nbsp;&nbsp; Size of an array can be evaluated by: <br> (Assuming array declaration int a[10];)  </h2>
	   <input type="radio" name="q16" value="a" />&nbsp; a)&nbsp; sizeof(a);
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q16" value="b" />&nbsp; b)&nbsp; sizeof(*a);
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q16" value="c" /> &nbsp;c)&nbsp; sizeof(a[10]);
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q16" value="d" /> &nbsp;d)&nbsp; 10 * sizeof(a);
	   <br><br><br><br>
	   <h2>  &nbsp; 17.) &nbsp;&nbsp; Which of the following are themselves a collection of different data types? </h2>
	   <input type="radio" name="q17" value="a" />&nbsp; a)&nbsp; string
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q17" value="b" />&nbsp; b)&nbsp; structures
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q17" value="c" /> &nbsp;c)&nbsp; char
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q17" value="d" /> &nbsp;d)&nbsp; All of the mentioned
	   <br><br><br><br>
	   <h2>  &nbsp; 18.) &nbsp;&nbsp; User-defined data type can be derived by___________. </h2>
	   <input type="radio" name="q18" value="a" />&nbsp; a)&nbsp; struct
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q18" value="b" />&nbsp; b)&nbsp; enum
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q18" value="c" /> &nbsp;c)&nbsp;  typedef
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q18" value="d" /> &nbsp;d)&nbsp; All of the mentioned
	   <br><br><br><br>
	   <h2>  &nbsp; 19.) &nbsp;&nbsp; Which of the following cannot be a structure member?  </h2>
	   <input type="radio" name="q19" value="a" />&nbsp; a)&nbsp; Another structure
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q19" value="b" />&nbsp; b)&nbsp;  Function
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q19" value="c" /> &nbsp;c)&nbsp;  Array
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q19" value="d" /> &nbsp;d)&nbsp; None of the mentioned
	   <br><br><br><br>
	   <h2>  &nbsp; 20.) &nbsp;&nbsp; Size of a union is determined by size of the </h2>
	   <input type="radio" name="q20" value="a" />&nbsp; a)&nbsp; First member in the union
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q20" value="b" />&nbsp; b)&nbsp;  Last member in the union
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q20" value="c" /> &nbsp;c)&nbsp; Biggest member in the union
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q20" value="d" /> &nbsp;d)&nbsp; Sum of the sizes of all members
	   <br><br><br><br>
	   <h2>  &nbsp; 21.) &nbsp;&nbsp; Which among the following has the highest precedence?  </h2>
	   <input type="radio" name="q21" value="a" />&nbsp; a)&nbsp; &
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q21" value="b" />&nbsp; b)&nbsp; <<
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q21" value="c" /> &nbsp;c)&nbsp; sizeof()
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q21" value="d" /> &nbsp;d)&nbsp; &&
	   <br><br><br><br>
	   <h2>  &nbsp; 22.) &nbsp;&nbsp; Which statement can print \n on the screen?  </h2>
	   <input type="radio" name="q22" value="a" />&nbsp; a)&nbsp; printf("\\n");
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q22" value="b" />&nbsp; b)&nbsp; printf("n\");
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q22" value="c" /> &nbsp;c)&nbsp; printf("n");
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q22" value="d" /> &nbsp;d)&nbsp; printf('\n');
	   <br><br><br><br>
	   <h2>  &nbsp; 23.) &nbsp;&nbsp; When compiler accepts the request to use the variable as a register?  </h2>
	   <input type="radio" name="q23" value="a" />&nbsp; a)&nbsp;  It is stored in CPU
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q23" value="b" />&nbsp; b)&nbsp;  It is stored in cache memory
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q23" value="c" /> &nbsp;c)&nbsp;  It is stored in main memory
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q23" value="d" /> &nbsp;d)&nbsp; It is stored in secondary memory
	   <br><br><br><br>
	   <h2>  &nbsp; 24.) &nbsp;&nbsp; Which among the following is the correct syntax to declare a static variable register? </h2>
	   <input type="radio" name="q24" value="a" />&nbsp; a)&nbsp; static register a;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q24" value="b" />&nbsp; b)&nbsp; register static a;
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q24" value="c" /> &nbsp;c)&nbsp; Both (a) and (b)
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q24" value="d" /> &nbsp;d)&nbsp; We cannot use static and register together.
	   <br><br><br><br>
	   <h2>  &nbsp; 25.) &nbsp;&nbsp;  goto can be used to jump from main to within a function </h2>
	   <input type="radio" name="q25" value="a" />&nbsp; a)&nbsp; true
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q25" value="b" />&nbsp; b)&nbsp; false
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q25" value="c" /> &nbsp;c)&nbsp; Depends
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q25" value="d" /> &nbsp;d)&nbsp; Varies
	   
	   
	   <br><br><br><br><br><center> 
	  
	   <input type="submit" value="Submit Test" style="width:150px;height:50px;color:white;background-color:black" />
	   </center>
</div>	   
</form>
   </body>
  </html>