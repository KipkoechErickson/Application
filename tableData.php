<!--display users database records-->

    <table class="table mt-3" id="userTable">
        <thead class="bg-dark text-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Photo</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Picture 1</td>
                <td>Mark</td>
                <td>mark@gmail.com</td>
                <td>071856628</td>
                <td>
                    <a href="#" class="mr-3 profile" title="View profile" data-target="#profileModal" data-toggle="modal"><i class="fas fa-eye text-success"></i></a>
                    <a href="#" class="mr-3 editUser" title="Edit" data-target="#addUser" data-toggle="modal"><i class="fas fa-edit text-primary"></i></a>
                    <a href="#" class="mr-3 deleteUser" title="Delete"><i class="fas fa-trash-alt text-danger"></i></a>
                </td>
            </tr>
        </tbody>
    </table>

<!--end of display users database records-->