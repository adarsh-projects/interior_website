<?php
    if(isset($_POST['submit'])){
        
        /*$name = $_POST['name'];
        $phone_number = $_POST['mobile'];
        $message = $_POST['message'];
        
        $message = 'Name: '.$name.'
Phone Number : '.$phone_number.'
Message : '.$message;
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2?authorization=SZqLNtwApF54hgkvdr8mnD2yGVoU0Ke6WEMfXa3BOsICPTiRYHItsQY7CPga0ji3ez65LnqNJBDwTZH8&message=".urlencode($message)."&language=english&route=q&numbers=".urlencode("9892662597,8879616692"),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="check.css">
</head>
<body>
    <section id="contact_id" class="contact bg-dark">
        <div class="conHead text-center text-light mx-auto my-5">
            <h1 style="font-size: 5.0rem; color: white; padding-top: 10rem;">Reach To Us</h1>
        </div>
        <div class="contact-wrap">
            <div class="contact-in" style="margin-bottom: 1.0rem;">
                <h1 style="letter-spacing: .3rem;">Send a Message</h1>
                <form method="POST">
                    <input type="text" name="name" placeholder="Enter Your Name:" class="contact-in-input">
                    <input type="number" name="mobile" placeholder="Enter mobile number" class="contact-in-input">
                    <textarea name="message" placeholder="Enter message" cols="30" rows="10" class="contact-in-input"></textarea>
                    <button type="submit" name="submit" class="contact-in-btn"> Submit </button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
