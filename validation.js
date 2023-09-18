function allLetter(inputtxt)
      { 
      var letters = /^[A-Za-z]+$/;
      if(inputtxt.value.match(letters))
      {
      return true;
      }
      else
      {
        alert("You have entered an invalid Name!");
      return false;
      }
      }

      function phonenumber(inputtxt)
{
  var phoneno = /^\d{10}$/;
  if((inputtxt.value.match(phoneno)))
          {
      return true;
        }
      else
        {
        alert("You have entered an invalid Phone Number!");
        return false;
        }
}


function ValidateEmail(inputText)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.value.match(mailformat))
{
document.form1.email.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.form1.email.focus();
return false;
}
}

function last(){
    return
}

function submitvalue(){

    var subvalue = allLetter(document.form1.name) && phonenumber(document.form1.phone) && ValidateEmail(document.form1.email);
    return subvalue;

}

function validateForm()
{
var x = document.getElementById("age").value;
if(x<20 || x>40)
{
alert("invalid age");
return false;
}
}
