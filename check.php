<?php
    if(isset($_POST['submit1'])){
        $name = $_POST['name1'];
        $phone_number = $_POST['phno'];
        $message = $_POST['message1'];
        
        $body = 'Name: '.$name.'\nPhone Number: '.$phone_number.'\n Message: '.$message;
        
        $apiKey = urlencode('NTQ3MjU1NDM0YzQ4Nzk0YTZmNGE0NTM5NDc0NDYyNzI=');
        // Message details
        $numbers = array(918879616692);
        $sender = urlencode(‘TXTLCL’);
        $message = rawurlencode($body);
        
        $numbers = implode(‘,’, $numbers);
        
        // Prepare data for POST request
        $data = array(‘apikey’ => $apiKey, ‘numbers’ => $numbers, “sender” => $sender, “message” => $message);
        // Send the POST request with cURL
        $ch = curl_init(‘https://api.textlocal.in/send/’);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        // Process your response here
        echo $response;


    }
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
                <h1 style="text-align: left; letter-spacing: .3rem;">Contact Info</h1>
                <div class="icon_text_list">
                    <div class="icon_list">
                        <svg version="1.0" style="margin-bottom: 1.5rem;" xmlns="http://www.w3.org/2000/svg"
                            width="1.8rem" height="1.8rem" viewBox="0 0 512.000000 512.000000"
                            preserveAspectRatio="xMidYMid meet">

                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#ffffff"
                                stroke="none">
                                <path d="M894 5105 c-124 -27 -147 -45 -470 -369 -282 -281 -304 -306 -337
                        -376 -55 -116 -68 -178 -74 -342 -6 -165 7 -274 57 -464 301 -1143 1647 -2647
                        2935 -3279 382 -187 671 -269 955 -270 174 0 262 18 383 77 78 38 98 57 379
                        337 314 314 332 337 372 470 21 70 21 202 0 272 -36 120 -51 138 -448 537
                        -209 211 -408 403 -441 427 -198 141 -453 121 -619 -48 -50 -51 -70 -81 -104
                        -162 -24 -54 -55 -115 -70 -135 -96 -130 -280 -212 -437 -196 -234 25 -583
                        237 -879 533 -358 358 -569 770 -518 1010 24 112 103 229 196 291 22 16 70 41
                        106 56 104 44 129 59 178 101 166 145 202 417 81 610 -35 57 -725 754 -809
                        819 -67 51 -155 91 -234 105 -75 14 -125 13 -202 -4z" />
                            </g>
                        </svg>
                        <svg style="margin-top: .6rem; margin-bottom: 2.0rem;" version="1.0"
                            xmlns="http://www.w3.org/2000/svg" width="1.8rem" height="1.8rem"
                            viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">

                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#ffffff"
                                stroke="none">
                                <path d="M366 4464 c-255 -62 -415 -322 -351 -569 20 -75 57 -143 107 -195 45
                        -46 2175 -1471 2253 -1506 119 -54 260 -52 382 5 95 45 2182 1442 2235 1496
                        249 254 113 686 -243 770 -94 22 -4291 21 -4383 -1z" />
                                <path d="M0 2236 c0 -810 3 -1181 11 -1218 37 -176 179 -320 360 -363 94 -22
                        4267 -22 4372 0 182 38 329 184 366 363 13 61 16 2386 3 2380 -4 -1 -487 -323
                        -1074 -715 -587 -392 -1099 -729 -1139 -748 -110 -56 -204 -77 -339 -77 -135
                        0 -229 21 -339 77 -40 19 -552 356 -1139 748 -587 392 -1070 714 -1074 715 -5
                        2 -8 -521 -8 -1162z" />
                            </g>
                        </svg>
                        <svg style="margin-bottom: 1.0rem;" version="1.0" xmlns="http://www.w3.org/2000/svg"
                            width="1.8rem" height="1.8rem" viewBox="0 0 512.000000 512.000000"
                            preserveAspectRatio="xMidYMid meet">

                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#ffffff"
                                stroke="none">
                                <path d="M2425 5114 c-424 -42 -779 -207 -1070 -499 -406 -405 -579 -983 -465
                        -1546 25 -122 69 -257 121 -368 22 -47 360 -665 752 -1374 745 -1350 731
                        -1327 797 -1327 66 0 52 -23 798 1327 391 710 730 1328 751 1374 186 400 205
                        883 52 1296 -90 241 -217 440 -396 618 -259 260 -560 415 -930 481 -80 14
                        -335 26 -410 18z m220 -854 c215 -24 389 -111 537 -268 162 -172 236 -375 225
                        -616 -7 -143 -23 -209 -82 -333 -106 -218 -293 -377 -530 -449 -80 -24 -106
                        -27 -235 -27 -129 0 -155 3 -235 27 -171 52 -318 149 -426 284 -65 80 -138
                        223 -164 317 -25 92 -31 285 -11 381 73 363 373 641 736 683 41 5 80 9 85 10
                        6 0 51 -4 100 -9z" />
                            </g>
                        </svg>
                    </div>
                    <div class="text_list">
                        <p><strong>(+91)</strong> 779 8257 935</p>
                        <p style="margin-top: 1rem;">vasaiinterior@gmail.com</p>
                        <p style="margin-top: 1rem;">Vasant Vihar, Delhi, India</p>
                    </div>
                </div>
                <ul class="social_list">
                    <li><a href="#">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="1.8rem" height="1.8rem"
                                viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                <metadata>
                                    Created by potrace 1.16, written by Peter Selinger 2001-2019
                                </metadata>
                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#ffffff"
                                    stroke="none">
                                    <path d="M2566 5104 c-354 -70 -588 -277 -678 -599 -22 -78 -22 -96 -26 -642
                        l-3 -563 -305 0 -304 0 0 -385 0 -385 300 0 300 0 0 -1265 0 -1265 540 0 540
                        0 0 1265 0 1265 354 0 355 0 25 83 c13 45 63 210 111 367 47 157 88 293 91
                        303 5 16 -22 17 -466 17 l-471 0 3 328 c3 314 4 329 26 385 29 71 62 111 116
                        140 40 21 53 22 384 25 l342 3 0 470 0 469 -582 -1 c-450 -1 -599 -4 -652 -15z" />
                                </g>
                            </svg>
                        </a></li>
                    <li><a href="#">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="1.8rem" height="1.8rem"
                                viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                <metadata>
                                    Created by potrace 1.16, written by Peter Selinger 2001-2019
                                </metadata>
                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#ffffff"
                                    stroke="none">
                                    <path d="M4430 4627 l-335 -164 -76 32 c-234 100 -523 113 -769 33 -289 -93
                        -540 -320 -681 -617 -81 -170 -119 -327 -126 -530 l-6 -143 -66 6 c-36 4 -118
                        18 -181 32 -494 109 -926 379 -1249 779 -56 69 -96 129 -248 364 -15 25 -40
                        53 -54 64 -68 50 -173 24 -229 -57 -51 -74 -106 -193 -136 -291 -25 -83 -27
                        -103 -28 -275 -1 -203 13 -286 74 -429 16 -36 27 -68 25 -70 -2 -2 -37 7 -77
                        19 -126 39 -198 26 -246 -44 -27 -39 -29 -97 -6 -199 80 -360 309 -665 633
                        -844 l71 -40 -67 -17 c-136 -35 -151 -44 -189 -101 -23 -36 -20 -118 6 -160
                        30 -48 177 -175 290 -250 169 -112 396 -214 623 -280 l97 -28 -52 -39 c-82
                        -60 -262 -144 -378 -177 -169 -48 -288 -62 -575 -68 -202 -4 -267 -9 -293 -20
                        -74 -35 -102 -134 -60 -210 74 -135 440 -315 868 -427 628 -164 1303 -192
                        1866 -76 385 80 726 228 1004 438 103 78 294 265 400 392 521 626 727 1345
                        616 2155 l-12 90 65 105 c195 316 191 309 191 365 0 62 -28 111 -80 138 -30
                        16 -50 18 -145 12 -60 -3 -127 -8 -148 -12 l-37 -6 116 239 c138 284 138 284
                        132 339 -6 53 -37 97 -82 119 -70 33 -89 27 -446 -147z" />
                                </g>
                            </svg>
                        </a></li>
                    <li><a href="#">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="1.8rem" height="1.8rem"
                                viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                <metadata>
                                    Created by potrace 1.16, written by Peter Selinger 2001-2019
                                </metadata>
                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#ffffff"
                                    stroke="none">
                                    <path d="M451 5104 c-199 -53 -384 -239 -436 -440 -19 -75 -20 -242 0 -317 85
                        -328 424 -530 749 -447 219 56 394 230 450 447 20 77 21 240 1 313 -56 211
                        -234 391 -441 444 -77 20 -249 20 -323 0z" />
                                    <path d="M3676 3499 c-337 -44 -632 -223 -805 -489 l-36 -55 -3 233 -2 232
                        -510 0 -510 0 0 -1710 0 -1710 535 0 535 0 0 941 c0 1020 2 1059 55 1228 83
                        260 272 391 564 391 176 0 278 -36 374 -132 70 -69 120 -169 150 -302 21 -89
                        21 -119 24 -1108 l4 -1018 535 0 535 0 -4 1148 c-3 994 -5 1161 -19 1252 -26
                        164 -47 257 -83 367 -151 455 -451 681 -974 733 -120 12 -267 11 -365 -1z" />
                                    <path d="M80 1710 l0 -1710 535 0 535 0 0 1710 0 1710 -535 0 -535 0 0 -1710z" />
                                </g>
                            </svg>

                        </a></li>
                    <li><a href="#">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="1.8rem" height="1.8rem"
                                viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                <metadata>
                                    Created by potrace 1.16, written by Peter Selinger 2001-2019
                                </metadata>
                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#ffffff"
                                    stroke="none">
                                    <path d="M1497 5109 c-428 -23 -754 -139 -991 -350 -317 -283 -456 -611 -486
                        -1149 -27 -487 -20 -1997 11 -2270 42 -382 172 -680 392 -902 178 -179 350
                        -280 602 -353 270 -78 470 -88 1690 -82 980 4 1059 7 1260 48 590 119 990 522
                        1104 1111 40 206 42 315 39 1493 l-4 1130 -23 125 c-60 327 -178 568 -374 768
                        -277 283 -586 402 -1117 432 -215 12 -1881 11 -2103 -1z m2193 -479 c298 -29
                        504 -108 657 -253 114 -107 187 -226 237 -386 38 -120 55 -231 66 -436 13
                        -233 13 -1767 0 -1996 -23 -415 -99 -620 -298 -811 -158 -150 -340 -227 -617
                        -258 -248 -28 -2097 -28 -2330 0 -194 23 -354 71 -471 141 -67 39 -199 161
                        -248 228 -79 107 -141 269 -170 441 -27 162 -36 486 -36 1265 0 766 9 1081 35
                        1240 44 274 147 467 322 608 92 74 159 110 283 151 131 43 278 65 512 76 266
                        12 1917 4 2058 -10z" />
                                    <path d="M3848 4227 c-150 -43 -241 -192 -216 -353 11 -70 35 -118 85 -167 61
                        -62 105 -80 206 -85 83 -4 91 -3 152 27 69 34 112 78 148 151 30 63 31 186 1
                        251 -66 142 -227 217 -376 176z" />
                                    <path d="M2396 3869 c-201 -27 -400 -104 -576 -222 -94 -63 -280 -249 -343
                        -344 -99 -150 -174 -332 -208 -508 -21 -105 -18 -388 5 -493 115 -534 503
                        -923 1038 -1039 116 -25 400 -25 516 0 270 59 474 169 668 362 197 195 312
                        408 371 685 25 118 25 382 0 500 -114 537 -510 935 -1042 1045 -95 20 -332 28
                        -429 14z m380 -489 c301 -77 533 -309 615 -615 17 -62 22 -109 22 -205 0 -144
                        -21 -237 -78 -357 -182 -384 -622 -580 -1015 -452 -288 93 -497 318 -577 619
                        -24 90 -23 289 1 385 102 397 464 669 862 649 51 -2 127 -13 170 -24z" />
                                </g>
                            </svg>

                        </a></li>
                </ul>
            </div>
            <div class="contact-in" style="margin-bottom: 1.0rem;">
                <h1 style="letter-spacing: .3rem;">Send a Message</h1>
                <form method="POST" action="check()">
                    <input type="text" name="name1" placeholder="Full Name" class="contact-in-input">
                    <input type="text" name="phno" placeholder="Phone Number" class="contact-in-input">
                    <input type="text" name="message1" placeholder="Message" class="contact-in-input"
                        style="height: 8rem;">
                    <button type="submit" name="submit1" class="contact-in-btn"> Submit </button>
                </form>
            </div>
            <div class="contact-in" style="margin-bottom: 1.0rem;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224345.83923192776!2d77.06889754725782!3d28.52758200617607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2sNew%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1601968196548!5m2!1sen!2sin"
                    width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </section>
</body>
</html>
