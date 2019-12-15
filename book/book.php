<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Rock Airlines - Book</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="book.css">
    <script src="book.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="/images/favicon/favicon.ico">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/home/home.html">
            <img style="margin-left: 12%;" alt="Brand" src="/images/favicon/favicon.ico"><span
                style="color: #4d4d4d; z-index: 1; font-weight: 600; font-size: 15px;">&nbsp;&nbsp;Red Rock
                Airlines</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/home/home.html">
                        <i class="material-icons">
                            home
                        </i>
                        <span class="home-icon">Home</span>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/schedules/schedules.php">
                        <i class="material-icons">
                            schedule
                        </i>
                        Schedules
                    </a>
                </li>
                <li class="nav-item active">
                    <a style="color: #595959; font-weight: bold;" class="nav-link" href="/book/book.php">
                        <i class="material-icons">
                            book
                        </i>
                        Book
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/frequent/frequent.html">
                        <i class="material-icons material-airplane">
                            airplanemode_active
                        </i>
                        Frequent Flyer
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/jobs/job.html">
                        <i class="material-icons">
                            work
                        </i>
                        Jobs
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/info/info.html#faq">
                        <i class="material-icons">
                            question_answer
                        </i>
                        FAQs
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/info/info.html#privacy-policy">
                        <i class="material-icons">
                            help_outline
                        </i>
                        Contact
                    </a>

                    <hr />
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More
                    </a>
                    <div class="dropdown-menu dropdown-menu-nav" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/info/info.html#privacy-policy">Privacy Policy</a>
                        <a class="dropdown-item" href="/info/info.html#terms-and-conditions">Terms & Conditions</a>
                        <a class="dropdown-item" href="/info/info.html#about">About Us</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div id="main-image-holder">
        <img src="/images/book/walking-airport.jpg" alt="airport people walking" />
    </div>

    <div id="explore-title" style="margin-left: 7%;">
        <h2>Book by ID!</h2>
        <i class="material-icons navigate-icon">
            navigate_next
        </i>
    </div>

    <form name="form" method="post" action="book.php">
        <div class="form-group row">
            <label for="state-select">Already know the <a href = "schedules.php">ID</a> of the flight you want to book?</label>
            <input type="text" class="form-control" id="id-input" placeholder="ID">
        </div>
    </form>

    <div id="explore-title" style="margin-left: 7%;">
        <h2></h2>
        <i class="material-icons navigate-icon">
            navigate_next
        </i>
    </div>

    <footer class="large-footer">
        <div style="text-align: center;" class="footerPart">
            <a href="/home/home.html"><img src="/images/grey-red-rock-logo.png" alt="company image" /></a>
            &nbsp;&nbsp;&nbsp;<span>Red Rock Airlines</span>
            <br />
            <br />
            <br />
            <br />
            <br />
        </div>
        <div style="text-align: center;" class="footerPart">
            <h5>Visit Us</h5>
            <br />
            <a href="https://facebook.com/redrockairlines">Facebook</a> <br />
            <a href="https://twitter.com/redrockairlines">Twitter</a> <br />
            <a href="https://instagram.com/redrockairlines">Instagram</a>
            <br />
            <br />
            <br />
        </div>

        <div class="footerPart" id="scheduleBookHolder">
            <h5>Booking & Schedules&nbsp;&nbsp;&nbsp;</h5>
            <br />
            <a href="/book/book.php">Book a flight</a> <br />
            <a href="/schedules/schedules.php">Flight Schedules</a>
            <br />
            <br />
            <br />
            <br />
        </div>

        <div class="footerPart" id="learnMoreHolder">
            <br />
            <h5>Learn More</h5>
            <br />
            <a href="mailto:redrockairlines@help.com">Contact Us</a> <br />
            <a href="/info/info.html#privacy-policy">Privacy Policy</a> <br />
            <a href="/info/info.html#terms-and-conditions">Terms & Conditions</a> <br />
            <a href="/jobs/job.html">Jobs</a> <br />
            <a href="/info/info.html#about">About Red Rock Airlines</a> <br />
            <a href="/info/info.html#faq">FAQs</a><br />
            <a href="/info/info.html#credits">Credits</a>
        </div>

    </footer>

    <footer class="small-footer">
        <br />
        <div class="footer-part-small">
            <img src="/images/grey-red-rock-logo.png" alt="company image" />
            &nbsp;&nbsp;&nbsp;<span>Red Rock Airlines</span>
        </div>
        <div class="footer-part-small">
            <h5>Visit Us</h5>
            <a href="https://facebook.com/redrockairlines">Facebook</a>&nbsp;&nbsp;
            <a href="https://twitter.com/redrockairlines">Twitter</a>&nbsp;&nbsp;
            <a href="https://instagram.com/redrockairlines">Instagram</a>
        </div>

        <div class="footer-part-small" id="scheduleBookHolder">
            <h5>Booking & Schedules</h5>
            <a href="/book/book.php">Book a flight</a>&nbsp;&nbsp;
            <a href="/schedules/schedules.php">Flight Schedules</a>
        </div>

        <div class="footer-part-small" id="learnMoreHolder">
            <h5>Learn More</h5>
            <a href="mailto:redrockairlines@help.com">Contact Us</a>&nbsp;&nbsp;
            <a href="/info/info.html#privacy-policy">Privacy Policy</a>&nbsp;&nbsp;
            <a href="/info/info.html#terms-and-conditions">Terms & Conditions</a>&nbsp;&nbsp;
            <a href="/jobs/job.html">Jobs</a>&nbsp;&nbsp;
            <a href="/info/info.html#about">About Red Rock Airlines</a>&nbsp;&nbsp;
            <a href="/info/info.html#faq">FAQs</a>&nbsp;&nbsp;
            <a href="/info/info.html#credits">Credits</a>
        </div>
    </footer>
</body>

</html>