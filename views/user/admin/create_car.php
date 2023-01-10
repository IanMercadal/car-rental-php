<section class="contenedor">
    <h1 class="text-center">Create car</h1>


    <form class="form-car" method="post" action="<?=base_url?>car/save" method="post" enctype="multipart/form-data">
        <div class="form-car-inputs">
            <div class="form-car-labels">
                <label>Brand</label>
                <input type="text" name="brand">
            </div>
            <div class="form-car-labels">
                <label>Model</label>
                <input type="text" name="model">
            </div>
        </div>
        <div class="form-car-inputs">
            <div class="form-car-labels">
                <label>Price</label>
                <input type="number" name="price">
            </div>
            <div class="form-car-labels">
                <label>Price Rent</label>
                <input type="number" name="price_rent">
            </div>
        </div>

        <div class="form-car-inputs">
            <div class="form-car-labels">
                <label>Age</label>
                <input type="number" name="age">
            </div>
        </div>

        <div class="form-car-inputs">
            <div class="form-car-labels">
                <label>Description</label>
                <textarea name="description"></textarea>
            </div>
        </div>

        <div class="form-car-inputs">
            <div class="form-car-labels">
                <label>Image</label>
                <input type="file" name="image">
            </div>
        </div>
        <div class="form-car-inputs">
            <button class="btn btn-secondary">Submit</button>
        </div>
    </form>
    
</section>