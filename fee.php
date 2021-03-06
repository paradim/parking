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
        
        
    </head>
    <body background="images/bg.jpg">
        <div class="container">
            <div class = "row" style="margin-top: 30px">
                <div class ="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <label style="font-weight: bold">ค่าที่จอดรถ</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 ">
                                    หมายเลขทะเบียนรถ
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    หมวดจังหวัด
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    วันเวลาที่เข้า
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    วันเวลาที่ออก
                                </div>
                                <div class="col-md-2"></div>
                            </div>

                            <div class="row">
                                <div class="col-md-10">
                                    จำนวนชั่วโมงที่จอด
                                </div>
                                <div class="col-md-2 text-right">ชั่วโมง</div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    จำนวนเงินค่าจอด
                                </div>
                                <div class="col-md-2 text-right">บาท</div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <label style="font-weight: bold">รับเงิน</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <input  id="txtLic"  type="text" style="margin-bottom: 10px" class="form-control"/>
                                </div>
                            </div>
 <div class="row">
                                <div class="col-md-12 text-center">
                                    <button  type="submit" class="btn btn-primary">
                                        คำนวนเงินทอน
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>