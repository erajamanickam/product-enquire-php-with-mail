<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#2e3a4d" />
    <meta name="description" content="We have create a Product Enquiry using PHP with Mail function that is easy to understand" />
    <meta name="keywords" content="PHP product enquiry, how to create Product Enquiry using PHP" />
    <meta name="author" content="Rajamanickam">
    <title>Simple Product Enquiry using PHP with Mail function</title>

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.0/css/all.min.css" />

</head>
<body>
<?php

// fetch date and time 
date_default_timezone_set('Asia/Kolkata');
$currentDate = date( 'd/m/Y' );
$currentTime = date( 'h:i:s A', time () );

if(isset($_POST['submit'])){
    $to = "erajamanickam72@gmail.com"; 
    $from = $_POST['email']; 
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $total = $_POST['total'];
    $day = $_POST['day'];
    $time = $_POST['time'];

    $mouse_total = $_POST['mouse_total'];
    $mouse_quantity = $_POST['mouse_quantity'];

    $pendrive_total = $_POST['pendrive_total'];
    $pendrive_quantity = $_POST['pendrive_quantity'];

    $keyboard_total = $_POST['keyboard_total'];
    $keyboard_quantity = $_POST['keyboard_quantity'];

    $table_total = $_POST['table_total'];
    $table_quantity = $_POST['table_quantity'];

    $subject = "Product Enquiry From";
    $message = '<!DOCTYPE html>
    <html>
    <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <style type="text/css"> 
    body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
    table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
    img { -ms-interpolation-mode: bicubic; } 
    img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
    table { border-collapse: collapse !important; }
    body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }
    a[x-apple-data-detectors] {
        color: inherit !important;
        text-decoration: none !important;
        font-size: inherit !important;
        font-family: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
    }
    @media screen and (max-width: 480px) {
        .mobile-hide {
            display: none !important;
        }
        .mobile-center {
            text-align: center !important;
        }
    }
    div[style*="margin: 16px 0;"] { margin: 0 !important; }
    </style>
    <body style="margin: 0 !important; padding: 0 !important; background-color: #eeeeee;" bgcolor="#eeeeee">
    <div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: Open Sans, Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
    For what reason would it be advisable for me to think about business content? That might be little bit risky to have crew member like them. 
    </div>
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td align="center" style="background-color: #eeeeee;" bgcolor="#eeeeee">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                <tr>
                    <td align="center" valign="top" style="font-size:0; padding: 35px;" bgcolor="#2e3a4d">
                    <div style="display:inline-block; min-width:100px; vertical-align:top; width:100%;">
                        <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td align="left" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 36px; font-weight: 800; line-height: 48px;" class="mobile-center">
                                    <h1 style="font-size: 36px; font-weight: 400; text-align: center; margin: 0; color: #ffffff;">Product Enquiry</h1>
                                </td>
                            </tr>
                        </table>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td align="center" style="padding: 35px 35px 20px 35px; background-color: #ffffff;" bgcolor="#ffffff">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                        <tr>
                            <td align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">
                                <p style="font-size: 16px; font-weight: 400; line-height: 24px; color: #777777;">
                                    Hi admin,</p>
                                    <p style="font-size: 16px; font-weight: 400; line-height: 24px; color: #777777;">
                                    <?php echo $name; ?>, has been enquire your products.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="padding-top: 20px;">
                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td width="25%" align="left" bgcolor="#eeeeee" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;">
                                            Name
                                        </td>
                                        <td width="25%" align="left" bgcolor="#eeeeee" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;">
                                            Amount
                                        </td>
                                        <td width="25%" align="left" bgcolor="#eeeeee" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;">
                                            Qty
                                        </td>
                                        <td width="25%" align="left" bgcolor="#eeeeee" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;">
                                            Total
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">
                                            Wired Mouse	
                                        </td>
                                        <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">
                                            499
                                        </td>
                                        <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">
                                            <?php echo $mouse_quantity; ?>
                                        </td>
                                        <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">
                                            <?php echo $mouse_total; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                            128GB Pendrive	
                                        </td>
                                        <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                            990
                                        </td>
                                        <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">
                                            <?php echo $mouse_quantity; ?>
                                        </td>
                                        <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">
                                            <?php echo $mouse_total; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                            Wireless Keyboard	
                                        </td>
                                        <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                            1299
                                        </td>
                                        <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">
                                            <?php echo $keyboard_quantity; ?>
                                        </td>
                                        <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">
                                            <?php echo $keyboard_total; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                            Portable Laptop table	
                                        </td>
                                        <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                            899
                                        </td>
                                        <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">
                                            <?php echo $table_quantity; ?>
                                        </td>
                                        <td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">
                                            <?php echo $table_total; ?>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="padding-top: 20px;">
                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;">
                                            TOTAL
                                        </td>
                                        <td width="25%" align="right" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;">
                                            ₹ <?php echo $total; ?>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    </td>
                </tr>
                 <tr>
                    <td align="center" height="100%" valign="top" width="100%" style="padding: 0 35px 35px 35px; background-color: #ffffff;" bgcolor="#ffffff">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:660px;">
                        <tr>
                            <td align="center" valign="top" style="font-size:0;">
                                <div style="display:inline-block; min-width:240px; vertical-align:top; width:100%;">
    
                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                                        <tr>
                                            <td align="left" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px;">
                                                <p>Please find below customer details.</p>
                                                <p><?php echo $name; ?><br><?php echo $phone; ?><br><?php echo $from; ?><br><?php echo $address; ?></p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    </table>
                    </td>
                </tr>
                <tr>
                    <td align="center" style="padding: 35px; background-color: #ffffff;border-top:1px solid #eee;" bgcolor="#ffffff">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                        <tr>
                            <td width="50%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                Thankyou
                            </td>
                            <td width="50%" align="right" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                <?php echo $time; ?>,
                                <?php echo $day; ?>
                            </td>
                        </tr>
                    </table>
                    </td>
                </tr>
            </table>
            </td>
        </tr>
    </table>
    </body>
    </html>';  
   
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    mail($to,$subject,$message,$headers);

    echo "<script>alert('Thank you $name. We reach out shortly.');</script>";

    }
?>

    <main>
        <section>
            <div class="container">
                <div class="row">
                <div class="col-lg-12 col-md-12 py-4">
                    <h2 class="text-center">Quick Enquiry</h2>
                    <p class="text-center desc">Submit your enquiry and get the best deal</p>
                </div>
                
                    <div class="col-lg-6 col-md-12">
                        <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                        <form method="post">
                            <tr>
                                <td>1</td>
                                <td>Wired Mouse</td>
                                <td id="mouse_amount">499</td>
                                <td><input type="text" id="mouse_quantity" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" onblur="calculate(event)" name="mouse_quantity"></td>
                                <td><input type="text" id="mouse_total" name="mouse_total" class="form-control" readonly></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>128GB Pendrive	</td>
                                <td id="pendrive_amount">990</td>
                                <td><input type="text" id="pendrive_quantity" class="form-control" onblur="calculate(event)" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" name="pendrive_quantity"></td>
                                <td><input type="text" id="pendrive_total" class="form-control" name="pendrive_total" readonly></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Wireless Keyboard</td>
                                <td id="keyboard_amount">1299</td>
                                <td><input type="text" id="keyboard_quantity" class="form-control" onblur="calculate(event)" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" name="keyboard_quantity"></td>
                                <td><input type="text" id="keyboard_total" class="form-control" name="keyboard_total" readonly></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Portable Laptop table</td>
                                <td id="table_amount">899</td>
                                <td><input type="text" id="table_quantity" class="form-control" onblur="calculate(event)" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" name="table_quantity"></td>
                                <td><input type="text" id="table_total" class="form-control" name="table_total" readonly></td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                                <td><strong>Total Amount</strong> </td>
                                <td><input type="text" id="total" class="form-control" name="total" readonly></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    <div class="col-lg-6 col-md-12 ">
                        <div class="contact-wrapper white-bg">
                        <div class="contact-form">
                           <form id="contactForm">
                              <div class="row">
                                <div class="col-lg-12">
                                    <div class="contact-input-wrapper mb-25">
                                       <div class="contact-input">
                                        <input type="hidden" id="time" name="time" value="<?php echo $currentTime; ?>"  />
                                        <input type="hidden" id="day" name="day" value="<?php echo $currentDate; ?>" />
                                          <input type="text" id="name" name="name" placeholder="Enter name">
                                          <i class="fa fa-user"></i>
                                       </div>
                                    </div>
                                 </div>
                                 
                              </div>
                              <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact-input-wrapper mb-25">
                                       <div class="contact-input">
                                          <input type="text" id="email" name="email" placeholder="e-mail address">
                                          <i class="fa fa-envelope"></i>
                                       </div>
                                    </div>
                                 </div>
                                  <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact-input-wrapper mb-25">
                                       <div class="contact-input">
                                          <input type="text" id="phone" name="phone" placeholder="Phone Number">
                                          <i class="fa fa-mobile-alt"></i>
                                       </div>
                                    </div>
                                 </div>
                                
                              </div>
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="contact-input-wrapper mb-25">
                                       <div class="contact-input textarea">
                                          <textarea id="address" name="address" placeholder="Your Address"></textarea>
                                          <i class="fa fa-map-marker"></i>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-12">
                                    <input type="submit" value="Submit" name="submit" class="m-btn m-btn-" style="text-align:center;border:none;">
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                </div>
            </div>
        </section>
    </main>
    <script>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>