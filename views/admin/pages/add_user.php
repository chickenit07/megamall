
<div class="col-lg-7" style="padding-bottom:120px">
    <?php //include('admin.blocks.error') ?>
    <form action="../routes/admin/add_user.php" method="POST">

        <div class="form-group">
            <label>Username</label>
            <input class="form-control" name="txtUser" placeholder="Enter Username" value=""/>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="txtPass" placeholder="Enter Password" />
        </div>
        <div class="form-group">
            <label>RePassword</label>
            <input type="password" class="form-control" name="txtRePass" placeholder="Confirm Password" />
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="txtEmail" placeholder="Enter Email" value="" />
        </div>
        <div class="form-group">
            <label>User Level</label>
            <label class="radio-inline">
                <input name="userLevel" value="1" checked="" type="radio">Member
            </label>
            <label class="radio-inline">
                <input name="userLevel" value="2" type="radio">Admin
            </label>
        </div>
        <button type="submit" class="btn btn-default">Save</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
