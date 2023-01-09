<!-- OUR SERVICES -->
<section class="contenedor">
    <div class="our-services text-center">
        <h2>Our services</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, perspiciatis? Unde enim nulla maxime animi quasi quos sapiente, id impedit, accusamus temporibus officiis, neque sunt quo excepturi quod fuga sequi!</p>
    </div>
    <div class="iconos">
        <div class="icono">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-steering-wheel" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <circle cx="12" cy="12" r="9" />
                <circle cx="12" cy="12" r="2" />
                <line x1="12" y1="14" x2="12" y2="21" />
                <line x1="10" y1="12" x2="3.25" y2="10" />
                <line x1="14" y1="12" x2="20.75" y2="10" />
            </svg>
            <h3>Gran Experiencia</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In hic culpa repellendus nemo possimus atque officia quisquam cumque placeat commodi expedita, nihil deserunt nesciunt vel molestiae vitae veniam repudiandae est.</p>
        </div>
        <div class="icono">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <rect x="5" y="11" width="14" height="10" rx="2" />
                <circle cx="12" cy="16" r="1" />
                <path d="M8 11v-4a4 4 0 0 1 8 0v4" />
            </svg>
            <h3>Garantia de por vida</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In hic culpa repellendus nemo possimus atque officia quisquam cumque placeat commodi expedita, nihil deserunt nesciunt vel molestiae vitae veniam repudiandae est.</p>
        </div>
        <div class="icono">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-discount-2" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <line x1="9" y1="15" x2="15" y2="9" />
                <circle cx="9.5" cy="9.5" r=".5" fill="currentColor" />
                <circle cx="14.5" cy="14.5" r=".5" fill="currentColor" />
                <path d="M5 7.2a2.2 2.2 0 0 1 2.2 -2.2h1a2.2 2.2 0 0 0 1.55 -.64l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7a2.2 2.2 0 0 0 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1a2.2 2.2 0 0 0 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.64 1.55v1a2.2 2.2 0 0 1 -2.2 2.2h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1" />
            </svg>
            <h3>Precios</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In hic culpa repellendus nemo possimus atque officia quisquam cumque placeat commodi expedita, nihil deserunt nesciunt vel molestiae vitae veniam repudiandae est.</p>
        </div>
    </div>
</section>
<!-- CAR LIST -->
<section class="contenedor">
    <div id="index-cars">
        <h2 class="text-center">Popular cars</h2>
        <div class="car-list">
            <?php while ($car = $cars->fetch_object()) :?>
            <div class="car-demo">
                <img class="car-picture" src="<?php echo base_url ."uploads/images/". $car->image?>">
                <div>
                    <p><b><?php echo $car->brand ?></b></p>
                    <h3><?php echo $car->brand . " " . $car->model ?></h3>
                    <div class="caracteristicas">
                        <p><b>Age:</b> <?php echo $car->age ?></p>
                        <p><b>Rating:</b> 4'5</p>
                        <p><b>Rent:</b> <?php echo $car->price_rent ?></p>
                    </div>
                    <p><b>Price:</b> <?php echo $car->price ?>$</p>
                    
                </div>
                <a href="<?php echo base_url . "car/car&id_car=" . $car->id_car  ?>" class="btn btn-primary">Ver</a>
            </div>
            <?php endwhile;?>
        </div>
        <a href="<?php echo base_url . "car/list" ?>"  class="btn btn-primary">See all</a>
    </div>

</section>
<!-- TESTIMONIALS -->
<section class="contenedor">
    <h2 class="text-center">Testimonials</h2>

    <div class="testimonials">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta aut tenetur exercitationem non repellendus temporibus, eveniet nobis recusandae, consequuntur, inventore sit ratione maxime. Voluptate aperiam vero officia rem. Omnis, dicta!</p>
        <div class="testimonials-cards">
            <div class="testimonial-card">
                <img src="<?php echo base_url ?>assets/img/quote.png">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sit non sapiente, autem reprehenderit totam officia saepe, itaque unde facere, optio eius sunt doloremque? Facilis, dolor velit? Consectetur, tempora? Iste.</p>
                <div class="testimonial-grafic">
                    <div class="circle-profile"></div>
                    <p class="testimonial-name">John Doe</p>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="#21304D" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                    </svg>
                </div>
            </div>
            <div class="testimonial-card">
                <img src="<?php echo base_url ?>assets/img/quote.png">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sit non sapiente, autem reprehenderit totam officia saepe, itaque unde facere, optio eius sunt doloremque? Facilis, dolor velit? Consectetur, tempora? Iste.</p>
                <div class="testimonial-grafic">
                    <div class="circle-profile"></div>
                    <p class="testimonial-name">John Doe</p>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="#21304D" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                    </svg>
                </div>
            </div>
            <div class="testimonial-card">
                <img src="<?php echo base_url ?>assets/img/quote.png">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sit non sapiente, autem reprehenderit totam officia saepe, itaque unde facere, optio eius sunt doloremque? Facilis, dolor velit? Consectetur, tempora? Iste.</p>
                <div class="testimonial-grafic">
                    <div class="circle-profile"></div>
                    <p class="testimonial-name">John Doe</p>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="#21304D" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                    </svg>
                </div>
            </div>
            <div class="testimonial-card">
                <img src="<?php echo base_url ?>assets/img/quote.png">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sit non sapiente, autem reprehenderit totam officia saepe, itaque unde facere, optio eius sunt doloremque? Facilis, dolor velit? Consectetur, tempora? Iste.</p>
                <div class="testimonial-grafic">
                    <div class="circle-profile"></div>
                    <p class="testimonial-name">John Doe</p>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="#21304D" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>