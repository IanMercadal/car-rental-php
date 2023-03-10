<!-- OUR SERVICES -->
<section id="services" class="contenedor">
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
            <h3>Great Experience</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In hic culpa repellendus nemo possimus atque officia quisquam cumque placeat commodi expedita, nihil deserunt nesciunt vel molestiae vitae veniam repudiandae est.</p>
        </div>
        <div class="icono">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <rect x="5" y="11" width="14" height="10" rx="2" />
                <circle cx="12" cy="16" r="1" />
                <path d="M8 11v-4a4 4 0 0 1 8 0v4" />
            </svg>
            <h3>Guarentee for life</h3>
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
            <h3>Prices</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In hic culpa repellendus nemo possimus atque officia quisquam cumque placeat commodi expedita, nihil deserunt nesciunt vel molestiae vitae veniam repudiandae est.</p>
        </div>
    </div>
</section>
<!-- CAR LIST -->
<section id="list" class="contenedor">
    <div id="index-cars">
        <h2 class="text-center">Our collection cars</h2>
        <div class="car-list">
            <?php while ($car = $cars->fetch_object()) : ?>
                <div class="car-demo">
                    <img class="car-picture" src="<?php echo base_url . "uploads/images/" . $car->image ?>">
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
            <?php endwhile; ?>
        </div>
    </div>

</section>
<!-- TESTIMONIALS -->
<section id="testimonials" class="contenedor">
    <h2 class="text-center">Testimonials</h2>

    <div class="testimonials">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta aut tenetur exercitationem non repellendus temporibus, eveniet nobis recusandae, consequuntur, inventore sit ratione maxime. Voluptate aperiam vero officia rem. Omnis, dicta!</p>
        <div class="testimonials-cards">
            <div class="testimonial-card">
                <div class="top-testimonial">
                    <div class="circle-profile"></div>
                    <div class="stars">
                        <i class="star"></i>
                        <i class="star"></i>
                        <i class="star"></i>
                        <i class="star"></i>
                        <i class="star"></i>
                    </div>
                    <!-- <img src="<?php echo base_url ?>assets/img/quote.png"> -->
                </div>
                <div class="testimonial-bottom">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sit non sapiente, autem reprehenderit totam officia saepe, itaque unde facere, optio eius sunt doloremque? Facilis, dolor velit? Consectetur, tempora? Iste.</p>
                    <div class="testimonial-grafic">
                        <p class="testimonial-name">John Doe</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="top-testimonial">
                    <div class="circle-profile-2"></div>
                    <div class="stars">
                        <i class="star"></i>
                        <i class="star"></i>
                        <i class="star"></i>
                        <i class="star"></i>
                        <i class="star"></i>
                    </div>
                    <!-- <img src="<?php echo base_url ?>assets/img/quote.png"> -->
                </div>
                <div class="testimonial-bottom">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sit non sapiente, autem reprehenderit totam officia saepe, itaque unde facere, optio eius sunt doloremque? Facilis, dolor velit? Consectetur, tempora? Iste.</p>
                    <div class="testimonial-grafic">
                        <p class="testimonial-name">John Doe</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="top-testimonial">
                    <div class="circle-profile-3"></div>
                    <div class="stars">
                        <i class="star"></i>
                        <i class="star"></i>
                        <i class="star"></i>
                        <i class="star"></i>
                        <i class="star"></i>
                    </div>
                    <!-- <img src="<?php echo base_url ?>assets/img/quote.png"> -->
                </div>
                <div class="testimonial-bottom">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sit non sapiente, autem reprehenderit totam officia saepe, itaque unde facere, optio eius sunt doloremque? Facilis, dolor velit? Consectetur, tempora? Iste.</p>
                    <div class="testimonial-grafic">
                        <p class="testimonial-name">John Doe</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONTACT -->
<section id="contact" class="contenedor">
    <h2 class="text-center">Contact</h2>
    <div class="dos-columnas">
        <img class="img-contact" src="<?php echo base_url ?>assets/img/services/business.jpg">
        <div class="contact-info">
            
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed, eius autem aliquam assumenda cumque officia ea rerum saepe fugiat velit, quibusdam beatae quasi! Sint nihil hic porro sed cum est.
            Aperiam eaque sapiente illo provident praesentium debitis, quia a rerum, obcaecati itaque enim vel? Tenetur odit porro officiis exercitationem aliquid? Aspernatur eum nulla laboriosam eius! Ut perferendis quam sunt sint.</p>
            
            <div class="footer-data">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <rect x="3" y="5" width="18" height="14" rx="2" />
                    <polyline points="3 7 12 13 21 7" />
                </svg>
                <p>correo@correo.es</p>
            </div>

            <div class="footer-data">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                </svg>
                <p>1111-1111-1111-1111</p>
            </div>

            <div class="footer-data">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                </svg>
                <p>2222-2222-2222-2222</p>
            </div>

            <div class="footer-data">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <polyline points="5 12 3 12 12 3 21 12 19 12" />
                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                    <rect x="10" y="12" width="4" height="4" />
                </svg>
                <p>Calle Invent, 25 bajos</p>
            </div>
        </div>
    </div>
</section>