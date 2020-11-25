<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="bootstrap/css/style.css"/>
    <title>Document</title>
</head>
<body>
<section class="container-fluid">
    <div class="row">
        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs sidebar">
            
                <div class="row" style="background-color:#000;">
                    <div class="col-md-4">
                    <img src="images/ddd.jpg" class="img img-responsive img-circle admin-img"/>
                    
                    </div>
                    <div class="col-md-8">
                        <p class="admin-name">Naveed Ahmad </p>
                        <p class="desgination">Software Engineer (Web and Android)</p>
                    </div>
                </div>
            
        </div>
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main">
            <nav class="navbar navbar-inverse">
                <div class="navbar-brand">
                    <span class="glyphicon glyphicon-arrow-left" id="button"></span>
                </div>
            </nav>
        </div>
    </div>
    hello pakistan
</section>
   
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


<script>

    $("#button").click(function(){
        $(".sidebar").toggleClass("side");
        $(".main").toggleClass("m");
    });
</script>
</body>
</html>