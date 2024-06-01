<div class="row">
    <div class="col-12"></div>
    <div class="card">
        <div class="card-header row">
            <div class="card-title h3 col-8">Data guru</div>
            <div class="col-4">
                <a href="?m=guru&s=add" class="btn btn-large btn-primary float-end">Tambah</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-stripped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nip</th>
                        <th>Nama guru</th>
                        <th>Tempat lahir</th>
                        <th>Tanggal lahir</th>
                        <th>telepon</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once('config.php');
                    $sql =" SELECT * FROM guru";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $no = 1;
                        while ($r = mysqli_fetch_assoc($result)){
                            echo '<tr>
                            <td>'.$no.'</td>
                            <td>'.$r['nip'].'</td>
                            <td>'.$r['nama'].'</td>
                            
                            <td>'.$r['tempat_lahir'].'</td>
                            <td>'.date('d F Y', strtotime($r['tanggal_lahir'])).'</td>
                            <td>'.$r['telepon'].'</td>
                            <td> <img src= "guru/foto/' . $r['foto'] .'" alt="" height=100></td>
                            <td>
                                <a href="?m=guru&s=edit&id='.$r['id'].'" class="btn btn-warning btn-sm">Edit</a>
                                <a href="?m=guru&s=delete&id='.$r['id'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin guru akan dihapus?, Hapus 1 guru akan menghapus data guru di kelas tersebut\')">Hapus</a>
                            </td>
                        </tr>';
                        $no++;
                    }
                } else {
                    echo "<tr>
                        <td colspan='9' align='center'>Data Kosong</td>
                        </tr>";
                }
                            
                        
                    
                    ?>
                </tbody>

            </table>
        </div>
    </div>
</div>
