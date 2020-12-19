
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>ID</th>
            <th>Username</th>
            <th>Level</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user){ ?>
        <tr class="odd gradeX" align="center">
            <td><?php echo $user['id'] ?></td>
            <td><?php echo $user['username'] ?></td>
            <td>
                <?php 
                if($user['level']==1)
                    echo "Member";
                else if ($user['level']==2)
                    echo "Admin";
                else
                    echo "Super Admin";
                ?>
            </td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Are you sure?')" 
            <?php echo "href='../routes/admin/delete_user.php?id=".$user['id']."'" ?> > Delete</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a 
            <?php echo "href='edit_user.php?id=".$user['id']."'" ?> >Edit</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
