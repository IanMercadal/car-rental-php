<section class="contenedor">
    <h1 class="text-center"><?php echo $car->brand . " " . $car->model ?></h1>
    <div class="car-profile">
        <div class="car-profile-info">
            <img src="<?php echo base_url ."uploads/images/". $car->image?>">
            <div class="car-data">
                <div class="car-data-icon">
                    <p class="car-data-rating green">4'5</p>
                    <p><b>Rating</b></p>
                </div>
                <div class="car-data-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-coin" width="80" height="80" viewBox="0 0 24 24" stroke-width="1.5" stroke="#e7a946" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <circle cx="12" cy="12" r="9" />
                        <path d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 0 0 0 4h2a2 2 0 0 1 0 4h-2a2 2 0 0 1 -1.8 -1" />
                        <path d="M12 6v2m0 8v2" />
                    </svg>
                    <p><b>Price(Rent):</b> <?php echo $car->price?>$</p>
                </div>
                <div class="car-data-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-coin" width="80" height="80" viewBox="0 0 24 24" stroke-width="1.5" stroke="#e7a946" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <circle cx="12" cy="12" r="9" />
                        <path d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 0 0 0 4h2a2 2 0 0 1 0 4h-2a2 2 0 0 1 -1.8 -1" />
                        <path d="M12 6v2m0 8v2" />
                    </svg>
                    <p><b>Price(Buy):</b> <?php echo $car->price?>$</p>
                </div>
                <div class="car-data-icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event" width="80" height="80" viewBox="0 0 24 24" stroke-width="1.5" stroke="#e7a946" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <rect x="4" y="5" width="16" height="16" rx="2" />
                    <line x1="16" y1="3" x2="16" y2="7" />
                    <line x1="8" y1="3" x2="8" y2="7" />
                    <line x1="4" y1="11" x2="20" y2="11" />
                    <rect x="8" y="15" width="2" height="2" />
                </svg>
                    <p><b>Age:</b> <?php echo $car->age?></p>
                </div>
            </div>
        </div>

        <div class="car-reservation">
            <?php if(isset($_SESSION["identity"])) : ?>
            <form>
                <div>
                    <label>Service</label>
                    <select name="service" id="service">
                        <option>Rent</option>
                        <option>Buy</option>
                    </select>
                </div>

                <div>
                    <label>Date</label>
                    <input type="date" name="date">
                </div>

                <input type="hidden" name="service" value="rent">

                <!-- <input type="hidden" name="id_user" value="<?php $_SESSION["id_user"] ?>"> -->

                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
            <?php else : ?>
                <h3>Need to login or register</h3>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-check" width="80" height="80" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="9" cy="7" r="4" />
                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                    <path d="M16 11l2 2l4 -4" />
                </svg>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam saepe dolorem, officia ipsa reiciendis debitis distinctio obcaecati molestias tempore! Eaque id ratione assumenda adipisci aut veniam! Consectetur aperiam explicabo magnam?</p>
                <a class="btn btn-primary"href="<?php echo base_url?>user/login">Login</a>
                <?php endif?>
        </div>
    </div>
</section>