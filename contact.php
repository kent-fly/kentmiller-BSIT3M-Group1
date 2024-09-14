<?php
$responseMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $message = $_POST["message"];
    
    if (empty($name)) {
        $responseMessage .= "<br><p>Gimme your name, don't be shy bbg ~(˘▾˘~)</p>";
    }
    if (empty($email)) {
        $responseMessage .= "<p>Why won't you give us your email? You don't want our reply? (ಥ﹏ಥ)</p>";
    } else {
        if (!empty($name) && !empty($email)) {
            $responseMessage .= "<p>
									Hi, <b>$name</b>!<br>
									Thank you for reaching out to us! We truly appreciate it. Your message has been safely delivered to our inbox.
									You can expect a reply at <b>$email</b> or on your mobile number <b>$mobile</b>.
								</p>";
			$responseMessage .= "<p> If you need immediate assistance, don't hesitate to reach out. Our reliable customer service team is available at <em>09123456789</em>.<br></p>";
			$responseMessage .= "<p> For more details about where to contact us, check the box below this response.</p>";
        }
    }
    if (empty($message)) {
        $responseMessage .= "<p>I think your message is missing... (o_O) ?</p>";
		$responseMessage .= "<p>If the form on the left is not working, check the box below this response for more details on where to contact us.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Group Exercise #4</title>
    <link href="contact.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav>
        <div class="navbar">
            <a href="homepage.htm">Home</a>
            <a href="exercise1.php">Our Team</a>
            <a href="certif.htm">Certificates</a>
            <a href="port.htm">Portfolio</a>
            <a href="project.htm">Our Projects</a>
            <a href="merch.php">Merch</a>
            <a href="contact.php">Contact Us</a>
        </div>
    </nav>
    
    <div class="header">
        <h1>Got somethin' to say?</h1>
        <p>
            Whether it’s a question, feedback, a complaint, or a suggestion, feel free to connect with us through the beacon below.
            We’ll get back to you as quickly as your delivery (๑>ᗜºั).
        </p>
    </div>
    
    <div class="wrapper">
        <div class="container">
            <h2>Activate the Beacon to Contact Us</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="return confirmSubmission()">
                <label class="title">
                    Name: <input type="text" name="name" placeholder="Harry Watson" value="<?php echo isset($name) ? $name : ''; ?>"><br><br>
                </label>
                <label class="title">
                    Email: <input type="email" name="email" placeholder="example@gmail.com" value="<?php echo isset($email) ? $email : ''; ?>"><br><br>
                </label>
                <label class="title">
                    Mobile Number: <input type="text" name="mobile" placeholder="09XX-XXX-YYYY" value="<?php echo isset($mobile) ? $mobile : ''; ?>"><br><br>
                </label>
                <label class="title">
                    Message: <textarea name="message" rows="5" cols="40" placeholder="Write your message here"><?php echo isset($message) ? $message : ''; ?></textarea><br><br>
                </label>
                <input type="submit" name="submit" value="BEAM!">  
            </form>
        </div>
        
        <div class="response-box">
            <h2>Hey There!</h2>
            <p>
				After you've clicked the beam. I'll tell you if we've received the message or not. Make sure all the information you've put are correct or else, 
				we won't be able to contact you. q(╯ᆺ╰๑)
			</p>
            <?php echo $responseMessage; ?>
        </div>
		<!-- not finished
		<div class="details">
            <h2>Contact Information</h2>
            <p>
				Email:wafflesandmilk.bread@yahoo.com
				Phone:0987-369-2770
				Address:19 Duck Ave., 1987 St.
			</p>
			lalagyan icon ng facebook, X, insta, linkedln
        </div>
		 -->
    </div>
    
    <hr>
    
    <footer>
        <p style="margin-left:30px;"><small>Made by Abalain, Almaida, Catimbang, Cuano & Morante 2024 © Copyright Intended</small></p>
    </footer>
    
    <script>
        function confirmSubmission() {
            return confirm("Are you sure you want to submit the form (o_O) ? ");
        }
    </script>
    
</body>
</html>
