<html>
<head>
<title>coba-coba</title>
</head>

<body>
<header>
<h3>PEndaftaran Siswa Baru</h3>
<h1>CODING</h1>
</header>
<h4>Menu</h4>
<nav>
<ul>
<li><a href="form-daftar.php">Daftar Baru</a></li>
<li><a href="list-siswa.php">PEndaftaran</a></li>
</ul>
</nav>
<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
</body>
</html>