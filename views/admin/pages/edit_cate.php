
<!-- /.col-lg-12 -->
<div class="col-lg-7" style="padding-bottom:120px">
    <!--@include('admin.blocks.error')-->
    <form action="routes/edit_cate.php" method="POST">
        <input type="hidden" name="txtId" <?php echo 'value="'.$cate['id'].'"' ?>>
        <div class="form-group">
            <label>Category Parent</label>
            <select class="form-control" name="sltParent">
                <option value="0">Please Choose Category</option>
                <?php cate_parent($cates,0,"--",$cate["parent_id"]); ?>
            </select>
        </div>
        <div class="form-group">
            <label>Category Name</label>
            <input class="form-control" name="txtCateName" placeholder="Please Enter Category Name" <?php echo 'value="'.$cate['name'].'"' ?> />
        </div>
        <div class="form-group">
            <label>Category Order</label>
            <input class="form-control" name="txtOrder" placeholder="Please Enter Category Order" <?php echo 'value="'.$cate['order'].'"' ?> />
        </div>
        <div class="form-group">
            <label>Category Keywords</label>
            <input class="form-control" name="txtKeywords" placeholder="Please Enter Category Keywords" <?php echo 'value="'.$cate['keywords'].'"' ?> />
        </div>
        <div class="form-group">
            <label>Category Description</label>
            <textarea class="form-control" rows="3" name="txtDescription"><?php echo $cate['description'] ?></textarea>
        </div>
        <button type="submit" class="btn btn-default">Category Edit</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
