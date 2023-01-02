<section class="contenedor">
    <h1 class="text-center">Register</h1>
    
    <div class="register">
        <div class="register-info">
            <h3>information</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus ex optio ab voluptatibus illo quam quibusdam laborum sed placeat suscipit error, reprehenderit eveniet nemo nisi alias distinctio! Maiores, nulla nemo!</p>
            <p><b>Lorem ipsum:</b> dolor sit amet consectetur adipisicing elit. Vel accusamus reiciendis, illum sed est dolores quaerat hic quam fugiat deleniti? Cumque suscipit veritatis corrupti aperiam. Quibusdam nobis ullam dolor aliquam!</p>
            <a class="btn btn-auth">Have an Account</a>
        </div>

        <form class="form-auth" action="<?=base_url?>user/save" method="post" enctype="multipart/form-data">
            <?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete') : ?>
                <strong class="alert_green">Registro completado correctamente</strong>
            <?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
                <strong class="alert_red">Registro fallido</strong>
            <?php endif; ?>
            <?php Utils::deleteSession('register'); ?>
            <h3>Form</h3>
            
            <div class="form-columns">
                <div>
                    <label>Name</label>
                    <input type="text" name="name" placeholder="name" required>
                </div>

                <div>
                    <label>Surname</label>
                    <input type="text" name="surname" placeholder="surname" required>
                </div>
            </div>

            <div class="form-columns">
                <div>
                    <label>Email</label>
                    <input type="email" name="email" placeholder="email" required>
                </div>

                <div>
                    <label>Date</label>
                    <input type="date" name="date" required>
                </div>
            </div>

            <div class="form-columns">
                <div>
                    <label>Password</label>
                    <input type="password" name="password" required>
                </div>

                <div>
                    <label>Confirm Password</label>
                    <input type="password" name="repassword" required>
                </div>
            </div>

            <div class="form-columns">
                <div>
                    <label>Image</label>
                    <input type="file" name="image">
                </div>
            </div>
            
            <button class="btn btn-primary">Register</button>
        </form>
    </div>
</section>
