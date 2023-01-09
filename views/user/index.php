<section class="contenedor">
    <h1 class="text-center">Your Profile</h1>

    <div class="user-info">
        <div class="top-row">
            <a href="<?php base_url ?>index" class="active-data">Data</a>
            <a href="<?php echo base_url ?>order/user">Orders</a>
        </div>
        <div class="bottom-row">
            <div class="circle-profile"></div>
            <div class="user">
                <p><b>Name: </b><?php echo $_SESSION["identity"]->name . " " . $_SESSION["identity"]->surname?></p>
                <p><b>Date: </b><?php echo $_SESSION["identity"]->date ?></p>
                <p><b>Email: </b><?php echo $_SESSION["identity"]->email ?></p>
                <p><b>Registered: </b><?php echo $_SESSION["identity"]->date_creation ?></p>
            </div>
        </div>
    </div>
</section>