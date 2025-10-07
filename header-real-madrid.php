<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div id="page" class="site">

        <header class="real-madrid-header">
            <section class="top-bar">
                <div class="container">
                    <div class="logo">
                        <a href="<?php echo home_url( '/' ); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/realmadrid-logo.png" alt="Real Madrid Logo">
                        </a>
                    </div>
                    <div class="club-name">
                        <h1>Real Madrid CF</h1>
                        <p>¡Hala Madrid y nada más!</p>
                    </div>
                    <div class="searchbox">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </section>

            <section class="menu-area">
                <div class="container">
                    <nav class="main-menu">
                        <button class="check-button">
                            <div class="menu-icon">
                                <div class="bar1"></div>
                                <div class="bar2"></div>
                                <div class="bar3"></div>
                            </div>
                        </button>
                        <?php wp_nav_menu( array( 
                            'theme_location' => 'wp_devs_main_menu', 
                            'depth' => 2 
                        )); ?>
                    </nav>                    
                </div>
            </section>
        </header>

<style>
/* --- Real Madrid Header Style --- */
.real-madrid-header {
    background: linear-gradient(180deg, #ffffff 0%, #f7f7f7 100%);
    border-bottom: 3px solid #003399;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
}
.real-madrid-header .top-bar {
    padding: 20px 0;
}
.real-madrid-header .logo img {
    width: 90px;
    height: auto;
}
.real-madrid-header .club-name {
    text-align: center;
}
.real-madrid-header .club-name h1 {
    color: #003399;
    font-weight: 700;
    margin-bottom: 5px;
    text-transform: uppercase;
}
.real-madrid-header .club-name p {
    color: #ffcc00;
    font-style: italic;
    margin: 0;
}
.real-madrid-header .searchbox {
    float: right;
}
.real-madrid-header .menu-area {
    background: #003399;
}
.real-madrid-header .main-menu ul {
    display: flex;
    justify-content: center;
    gap: 25px;
    margin: 0;
    padding: 10px 0;
    list-style: none;
}
.real-madrid-header .main-menu ul li a {
    color: #fff;
    font-weight: 600;
    text-decoration: none;
    text-transform: uppercase;
    transition: 0.3s;
}
.real-madrid-header .main-menu ul li a:hover {
    color: #ffcc00;
}
</style>
