<?php
    session_start();
    $responseMessage = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $message = $_POST["message"];

        // Saving message to a text file
        $file = fopen('message.txt', 'a');
        $data = "Name: $name, Email: $email, Mobile: $mobile, Message: $message\n";
        fwrite($file, $data);
        fclose($file);
        
        // Confirmation Response 
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
                $responseMessage .= "<p> If you need immediate assistance, don't hesitate to reach out. Our reliable customer service team is available at <em>09123456789</em>.</p>";
            }
        }
        if (empty($message)) {
            $responseMessage .= "<p>I think your message is missing... (o_O) ?</p>";
            $responseMessage .= "<p>If the form on the left is not working, check the box below this response for more details on where to contact us.</p>";
        }

        // Saving Response
        $_SESSION['responseMessage'] = $responseMessage;

        // Sending Response Back to contact.php
        header('Location: contact.php');
        exit();
    }
?>
