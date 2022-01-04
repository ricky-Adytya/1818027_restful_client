<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="Assets/css/materialize.min.css" media="screen,projection" />
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
        <li><a href="<?= base_url('genshin') ?>">Semua Karakter</a></li>
        <li><a href="<?= base_url('genshin/pria') ?>">Karakter Laki - Laki</a></li>
        <li><a href="<?= base_url('genshin/wanita') ?>">Karakter Perempuan</a></li>
        
    </ul>
    <div class="container">
        
<font color="orange">
    
<?php echo $this->session->flashdata('hasil'); ?>
</font>
<br>
<div>
<a class="waves-effect waves-light btn" href="<?= base_url('genshin/create') ?>">+ Tambah data</a>
</div>
<br>
<table class="highlight" border="1">
   <tr>
        <th>ID</th>
        <th>NAMA</th>
        <th>Kelangkaan</th>
        <th>Elemen</th>
        <th>Senjata</th>
        <th>Wilayah</th>
        <th>Gender</th>
        <th>Gambar</th>
        <th> Action </th>
    </tr>
    <?php
    foreach ($datagenshin as $char){
         echo "<tr>
               <td>$char->id</td>
              <td>$char->Nama</td>
              <td>$char->Kelangkaan</td>
              <td>$char->Elemen</td>
              <td>$char->Senjata</td>
              <td>$char->Wilayah</td>
              <td>$char->Gender</td>
              <td><img src=".$char->url_char." width='50' height='50'>
              </td>
              <td>".anchor('genshin/edit/'.$char->id,'Edit')."
                ".anchor('genshin/delete/'.$char->id,'Delete')."
                  </td>
              </tr>";
             
    }
    ?>
</table>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="<?= base_url('Assets/js/materialize.min.js') ?>"></script>
    
</body>

</html>