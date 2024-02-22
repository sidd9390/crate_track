<?php
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/qrstyle.css">
    <style>
        h1, h3 {
          color: green;
        }
        body, header {
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
        }
    </style>
    <style>
        .login {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js">
    </script>
</head>

<body style="background-color: rgb(226, 240, 243);">

    <section class="login ps-3 pe-3" style="width: 100%;">
    <header>
        <h1>Scan the QR Code</h1>
    </header>
    <main class="text-center">
        <div id="qrcode" class="d-flex justify-content-center"></div>
        <div class="bttn text-center mt-3 pt-5" style="width: 100%;">
                <a href="./BO.php" class="btn btn-primary"
                    style="width: 100%; background: rgba(27, 154, 179, 1); padding: 12px 0px; border: 0; font-size: 20px;">Done</a>
        </div>
    </main>
    </section>



    <script>
        var qrcode = new QRCode("qrcode",
        "My name is Siddu");
    </script>
</body>

</html>