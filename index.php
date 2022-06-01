<?php
$currentPage = 'index';
include 'config.php';
include '/modules/header.php';
?>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="logotxt" class="navbar-brand" href="#">GFBBOX</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    foreach ($navs as $name => $url) {
                        print '<li ' . (($currentPage === $name) ? ' class="active" ' : '') .
                            '><a href="' . $url . '">' . $name . '</a></li>';
                    };
                    ?>
                </ul>
            </div>
        </div>
    </nav>


    <?php
    //$container = 'container-fluid';
    if (array_key_exists('pagekey', $pages)) {
        ?>
        <?php foreach ($pages['pagekey'] as $name => $page) { ?>
            <div id=<?php echo $name; ?> >
                <div id="content"> <?php include($page); ?></div>

            <?php };
            ?>
        </div>
        <?php
    }
    ?>

    <script>
        $(document).ready(function () {
// Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function (event) {

// Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {

// Prevent default anchor click behavior
                    event.preventDefault();

// Store hash
                    var hash = this.hash;

// Using jQuery's animate() method to add smooth page scroll
// The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function () {

// Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        })
        $(window).scroll(function () {
            $(".slideanim").each(function () {
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });
    </script>
</body>
<?php include '/modules/footer.php'; ?>
</html>
