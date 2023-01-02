<section class="contenedor">
    <h1 class="text-center">Admin</h1>

    <div class="database-admin">
        <div class="top-row">
            <a class="active-data">Users</a>
            <a>Cars</a>
            <a>Services</a>
        </div>
        <div class="bottom-row">
            <div class="filter-data">
                <h3>Filter</h3>

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

                <tr>
                    <td>1</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>12/02/1999</td>
                    <td>02/01/2023</td>
                    <td>User</td>
                    <td>johndoe@email.com</td>
                    <td><div class="rectangle"></div></td>
                    <td><button class="btn btn-update">Edit</button></td>
                    <td><button class="btn btn-delete">Delete</button></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>12/02/1999</td>
                    <td>02/01/2023</td>
                    <td>User</td>
                    <td>johndoe@email.com</td>
                    <td><div class="rectangle"></div></td>
                    <td><button class="btn btn-update">Edit</button></td>
                    <td><button class="btn btn-delete">Delete</button></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>12/02/1999</td>
                    <td>02/01/2023</td>
                    <td>User</td>
                    <td>johndoe@email.com</td>
                    <td><div class="rectangle"></div></td>
                    <td><button class="btn btn-update">Edit</button></td>
                    <td><button class="btn btn-delete">Delete</button></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>12/02/1999</td>
                    <td>02/01/2023</td>
                    <td>User</td>
                    <td>johndoe@email.com</td>
                    <td><div class="rectangle"></div></td>
                    <td><button class="btn btn-update">Edit</button></td>
                    <td><button class="btn btn-delete">Delete</button></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>12/02/1999</td>
                    <td>02/01/2023</td>
                    <td>User</td>
                    <td>johndoe@email.com</td>
                    <td><div class="rectangle"></div></td>
                    <td><button class="btn btn-update">Edit</button></td>
                    <td><button class="btn btn-delete">Delete</button></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>12/02/1999</td>
                    <td>02/01/2023</td>
                    <td>User</td>
                    <td>johndoe@email.com</td>
                    <td><div class="rectangle"></div></td>
                    <td><button class="btn btn-update">Edit</button></td>
                    <td><button class="btn btn-delete">Delete</button></td>
                </tr>
            </table>
        </div>
    </div>
</section>
