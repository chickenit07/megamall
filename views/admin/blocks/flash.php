<?php 
if (isset($_SESSION['flash_message'])) { ?>
    <div class="alert alert-<?php echo $_SESSION['flash_level'] ?>">
        <?php echo $_SESSION['flash_message']; ?>
    </div>
<?php
unset($_SESSION['flash_message']);
unset($_SESSION['flash_level']);
}
?>