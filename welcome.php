<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>EZ-WEB-DEV</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">


    </head>
    <body>

        <div class="page-header">
            <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to your account management panel.</h1>
        </div>
        <div class="">
            <h2>Set your account information</h2>
            <form action="insertAccInfo.php" method="post">

                Enter your email: <input type="text" name="email"><br>
                Enter your age: <input type="text" name="age"><br>
                Enter your name: <input type="text" name="name"><br>
                Enter your Username: <input type="text" name="username"><br>


                <input type="submit">
            </form>

        </div>

        <div class="">
            <h2>Set your preferences</h2>
            <form action="insertPrefs.php" method="post">

                Enter your preferred programming language: <input type="text" name="prefproglang"><br>

                <label for="prefprogtut">Enter your preferred programming tutorial:</label>
                <select name="prefprogtut" id="prefprogtut">
                    <option disabled selected value> -- select an option -- </option>
                    <option disabled selected value> -- CSS -- </option>
                    <option value="CSS -- 2D Transformations">CSS -- 2D Transformations</option>
                    <option value="CSS -- Animations">CSS -- Animations</option>
                    <option value="CSS -- Image Gallery">CSS -- Image Gallery</option>
                    <option value="CSS -- Inline Block">CSS -- Inline Block</option>
                    <option value="CSS -- Layouts">CSS -- Layouts</option>
                    <option value="CSS -- Margins">CSS -- Margins</option>
                    <option value="CSS -- Overflow">CSS -- Overflow</option>
                    <option value="CSS -- Padding">CSS -- Padding</option>
                    <option value="CSS -- Rounded Corners">CSS -- Rounded Corners</option>
                    <option value="CSS -- Text Effects">CSS -- Text Effects</option>
                    <option disabled selected value> -- HTML -- </option>
                    <option value="HTML -- Canvas">HTML -- Canvas</option>
                    <option value="HTML -- Forms">HTML -- Forms</option>
                    <option value="HTML -- Implementing JavaScript in HTML">HTML -- Implementing JavaScript in HTML</option>
                    <option value="HTML -- Headings">HTML -- Headings</option>
                    <option value="HTML -- Images">HTML -- Images</option>
                    <option value="HTML -- Links">HTML -- Links</option>
                    <option value="HTML -- Paragraphs">HTML -- Paragraphs</option>
                    <option value="HTML -- Styles">HTML -- Styles</option>
                    <option value="HTML -- Tables">HTML -- Tables</option>
                    <option value="HTML -- Videos">HTML -- Videos</option>
                    <option disabled selected value> -- JavaScript -- </option>
                    <option value="JavaScript -- Arrays">JavaScript -- Arrays</option>
                    <option value="JavaScript -- Booleans">JavaScript -- Booleans</option>
                    <option value="JavaScript -- Callbacks">JavaScript -- Callbacks</option>
                    <option value="JavaScript -- Common Mistakes">JavaScript -- Common Mistakes</option>
                    <option value="JavaScript -- Dates">JavaScript -- Dates</option>
                    <option value="JavaScript -- Functions">JavaScript -- Functions</option>
                    <option value="JavaScript -- Hositing">JavaScript -- Hositing</option>
                    <option value="JavaScript -- Random">JavaScript -- Random</option>
                    <option value="JavaScript -- While Loops">JavaScript -- While Loops</option>
                </select>
                <br><br>

                Enter your Username: <input type="text" name="username"><br>
                <br>
                <input type="submit" value="Submit">
            </form>



            <a href=http://localhost/ReadUserPref.php onclick="basicPopup3(this.href);return false">Account Preferences</a>
            <script>
                // JavaScript popup window function
                function basicPopup3(url) {
                    popupWindow = window.open(url, 'popUpWindow', 'height=420,width=470,left=50,top=50,resizable=yes,scrollbars=yes,\n\
        toolbar=yes,menubar=no,location=no,directories=no, status=yes')
                }

            </script>
            <a href=http://localhost/readaccinfo.php onclick="basicPopup3(this.href);return false">Account Settings</a>
            <script>
                // JavaScript popup window function
                function basicPopup3(url) {
                    popupWindow = window.open(url, 'popUpWindow', 'height=420,width=470,left=50,top=50,resizable=yes,scrollbars=yes,\n\
        toolbar=yes,menubar=no,location=no,directories=no, status=yes')
                }

            </script>

        </div>           





        <h2>Why not select a tutorial to work on from the drop down below?</h2>

      
        <select id="select" onchange="window.open(this.options[this.selectedIndex].value);">
            <option disabled selected value> -- select an option -- </option>
                    <option disabled selected value> -- CSS -- </option>
                    <option value="http://localhost:8383/WEBDEVPROJ/CSSTutorials/CSS2DTransformations.html">CSS -- 2D Transformations</option>
                    <option value="http://localhost:8383/WEBDEVPROJ/CSSTutorials/CSSAnimations.html">CSS -- Animations</option>
                    <option value="http://localhost:8383/WEBDEVPROJ/CSSTutorials/CSSImageGallery.html">CSS -- Image Gallery</option>
                    <option value="http://localhost:8383/WEBDEVPROJ/CSSTutorials/CSSInlineBlock.html">CSS -- Inline Block</option>
                    <option value="http://localhost:8383/WEBDEVPROJ/CSSTutorials/CSSLayouts.html">CSS -- Layouts</option>
                    <option value="http://localhost:8383/WEBDEVPROJ/CSSTutorials/CSSMargins.html">CSS -- Margins</option>
                    <option value="http://localhost:8383/WEBDEVPROJ/CSSTutorials/CSSOverflow.html">CSS -- Overflow</option>
                    <option value="http://localhost:8383/WEBDEVPROJ/CSSTutorials/CSSPadding.html">CSS -- Padding</option>
                    <option value="http://localhost:8383/WEBDEVPROJ/CSSTutorials/CSSRoundedCorners.html">CSS -- Rounded Corners</option>
                    <option value="http://localhost:8383/WEBDEVPROJ/CSSTutorials/CSSTestEffects.html">CSS -- Text Effects</option>
                    <option disabled selected value> -- HTML -- </option>
                    <option value="http://localhost:8383/WEBDEVPROJ/HTMLTutorials/HTMLCanvas.html">HTML -- Canvas</option>
                    <option value="http://localhost:8383/WEBDEVPROJ/HTMLTutorials/HTMLForms.html">HTML -- Forms</option>
                    <option value="http://localhost:8383/WEBDEVPROJ/HTMLTutorials/HTMLHTMLJavaScript.html">HTML -- Implementing JavaScript in HTML</option>
                    <option value="http://localhost:8383/WEBDEVPROJ/HTMLTutorials/HTMLHeadings.html">HTML -- Headings</option>
                    <option value="http://localhost:8383/WEBDEVPROJ/HTMLTutorials/HTMLImages.html">HTML -- Images</option>
                    <option value="http://localhost:8383/WEBDEVPROJ/HTMLTutorials/HTMLLinks.html">HTML -- Links</option>
                    <option value="http://localhost:8383/WEBDEVPROJ/HTMLTutorials/HTMLParagraph.html">HTML -- Paragraphs</option>
                    <option value="http://localhost:8383/WEBDEVPROJ/HTMLTutorials/HTMLStyles.html">HTML -- Styles</option>
                    <option value="http://localhost:8383/WEBDEVPROJ/HTMLTutorials/HTMLTables.html">HTML -- Tables</option>
                    <option value="http://localhost:8383/WEBDEVPROJ/HTMLTutorials/HTMLVideo.html">HTML -- Videos</option>
                    <option disabled selected value> -- JavaScript -- </option>
                    <option value="http://localhost:8383/WEBDEVPROJ/JavaScriptTutorials/JavaScriptArray.html">JavaScript -- Arrays</option>
                    <option value="http://localhost:8383/WEBDEVPROJ/JavaScriptTutorials/JavaScriptBooleans.html">JavaScript -- Booleans</option>
                    <option value="http://localhost:8383/WEBDEVPROJ/JavaScriptTutorials/JavaScriptCallbacks.html">JavaScript -- Callbacks</option>
                    <option value="http://localhost:8383/WEBDEVPROJ/JavaScriptTutorials/JavaScriptCommonMistakes.html">JavaScript -- Common Mistakes</option>
                    <option value="http://localhost:8383/WEBDEVPROJ/JavaScriptTutorials/JavaScriptDates.html">JavaScript -- Dates</option>
                    <option value="http://localhost:8383/WEBDEVPROJ/JavaScriptTutorials/JavaScriptFunction.html">JavaScript -- Functions</option>
                    <option value="http://localhost:8383/WEBDEVPROJ/JavaScriptTutorials/JavaScriptHoisting.html">JavaScript -- Hoisting</option>
                    <option value="http://localhost:8383/WEBDEVPROJ/JavaScriptTutorials/JavaScriptRandom.html">JavaScript -- Random</option>
                    <option value="http://localhost:8383/WEBDEVPROJ/JavaScriptTutorials/JavaScriptWhileLoop.html">JavaScript -- While Loops</option>
        </select>

        <p>

            <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
        </p>





    </body>
</html>