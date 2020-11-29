<?php
// echo '<pre>';
// var_dump($menu);
// echo '</pre>';
?>
<div id="categorymenu">
  <nav class="subnav">
    <ul class="nav-pills categorymenu">
      <li><a href="index.php">Trang chủ</a></li>
        <?php
        foreach ($menus as $menu)
            if ($menu['parent_id'] == 0) { 
                $menu_level1 = ($menu['has_sub'] == 'true') ? $menus[$menu['sub_cate'][0]] : $menu; ?>
                <li><a href="<?php echo 'loai-san-pham/1/'.$menu_level1['alias'].'-'.$menu_level1['id'].'.html' ?>"><?php echo $menu['name']; ?></a>
                    <?php
                    if ($menu['has_sub'] == 'true') { ?>
                        <div>
                            <ul>
                                <?php 
                                foreach ($menu['sub_cate'] as $menu_level2_id) { 
                                    $menu_level2 = $menus[$menu_level2_id];
                                ?>
                                    <li><a href="<?php echo 'loai-san-pham/1/'.$menu_level2['alias'].'-'.$menu_level2['id'].'.html' ?>"><?php echo $menu_level2['name']; ?></a>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php } ?>                    
                </li>
            <?php }  ?>
            <li><a href="lien-he.html">Contact</a></li>         
          </ul>
      </nav>
  </div>