<?php
require_once __DIR__ . '/../templates/_header.php';
?>


<div id="survey">
<form action = "received.html" method = "post">


<div id ="contact1">
<h3>To contact us you can</h3>
<ol>
    <li>E-Mail us at <a href="mailto:b00088919@student.itb">dreamworks@itb.ie</a></li>
    <li>Or fill out the form below</li>
    </ol>

</div>
</form>


<div id ="contact2">

<br>
<form action="" method="post" enctype="multipart/form-data">
    <label for="Name">First Name: <input type="text" name="firstName" required placeholder="Enter your first name" ></label>
    <br>
    <label for="Name">Last Name: <input type="text" name="firstName" required placeholder="Enter your lastname name"></label>
    <br>
    <label for="Phone">Phone Number: <input type="tel" name="phoneNumber"  pattern = "[\+]\d{2}[\(]\d{2}[\)]\d{4}[\-]\d{4}"  title = "Phone Number (Format: +99(99)9999-9999)" required placeholder="Enter phone number"></label>
    <br>
    <label for="Enail">Email Address: <input type="email" name="emailAddress" required placeholder="Enter email address"></label>
    <br>

<br>
<label for="Priority">Priority: </label> <input type="range" name="contactPriority">
<br>
 Use the following form to send a message:
<br>
		<textarea rows="10" cols="50"  name="message" id = "textarea">
        Enter message Here</textarea>
 </div>

    <br>

<div id = "buttons">

<input type = "submit" name = "submit"
      id = "submit" value = "Send">

<input type = "reset" name = "reset"
      id = "reset" value = "Reset">


</div>
</form>
</div>



<?php
require_once __DIR__ . '/../templates/_footer.php';
?>
