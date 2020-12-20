
<form action="../routes/admin/add_product.php" method="POST" enctype="multipart/form-data">
    <div class="col-lg-7" style="padding-bottom:120px">
        <!-- @include('admin.blocks.error') -->
            <div class="form-group">
                <label>Category Parent</label>
                <select class="form-control" name="sltParent" required>
                    <option value="">Please Choose Category</option>
                    <?php cate_parent($cates); ?>
                </select>
            </div>
            <div class="form-group">
                <label>Name</label>
                <input class="form-control" name="txtName" placeholder="Please Enter Name" value="" required />
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="number" class="form-control" name="txtPrice" placeholder="Please Enter Price" value="" required/>
            </div>
            <div class="form-group">
                <label>Intro</label>
                <textarea class="form-control" rows="3" name="txtIntro"></textarea>
            </div>
            <div class="form-group">
                <label>Content</label>
                <textarea class="form-control" rows="3" name="txtContent"></textarea>
            </div>
            <div class="form-group">
                <label>Images</label>
                <input type="file" name="fImages" value="" required>
            </div>
            <div class="form-group">
                <label>Product Keywords</label>
                <input class="form-control" name="txtKeywords" placeholder="Please Enter Category Keywords" value="" required/>
            </div>
            <div class="form-group">
                <label>Product Description</label>
                <textarea class="form-control" rows="3" name="txtDescription"> </textarea>
            </div>
            <button type="submit" class="btn btn-default">Product Add</button>
            <button type="reset" class="btn btn-default">Reset</button>
    </div>
</form>
