<?php include("header.php"); ?>

<div id="container">
  

<section id="retention">

<script type="text/javascript">
String.prototype.trim = function()
  {
   return this.replace(/^\s*/, "").replace(/\s*$/, "");
  }

function validateForm()
 {
  // validate name
  var x = document.forms["contform"]["name"].value;
  if (x == null || x == "")
    {
     alert ("Please enter your name");
     return false;
    }

  // validate email address
  var x = document.forms["contform"]["email"].value;
  var atpos=x.indexOf("@");
  var dotpos=x.lastIndexOf(".");
  if (x == null || x == "")
    {
     alert("Please enter an email address");
     return false;
    }
  else
    if (atpos < 1 || dotpos < atpos+2 || dotpos+2 >= x.length)
      {
       alert("Please enter a valid email address");
       return false;
      }

  // validate phone
  var x = document.forms["contform"]["phone"].value;
  if (x == null || x == "")
    {
     alert ("Please enter your phone");
     return false;
    }
  else
    if (x.search(/\d{3}\-\d{3}\-\d{4}/) == -1)
      {
       alert ("Please enter phone number with format xxx-xxx-xxxx");
       return false;
      }

  // validate message
  var x = document.forms["contform"]["message"].value;
  x=x.trim();
  if (x == null || x == "")
    {
     alert ("Please leave a message");
     return false;
    }

 }
</script>


	<article class="contact_form">
	<h1>Contact Us!</h1>
	<p>Interested in organizing volunteer work for Cold Spring Park? Want to host an event here? Thinking about sharing public art pieces? We would love to hear from you. Hoodie organic irure, gentrify four loko marfa whatever tempor tattooed. Whatever before they sold out scenester sriracha stumptown voluptate occupy non narwhal seitan, photo booth freegan leggings post-ironic.</p></br></br>
	
	<div id="stylized" class="myform">
<form method='post' name='contform' action='send_email.php' onsubmit = "return validateForm()">
<label for="name">Name:</label>
<input type="text" id="name" name="name" placeholder="Enter Your Full Name" />

<label for="email">Email:</label>
<input type="text" name="email" id="email" placeholder="Enter Your Email Address" />

<label for="phone">Phone:</label>
<input type="text" name="phone" id="phone" placeholder="xxx-xxx-xxxx" />

<label for="message">Message:</label>
<textarea rows="12" name="message" id="message" placeholder="Leave a Message"></textarea>

<button type="submit">Submit</button>
<div class="spacer"></div>
</form>
</div>
	</article>
	
</section></br></br></br>

<?php include("footer.php"); ?>