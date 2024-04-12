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

<title>Pertinences - Accueil</title>

<meta content="width=device-width, initial-scale=1.0" name="viewport">

<meta content="Pertinences CI, une équipe à votre service" name="keywords">

<meta content="Pertinences CI, A votre disposition pour accompagner vos succès !" name="description">



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