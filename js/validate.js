function valitation()
{
	//alert("fdgfd");
	var name=document.getElementById("name").value;
	var email=document.getElementById("email").value;
	var mobile=document.getElementById("mobile").value;
	var address=document.getElementById("address").value;
	var message=document.getElementById("message").value;
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var phoneno = /^\d{10}$/;
	if(name=="")
	{
		
		document.getElementById("validation1").innerHTML="Please enter your name";
		document.getElementById("name").value="";
		document.getElementById("name").focus();
		return false;	
	}
	else if(email=="")
	{
		
		document.getElementById("validation2").innerHTML="Please enter your email";
		document.getElementById("email").value="";
		document.getElementById("email").focus();
		return false;	
	}
	 else if (!email.match(mailformat))
	{
		
		document.getElementById("validation2").innerHTML="Please enter your valid email";
		document.getElementById("email").value="";
		document.getElementById("email").focus();
		return false;	
	}
	else if(mobile=="")
	{
		
		document.getElementById("validation3").innerHTML="Please enter your mobile no";
		document.getElementById("mobile").value="";
		document.getElementById("mobile").focus();
		return false;	
	}
	else if (!mobile.match(phoneno))
	{
		
		document.getElementById("validation3").innerHTML="Please enter your valid mobile no";
		document.getElementById("mobile").value="";
		document.getElementById("mobile").focus();
		return false;	
	}
	else if(address=="")
	{
		
		document.getElementById("validation4").innerHTML="Please enter your Address";
		document.getElementById("address").value="";
		document.getElementById("address").focus();
		return false;	
	}
	else if(message=="")
	{
		
		document.getElementById("validation5").innerHTML="Please enter your message";
		document.getElementById("message").value="";
		document.getElementById("message").focus();
		return false;	
	}
	fn_call();
   return true;
}

function check_value1()
{	
	document.getElementById("validation1").innerHTML="";
	return true;
}
function check_value2()
{
	document.getElementById("validation1").innerHTML="";	
	document.getElementById("validation2").innerHTML="";
	return true;
}
function check_value3()
{	document.getElementById("validation1").innerHTML="";	
	document.getElementById("validation2").innerHTML="";
	document.getElementById("validation3").innerHTML="";
	return true;
}
function check_value4()
{	
	document.getElementById("validation1").innerHTML="";	
	document.getElementById("validation2").innerHTML="";
	document.getElementById("validation3").innerHTML="";
	document.getElementById("validation4").innerHTML="";
	return true;
}
function check_value4()
{	
	document.getElementById("validation1").innerHTML="";	
	document.getElementById("validation2").innerHTML="";
	document.getElementById("validation3").innerHTML="";
	document.getElementById("validation4").innerHTML="";
	document.getElementById("validation4").innerHTML="";
	return true;
}



function valitation_enq()
{
	//alert("fdgfd");
	var name_enq=document.getElementById("name_enq").value;
	var email_enq=document.getElementById("email_enq").value;
	var mobile_enq=document.getElementById("mobile_enq").value;
	var message_enq=document.getElementById("message_enq").value;
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var phoneno = /^\d{10}$/;
	if(name_enq=="")
	{
		
		document.getElementById("validation1_enq").innerHTML="Please enter your name";
		document.getElementById("name_enq").value="";
		document.getElementById("name_enq").focus();
		return false;	
	}
	else if(email_enq=="")
	{
		
		document.getElementById("validation2_enq").innerHTML="Please enter your email";
		document.getElementById("email_enq").value="";
		document.getElementById("email_enq").focus();
		return false;	
	}
	 else if (!email_enq.match(mailformat))
	{
		
		document.getElementById("validation2_enq").innerHTML="Please enter your valid email";
		document.getElementById("email_enq").value="";
		document.getElementById("email_enq").focus();
		return false;	
	}
	else if(mobile_enq=="")
	{
		
		document.getElementById("validation3_enq").innerHTML="Please enter your mobile no";
		document.getElementById("mobile_enq").value="";
		document.getElementById("mobile_enq").focus();
		return false;	
	}
	else if (!mobile_enq.match(phoneno))
	{
		
		document.getElementById("validation3_enq").innerHTML="Please enter your valid mobile no";
		document.getElementById("mobile_enq").value="";
		document.getElementById("mobile_enq").focus();
		return false;	
	}
	else if(message_enq=="")
	{
		
		document.getElementById("validation4_enq").innerHTML="Please enter your message";
		document.getElementById("message_enq").value="";
		document.getElementById("message_enq").focus();
		return false;	
	}
	fn_call();
   return true;
}