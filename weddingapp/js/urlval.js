var urlval="http://192.168.2.99/guestapp/index.php";

function numbersonly(e){
var unicode=e.charCode? e.charCode : e.keyCode
if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
if (unicode<48||unicode>57) //if not a number
return false //disable key press
}
}


function onlyAlphabates(alphabet){
alert(alphabet);
if (!alphabet.match(/^[a-zA-Z]+$/) && alphabet !="")
{
alphabet.value="";
alphabet.focus();
alert("Please Enter only alphabets in text");
return false; 
}
}

function checkFirstname()
{ 
var firstname= document.getElementById('fname').value;
//alert(firstname);
if (!firstname.match(/^[A-Za-z\d\s]+$/) && firstname !="")
{

alert("Please Enter only alphabets for FirstName.");
$('#fname').val('');
return false; 
}
}

function checkLastname()
{ 
var lastname= document.getElementById('lname').value;
if (!lastname.match(/^[a-zA-Z]+$/) && lastname !="")
{
alert("Please Enter only alphabets for LastName.");
$('#lname').val('');
return false; 
}
}

function checkPassword()   
{
var password= document.getElementById('password');  
var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;  
if(password.value.match(passw))   
{   
//alert('Correct...') ; 
return true;  
}  
else  
{   
alert('Password must contain: Minimum 6 characters atleast 1 UpperCase Alphabet, 1 LowerCase Alphabet and 1 Number') ; 
document.getElementById('password').value='';  
//document.getElementById('password').focus();
return false;  
}  

}  

function phonenumber()  
{ 
  var phone= document.getElementById('phone');
  if (!(phone.value.length == 10)) {
  alert("Please enter 10 digit mobile no.");
  document.getElementById('phone').value = "";
  //phone.focus();
  return false;
 }
  }
function contactnumber(inputtxt)  
{ 
  var phone= document.getElementById('contact');
  if (!(phone.value.length == 10)) {
  alert("Please enter 10 digit mobile no.");
 document.getElementById('contact').value = "";
  //phone.focus();
  return false;
 }
  }

function checkEmail(){
    var email = document.getElementById('email');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    return false;
 }
}
