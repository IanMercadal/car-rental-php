<section class="contenedor">
    <?php if($car->state == 0) :?>
        <div class="car-reservation">
            <h2 class="text-center">The Car has been sold</h2>
            <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="200" height="200" viewBox="0 0 647.63626 632.17383" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M687.3279,276.08691H512.81813a15.01828,15.01828,0,0,0-15,15v387.85l-2,.61005-42.81006,13.11a8.00676,8.00676,0,0,1-9.98974-5.31L315.678,271.39691a8.00313,8.00313,0,0,1,5.31006-9.99l65.97022-20.2,191.25-58.54,65.96972-20.2a7.98927,7.98927,0,0,1,9.99024,5.3l32.5498,106.32Z" transform="translate(-276.18187 -133.91309)" fill="#f2f2f2"/><path d="M725.408,274.08691l-39.23-128.14a16.99368,16.99368,0,0,0-21.23-11.28l-92.75,28.39L380.95827,221.60693l-92.75,28.4a17.0152,17.0152,0,0,0-11.28028,21.23l134.08008,437.93a17.02661,17.02661,0,0,0,16.26026,12.03,16.78926,16.78926,0,0,0,4.96972-.75l63.58008-19.46,2-.62v-2.09l-2,.61-64.16992,19.65a15.01489,15.01489,0,0,1-18.73-9.95l-134.06983-437.94a14.97935,14.97935,0,0,1,9.94971-18.73l92.75-28.4,191.24024-58.54,92.75-28.4a15.15551,15.15551,0,0,1,4.40966-.66,15.01461,15.01461,0,0,1,14.32032,10.61l39.0498,127.56.62012,2h2.08008Z" transform="translate(-276.18187 -133.91309)" fill="#3f3d56"/><path d="M398.86279,261.73389a9.0157,9.0157,0,0,1-8.61133-6.3667l-12.88037-42.07178a8.99884,8.99884,0,0,1,5.9712-11.24023l175.939-53.86377a9.00867,9.00867,0,0,1,11.24072,5.9707l12.88037,42.07227a9.01029,9.01029,0,0,1-5.9707,11.24072L401.49219,261.33887A8.976,8.976,0,0,1,398.86279,261.73389Z" transform="translate(-276.18187 -133.91309)" fill="#ffffff"/><circle cx="190.15351" cy="24.95465" r="20" fill="#ffffff"/><circle cx="190.15351" cy="24.95465" r="12.66462" fill="#fff"/><path d="M878.81836,716.08691h-338a8.50981,8.50981,0,0,1-8.5-8.5v-405a8.50951,8.50951,0,0,1,8.5-8.5h338a8.50982,8.50982,0,0,1,8.5,8.5v405A8.51013,8.51013,0,0,1,878.81836,716.08691Z" transform="translate(-276.18187 -133.91309)" fill="#e6e6e6"/><path d="M723.31813,274.08691h-210.5a17.02411,17.02411,0,0,0-17,17v407.8l2-.61v-407.19a15.01828,15.01828,0,0,1,15-15H723.93825Zm183.5,0h-394a17.02411,17.02411,0,0,0-17,17v458a17.0241,17.0241,0,0,0,17,17h394a17.0241,17.0241,0,0,0,17-17v-458A17.02411,17.02411,0,0,0,906.81813,274.08691Zm15,475a15.01828,15.01828,0,0,1-15,15h-394a15.01828,15.01828,0,0,1-15-15v-458a15.01828,15.01828,0,0,1,15-15h394a15.01828,15.01828,0,0,1,15,15Z" transform="translate(-276.18187 -133.91309)" fill="#3f3d56"/><path d="M801.81836,318.08691h-184a9.01015,9.01015,0,0,1-9-9v-44a9.01016,9.01016,0,0,1,9-9h184a9.01016,9.01016,0,0,1,9,9v44A9.01015,9.01015,0,0,1,801.81836,318.08691Z" transform="translate(-276.18187 -133.91309)" fill="#ffffff"/><circle cx="433.63626" cy="105.17383" r="20" fill="#ffffff"/><circle cx="433.63626" cy="105.17383" r="12.18187" fill="#fff"/></svg>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas ipsa cupiditate temporibus quisquam, beatae eos, doloribus exercitationem rem ipsam error voluptatum minima doloremque itaque iste quam, adipisci accusamus molestias corporis.</p>
            <a href="<?php echo base_url ?>car/list" class="btn btn-primary">Cars</a>
        </div>
    <?php else: ?>
    <h1 class="text-center"><?php echo $car->brand . " " . $car->model ?></h1>
    <div class="car-profile">
        <div class="car-profile-info">
            <img src="<?php echo base_url . "uploads/images/" . $car->image ?>">
        </div>
            <?php if(isset($_SESSION['order']) && $_SESSION['order'] == "complete") :?>
                <div class="car-reservation">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check" width="80" height="80" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00b341" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <circle cx="12" cy="12" r="9" />
                        <path d="M9 12l2 2l4 -4" />
                    </svg>
                    <p>The reservation have been completed successfully</p>
                    <a class="btn btn-primary"href="<?php echo base_url ?>order/user">Orders</a>
                    <?php unset($_SESSION['order']); ?>
                </div>
            <?php else : ?>
                <div class="car-data-parent">
                    <div class="car-reservation">
                        <?php if (isset($_SESSION["identity"])) : ?>
                            <form class="car-reservation-form" action="<?php echo base_url ?>order/save" method="post">
                                <div class="get-car">
                                    <h3>Get car</h3>
                                    <?php if(isset($_SESSION["order_date"])) : ?>
                                        <p class="error">Date invalid, already reserved</p>
                                        <?php unset($_SESSION["order_date"])?>
                                    <?php endif; ?>
                                </div>

                                <div class="form-column">
                                    <label>Service</label>
                                    <select name="service" id="service">
                                        <option value="rent">Rent</option>
                                        <option value="buy">Buy</option>
                                    </select>
                                </div>

                                <div class="form-column">
                                    <label>Date</label>
                                    <input type="date" name="date">
                                </div>

                                <input type="hidden" name="price_rent" value='<?php echo $car->price_rent ?>'>
                                <input type="hidden" name="price" value='<?php echo $car->price ?>'>
                                <input type="hidden" name="id_user" value='<?php echo $_SESSION["identity"]->id_user ?>'>
                                <input type="hidden" name="id_car" value="<?php echo $_GET["id_car"] ?>">

                                <button class="btn btn-secondary" type="submit">Submit</button>
                            </form>
                        <?php else : ?>
                            <h3>Need to login or register</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-check" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                <path d="M16 11l2 2l4 -4" />
                            </svg>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam saepe dolorem, officia ipsa reiciendis debitis distinctio obcaecati molestias tempore! Eaque id ratione assumenda adipisci aut veniam! Consectetur aperiam explicabo magnam?</p>
                            <a class="btn btn-primary" href="<?php echo base_url ?>user/login">Login</a>
                        <?php endif ?>
                    </div>
                    <div class="car-data">
                        <div class="car-data-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-coin" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#e7a946" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="12" cy="12" r="9" />
                                <path d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 0 0 0 4h2a2 2 0 0 1 0 4h-2a2 2 0 0 1 -1.8 -1" />
                                <path d="M12 6v2m0 8v2" />
                            </svg>
                            <p><b>Price(Rent):</b> <?php echo $car->price_rent ?>$</p>
                        </div>
                        <div class="car-data-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-coin" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#e7a946" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="12" cy="12" r="9" />
                                <path d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 0 0 0 4h2a2 2 0 0 1 0 4h-2a2 2 0 0 1 -1.8 -1" />
                                <path d="M12 6v2m0 8v2" />
                            </svg>
                            <p><b>Price(Buy):</b> <?php echo $car->price ?>$</p>
                        </div>
                        <div class="car-data-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#e7a946" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <rect x="4" y="5" width="16" height="16" rx="2" />
                                <line x1="16" y1="3" x2="16" y2="7" />
                                <line x1="8" y1="3" x2="8" y2="7" />
                                <line x1="4" y1="11" x2="20" y2="11" />
                                <rect x="8" y="15" width="2" height="2" />
                            </svg>
                            <p><b>Age:</b> <?php echo $car->age ?></p>
                        </div>
                    </div>
                </div>
            <?php endif;?>
        <?php endif;?>
    </div>
</section>