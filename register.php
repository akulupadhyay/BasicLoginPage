<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration Page 📝</title>
    <link rel="stylesheet" href="register_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
  </head>
  <body>

<form class="main_form" action="store.php" method="post">
  <h1 style="font-size: 62px;">Sign Up Here !</h1>
  <input id="name" type="text" name="name" placeholder="Username" required>
  <input id="email" type="text" name="email" placeholder="E-Mail" required>
  <input id="password" type="text" name="password" placeholder="Password" required>
  <input id="phone" type="text" name="phone" placeholder="Mobile No." required>
  <input id="address" type="text" name="address" placeholder="Address" required>
  <input type="submit" name="" value="Submit" onclick="getAllValues();">
</form>

<script type=text/JavaScript>
  function checkForm(name,email,phone,address)
  {
     var name_regex=/^[\w\s]{3,24}$/;
     var email_regex=/^[a-zA-Z0-9\.\%\+\\-]+\@[a-zA-Z0-9\%\+\\.\-]+\.[a-zA-Z0-9]{2,4}$/;
     var phone_regex=/^[+\d]{10,13}$/;
     // var phone_regex1=/^\d{11,12}$/;
     var address_regex=/^[\w\s]{3,16}$/;
     if (!(name_regex.test(name)))
     {  
       alert("Name can\'t be that short (or that long)");  
       return false;  
     }
     else if(! (email_regex.test(email)))
     {  
       alert("Email Invalid !");  
       return false;  
     }
     else if(! (phone_regex.test(phone)))
     {  
       alert("Phone Invalid !");  
       return false;  
     }
     // if (!(address_regex.test(address)))
     // {  
     //   alert("address name can\'t be that short (or that long)");  
     //   return false;  
     // }
      else
     {  
       //All OK !  
       return true;  
     }  
  }

  function showEverything(name,email,phone,address)
  {
    alert(name+"\n"+email+"\n "+phone+"\n "+address+"\n ");

  }

  function getAllValues()
  {
    var name=document.querySelector("#name").value;
    var email=document.querySelector("#email").value;
    var phone=document.querySelector("#phone").value;
    var address=document.querySelector("#address").value;
    var result=checkForm(name,email,phone,address);
    if (result) 
    {
      showEverything(name,email,phone,address);
    }
    else
    {
      alert("Something went horribly wrong !");
    }
  }
  </script>
</body>
</html>