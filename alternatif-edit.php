<?php
require "include/conn.php";
$id = $_GET['id'];
$sql = "SELECT * FROM saw_alternatives WHERE id_alternative = '$id' ";
$result = $db->query($sql);
$row = $result->fetch_array();
?>
<!DOCTYPE html>
<html lang="en">
    <?php require "layout/head.php";?>

    <body>
        <div id="app">
            <?php require "layout/sidebar.php";?>
            <div id="main">
                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>
                <div class="page-heading">
                    <h3>Alternatif Edit</h3>
                </div>
                <div class="page-content">
                    <section class="row">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Data</h4>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <form action="alternatif-edit-act.php" method="POST">
                                    <div class="form-group">
                                        <label for="basicInput">Name</label>
                                        <input type="text" class="form-control" name="id_alternative" value="<?=$row['id_alternative'];?>" hidden>
                                        <input type="text" class="form-control" name="name" value="<?=$row['name'];?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-info btn-sm">
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </section>
                </div>
                <?php require "layout/footer.php";?>
            </div>
        </div>
        <?php require "layout/js.php";?>
    </body>

</html>