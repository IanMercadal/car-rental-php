<section class="contenedor">
    <h1 class="text-center">Edit car</h1>


    <form class="form-car" method="post" action="<?=base_url . 'car/save&id=' . $car->id_car ?>" method="post" enctype="multipart/form-data">
        <div class="form-car-inputs">
            <div class="form-car-labels">
                <label>Brand</label>
                <input type="text" name="brand" value="<?php echo $car->brand?>">
            </div>
            <div class="form-car-labels">
                <label>Model</label>
                <input type="text" name="model" value="<?php echo $car->model?>">
            </div>
        </div>
        <div class="form-car-inputs">
            <div class="form-car-labels">
                <label>Price</label>
                <input type="number" name="price" value="<?php echo $car->price?>">
            </div>
            <div class="form-car-labels">
                <label>Price Rent</label>
                <input type="number" name="price_rent" value="<?php echo $car->price_rent?>">
            </div>
        </div>

        <div class="form-car-inputs">
            <div class="form-car-labels">
                <label>Age</label>
                <input type="number" name="age" value="<?php echo $car->age ?>">
            </div>
        </div>
        <div class="form-car-inputs">
            <div class="form-car-labels">
                <label>Description</label>
                <textarea name="description"><?php echo $car->description?></textarea>
            </div>
        </div>

        <div class="form-car-inputs">
            <div class="form-car-labels">
                <label>Image</label>
                <img width="100px" src="<?=base_url?>uploads/images/<?=$car->image ?>" />
                <input type="file" name="image" value="<?php echo $car->image?>">
            </div>
        </div>

        <div class="form-car-inputs">
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
    
</section>