
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SQL</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Migration</h2>
                        <h4>This is where all things related to Migration are managed</h4>
                    </div>
                </div>
                <div class="container-fluid bg-grey" >
                    <div class="row">
                        <div class="col-sm-12">
                            <!--<h5>Note: Crontab is a simple text file on a server with a list of commands meant to be run at specified times.</h5>-->
                            <h6><span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;Mive is the migration tool used to manage all database migrations.</span></h6>
                            <p>Make an SSH connection to a Project on a remote server &nbsp;&nbsp;//<span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;Probably using Putty.</span></p>
                            <p>Locate to the Backend of the project &nbsp;&nbsp;//<span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;Use cd .../backend/</span></p>
                            <p>php vendor/muz/mive/mive.php create [filename + extention] &nbsp;&nbsp;//<span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;Creating a mive script</span></p>
                            <p>php vendor/muz/mive/mive.php status -a &nbsp;&nbsp;//<span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;Shows migration status of all migration files created.</span></p>
                            <p>php vendor/muz/mive/mive.php status [filename + extention] &nbsp;&nbsp;//<span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;Shows migration status of a migration file.</span></p>
                            <p>php vendor/muz/mive/mive.php migrate [filename + extention] &nbsp;&nbsp;//<span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;Starts Migrating data to the Database.</span></p>
                            <p>php vendor/muz/mive/mive.php roolback [filename + extention]  &nbsp;&nbsp;//<span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;Starts Rolling back data from the Database.</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
