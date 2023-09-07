<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" href="stylereg.css">
    <script src="https://kit.fontawesome.com/c7705f70af.js" crossorigin="anonymous"></script>


</head>
<body>
<form method="POST" action="home.html">
<div class="wrapper">
    <div class="title">
      ADD PETS
    </div>
    <div class="form">
       <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input">
       </div>  
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input">
       </div>  
        <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select">
            <select>
              <option value="">Select</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
       </div> 
       <div class="inputfield">
          <label>Age</label>
          <div class="custom_select">
            <select>
              <option value="">Select</option>
              <option value="male">0-12months</option>
              <option value="female">1-2years</option>
              <option value="female">3-4years</option>
              <option value="female">4-5years</option>
              <option value="female">5-6years</option>

            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" class="input">
       </div> 
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input">
       </div> 
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea"></textarea>
       </div> 
      <div class="inputfield">
          <label>Postal Code</label>
          <input type="text" class="input">
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Register" class="btn">
      </div>
    </div>
</div>	
</form>
	<script>
        var state=false;
        function toggle(){
            if(state)
            {
                document.getElementById("password").setAttribute("type","password");
                document.getElementById("eye").style.color='#7a797e';

                state=false;
            }
            else{
                document.getElementById("password").setAttribute("type","text");
                document.getElementById("eye").style.color='#5887ef';

                state=true;
            }
        }
    </script>
</body>
</html>