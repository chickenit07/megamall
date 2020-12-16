<div class="col-lg-7" style="padding-bottom:120px">
    <form action="routes/edit_user.php" method="POST">
        <input type='hidden' name='txtId' value="<?php echo $data['id']?>" />
        <input type='hidden' name='txtUser' value="<?php echo $data['username']?>" />
        <div class="form-group">
            <label>Username</label>
            <input class="form-control" name="user" 
            <?php echo 'value="'.$data['username'].'"' ?> disabled />
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="txtPass" placeholder="Please Enter Password" />
        </div>
        <div class="form-group">
            <label>RePassword</label>
            <input type="password" class="form-control" name="txtRePass" placeholder="Please Enter RePassword" />
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="txtEmail"
            <?php echo 'value="'.$data['email'].'"' ?> placeholder="Please Enter Email" />
        </div>
        <div class="form-group">
            <label>User Level</label>
            <label class="radio-inline">
                <input name="rdoLevel" value="1" checked="" type="radio"
                <?php if($data["level"]==1) echo 'checked="checked"' ?>
                >Member
            </label>
            <label class="radio-inline">
                <input name="rdoLevel" value="2" type="radio"
                <?php if($data["level"]==2) echo 'checked="checked"' ?>
                >Admin
            </label>
        </div>
        <button type="submit" class="btn btn-default">User Edit</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
