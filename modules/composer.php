
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Composer</title>
    </head>
    <body>
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Composer</h2>
                        <h4>Basic Composer Usage and Information</h4>
                    </div>
                </div>
                <div class="container-fluid bg-grey" >
                    <div class="row">
                        <div class="col-sm-12">
                            <!--<h5>Note: Crontab is a simple text file on a server with a list of commands meant to be run at specified times.</h5>-->
                            <p>composer.json &nbsp;&nbsp;//<span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;This file describes the dependencies of your project and may contain other metadata as well.</span></p>
                            <p>require &nbsp;&nbsp;//<span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;Used to tell Composer which packages your project depends on.</span></p>
                            <p>php composer .phar install || composer install &nbsp;&nbsp;//<span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;Used to install the defined dependencies for your project.</span></p>
                            <p>composer.lock &nbsp;&nbsp;//<span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;When Composer has finished installing, it writes all of the packages and the exact versions of them that it downloaded to the composer.lock file.</span></p>
                            <p>php composer .phar update || composer update &nbsp;&nbsp;//<span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;This will fetch the latest matching versions (according to your composer.json file) and update the lock file with the new versions.</span></p>
                            <p>composer dump-autoload  &nbsp;&nbsp;//<span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;If you need to update the autoloader because of new classes in a classmap package for example, you can use dump-autoload to do that without having to go through an install or update.</span></p>
                            <p>require __DIR__ . '/vendor/autoload.php'; &nbsp;&nbsp;//<span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;Some libraries specify autoload information, Composer generates a vendor/autoload.php file. Include this file and use the classes.</span></p>
                            <p>Note: Commit composer.lock  &nbsp;&nbsp;//<span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;Committing this file to VC is important because it will make anyone on the project to use the exact same versions of the dependencies.</span></p>                </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
