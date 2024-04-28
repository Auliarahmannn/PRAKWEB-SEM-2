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
                    <h1>ARRAY BUAH</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <?php
        $ar_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];
        // cetak buah ke index ke 2
        echo $ar_buah[2];
        // cetak jumlah buah
        echo '<br/>Jumlah Buah ' . count($ar_buah);
        // cetak seluruh buah
        echo '<ol>';
        foreach ($ar_buah as $buah) {
            echo '<li>' . $buah . '</li>';
        }
        echo '</ol>';
        // tambahkan buah
        $ar_buah[] = "Durian";
        // hapus buah index ke 1
        unset($ar_buah[1]);
        // ubah buah index ke 2 menjadi Manggis
        $ar_buah[2] = "Manggis";
        // cetak seluruh buah dengan index nya
        echo '<ul>';
        foreach ($ar_buah as $k => $v) {
            echo '<li> buah index - ' . $k . ' adalah ' . $v . '</li>';
        }
        echo '</ul>';
        ?>
    </section>
    <!-- /.content -->
</div>

<?php
require_once 'footer.php';
?>