
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>GIT</title>
    </head>
    <body>
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>GIT</h2>
                        <h4>Useful minimum set of commands for Everyday Git</h4>
                    </div>
                </div>
                <div class="container-fluid bg-grey" >
                    <div class="row">
                        <div id="gitlink" class="col-sm-12">
                            <?php
                            if (array_key_exists('GIT', $gitlinks)) {
                                ?>
                                <div class="col-sm-12">
                                    <?php
                                    foreach ($gitlinks['GIT'] as $name => $page) {
                                        print '<li ' . (($currentPage === $name) ? ' class="active" ' : '') .
                                            '><a href="' . $page . '">' . $name . '</a></li>' . '<BR>';
                                    };
                                    ?>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
