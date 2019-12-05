<div class="row">

<style type="text/css">
    .kotak {
        width: 100px;
        height: 100px;
        background-color: #BADA55;
        text-align: center;
        line-height: 100px;
        margin: 3px;
        float: left;
    }
</style>

<?php
$angka = [1,2,3,4,5,6,7];
?>

<?php
foreach ($angka as $a) :?>


<div class="kotak"><?php echo $a;?></div>

<?php endforeach;  ?>




 <div class="col-auto">
                <a href="<?= base_url('barangmasuk/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                        Input Barang Masuk
                    </span>
                </a>
            </div>
        </div>
    </div>
