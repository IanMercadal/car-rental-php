<section class="contenedor">
    <div class="cars-filtered">
        <h1 class="text-center">Our Cars</h1>
        <div class="filtros">
            <!-- Poner box-shadow al div filtros -->
            <div class="search-box">
                <form class="car-form" method="post">
                    <div class="input-box">
                        <label>Brand</label>
                        <select>
                            <option selected>-- Select --</option>
                            <option>BMW</option>
                            <option>BMW</option>
                            <option>BMW</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <label>Year</label>
                        <input type="number">
                    </div>
                    <div class="input-box">
                        <label>Price</label>
                        <input type="number">
                    </div>
                    <div class="input-box">
                        <label>Rating</label>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-up" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <line x1="12" y1="5" x2="12" y2="19" />
                            <line x1="16" y1="9" x2="12" y2="5" />
                            <line x1="8" y1="9" x2="12" y2="5" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-down" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <line x1="12" y1="5" x2="12" y2="19" />
                            <line x1="16" y1="15" x2="12" y2="19" />
                            <line x1="8" y1="15" x2="12" y2="19" />
                        </svg>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="big-car-list">
            <h3 class="text-center">Total results: 4</h3>
            <?php while ($car = $cars->fetch_object()) :?>
                <div class="big-car">
                    <img class="car-picture" src="<?php echo base_url ."uploads/images/". $car->image?>">
                    <div class="big-car-info">
                        <h3><?php echo $car->brand . " " . $car->model ?></h3>
                        <div class="big-car-info-stats">
                            <p><b>Color:</b> Azul</p>
                            <p><b>Año:</b> 2020</p>
                            <p><b>CV:</b> 250</p>
                            <p><b>Asientos:</b> 5</p>
                            <p><b>Precio:</b> <?php echo $car->price ?>$</p>
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