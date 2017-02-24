<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Parking</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <script type="javascript" src="js/Ctrl.js"></script>
    </head>
    <body  background="images/bg.jpg">
        <div class="container">
            <div class = "row" style="margin-top: 30px">
                <div class ="col-md-4 col-md-offset-4 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form id="licForm" >
                                <div class="form-group">
                                    กรอกหมายเลขทะเบียนรถ
                                </div>
                                <div class="form-group">
                                    <div class ="col-md-10 col-md-offset-1" >
                                        <input  id="txtLic"  type="text" style="margin-bottom: 10px" class="form-control"/>
                                </div>
                              
                                </div>

                                <div class="form-group">
                                      <div class="col-md-12">
                                    <button id="submitButton" type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom/indexCtrl.js"></script>
    </body>
</html>