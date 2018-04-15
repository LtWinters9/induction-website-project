<div id="wrapper" class="animate">
   <nav class="navbar header-top fixed-top navbar-expand-lg navbar-dark bg-dark">
     <span class="navbar-toggler-icon leftmenutrigger"></span>
     <a class="navbar-brand" href="../account/login"> <span style="color:#9da9ae;font-size:20px;"><img class="img-fluid" src="../assets/img/UHI_Logo_RGB_transparent_orig.png" alt="uhi-main-logo" style="color:#ffffff;width:140px;"> </span></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
       aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarText">
       <ul class="navbar-nav animate side-nav">
         <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-user"></i> Submenu <i class="fas fa-user shortmenu animate"></i>
       </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <a class="dropdown-item" href="#">Action</a>
         <a class="dropdown-item" href="#">Another action</a>
         <div class="dropdown-divider"></div>
         <a class="dropdown-item" href="#">Something else here</a>
       </div>
     </li>
         <li class="nav-item">
           <a class="nav-link" href="#" title="Cart"><i class="fas fa-cart-plus"></i> Cart <i class="fas fa-cart-plus shortmenu animate"></i></a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#" title="Comment"><i class="fas fa-comment"></i> Comment <i class="fas fa-comment shortmenu animate"></i></a>
         </li>
       </ul>
       <ul class="navbar-nav ml-md-auto d-md-flex">
         <li class="nav-item">
           <a class="nav-link" href="#"><i class="fas fa-user"></i><?php
           // 24-hour format of an hour without leading zeros (0 through 23)
           $Hour = date('G');

           if ( $Hour >= 5 && $Hour <= 11 ) {
               echo "Good Morning";
           } else if ( $Hour >= 12 && $Hour <= 17 ) {
               echo "Good Afternoon";
           } else if ( $Hour >= 18 || $Hour <= 4 ) {
               echo "Good Evening";
           }
           ?>, <?php echo $forename; ?></a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="../php/logout"><i class="fas fa-key"></i> Logout</a>
         </li>
       </ul>
     </div>
   </nav>
   <div class="container-fluid">
     <div class="row">
       <div class="col">
         <div class="card">
           <div class="card-body">
             <h5 class="card-title">Test</h5>
             <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 </h6>
             <p class="card-text">You can also try different version of Bootstrap V4 side menu. Click below link to view all Bootstrap Menu versions.</p>
             <a href="#" class="card-link">link</a>
             <a href="#" class="card-link">Another link</a>
           </div>
         </div>
       </div>
       <div class="col">
         <div class="card">
           <div class="card-body">
             <h5 class="card-title">Test 2</h5>
             <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 </h6>
             <p class="card-text">You can also try different version of Bootstrap V4 side menu. Click below link to view all Bootstrap Menu versions.</p>
             <a href="#" class="card-link">link</a>
             <a href="#" class="card-link">Another link</a>
           </div>
         </div>
       </div>
       <div class="col">
         <div class="card">
           <div class="card-body">
             <h5 class="card-title">Test 3</h5>
             <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 </h6>
             <p class="card-text">You can also try different version of Bootstrap V4 side menu. Click below link to view all Bootstrap Menu versions.</p>
             <a href="#" class="card-link">link</a>
             <a href="#" class="card-link">Another link</a>
           </div>
         </div>
       </div>
       <div class="col">
         <div class="card">
           <div class="card-body">
             <h5 class="card-title">Test 4</h5>
             <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 </h6>
             <p class="card-text">You can also try different version of Bootstrap V4 side menu. Click below link to view all Bootstrap Menu versions.</p>
             <a href="#" class="card-link">link</a>
             <a href="#" class="card-link">Another link</a>
           </div>
         </div>
       </div>
     </div>
     <div class="row">
       <div class="col">
         <div class="card">
           <div class="card-body">
             <h5 class="card-title">Card title</h5>
             <table class="table">
               <thead>
                 <tr>
                   <th scope="col">#</th>
                   <th scope="col">First</th>
                   <th scope="col">Last</th>
                   <th scope="col">Handle</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row">1</th>
                   <td>Mark</td>
                   <td>Otto</td>
                   <td>@mdo</td>
                 </tr>
                 <tr>
                   <th scope="row">2</th>
                   <td>Jacob</td>
                   <td>Thornton</td>
                   <td>@fat</td>
                 </tr>
                 <tr>
                   <th scope="row">3</th>
                   <td>Larry</td>
                   <td>the Bird</td>
                   <td>@twitter</td>
                 </tr>
               </tbody>
             </table>
           </div>
         </div>
       </div>
       <div class="col">
         <div class="card">
           <div class="card-body">
             <h5 class="card-title">Card title</h5>
             <table class="table">
               <thead>
                 <tr>
                   <th scope="col">#</th>
                   <th scope="col">First</th>
                   <th scope="col">Last</th>
                   <th scope="col">Handle</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row">1</th>
                   <td>Mark</td>
                   <td>Otto</td>
                   <td>@mdo</td>
                 </tr>
                 <tr>
                   <th scope="row">2</th>
                   <td>Jacob</td>
                   <td>Thornton</td>
                   <td>@fat</td>
                 </tr>
                 <tr>
                   <th scope="row">3</th>
                   <td>Larry</td>
                   <td>the Bird</td>
                   <td>@twitter</td>
                 </tr>
               </tbody>
             </table>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
