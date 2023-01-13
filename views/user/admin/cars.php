<section class="contenedor">
    <h1 class="text-center">Admin</h1>
    
    <div class="database-admin">
        <div class="top-row">
            <a class="active-data" href="<?php base_url ?>create">Create</a>
        </div>
        <div class="bottom-row">
            <?php while($car_row = $cars->fetch_object()) : ?>

                <div class="admin-car-row">
                    <p class="admin-car-info"><?=$car_row->id_car?></p>
                    <p class="admin-car-info"><?=$car_row->brand?></p>
                    <p class="admin-car-info"><?=$car_row->model?></p>
                    <p class="admin-car-info"><?=$car_row->age?></p>
                    <p class="admin-car-info"><?=$car_row->date_creation?></p>
                    <p class="admin-car-info">
                        <?php if(!isset($car_row->image) || $car_row->image == "") :?>
                            <div class="rectangle"></div>
                            <?php else : ?>
                                <img width="100px" src="<?=base_url?>uploads/images/<?=$car_row->image ?>" />
                        <?php endif ?>
                    </p>
    
                    <a href="<?php base_url ?>edit&id=<?=$car_row->id_car?>" class="btn btn-update">Edit</a>
                    <a href="<?php base_url ?>delete&id=<?=$car_row->id_car?>" class="btn btn-delete">Delete</a>
                </div>
            <?php endwhile ?>
        </div>
    </div>
</section>
