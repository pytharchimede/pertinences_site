<!DOCTYPE html>

<html lang="en">

    <head>

        <script>

            (function (m, a, z, e) {

              var s, t;

              try {

                t = m.sessionStorage.getItem('maze-us');

              } catch (err) {}

            

              if (!t) {

                t = new Date().getTime();

                try {

                  m.sessionStorage.setItem('maze-us', t);

                } catch (err) {}

              }

            

              s = a.createElement('script');

              s.src = z + '?apiKey=' + e;

              s.async = true;

              a.getElementsByTagName('head')[0].appendChild(s);

              m.mazeUniversalSnippetApiKey = e;

            })(window, document, 'https://snippet.maze.co/maze-universal-loader.js', '5edbeb0c-774a-4b08-9aa1-de38a02c0dfb');

            </script>

        <meta charset="utf-8">

        <title>Confer - Consulting Website Template Free Download</title>

        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <meta content="Consulting Website Template Free Download" name="keywords">

        <meta content="Consulting Website Template Free Download" name="description">



        <!-- Favicon -->

        <link href="img/favicon.ico" rel="icon">



        <!-- Google Font -->

        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">

        

        <!-- CSS Libraries -->

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <link href="lib/animate/animate.min.css" rel="stylesheet">

        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">



        <!-- Template Stylesheet -->

        <link href="css/style.css" rel="stylesheet">

    </head>



    <body class="page">

         <!-- Top Bar Start -->
         <?php include('src/top_bar.php'); ?>
        <!-- Top Bar End -->



        <!-- Nav Bar Start -->
        <?php include('src/nav_bar.php'); ?>
        <!-- Nav Bar End -->


        <!-- Service Start -->

        <?php include('src/service_section.php'); ?>

        <!-- Service End -->



        <!-- Feature Start -->

        <?php include('src/feature_section.php'); ?>

        <!-- Feature End -->



        <!-- Footer Start -->

        <?php include('src/footer.php') ?>

        <!-- Footer End -->



        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>



        <!-- JavaScript Libraries -->

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

        <script src="lib/easing/easing.min.js"></script>

        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <script src="lib/waypoints/waypoints.min.js"></script>

        <script src="lib/counterup/counterup.min.js"></script>

        

        <!-- Contact Javascript File -->

        <script src="mail/jqBootstrapValidation.min.js"></script>

        <script src="mail/contact.js"></script>



        <!-- Template Javascript -->

        <script src="js/main.js"></script>

    </body>

</html>

