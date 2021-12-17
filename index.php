
<table class="table" id="my">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">Handle</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($isi as $i): ?>
    <tr>
      <th scope="row">1</th>
      <td><?=$i['nama_barang'] ?></td>
      <td><?=$i['satuan'] ?></td>
      <td><?=$i['kondisi_barang'] ?></td>
      <td><?=$i['jumlah_total'] ?></td>
      <td><?=$i['keterangan'] ?></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>