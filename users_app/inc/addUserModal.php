<!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Add New User </h5>
            <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" class='form-group ContactForm p-1 mb-1 mt-1'>
            <input class='form-control' type="text" placeholder="Username" name="username" required   >

            <!-- <input class='form-control my-2' type="email" placeholder="Email" name="email" required  > -->
            <div class="form-group mt-1">
                <label for="exampleFormControlSelect1">Select Plan</label>
                <select name="plan" class="form-control" id="exampleFormControlSelect1">
                <option value="Basic">Basic</option>
                <option value="PRO">PRO</option>
            </div>

            <input class='form-control  mt-3' type="text" placeholder="Balance" name="balance" required >

            <div>
                <input type="submit" name="submit" value='Save' class='btn btn-primary btn-block my-4' >
            </div>

        </form>

        </div>
        </div>
    </div>
    </div>