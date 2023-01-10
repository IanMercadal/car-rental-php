<section class="contenedor">
    <h1 class="text-center">Admin</h1>
    
    <div class="database-admin">
        <div class="top-row">
            <a class="active-data" href="<?php base_url ?>cars">Cars</a>
        </div>
        <div class="bottom-row">
            <div class="filter-data">
                <div class="filter-header">
                    <h3>Filter</h3>
                    <a class="btn btn-primary" href="<?php base_url ?>create">Create</a>
                </div>
                
                <form action="<?php echo base_url ?>car/filter" method="post" class="filter-form">
                    <div>
                        <label>Id</label>
                        <input type="number" name="id_car">
                    </div>

                    <div>
                        <label>Brand</label>
                        <input type="text" name="brand">
                    </div>

                    <div>
                        <label>Date</label>
                        <input type="number" name="date">
                    </div>

                    <div>
                        <label>Sort by</label>
                        <select name="sort_field">
                            <option>Brand</option>
                            <option>Models</option>
                            <option>Creation</option>
                        </select>
                    </div>

                    <div class="sort-options">
                        <label>Asc</label>
                        <input type="radio" name="sort" value="asc">

                        <label>Desc</label>
                        <input type="radio" name="sort" value="desc">
                    </div>
                    
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
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
