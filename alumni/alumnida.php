<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/x-icon" href="adword.png">
    <title >AMDA</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php include "../navbar.php"?>
    <h1>Data Alumni DA</h1>
    <div>
    <a class="btn btn-primary" href="http://localhost/da/alumni/add.php">Tambah Data +</a><br><br>
    
    <!-- <form class="d-flex" role="search float-right" lo>
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>

    <form method="post" action="" style="text-align:;">
		<input type="text" name="keyword" size="30" autocomplete="off" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
		<button type="submit" nama="cari">Cari</button>
	</form>
    

    <table class="table table-striped table-hover mt-3">
        <thead>
        <tr bgcolor="ORANGE">
            <th>NO</th>
            <th width="20%">Nama Lengkap</th>
            <!-- <th>Nama Panggilan</th>
            <th>Email</th>	 -->
            <!-- <th width="20%">Alamat Asal</th>	 -->
            <th width="30%">Alamat Domisili</th>	
            <th >Nomor HP</th>
            <!-- <th width="10%">Status</th>	 -->
            <th width="15%">DI</th>
            <!-- <th width="15%">Jurusan</th>	 -->
            <!-- <th>Alamat Kampus</th>	
            <th>Bekerja</th>	
            <th>Alamat Bekerja</th>	
            <th>Nama Pondok Pesantren</th>
            <th>Alamat Pondok Pesantren</th>	
            <th>Alumni/Angkatan</th>
            <th>Alumni/alumnus</th> -->
            <th width="15%">Aksi</th>
        </tr>
        </thead>
        
        <?php
        include "insert_data.php";        
        $no =1;
        $data=mysqli_query($koneksi,"SELECT * FROM alumni");
        while ($hasil= mysqli_fetch_array($data)){
            ?>
            <tr>
                <td class="text-center"><?php echo $no++?></td>
                <td><a href=""></a><?php echo $hasil['nama_lengkap'] ; ?></td>
                <!-- <td><?php echo $hasil['nam_panggilan'] ; ?></td> -->
                <!-- <td><?php echo $hasil['email'] ; ?></td> -->
                <!-- <td><?php echo $hasil['alamat_asal'] ; ?></td> -->
                <td><?php echo $hasil['alamat_domisili'] ; ?></td>
                <td><?php echo $hasil['nomor_hp'] ; ?></td>
                <!-- <td><?php echo $hasil['status'] ; ?></td> -->
                <td><?php echo $hasil['nama_kampus'] ; ?></td>
                <!-- <td><?php echo $hasil['jurusan'] ; ?></td> -->
                <!-- <td><?php echo $hasil['alamat_kampus'] ; ?></td>
                <td><?php echo $hasil['bekerja'] ; ?></td>
                <td><?php echo $hasil['alamat_kerja'] ; ?></td>
                <td><?php echo $hasil['nama_pondok'] ; ?></td>
                <td><?php echo $hasil['alamat_pondok'] ; ?></td>
                <td><?php echo $hasil['alumni_angkatan'] ; ?></td>
                <td><?php echo $hasil['alumni_alumnus'] ; ?></td> -->
                <td class="text-center">
                    <a class="btn btn-primary btn-sm" href="detail_alumni.php?id_alumni=<?= $hasil['id_alumni']; ?>">Detail</a>
                    <a class="btn btn-primary btn-sm" href="edit.php?id_alumni=<?= $hasil['id_alumni']; ?>">Edit</a>
                    <form action="delete.php" method="POST" class="d-inline">
                            <button type="submit" name="id_alumni" value="<?=$id_alumni['id_alumni'];?>" class="btn btn-danger btn-sm" >Delete</button>
                    </form>
                <!-- <td>
                    <a class='btn btn-primary btn-sm'  href='index.php'?id=$no++[id]>Edit</a>
                    <a href="http://localhost/da/index.php">ADD</a> ||
                    <a href="http://localhost/da/index.php">EDIT</a> ||
                    <a href="http://localhost/da/index.php">DELETE</a> ||
                </td> -->
                <!-- <td>
                    
                    <button class="nav-link" href="http://localhost/da/index.php"> ADD </button>
                    <button class="nav-link" href="index.php"> EDIT </button>
                    <button class="nav-link" href=""> DELETE </button>
                </td> -->
            </tr>
            <?php
        }
        ?>
    </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination float-right">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
        
</body>
</html>