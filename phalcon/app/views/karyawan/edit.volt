

{% block content %}
 <br/>
 Hello {{ Karyawan.nama_lengkap }}!!!
 <br><br>
 <div class="row">
  <div class="col-md-12">
   <form method="POST">
    <div class="form-group">
     <label>Nama Lengkap</label>
     <input type="text" name="nama_lengkap" class="form-control" placeholder="Type your nama lengkap" required value="{{ Karyawan.nama_lengkap }}">
    </div>
    <div class="form-group">
     <label>Alamat</label>
     <input type="text" name="alamat" class="form-control" placeholder="Type your alamat" required value="{{ Karyawan.alamat }}">
    </div>
    
    <input type="submit" value="Edit"> <button type="button" onclick="window.location.href='../../user'">Cancel</button>
   </form>
  </div>
 </div>
{% endblock %}