<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Barcode
                </h4>
            </div>

            <div class="box-body">
            <?php
            $generator = new \Picqer\Barcode\BarcodeGeneratorPNG();
            echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode('$barang->id_barang' , $generator::TYPE_CODE_128)) . '">';
                ?>
                <br>
            </div>
            </div>
        </div>
    </div>
   


   <div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                   QRCODE
                </h4>
            </div>

            <div class="box-body">
            <?php
             $qrCode = new Endroid\QrCode\QrCode('keterangan barang');
             $qrCode->writeFile( 'qr.png');
                ?>
                <img src="">
                <br>
            </div>
            </div>
        </div>
    </div>
                
            </tbody>
        </table>
    </div>
</div>