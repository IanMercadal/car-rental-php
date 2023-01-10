<section class="contenedor">
    <h1 class="text-center">Your Profile</h1>

    <div class="user-info">
        <div class="top-row">
            <a href="<?php echo base_url ?>user/index">Data</a>
            <a class="active-data" href="<?php base_url ?>orders">Orders</a>
        </div>
        <div class="bottom-row">
            <div class="testimonials-user">
                <h1 class="text-center">Orders</h1>
                <?php if($orders->num_rows > 0 ) : ?>
                    <div class="user-orders">
                        <?php $index = 1; while ($order = $orders->fetch_object()) :?>
                            <div class="user-order">
                                <p><b><?php echo $index?>. </b></p>
                                <p><b>Date:</b> <?php echo $order->date ?></p>
                                <p><b>Service:</b> <?php echo $order->service ?></p>
                                <p><b>Price:</b> <?php echo $order->price ?>$</p>
                                <?php $index += 1; ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php else :?>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="80" height="80" viewBox="0 0 24 24" stroke-width="1.5" stroke="#21304D" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="18" y1="6" x2="6" y2="18" />
                        <line x1="6" y1="6" x2="18" y2="18" />
                    </svg>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum odit laboriosam, nesciunt temporibus quia doloremque pariatur maiores ex vitae doloribus deserunt vel ullam culpa, repellendus soluta! Adipisci, repellendus obcaecati? Obcaecati.</p>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>