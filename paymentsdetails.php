<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">

    <title>Adventure's</title>

    <link rel="shortcut icon" href="images/fav.ico">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:400,500,700" rel="stylesheet">
    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="responsivestyle.css">
    <link rel="stylesheet" href="css/mob.css">
    <link rel="stylesheet" href="css/animate.css">

</head>

<body>
    <!-- navbar -->
    <?php include 'navbar2.php';?>
    <section>
        <div class="db">
            <!--LEFT SECTION-->
            <div class="db-l">
                <div class="db-l-1">
                    <ul>
                        <li><img src="images/db-profile.jpg" alt="" />
                        </li>
                        <li style="width:100%">Scan above <b style="color: black;">QR Code </b>for Payment</li>
                    </ul>
                </div>
            </div>
            <!--CENTER SECTION-->
            <div class="db-2">
                <div class="db-2-com db-2-main">
                    <h4>Pay Advance Price and Confirm your seat</h4>
                    <div class="db-2-main-com db-2-main-com-table">
                        <table class="responsive-table">
                            <tbody>
                                <tr>
                                    <td>Package Name</td>
                                    <td>:</td>
                                    <td>Europe Family Package</td>
                                </tr>
                                <tr>
                                    <td>Duration</td>
                                    <td>:</td>
                                    <td>12Days / 11Nights</td>
                                </tr>
                                <tr>
                                    <td>Total Members</td>
                                    <td>:</td>
                                    <td>7(Adult:5, Children:2)</td>
                                </tr>
                                <tr>
                                    <td>Advance Price to be Paid</td>
                                    <td>:</td>
                                    <td>$1280</td>
                                </tr>
                                <tr>
                                    <td>Enter Your Payment Mobile No.</td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" name="no" placeholder="Mobile No" class="form-control"
                                            id="exampleFormControlInput1" placeholder="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Confirm Your Payment Mobile No.</td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" name="cno" placeholder="Mobile No" class="form-control"
                                            id="exampleFormControlInput1" placeholder="">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="db-mak-pay-bot">
                            <p>
                                <b style="color: red;">Important</b> : Scan above QR code make paymment through your any
                                UPI
                                app and enter your
                                mobile number above and click on Make Payment button to confirm your seat.
                            </p> <a href="db-payment.html" class="waves-effect waves-light btn-large">Make Payment
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>




    <script src="https://kit.fontawesome.com/d62cca87ae.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>