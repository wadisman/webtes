<br>
<br>
<br>
Input
<?= $this->tag->form(['user/create', 'role' => 'form']) ?>
 <label for="nik">Nik</label>
 <input type="text" name="nik">
       
 
    <label for="nama_lengkap">Nama Lengkap</label>
 <input type="text" name="nama_lengkap">
     
 
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
        <th>Edit</th>
        <th>Del</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($data_user as $v) { ?>
      <tr>
        <td><?= $v->nik ?></td>
        <td><?= $v->nama_lengkap ?></td>
        <td><a href="user/edit/<?= $v->nik ?>">edit</a> </td>
        <td><a href="user/delete/<?= $v->nik ?>">del</a></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>