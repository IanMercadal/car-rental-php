<section class="contenedor">
    <h1 class="text-center">Register</h1>

    <div class="register">
        <div class="register-info">
            <h3>Information</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus ex optio ab voluptatibus illo quam quibusdam laborum sed placeat suscipit error, reprehenderit eveniet nemo nisi alias distinctio! Maiores, nulla nemo!</p>
            <p><b>Lorem ipsum:</b> dolor sit amet consectetur adipisicing elit. Vel accusamus reiciendis, illum sed est dolores quaerat hic quam fugiat deleniti? Cumque suscipit veritatis corrupti aperiam. Quibusdam nobis ullam dolor aliquam!</p>
            <a href="<?php base_url ?>/user/login" class="btn btn-auth">Have an Account</a>
        </div>

        <form class="form-auth" action="<?= base_url ?>user/save" method="post" enctype="multipart/form-data">
            <?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'complete') : ?>
                <div class="form-succesful">
                    <h3 class="alert_green">Register completed</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check" width="80" height="80" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00b341" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <circle cx="12" cy="12" r="9" />
                        <path d="M9 12l2 2l4 -4" />
                    </svg>
                    <a class="btn btn-primary" href="<?php base_url ?>/user/login">Login</a>
                </div>
            <?php else : ?>
                <h3>Form</h3>

                <div class="form-columns-register">
                    <div class="form-column">
                        <div class="form-row">
                            <label>Name</label>
                            <?php if (isset($_POST["name"]) && $_POST["name"] === false) {
                                echo '<p class="error">Error with the name</p>';
                            } ?>
                        </div>
                        <input type="text" name="name" placeholder="name" required>
                    </div>

                    <div>
                        <div class="form-row">
                            <label>Surname</label>
                            <?php if (isset($_POST["surname"]) && $_POST["surname"] === false) {
                                echo '<p class="error">Error with the surname</p>';
                            } ?>
                        </div>
                        <input type="text" name="surname" placeholder="surname" required>
                    </div>
                </div>

                <div class="form-columns-register">
                    <div class="form-column">
                        <div class="form-row">
                            <label>Email</label>
                            <?php if (isset($_POST["email"]) && $_POST["email"] === false) {
                                echo '<p class="error">Error with the email</p>';
                            } ?>
                        </div>
                        <input type="email" name="email" placeholder="email" required>
                    </div>

                    <div class="form-column">
                        <div class="form-row">
                            <label>Date</label>
                            <?php if (isset($_POST["date"]) && $_POST["date"] === false) {
                                echo '<p class="error">Error with the date</p>';
                            } ?>
                        </div>
                        <input type="date" name="date" required>
                    </div>
                </div>

                <div class="form-columns-register">
                    <div class="form-column">
                        <div class="form-row">
                            <label>Password</label>
                            <?php if (isset($_POST["password"]) && $_POST["password"] === false) {
                                echo '<p class="error">Error with the password</p>';
                            } ?>
                        </div>
                        <input type="password" name="password" required>
                    </div>

                    <div>
                        <div class="form-row">
                            <label>Confirm Password</label>
                            <?php if (isset($_POST["password"]) && $_POST["password"] === false) {
                                echo '<p class="error">Error with the repassword</p>';
                            } ?>
                        </div>
                        <input type="password" name="repassword" required>
                    </div>
                </div>

                <div class="form-columns-register">
                    <div class="form-column">
                        <div>
                            <label>Image</label>
                            <?php if (isset($_POST["image"]) && $_POST["image"] === false) {
                                echo '<p class="error">Error with the image</p>';
                            } ?>
                        </div>
                        <input type="file" name="image">
                    </div>
                </div>

                <button class="btn btn-primary">Register</button>
            <?php endif; ?>
            <?php Utils::deleteSession('register'); ?>
        </form>
    </div>
</section>