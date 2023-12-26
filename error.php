<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Page Not Found!</title>
        <link rel="icon" type="image/x-icon" href="assets/img/Favicon Logo.png">

        <?php include 'link.php';?>
        <!-- Google Tag Manager -->
        <script>
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-PVH9BTS');
        </script>
        <!-- End Google Tag Manager -->
        <style>
            footer {
                background-color: white !important;
            }
        </style>
    </head>
    <body>
        <?php include 'header.php';?>

        <div class="container-fluid bg-bluish padding-tb slanted-bottom">
            <div class="container">
                <div class="row pdb-5">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="text-content">
                            <h1>
                                Page Not Found!!
                            </h1>
                            <p>Sorry, but the page you were looking for could not be found.</p>
                        </div>
                        <div class="text-content">
                            <p>
                                You can <a class="text-hover" href="index.php">return to our front page</a>, or drop us a line if you 
                                can't find what you're looking for.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6"></div>
                </div>
            </div>
        </div>


        <?php include 'footer.php';?>
        <?php include 'script.php';?>
    </body>
</html>