<DOCTYPE! html>
 <html>
  <head>
   <title>Java Quiz 1</title>
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
  <a href="logout.php"><img class="out" src="out.png" style="width:109px;height:42px;"></a>
  <a href="dash.php"><img class="dash" src="dashbut.png" style="width:109px;height:42px;"></a>
  <a href="home.php"><img class="a" src="TT.png" style="width:100px;height:75px;"></a>
  <table width="100%" border="0" bgcolor="blue" height="60px" >
<tr ><td style="color:yellow"><center><h1><b>Java Quiz</b><h1></center></td></tr>
</table><hr><br><div class="part">
<form name="phpquiz1" action="javares1.php" onsubmit="return checkvalue()" method="POST">
  <h2> &nbsp; 1.) &nbsp;&nbsp; Arrays in Java are implemented as?  </h2>
	   <input type="radio" name="q1" value="a" />&nbsp; a)&nbsp; class
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q1" value="b" />&nbsp; b)&nbsp; object
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q1" value="c" /> &nbsp;c)&nbsp; variable
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q1" value="d" /> &nbsp;d)&nbsp; None of the mentioned
	   <br><br><br><br>
 <h2>  &nbsp; 2.) &nbsp;&nbsp; Which of these keywords is used to prevent content of a variable from being modified?  </h2>
	    <input type="radio" name="q2" value="a" />&nbsp; a)&nbsp; final
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q2" value="b" />&nbsp; b)&nbsp; last
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q2" value="c" /> &nbsp;c)&nbsp; constant
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q2" value="d" />&nbsp; d)&nbsp;  static
	   <br><br><br><br>
<h2>  &nbsp; 3.) &nbsp;&nbsp; Which of these cannot be declared static?  </h2>
	   <input type="radio" name="q3" value="a" />&nbsp; a)&nbsp; class
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q3" value="b" />&nbsp; b)&nbsp; object
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q3" value="c" /> &nbsp;c)&nbsp; variable
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q3" value="d" /> &nbsp;d)&nbsp; method
	   <br><br><br><br>
	   <h2>  &nbsp; 4.) &nbsp;&nbsp; Which of the following statements are incorrect?  </h2>
	   <input type="radio" name="q4" value="a" />&nbsp; a)&nbsp; static methods can call other static methods only.
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q4" value="b" />&nbsp; static methods must only access static data.
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q4" value="c" /> &nbsp;c)&nbsp; static methods can not refer to this or super in any way.
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q4" value="d" /> &nbsp;d)&nbsp; when object of class is declared, each object contains its own copy of static variables.
	   <br><br><br><br>
	   <h2>  &nbsp; 5.) &nbsp;&nbsp; Which of these methods must be made static?  </h2>
	   <input type="radio" name="q5" value="a" />&nbsp; a)&nbsp; main()
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q5" value="b" />&nbsp; b)&nbsp; delete()
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q5" value="c" /> &nbsp;c)&nbsp; run()
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q5" value="d" /> &nbsp;d)&nbsp; finalize()
	   <br><br><br><br>
	   <h2>  &nbsp; 6.) &nbsp;&nbsp; Which of these keywords is used to refer to member of base class from a sub class?  </h2>
	   <input type="radio" name="q6" value="a" />&nbsp; a)&nbsp; upper
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q6" value="b" />&nbsp; b)&nbsp;  super
	   <br><br>
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q6" value="c" /> &nbsp;c)&nbsp;  this
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q6" value="d" /> &nbsp;d)&nbsp; None of the mentioned
	   <br><br><br><br>
	   <h2>  &nbsp; 7.) &nbsp;&nbsp; Which of the following loops will execute the body of loop even when condition controlling the loop is initially false?  </h2>
	   <input type="radio" name="q7" value="a" />&nbsp; a)&nbsp; do-while
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q7" value="b" />&nbsp; b)&nbsp; while
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q7" value="c" /> &nbsp;c)&nbsp; for
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q7" value="d" /> &nbsp;d)&nbsp; None of the mentioned
	   <br><br><br><br>
	   <h2>  &nbsp; 8.) &nbsp;&nbsp; Which method can be defined only once in a program?  </h2>
	   <input type="radio" name="q8" value="a" />&nbsp; a)&nbsp; main method
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q8" value="b" />&nbsp; b)&nbsp; finalize method
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q8" value="c" /> &nbsp;c)&nbsp; static method
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q8" value="d" /> &nbsp;d)&nbsp; private method
	   <br><br><br><br>
	   <h2>  &nbsp; 9.) &nbsp;&nbsp; Which keyword is used by method to refer to the object that invoked it?  </h2>
	   <input type="radio" name="q9" value="a" />&nbsp; a)&nbsp; import
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q9" value="b" />&nbsp; b)&nbsp; catch
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q9" value="c" /> &nbsp;c)&nbsp;  abstract
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q9" value="d" /> &nbsp;d)&nbsp; this
	   <br><br><br><br>
	   <h2>  &nbsp; 10.) &nbsp;&nbsp; Which of the following is a method having same name as that of its class?  </h2>
	   <input type="radio" name="q10" value="a" />&nbsp; a)&nbsp; finalize
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q10" value="b" />&nbsp; b)&nbsp; delete
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q10" value="c" /> &nbsp;c)&nbsp; class
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q10" value="d" /> &nbsp;d)&nbsp; constructor
	   <br><br><br><br>
	   <h2>  &nbsp; 11.) &nbsp;&nbsp; Which function is used to perform some action when the object is to be destroyed?  </h2>
	   <input type="radio" name="q11" value="a" />&nbsp; a)&nbsp; finalize()
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q11" value="b" />&nbsp; b)&nbsp; delete()
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q11" value="c" /> &nbsp;c)&nbsp; main()
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q11" value="d" /> &nbsp;d)&nbsp; None of the mentioned
	   <br><br><br><br>
	   <h2>  &nbsp; 12.) &nbsp;&nbsp; Which of these class is used to make a thread?  </h2>
	   <input type="radio" name="q12" value="a" />&nbsp; a)&nbsp; String
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q12" value="b" />&nbsp; b)&nbsp; System
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q12" value="c" /> &nbsp;c)&nbsp;  Thread
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q12" value="d" /> &nbsp;d)&nbsp; Runnable
	   <br><br><br><br>
	   <h2>  &nbsp; 13.) &nbsp;&nbsp; Which of these interface is implemented by Thread class?  </h2>
	   <input type="radio" name="q13" value="a" />&nbsp; a)&nbsp; Runnable
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q13" value="b" />&nbsp; b)&nbsp; Connections
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q13" value="c" /> &nbsp;c)&nbsp; Set
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q13" value="d" /> &nbsp;d)&nbsp; MapConnections
	   <br><br><br><br>
	   <h2>  &nbsp; 14.) &nbsp;&nbsp; Which of these method is given parameter via command line arguments?</h2>
	   <input type="radio" name="q14" value="a" />&nbsp; a)&nbsp; main().
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q14" value="b" />&nbsp; b)&nbsp; recursive() method.
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q14" value="c" /> &nbsp;c)&nbsp; Any method.
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q14" value="d" /> &nbsp;d)&nbsp; System defined methods.
	   <br><br><br><br>
	   <h2>  &nbsp; 15.) &nbsp;&nbsp; Which of these is a correct statement about args in this line of code? <br> public static viod main(String args[])  </h2>
	   <input type="radio" name="q15" value="a" />&nbsp; a)&nbsp; args is a String
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q15" value="b" />&nbsp; b)&nbsp; args is a Character.
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q15" value="c" /> &nbsp;c)&nbsp; args is an array of String.
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q15" value="d" /> &nbsp;d)&nbsp; args in an array of Character.
	   <br><br><br><br>
	   <h2>  &nbsp; 16.) &nbsp;&nbsp; Which of these package is used for graphical user interface?  </h2>
	   <input type="radio" name="q16" value="a" />&nbsp; a)&nbsp; java.applet
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q16" value="b" />&nbsp; b)&nbsp; java.awt
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q16" value="c" /> &nbsp;c)&nbsp; java.awt.image
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q16" value="d" /> &nbsp;d)&nbsp; java.io
	   <br><br><br><br>
	   <h2>  &nbsp; 17.) &nbsp;&nbsp; Which of these is used to access member of class before object of that class is created?  </h2>
	   <input type="radio" name="q17" value="a" />&nbsp; a)&nbsp; public
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q17" value="b" />&nbsp; b)&nbsp;  private
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q17" value="c" /> &nbsp;c)&nbsp; static
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q17" value="d" /> &nbsp;d)&nbsp; protected
	   <br><br><br><br>
	   <h2>  &nbsp; 18.) &nbsp;&nbsp; What is the process by which we can control what parts of a program can access the members of a class?  </h2>
	   <input type="radio" name="q18" value="a" />&nbsp; a)&nbsp; Polymorphism
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q18" value="b" />&nbsp; b)&nbsp; Abstraction
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q18" value="c" /> &nbsp;c)&nbsp; Encapsulation
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q18" value="d" /> &nbsp;d)&nbsp; Recursion
	   <br><br><br><br>
	   <h2>  &nbsp; 19.) &nbsp;&nbsp;  Which of these methods can be used to search an element in a list? </h2>
	   <input type="radio" name="q19" value="a" />&nbsp; a)&nbsp; find()
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q19" value="b" />&nbsp; b)&nbsp; sort()
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q19" value="c" /> &nbsp;c)&nbsp; get()
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q19" value="d" /> &nbsp;d)&nbsp; binaryserach()
	   <br><br><br><br>
	   <h2>  &nbsp; 20.) &nbsp;&nbsp; Which of these can be used to fully abstract a class from its implementation?  </h2>
	   <input type="radio" name="q20" value="a" />&nbsp; a)&nbsp; Objects
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q20" value="b" />&nbsp; b)&nbsp;  Packages
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q20" value="c" /> &nbsp;c)&nbsp; Interfaces
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q20" value="d" /> &nbsp;d)&nbsp; None of the Mentioned.
	   <br><br><br><br>
	   <h2>  &nbsp; 21.) &nbsp;&nbsp; Which of these keywords is used by a class to use an interface defined previously?  </h2>
	   <input type="radio" name="q21" value="a" />&nbsp; a)&nbsp; import
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q21" value="b" />&nbsp; b)&nbsp; Import <br><br>
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q21" value="c" /> &nbsp;c)&nbsp; implements
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q21" value="d" /> &nbsp;d)&nbsp; Implements
	   <br><br><br><br>
	   <h2>  &nbsp; 22.) &nbsp;&nbsp; Which of the following package stores all the standard java classes?  </h2>
	   <input type="radio" name="q22" value="a" />&nbsp; a)&nbsp; lang
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q22" value="b" />&nbsp; b)&nbsp;  java
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q22" value="c" /> &nbsp;c)&nbsp; util
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q22" value="d" /> &nbsp;d)&nbsp; java.packages
	   <br><br><br><br>
	   <h2>  &nbsp; 23.) &nbsp;&nbsp; Which of these keyword can be used in subclass to call the constructor of superclass?  </h2>
	   <input type="radio" name="q23" value="a" />&nbsp; a)&nbsp;  super
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q23" value="b" />&nbsp; b)&nbsp; this
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q23" value="c" /> &nbsp;c)&nbsp;  extent
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q23" value="d" /> &nbsp;d)&nbsp; extends
	   <br><br><br><br>
	   <h2>  &nbsp; 24.) &nbsp;&nbsp; Which of the following statements are incorrect? </h2>
	   <input type="radio" name="q24" value="a" />&nbsp; a)&nbsp; public members of class can be accessed by any code in the program.
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q24" value="b" />&nbsp; b)&nbsp; private members of class can only be accessed by other members of the class.
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q24" value="c" /> &nbsp;c)&nbsp; private members of class can be inherited by a sub class, and become protected members in sub class.
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q24" value="d" /> &nbsp;d)&nbsp; protected members of a class can be inherited by a sub class, and become private members of the sub class.
	   <br><br><br><br>
	   <h2>  &nbsp; 25.) &nbsp;&nbsp; How many bits are in a single IP address? </h2>
	   <input type="radio" name="q25" value="a" />&nbsp; a)&nbsp; 8
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q25" value="b" />&nbsp; b)&nbsp; 16
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q25" value="c" /> &nbsp;c)&nbsp; 32
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q25" value="d" /> &nbsp;d)&nbsp; 64
	   
	   <br><br><br><br><br><center> 
	  
	   <input type="submit" value="Submit Test" style="width:150px;height:50px;color:white;background-color:black" />
	   </center>
</div>	   
</form>
   </body>
  </html>