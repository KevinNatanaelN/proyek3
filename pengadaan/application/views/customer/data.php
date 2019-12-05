<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm mb-4 border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data Customer
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('customer/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-user-plus"></i>
                    </span>
                    <span class="text">
                        Tambah Customer
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th width="30">No.</th>
                    <th>Id Customer</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No. Telepon / HP</th>
                    <th>Nama Barang</th>
                    <th>Jenis Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Tanggal Sewa</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($customer) :
                    foreach ($customer as $customer) :
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                        
                            <td><?= $customer['id_customer']; ?></td>
                            <td><?= $customer['nama']; ?></td>
                            <td><?= $customer['email']; ?></td>
                            <td><?= $customer['notlp']; ?></td>
                            <td><?= $customer['namabarang_id']; ?></td>
                            <td><?= $customer['jenisbarang_id']; ?></td>
                            <td><?= $customer['jumlah']; ?></td>
                            <td><?= $customer['tanggal_sewa']; ?></td>


                            <td>
                               
                                <a href="<?= base_url('customer/edit/') . $customer['id_customer'] ?>" class="btn btn-circle btn-sm btn-warning"><i class="fa fa-fw fa-edit"></i></a>
                                <a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('customer/delete/') . $customer['id_customer'] ?>" class="btn btn-circle btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach;
                    else : ?>
                    <tr>
                        <td colspan="8" class="text-center">Silahkan tambahkan customer baru</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>