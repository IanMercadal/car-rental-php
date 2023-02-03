<section class="contenedor">
    <h1 class="text-center">Admin</h1>

    <div class="database-admin">
        <div class="top-row">
            <a class="active-data" href="http://localhost/car/admin">Cars</a>
        </div>
        <div class="bottom-row">
            <div class="filter-data">
                <div>
                    <h3>Filter</h3>
                </div>
                
                <form class="filter-form">
                    <div>
                        <label>id</label>
                        <input type="number" name="id_user">
                    </div>

                    <div>
                        <label>email</label>
                        <input type="email" name="email">
                    </div>

                    <div>
                        <label>rol</label>
                        <select>
                            <option>User</option>
                            <option>Rol</option>
                        </select>
                    </div>

                    <div>
                        <label>Sort by</label>
                        <select>
                            <option>Name</option>
                            <option>Surname</option>
                            <option>Creation</option>
                            <option>Email</option>
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
                    <th>id_user</th>
                    <th>name</th>
                    <th>surname</th>
                    <th>date</th>
                    <th>creation</th>
                    <th>rol</th>
                    <th>email</th>
                    <th>image</th>
                    <th>actions</th>
                </tr>

                <?php if($_SERVER['REQUEST_URI'] == "/user/admin") :?>

                    <?php while($user_row = $users->fetch_object()) : ?>
                        <tr>
                            <td><?=$user_row->id_user?></td>
                            <td><?=$user_row->name?></td>
                            <td><?=$user_row->surname?></td>
                            <td><?=$user_row->date?></td>
                            <td><?=$user_row->date_creation?></td>
                            <td><?=$user_row->rol?></td>
                            <td><?=$user_row->email?></td>
                            <td><div class="rectangle"></div></td>
                            <td><button class="btn btn-update">Edit</button></td>
                            <td><button class="btn btn-delete">Delete</button></td>
                        </tr>
                    <?php endwhile ?>

                <?php elseif($_SERVER['REQUEST_URI'] == "/user/admin&cars"): ?>
                    <?php while($car_row = $cars->fetch_object()) : ?>
                        <tr>
                            <td><?=$car_row->id_car?></td>
                            <td><?=$car_row->brand?></td>
                            <td><?=$car_row->model?></td>
                            <td><?=$car_row->age?></td>
                            <td><?=$car_row->date_creation?></td>
                            <td><div class="rectangle"></div></td>
                            <td><button class="btn btn-update">Edit</button></td>
                            <td><button class="btn btn-delete">Delete</button></td>
                        </tr>
                    <?php endwhile ?>
                <?php endif; ?>
            </table>
        </div>
    </div>
</section>
