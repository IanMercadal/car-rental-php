<div class="car-background" style="background-image: url(<?php echo base_url . "uploads/images/" . $car->image ?>);background-position: center;background-repeat: no-repeat;background-size: cover;">
    <section class="contenedor">
    
        <?php if ($car->state == 0) : ?>
            <h1 class="text-center"><?php echo $car->brand . " " . $car->model ?></h1>
            <div class="car-reservation-sold">
                <h2 class="text-center">The Car has been sold</h2>
                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="200" height="200" viewBox="0 0 647.63626 632.17383" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path d="M687.3279,276.08691H512.81813a15.01828,15.01828,0,0,0-15,15v387.85l-2,.61005-42.81006,13.11a8.00676,8.00676,0,0,1-9.98974-5.31L315.678,271.39691a8.00313,8.00313,0,0,1,5.31006-9.99l65.97022-20.2,191.25-58.54,65.96972-20.2a7.98927,7.98927,0,0,1,9.99024,5.3l32.5498,106.32Z" transform="translate(-276.18187 -133.91309)" fill="#f2f2f2" />
                    <path d="M725.408,274.08691l-39.23-128.14a16.99368,16.99368,0,0,0-21.23-11.28l-92.75,28.39L380.95827,221.60693l-92.75,28.4a17.0152,17.0152,0,0,0-11.28028,21.23l134.08008,437.93a17.02661,17.02661,0,0,0,16.26026,12.03,16.78926,16.78926,0,0,0,4.96972-.75l63.58008-19.46,2-.62v-2.09l-2,.61-64.16992,19.65a15.01489,15.01489,0,0,1-18.73-9.95l-134.06983-437.94a14.97935,14.97935,0,0,1,9.94971-18.73l92.75-28.4,191.24024-58.54,92.75-28.4a15.15551,15.15551,0,0,1,4.40966-.66,15.01461,15.01461,0,0,1,14.32032,10.61l39.0498,127.56.62012,2h2.08008Z" transform="translate(-276.18187 -133.91309)" fill="#3f3d56" />
                    <path d="M398.86279,261.73389a9.0157,9.0157,0,0,1-8.61133-6.3667l-12.88037-42.07178a8.99884,8.99884,0,0,1,5.9712-11.24023l175.939-53.86377a9.00867,9.00867,0,0,1,11.24072,5.9707l12.88037,42.07227a9.01029,9.01029,0,0,1-5.9707,11.24072L401.49219,261.33887A8.976,8.976,0,0,1,398.86279,261.73389Z" transform="translate(-276.18187 -133.91309)" fill="#ffffff" />
                    <circle cx="190.15351" cy="24.95465" r="20" fill="#ffffff" />
                    <circle cx="190.15351" cy="24.95465" r="12.66462" fill="#fff" />
                    <path d="M878.81836,716.08691h-338a8.50981,8.50981,0,0,1-8.5-8.5v-405a8.50951,8.50951,0,0,1,8.5-8.5h338a8.50982,8.50982,0,0,1,8.5,8.5v405A8.51013,8.51013,0,0,1,878.81836,716.08691Z" transform="translate(-276.18187 -133.91309)" fill="#e6e6e6" />
                    <path d="M723.31813,274.08691h-210.5a17.02411,17.02411,0,0,0-17,17v407.8l2-.61v-407.19a15.01828,15.01828,0,0,1,15-15H723.93825Zm183.5,0h-394a17.02411,17.02411,0,0,0-17,17v458a17.0241,17.0241,0,0,0,17,17h394a17.0241,17.0241,0,0,0,17-17v-458A17.02411,17.02411,0,0,0,906.81813,274.08691Zm15,475a15.01828,15.01828,0,0,1-15,15h-394a15.01828,15.01828,0,0,1-15-15v-458a15.01828,15.01828,0,0,1,15-15h394a15.01828,15.01828,0,0,1,15,15Z" transform="translate(-276.18187 -133.91309)" fill="#3f3d56" />
                    <path d="M801.81836,318.08691h-184a9.01015,9.01015,0,0,1-9-9v-44a9.01016,9.01016,0,0,1,9-9h184a9.01016,9.01016,0,0,1,9,9v44A9.01015,9.01015,0,0,1,801.81836,318.08691Z" transform="translate(-276.18187 -133.91309)" fill="#ffffff" />
                    <circle cx="433.63626" cy="105.17383" r="20" fill="#ffffff" />
                    <circle cx="433.63626" cy="105.17383" r="12.18187" fill="#fff" />
                </svg>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas ipsa cupiditate temporibus quisquam, beatae eos, doloribus exercitationem rem ipsam error voluptatum minima doloremque itaque iste quam, adipisci accusamus molestias corporis.</p>
                <a href="<?php echo base_url ?>car/list" class="btn btn-primary">Cars</a>
            </div>
        <?php else : ?>
            <div class="car-profile">
                <div class="car-profile-info">
                    
                    <img src="<?php echo base_url . "uploads/images/" . $car->image ?>">
                    <div class="car-data">
                        <div class="car-data-icon">
                            <svg width="42px" height="42px" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                            stroke: #020202;
                                            stroke-miterlimit: 10;
                                            stroke-width: 1.91px;
                                        }
                                    </style>
                                </defs>
                                <path class="cls-1" d="M7.23,11.05H12L13,8.18h8.6l.95-1.91-.95-1.91H13L12,1.5H7.23A2.87,2.87,0,0,0,4.36,4.36V8.18A2.88,2.88,0,0,0,7.23,11.05Z" />
                                <line class="cls-1" x1="8.18" y1="8.18" x2="8.18" y2="4.36" />
                                <line class="cls-1" x1="18.68" y1="6.27" x2="18.68" y2="4.36" />
                                <line class="cls-1" x1="15.82" y1="6.27" x2="15.82" y2="4.36" />
                                <path class="cls-1" d="M13,8.18,15.79,11l-1.35,2.7,2,2,2,2,2,2-.66,2-2,.68-6.08-6.07L9,17.78,5.67,14.4a2.86,2.86,0,0,1-.13-3.91" />
                                <line class="cls-1" x1="10.38" y1="11.05" x2="8.37" y2="13.05" />
                                <line class="cls-1" x1="17.14" y1="19.13" x2="18.49" y2="17.78" />
                                <line class="cls-1" x1="15.12" y1="17.1" x2="16.47" y2="15.75" />
                                <path class="cls-1" d="M4.89,12.93a3.82,3.82,0,0,1-.53-7.49A3.82,3.82,0,0,1,8.18,6.62" />
                            </svg>
                            <p><b>Rent:</b> <?php echo $car->price_rent ?>$</p>
                        </div>
                        <div class="car-data-icon">
                            <svg width="42px" height="42px" viewBox="0 0 1024 1024" fill="#000000" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <path d="M800.8 952c-31.2 0-56-24.8-56-56s24.8-56 56-56 56 24.8 56 56-25.6 56-56 56z m-448 0c-31.2 0-56-24.8-56-56s24.8-56 56-56 56 24.8 56 56-25.6 56-56 56zM344 792c-42.4 0-79.2-33.6-84-76l-54.4-382.4-31.2-178.4c-2.4-19.2-19.2-35.2-37.6-35.2H96c-13.6 0-24-10.4-24-24s10.4-24 24-24h40.8c42.4 0 80 33.6 85.6 76l31.2 178.4 54.4 383.2C309.6 728 326.4 744 344 744h520c13.6 0 24 10.4 24 24s-10.4 24-24 24H344z m40-128c-12.8 0-23.2-9.6-24-22.4-0.8-6.4 1.6-12.8 5.6-17.6s10.4-8 16-8l434.4-32c19.2 0 36-15.2 38.4-33.6l50.4-288c1.6-13.6-2.4-28-10.4-36.8-5.6-6.4-12.8-9.6-21.6-9.6H320c-13.6 0-24-10.4-24-24s10.4-24 24-24h554.4c22.4 0 42.4 9.6 57.6 25.6 16.8 19.2 24.8 47.2 21.6 75.2l-50.4 288c-4.8 41.6-42.4 74.4-84 74.4l-432 32c-1.6 0.8-2.4 0.8-3.2 0.8z" fill="" />
                            </svg>
                            <p><b>Buy:</b> <?php echo $car->price ?>$</p>
                        </div>
                        <div class="car-data-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <rect x="4" y="5" width="16" height="16" rx="2" />
                                <line x1="16" y1="3" x2="16" y2="7" />
                                <line x1="8" y1="3" x2="8" y2="7" />
                                <line x1="4" y1="11" x2="20" y2="11" />
                                <rect x="8" y="15" width="2" height="2" />
                            </svg>
                            <p><b>Age:</b> <?php echo $car->age ?></p>
                        </div>
                        <div class="car-data-icon">
                            <svg height="42px" width="42px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                                <style type="text/css">
                                    .st0 {
                                        fill: #000000;
                                    }
                                </style>
                                <g>
                                    <path class="st0" d="M491.896,264.561c-19.448-45.944-51.883-84.992-92.734-112.589C358.311,124.367,308.96,108.214,256,108.214
                                    c-35.29,0-69,7.169-99.633,20.129C110.4,147.786,71.351,180.23,43.75,221.076C16.154,261.899,0,311.287,0,364.214
                                    c0,4.427,0.109,8.814,0.331,13.185h80.202v-26.371H37.775c1.512-25.395,7.338-49.589,16.766-71.895
                                    c9.315-22.04,22.174-42.25,37.819-59.903l30.234,30.242l18.656-18.661l-30.214-30.218c7.186-6.363,14.766-12.307,22.746-17.677
                                    c31.508-21.274,68.754-34.501,109.033-36.896v42.734h26.37v-42.766c25.423,1.524,49.617,7.338,71.92,16.774
                                    c22.044,9.315,42.258,22.17,59.903,37.814l-30.234,30.234l18.632,18.661l30.238-30.218c6.371,7.186,12.279,14.766,17.69,22.75
                                    c21.266,31.509,34.5,68.758,36.891,109.024h-42.738v26.371h80.162c0.242-4.371,0.35-8.758,0.35-13.185
                                    C512.025,328.931,504.838,295.222,491.896,264.561z" />
                                    <path class="st0" d="M329.375,199.471c-1.415-0.621-3.169,0.073-4.133,1.653l-75.383,124.072c-18.915,2.96-33.4,19.291-33.4,39.033
                                    c0,21.847,17.706,39.556,39.553,39.556c21.842,0,39.553-17.709,39.553-39.556c0-7.395-2.064-14.282-5.593-20.202l40.968-140.396
                                    C331.46,201.859,330.791,200.093,329.375,199.471z M256.012,384.004c-10.924,0-19.778-8.847-19.778-19.774
                                    c0-10.927,8.854-19.782,19.778-19.782c10.92,0,19.774,8.855,19.774,19.782C275.786,375.157,266.932,384.004,256.012,384.004z" />
                                </g>
                            </svg>
                            <p><b>KM:</b> <?php echo $car->kilometers ?></p>
                        </div>
                        <div class="car-data-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="12" cy="7" r="4" />
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            </svg>
                            <p><b>Seats:</b> <?php echo $car->seats ?></p>
                        </div>
                        <div class="car-data-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-gas-station" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M14 11h1a2 2 0 0 1 2 2v3a1.5 1.5 0 0 0 3 0v-7l-3 -3" />
                                <path d="M4 20v-14a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v14" />
                                <line x1="3" y1="20" x2="15" y2="20" />
                                <path d="M18 7v1a1 1 0 0 0 1 1h1" />
                                <line x1="4" y1="11" x2="14" y2="11" />
                            </svg>
                            <p><b>Gas:</b> <?php echo $car->type_gas ?></p>
                        </div>
                    </div>
                </div>
                <?php if (isset($_SESSION['order']) && $_SESSION['order'] == "complete") : ?>
                    <div class="car-reservation">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check" width="80" height="80" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00b341" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="12" cy="12" r="9" />
                            <path d="M9 12l2 2l4 -4" />
                        </svg>
                        <p class="text-center">The reservation have been completed successfully</p>
                        <a class="btn btn-secondary" href="<?php echo base_url ?>user/index">Orders</a>
                        <?php unset($_SESSION['order']); ?>
                    </div>
                <?php else : ?>
                    <div class="car-data-parent">
                        <div class="car-reservation">
                            <h1 class="text-center"><?php echo $car->brand . " " . $car->model ?></h1>
                            <p><b>Description:</b><br> <?php echo $car->description ?></p>
                            <?php if (isset($_SESSION["identity"])) : ?>
                                <form class="car-reservation-form" action="<?php echo base_url ?>order/save" method="post">
                                    <div class="get-car">
                                        <h3>Reservation</h3>
                                        <?php if (isset($_SESSION["order_date"])) : ?>
                                            <p class="error">Date invalid, already reserved</p>
                                            <?php unset($_SESSION["order_date"]) ?>
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-check" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                    <path d="M16 11l2 2l4 -4" />
                                </svg>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam saepe dolorem, officia ipsa reiciendis debitis distinctio obcaecati molestias tempore!</p>
                                <a class="btn btn-secondary" href="<?php echo base_url ?>user/login">Login</a>
                            <?php endif ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            </div>
    </section>
</div>