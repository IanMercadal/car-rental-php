<section class="contenedor">
    <h1>Create car</h1>
    
    <form method="post" action="<?=base_url?>car/save" method="post" enctype="multipart/form-data">
        <div>
            <label>Brand</label>
            <input type="text" name="brand">

            <label>Model</label>
            <input type="text" name="model">
        </div>
        <div>
            <label>Price</label>
            <input type="number" name="price">
            <label>Age</label>
            <input type="number" name="age">
        </div>

        <div>
            <label>Description</label>
            <textarea name="description"></textarea>
        </div>

        <div>
            <label>Image</label>
            <input type="file" name="image">
        </div>

        <button class="btn btn-primary">Submit</button>
    </form>
</section>