<style type="">
    .img_current {width: 150px;}
    .img_detail {width: 200px; margin-bottom: 20px;}
    .icon_del {position: relative; top: -70px; left: -20px;}
    #insert {margin-top: 20px;}
</style>
    <form action="../routes/admin/edit_product.php" method="POST" name="frmEditProduct" enctype="multipart/form-data">
        <div class="col-lg-7" style="padding-bottom:120px">
                <!--@include('admin.blocks.error')-->
                <input type="hidden" name="txtId" <?php echo 'value="'.$product["id"].'"' ?> />
                <div class="form-group">
                    <label>Category Parent</label>
                    <select class="form-control" name="sltParent">
                        <option value="">Please Choose Category</option>
                        <?php
                            cate_parent($cates,0,"--",$product["cate_id"]);
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" name="txtName" placeholder="Please Enter Username" 
                    <?php echo 'value="'.$product["name"].'"' ?> />
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="number" class="form-control" name="txtPrice" placeholder="Please Enter Price" 
                    <?php echo 'value="'.$product["price"].'"' ?> />
                </div>
                <div class="form-group">
                    <label>Intro</label>
                    <textarea class="form-control" rows="3" name="txtIntro">
                        <?php echo $product["intro"] ?>
                    </textarea>
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea class="form-control" rows="3" name="txtContent">
                        <?php echo $product["content"] ?>
                    </textarea>
                </div>
                <div class="form-group">
                    <label>Image Current</label>
                    <img <?php echo 'src="../resources/upload/'.$product['image'].'"' ?> class="img_current"/>
                    <input type="hidden" name="img_current" <?php echo 'value="'.$product['image'].'"' ?> />
                </div>
                <div class="form-group">
                    <label>Images</label>
                    <input type="file" name="fImages"/>
                </div>
                <div class="form-group">
                    <label>Product Keywords</label>
                    <input class="form-control" name="txtKeywords" placeholder="Please Enter Category Keywords"
                    <?php echo 'value="'.$product["keywords"].'"' ?> />
                </div>
                <div class="form-group">
                    <label>Product Description</label>
                    <textarea class="form-control" rows="3" name="txtDescription"><?php echo $product["description"] ?></textarea>
                </div>
                <button type="submit" class="btn btn-default">Product Edit</button>
                <button type="reset" class="btn btn-default">Reset</button>
        </div>
<form>
