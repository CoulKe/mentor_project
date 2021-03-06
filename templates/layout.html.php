<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/normalize.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <title>Mentor project | <?= $title ?> </title>
</head>

<body>
    <nav>
        <div class="container nav">
            <p id="site-title"><a href="index">Job search</a></p>
            <img src="./assets/images/hamburger.png" alt="menu" id="menu">
            <ul>
            <li id="cancelMenu"><a href="#">&times;</a></li>
                <li><a class="link" href="index">Home</a></li>
                <li><a class="link" href="jobs">Jobs</a></li>
                <li><a class="link" href="employers">Employers</a></li>
                <li><a class="link" href="candidates">Candidates</a></li>
                <?php
                if (isset($_SESSION['password'])) {
                    echo '<div id="join">Account
                <div class="dropdown-content">
                    <a href="profile">Profile</a>
                    <a href="logout">Logout</a>
                </div>
            </div>';
                } else {
                    echo '<div id="join">Join
                <div class="dropdown-content">
                    <a href="login">Login</a>
                    <a href="register">Register</a>
                </div>
            </div>';
                }
                ?>
            </ul>
        </div>
    </nav>
    <main>
        <?= $output ?>
    </main>
    <footer>

        <div id="quick_links">
            <div class="container">
                <div class="links_wrapper">
                    <div id="company_links">
                        <a href="" class="quick_link">About us</a>
                        <a href="" class="quick_link">Terms and conditions</a>
                        <a href="" class="quick_link">Privacy policy</a>
                        <a href="" class="quick_link">Support</a>
                    </div>
                    <div id="users_links">
                        <a href="" class="quick_link">Upload resume</a>
                        <a href="jobs" class="quick_link">Browse jobs</a>
                        <a href="employers" class="quick_link">Employers</a>
                        <a href="candidates" class="quick_link">Candidates</a>
                    </div>

                    <div id="other_links">
                        <a href="" class="quick_link">Pricing</a>
                        <a href="" class="quick_link">Contacts</a>
                        <a href="" class="quick_link">Post job</a>
                    </div>
                </div>

                <div id="newsletter">
                    <h1>Subscribe to our newsletter</h1>
                    <form action="" method="post">
                        <label for="email">Email:</label> <br>
                        <input type="email" placeholder="Enter your email" name="email"> <br>
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
        <div id="copyright">
            <p>Developed by Luteya Coulston</p>
            <p>2020 &copy</p>
        </div>
    </footer>
    <script src="./assets/js/menu.js"></script>
</body>

</html>