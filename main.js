const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});  

// student  form validation 

var firstnameError =document.getElementById('first-name-error');
var lastnameError =document.getElementById('last-name-error');
var schoolError =document.getElementById('school-error');
var gradeError =document.getElementById('grade-error');  
var phoneError =document.getElementById('phone-error');
var emailError =document.getElementById('email-error');
var passwordError =document.getElementById('password-error'); 
var comPasswordError = document.getElementById('com-password-error');
var submitError =document.getElementById('submit-error'); 

function validateFirstName(){
	var firstname=document.getElementById('first-name').value; 
	if (firstname.length==0){
		firstnameError.innerHTML = 'First name is required'; 
		return false;
	} 
	firstnameError.innerHTML ='<i class="fas fa-check-square"></i>';
	return true;

} 

function validateLastName(){
	var lastname=document.getElementById('last-name').value; 
	if (lastname.length==0){
		lastnameError.innerHTML = 'Last name is required'; 
		return false;
	} 
	lastnameError.innerHTML ='<i class="fas fa-check-square"></i>';
	return true;

} 

function validateSchool(){
	var school=document.getElementById('school-name').value; 
	if (school.length==0){
		schoolError.innerHTML = 'Name is required'; 
		return false;
	}  
	if (!school.match(/^[A-Za-z]*\s{1}[A-zZa-z]*$/)){
		schoolError.innerHTML = 'Write full name'; 
		return false;
	} 
	schoolError.innerHTML ='<i class="fas fa-check-square"></i>';
	return true;

} 

function validateGrade(){
	var grade=document.getElementById('grade').value; 
	if (grade.length==0){
		gradeError.innerHTML = 'Grade is required'; 
		return false;
	}   
	if (isNaN(grade) || grade < 6 || grade > 11){
		gradeError.innerHTML = 'Wrong grade'; 
		return false;
	}  
	gradeError.innerHTML ='<i class="fas fa-check-square"></i>';
	return true;

} 


function validatePhone(){
	var phone = document.getElementById('phone').value;

	if(phone.length == 0){ 
		phoneError.innerHTML ="Phone number is required";
		return false;
	} 
	if(!phone.match(/^\d{10}$/)){ 
	   phoneError.innerHTML ="Only digits please";
	   return false;
	}  
	else{
		phoneError.innerHTML ='<i class="fa fa-check-square"></i>' ;
		return true;
	}
	
}   

function validateEmail(){
	var email = document.getElementById('email').value;

	if(email.length == 0){
		emailError.innerHTML ="Email number is required";
		return false;
	} 
	if(!email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){
	   emailError.innerHTML ="Email invalid";
	   return false;
	}  
	else{
		emailError.innerHTML ='<i class="fa fa-check-square"></i>' ;
		return true;
	}
	
}   

function validatePassword(){
	var password = document.getElementById('password').value;

	if(password.length == 0){
		passwordError.innerHTML ="Password is required";
		return false;
	}  
	if(!password.match(/^.{8,15}$/)){
		passwordError.innerHTML ="minimum 8 digits";
		return false;
	} 
	else{
		passwordError.innerHTML ='<i class="fa fa-check-square"></i>' ;
		return true;
	}
	
}   

function validateComfirmPassword(){ 
	var password = document.getElementById('password').value;
	var comPassword = document.getElementById('comfirm-password').value;

	if(comPassword.length == 0){
		comPasswordError.innerHTML =" Comfirm Password is required";
		return false;
	} 
	if(password != comPassword){
	   comPasswordError.innerHTML ="Wrong password";
	   return false;
	}  
	else{
		comPasswordError.innerHTML ='<i class="fa fa-check-square"></i>' ;
		return true;
	}
	
}

function validateForm(){
	if ( !validateFirstName()|| !validateLastName()||  !validateGrade()|| !validatePhone() || !validateParent() || !validateEmail() || !validatePassword() || !validateComfirmPassword()) {
		alert("Please fix error to submit!!");
		return false;
	}  
	else {
		alert("Successfully Registation!!");
		return true;
	}
}  

var popup=document.getElementById("popup");

function closePopup(){
    popup.classList.remove("open-popup");
}
