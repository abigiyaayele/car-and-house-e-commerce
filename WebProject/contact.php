<?php include 'components/admin_header.php' ?>


<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, intial -scale=1.0">
  <title> Contact </title>
  <link rel ="stylesheet" href ="style.css">

</head>
<body>
    <div class="container">
        <form onsubmit="sendEmail(); reset(); return false;">
            <h3> GET IN TOUCH</h3>
            <input type="text" id="name" placeholder=" Your Name" required>
            <input type="email" id="email" placeholder=" Email" required>
            <input type="text" id="phone" placeholder=" Phone number" required>
            <textarea id="message"  rows="4"  placeholder=" How can we Help you ?"></textarea>
            <button type="submit">Send</button>
        </form>

    </div>
 
    <script src=" https://smtpjs.com/v3/smtp.js"></script>
    <script>
        function sendEmail(){
            Email.send({
                 Host : "smtp.elasticemail.com",
                 Username : "bzendale6@gmail.com",
                 Password : "0959770F37BC98061BDC371CE590A62DB1A1",
                 To : 'bzendale6@gmail.com',
                 From : document.getElementById("email").value,
                 Subject : "New Contact Form Enquiry",
                 Body : "Name :" +document.getElementById("name").value
                 +"<br> Email:" +document.getElementById("email").value
                 +"<br> Message:" +document.getElementById("message").value
            }).then(
            message => alert("Message sent Succesfully")
            );
        }
    </script>
</body>


</html>