<?php
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap demo</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="./assets/css/style.css">
</head>
<body style="background-color: rgb(226, 240, 243);">

    <section class="top-bar ps-1 pe-1 pt-2 pb-2" style="background-color: rgba(27, 154, 179, 1); color: white; width: 100%; position: fixed; top: 0;">
        <div class="container m-0">
            <div class="row d-flex align-items-center">
                <div class="col-6">
                    <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" href="#" style="font-size: 35px; color: white;"class="ms-2 p-0 m-0"><ion-icon name="menu-outline"></ion-icon></a>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center">
                    <a href="#" style="font-size: 35px; color: white;"class="me-4 p-0 m-0"><ion-icon name="qr-code-outline"></ion-icon></a>
                    <a href="#" style="font-size: 35px; color: white;"class="me-4 p-0 m-0"><ion-icon name="notifications-outline"></ion-icon></a>
                    <a href="#" style="font-size: 35px; color: white;"class="p-0 m-0"><ion-icon name="log-out-outline"></ion-icon></a>
                </div>
            </div>
        </div>
    </section>





<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel" style="font-size:30px">Actions</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body p-0">
  <div class="list-group">
  <ul class="p-0 m-0">
    <a onclick="addcrate()" style="color:black;text-decoration:none; height:fit-content;color:black;font-size:20px" data-bs-dismiss="offcanvas" aria-label="Close"><li class="list-group-item">Add Crates</li></a>
    <a onclick="trace()" href="#" style="color:black;text-decoration:none; height:fit-content;color:black;font-size:20px" data-bs-dismiss="offcanvas" aria-label="Close"><li class="list-group-item">Trace Crates</li></a>
    <a onclick="add_distrbutor()" style="color:black;text-decoration:none; height:fit-content;color:black;font-size:20px" data-bs-dismiss="offcanvas" aria-label="Close"><li class="list-group-item">Add Distributor</li></a>
    <a onclick="distributorlist()" style="color:black;text-decoration:none; height:fit-content;color:black;font-size:20px" data-bs-dismiss="offcanvas" aria-label="Close"><li class="list-group-item">Distributors List</li></a>
    <a onclick="add_pilot()" style="color:black;text-decoration:none; height:fit-content;color:black;font-size:20px" data-bs-dismiss="offcanvas" aria-label="Close"><li class="list-group-item">Add Pilot</li></a>
    <a onclick="pilot_list()" style="color:black;text-decoration:none; height:fit-content;color:black;font-size:20px" data-bs-dismiss="offcanvas" aria-label="Close"><li class="list-group-item">Pilots List</li></a>
    <a onclick="shop_list()" style="color:black;text-decoration:none; height:fit-content;color:black;font-size:20px" data-bs-dismiss="offcanvas" aria-label="Close"><li class="list-group-item">Shops List</li></a>
    </ul>
</div>
  </div>
</div>

    <iframe src="./brand_owner_main_page.php" style="height:100vh;width:100%;" title="Iframe Example" id="BOFrame"></iframe>
   


    <section style="position: fixed; width: 100%; bottom: 0%;">
        <div class="navigation">
            <ul class="m-0 p-0">
                <li class="list active">
                    <a onclick="home()">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="text">Home</span>
                        <span class="circle"></span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <span class="text">Profile</span>
                        <span class="circle"></span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="podium-outline"></ion-icon>
                        </span>
                        <span class="text">Analysis</span>
                        <span class="circle"></span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="text">Settings</span>
                        <span class="circle"></span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="mail-outline"></ion-icon>
                        </span>
                        <span class="text">Support</span>
                        <span class="circle"></span>
                    </a>
                </li>
                
                <div class="indicator"></div>
            </ul>
        </div>
    </section>
    <script>
        function addcrate() {
    // Get the iframe element by its ID
    var iframe = document.getElementById('BOFrame');

    // Change the src attribute of the iframe
    iframe.src = './add_delete_crates.php';

  }
  function home() {
    // Get the iframe element by its ID
    var iframe = document.getElementById('BOFrame');

    // Change the src attribute of the iframe
    iframe.src = './brand_owner_main_page.php';

  }

  function trace() {
    // Get the iframe element by its ID
    var iframe = document.getElementById('BOFrame');

    // Change the src attribute of the iframe
    iframe.src = './trace.php';

  }
  function add_distrbutor() {
    // Get the iframe element by its ID
    var iframe = document.getElementById('BOFrame');

    // Change the src attribute of the iframe
    iframe.src = './add_Distributor.php';

  }
  function distributorlist() {
    // Get the iframe element by its ID
    var iframe = document.getElementById('BOFrame');

    // Change the src attribute of the iframe
    iframe.src = './distributorlist.php';

  }
  function add_pilot() {
    // Get the iframe element by its ID
    var iframe = document.getElementById('BOFrame');

    // Change the src attribute of the iframe
    iframe.src = './add_driver.php';

  }
  function pilot_list() {
    // Get the iframe element by its ID
    var iframe = document.getElementById('BOFrame');

    // Change the src attribute of the iframe
    iframe.src = './driverlist.php';

  }
  function shop_list() {
    // Get the iframe element by its ID
    var iframe = document.getElementById('BOFrame');

    // Change the src attribute of the iframe
    iframe.src = './shop_list.php';

  }
    </script>
    <script type="module" src="./assets/js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>