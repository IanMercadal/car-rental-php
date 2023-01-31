<section class="contenedor">
    <div class="cars-filtered">
        <h1 class="text-center">Our Collection Cars</h1>

        <div class="car-list">
            <?php while ($car = $cars->fetch_object()) :?>
            <div class="car-demo">
                <img class="car-picture" src="<?php echo base_url ."uploads/images/". $car->image?>">
                <div>
                    <p><b><?php echo $car->brand ?></b></p>
                    <h3><?php echo $car->brand . " " . $car->model ?></h3>
                    <div class="caracteristicas">
                        <p><b>Age:</b> <?php echo $car->age ?></p>
                        <p><b>Rent:</b> <?php echo $car->price_rent ?>$</p>
                    </div>
                    <p><b>Price:</b> <?php echo $car->price ?>$</p>
                    
                </div>
                <a href="<?php echo base_url . "car/car&id_car=" . $car->id_car  ?>" class="btn btn-primary">Ver</a>
            </div>
            <?php endwhile;?>
        </div>
    </div>

</section>