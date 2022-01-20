<!--Add User form modal-->
<div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adding or Updating User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addUserForm" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-dark"><i class="fas fa-user text-light" style="font-size:25px;"></i></span>
                        </div>
                        <input type="text" autocomplete="off" class="form-control" id="username" name="username" placeholder="Enter username..." required="required">
                    </div>

                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-dark"><i class="fas fa-envelope-open text-light" style="font-size:25px;"></i></span>
                        </div>
                        <input type="email" autocomplete="off" class="form-control" id="email" name="email" placeholder="Enter email..." required="required">
                    </div>

                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-dark"><i class="fas fa-phone text-light" style="font-size:25px;"></i></span>
                        </div>
                        <input type="text" autocomplete="off" class="form-control" id="mobile" name="mobile" maxlength="10" minlength="10" placeholder="Enter mobile..." required="required">
                    </div>

                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-dark"><i class="fas fa-images text-light" style="font-size:25px;"></i></span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="userPhoto" name="photo">
                            <label class="custom-file-label" for="customFile">Upload photo...</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark">Submit</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" data-dismiss="modal">Close</button>
                    </div>
            </form>
        </div>
    </div>
</div>
<!--END of Add User form modal-->