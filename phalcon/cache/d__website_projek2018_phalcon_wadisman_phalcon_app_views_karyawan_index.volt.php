<h1>Tes Program Sederhana (CRUD) Dengan PHALCON</h1>
<br>
<br>
<br>
Input
<?= $this->tag->form(['karyawan/create', 'role' => 'form']) ?>
 <label for="nik">Nik</label>
 <input type="text" name="nik">
       
 
    <label for="nama_lengkap">Nama Lengkap</label>
 <input type="text" name="nama_lengkap">

    <label for="alamat">Alamat</label>
 <input type="text" name="alamat">
     
 
    <button type="submit">Save</button>
</form>

<br>
<br>
<br>
Daftar Lengkap
<table class="table table-hover">
    <thead>
      <tr>
        <th>Nik</th>
        <th>Nama Lengkap</th>
        <th>Alamat</th>
        <th>Edit</th>
        <th>Del</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($data_karyawan as $v) { ?>
      <tr>
        <td><?= $v->nik ?></td>
        <td><?= $v->nama_lengkap ?></td>
        <td><?= $v->alamat ?></td>
        <td><a href="karyawan/edit/<?= $v->nik ?>">edit</a> </td>
        <td><a href="karyawan/delete/<?= $v->nik ?>">del</a></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>