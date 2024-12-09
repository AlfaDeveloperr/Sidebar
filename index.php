<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <!---index  css linkimiz-->
    <link rel="stylesheet" href="./index.css">
    <!---Bocicons css-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="https://github.githubassets.com/images/modules/site/home/globe.jpg?width=742" alt="">
                </span>
            </div>
            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <a href="#">
                        <i class='bx bx-search icon'></i>
                        <input type="search" placeholder="Search...">
                    </a>
                </li>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-home-alt icon"></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-message-detail icon"></i>
                            <span class="text nav-text">message</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-bell icon"></i>
                            <span class="text nav-text">Notifications</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bxl-firebase icon"></i>
                            <span class="text nav-text">Story</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-send icon"></i>
                            <span class="text nav-text">Post</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bxs-videos icon"></i>
                            <span class="text nav-text">lorem</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-credit-card-front icon"></i>
                            <span class="text nav-text">ChatLive</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bxs-purchase-tag icon"></i>
                            <span class="text nav-text">Others</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <div class="btx">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQo_GRCBh9FjvL9md2AkMAFZ3_JpwCTs5ziVw&usqp=CAU"
                                    alt="" class="rounded-circle">
                            </div>
                            <div class="text">Profile</div>
                        </a>
                    </li>


                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class="bx bx-log-out icon"></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="moon-sun">
                        <i class="bx bx-moon icon sun"></i>
                        <i class="bx bx-sun icon moon"></i>
                    </div>
                    <span class="mode-text text">Dark Mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </nav>

    <section class="home">
        <div class="text">Dashborard</div>
    </section>
    <script src="./index.js"></script>
</body>

</html>