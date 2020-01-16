<?php
if (isset($_POST['login'])) {
    $db->Login($_POST);
}
?>
<div class="container">

    <div class="row">

        <div class="col-md-6 mb-5 mt-5">
            <h2>Login</h2>
            <hr>
            <form method="POST">
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Username</label>
                        <input name="username" type="text" class="form-control" autofocus="autofocus">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Password</label>
                        <input name="password" type="password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <select name="level" class="form-control">
                            <option value="">Pilih Level</option>
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                    </div>
                </div>
                <button name="login" class="btn btn-success">Login</button>
            </form>
        </div>

    </div>
</div>