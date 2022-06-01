
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Crons</title>
    </head>
    <body>
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Crons</h2>
                        <h4>Crontab Commands with PuTTy</h4>
                    </div>
                </div>
                <div class="bg-grey container-fluid" >
                    <div class="row">
                        <div class="col-sm-12">
                            <!--<h5>Note: Crontab is a simple text file on a server with a list of commands meant to be run at specified times.</h5>-->
                            <p>sudo -u muz crontab -l &nbsp;&nbsp;//<span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;List all the cron jobs.</span></p>
                            <p>sudo -u muz crontab -l | grep giz &nbsp;&nbsp;//<span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;List all the cron jobs specific to giz project.</span></p>
                            <p>sudo -u muz crontab -e &nbsp;&nbsp;//<span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;Make the cron editable.</span></p>
                            <p>:w &nbsp;&nbsp;//<span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;Save the crontab.</span></p>
                            <p>:wq &nbsp;&nbsp;//<span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;Write and Close the crontab.</span></p>
                            <p>crontab -r &nbsp;&nbsp;//<span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;Deletes all cron jobs of the user that is currently loggedf in.</span></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h4>Cron time string format Example</h4>
                    </div>
                </div>
                <div class="container-fluid bg-grey" >
                    <div class="row">
                        <div class="col-sm-12">
                            <p>A cron job consists out of six fields: <span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;minute | hour | day of month | month | day of week | command.</span></p>
                            <p>01 * * * * &nbsp;&nbsp;//<span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;This command is run at one min past every hour.</span></p>
                            <p>17 8 * * * &nbsp;&nbsp;//<span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;This command is run daily at 8:17 am.</span></p>
                            <p>17 20 * * *  &nbsp;&nbsp;//<span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;This command is run daily at 8:17 pm.</span></p>
                            <p>00 4 * * 0 &nbsp;&nbsp;//<span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;This command is run at 4 am every Sunday.</span></p>
                            <p>* 4 * * Sun &nbsp;&nbsp;//<span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;The same as above.</span></p>
                            <p>42 4 1 * *  &nbsp;&nbsp;//<span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;This command is run 4:42 am every 1st of the month.</span></p>
                            <p>01 * 19 07 * &nbsp;&nbsp;//<span style="color:greenyellow;font-size:14px;font-style:italic">&nbsp;&nbsp;This command is run hourly on the 19th of July.</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
