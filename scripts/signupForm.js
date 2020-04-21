
 var pass = document.getElementById("pwd")
    pass.addEventListening('keyup', function() {
        ValidatePasswd(pass.value)
    })
function ValidatePasswd(password)
{
        var strengthBar = document.getElementById("strength")
        var strength = 0;
        if (password.match(/[a-zA-Z0-9][a-zA-Z0-9]+/)) {
            strength += 1
        }
        if (password.match(/[~<>?]+/)) {
            strength += 1
        }
        if (password.match(/[!@#$%^&*()]+/)) {
            strength += 1
        }
        if (password.length > 5) {
            strength += 1
        }
        if (password.length == 0) {
            strength == 0;
        }
        switch(strength) {
            case 0:
            strengthBar.value = 0;
            break
            case 1:
            strengthBar.value = 20;
            break
            case 2:
            strengthBar.value = 40;
            break
            case 3:
            strengthBar.value = 60;
            break
			case 4:
			strengthBar.value = 100;
			break
        }

}

	function ValidateFname()  
{ 	var inputtxt = document.forms["signupForm"]["fname"].value;
	var letters = /^[A-Za-z]+$/;  
	if(inputtxt.match(letters))  
	{  
		return true;  
	}  
	else  
	{  
		alert("Enter valid first name!"); 
		document.signupForm.fname.focus();  
		return false;  
	}  
} 

function ValidateLname()  
{  
	var inputtxt = document.forms["signupForm"]["lname"].value;
	var letters = /^[A-Za-z]+$/;  
	if(inputtxt.match(letters))  
	{  
		return true;  
	}  
	else  
	{  
		alert("Enter valid last name!"); 
		document.signupForm.Lname.focus();  
		return false;  
	}  
} 

function ValidateEmail()  
{  
	var checkmail = document.forms["signupForm"]["email"].value;
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
	if(checkmail.match(mailformat))  
	{  
		return true;  
	}  
	else  
	{  
		alert("Invalid Email Address!");  
		document.signupForm.email.focus();  
		return false;  
	}  
}  



function ValidateMobile()  
{
	var checkmobile = document.forms["signupForm"]["phone"].value;
	var numbers = /^[0-9]+$/;  
	if(checkmobile.match(numbers))  
	{  
		return true;  
	}  
	else  
	{  
		alert("Invalid Mobile Number!");  
		document.signupForm.phone.focus();  
		return false;  
	}  
}

