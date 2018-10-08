<?php  
include 'koneksi.php';
$query = "SELECT * FROM daftar_pt ORDER BY id DESC";
$tampil = mysqli_query($koneksi, $query);
 ?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">

  <title>PT. Klaba Artiva Jaya | Administrasi</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <link href="../asset/css/all.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../asset/css/styles.css" rel="stylesheet">
</head>

<body>

  <div class="sidebar">
    <a id="pengiriman">Pengiriman</a>
    <a id="daftarproyek" class="active">Daftar Proyek</a>
    <a id="logout">Log Out</a>
  </div>

  <div class="main">
    <div class="row" style="padding-top: 10px;">
      <div class="col-md-6">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal_TambahProyek">Tambah Proyek</button>
      </div>
      <div class="col-md-6">
        <p style="text-align: right">Tanggal: <span id="datetime"></span></p>
      </div>
      
    </div>          

    <div id="table_daftar_proyek" class="daftar_proyek">

      <table id="tabel_daftarproyek" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th style="width: 6%;">ID</th>
            <th>Nama Perusahaan</th>
            <th>Nama Proyek</th>
            <th>Penanggung Jawab</th>
            <th>Kontak</th>
          </tr>
        </thead>
        <tbody>
<!--           <tr>
            <td>PT. Maju Mundur</td>
            <td>Tito</td>
            <td>Babarsari</td>
            <td>0025</td>
          </tr>
          <tr>
            <td>9</td>
            <td>Andi</td>
            <td>Kadirojo</td>
            <td>0025</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Budi</td>
            <td>Seturan</td>
            <td>0025</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Budi</td>
            <td>Seturan</td>
            <td>0025</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Budi</td>
            <td>Seturan</td>
            <td>0025</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Budi</td>
            <td>Seturan</td>
            <td>0025</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Budi</td>
            <td>Seturan</td>
            <td>0025</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Budi</td>
            <td>Seturan</td>
            <td>0025</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Budi</td>
            <td>Seturan</td>
            <td>0025</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Budi</td>
            <td>Seturan</td>
            <td>0025</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Budi</td>
            <td>Seturan</td>
            <td>0025</td>
          </tr> -->
          <?php
          while($row = mysqli_fetch_array($tampil))
          {
            ?>
            <tr>
             <td><?php echo $row["id"]; ?></td> 
             <td><?php echo $row["nama_pt"]; ?></td>
             <td><?php echo $row["nama_proyek"]; ?></td>
             <td><?php echo $row["penjawab"]; ?></td>
             <td><?php echo $row["kontak"]; ?></td>
           </tr>
           <?php
         }
         ?> 
       </tbody>
     </table>
   </div>

 </div>

 <!-- Modal -->
 <div class="modal fade" id="Modal_TambahProyek" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TambahProyekTitle">Tambah Proyek</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id="input_proyek" action="input_daftarproyek.php" class="tambah_proyek">
          <div class="form-group">
            <input type="text" class="form-control" name="nama_pt" id="nama_pt" placeholder="Nama Perusahaan" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="nama_proyek" id="nama_proyek" placeholder="Nama Proyek" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="penjawab" id="penjawab" placeholder="Penanggung Jawab" required>
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" name="kontak" id="kontak" placeholder="Kontak" minlength="12" maxlength="13" onkeypress="return hanyaAngka(event)" required>
          </div>
          <div class="form-group">
            <input type="submit" name="insert" id="insert" value="Simpan" class="btn btn-primary" />
          </div>
        </form>
      </div>
      <div class=" modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<footer class="footer">
  <div class="container-fluid">
    <p class="copyright float-right">
      <script type="text/JavaScript">
        var theDate=new Date();
        document.write("&copy; Techtonite "+ theDate.getFullYear());
      </script>
    </p>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="../asset/js/custom_sidebar_admin.js"></script>

<script>
  var dt = new Date();
  document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"/"+ (("0"+(dt.getMonth()+1)).slice(-2)) +"/"+ (dt.getFullYear());

//refresh modal
$(".modal").on("hidden.bs.modal", function(){
    $(".modal-body1").html("");
});

  function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
 
    return false;
    return true;
}
//error message
// document.addEventListener("DOMContentLoaded", function() {
//     var elements = document.getElementsByTagName("INPUT");
//     for (var i = 0; i < elements.length; i++) {
//         elements[i].oninvalid = function(e) {
//             e.target.setCustomValidity("");
//             if (!e.target.validity.valid) {
//                 e.target.setCustomValidity("Kolom ini tidak boleh kosong");
//             }
//         };
//         elements[i].oninput = function(e) {
//             e.target.setCustomValidity("");
//         };
//     }
// })

</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#tabel_daftarproyek').DataTable({
      "order": [[ 0, "desc" ]],
      "language": {
        "search": "Pencarian :",
        "lengthMenu": "Menampilkan _MENU_ data",
        "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ Total Data",
      }
    });
  } );
</script>
<script>  
 //  $(document).ready(function(){
 //   $('#input_proyek').on("submit", function(event){  
 //    event.preventDefault();  
 //    if($('#nama_pt').val() == "")  
 //    {  
 //     alert("Nama Perusahaan harus diisi");  
 //   }  
 //   else if($('#nama_proyek').val() == '')  
 //   {  
 //     alert("Nama Proyek harus diisi");  
 //   }  
 //   else if($('#penjawab').val() == '')
 //   {  
 //     alert("Penanggung Jawab harus diisi");  
 //   }
 //   else if($('#kontak').val() == '')
 //   {  
 //     alert("Kontak harus diisi");  
 //   }   
 // });




 // $(document).on('click', '.view_data', function(){
 //  //$('#dataModal').modal();
 //  var employee_id = $(this).attr("id");
 //  $.ajax({
 //   url:"select.php",
 //   method:"POST",
 //   data:{employee_id:employee_id},
 //   success:function(data){
 //    $('#employee_detail').html(data);
 //    $('#dataModal').modal('show');
 //   }
 //  });
 // });
  
</script>
</body>
</html>