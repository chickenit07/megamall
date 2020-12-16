
<!-- /.col-lg-12 -->
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>ID</th>
            <th>Name</th>
            <th>Category Parent</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($cates as $cate){ ?>
        <tr class="odd gradeX" align="center">
            <td><?php echo $cate["id"] ?></td>
            <td><?php echo $cate["name"] ?></td>
            <td>
                <?php
                if($cate["parent_id"]==0)
                    echo "None";
                else{
                    $parent_name=Cate::getParentName($cate["parent_id"]);
                    echo $parent_name;
                }      
                ?>
            </td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Are you sure?')" 
            <?php echo "href='../routes/admin/delete_cate.php?id=".$cate['id']."'" ?>
            > Delete</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a 
            <?php echo "href='../routes/admin/edit_cate.php?id=".$cate['id']."'" ?>
            > Edit</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

                