<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QRCode Generator</title>
    <!-- style  -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center mt-5">
    <div class="card" style="width: 32rem;">
  <div class="card-body">
      <!-- QR Code Generation Form  -->
            <h1>QRCode Generator</h1>
            <div class="form-wrapper mt-3">
                <form method="post" action="qrcode.php" class="form">
                    <div class="form-group">
                        <input type="url" class="form-control" name="URL" placeholder="Enter the url..." required>
                    </div>
                    <button class="btn btn-dark btn-block my-3" style="border-radius: 0px;">Generate</button>
                </form>
            </div>
            <div class="container" id="error_message"></div>

    <!-- End  -->

    <!-- QR Code Wrapper  -->

            <div class="status text-center d-none">
            </div>
            <div id="auc-qrcode" class="" style="">
            </div>
    <!-- end of code wrapper  -->
  </div>
    </div>
    </div>

    <!-- scripts  -->
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/qrcode.min.js"></script>
    <script src="public/js/script.js"></script>
</body>
</html>