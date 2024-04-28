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
                    <h1>VARIBEL KONSTAN</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <?php
        define('PHI', 3.14);
        define('DBNAME', 'inventori');
        define('DBSERVER', 'localhost');
        $jari = 9;
        $luas = PHI * $jari * $jari;
        $kll = 2 * PHI * $jari;
        echo 'Luas Lingkaran dengan Jari ' . $jari . ' : ' . $luas;
        echo '<br/>Kelilingnya : ' . $kll;
        ?>
        <hr />
        <?php
        echo 'Nama databasenya : ' . DBNAME;
        echo '<br/>Lokasi databasenya ada di ' . DBSERVER;
        ?>

    </section>
    <!-- /.content -->
</div>

<?php
require_once 'footer.php';
?>

// definisikan konstansta