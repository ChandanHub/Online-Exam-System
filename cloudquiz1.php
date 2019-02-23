<DOCTYPE! html>
 <html>
  <head>
   <title>Cloud Quiz 1</title>
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
<tr ><td style="color:yellow"><center><h1><b>Cloud Computing Quiz</b><h1></center></td></tr>
</table><hr><br><div class="part">
<form name="phpquiz1" action="cloudres1.php" onsubmit="return checkvalue()" method="POST">
  <h2> &nbsp; 1.) &nbsp;&nbsp; Which of the following is a virtual machine technology now owned by Oracle that can run various operating systems ?  </h2>
	   <input type="radio" name="q1" value="a" />&nbsp; a)&nbsp; Vmachines
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q1" value="b" />&nbsp; b)&nbsp; VirtualBox
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q1" value="c" /> &nbsp;c)&nbsp; ThoughtPolice
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q1" value="d" /> &nbsp;d)&nbsp; None of the mentioned
	   <br><br><br><br>
 <h2>  &nbsp; 2.) &nbsp;&nbsp; Point out the correct statement :  </h2>
	    <input type="radio" name="q2" value="a" />&nbsp; a)&nbsp; JumpIt is an open-source virtual appliance installation and management service
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q2" value="b" />&nbsp; b)&nbsp; Converting a virtual appliance from one platform to another is easy proposition
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q2" value="c" /> &nbsp;c)&nbsp; Nearly all major virtualization platform vendors support OVF, notably VMware, Microsoft, Oracle, and Citrix
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q2" value="d" />&nbsp; d)&nbsp; All of the mentioned
	   <br><br><br><br>
<h2>  &nbsp; 3.) &nbsp;&nbsp; Which of the following lets a Web service advertise itself in terms of a collection of endpoints ?  </h2>
	   <input type="radio" name="q3" value="a" />&nbsp; a)&nbsp; WSDL
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q3" value="b" />&nbsp; b)&nbsp;  VMc
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q3" value="c" /> &nbsp;c)&nbsp;  SOAP
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q3" value="d" /> &nbsp;d)&nbsp; All of the mentioned
	   <br><br><br><br>
	   <h2>  &nbsp; 4.) &nbsp;&nbsp; Which of the following is a specification for multicast discovery on a LAN ?  </h2>
	   <input type="radio" name="q4" value="a" />&nbsp; a)&nbsp; WS-Agent
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q4" value="b" />&nbsp; b)&nbsp; WS-Discovery
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q4" value="c" /> &nbsp;c)&nbsp; WS-SOAP
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q4" value="d" /> &nbsp;d)&nbsp; All of the mentioned
	   <br><br><br><br>
	   <h2>  &nbsp; 5.) &nbsp;&nbsp; Point out the wrong statement :  </h2>
	   <input type="radio" name="q5" value="a" />&nbsp; a)&nbsp; Cloud computing arises from services available over the Internet communicating
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q5" value="b" />&nbsp; b)&nbsp; XML-RPC uses platform-independent XML data to encode program calls that are transported over HTTP
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q5" value="c" /> &nbsp;c)&nbsp; SOAP uses JSON for its messages and uses RPC and HTTP for message passing
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q5" value="d" /> &nbsp;d)&nbsp; None of the mentioned
	   <br><br><br><br>
	   <h2>  &nbsp; 6.) &nbsp;&nbsp; _________ as a Service is a cloud computing infrastructure that creates a development environment upon which applications may be build.  </h2>
	   <input type="radio" name="q6" value="a" />&nbsp; a)&nbsp; Infrastructure
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q6" value="b" />&nbsp; b)&nbsp; Service
	   <br><br>
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q6" value="c" /> &nbsp;c)&nbsp; Platform
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q6" value="d" /> &nbsp;d)&nbsp; All of the mentioned
	   <br><br><br><br>
	   <h2>  &nbsp; 7.) &nbsp;&nbsp; _________ is a cloud computing service model in which hardware is virtualized in the cloud.  </h2>
	   <input type="radio" name="q7" value="a" />&nbsp; a)&nbsp; IaaS
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q7" value="b" />&nbsp; b)&nbsp; CaaS
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q7" value="c" /> &nbsp;c)&nbsp;  PaaS
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q7" value="d" /> &nbsp;d)&nbsp; None of the mentioned
	   <br><br><br><br>
	   <h2>  &nbsp; 8.) &nbsp;&nbsp; Which of the following is fundamental unit of virtualized client in an IaaS deployment ?  </h2>
	   <input type="radio" name="q8" value="a" />&nbsp; a)&nbsp;  workunit
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q8" value="b" />&nbsp; b)&nbsp; workspace
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q8" value="c" /> &nbsp;c)&nbsp; workload
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q8" value="d" /> &nbsp;d)&nbsp;All of the mentioned
	   <br><br><br><br>
	   <h2>  &nbsp; 9.) &nbsp;&nbsp; How many types of virtual private server instances are partitioned in an IaaS stack ?  </h2>
	   <input type="radio" name="q9" value="a" />&nbsp; a)&nbsp; one
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q9" value="b" />&nbsp; b)&nbsp;  two
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q9" value="c" /> &nbsp;c)&nbsp;  three
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q9" value="d" /> &nbsp;d)&nbsp; All of the mentioned
	   <br><br><br><br>
	   <h2>  &nbsp; 10.) &nbsp;&nbsp; Point out the wrong statement :  </h2>
	   <input type="radio" name="q10" value="a" />&nbsp; a)&nbsp; Abstraction enables the key benefit of cloud computing: shared, ubiquitous access<br>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q10" value="b" />&nbsp; b)&nbsp; Virtualization assigns a logical name for a physical resource and then provides a pointer to that physical resource when a request is made <br>
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q10" value="c" /> &nbsp;c)&nbsp; All cloud computing applications combine their resources into pools that can be assigned on demand to user<br>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q10" value="d" /> &nbsp;d)&nbsp; All of the mentioned
	   <br><br><br><br>
	   <h2>  &nbsp; 11.) &nbsp;&nbsp; Which of the following type of virtualization is also characteristic of cloud computing ?  </h2>
	   <input type="radio" name="q11" value="a" />&nbsp; a)&nbsp;  Storage
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q11" value="b" />&nbsp; b)&nbsp; Application
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q11" value="c" /> &nbsp;c)&nbsp;  CPU
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q11" value="d" /> &nbsp;d)&nbsp; All of the mentioned
	   <br><br><br><br>
	   <h2>  &nbsp; 12.) &nbsp;&nbsp; The technology used to distribute service requests to resources is referred to as :  </h2>
	   <input type="radio" name="q12" value="a" />&nbsp; a)&nbsp; load performing
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q12" value="b" />&nbsp; b)&nbsp; load scheduling
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q12" value="c" /> &nbsp;c)&nbsp; load balancing
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q12" value="d" /> &nbsp;d)&nbsp; All of the mentioned
	   <br><br><br><br>
	   <h2>  &nbsp; 13.) &nbsp;&nbsp; Point out the correct statement :  </h2>
	   <input type="radio" name="q13" value="a" />&nbsp; a)&nbsp; A client can request access to a cloud service from any location <br>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q13" value="b" />&nbsp; b)&nbsp; A cloud has multiple application instances and directs requests to an instance based on conditions <br>
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q13" value="c" /> &nbsp;c)&nbsp; Computers can be partitioned into a set of virtual machines with each machine being assigned a workload <br>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q13" value="d" /> &nbsp;d)&nbsp; All of the mentioned
	   <br><br><br><br>
	   <h2>  &nbsp; 14.) &nbsp;&nbsp; Which of the following software can be used to implement load balancing ?  </h2>
	   <input type="radio" name="q14" value="a" />&nbsp; a)&nbsp; Apache mod_balancer
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q14" value="b" />&nbsp; b)&nbsp; Apache mod_proxy_balancer
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q14" value="c" /> &nbsp;c)&nbsp; F6’s BigIP
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q14" value="d" /> &nbsp;d)&nbsp; All of the mentioned
	   <br><br><br><br>
	   <h2>  &nbsp; 15.) &nbsp;&nbsp; Which of the following network resources can be load balanced ?  </h2>
	   <input type="radio" name="q15" value="a" />&nbsp; a)&nbsp; Connections through intelligent switches
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q15" value="b" />&nbsp; b)&nbsp; DNS
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q15" value="c" /> &nbsp;c)&nbsp; Storage resources
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q15" value="d" /> &nbsp;d)&nbsp; All of the mentioned
	   <br><br><br><br>
	   <h2>  &nbsp; 16.) &nbsp;&nbsp; Which of the following is a more sophisticated load balancer ?  </h2>
	   <input type="radio" name="q16" value="a" />&nbsp; a)&nbsp; workload managers
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q16" value="b" />&nbsp; b)&nbsp; workspace managers
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q16" value="c" /> &nbsp;c)&nbsp; rackserve managers
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q16" value="d" /> &nbsp;d)&nbsp; All of the mentioned
	   <br><br><br><br>
	   <h2>  &nbsp; 17.) &nbsp;&nbsp; Which of the following service provider provides the least amount of built in security ?  </h2>
	   <input type="radio" name="q17" value="a" />&nbsp; a)&nbsp; SaaS
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q17" value="b" />&nbsp; b)&nbsp;  PaaS
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q17" value="c" /> &nbsp;c)&nbsp;  IaaS
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q17" value="d" /> &nbsp;d)&nbsp; All of the mentioned
	   <br><br><br><br>
	   <h2>  &nbsp; 18.) &nbsp;&nbsp; Point out the correct statement:  </h2>
	   <input type="radio" name="q18" value="a" />&nbsp; a)&nbsp; Different types of cloud computing service models provide different levels of security services <br>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q18" value="b" />&nbsp; b)&nbsp; Adapting your on-premises systems to a cloud model requires that you determine what security mechanisms are required and mapping those to controls that exist in your chosen cloud service provider <br>
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q18" value="c" /> &nbsp;c)&nbsp; Data should be transferred and stored in an encrypted format for security purpose <br>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q18" value="d" /> &nbsp;d)&nbsp; All of the mentioned
	   <br><br><br><br>
	   <h2>  &nbsp; 19.) &nbsp;&nbsp; Which of the following services that need to be negotiated in Service Level Agreements ?  </h2>
	   <input type="radio" name="q19" value="a" />&nbsp; a)&nbsp; Logging
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q19" value="b" />&nbsp; b)&nbsp;  Auditing
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q19" value="c" /> &nbsp;c)&nbsp; Regulatory compliance
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q19" value="d" /> &nbsp;d)&nbsp; All of the mentioned
	   <br><br><br><br>
	   <h2>  &nbsp; 20.) &nbsp;&nbsp; Which of the following is operational domain of CSA ? </h2>
	   <input type="radio" name="q20" value="a" />&nbsp; a)&nbsp; Scalability
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q20" value="b" />&nbsp; b)&nbsp; Portability and interoperability
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q20" value="c" /> &nbsp;c)&nbsp; Flexibility
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="q20" value="d" /> &nbsp;d)&nbsp; None of the mentioned
	   
	   
	   
	   <br><br><br><br><br><center> 
	  
	   <input type="submit" value="Submit Test" style="width:150px;height:50px;color:white;background-color:black" />
	   </center>
</div>	   
</form>
   </body>
  </html>