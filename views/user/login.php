<section class="contenedor">
    <h1 class="text-center">Login</h1>
    
    <div class="login">
        <div class="login-info">
            <h3>information</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus ex optio ab voluptatibus illo quam quibusdam laborum sed placeat suscipit error, reprehenderit eveniet nemo nisi alias distinctio! Maiores, nulla nemo!</p>
            <p><b>Lorem ipsum:</b> dolor sit amet consectetur adipisicing elit. Vel accusamus reiciendis, illum sed est dolores quaerat hic quam fugiat deleniti? Cumque suscipit veritatis corrupti aperiam. Quibusdam nobis ullam dolor aliquam!</p>
            <a class="btn btn-auth">Need an Account</a>
        </div>

        <form class="form-auth" action="<?=base_url?>user/auth_login" method="post">
            <h3>Form</h3>

            <div class="form-columns">
                <div>
                    <label>Email</label>
                    <input type="email" name="email" placeholder="email" required>
                </div>

                <div>
                    <label>Password</label>
                    <input type="password" name="password" required>
                </div>
            </div>
            
            <button class="btn btn-primary">Login</button>
        </form>
    </div>
</section>
