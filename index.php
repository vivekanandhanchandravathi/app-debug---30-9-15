<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/styling.css" />
<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css" />
<link rel="stylesheet" href="css/jquery.mobile-custom.min.css" />
<link rel="stylesheet" href="css/styling.css" />
<script src="js/jquery.js"></script>
<script src="js/jquery.mobile-1.4.0.min.js"></script>

 <script src="lib/jquery-2.1.3.min.js"></script>
        <script src="js/init.js"></script>
       
   
        <script>
$(function(){           
    var step = 1;
    var current = 0;
    var maximum = $(".categories ul li").size();
    var visible = 2;
    var speed = 500;
    var liSize = 120;
    var height = 30;    
    var ulSize = liSize * maximum;
    var divSize = liSize * visible; 

    $('.categories').css("width", "auto").css("height", height+"px").css("visibility", "visible").css("overflow", "hidden").css("position", "relative");
    $(".categories ul li").css("list-style","none").css("display","inline");
    $(".categories ul").css("width", ulSize+"px").css("left", -(current * liSize)).css("position", "absolute").css("white-space","nowrap").css("margin","0px").css("padding","0px");

    $(".categories").swipeleft(function(event){
        if(current + step < 0 || current + step > maximum - visible) {return; }
        else {
            current = current + step;
            $('.categories ul').animate({left: -(liSize * current)}, speed, null);
        }
        return false;
    });

    $(".categories").swiperight(function(){
        if(current - step < 0 || current - step > maximum - visible) {return; }
        else {
            current = current - step;
            $('.categories ul').animate({left: -(liSize * current)}, speed, null);
        }
        return false;
    });         
});
</script>
  
        <!--Slider script-->
         <script>
		$(function() {      
            $("#slideshow > div:gt(0)").hide(); 
            setInterval(function() { 
              $('#slideshow > div:first')
                .fadeOut(1000)
                .next()
                .fadeIn(1000)
                .end()
                .appendTo('#slideshow');
            }, 2000);          
        });
		</script>

</head>
<body>
<!-------------------- Page1 Start ------------------->
<div data-role="page" id="signin"  class="bck_img">
 <div data-role="content">
         <div class="index_menu">
          <p class="index_txt_1"><img src="img/home/evx_logo.png" width="150" height="68"></p>  
          <p class="index_txt_2">Ready to innovate?</p>  
          <p id="unameerror" class="form_err"></p>
               </div> 
          <div class="index_menu_icon">
       <div class="form1">
       <img src="img/home/mail-icon.png"/>
       </div>
       <form method="POST" name="signup" action="signin.php" enctype="multipart/form-data"> 
        <div class="form2">
       <input type="text" name="uname" id="uname" placeholder="Username">
       </div><br/><br/><br/>
        <div class="bor_form"></div>
        <br/>
        <div class="form1">
       <img src="img/home/key-icon.png"/>
       </div>
        <div class="form2">
        <input type="password" name="upsw" id="upsw" class="infld" placeholder="Password">
       </div>
       <button type="button" class="login_btn" onclick="return valitation_log();"><a href="#signup" class="create">Login</a></button>
       </form>
       <p class="login_txt"><a href="#signup" data-transition="slide">Create</a> &nbsp;your account now!<br>You are one step behind.</p>
            </div>
            </div>
</div> 
<script>
function valitation_log()
{
	var uname=document.getElementById("uname").value;
	var upsw=document.getElementById("upsw").value;
	
	if(uname=="")
	{
		document.getElementById("unameerror").innerHTML="Please enter your name";
		document.getElementById("uname").value="";
		document.getElementById("uname").focus();
		return false;	
	}
	else if(upsw=="")
	{
		document.getElementById("unameerror").innerHTML="Please enter your password";
		document.getElementById("upsw").value="";
		document.getElementById("upsw").focus();
		return false;	
	}
		return true;
}
</script>
<script>
function check_value(x)
{	
	document.getElementById("unameerror").innerHTML="";
	return true;
}
</script>

<!-------------------- Page2 Start ------------------->
<div data-role="page" id="signup" class="bck_img">
  <div data-role="content">
    
         <div class="index_menu">
<p class="index_txt_2">Hurrah! You are about to create an EVx account.</p>
<p id="nameerror" class="form_err"></p>
<form method="POST" name="signup" action="signin.php" enctype="multipart/form-data"> 
  <div class="form1"><img src="img/home/user-icon.png"/></div>
  <div class="form2"><input type="text" name="fname" id="fname" placeholder="Fullname" onclick="return check_value(this.value);"></div>
  
  <div class="form1"> <img src="img/home/mail-icon.png"/></div>
  <div class="form2"><input type="text" name="email" id="email" placeholder="Email Id" onclick="return check_value(this.value);"></div>
  
  <div class="form1"><img src="img/home/key-icon.png"/></div>
  <div class="form2"> <input type="password" name="psw" id="psw" class="infld" placeholder="Password" onclick="return check_value(this.value);"></div>
  
  <div class="form1"> <img src="img/home/confirmpass-icon.png"/></div>
  <div class="form2"><input type="password" name="cpsw" id="cpsw" class="infld" placeholder="Confirm Password" onclick="return check_value(this.value);"></div>
       
  <button type="button" class="login_btn" onclick="return valitation();"><a href="#dashboard" class="create">That's It You are in!</a></button>
  </form>
  <a href="#dashboard" data-transition="slide">click here for dashboard</a>      
</div>
</div>
</div> 
<script>
function valitation()
{
	//alert("fdgfd");
	var fname=document.getElementById("fname").value;
	var email=document.getElementById("email").value;
	var psw=document.getElementById("psw").value;
	var cpsw=document.getElementById("cpsw").value;
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	//var phoneno = /^\d{10}$/;
	if(fname=="")
	{
		document.getElementById("nameerror").innerHTML="Please enter your name";
		document.getElementById("fname").value="";
		document.getElementById("fname").focus();
		return false;	
	}
	else if(email=="")
	{
		document.getElementById("nameerror").innerHTML="Please enter your email";
		document.getElementById("email").value="";
		document.getElementById("email").focus();
		return false;	
	}
	 else if (!email.match(mailformat))
	{
		document.getElementById("nameerror").innerHTML="Please enter your valid email";
		document.getElementById("email").value="";
		document.getElementById("email").focus();
		return false;	
	}
	else if(psw=="")
	{
		document.getElementById("nameerror").innerHTML="Please enter your password";
		document.getElementById("psw").value="";
		document.getElementById("psw").focus();
		return false;	
	}
	else if(cpsw=="")
	{
		document.getElementById("nameerror").innerHTML="Please enter your confirm password";
		document.getElementById("cpsw").value="";
		document.getElementById("cpsw").focus();
		return false;	
	}
	else if (!(cpsw==psw))
	{
		document.getElementById("nameerror").innerHTML="Please enter your correct password";
		document.getElementById("cpsw").value="";
		document.getElementById("cpsw").focus();
		return false;	
	}
		return true;
}
</script>
<script>
function check_value(x)
{	
	document.getElementById("nameerror").innerHTML="";
	document.getElementById("nameerror").innerHTML="";
	
	return true;
}

</script>
<!-------------------- Page3 Start ------------------->

<div data-role="page" id="dashboard">
 <div data-role="panel" id="panel" data-position="left" data-theme="a" data-display="overlay">   
          <?php include('menu.php'); ?>
        </div>
   <header data-role="header">
   <div id="header1">
        <a id="bars-button" class="ui-btn-left menu" href="#panel"><img src="img/menu.png" width="25" height="25"></a>
 <a id="bars-button" class="ui-btn-c logo" href="#dashboard">
  <img src="img/logo.png" width="58" height="35"> 
  </a>
   <a id="bars-button" class="ui-btn-right logout" href="index.php"><img src="img/logout.png" width="25" height="25"></a>
  </div>
   </header>
   <div class="strip_menu">         
   <div class="categories">                
            <ul>                 
               <li><a href="#" data-transition="slide" class="active">Home</a></li>  
               <li><a href="#">|</a></li>  
                <li><a href="#Technology" data-transition="slide">Micro Learning</a></li>
                <li><a href="#">|</a></li>  
                <li><a href="#" data-transition="slide">My Success</a></li>
                <li><a href="#">|</a></li>  
                <li><a href="#"data-transition="slide">Question & Answers</a></li>             
            </ul>               
        </div>
</div>
  <div data-role="main" >
    <div class="discover"> 
              <div class="dis_1">Your <font class="dis_color">Ideas!</font></div>
             <div class="dis_1">Your <font class="dis_color">Success!</font></div>
             <div class="dis_1">Your <font class="dis_color">Happiness!</font></div>      
     </div>
     <div class="name_clr">
<div class="name_user">
<div class="name_user1">Welcome User!</div>
<div class="name_user2"><img src="img/star.png" width="80" height="15"></div>
</div>
<div class="name_mony">
Earnings : $250
</div>
</div>          
<div class="grid">
  <div class="grid-sizer">
   <a href="#Technology" data-transition="slide">
  <div class="grid-item1">
    <img src="img/edu-tips.png" width="30" height="31"><br/>
    Micro Learning
     </div></a>
     <a href="#Postqus" data-transition="slide">
  <div class="grid-item2">
<img src="img/Q&A.png" width="30" height="31"><br/>
Global Forum
  </div></a>
  </div>
  <div class="grid-sizer">
  <a href="#idea" data-transition="slide">
  <div class="grid-item3">
   <img src="img/showcase-ideas.png" width="30" height="31"><br/>
  My Success
    </div></a>
  <div class="grid-item4">
 <!--<img src="img/showcase-ideas.png" width="136" height="77">-->
<div class="tile tile-white">
   <div id="slideshow">
   	<div align="center">
     		<img src="img/ad2.png" height="50" width="150"/>
        </div>
        <div>
     		<img src="img/ad1.png" height="50" width="150"/>
   	</div>
       <div>
     		<img src="img/ad3.png" height="50" width="150"/>
       </div>
  </div>
 </div>
  </div>
  </div> 
  </div>
   </div>
</div> 

<!-------------------- Micro Learning tile1------------------->

<div data-role="page" id="Technology">
  <div data-role="panel" id="panel" data-position="left" data-theme="a" data-display="overlay">  
             <?php include('menu.php'); ?>
        </div>
   <header data-role="header">
   <div id="header1">
        <a id="bars-button" class="ui-btn-left menu" href="#panel"><img src="img/menu.png" width="25" height="25"></a>
 <a id="bars-button" class="ui-btn-c logo" href="#dashboard">
  <img src="img/logo.png" width="58" height="35"> 
  </a>
   <a id="bars-button" class="ui-btn-right logout" href="index.php"><img src="img/logout.png" width="25" height="25"></a>
 
   </header>

  <div data-role="main">
   </div>
  <div class="strip_menu">         
   <div class="categories">                
            <ul>                 
               <li><a href="#Technology" class="active" data-transition="slide">Technology Tips</a></li>  
               <li><a href="#">|</a></li>  
                <li><a href="#Business">Business Tips</a></li>   
                <li><a href="#">|</a></li>  
                <li><a href="#Brain">Brain Teasers</a></li>
            </ul>               
        </div>
</div>

     <div class="discover1"> 
     <img src="img/education/technology.jpg">
     </div>
     
    
      <div class="name_clr1">
<div class="name_user_clr1">
<div class="name_user1_clr1">Misplaced your Android Phone<br/>
while on Silent mode? Try this,</div>
</div>
<div class="name_mony_clr1">
Tech Tip
</div>
</div>   
    
      <div class="name_clr1">
<div class="name_user_clr1">
<div class="name_user2_clr1">
<p>1. Open Google Play in your Desktop Browser</p>

<p>2. Goto Android Device Manager</p>

<p>3. Login with the same Gmail account you used to <br/>
    activate your phone</p>

<p>4. Select 'Ring'</p>
</div>
</div>
</div>   
 </div>
 

<!-------------------- Micro Learning tile2------------------->

<div data-role="page" id="Business">
  <div data-role="panel" id="panel" data-position="left" data-theme="a" data-display="overlay">  
             <?php include('menu.php'); ?>
        </div>
   <header data-role="header">
   <div id="header1">
        <a id="bars-button" class="ui-btn-left menu" href="#panel"><img src="img/menu.png" width="25" height="25"></a>
 <a id="bars-button" class="ui-btn-c logo" href="#dashboard">
  <img src="img/logo.png" width="58" height="35"> 
  </a>
   <a id="bars-button" class="ui-btn-right logout" href="index.php"><img src="img/logout.png" width="25" height="25"></a>
 
   </header>

  <div data-role="main">
   </div>
  <div class="strip_menu">         
   <div class="categories">                
            <ul>                 
               <li><a href="#Technology">Technology Tips</a></li>  
               <li><a href="#">|</a></li>  
                <li><a href="#Business" class="active" data-transition="slide">Business Tips</a></li>   
                <li><a href="#">|</a></li>  
                <li><a href="#Brain">Brain Teasers</a></li>
            </ul>               
        </div>
</div>
     <div class="discover1"> 
     <img src="img/education/technology.jpg">
     </div>
     
    
      <div class="name_clr1">
<div class="name_user_clr1">
<div class="name_user1_clr1">Misplaced your Android Phone<br/>
while on Silent mode? Try this,</div>
</div>
<div class="name_mony_clr1">
Tech Tip
</div>
</div>   
    
      <div class="name_clr1">
<div class="name_user_clr1">
<div class="name_user2_clr1">
<p>1. Open Google Play in your Desktop Browser</p>

<p>2. Goto Android Device Manager</p>

<p>3. Login with the same Gmail account you used to <br/>
    activate your phone</p>

<p>4. Select 'Ring'</p>

</div>
</div>
</div>   
 </div>

<!-------------------- Micro Learning tile3------------------->

<div data-role="page" id="Brain">
  <div data-role="panel" id="panel" data-position="left" data-theme="a" data-display="overlay">  
             <?php include('menu.php'); ?>
        </div>
   <header data-role="header">
   <div id="header1">
        <a id="bars-button" class="ui-btn-left menu" href="#panel"><img src="img/menu.png" width="25" height="25"></a>
 <a id="bars-button" class="ui-btn-c logo" href="#dashboard">
  <img src="img/logo.png" width="58" height="35"> 
  </a>
   <a id="bars-button" class="ui-btn-right logout" href="index.php"><img src="img/logout.png" width="25" height="25"></a>
 
   </header>

  <div data-role="main">
   </div>
  <div class="strip_menu">         
   <div class="categories">                
            <ul>                 
               <li><a href="#Technology">Technology Tips</a></li>  
               <li><a href="#">|</a></li>  
                <li><a href="#Business">Business Tips</a></li>   
                <li><a href="#">|</a></li>  
                <li><a href="#Brain" class="active" data-transition="slide">Brain Teasers</a></li>
            </ul>               
        </div>
</div>
     <div class="discover1"> 
     <img src="img/education/technology.jpg">
     </div>
     
    
      <div class="name_clr1">
<div class="name_user_clr1">
<div class="name_user1_clr1">Misplaced your Android Phone<br/>
while on Silent mode? Try this,</div>
</div>
<div class="name_mony_clr1">
Tech Tip
</div>
</div>   
    
      <div class="name_clr1">
<div class="name_user_clr1">
<div class="name_user2_clr1">
<p>1. Open Google Play in your Desktop Browser</p>

<p>2. Goto Android Device Manager</p>

<p>3. Login with the same Gmail account you used to <br/>
    activate your phone</p>

<p>4. Select 'Ring'</p>

</div>
</div>
</div>   
 </div>

<!-------------------- Global Forum------------------->

<div data-role="page" id="Postqus">
  <div data-role="panel" id="panel" data-position="left" data-theme="a" data-display="overlay">  
             <?php include('menu.php'); ?>
        </div>
   <header data-role="header">
   <div id="header1">
        <a id="bars-button" class="ui-btn-left menu" href="#panel"><img src="img/menu.png" width="25" height="25"></a>
 <a id="bars-button" class="ui-btn-c logo" href="#dashboard">
  <img src="img/logo.png" width="58" height="35"> 
  </a>
   <a id="bars-button" class="ui-btn-right logout" href="index.php"><img src="img/logout.png" width="25" height="25"></a>
 
   </header>

  <div data-role="main">
   </div>
  <div class="strip_menu">         
   <div class="categories">                
            <ul>                 
               <li><a href="#Technology" class="active" data-transition="slide">Post Qustion</a></li>  
               <li><a href="#">|</a></li>  
                <li><a href="#">Qustion</a></li>   
            </ul>               
        </div>
</div>
    <div class="index_menu">
 <br/><br/>
 <form method="POST" name="signup" action="signin.php" enctype="multipart/form-data"> 
 
  <div class="form_pro"><input type="text" name="fname" id="fname" placeholder="Title" style="background:#FFF;"></div>
  
  <div class="form_pro"><input type="text" name="fname" id="fname" placeholder="Description" style="background:#FFF; height:100px;"></div>
  
  <div class="form_pro"><input type="text" name="fname" id="fname" placeholder="Tags" style="background:#FFF;"></div>
  
       
  <button type="button" onclick="return valitation();"><a href="#dashboard" class="create">Post your Qustion</a></button>
  </form> 
 
    </div>
</div>   
 </div>
</div> 


<!-------------------- My EVx Profile ------------------->

<div data-role="page" id="Evxprofile">
  <div data-role="panel" id="panel" data-position="left" data-theme="a" data-display="overlay">  
             <?php include('menu.php'); ?>
        </div>
   <header data-role="header">
   <div id="header1">
        <a id="bars-button" class="ui-btn-left menu" href="#panel"><img src="img/menu.png" width="25" height="25"></a>
 <a id="bars-button" class="ui-btn-c logo" href="#dashboard">
  <img src="img/logo.png" width="58" height="35"> 
  </a>
   <a id="bars-button" class="ui-btn-right logout" href="index.php"><img src="img/logout.png" width="25" height="25"></a>
 
   </header>

 <div data-role="content">
     <div class="name_clr1">
    <div class="cir_logo"><img src="img/evx/circle.png"></div>
    <div class="cir_uname">Elango Thangarasu</div>
   </div>
     
    <div class="pro_uname">
    <div class="pro_email">elangocool89@gmail.com</div>
    <div class="pro_varify"></div>
    </div>   
    
    <div class="pro_uname">
    <div class="pro_email">+91 - 9087172110</div>
    <div class="pro_varify"></div>
    </div> 
  <!--  
     <div class="pro_uname">
    <div class="pro_email">Male</div>
    <div class="pro_varify"></div>
    </div>    -->
   
    <div class="pro_uname">
    <div class="pro_email">25, Ramnager</div>
    <div class="pro_varify"></div>
    </div>
    
     <div class="pro_uname">
    <div class="pro_email">637013</div>
    <div class="pro_varify"></div>
    </div>    
   
    
     <div class="pro_uname">
    <div class="pro_email">coimbatore</div>
    <div class="pro_varify"></div>
    </div>    
   
    
     <div class="pro_uname">
    <div class="pro_email">Tamilnadu</div>
    <div class="pro_varify"></div>
    </div>    
    </div>
    <div class="acc_bck">
    Account
    </div>
    
     <div data-role="content">
      <div class="pro_uname">
    <div class="pro_email1"><a href="#editprofile">Add Address Details</a></div>
    <div class="pro_varify"></div>
    </div>   
    
    <div class="pro_uname">
    <div class="pro_email1"><a href="#editpassword">Change Password</a></div>
    <div class="pro_varify"></div>
    </div>   
    </div>
    
 </div>
</div> 
</div>

<!-------------------- My EVx Edit Profile ------------------->

<div data-role="page" id="editprofile">
  <div data-role="panel" id="panel" data-position="left" data-theme="a" data-display="overlay">  
             <?php include('menu.php'); ?>
        </div>
   <header data-role="header">
   <div id="header1">
        <a id="bars-button" class="ui-btn-left menu" href="#panel"><img src="img/menu.png" width="25" height="25"></a>
 <a id="bars-button" class="ui-btn-c logo" href="#dashboard">
  <img src="img/logo.png" width="58" height="35"> 
  </a>
   <a id="bars-button" class="ui-btn-right logout" href="index.php"><img src="img/logout.png" width="25" height="25"></a>
 
   </header>
<div class="index_menu">
 <div data-role="content">
 <form method="POST" name="signup" action="signin.php" enctype="multipart/form-data"> 
 
  <div class="form_pro"><input type="text" name="fname" id="fname" placeholder="Fullname" style="background:#FFF;" value="Elango Thangarasu"></div>
  
 
 <div class="form_pro"><input type="number" name="phon" id="phon" placeholder="Phon no" style="background:#FFF;"></div>
  
 <div class="form_pro"><input type="text" name="phon" id="phon" placeholder="Address" style="background:#FFF;"></div>
  
 <div class="form_pro"><input type="number" name="phon" id="phon" placeholder="Pincode" style="background:#FFF;"></div>
 
 <div class="form_pro"><input type="text" name="phon" id="phon" placeholder="City/Town" style="background:#FFF;"></div>
   
 <div class="form_pro"><input type="text" name="phon" id="phon" placeholder="State" style="background:#FFF;"></div>
       
  <button type="button" onclick="return valitation();"><a href="#dashboard" class="create">Save</a></button>
  </form> 
 </div>
    </div>

</div>   
 </div>
</div> 


<!-------------------- My EVx Password ------------------->

<div data-role="page" id="editpassword">
  <div data-role="panel" id="panel" data-position="left" data-theme="a" data-display="overlay">  
             <?php include('menu.php'); ?>
        </div>
   <header data-role="header">
   <div id="header1">
        <a id="bars-button" class="ui-btn-left menu" href="#panel"><img src="img/menu.png" width="25" height="25"></a>
 <a id="bars-button" class="ui-btn-c logo" href="#dashboard">
  <img src="img/logo.png" width="58" height="35"> 
  </a>
   <a id="bars-button" class="ui-btn-right logout" href="index.php"><img src="img/logout.png" width="25" height="25"></a>
 
   </header>
<div class="index_menu">
 <div data-role="content">
 
 <form method="POST" name="signup" action="signin.php" enctype="multipart/form-data"> 
 
 <div class="form_pro"><input type="password" name="phon" id="phon" placeholder="Old Password" style="background:#FFF;"></div>
  
 <div class="form_pro"><input type="password" name="phon" id="phon" placeholder="New Password" style="background:#FFF;"></div>
 
 <div class="form_pro"><input type="password" name="phon" id="phon" placeholder="Confirm Password" style="background:#FFF;"></div>
       
 <button type="button" onclick="return valitation();"><a href="#dashboard" class="create">Update Password</a></button>
  </form> 
  
 </div>
    </div>

</div>   
 </div>
</div> 



</body>
</html>
