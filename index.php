
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Timer</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="jquery.datetimepicker.min.css" rel="stylesheet" type="text/css"/>
        <link href="timeTo.css" rel="stylesheet" type="text/css"/>
        <link href="style.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>

        <div class="container">
           
            <div class="main">
                <div id="date-setter">
                    <form action="">
                        <label for="set-time">Enter date and time:</label>
                        <input type="text" name="filter-date" id="set-time"><br><br>
                        <input type="button" value="Set time" id="button">


                    </form>
                </div>
                <br><br>

                <div id="countdown"></div>
            </div>
        </div>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="jquery.datetimepicker.full.min.js" type="text/javascript"></script>
        <script src="jquery.time-to.js" type="text/javascript"></script>
        <script src="countdownClock.js" type="text/javascript"></script>
    </body>
</html>