<?php 
                 // session checking if user has login
                  session_start();
                  if (!isset($_SESSION['ffname'])){
                      header ('Location: /shopping-cart-oche/Project/user_login/logout/logout.php');
                  }
                  
                  $firstname = $_SESSION['ffname'];
                  $lastname = $_SESSION['llname'];
                  $email = $_SESSION ['email'];
 
          ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
         <!--This is bootstrap-->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="/shopping-cart-oche/Project/user_login/Add_to_cart/add_to_cartt.css">
           <!--Favicon-->
           <link rel="icon" type="image/x-icon" href = "/shopping-cart-oche/Project/Image/logo.png">
  
        <title>Add to Cart</title>
    </head>
    <body>
    <div class="container-fluid  sticky-top" style=" padding: 0px;" >
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark" style="display:block;">
      <div class="container-fluid">
          <a class="navbar-brand" href="/shopping-cart-oche/Project/user_login/user_login_home/guest.php">
              <img src="/shopping-cart-oche/Project/Image/logo.png" alt="Lo" width="30" height="24">
            </a>
        <a class="navbar-brand" href="/shopping-cart-oche/Project/user_login/user_login_home/guest.php">Ecommerce</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <form class="d-flex" id="searchForm" role="search" action="" method="post" style="margin-right: 100px;">
                    <input class="form-control me-2 search_input" id="searchQuery" enctype="multipart/form-data" type="search" placeholder="Search" aria-label="Search" name="search_data">
                    <button class="btn " type="submit" name="search_data_product"><i class="fa-solid fa-magnifying-glass"></i></button>

                    <button type="submit" class="btn shopping_cart position-relative">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    <label for="" id="count_of_cart">99+</label>
                        <span class="visually-hidden">unread messages</span>
                    </span>
                    </button>
                </form>
          <ul class="navbar-nav mb-2 mb-lg-0">
            <!--my account-->
            <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="/shopping-cart-oche/Project/Image/logo.png" id="srcimage" height="25" style="border-radius: 50%; width:30px;">
                      <!--Name of the user-->
                      <label id="firstname"></label> <label id="lastname"></label>
                    </button>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="/shopping-cart-oche/Project/user_login/my_account/my_account.php">My Account</a></li>
                    <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="/shopping-cart-oche/Project/user_login/order_cart/order_cart.php">My Purchase</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="/shopping-cart-oche/Project/user_login/logout/logout.php">Logout</a></li>
                    </ul>
                  </div>
               <!--end my account-->
          </ul>
        </div>
      </div>
    </nav>

          <!--about us--> 
              <div class="container-fluid con2 " style="display:block; padding:2px">
                <ul class="nav">
                  <a class="btn btn-dark" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <i class="fa-solid fa-bars"></i>
                  </a>
                  <div class="offcanvas offcanvas-start"  tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                      <h4 class="offcanvas-title" id="offcanvasExampleLabel">
                          <div class="container-fluid">
                          <a class="navbar-brand" href="#">
                              <img src="/shopping-cart-oche/Project/Image/logo.png" alt="Lo" width="30" height="24">
                            </a>
                        <a class="navbar-brand" href="/shopping-cart-oche/Project/user_login/user_login_home/guest.php">Ecommerce</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        </div>
                      </h4>
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      <div>
                          <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                              <i class="fa-solid fa-house"></i><a class="navbar-brand" href="/shopping-cart-oche/Project/user_login/user_login_home/guest.php"> Home</a>
                          </h5>
                        </div>
                        <hr>
                        <div>
                          <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                              <a class="navbar-brand" href="">Products Available</a>
                              </h5>
                              <ul class="list-group list-group-flush">
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/user_login/gaming_accessories/gamingaccessories.php">Gaming Accessories</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/user_login/musical_instrument/musical_instrument.php">Musical Instrument</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/user_login/kitchen_tools/kitchen_tools.php">Kitchen Tools</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/user_login/woment_fassion/women_fassion.php"> Women's Fassion & Accessories</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/user_login/Computer_Accessories/Computer_Accessories.php">Computer Accessories</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/user_login/automotive_parts/automotive_parts.php">Automotive & Motorcycle Parts</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/user_login/electronic_parts/electronic_accessorise.php">Electronic Accessories</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/user_login/health_beuty/health_beuty.php">Health & Beauty</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/user_login/men_fassion/men_fassion.php">Men's Fassion & Accessoriess</a></li>
                          </ul>
                            
                      </div>
                      <hr>
                      <div>
                            <a  class="sign-in" href="/shopping-cart-oche/Project/user_login/logout/logout.php"> <i class="fa-solid fa-right-from-bracket"></i>Logout</a>
                      </div>
                      <hr>
                    
                    </div>
                  </div>
                  <li class="nav-item">
                    <a class="nav-link fontt" aria-current="page" href="#">About us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fontt" aria-current="page" href="#footer">Contact us</a>
                  </li>
                </ul>
              </div>
          </div>
              <!--end of aboout-->

               <!--Display product-->
           <!--Display product-->
          <div class="row " style="padding-left:20px;">
              <div class="col-md-11" style="margin-left:auto; margin-right:auto;">

              <div class="card position-relative" style="width: 100%; padding:10px; height:100px;">            
                        <div class="" style="font-size:18px; margin-left:15px;">
                            <i class="fa-solid fa-location-dot" style="color: #de0202;"></i>
                                Delivery Address
                        </div>
                      <div class="card-body" style="position:relative;">
                          <label style="font-weight:bold;" id="full_name"></label>
                          <label id="address"></label>
                          <input hidden type="text" id="addresss" >
                          <input hidden type="text" id="fullname" >
                          <input hidden type="text" id="contact" >
                            <!-- Button trigger modal -->
                            <button type="button" class="btn " style="color:blue;" data-bs-toggle="modal" data-bs-target="#change_addresss">
                            Change
                            </button>
                            <!-- Button trigger modal -->
                      </div>  
                  </div>


                  <div class="card position-relative" style="width: 100%; padding:10px; height:70px;">
                      <div class="card-body" style="position:relative;">
                          <label style="font-weight:bold;">  
                               Product
                          </label>
                          <label class="card-text" style="font-weight:bold; position:absolute; right:510px;">Unit Price</label>
                          <label class="card-text" style="font-weight:bold; position:absolute; right:350px;">Quantity</label>
                          <label class="card-text" style="font-weight:bold; position:absolute; right:180px;">Total Price</label>
                          <label class="card-text" style="font-weight:bold; position:absolute; right:40px;">Actions</label>
                      </div>
                  </div>
                  <!--products-->
                  <div class="row cem" style=""> 
                  <div class="card" aria-hidden="true">
                          <div class="card-body">
                            <h5 class="card-title placeholder-glow">
                              <span class="placeholder col-6"></span>
                            </h5>
                            <p class="card-text placeholder-glow">
                              <span class="placeholder col-7"></span>
                              <span class="placeholder col-4"></span>
                              <span class="placeholder col-4"></span>
                              <span class="placeholder col-6"></span>
                              <span class="placeholder col-8"></span>
                            </p>
                            <a class="btn btn-primary disabled placeholder col-6" aria-disabled="true"></a>
                          </div>
                      </div>
                      <div class="card" aria-hidden="true">
                          <div class="card-body">
                            <h5 class="card-title placeholder-glow">
                              <span class="placeholder col-6"></span>
                            </h5>
                            <p class="card-text placeholder-glow">
                              <span class="placeholder col-7"></span>
                              <span class="placeholder col-4"></span>
                              <span class="placeholder col-4"></span>
                              <span class="placeholder col-6"></span>
                              <span class="placeholder col-8"></span>
                            </p>
                            <a class="btn btn-primary disabled placeholder col-6" aria-disabled="true"></a>
                          </div>
                      </div>
                 </div> <div class="sticky-bottom">
                        <div class="card position-relative  " style="width: 100%; padding:10px; height:70px;">
                       
                            <div class="card-body" style="position:relative;">
                           
                                <input class="form-check-input" type="checkbox" value="" id="selectAllCheckbox">
                                <label style="" for="selectAllCheckbox">Select All</label>
                                <label style=" margin-left:20px;" id="DeleteDataAll" for="">Delete All</label>
                                <label for="payment" style="margin-left:120px;">Payment</label>
                                    
                                <label class="card-text" style=" position:absolute; right:350px;" id="totalItemSelect">Total (0 item)</label>
                                <label class="card-text" style=" position:absolute; right:250px;" id="totalPriceDisplay"></label>
                                <button type="button" id="buy_now" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalpayment" style="font-weight:bold; position:absolute; right:40px ; top:9px;">
                                        Check out
                                    </button>
                            </div>
                                    <select class="form-select position-absolute" id="payment" aria-label="Default select example" style="width:200px; top:20px; left:400px;">
                                        <option value="Cash On Delivery">Cash On Delivery</option>
                                        <option disabled value="Gcash">Gcash (Not Available)</option>
                                    </select>
                        </div>
                        </div>
              </div>
          </div>


            <!--end Display product-->

              <!---->
              
              <!---->

              <!--Footer-->
          <div class="container-fluid footer" id="footer">
            <div class="copy-right"> 
              <i class="fa-regular fa-copyright"></i> 2024, Ecommerce.com
            </div>
            <div class="contact_us"> 
              <i class="fa-regular fa-envelope"></i> ecomerce@gmail.com
              <br>
              <i class="fa-solid fa-phone"></i> 09496565245
            </div> 
           
    
            <!--Feed back modal-->
           <div class="feedback_Container">
            <button type="button" class="btn btn-color" data-bs-toggle="modal" data-bs-target="#exampleModale" data-bs-whatever="@mdo">Feedback</button>
              <div class="modal fade" id="exampleModale" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Recipient:</label>
                          <input type="text" class="form-control" id="recipient" disabled value="Ecommerce">
                        </div>
                        <div class="mb-3">
                          <label for="message-text" class="col-form-label">Message:</label>
                          <textarea class="form-control" id="message"></textarea>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary sent_message" name="">Send message</button>
                    </div>
                  </div>
                </div>
              </div>
           </div>
          </div>


          <!-- modal edit -->
                    <!-- Modal -->
                    <div class="modal fade" id="change_addresss" tabindex="-1" style="margin-right: 200px;" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Address</h1>
                            
                        </div>
                        <div class="modal-body">
                            <form class="">
                                <div class="mb-3 form-floating">
                                    <input type="text" class="form-control" id="contactt" name="contact" value="" >
                                    <label for="floatingInput">Contact</label>
                                    
                                </div>
                                <div class="mb-3 form-floating">
                                    <input type="text" class="form-control" id="block_lot" name="block_lot" value="" placeholder="name@example.com">
                                    <label for="floatingInput">Block & Lot</label>
                                    
                                </div>
                                <div class="mb-3 form-floating">
                                <select class="form-select" id="barangaySelect" name="barangay" required>
                                    <option value="FVR">FVR</option>
                                    <option value="San Rafael 1">San Rafael 1</option>
                                    <option value="San Rafael 2">San Rafael 2</option>
                                    <option value="San Rafael 3">San Rafael 3</option>
                                    <option value="San Rafael 4">San Rafael 4</option>
                                    <option value="San Rafael 5">San Rafael 5</option>
                                    <option value="Kaypian">Kaypian</option>
                                </select>
                                <label for="floatingInput">Barangay</label>
                                </div>
                                <div class="mb-3 form-floating">
                                <select class="form-select"  id="citySelect"  name="cityy" value="" required>
                                    <option value="Manila">Manila</option>
                                    <option value="Quezon City">Quezon City</option>
                                    <option value="Davao City">Davao City</option>
                                    <option value="Cebu City">Cebu City</option>
                                    <option value="Caloocan">Caloocan</option>
                                    <option value="Zamboanga City">Zamboanga City</option>
                                    <option value="Taguig">Taguig</option>
                                    <option value="Pasig">Pasig</option>
                                    <option value="Antipolo">Antipolo</option>
                                    <option value="Cagayan de Oro City">Cagayan de Oro City</option>
                                    <option value="Parañaque">Parañaque</option>
                                    <option value="Makati">Makati</option>
                                    <option value="Bacolod">Bacolod</option>
                                    <option value="Pasay">Pasay</option>
                                    <option value="Angeles City">Angeles City</option>
                                    <option value="General Santos City">General Santos City</option>
                                    <option value="Cainta">Cainta</option>
                                    <option value="Marikina">Marikina</option>
                                    <option value="Iloilo City">Iloilo City</option>
                                    <option value="Dasmarinas">Dasmarinas</option>
                                    <option value="Valenzuela">Valenzuela</option>
                                    <option value="Bacoor">Bacoor</option>
                                    <option value="Muntinlupa">Muntinlupa</option>
                                    <option value="San Juan">San Juan</option>
                                    <option value="Navotas">Navotas</option>
                                    <option value="Lapu-Lapu City">Lapu-Lapu City</option>
                                    <option value="Mandaluyong">Mandaluyong</option>
                                    <option value="Imus">Imus</option>
                                    <option value="Las Piñas">Las Piñas</option>
                                    <option value="Baguio">Baguio</option>
                                    <option value="Malabon">Malabon</option>
                                    <option value="Santa Rosa">Santa Rosa</option>
                                    <option value="Bacoor">Bacoor</option>
                                    <option value="Taytay">Taytay</option>
                                    <option value="Lucena">Lucena</option>
                                    <option value="Lipa">Lipa</option>
                                    <option value="Legazpi">Legazpi</option>
                                    <option value="Ormoc">Ormoc</option>
                                    <option value="Naga">Naga</option>
                                    <option value="San Fernando">San Fernando</option>
                                    <option value="Panabo">Panabo</option>
                                    <option value="Koronadal">Koronadal</option>
                                    <option value="Toledo">Toledo</option>
                                    <option value="Roxas City">Roxas City</option>
                                    <option value="Tabaco">Tabaco</option>
                                    <option value="Gingoog">Gingoog</option>
                                    <option value="Baybay">Baybay</option>
                                    <option value="Sorsogon City">Sorsogon City</option>
                                    <option value="Surigao City">Surigao City</option>
                                    <option value="Ozamiz">Ozamiz</option>
                                    <option value="Talisay">Talisay</option>
                                    <option value="Bayawan">Bayawan</option>
                                    <option value="Isabela">Isabela</option>
                                    <option value="Bogo">Bogo</option>
                                    <option value="Silay">Silay</option>
                                    <option value="Guihulngan">Guihulngan</option>
                                    <option value="Kabankalan">Kabankalan</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Tuguegarao">Tuguegarao</option>
                                    <option value="Dipolog">Dipolog</option>
                                    <option value="Talisay">Talisay</option>
                                    <option value="Tanauan">Tanauan</option>
                                    <option value="Cauayan">Cauayan</option>
                                    <option value="Calapan">Calapan</option>
                                    <option value="Bayugan">Bayugan</option>
                                    <option value="Surallah">Surallah</option>
                                    <option value="Cabadbaran">Cabadbaran</option>
                                    <option value="Maasin">Maasin</option>
                                    <option value="Kidapawan">Kidapawan</option>
                                    <option value="Bislig">Bislig</option>
                                    <option value="Bais">Bais</option>
                                    <option value="Cotabato City">Cotabato City</option>
                                    <option value="La Carlota">La Carlota</option>
                                    <option value="Bayugan">Bayugan</option>
                                    <option value="San Carlos">San Carlos</option>
                                    <option value="Legaspi">Legaspi</option>
                                    <option value="Laoag">Laoag</option>
                                    <option value="Baybay">Baybay</option>
                                    <option value="Bulacan">Bulacan</option>
                                    <option value="Samar">Samar</option>
                                    <option value="Sorsogon">Sorsogon</option>
                                    <option value="Surigao">Surigao</option>
                                    <option value="Tarlac">Tarlac</option>
                                    <option value="Zambales">Zambales</option>
                                    <option value="Marawi">Marawi</option>
                                    <option value="Catarman">Catarman</option>
                                    <option value="Calbayog">Calbayog</option>
                                    <option value="Pagadian">Pagadian</option>
                                    <option value="Tacloban">Tacloban</option>
                                    <option value="Digos">Digos</option>
                                    <option value="La Trinidad">La Trinidad</option>
                                    <option value="Trece Martires">Trece Martires</option>
                                    <option value="Koronadal">Koronadal</option>
                                    <option value="Catbalogan">Catbalogan</option>
                                    <option value="Dapitan">Dapitan</option>
                                    <option value="Tandag">Tandag</option>
                                    <option value="Baler">Baler</option>
                                    <option value="Libmanan">Libmanan</option>
                                    <option value="Mati">Mati</option>
                                    <option value="Bongao">Bongao</option>
                                    <option value="Virac">Vir
                                    </select>
                                    <label for="floatingInput">City</label>
                                </div>
                                <div class="mb-3 form-floating">
                                <select class="form-select"  id="provinceSelect"  required>
                                <option value="Abra">Abra</option> 
                                <option value="Agusan del Norte">Agusan del Norte</option> 
                                <option value="Agusan del Sur">Agusan del Sur</option> 
                                <option value="Aklan">Aklan</option> 
                                <option value="Antique">Antique</option> 
                                <option value="Apayao">Apayao</option> 
                                <option value="Aurora">Aurora</option> 
                          
                                <option value="Basilan">Basilan</option> 
                                <option value="Bataan">Bataan</option> 
                                <option value="Batanes">Batanes</option> 
                                <option value="Batangas">Batangas</option> 
                                <option value="Benguet">Benguet</option> 
                                <option value="Biliran">Biliran</option> 
                                <option value="Bohol">Bohol</option> 
                                <option value="Bukidnon">Bukidnon</option> 
                                <option value="Bulacan" > Bulacan</option> 

                                <option value="Cagayan">Cagayan</option> 
                                <option value="Camarines Norte">Camarines Norte</option> 
                                <option value="Camarines Sur"> Camarines Sur</option> 
                                <option value="Camiguin">Camiguin</option> 
                                <option value="Capiz">Capiz</option> 
                                <option value="Catanduanes">Catanduanes</option> 
                                <option value="Cavite">Cavite</option> 
                                <option value="Cebu">Cebu</option> 
                                <option value="Cotabato">Cotabato</option> 

                                <option value=">Davao de Oro">Davao de Oro</option> 
                                <option value="Davao del Norte">Davao del Norte</option> 
                                <option value="Davao del Sur">Davao del Sur</option> 
                                <option value="Davao Occidental">Davao Occidental</option> 
                                <option value="Davao Oriental">Davao Oriental</option> 
                                <option value="inagat Islands">Dinagat Islands</option> 

                                <option value="astern Samar">Eastern Samar</option> 

                                <option value="Guimaras">Guimaras</option> 

                                <option value="Ifugao">Ifugao</option> 
                                <option value="Ilocos Norte">Ilocos Norte</option> 
                                <option value="Ilocos Sur">Ilocos Sur</option> 
                                <option value="Iloilo">Iloilo</option> 
                                <option value="Isabela">Isabela </option> 

                                <option value="Kalinga">Kalinga</option> 

                                <option value="La Union"> La Union</option> 
                                <option value="Laguna">Laguna</option> 
                                <option value="Lanao del Norte">Lanao del Norte</option> 
                                <option value="Lanao del Sur">Lanao del Sur</option> 
                                <option value="Leyte">Leyte</option> 

                                <option value="Maguindana">Maguindana</option> 
                                <option value="Maguindanao del Norte">Maguindanao del Norte</option> 
                                <option value="Maguindanao del Sur">Maguindanao del Sur</option> 
                                <option value="Marinduque">Marinduque</option> 
                                <option value="Masbate">Masbate</option> 
                                <option value="Misamis Occidenta">Misamis Occidental</option> 
                                <option value="Mountain Province">Mountain Province</option> 

                                <option value="Abra">Negros Occidental</option> 
                                <option value="Abra">Negros Oriental</option> 
                                <option value="Abra">Northern Samar</option> 
                                <option value="Abra">Nueva Ecija</option> 
                                <option value="Abra">Nueva Vizcaya</option> 

                                <option value="Occidental Mindoro">Occidental Mindoro</option> 
                                <option value="Oriental Mindoro<">Oriental Mindoro</option> 

                                <option value="Palawan"> Palawan</option> 
                                <option value="Pampanga">Pampanga</option> 
                                <option value="Pangasinan">Pangasinan</option> 

                                <option value="Quezon">Quezon</option> 
                                <option value="Quirino">Quirino</option> 

                                <option value="Rizal">Rizal</option> 
                                <option value="Romblon">Romblon</option> 

                                <option value="Samar">Samar</option> 
                                <option value="Sarangani">Sarangani</option> 
                                <option value="Siquijor"> Siquijor</option> 
                                <option value="Sorsogon">Sorsogon</option> 
                                <option value="South Cotabato"> South Cotabato</option> 
                                <option value="Southern Leyte">Southern Leyte</option> 
                                <option value="Sultan Kudarat">Sultan Kudarat</option> 
                                <option value="Sulo">Sulo</option> 
                                <option value="Surigao del Norte">Surigao del Norte</option> 
                                <option value="Surigao del Sur">Surigao del Sur</option> 

                                <option value="Tarlac">Tarlac</option> 
                                <option value="Tawi-Tawi">Tawi-Tawi</option> 

                                <option value="Zambales"> Zambales</option> 
                                <option value="Zamboanga del Nort">Zamboanga del Nort</option> 
                                <option value="Zamboanga del Sur">Zamboanga del Sur</option> 
                                <option value="Zamboanga city">Zamboanga Sibugay</option> 
                                    </select><label for="floatingInput">Province</label>
                                </div>
                          
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary" id="change_address"  type="submit" name="">Save changes</button>
                        </div>
                        </form>
                        </div>
                    </div>
                    </div>
                     <!-- modal edit -->

                     <!--Modal payment Verification-->
                    <!-- Modal -->
                    <div class="modal fade" id="modalpayment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Checking</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are  you really sure the provided address is correct?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" id="insertproduct" class="btn btn-primary">Buy now</button>
                        </div>
                        </div>
                    </div>
                    </div>
                     <!--Modal payment Verification-->
              <!---->
          <script> 
            // feed back
            $('.sent_message').click (function () {
            let recipient = document.querySelector('#recipient').value;
            let message   = document.querySelector('#message').value;
            let exampleModale =document.querySelector('#exampleModale');
            let modalinstance =bootstrap.Modal.getInstance(exampleModale);
            let xhr = new XMLHttpRequest ();
            xhr.onreadystatechange =function () {
                if (this.readyState === 4 && this.status === 200) {
                    let data =JSON.parse (this.responseText);
                    if (data.success) {
                        modalinstance.hide()
                        Swal.fire({
                        icon: "success",
                        title: "Successfull send",
                        showConfirmButton: false,
                        timer: 1500
                        });
                    }
                }
            }   
            let url = "/shopping-cart-oche/Project/guest_user/guest/insert_feedback.php?recipient="
             + encodeURIComponent(recipient) + "&message=" + encodeURIComponent (message)
            xhr.open ("GET", url, true);
             xhr.send(); 
          })

          // edit address
          document.querySelector('#change_address').addEventListener('click', function() {
            // Prevent the default form submission behavior
            event.preventDefault();
    Swal.fire({
        title: "Do you want to save the changes?",
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: "Save",
        denyButtonText: `Don't save`
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        let contact = document.querySelector('#contactt').value;
            let block_lote = document.querySelector('#block_lot').value;
            let barangaySelect = document.querySelector('#barangaySelect').value;
            let citySelect = document.querySelector('#citySelect').value;
            let provinceSelect = document.querySelector('#provinceSelect').value;
            let change_addresss =document.querySelector('#change_addresss');
            let modalInstance =bootstrap.Modal.getInstance(change_addresss);
        if (result.isConfirmed) {
    

            let xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    let data = JSON.parse(this.responseText);
                    if (data.success) {
                        modalInstance.hide();
                        fetchData();
                        success();
                        fetchDataUserInfo();
                    }
                }
            }
            let url = "edit_address.php?contact=" + encodeURIComponent(contact) +
                "&block_lot=" + encodeURIComponent(block_lote) +
                "&barangay=" + encodeURIComponent(barangaySelect) +
                "&cityy=" + encodeURIComponent(citySelect) +
                "&province=" + encodeURIComponent(provinceSelect);
            xhr.open("GET", url, true);
            xhr.send();
        } else if (result.isDenied) {
            Swal.fire("Changes are not saved", "", "info");
            modalInstance.hide();
                        fetchData();
        }
    });
});

// buy now product
// buy now product
document.querySelector('#insertproduct').addEventListener('click', function () {
    // Select all checked checkboxes with the class 'productCheckbox'
    const productCheckboxes = document.querySelectorAll('.productCheckbox:checked');
    if (productCheckboxes.length === 0){
        selectproducts();
    }else {
        // Iterate over each checked checkbox
    productCheckboxes.forEach(checkbox => {
        // Get the data-productCode attribute value from the checkbox
        const productCode = checkbox.dataset.productCode;
        
        // Find the closest parent element with the class 'card' to access product information
        const productCard = checkbox.closest('.card');
        
        // Find the corresponding input fields within the productCard
        const productImageElement = productCard.querySelector('.product_Image');
        const productImage =  productImageElement.value;
        const productNameElement = productCard.querySelector('.product_name');
        const productName = productNameElement.value;
        const productPriceElement = productCard.querySelector('.product_price');
        const productPrice = productPriceElement.value;
        const productQuantityElement = productCard.querySelector('.product_quantity');
        const productQuantity = productQuantityElement.value ;
        const productTotalPriceElement = productCard.querySelector('.product_totalprice');
        const productTotalPrice = productTotalPriceElement.value;
        const userEmailElement = productCard.querySelector('.user_email');
        const userEmail = userEmailElement.value;
        const modal =document.querySelector('#modalpayment');
        const modalInstance = bootstrap.Modal.getInstance(modal);
        const payment =document.querySelector('#payment').value
        const addresss = document.querySelector('#addresss').value;
        const contact = document.querySelector('#contact').value;
        const fullname = document.querySelector('#fullname').value;

        // Prepare the data to be sent to the server
        const formData = new FormData();
        formData.append('product_code', productCode);
        formData.append('product_name', productName);
        formData.append('quantity', productQuantity);
        formData.append('price', productPrice);
        formData.append('total_price', productTotalPrice);
        formData.append('email', userEmail);
        formData.append('image', productImage);
        formData.append('payment', payment);
        formData.append('addresss', addresss);
        formData.append('contact', contact);
        formData.append('fullname', fullname);
        
        // Send the data to the server for insertion into the order_product table
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                const data = JSON.parse(this.responseText);
                if (data.success) {
                    // If insertion is successful, delete the product from cart_product
                    fetchCart();
                    success();
                    modalInstance.hide();
                    fetchData();
                } else {
                    console.error('Failed to insert product into order_product table.');
                }
            }
        };
        xhr.open('POST', 'insert_order.php', true);
        xhr.send(formData);
    });
    }
});


// buy now product

            // search
              document.getElementById('searchForm').addEventListener('submit', function(event) {
                  event.preventDefault(); // Prevent form submission

                  const searchQuery = document.getElementById('searchQuery').value.trim(); // Trim the search query

                  // Check if search query is empty
                  if (searchQuery !== '') {
                    event.preventDefault()
                      fetch('search.php', {
                          method: 'POST',
                          body: new FormData(this)
                      })
                      .then(response => response.json())
                      .then(data => {
                          const searchResults = document.querySelector('.cem');
                          searchResults.innerHTML = ''; // Clear previous results
                          if (data.length === 0) {
                              searchResults.innerHTML = '<div class="col-md-12 text-center" id="no_result">  <p style="font-size:40px; color:red; padding: 170px; 0px 30px 0px">No results found!</p>  </div>';
                          } else {
                              const tableBody = document.querySelector('.cem');
                              
                              tableBody.innerHTML = ''; // Clear previous results
                              data.forEach(product => {
                                  const row = `<div class="col-12">
                    <div class="card" style="width: 100%; padding:10px; height:120px;">
                        <div class="row">
                            <div class="text-center" style="width:10px; padding-top:35px; padding-left:25px;">
                                <input class="form-check-input productCheckbox product_code"  type="checkbox" value="" id="productCheckbox" data-product-code="${product.Product_code}">
                            </div>
                            <div class="" style=" width:165px;">
                                <img src="/shopping-cart-oche/Project/admin/product/product_image_list/${product.Image}" width="150" height="100" alt="${product.Product_name}">  
                                <input type ="text" hidden class="product_Image" value="${product.Image}">
                            </div>
                            <div class="col">
                                <label style="padding-top:15px;">${product.Product_name}</label>
                                <input type ="text" class="product_name" hidden value="${product.Product_name}">
                                <input type ="text" class="user_email" hidden  value="${product.Email}">
                            </div>
                            <div class="col-1 position-relative" style="width:130px;">
                                <div style="position: absolute; top: 36%; left:33%;">
                                    <label>₱ </label> 
                                    <input class="text-center product_price" id="unitprice_${product.Product_code}" style="background-color:transparent; width:70px; border:none;" value="${product.Price}" min="1" disabled>
                                </div>
                            </div>
                            <div class="col position-relative" style="width:125px;">
                                <div style="position: absolute; top: 30%; left:15%;">
                                    <button class="btn btn-link border border-light-subtle" onclick="minus(${product.Product_code})"><i class="fa-solid fa-minus" style="color:black"></i></button>
                                    <input class="text-center product_quantity border border-light-subtle" id="quantity_${product.Product_code}" style="width:70px;" value="${product.Quantity}" min="1" disabled>
                                    <button class="btn btn-link border border-light-subtle" onclick="add(${product.Product_code})"><i class="fa-solid fa-plus" style="color:black"></i></button>
                                </div>
                            </div>
                            <div class="col-1 position-relative">
                                <div style="position: absolute; top: 36%; left:20%;">
                                    <label>₱ </label> 
                                    <input class="text-center product_totalprice"  id="totalprice_${product.Product_code}" style="position: absolute; background-color:transparent; width:70px; border:none;" value="${product.Price}" min="1" disabled>
                                </div>
                            </div>
                            <div class="col-2 position-relative" style="width:180px;">
                                <a href="#" class="btn btn-sm delete-data" id="deleteProduct_${product.Product_code}" onclick="DeleteProduct(${product.Product_code})" value="${product.Product_code}" style="position: absolute; top: 35%; left:42%;">
                                    <i class="fa-solid fa-trash" style="color: red; font-size:20px"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>`;
                tableBody.innerHTML += row;
                              });
                          }
                      })
                      .catch(error => {
                          console.error('Error:', error);
                      });
                  } else if (searchQuery === ''){
                      // Fetch and display all products
                      fetchData();
                      fetchDataUserInfo();
                  } else {
                      // If search query is empty, hide the "No results found" message
                      document.querySelector('#no_result').style.display = "none";
                      // Fetch and display all products
                      fetchData();
                      fetchDataUserInfo();
                  }
              });

              // Function to fetch data using AJAX to fetch all products
              function fetchData() {
                  let xhr = new XMLHttpRequest();
                  xhr.onreadystatechange = function() {
                      if (this.readyState === 4 && this.status === 200) {
                          let data = JSON.parse(this.responseText);
                          populateTable(data);
                      }
                  };
                  xhr.open("GET", "add_to_cart_fetch.php", true);
                  xhr.send();

                  let firstname = document.querySelector("#firstname");
                              let lastname = document.querySelector('#lastname');
                              let srcimage =document.querySelector('#srcimage');
                            let recipient =document.querySelector('#recipient');
                              let xhrs = new XMLHttpRequest();
                              xhrs.onreadystatechange = function () {
                                if (this.readyState === 4 && this.status === 200) {
                                  let data = JSON.parse(this.responseText);

                                  // Assuming data is an array of objects
                                  data.forEach(info => {
                                    console.log (info.First_name)
                                    recipient.value = info.Email
                                    lastname.innerHTML = info.Last_name;
                                    firstname.innerHTML = info.First_name;
                                    srcimage.src = `/shopping-cart-oche/Project/user_login/my_account/user_image/${info.Image}`;
                                  });
                                }
                              };
                              xhrs.open("GET", "/shopping-cart-oche/Project/user_login/user_login_home/info_user.php", true);
                              xhrs.send();
              }

              // Function to populate table with fetched data
              function populateTable(data) {

                if (data.length === 0) {
                    const tableBody = document.querySelector('.cem');
                    tableBody.innerHTML = `<div class="col-12">
                          <div class="card" style="width: 100%; padding:10px; height:200px;">                     
                          <p class="text-center" style="font-size:40px; color:red; padding-top:50px;">No add to cart found!</p>                    
                          </div>
                      </div>`;
                    
                }else{
                  const tableBody = document.querySelector('.cem');
                  tableBody.innerHTML = ''; // Clear previous results
                  data.forEach(product => {
                    const row = `<div class="col-12">
                    <div class="card" style="width: 100%; padding:10px; height:120px;">
                        <div class="row">
                            <div class="text-center" style="width:10px; padding-top:35px; padding-left:25px;">
                                <input class="form-check-input productCheckbox product_code"  type="checkbox" value="" id="productCheckbox" data-product-code="${product.Product_code}">
                            </div>
                            <div class="" style=" width:165px;">
                                <img src="/shopping-cart-oche/Project/admin/product/product_image_list/${product.Image}" width="150" height="100" alt="${product.Product_name}">  
                                <input type ="text" hidden class="product_Image" value="${product.Image}">
                            </div>
                            <div class="col">
                                <label style="padding-top:15px;">${product.Product_name}</label>
                                <input type ="text" class="product_name" hidden value="${product.Product_name}">
                                <input type ="text" class="user_email" hidden  value="${product.Email}">
                            </div>
                            <div class="col-1 position-relative" style="width:130px;">
                                <div style="position: absolute; top: 36%; left:33%;">
                                    <label>₱ </label> 
                                    <input class="text-center product_price" id="unitprice_${product.Product_code}" style="background-color:transparent; width:70px; border:none;" value="${product.Price}" min="1" disabled>
                                </div>
                            </div>
                            <div class="col position-relative" style="width:125px;">
                                <div style="position: absolute; top: 30%; left:15%;">
                                    <button class="btn btn-link border border-light-subtle" onclick="minus(${product.Product_code})"><i class="fa-solid fa-minus" style="color:black"></i></button>
                                    <input class="text-center product_quantity border border-light-subtle" id="quantity_${product.Product_code}" style="width:70px;" value="${product.Quantity}" min="1" disabled>
                                    <button class="btn btn-link border border-light-subtle" onclick="add(${product.Product_code})"><i class="fa-solid fa-plus" style="color:black"></i></button>
                                </div>
                            </div>
                            <div class="col-1 position-relative">
                                <div style="position: absolute; top: 36%; left:20%;">
                                    <label>₱ </label> 
                                    <input class="text-center product_totalprice"  id="totalprice_${product.Product_code}" style="position: absolute; background-color:transparent; width:70px; border:none;" value="${product.Price}" min="1" disabled>
                                </div>
                            </div>
                            <div class="col-2 position-relative" style="width:180px;">
                                <a href="#" class="btn btn-sm delete-data" id="deleteProduct_${product.Product_code}" onclick="DeleteProduct(${product.Product_code})" value="${product.Product_code}" style="position: absolute; top: 35%; left:42%;">
                                    <i class="fa-solid fa-trash" style="color: red; font-size:20px"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>`;
                tableBody.innerHTML += row;
                  });
                }
                  const selectAllCheckbox = document.getElementById('selectAllCheckbox');
                  const productCheckboxes = document.querySelectorAll('.productCheckbox');
                  // Delete All data
                  const deleteAllData = document.getElementById('DeleteDataAll');

                  // Add event listener to the "Select All" checkbox
                  selectAllCheckbox.addEventListener('change', function() {
                      // Iterate through each product checkbox
                      productCheckboxes.forEach(checkbox => {
                          // Set the checked property of each product checkbox to match the "Select All" checkbox
                          checkbox.checked = selectAllCheckbox.checked;
                      });
                      calculateTotalPrice(); // Recalculate total price when "Select All" checkbox is clicked
                  });

                  deleteAllData.addEventListener('click', function (){
                  let checkedProducts = [];
                  productCheckboxes.forEach(checkbox => {
                      if (checkbox.checked) {
                          checkedProducts.push(checkbox.dataset.productCode);
                      }
                  });

                  // Check if any product is checked
                  if (checkedProducts.length > 0) {
                    Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                    if (result.isConfirmed) {
                                           // Send a request to delete all checked products
                    var xmlHttp = new XMLHttpRequest();
                    xmlHttp.onreadystatechange =function (){
                           if (this.readyState == 4 && this.status == 200){
                            fetchData();
                            fetchCart();
                              calculateTotalPrice(); // Recalculate total price after deletion
                              Swal.fire({
                                title: "Deleted!",
                                text: "Your file has been deleted.",
                                icon: "success"
                                });
                               // Uncheck all checkboxes
                              productCheckboxes.forEach(checkbox => {
                                  checkbox.checked = false;
                              });
                              selectAllCheckbox.checked = false; // Uncheck selectAllCheckbox
                           }
                        }
                        xmlHttp.open("GET","delete_all_data_cart.php",true);
                        xmlHttp.send();
                      // Send a request to delete all checked products
                    }
                    });
                  } else {
                    Swal.fire({
                        icon: "error",
                        title: "Opps....",
                        text: "Please select at least one product to delete.!",
                       
                        });
                      // If no product is checked, display a message
                  }
              });

                  productCheckboxes.forEach(checkbox => {
                      checkbox.addEventListener('change', calculateTotalPrice);
                  });

                  calculateTotalPrice(); // Calculate total price initially
              }

              // Function to recalculate and display total price
              function calculateTotalPrice() {
                  let totalPrice = 0;
                  let totalItems = 0; // Initialize totalItems variable
                  const productCheckboxes = document.querySelectorAll('.productCheckbox');

                  // Iterate through each product checkbox
                  productCheckboxes.forEach(checkbox => {
                      if (checkbox.checked) {
                          // Get the corresponding total price element for the checked product
                          let productCode = checkbox.dataset.productCode;
                          let totalPriceElement = document.getElementById(`totalprice_${productCode}`);
                          if (totalPriceElement) {
                              // Parse the total price value and add it to the total price accumulator
                              let price = parseFloat(totalPriceElement.value);
                              if (!isNaN(price)) {
                                  totalPrice += price;
                                  totalItems++; // Increment totalItems when a checkbox is checked

                              }
                          }
                      }
                  });

                  // Display the total price somewhere on the page
                  document.getElementById('totalPriceDisplay').textContent = "₱ " + totalPrice.toFixed(2);
                  document.getElementById('totalItemSelect').textContent = `Total (${totalItems} item)`;
              }

              // Quantity add or minus
              function minus(Product_code) {
                  let unitpriceElement = document.querySelector(`#unitprice_${Product_code}`);
                  let totalpriceElement = document.querySelector(`#totalprice_${Product_code}`);
                  let quantityElement = document.querySelector(`#quantity_${Product_code}`);
                  let quantity = parseInt(quantityElement.value);
                  let unitprice = parseInt(unitpriceElement.value);
                  let totalprice = parseInt(totalpriceElement.value);

                  if (quantity > 1) {
                      let decrement = 1;
                      quantity -= decrement;
                      totalprice -= unitprice;
                      totalpriceElement.value = totalprice.toString();
                      quantityElement.value = quantity.toString();
                  } else {
                      // If the quantity is already 1, do nothing or display a message
                      // In this example, we're leaving it as is
                  }
                  calculateTotalPrice(); // Recalculate total price after quantity change
              }

              function add(Product_code) {
                  let unitpriceElement = document.querySelector(`#unitprice_${Product_code}`);
                  let totalpriceElement = document.querySelector(`#totalprice_${Product_code}`);
                  let quantityElement = document.querySelector(`#quantity_${Product_code}`);
                  let unitprice = parseInt(unitpriceElement.value);
                  let quantity = parseInt(quantityElement.value);
                  let increment = 1;
                  quantity += increment;
                  let totalPrice = unitprice * quantity;

                  // Update the value displayed on the webpage
                  quantityElement.value = quantity.toString();
                  totalpriceElement.value = totalPrice.toString();
                  calculateTotalPrice(); // Recalculate total price after quantity change
              }

              // function to fetch user information using ajax to fetch user info
             
              function fetchDataUserInfo() {
                let xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (this.readyState === 4 && this.status === 200) {

                        let data = JSON.parse(this.responseText);

                        const full_name = document.querySelector('#full_name');
                        const address = document.querySelector('#address');
                        const barangaySelect = document.querySelector('#barangaySelect');
                        const citySelect = document.querySelector('#citySelect');
                        const provinceSelect = document.querySelector('#provinceSelect');
                        const block_lote = document.querySelector('#block_lot');
                        const addresss = document.querySelector('#addresss');
                        const contact = document.querySelector('#contactt');
                        const fullname = document.querySelector('#fullname');
                        // Clear previous content
                        full_name.innerHTML = "";
                        address.innerHTML = "";
                        block_lote.innerHTML = "";

                        data.forEach(product => {
                            // Concatenate full name
                            full_name.innerHTML += `${product.First_name} ${product.Last_name} ${product.Contact_No} `;
                            fullname.value += `${product.First_name} ${product.Last_name}`;
                            // Concatenate address
                            address.innerHTML += `${product["Block_&_Lot"]} ${product.Barangay} ${product.City} ${product.Province}`;
                            addresss.value  += `${product["Block_&_Lot"]} ${product.Barangay} ${product.City} ${product.Province}`;
                            // concatenate block_lot
                            block_lote.value += `${product["Block_&_Lot"]}`;
                            // concatenate block_lot
                            contact.value += `${product.Contact_No}`;

                            // set into let from the database
                            let barangay = `${product.Barangay}`;
                            let city = `${product.City}`;
                            let province = `${product.Province}`;

                            //Iterate through each option
                            barangaySelect.querySelectorAll('option').forEach(option => {
                              // check if the option value maches the feteched barangay
                              if (option.value === barangay){
                                // set the selected attribute if there a match
                                option.selected = true;
                              }
                            });

                            //Iterate through each option
                            citySelect.querySelectorAll('option').forEach(option => {
                              // check if the option value maches the feteched barangay
                              if (option.value === city){
                                // set the selected attribute if there a match
                                option.selected = true;
                              }
                            });

                            //iterate throuch each option
                            provinceSelect.querySelectorAll('option').forEach(option => {
                              // check if the option values matches the fetched barangay
                              if (option.value === province){
                                // set the selected attribute if theres a match
                                option.selected  =true;
                              }
                            }); 
                      
                        });
                    }
                };
                xhr.open("GET", "user_information_fetch.php", true);
                xhr.send();
            }

            // Function to delete a product
            function DeleteProduct(Product_code) {
              var xmlhttp = new XMLHttpRequest();
              xmlhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                      calculateTotalPrice();  // Recalculate total price after quantity change
                      fetchData(); // Fetch updated data after deletion
                      fetchCart()
                      console.log(Product_code)
                  }
              };
              xmlhttp.open("GET", "delete_Add_to_cart.php?q=" + Product_code, true);
              xmlhttp.send();
              }

                function fetchCart() {

                let xhr = new XMLHttpRequest();
                      xhr.onreadystatechange = function() {
                          if (this.readyState === 4 && this.status === 200) {
                                  let data = JSON.parse(this.responseText);
                                  let count_of_cart = document.querySelector('#count_of_cart');

                                  count_of_cart.innerHTML = data.count;
                                  console.log(data.count)
                                  
                          }else {
                                  console.error("Failed to fetch cart count. Status code: " + this.status);
                              }
                      };
                      xhr.open("GET", "/shopping-cart-oche/Project/user_login/user_login_home/fetch_cart.php", true);
                      xhr.send();

                }
            //alert message
              function success () {
                Swal.fire({
            title: "Successfull",
            text: "",
            icon: "success"
            });
              }

              function selectproducts() {
                Swal.fire({
                    title: "<strong> Please select product </strong>",
                    icon: "info",
                    html: `
                       
                    `,
                    showCloseButton: true,
                    showCancelButton: true,
                    focusConfirm: false,
                    });
              }
              window.onload = function() {
                fetchData();
                fetchCart();
                fetchDataUserInfo();
              };
          </script>
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
         <!--This is for fontawesome icon-->
         <script src="https://kit.fontawesome.com/8400d4cb4c.js" crossorigin="anonymous"></script>
         <!--This is bootstrap-->
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
     
    </body>
</html>