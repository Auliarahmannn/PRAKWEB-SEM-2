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
                    <h1>Variabe User</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <?php
$nama = "Aulia Rahman Pakpahan";
$umur = 19;
$berat = 63;

echo "nama : $nama";
echo "<br/>umur : $umur tahun";
echo "<br/>berat : $berat kg";
?>
    </section>
    <!-- /.content -->
</div>

<?php
require_once 'footer.php';
?>

