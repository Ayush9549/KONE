const container = document.getElementsByClassName('main-container')[0];
const container1 = document.getElementsByClassName('main-container1')[0];
const blur = document.getElementsByClassName('blur')[0];

function loginPage()
{
	container.style.display = "block";
	container.style.transition = "transform 0.4s , top 0.4s";
	blur.style.display="flex";

}

////////////////// Register Button Action ////////////

function register()
{
	container1.style.display = "block";
	container.style.display = "none";
}

///////////////// Close Login Popup /////////////////

function closeLoginForm()
{
	container.style.display = "none";
	container1.style.display = "none";
	blur.style.display="none";
}

//////////////// gmail valid /////////////

$(".email").on("input",function()
{
	var gamil_str = $(this).val();
	let pattern = /^[^ ]+@[^]+\.[a-z]{2,3}$/   //reg-ular ex-pression
	
	if (gamil_str.match(pattern))  
	{
	  $(this).parent().css({"border-bottom":"1px solid green"});
	  $(this).parent().children(".valid").css({"display":"flex"});
	  $(this).parent().parent().children(".email_error").css({"color":"#fff"});
	  $(this).parent().css({"background":"#fff"});
	} 
	else
	{
		$(this).parent().css({"border-bottom":"1px solid red"});
		$(this).parent().parent().children(".email_error").css({"color":"red"});
		$(this).parent().children(".valid").css({"display":"none"});
		$(this).parent().css({"background":"red","border-radius":"5px 5px 0 0"});
		$(".gmail_error").children().css({"display":"flex"});
	}
});


///////////pass and conf pass ////////

var pass_str;
var confirm_pass_str;
var isLenght =false;


$(".password").on("change",function()
{
	let pattern1 = /^.{6}$/
	pass_str = $(this).val();

	if (pass_str.match(pattern1))
		{
			$(this).parent().css({"border-bottom": "1px solid green"});
		}
		else
		{
			$(this).parent().css({"background":"red"});
			// $("#password1").css({"background":"red"});
		}
	if ($(this).val().length>=6) {
		isLenght=true;	
	}
	else
	{
		isLenght=false;
	}
		
});

$("#confirm-pass").on("change",function()
{
	if (isLenght==false)
	{
		confirm_pass_str = $(this).val();

		if (pass_str==confirm_pass_str)
		{
			console.log("yes");
			$("#confirm-pass").css({"background":"red"});
			$("#confirm-pass").parent().css({"background":"red"});
		} 
		else
		{
			console.log("no");

		}
	}
	else
	{
		console.log("kam h");
	}
});


$(".input").on("input",function(){
	$(this).css({"background":"#fff"});
});
