<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?= base_url('Assets/css/materialize.min.css') ?>" media="screen,projection" />
    <title>RESTFUL CLIENT CHARACTER GENSHIN</title>
</head>

<body>
<div class="navbar-fixed ">
        <nav class="#9c27b0 purple">
            <div class="nav-wrapper container ">
                <a href="#" class="brand-logo">GENSHIN</a>
                <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="topnav right hide-on-med-and-down">
                    <li><a href="<?= base_url('genshin') ?>">Semua Karakter</a></li>
                    <li><a href="<?= base_url('genshin/pria') ?>">Karakter Laki - Laki</a></li>
                    <li><a href="<?= base_url('genshin/wanita') ?>">Karakter Perempuan</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <ul id="slide-out" class="sidenav">
        <li><a href="#Berita">Berita</a></li>
        <li><a href="#latest">Berita populer</a></li>
        <li><a href="#game">Issue game</a></li>
        
    </ul>
    <div class="container">
<?php echo form_open('genshin/edit');?>
<?php echo form_hidden('id',$datagenshin->id);?>

<table>
    <tr><td>ID</td><td><?php echo form_input('',$datagenshin->id,"disabled");?></td></tr>
    <tr><td>NAMA</td><td><?php echo form_input('Nama',$datagenshin->Nama);?></td></tr>
    <tr><td>Kelangkaan</td><td><?php echo form_input('Kelangkaan',$datagenshin->Kelangkaan);?></td></tr>
    <tr><td>Elemen</td><td><?php echo form_input('Elemen',$datagenshin->Elemen);?></td></tr>
    <tr><td>Senjata</td><td><?php echo form_input('Senjata',$datagenshin->Senjata);?></td></tr>
    <tr><td>Wilayah</td><td><?php echo form_input('Wilayah',$datagenshin->Wilayah);?></td></tr>
    <tr><td>Gender</td><td><?php echo form_input('Gender',$datagenshin->Gender);?></td></tr>
    <tr><td>Link Gambar</td><td><?php echo form_input('url_char',$datagenshin->url_char);?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('kontak','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>

</div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="<?= base_url('Assets/js/materialize.min.js') ?>"></script>
    
</body>

</html>