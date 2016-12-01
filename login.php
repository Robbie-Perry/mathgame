<!DOCTYPE HTML>
<html lang="en">

    <head>
        <title>Math Game</title>
        <link href="styles/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="styles/styles.css/" rel="stylesheet" media="screen">
        <meta charset="utf-8" />
    </head>
    <body>
        <div class="page">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2"><h1>Please login to play.</h1></div>
                <div class="col-sm-2"></div>
            </div>
            
            <!--Email Address-->
            <form action="authenticate.php" method="post" role="form" class="form-horizontal">
                <div class="form-group">
                    <div class="col-sm-3 text-right">Email Address:</div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="col-sm-5"></div>
                </div>
                
                <!--Password-->
                <div class="form-group">
                    <div class="col-sm-3 text-right">Password:</div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="col-sm-5"></div>
                </div>
                
                <!--Button-->
                <div class="row">
                    <div class="col-sm-3 col-sm-offset-4">
                        <button type="submit" class="btn btn-success">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>