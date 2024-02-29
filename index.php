<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- _____________Theme____________ -->
<link rel="stylesheet" href="assets/css/main.css" />
    <!-- _____________custom css____________ -->
    <link rel="stylesheet" href="assets/css/style.css" />
<title>Crossword</title>
<link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1XS7HFGH1W"></script> 
<script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-1XS7HFGH1W'); </script>
</head>
<body>

<?php
// Check if the username & email parameter exists in the URL
// Retrieve the username from the URL
if(isset($_GET['username'])) {
    $username = $_GET['username'];
} else {
    $username = "User";
}

// Retrieve the email from the URL
if(isset($_GET['email'])) {
    $email = $_GET['email'];
} else {
    $email = "";
}
?>
    <main class="main">

        <section class="cross-puzzle">
            <div class="container">
                <!-- <h2 class="puzzle-h2">Growth mindset crossword puzzle</h2> -->
                <div class="after-submit">
                    <h2>Your Score: <span id="marks">8</span></h2>
                </div>
                <div class="question-answer">
                    <div class="puzzle">
                        <form>
                            <input type="hidden" id="username" value="<?php echo $username; ?>">
                            <input type="hidden" id="email" value="<?php echo $email; ?>">
                            <div class="grid">
                                <!-- Row 1 -->
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="cell"><span>1</span><input class="alpha-only" type="text" maxlength="1" id="a7"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <!-- Row 2 -->
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="cell brd-top brd-btm"><input class="alpha-only" type="text" maxlength="1" id="b7"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <!-- Row 3 -->
                                <div class="empty-cell"></div>
                                <div class="cell"><span>2</span><input class="alpha-only" type="text" maxlength="1" id="c2"></div>
                                <div class="cell brd-left"><input class="alpha-only" type="text" maxlength="1" id="c3"></div>
                                <div class="cell brd-left"><input class="alpha-only" type="text" maxlength="1" id="c4"></div>
                                <div class="cell brd-left"><input class="alpha-only" type="text" maxlength="1" id="c5"></div>
                                <div class="cell brd-left brd-right"><input class="alpha-only" type="text" maxlength="1" id="c6"></div>
                                <div class="cell"><input class="alpha-only" type="text" maxlength="1" id="c7"></div>
                                <div class="cell brd-left brd-right"><input class="alpha-only" type="text" maxlength="1" id="c8"></div>
                                <div class="cell"><span>3</span><input class="alpha-only" type="text" maxlength="1" id="c9"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <!-- Row 4 -->
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="cell brd-top"><input class="alpha-only" type="text" maxlength="1" id="d7"></div>
                                <div class="empty-cell"></div>
                                <div class="cell brd-top"><input class="alpha-only" type="text" maxlength="1" id="d9"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="cell"><span>4</span><input class="alpha-only" type="text" maxlength="1" id="d12"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <!-- Row 5 -->
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="cell brd-top"><input class="alpha-only" type="text" maxlength="1" id="e9"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="cell brd-top"><input class="alpha-only" type="text" maxlength="1" id="e12"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="cell"><span>5</span><input class="alpha-only" type="text" maxlength="1" id="e16"></div>
                                <div class="empty-cell"></div>
                                <!-- Row 6 -->
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="cell brd-btm"><span>6</span><input class="alpha-only" type="text" maxlength="1" id="f4"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="cell brd-top brd-btm"><input class="alpha-only" type="text" maxlength="1" id="f9"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="cell brd-top brd-btm"><input class="alpha-only" type="text" maxlength="1" id="f12"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="cell brd-top brd-btm"><input class="alpha-only" type="text" maxlength="1" id="f16"></div>
                                <div class="empty-cell"></div>
                                <!-- Row 7 -->
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="cell brd-right"><span>7</span><input class="alpha-only" type="text" maxlength="1" id="g3"></div>
                                <div class="cell"><input class="alpha-only" type="text" maxlength="1" id="g4"></div>
                                <div class="cell brd-left"><input class="alpha-only" type="text" maxlength="1" id="g5"></div>
                                <div class="cell brd-left"><input class="alpha-only" type="text" maxlength="1" id="g6"></div>
                                <div class="cell brd-left"><input class="alpha-only" type="text" maxlength="1" id="g7"></div>
                                <div class="cell brd-left brd-right"><input class="alpha-only" type="text" maxlength="1" id="g8"></div>
                                <div class="cell"><input class="alpha-only" type="text" maxlength="1" id="g9"></div>
                                <div class="cell brd-left"><input class="alpha-only" type="text" maxlength="1" id="g10"></div>
                                <div class="empty-cell"></div>
                                <div class="cell"><input class="alpha-only" type="text" maxlength="1" id="g12"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="cell"><input class="alpha-only" type="text" maxlength="1" id="g16"></div>
                                <div class="empty-cell"></div>
                                <!-- Row 8 -->
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="cell brd-top"><input class="alpha-only" type="text" maxlength="1" id="h4"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="cell brd-top"><input class="alpha-only" type="text" maxlength="1" id="h9"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="cell brd-top"><input class="alpha-only" type="text" maxlength="1" id="h12"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="cell brd-top"><input class="alpha-only" type="text" maxlength="1" id="h16"></div>
                                <div class="empty-cell"></div>
                                <!-- Row 9 -->
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="cell brd-top brd-btm"><input class="alpha-only" type="text" maxlength="1" id="i4"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="cell brd-top brd-btm"><input class="alpha-only" type="text" maxlength="1" id="i9"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="cell brd-top brd-btm"><input class="alpha-only" type="text" maxlength="1" id="i12"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="cell brd-top brd-btm"><input class="alpha-only" type="text" maxlength="1" id="i16"></div>
                                <div class="empty-cell"></div>
                                <!-- Row 10 -->
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="cell brd-btm"><input class="alpha-only" type="text" maxlength="1" id="j4"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="cell brd-right"><span>8</span><input class="alpha-only" type="text" maxlength="1" id="j8"></div>
                                <div class="cell"><input class="alpha-only" type="text" maxlength="1" id="j9"></div>
                                <div class="cell brd-left"><input class="alpha-only" type="text" maxlength="1" id="j10"></div>
                                <div class="cell brd-left brd-right"><input class="alpha-only" type="text" maxlength="1" id="j11"></div>
                                <div class="cell"><input class="alpha-only" type="text" maxlength="1" id="j12"></div>
                                <div class="cell brd-left brd-right"><input class="alpha-only" type="text" maxlength="1" id="j13"></div>
                                <div class="cell"><input class="alpha-only" type="text" maxlength="1" id="j14"></div>
                                <div class="cell brd-left brd-right"><input class="alpha-only" type="text" maxlength="1" id="j15"></div>
                                <div class="cell"><input class="alpha-only" type="text" maxlength="1" id="j16"></div>
                                <div class="cell brd-left"><input class="alpha-only" type="text" maxlength="1" id="j17"></div>
                                <!-- Row 11 -->
                                <div class="empty-cell"></div>
                                <div class="cell"><span>9</span><input class="alpha-only" type="text" maxlength="1" id="k2"></div>
                                <div class="cell brd-left brd-right"><input class="alpha-only" type="text" maxlength="1" id="k3"></div>
                                <div class="cell"><input class="alpha-only" type="text" maxlength="1" id="k4"></div>
                                <div class="cell brd-left"><input class="alpha-only" type="text" maxlength="1" id="k5"></div>
                                <div class="cell brd-left"><input class="alpha-only" type="text" maxlength="1" id="k6"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="cell brd-top"><input class="alpha-only" type="text" maxlength="1" id="k9"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="cell brd-top"><input class="alpha-only" type="text" maxlength="1" id="k16"></div>
                                <div class="empty-cell"></div>
                                <!-- Row 12 -->
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="cell brd-top brd-btm"><input class="alpha-only" type="text" maxlength="1" id="l4"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="cell brd-top"><input class="alpha-only" type="text" maxlength="1" id="l9"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="cell brd-top"><input class="alpha-only" type="text" maxlength="1" id="l16"></div>
                                <div class="empty-cell"></div>
                                <!-- Row 13 -->
                                <div class="cell brd-right"><span>10</span><input class="alpha-only" type="text" maxlength="1" id="m1"></div>
                                <div class="cell"><input class="alpha-only" type="text" maxlength="1" id="m2"></div>
                                <div class="cell brd-left brd-right"><input class="alpha-only" type="text" maxlength="1" id="m3"></div>
                                <div class="cell "><input class="alpha-only" type="text" maxlength="1" id="m4"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>
                                <div class="empty-cell"></div>

                            </div>
                        </form>
                    </div>
                    <div class="question">
                        <div class="que">
                            <h3>Across</h3>
                            <ol>   
                                <li>2. Create new methods or things.<span id="clue"> - Innovate</span></li>
                                <li>7. Working well with others.<span id="clue"> - Teamwork</span</li>
                                <li>8. Guiding others towards success.<span id="clue"> - Leadership</span</li>
                                <li>9. Change to suit new conditions.<span id="clue"> - Adapt</span</li>
                                <li>10. Chance taken for possible gain.<span id="clue"> - Risk</span</li>
                            </ol>
                        </div>
                        <div>
                            <h3>Down</h3>
                            <ol>
                                <li>1. Aim or desired result.<span id="clue"> - Goal</span</li>
                                <li>3. Test new ideas for better outcomes.<span id="clue"> - Experiment</span</li>
                                <li>4. Learning step, not defeat.<span id="clue"> - Failure</span</li>
                                <li>5. Never-ending quest for knowledge.<span id="clue"> - Learning</span</li>
                                <li>6. Helpful advice for doing better.<span id="clue"> - Feedback</span</li>
                            </ol>
                        </div>

                    </div>
                </div>
                <div class="form-submit">
                    <button class="submit-btn" id="crosswordForm">Submit<img src="assets/images/arrow.svg"></button>
                </div>
            </div>
        </section>


    </main>

    <!-- ------------JQuery CDN------- -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="assets/js/all.js" defer></script>

</body>
</html>




