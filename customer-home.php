<?php 
    include 'include/connection.php';
    include 'include/userheader.php';
    
    $sql1 = "SELECT * FROM service_tbl s
        INNER JOIN size_tbl sz ON s.sizeID = sz.sizeID
        WHERE s.stypeID = '6' ORDER BY s.sizeID ASC";

    $sql2 = "SELECT * FROM service_tbl s
        INNER JOIN size_tbl sz ON s.sizeID = sz.sizeID
        WHERE s.stypeID = '7' ORDER BY s.sizeID ASC";

    $sql3 = "SELECT * FROM service_tbl s
        INNER JOIN size_tbl sz ON s.sizeID = sz.sizeID
        WHERE s.stypeID = '8' ORDER BY s.sizeID ASC";

    $sql4 = "SELECT * FROM service_tbl s
        INNER JOIN size_tbl sz ON s.sizeID = sz.sizeID
        WHERE s.stypeID = '9' ORDER BY s.sizeID ASC";

    $sql5 = "SELECT * FROM service_tbl s
        INNER JOIN size_tbl sz ON s.sizeID = sz.sizeID
        WHERE s.stypeID = '1' ORDER BY s.sizeID ASC";

    $sql6 = "SELECT * FROM service_tbl s
        INNER JOIN size_tbl sz ON s.sizeID = sz.sizeID
        WHERE s.stypeID = '2' ORDER BY s.sizeID ASC";

    $sql7 = "SELECT * FROM service_tbl s
        INNER JOIN size_tbl sz ON s.sizeID = sz.sizeID
        WHERE s.stypeID = '3' ORDER BY s.sizeID ASC";

    $sql8 = "SELECT * FROM service_tbl s
        INNER JOIN size_tbl sz ON s.sizeID = sz.sizeID
        WHERE s.stypeID = '4' ORDER BY s.sizeID ASC";

    $sql9 = "SELECT * FROM service_tbl s
        INNER JOIN size_tbl sz ON s.sizeID = sz.sizeID
        WHERE s.stypeID = '5' ORDER BY s.sizeID ASC";

?>

<section class="services" id="services">
    <h1 class="mb-4 mt-3 text-center">Our Services</h1>
    <div class="d-flex p-3 bd-highlight d-flex justify-content-center d-grid gap-3">
    <div class="card text-white bg-dark mb-3 " style="max-width: 18rem;">
        <div class="card-title text-center fs-3 badge bg-secondary">Package A<A></A></div>
        <div class="card-body">
        <h5 class="card-header text-center"><ul style="list-style: none;" class ="mb-3">
                            <li class="text-center pe-4 mb-3" >CAR WASH</li>
                            <li class="text-center pe-4 mb-3" >ARMOR ALL</li>
                            <li class="text-center pe-4 mb-3" >HAND WAX</li>
                        </ul></h5>
                        <p class="card-text">
                        <h3 class="text-center">Sizes</h3>
                        <!-- PHP loop for sizes here -->
                        <?php 
                        $result1 = mysqli_query($con, $sql1);
                        if(mysqli_num_rows($result1)>0){
                            while($row = mysqli_fetch_assoc($result1)){
                        ?>
                        <ul class="sizes">
                            <li class="text-center"><?php echo $row['size'].' - '. $row['price'] ?></li>
                        </ul>
                        <?php 
                            }
                        }
                        ?>
                        </p>
        </div>
    </div>
    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
        <div class="card-title text-center fs-3 badge bg-secondary">Package B<A></A></div>
        <div class="card-body">
        <h5 class="card-header text-center"><ul style="list-style: none;" class = "mb-3">
                            <li class="text-center pe-4 mb-3" >CAR WASH</li>
                            <li class="text-center pe-4 mb-3" >ARMOR ALL</li>
                            <li class="text-center pe-4 mb-3" >BUFFING WAX</li>
                        </ul></h5>
                        <p class="card-text" >
                        <h3 class="text-center">Sizes</h3>
                        <!-- PHP loop for sizes here -->
                        <?php 
                        $result2 = mysqli_query($con, $sql2);
                        if(mysqli_num_rows($result1)>0){
                            while($row = mysqli_fetch_assoc($result2)){
                        ?>
                        <ul class="sizes">
                            <li class="text-center"><?php echo $row['size'].' - '. $row['price'] ?></li>
                        </ul>
                        <?php 
                            }
                        }
                        ?>
                        </p>
        </div>
    </div>
    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
        <div class="card-title text-center fs-3 badge bg-secondary">Package C<A></A></div>
        <div class="card-body ">
        <h5 class="card-header text-center "><ul style="list-style: none;" class = "mb-3">
                            <li class="text-center pe-4 mb-3" >CAR WASH</li>
                            <li class="text-center pe-4 mb-3" >BACK TO ZERO</li>
                            <li class="text-center pe-4 mb-3" >ARMOR ALL</li>
                        </ul></h5>
                        <p class="card-text" >
                        <h3 class="text-center">Sizes</h3>
                        <!-- PHP loop for sizes here -->
                        <?php 
                        $result3 = mysqli_query($con, $sql3);
                        if(mysqli_num_rows($result3)>0){
                            while($row = mysqli_fetch_assoc($result3)){
                        ?>
                        <ul class="sizes ">
                            <li class="text-center "><?php echo $row['size'].' - '. $row['price'] ?></li>
                        </ul>
                        <?php 
                            }
                        }
                        ?>
                        </p>
        </div>
    </div>
    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
        <div class="card-title text-center fs-3 badge bg-secondary">Package D<A></A></div>
        <div class="card-body">
        <h5 class="card-header text-center"><ul style="list-style: none;" class = "mb-4">
                            <li class="text-center pe-4 fs-6" >CAR WASH</li>
                            <li class="text-center pe-4 fs-6" >ARMOR ALL</li>
                            <li class="text-center pe-4 fs-6" >HAND WAX</li>
                            <li class="text-center pe-4 fs-6" >ENGINE WASH</li>
                            <li class="text-center pe-4 fs-6" >BACK TO ZERO</li>

                        </ul></h5>
                        <p class="card-text" >
                        <h3 class="text-center">Sizes</h3>
                        <!-- PHP loop for sizes here -->
                        <?php 
                        $result4 = mysqli_query($con, $sql4);
                        if(mysqli_num_rows($result4)>0){
                            while($row = mysqli_fetch_assoc($result4)){
                        ?>
                        <ul class="sizes">
                            <li class="text-center"><?php echo $row['size'].' - '. $row['price'] ?></li>
                        </ul>
                        <?php 
                            }
                        }
                        ?>
                        </p>
        </div>
    </div>
    </div>
    <div class="container5 px-2">
        

    <h1 class="mb-4 text-center">Other Services</h1> 
    <div class="d-flex pe-3 bd-highlight d-flex justify-content-center d-grid gap-3">
    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
        <div class="card-title text-center"><A></A></div>
        <div class="card-body">
        <h5 class="card-header text-center"><ul style="list-style: none;" class = "mb-4">
                            <li class="text-center pe-4 fs-4 mt-4" >CAR WASH</li>

                        </ul></h5>
                        <p class="card-text " >
                        <h3 class="text-center">Sizes</h3>
                        <!-- PHP loop for sizes here -->
                        <?php 
                        $result5 = mysqli_query($con, $sql5);
                        if(mysqli_num_rows($result5)>0){
                            while($row = mysqli_fetch_assoc($result5)){
                        ?>
                        <ul class="sizes">
                            <li class="text-center"><?php echo $row['size'].' - '. $row['price'] ?></li>
                        </ul>
                        <?php 
                            }
                        }
                        ?>
                        </p>
        </div>
    </div>           
    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
        <div class="card-title text-center"><A></A></div>
        <div class="card-body">
        <h5 class="card-header text-center"><ul style="list-style: none;" class = "mb-4">
                            <li class="text-center pe-4 fs-4 mt-4" >BASIC WASH</li>

                        </ul></h5>
                        <p class="card-text " >
                        <h3 class="text-center">Sizes</h3>
                        <!-- PHP loop for sizes here -->
                        <?php 
                        $result6 = mysqli_query($con, $sql6);
                        if(mysqli_num_rows($result6)>0){
                            while($row = mysqli_fetch_assoc($result6)){
                        ?>
                        <ul class="sizes">
                            <li class="text-center"><?php echo $row['size'].' - '. $row['price'] ?></li>
                        </ul>
                        <?php 
                            }
                        }
                        ?>
                        </p>
        </div>
    </div>                               
    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
        <div class="card-title text-center"><A></A></div>
        <div class="card-body">
        <h5 class="card-header text-center"><ul style="list-style: none;" class = "mt-1">
                            <li class="text-center pe-4 fs-4 mb-0" >DEEP CLEANING</li>

                        </ul></h5>
                        <p class="card-text " >
                        <h3 class="text-center">Sizes</h3>
                        <!-- PHP loop for sizes here -->
                        <?php 
                        $result7 = mysqli_query($con, $sql7);
                        if(mysqli_num_rows($result7)>0){
                            while($row = mysqli_fetch_assoc($result7)){
                        ?>
                        <ul class="sizes">
                            <li class="text-center"><?php echo $row['size'].' - '. $row['price'] ?></li>
                        </ul>
                        <?php 
                            }
                        }
                        ?>
                        </p>
        </div>
    </div>       
                          
    </div>
    <div class="d-flex pe-3 bd-highlight d-flex justify-content-center d-grid gap-3">
    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
        <div class="card-title text-center"><A></A></div>
        <div class="card-body">
        <h5 class="card-header text-center"><ul style="list-style: none;">
                            <li class="text-center pe-4 fs-4" >INTERIOR CLEANING</li>

                        </ul></h5>
                        <p class="card-text " >
                        <h3 class="text-center">Sizes</h3>
                        <!-- PHP loop for sizes here -->
                        <?php 
                        $result8 = mysqli_query($con, $sql8);
                        if(mysqli_num_rows($result8)>0){
                            while($row = mysqli_fetch_assoc($result8)){
                        ?>
                        <ul class="sizes">
                            <li class="text-center"><?php echo $row['size'].' - '. $row['price'] ?></li>
                        </ul>
                        <?php 
                            }
                        }
                        ?>
                        </p>
        </div>
    </div>           
    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
        <div class="card-title text-center"><A></A></div>
        <div class="card-body">
        <h5 class="card-header text-center"><ul style="list-style: none;">
                            <li class="text-center pe-4 fs-4" >EXTERIOR CLEANING</li>

                        </ul></h5>
                        <p class="card-text " >
                        <h3 class="text-center">Sizes</h3>
                        <!-- PHP loop for sizes here -->
                        <?php 
                        $result9 = mysqli_query($con, $sql9);
                        if(mysqli_num_rows($result9)>0){
                            while($row = mysqli_fetch_assoc($result9)){
                        ?>
                        <ul class="sizes">
                            <li class="text-center"><?php echo $row['size'].' - '. $row['price'] ?></li>
                        </ul>
                        <?php 
                            }
                        }
                        ?>
                        </p>
        </div>
    </div>        
    </div>
</section>
<section class="cartypes" id="cartypes">
<div class="container mt-4">
    <h1 class="text-center mb-4">Vehicle Types Information</h1>
    <div class="row">
      <!-- Sedan Card -->
      <div class="col-md-6 mb-4">
        <div class="card flex-md-row">
          <img src="img/sedan1.jpg" class="card-img-top img-fluid" alt="Sedan Image">
          <div class="card-body">
            <h5 class="card-title">Sedan</h5>
            <p class="card-text">A passenger car with a separate trunk compartment for luggage. Typically has four doors, seating for five people, and is designed for everyday use.</p>
            <p class="card-text"><small class="text-muted">Exanples: City, Civic, Mirage, Vios</small></p>
          </div>
        </div>
      </div>

      <!-- SUV Card -->
      <div class="col-md-6 mb-4">
        <div class="card flex-md-row">
          <img src="img/suv1.png" class="card-img-top img-fluid" alt="SUV Image">
          <div class="card-body">
            <h5 class="card-title">SUV (Sport Utility Vehicle)</h5>
            <p class="card-text">A versatile vehicle that combines elements of a sedan and a truck, with increased ground clearance and often four-wheel drive capability.</p>
            <p class="card-text"><small class="text-muted">Exanples: Toyota Fortuner, Ford Everest</small></p>
          </div>
        </div>
      </div>

      <!-- Hatchback Card -->
      <div class="col-md-6 mb-4">
        <div class="card flex-md-row">
          <img src="img/hatch1.jpg" class="card-img-top img-fluid" alt="Hatchback Image">
          <div class="card-body">
            <h5 class="card-title">Hatchback</h5>
            <p class="card-text">A compact car with a rear door that swings upward, providing access to the cargo area. Usually has a smaller footprint than sedans, but offers flexible cargo space.</p>
            <p class="card-text"><small class="text-muted">Exanples: Honda Civic EK, Toyota Wigo</small></p>
          </div>
        </div>
      </div>

      

      <!-- Convertible Card -->
      <div class="col-md-6 mb-4">
        <div class="card flex-md-row">
          <img src="img/convertible1.jpg" class="card-img-top img-fluid " alt="Convertible Image">
          <div class="card-body">
            <h5 class="card-title">Convertible (Cabriolet)</h5>
            <p class="card-text">A car with a retractable roof that can be folded away, offering an open-air driving experience. May have reduced trunk space and can be less insulated from noise.</p>
            <p class="card-text"><small class="text-muted">Exanples: Mazda MX-5 Miata, BMW Z4</small></p>
          </div>
        </div>
      </div>

      
      <!-- Sports Car Card -->
      <div class="col-md-6 mb-4">
        <div class="card flex-md-row">
          <img src="img/sports1.png" class="card-img-top img-fluid " alt="Minivan Image">
          <div class="card-body">
            <h5 class="card-title">Sports Car</h5>
            <p class="card-text">A high-performance vehicle designed for agility and speed, often featuring a sleek, aerodynamic body and powerful engine, optimized for spirited driving. Also the embodiedment of luxury.</p>
            <p class="card-text"><small class="text-muted">Exanples: Chevrolet Corvette, Ferrari 488 GTB</small></p>
          </div>
        </div>
      </div>

      <!-- Coupe Card -->
      <div class="col-md-6 mb-4">
        <div class="card flex-md-row">
          <img src="img/coupe1.jpg" class="card-img-top img-fluid" alt="Coupe Image">
          <div class="card-body">
            <h5 class="card-title">Coupe</h5>
            <p class="card-text">A two-door car is typically designed with a sporty and sleek appearance, but it often sacrifices rear seats compared to sedans. It caters to drivers who prioritize style and compactness in their vehicle.</p>
            <p class="card-text"><small class="text-muted">Exanples: BMW 4 Series Coupe, Audi A5</small></p>
          </div>
        </div>
      </div>


      <!-- Pickup Truck Card -->
      <div class="col-md-6 mb-4">
        <div class="card flex-md-row">
          <img src="img/pickup1.jpg" class="card-img-top img-fluid " alt="Pickup Truck Image">
          <div class="card-body">
            <h5 class="card-title">Pickup Truck</h5>
            <p class="card-text">A vehicle with an open cargo area at the rear, often used for transporting goods. Comes in various sizes with two or four doors, and typically offers powerful engines and towing capabilities.</p>
            <p class="card-text"><small class="text-muted">Exanples: Toyota Hilux, Ford Ranger</small></p>
          </div>
        </div>
      </div>


      <!-- Crossover Card -->
      <div class="col-md-6 mb-4">
        <div class="card flex-md-row">
          <img src="img/crossover1.jpg" class="card-img-top img-fluid " alt="Crossover Image">
          <div class="card-body">
            <h5 class="card-title">Crossover</h5>
            <p class="card-text">A vehicle built on a car platform with SUV-like features. Combines advantages of SUVs with the comfort and fuel efficiency of a car, offering flexibility for various needs.</p>
            <p class="card-text"><small class="text-muted">Exanples: Honda CR-V, Toyota RAV4</small></p>
          </div>
        </div>
      </div>

      <!-- AUV Vehicle Card -->
      <div class="col-md-6 mb-4">
        <div class="card flex-md-row">
          <img src="img/auv1.jpg" class="card-img-top img-fluid " alt="Auv Image">
          <div class="card-body">
            <h5 class="card-title">AUV (Asian Utility Vehicle)</h5>
            <p class="card-text">A versatile automobile designed for rugged terrain and practical utility, offering spacious interiors and robust capabilities suitable for both urban and off-road use.</p>
            <p class="card-text"><small class="text-muted">Exanples: Crosswind, Mitsubishi Adventure</small></p>
          </div>
        </div>
      </div>

      <!-- Van Vehicle Card -->
      <div class="col-md-6 mb-4">
        <div class="card flex-md-row">
          <img src="img/van1.jpg" class="card-img-top img-fluid " alt="Van Image">
          <div class="card-body">
            <h5 class="card-title">VAN</h5>
            <p class="card-text">A commercial vehicle primarily designed for transporting goods or passengers, characterized by a boxy shape, ample cargo space, and often configurable seating arrangements.</p>
            <p class="card-text"><small class="text-muted">Exanples: Toyota Hiace, Toyota Alphard</small></p>
          </div>
        </div>
      </div>

      <!-- Microcar Vehicle Card -->
      <div class="col-md-6 mb-4">
        <div class="card flex-md-row">
          <img src="img/micro1.jpg" class="card-img-top img-fluid" alt="Microcar Image">
          <div class="card-body">
            <h5 class="card-title">Micro Car</h5>
            <p class="card-text">A compact car designed for urban mobility, typically characterized by its small sizes, and ease of parking in congested areas. Despite the small size, it often offer adequate seating for two.</p>
            <p class="card-text"><small class="text-muted">Exanples: Hyundai Eon, Suzuki Alto</small></p>
          </div>
        </div>
      </div>

      <!-- Minivan Vehicle Card -->
      <div class="col-md-6 mb-4">
        <div class="card flex-md-row">
          <img src="img/minivan1.jpg" class="card-img-top img-fluid" alt="Sedan Image">
          <div class="card-body">
            <h5 class="card-title">Minivan</h5>
            <p class="card-text">A family-oriented vehicle known for its spacious interior, and ample cargo capacity, its ideal for transporting large groups or hauling bulky items with comfort and convenience.</p>
            <p class="card-text"><small class="text-muted">Exanples: Ford Tourneo, Suzuki Ertiga</small></p>
          </div>
        </div>
      </div>



    </div>
  </div>
</section>
<!-- Bootstrap JS and dependencies (optional for certain features) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<?php 
    include 'include/userfooter.php';
?>
