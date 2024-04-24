<html><head>
        <title></title>
    </head><body>
      <h1>Laporan Barang</h1>
        
                <table>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Merk</th>
                        <th>Kategori</th>
                        <th>Stok</th>
                    </tr>

                  <?php $no = 1; ?>
                  <?php foreach ($barang as $barang) { ?>

                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $barang->nama_barang; ?></td>
                        <td><?= $barang->merk; ?></td>
                        <td><?= $barang->nama_kategori; ?></td>
                        <td><?= $barang->stok . " " .$barang->nama_satuan; ?></td>
                      </tr>
                    <?php } ?>
                    </table>

    </body></html>