<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="logo-place">
        <!-- Logo Section -->
        <img src="path/to/logo.png" alt="Hanan Events Logo">
    </div>

    <div class="search-and-cards">
        <!-- Search Form -->
        <form class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
            <input type="text" name="s" placeholder="Search events...">
            <button type="submit">Search</button>
        </form>

        <!-- Cards Section -->
        <div class="cards">
            <!-- Card 1 -->
            <div class="card">
                <img src="path/to/image1.jpg" alt="Event Image 1">
                <div class="card-content">
                    <h3>Event 1</h3>
                    <a href="book-tickets.html" class="btn">Book Your Tickets Now</a>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="card">
                <img src="path/to/image2.jpg" alt="Event Image 2">
                <div class="card-content">
                    <h3>Event 2</h3>
                    <a href="book-tickets.html" class="btn">Book Your Tickets Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Bar -->
    <nav class="main-nav">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#events">Events</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header>
