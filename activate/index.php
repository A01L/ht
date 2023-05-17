
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="../images/favicon.png">
    <title>D4E Mobile</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <link rel="stylesheet" href="../css/fakeLoader.css">
    <link rel="stylesheet" href="../css/swiper.min.css">
    <link rel="stylesheet" href="../css/style.css">

</head>
<body style="background-color: #060817;">
    
    <!-- fakeloader -->
    <div class="fakeLoader"></div>
    <!-- end fakeloader -->
    
    <!-- navbar -->
    <div class="navbar" style="background-color: #6350E7;">
        <div class="left">
            <a href="" class="link link-back"><!-- <i class="icon ion-ios-arrow-back"></i> --></a>
        </div>
        <div class="title">
            <h1 style="color: white;">D4E</h1>
        </div>
        <div class="right">
            
        </div>
    </div>
    <!-- end navbar -->

    <!-- pages wrapper -->
    <div class="pages-wrapper">

        <!-- separator -->
        <div class="separator-large"></div>
        <!-- end separator -->
        
        <!-- profile -->
        <div class="profile">
            <div class="container">
                <div class="row">
                    <div class="col-4 align-self-center">
                        <div class="content statistic text-right">
                            <h5></h5>
                            <span class="text-small"></span>
                        </div>
                    </div>
         
                       
                            
                                <div id="qr-reader" style="width:100%"></div>
                                <div id="qr-reader-results"></div>
                            
                     
          

<script src="html5-qrcode.min.js"></script>
<script>
    function docReady(fn) {
        // see if DOM is already available
        if (document.readyState === "complete"
            || document.readyState === "interactive") {
            // call on next available tick
            setTimeout(fn, 1);
        } else {
            document.addEventListener("DOMContentLoaded", fn);
        }
    }

    docReady(function () {
        var resultContainer = document.getElementById('qr-reader-results');
        var lastResult, countResults = 0;
        function onScanSuccess(decodedText, decodedResult) {
            if (decodedText !== lastResult) {
                ++countResults;
                lastResult = decodedText;
                // Handle on success condition with the decoded message.
                alert(`Scan result ${decodedText}`, decodedResult);
            }
        }

        var html5QrcodeScanner = new Html5QrcodeScanner(
            "qr-reader", { fps: 10, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess);
    });
</script>
                    <div class="col-4 align-self-center">
                        <div class="content statistic text-left">
                            <h5></h5>
                            <span class="text-small"></span>
                        </div>
                    </div>
                </div>

               

                <div class="profile-button">
                    <div class="row">
                        <div class="col-6">
                            <a href="../index.php" class="button" style="background-color: #6350E7;">Назад</a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="button button-outline" style="color: #6350E7;">Мод</a>
                        </div>
                    </div>
                </div>

           

        

            </div>
        </div>
        <!-- end profile -->

    </div>
    <!-- end pages wrapper -->
    <style>
    #qr-reader__status_span{
    display: none;
}

    </style>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/fakeLoader.js"></script>
    <script src="../js/swiper.min.js"></script>
    <script src="../js/main.js"></script>

</body>
</html>
