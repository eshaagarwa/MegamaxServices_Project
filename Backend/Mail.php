<?php
    
function mailcontact($email, $event) {
    $subject = "WELCOME TO MEGAMAX - Empowering Businesses with Emerging Technologies";
    $htmlbody = "
    <html>
    <head>
    </head>
    <body style='font-family: Arial, sans-serif; background-color: #f5f5f5; margin: 0; padding: 0;'>
        <table border='0' cellpadding='0' cellspacing='0' width='100%'>
            <tr>
                <td style='background-color: #f5f5f5;' align='center'>
                    <table border='0' cellpadding='0' cellspacing='0' width='600' style='background-color: #fff; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);'>
                        <tr>
                            <td align='center' style='padding: 20px;'>
                                <!-- Example image -->
                                <img src='https://sacglau.in/assets/img/sac.png'  style='max-width: 200px; height: auto; margin: 10px 0;display: block; margin-left: auto; margin-right: auto;' />
                                <h2 style='color: #007BFF; font-size: 24px;'> You Are Registered For ".$event."</h2>
                              
                                <h2 style='font-size: 16px; line-height: 1.5; margin: 10px 0; font-weight:bolder; color: darkgreen;'>Join Whatsapp Group link:  <a href='https://chat.whatsapp.com/K5KaJnZIKRKANPr5tcXAJz'>Click Here</a></h2>
          
                                <br>
                                <br>
                                <br>
                                <p style='font-size: 16px; line-height: 1.5; margin: 10px 0;'><strong>For Any Payment Or Approval Issue Kindly Contact :</strong> </p>
                                <p style='font-size: 16px; line-height: 1.5; margin: 10px 0;'><strong>Faculty: Satish Kumar</strong> </p>
                                <p style='font-size: 16px; line-height: 1.5; margin: 10px 0;'><strong>Phone: 7060003665</strong> </p>
                                <p style='font-size: 16px; line-height: 1.5; margin: 10px 0;'><strong>AB-1 313, DSW OFFICE, GLA UNIVERSITY</strong> </p>
                                
                                <br><br><br><br>
                                <p style='font-size: 16px; line-height: 1.5; margin: 10px 0;'>For Any Technical Queries :</p>
                                <p style='font-size: 11px; line-height: 1.5'>Vishal Tiwari</p>
                                <p style='font-size: 11px; line-height: 1.5'>+91-9760788594, +91-6398997879</p>
                                <p style='font-size: 11px; line-height: 1.5'>SAC TI,VC</p>
                                <p style='font-size: 11px; line-height: 1.5'>GLA UNIVERSITY</p>
                                <br>
                                <p style='font-size: 16px; line-height: 1.5; margin: 10px 0;'>Feel free to explore our platform and enjoy the benefits of being a GLAU STUDENT.</p>
                                <p style='font-size: 16px; line-height: 1.5; margin: 10px 0;'>visit: www.sacglau.in | www.sacglau.tech | Design & Developed By: Vishal Tiwari</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
    </html>";

    $headers = "From: support@sacglau.in\r\n" .
               "Reply-To: support@sacglau.in\r\n" .
               "MIME-Version: 1.0\r\n" .
               "Content-Type: text/html; charset=UTF-8\r\n";

    $result = mail($email, $subject, $htmlbody, $headers);

    if ($result) {

        return true;
    } else {
        // Fetch and log the error
        $error = error_get_last();
        if ($error !== null) {
            $error_message = $error['message'];
            error_log("Email sending failed: $error_message");
        } else {
            error_log("Email sending failed, but no error message available.");
        }
        return false;
    }
}



?>