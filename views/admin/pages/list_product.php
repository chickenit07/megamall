
<!-- /.col-lg-12 -->
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <td>Category</td>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($products as $product){ ?>
        <tr class="odd gradeX" align="center">
            <td><?php echo $product["id"] ?></td>
            <td><?php echo $product["name"] ?></td>
            <td><?php echo number_format($product["price"],0,",",".") ?> VNĐ</td>
            <td><?php echo $product["cate_name"] ?></td>   
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a 
            <?php echo "href='routes/delete_product.php?id=".$product['id']."'" ?>
            onclick="return xacnhanxoa('Do you want to delele this product')"> Delete</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
            <?php echo "href='sua-san-pham.php?id=".$product['id']."'" ?>
            >Edit</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
