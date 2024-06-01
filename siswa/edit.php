<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Edit siswa</div>
                <div class="col-4">
                    <a href="?m=siswa&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>
<?php
include_once('config.php');
$id  = $_GET['id'];
$sql = "SELECT * FROM siswa WHERE id='$id'";
$result = mysqli_query($con, $sql);
$r=mysqli_fetch_assoc($result);
?>

            <div class="card-body">
                <form action="?m=siswa&s=update" method="post">
                    <div class="mb-3">
                        <input type="text" name="nis" value="<?= $r['nis']; ?>" class="form-control" placeholder="nis" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="nama" value="<?= $r['nama']; ?>" class="form-control" placeholder="nama" required>
                    </div>  
                    <div>
            <label for=""><i>jenis kelamin</i></label>
            <input type="radio" name="gender" <?php if($r['gender']  == 'L') echo ('checked') ?>
             value="L" >laki-laki
            <input type="radio" name="gender" <?php if($r['gender']  == 'P') echo ('checked') ?>
            value="P" >perempuan
        </div> <br>
              <div class="mb-3">
            <label for=""><i>tempat lahir</i></label>
                        <textarea name="tempat_lahir" value="<?= $r['tempat_lahir']; ?>" class="form-control" placeholder="tempat_lahir" cols="50" rows="5" required> </textarea>
                    </div>
                    <div class="mb-3">
                            <input type="date"   name="tanggal_lahir" value="<?= $r['tanggal_lahir']; ?>"class="form-control" placeholder="Tanggal lahir" required>
                        </div>
                        <div class="mb-3">
                            <select name="kelas_id" value="<?= $r['kelas_id']; ?>" class="form-control" placeholder="siswa" required>
                            <option value="">Pilih kelas</option>
                                <?php
                                include_once("config.php");
                                $sql = "SELECT * FROM kelas" ;
                                $result = mysqli_query($con, $sql);
                            while ( $r = mysqli_fetch_assoc
                            ($result)) {
                                echo "<option value='" . $r['id'] . "'>". $r['kelas'] . "</option>";
                            } 
                            ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">masukkan foto</label>
                            <input type="file" name="foto"  value="<?= $r['foto']; ?>"  class="form-control" placeholder="foto" accept="image/*" >
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?= $r['id']; ?>">
                        <input type="reset" class="btn btn-secondary">&nbsp;
                        <input type="submit" value="Update" name="update" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>