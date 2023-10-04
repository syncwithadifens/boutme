<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>

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
                    <h1 class="name" title="Richard hanrick">{{ $data['user']->name }}</h1>

                    <p class="title">{{ $data['user']->job }}</p>
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

                            <a href="mailto:richard@example.com" class="contact-link">{{ $data['user']->email }}</a>
                        </div>

                    </li>

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="phone-portrait-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Phone</p>

                            <a href="tel:+12133522795" class="contact-link">{{ $data['user']->phone_number }}</a>
                        </div>

                    </li>

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Birthday</p>

                            <time datetime="1982-06-23">{{ $data['user']->birthday }}</time>
                        </div>

                    </li>

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Location</p>

                            <address>{{ $data['user']->address }}</address>
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
                        <a href="{{ url('/') }}"
                            class="navbar-link <?= $data['status'] == 'about' ? 'active' : '' ?>"
                            data-nav-link>About</a>
                    </li>

                    <li class="navbar-item">
                        <a href="{{ url('/resume') }}"class="navbar-link <?= $data['status'] == 'resume' ? 'active' : '' ?>"
                            data-nav-link>Resume</a>
                    </li>

                    <li class="navbar-item">
                        <a href="{{ url('/project') }}"class="navbar-link <?= $data['status'] == 'project' ? 'active' : '' ?>"
                            data-nav-link>Project</a>
                    </li>

                    <li class="navbar-item">
                        <a href="{{ url('/certificate') }}"class="navbar-link <?= $data['status'] == 'certificate' ? 'active' : '' ?>"
                            data-nav-link>Certificate</a>
                    </li>

                    <li class="navbar-item">
                        <a href="{{ url('/contact') }}"class="navbar-link <?= $data['status'] == 'contact' ? 'active' : '' ?>"
                            data-nav-link>Contact</a>
                    </li>

                </ul>

            </nav>
            @yield('content')
        </div>

    </main>






    <!--
    - custom js link
  -->
    <script src="./assets/js/script.js"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
