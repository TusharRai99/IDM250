<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@600&display=swap" rel="stylesheet">
    <title><?php wp_title(); ?>
    </title>
    <?php
    // Link - https://developer.wordpress.org/reference/functions/wp_head/
    // Plugins and WordPress core use this function to insert crucial elements into your document (e.g., scripts, styles, and meta tags).
    // Always put wp_head() just before the closing tag of your theme
    wp_head();
    ?>

    <section class="header">


        <nav>
            <a href="index.html"><img src="./images/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-close" onclick="hideMenu()"></i>


                <?php
                // Registered this menu in functions.php
                wp_nav_menu(['theme_location' => 'primary_menu']); ?>


            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

    </section>




</head>

<body>