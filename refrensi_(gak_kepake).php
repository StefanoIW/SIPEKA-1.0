<?php
if(empty($_POST['nilai']))
{
   $nilai = " nilai = NULL";
}
else{
   $nilai = " nilai = '".$_POST['nilai']."'";
}


if(empty($_POST['validasi']))
{
   $validasi = " validasi = NULL";
}
else{
   $validasi = " validasi = '".$_POST['validasi']."'";
}


?>

<td>
            <?php if ($d['berkas']) : ?>
                <img src="uploads/<?php echo $d['berkas']; ?>" alt="berkas" style="max-width: 100px; max-height: 100px;">
            <?php endif; ?>
        </td>

        $query3 = mysqli_query($koneksi,"SELECT *,YEAR (CURDATE()) - YEAR (tgl_lahir) AS usia FROM tabel_jabatan ORDER BY id= DESC");

        SELECT * FROM tabel_jabatan WHERE id='$_SESSION[id]'

        <div class="form-group">
      <label for="tahun_penilaian">7. Taat  pimpinan</label>
      <select class="form-control" id="tahun_penilaian" name="tahun_penilaian" >
        <option>2023/2024</option>
        <option>2024/2025</option>
        <option>2025/2026</option>
        <option>2026/2027</option>
        <option>2027/2028</option>
        <option>2028/2029</option>
        <option>2029/2030</option>
        <option>2030/2031</option>
        <option>2031/2032</option>
        <option>2032/2033</option>
        <option>2033/2034</option>
        <option>2034/2035</option>
      </select>
</div>