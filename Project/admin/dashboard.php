<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
            <link rel="stylesheet" href="dashboard.css">
            <!--This is bootstrap-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
    </head>
    <body>
        <div class="">
            <nav class="navbar left navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="navbar-brand" href="#">Hidden brand</a>
                        </li>
                         <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                        <!--This is product-->
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                               Product
                              </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                              <div class="accordion-body">
                                <ul class="nav flex-column">
                                  <li><a class="dropdown-item" href="#">List product</a></li>
                                </ul>
                               </div>
                            </div>
                          </div>
                        </div>
                        <!-- this is settings-->
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                          <div class="a accordion-item">
                            <h5 class="accordion-header">
                              <button class="accordion-button  collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                <i class="fa-solid fa-gear">  </i>  Setting
                              </button>
                            </h5>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                 <ul class="nav flex-column">
                                <li><a class="dropdown-item" href="#">My account</a></li>
                                <li><a class="dropdown-item" href="#">Archive</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                              </ul>
                            </div>
                            </div>
                            
                          </div>
                          <li class="nav-item">
                            <a class="nav-link" href="/Project/guest_user/guest.html">Logout</a>
                          </li>
                      </div>
                    
                  </div>
                   </ul>
                  </div>
                </div>
              </nav>
              <div class="container-fluid footer">
                <div>
                  2024, Ecommerce.com
                </div>
                <div>
                 
                </div>
              </div>
             
          <!--This is for fontawesome icon-->
          <script src="https://kit.fontawesome.com/8400d4cb4c.js" crossorigin="anonymous"></script>
          <!--This is bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
    </body>
</html>