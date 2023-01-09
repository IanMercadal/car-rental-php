<section class="contenedor">
    <div class="cars-filtered">
        <h1 class="text-center">Our Cars</h1>

        <div class="big-car-list">
            <?php while ($car = $cars->fetch_object()) :?>
                <div class="big-car">
                    <img class="big-car-picture" src="<?php echo base_url ."uploads/images/". $car->image?>">
                    <div class="big-car-info">
                        <h3><?php echo $car->brand . " " . $car->model ?></h3>
                        <div class="big-car-info-stats">
                            <p><b>Date:</b> <?php echo $car->age ?></p>
                            <p><b>Buy:</b> <?php echo $car->price ?>$</p>
                            <p><b>Rent:</b> <?php echo $car->price_rent ?>$</p>
                        </div>
                        <div class="big-car-description">
                            <p><?php echo $car->description ?></p>
                        </div>
                        <a href="<?php echo base_url . "car/car&id_car=" . $car->id_car  ?>" class="btn btn-primary">Ver</a>
                    </div>
                </div>
            <?php endwhile ;?>
        </div>
    </div>

</section>