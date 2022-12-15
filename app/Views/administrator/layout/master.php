<!DOCTYPE html>
<html lang="en">
    <?php include "head.php" ?>
    <body>
        <?php include "navbar.php"; ?>
        <div class="page-content">
            <?php include "sidebar.php"; ?>
            <div class="content-wrapper">
                <div class="content-inner">
                    <?php include "header.php" ?>
                    <div class="content">
                        <?= $this->renderSection('content') ?>
                    </div>
                </div>
                <?php include "footer.php"?>
            </div>
        </div>
    </body>
</html>
