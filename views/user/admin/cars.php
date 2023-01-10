<section class="contenedor">
    <h1 class="text-center">Admin</h1>
    
    <div class="database-admin">
        <div class="top-row">
            <a class="active-data" href="<?php base_url ?>cars">Cars</a>
        </div>
        <div class="bottom-row">
            <table>
                <tr>
                    <th>id_car</th>
                    <th>brand</th>
                    <th>model</th>
                    <th>date</th>
                    <th>creation</th>
                    <th>image</th>
                    <th>actions</th>
                </tr>

                    <?php while($car_row = $cars->fetch_object()) : ?>
                        <tr>
                            <td><?=$car_row->id_car?></td>
                            <td><?=$car_row->brand?></td>
                            <td><?=$car_row->model?></td>
                            <td><?=$car_row->age?></td>
                            <td><?=$car_row->date_creation?></td>
                            <td>
                                <?php if(!isset($car_row->image) || $car_row->image == "") :?>
                                    <div class="rectangle"></div>
                                    <?php else : ?>
                                        <img width="100px" src="<?=base_url?>uploads/images/<?=$car_row->image ?>" />
                                <?php endif ?>
                            </td>
                            <td><a href="<?php base_url ?>edit&id=<?=$car_row->id_car?>" class="btn btn-update">Edit</a></td>
                            <td><a href="<?php base_url ?>delete&id=<?=$car_row->id_car?>" class="btn btn-delete">Delete</a></td>
                        </tr>
                    <?php endwhile ?>
            </table>
        </div>
    </div>
</section>
