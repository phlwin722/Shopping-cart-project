              <!--start sent feedback php-->
              <?php 
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ecommerce";

                $con = new mysqli($servername, $username, $password, $dbname);

                if ($con->connect_error){
                    die("Connection error" . $con->connect_error);
                }

                // feedback 
                if (isset($_POST["sent_message"])){
                    $recipient = mysqli_real_escape_string($con, $_POST['recipient']);
                    $message = mysqli_real_escape_string($con, $_POST['message']);

                    // Prepare and bind statement 
                    $stmt = $con->prepare("INSERT INTO feedback (Email, Description) VALUES (?, ?)");
                    // Use 's' for string data type
                    $stmt->bind_param("ss", $recipient, $message);
                    
                    if ($stmt->execute()){
                      echo '<script>
                                document.addEventListener("DOMContentLoaded", function (){
                                    var modal = new bootstrap.Modal(document.getElementById("exampleModal2"));
                                    modal.show();
                                });
                            </script>';
                    }             
              // Close connection
              $con->close();
              }
          ?>

<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!--This is bootstrap-->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="/shopping-cart-oche/Project/guest_user/guest/gueest.css">
          <!--Favicon-->
          <link rel="icon" type="image/x-icon" href = "/shopping-cart-oche/Project/Image/logo.png">
          <link rel="stylesheet" href="/shopping-cart-oche/Project/login/logo.css">
        <title>Guest - Ecommerce</title>
    </head>
    <body>

    <div class="container-fluid  sticky-top" style=" padding: 0px;" >
    
            <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark" style="display:block;">
              <div class="container-fluid">
                  <a class="navbar-brand" href="/shopping-cart-oche/Project/guest_user/guest/guest.php">
                      <img src="/shopping-cart-oche/Project/Image/logo.png" alt="Lo" width="30" height="24">
                    </a>
                <a class="navbar-brand" href="/shopping-cart-oche/Project/guest_user/guest/guest.php">Ecommerce</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 
                  <form class="d-flex" role="search" style="margin-right: 100px;" id="searchForm" method="post" enctype="multipart/form-data">
                    <input class="form-control me-2 search_input" type="search" placeholder="Search" id="searchQuery" name="search_data" aria-label="Search">
                    <button class="btn btn-success" type="submit"><i class="fa-solid fa-magnifying-glass" name="search_data_product"></i></button>
                    <button class="btn shopping_cart" type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                  </form>
                  <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link c" style="color: white;" href="/shopping-cart-oche/Project/login/signin.php">Sign in</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/shopping-cart-oche/Project/login/signup.php">Sign up</a>
                    </li>
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
                      <a class="navbar-brand" href="/shopping-cart-oche/Project/guest_user/guest/guest.php">Ecommerce</a>
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
                            <i class="fa-solid fa-house"></i><a class="navbar-brand" href="/shopping-cart-oche/Project/guest_user/guest/guest.php"> Home</a>
                        </h5>
                      </div>
                      <hr>
                      <div>
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                            <a class="navbar-brand" href="">Products Available</a>
                            </h5>
                            <ul class="list-group list-group-flush">
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/guest_user/gaming_accessories/gamingaccessories.php">Gaming Accessories</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/guest_user/musical_instrument/musical_instrument.php">Musical Instrument</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/guest_user/kithchen_tools/kitchen_tools.php">Kitchen Tools</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/guest_user/woment_fassion/women_fassion.php"> Women's Fassion & Accessories</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/guest_user/Computer_Accessories/Computer_Accessories.php">Computer Accessories</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/guest_user/automotive_parts/automotive_parts.php">Automotive & Motorcycle Parts</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/guest_user/electronic_parts/electronic_accessorise.php">Electronic Accessories</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/guest_user/health_beuty/health_beuty.php">Health & Beauty</a></li>
                              <li  class="list-product"><a class="nav-link c" href="/shopping-cart-oche/Project/guest_user/men_fassion/men_fassion.php">Men's Fassion & Accessoriess</a></li>
                        </ul>
                          
                     </div>
                     <hr>
                     <div>
                       <h6> <a class="navbar-brand" href="/shopping-cart-oche/Project/login/signin.php">Sign in to buy product</a> </h6>

                     <a  class="sign-in" href="/shopping-cart-oche/Project/login/signin.php">Sign in</a>
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
         
            <!--Courosel-->
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="/shopping-cart-oche/Project/Image/two.png" class="d-block w-100 " height="400px" style="object-fit: cover;" alt="...">
           </div>
                <div class="carousel-item">
                <img src="/shopping-cart-oche/Project/Image/one.png" class="d-block w-100" height="400px" style="object-fit: cover;" alt="...">
           </div>
                <div class="carousel-item">
                <img src="/shopping-cart-oche/Project/Image/three.png" class="d-block w-100 " height="400px" style="object-fit: cover;" alt="...">
          </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>

             <!--Display product-->
             <div class="row " style="padding-left:20px;">
              <div class="col-md-11" style="margin-left:auto; margin-right:auto;">
                <!--products-->
                 <div class="row cem" style=""> </div>
              </div>
            </div>
            <!--end Display product-->

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
           
    
            <!-- modal Feed back-->
           <div class="feedback_Container">
            <button type="button" class="btn btn-color" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Feedback</button>
              <div class="modal feedback_modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Feedback</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Recipient:</label>
                          <input type="text" class="form-control" id="recipient-name" name="recipient" value="Ecommerce">
                        </div>
                        <div class="mb-3">
                          <label for="message-text" class="col-form-label">Message:</label>
                          <textarea class="form-control" id="message-text" name="message"></textarea>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" name="sent_message">Send message</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
           </div>
          </div>
           <!--  end modal Feed back-->

        <!--Modal section successfull submit-->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  style="text-align: center; justify-content:center; align-items:center;">
                              <div class="modal-dialog" >
                                  <div class="modal-content">
                                  <div class="modal-body">
                                  <button type="button" class="btn-close" style="margin-left: 430px;" data-bs-dismiss="modal" aria-label="Close"></button>
                                  <div class="check-container" style="margin-left:180px;">
                                      <div class="check-background">
                                          <svg viewBox="0 0 65 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M7 25L27.3077 44L58.5 7" stroke="white" stroke-width="13" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>

                                      </div>
                                          </div>
                                      <div class="check-shadow"></div> 
                                  </div>
                                  <h3>Successfull Send!</h3>
                                  <div >
                                      <br>
                                  <button type="button" class="btn btn-secondary" id="ok" style="margin-bottom: 20px;" data-bs-dismiss="modal">OK</button>
                                  </div>
                                  </div>
                              </div>
                              </div>
                    <!--end Modal section successfull submit-->

                    <script>
                      // this is search product
                      document.querySelector('#searchForm').addEventListener('submit', function(event) {
                            event.preventDefault(); // Prevent form submission

                            const searchQuery = document.querySelector('#searchQuery').value;
                          // this is search product
                            if (searchQuery.trim() !== '') {
                                fetch('search.php', {
                                    method: 'POST',
                                    body: new FormData(this)
                                })
                                .then(response => response.json())
                                .then(data => {
                                    const searchResults = document.querySelector('.cem');

                                    if (data.length === 0) {
                                        searchResults.innerHTML = ' <div class="col-md-12 text-center" id="no_result">  <p style="font-size:40px; color:red; padding: 80px; 0px 30px 0px">No results found!</p>  </div>';
                                    } else {
                                        searchResults.innerHTML = ''; // Clear previous results

                                        data.forEach(product => {
                                            const productDiv = document.createElement('div');
                                            productDiv.classList.add('col-md-3', 'id="cem"');
                                            productDiv.innerHTML = `
                                                <div class="card" style="width: 18rem; padding:10px; height:420px;">
                                                    <img src="/shopping-cart-oche/Project/admin/product/product_image_list/${product.Image}" width="100" height="150" alt="${product.Product_name}" class="card-img-top" width="150" height="170">  
                                                    <div class="card-body" style="position:relative;">
                                                        <h6 style="font-weight:bold;">${product.Product_name}</h6>
                                                        <p class="card-text">${product.Category}</p>
                                                        <p class="card-text">₱ ${product.Price}</p>
                                                        <button class="CartBtn">
                                                            <span class="IconContainer"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart">
                                                                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                                                </svg>
                                                            </span>
                                                            <p class="text">Add to Cart</p>
                                                        </button>
                                                    </div>
                                                </div>
                                            `;
                                            searchResults.appendChild(productDiv);
                                        });
                                    }
                                })
                                .catch(error => {
                                    console.error('Error:', error);
                                });
                            } else {
                            // else the display of no result was disapeard
                            document.querySelector('#no_result').style.display="none";
                              
                              // this is when the search button is click and the search input null will be display all product
                              fetchData();
                            }  
                        });

                  // Function to fetch data using AJAX
                  function fetchData() {
                      let xhr = new XMLHttpRequest();
                      xhr.onreadystatechange = function() {
                          if (this.readyState === 4 && this.status === 200) {
                              let data = JSON.parse(this.responseText);
                              populateTable(data);
                          }
                      };
                      xhr.open("GET", "guest_fetch_all_product.php", true);
                      xhr.send();
                  }

                  // Function to populate table with fetched data
                  function populateTable(data) {
                      const tableBody = document.querySelector('.cem');
                      data.forEach(product => {
                          const row = `<div class="col-md-3 id="cem"">
                                          <div class="card" style="width: 18rem; padding:10px; height:420px;">
                                              <img src="/shopping-cart-oche/Project/admin/product/product_image_list/${product.Image}" width="100" height="150" alt="${product.Product_name}" class="card-img-top" width="150" height="170">  
                                              <div class="card-body" style="postion:relative;">
                                                  <h6 style="font-weight:bold;">${product.Product_name}</h6>
                                                  <p class="card-text">${product.Category}</p>
                                                  <p class="card-text">₱ ${product.Price}</p>
                                                  <button class="CartBtn">
                                                      <span class="IconContainer"> 
                                                          <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart">
                                                              <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                                          </svg>
                                                      </span>
                                                      <p class="text">Add to Cart</p>
                                                  </button>
                                              </div>
                                          </div>
                                      </div>
                                      `;
                          tableBody.innerHTML += row;
                      });
                  }

                  // Call the fetchData function when the page loads
                  window.onload = fetchData;
                  </script>

    <!--end sent feedback php-->
          <script src="guest.js" defer></script>
         <!--This is for fontawesome icon-->
         <script src="https://kit.fontawesome.com/8400d4cb4c.js" crossorigin="anonymous"></script>
         <!--This is bootstrap-->
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
     
    </body>
</html>