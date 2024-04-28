<?php
require_once 'header.php';
require_once 'sidebar.php';
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>VARIABEL SYSTEM</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <?php
        echo "Document Root" . $_SERVER["DOCUMENT_ROOT"];
        echo '<br/>Nama File ' . $_SERVER["PHP_SELF"];
        ?>
    </section>
    <!-- /.content -->
</div>

<?php
require_once 'footer.php';
?>