<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vCard - Personal Portfolio</title>

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="./assets/images/logo.ico" type="image/x-icon">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

    <!--
    - #MAIN
  -->

    <main>

        <!--
      - #SIDEBAR
    -->

        <aside class="sidebar" data-sidebar>

            <div class="sidebar-info">

                <figure class="avatar-box">
                    <img src="./assets/images/my-avatar.png" alt="Richard hanrick" width="80">
                </figure>

                <div class="info-content">
                    <h1 class="name" title="Richard hanrick">Richard hanrick</h1>

                    <p class="title">Web developer</p>
                </div>

                <button class="info_more-btn" data-sidebar-btn>
                    <span>Show Contacts</span>

                    <ion-icon name="chevron-down"></ion-icon>
                </button>

            </div>

            <div class="sidebar-info_more">

                <div class="separator"></div>

                <ul class="contacts-list">

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Email</p>

                            <a href="mailto:richard@example.com" class="contact-link">richard@example.com</a>
                        </div>

                    </li>

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="phone-portrait-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Phone</p>

                            <a href="tel:+12133522795" class="contact-link">+1 (213) 352-2795</a>
                        </div>

                    </li>

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Birthday</p>

                            <time datetime="1982-06-23">June 23, 1982</time>
                        </div>

                    </li>

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Location</p>

                            <address>Sacramento, California, USA</address>
                        </div>

                    </li>

                </ul>

                <div class="separator"></div>

                <ul class="social-list">

                    <li class="social-item">
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li class="social-item">
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li class="social-item">
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                </ul>

            </div>

        </aside>





        <!--
      - #main-content
    -->

        <div class="main-content">

            <!--
        - #NAVBAR
      -->

            <nav class="navbar">

                <ul class="navbar-list">

                    <li class="navbar-item">
                        <a href="/" class="navbar-link <?= $status == 'about' ? 'active' : '' ?>"
                            data-nav-link>About</a>
                    </li>

                    <li class="navbar-item">
                        <a href="resume" class="navbar-link <?= $status == 'resume' ? 'active' : '' ?>"
                            data-nav-link>Resume</a>
                    </li>

                    <li class="navbar-item">
                        <a href="project" class="navbar-link <?= $status == 'project' ? 'active' : '' ?>"
                            data-nav-link>Portfolio</a>
                    </li>

                    <li class="navbar-item">
                        <a href="blog" class="navbar-link <?= $status == 'blog' ? 'active' : '' ?>"
                            data-nav-link>Blog</a>
                    </li>

                    <li class="navbar-item">
                        <a href="contact" class="navbar-link <?= $status == 'contact' ? 'active' : '' ?>"
                            data-nav-link>Contact</a>
                    </li>

                </ul>

            </nav>
