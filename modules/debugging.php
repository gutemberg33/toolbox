
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Debugging</title>
    </head>
    <body>
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Debugging</h2>
                        <h4>Debugging the Beebus under Linux</h4>
                    </div>
                </div>
                <div class="container-fluid bg-grey" >
                    <div class="row">
                        <div class="col-sm-12">
                            <h6><span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;Insert the following code snipet into .htaccess under /webs folder.</span></h6>
                            <p>php_value xdebug.remote_enable on</p>
                            <p>php_value xdebug.remote_autostart on</p>
                            <p>php_value xdebug.remote_host nb-dstoehr.milchundzucker.de</p>
                            <p>php_value xdebug.remote_connect_back off</p>
                            <p>php_value xdebug.idekey apache</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h4>Debugging the Beebus under Windows</h4>
                    </div>
                </div>
                <div class="container-fluid bg-grey" >
                    <div class="row">
                        <div class="col-sm-12">
                            <h6><span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;Copy the file .user.ini (Important to be preceded by a dot)under /webs folder.</span></h6>
                            <p>xdebug.remote_enable = on</p>
                            <p>xdebug.remote_autostart = on</p>
                            <p>xdebug.remote_host = nb-gbalcha.milchundzucker.de</p>
                            <p>xdebug.remote_connect_back = off</p>
                            <p>xdebug.idekey = apache</p>
                            <p>error_log = C:\inetpub\sandboxes\gbalcha\porsche_hr_6\backend\log\Beebus_errors.log</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
