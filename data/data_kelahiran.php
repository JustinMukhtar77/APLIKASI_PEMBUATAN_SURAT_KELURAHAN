<?php
    include 'koneksi.php';
?>
<div class="table-responsive">
    <table class="table table-striped table-bordered first">
        <thead>
            <tr>
                <th>NAMA</th>
                <th>NAMA AYAH</th>
                <th>NAMA IBU</th>
                <th>TEMPAT</th>
                <th>TANGGAL</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'koneksi.php';
                $take = mysqli_query($conn,"SELECT * FROM tb_kelahiran");
                while($taken = mysqli_num_rows($take)>0){
            ?>
            <tr>
                <td><?=$taken['nama']?></td>
                <td><?=$taken['jk']?></td>
                <td><?=$taken['nama_ayah']?></td>
                <td><?=$taken['nama_ibu']?></td>
                <td><?=$taken['tempat']?></td>
                <td><?=$taken['tanggal']?></td>
                <td>
                    <a href="#" class="btn btn-primary btn-xs">xxx</a>
                    <a href="#" class="btn btn-primary btn-xs">xxx</a>
                    <a href="#" class="btn btn-primary btn-xs">xxx</a>
                </td>
            </tr>
            <?php
                }
            ?>
            <!-- <tr>
                <td>Cara Stevens</td>
                <td>Sales Assistant</td>
                <td>New York</td>
                <td>46</td>
                <td>2011/12/06</td>
                <td>$145,600</td>
                <td>
                    <a href="#" class="btn btn-primary btn-xs">xxx</a>
                    <a href="#" class="btn btn-primary btn-xs">xxx</a>
                    <a href="#" class="btn btn-primary btn-xs">xxx</a>
                </td>
            </tr>
            <tr>
                <td>Cara Stevens</td>
                <td>Sales Assistant</td>
                <td>New York</td>
                <td>46</td>
                <td>2011/12/06</td>
                <td>$145,600</td>
                <td>
                    <a href="#" class="btn btn-primary btn-xs">xxx</a>
                    <a href="#" class="btn btn-primary btn-xs">xxx</a>
                    <a href="#" class="btn btn-primary btn-xs">xxx</a>
                </td>
            </tr> -->
            
        </tbody>
    </table>
</div>