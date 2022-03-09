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
        <div class="db" style="height:100vh;">
            <!--LEFT SECTION-->
            <div class="db-l">
                <div class="db-l-1">
                    <ul>
                        <li><img src="images/db-profile.jpg" alt="" />
                    </ul>
                </div>
            </div>
            <!--CENTER SECTION-->
            <div class="db-2">
                <div class="db-2-com db-2-main">
                    <h4>User Panel</h4>
                    <div class="db-2-main-com db-2-main-com-table">
                        <table class="responsive-table">
                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Tour Name</th>
                                    <th>Tour Start Date</th>
                                    <th>Advance Payment</th>
                                    <th>Seat Confirmed</th>
                                    <th>View Ticket</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Australia</td>
                                    <td>12 Aug 2017</td>
                                    <td>$784</td>
                                    <td><span class="db-done">Done</span>
                                    </td>
                                    <td><a href="#" class="db-down-pdf"><i class="fa fa-download"
                                                aria-hidden="true"></i> Download PDF</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Australia</td>
                                    <td>12 Aug 2017</td>
                                    <td>$784</td>
                                    <td><span class="db-done">Done</span>
                                    </td>
                                    <td><a href="#" class="db-down-pdf"><i class="fa fa-download"
                                                aria-hidden="true"></i> Download PDF</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- center section end -->
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