<?php
  $tombol = $_POST["kirim"];
  if ($tombol=="SIMPAN") {
    # code...
  
  include "koneksi.php";
 
  $kebutuhan = $_POST["kebutuhan"];
  $status = $_POST["status"];
  $harga = $_POST["harga"];
  
  
  $butuh = mysqli_query($koneksi,"SELECT * FROM kebutuhan WHERE kebutuhan = '$kebutuhan'");
  
  while($d_butuh = mysqli_fetch_array($butuh)){
    $b_merk = $d_butuh["merk"];
    $b_cpu = $d_butuh["cpu"];
    $b_ram = $d_butuh["ram"];
    $b_hdd = $d_butuh["hdd"];
    $b_ssd = $d_butuh["ssd"];
    $b_vga = $d_butuh["vga"];
    $b_layar = $d_butuh["layar"];
  }
  if($harga>14000000)
  {
    $b_harga= 1;
  }
  elseif ($harga>11000000) {
    # code...
    $b_harga= 2;
  }
  elseif ($harga>7000000) {
    # code...
    $b_harga= 3;
  }
  elseif ($harga>3500000) {
    # code...
    $b_harga= 4;
  }
  else{
    # code...
    $b_harga= 5;
  }

  $rekomendasi = mysqli_query($koneksi,"SELECT * FROM rekomendasi WHERE status = '$status'");
  
  while($d_rekomendasi = mysqli_fetch_array($rekomendasi)){
    $rek_merk = $d_rekomendasi["merk"];
    $rek_cpu = $d_rekomendasi["cpu"];
    $rek_ram = $d_rekomendasi["ram"];
    $rek_hdd = $d_rekomendasi["hdd"];
    $rek_ssd = $d_rekomendasi["ssd"];
    $rek_vga = $d_rekomendasi["vga"];
    $rek_layar = $d_rekomendasi["layar"];
    $rek_harga = $d_rekomendasi["harga"];

    if($rek_merk<$b_merk)
      $rek_merk=$b_merk;
    if($rek_cpu<$b_cpu)
      $rek_cpu=$b_cpu;
    if($rek_ram<$b_ram)
      $rek_ram=$b_ram;
    if($rek_hdd<$b_hdd)
      $rek_hdd=$b_hdd;
    if($rek_ssd<$b_ssd)
      $rek_ssd=$b_ssd;
    if($rek_vga<$b_vga)
      $rek_vga=$b_vga;
    if($rek_layar<$b_layar)
      $rek_layar=$b_layar;
    if($rek_harga<$b_harga)
      $rek_harga=$b_harga;
  }

  
  $t_score = $b_merk+$b_harga+$b_cpu+$b_ram+$b_hdd+$b_ssd+$b_vga+$b_layar+$b_harga;
  $tb_merk = $b_merk/$t_score*100;
  $tb_cpu = $b_cpu/$t_score*100;
  $tb_ram = $b_ram/$t_score*100;
  $tb_hdd = $b_hdd/$t_score*100;
  $tb_ssd = $b_ssd/$t_score*100;
  $tb_vga = $b_vga/$t_score*100;
  $tb_layar = $b_layar/$t_score*100;
  $tb_harga = $b_harga/$t_score*100;



 
  $t_rek = $rek_merk+$rek_harga+$rek_cpu+$rek_ram+$rek_hdd+$rek_ssd+$rek_vga+$rek_layar+$rek_harga;
  $rek2_merk = $rek_merk/$t_rek*100;
  $rek2_cpu = $rek_cpu/$t_rek*100;
  $rek2_ram = $rek_ram/$t_rek*100;
  $rek2_hdd = $rek_hdd/$t_rek*100;
  $rek2_ssd = $rek_ssd/$t_rek*100;
  $rek2_vga = $rek_vga/$t_rek*100;
  $rek2_layar = $rek_layar/$t_rek*100;
  $rek2_harga = $rek_harga/$t_rek*100;
 
  


  $laptop = mysqli_query($koneksi,"SELECT * FROM laptop JOIN ram ON laptop.ram = ram.nama JOIN cpu on laptop.cpu=cpu.nama JOIN vga ON laptop.vga=vga.nama ORDER BY tipe");
  $pangkat_nc_cpu =0;
  $pangkat_merk=0;
  $pangkat_vga=0;
  $pangkat_ram=0;
  $pangkat_hdd=0;
  $pangkat_ssd=0;
  $pangkat_layar=0;
  $pangkat_harga=0;
  while($d_laptop = mysqli_fetch_array($laptop)){
    $n_tipe = $d_laptop["tipe"];
    $n_merk = $d_laptop["merk"];
    $n_cpu = $d_laptop["cpu"];
    $n_ram = $d_laptop["ram"];
    $n_hdd = $d_laptop["hdd"];
    $n_ssd = $d_laptop["ssd"];
    $n_vga = $d_laptop["vga"];
    $n_layar = $d_laptop["layar"];
    $n_harga = $d_laptop["harga"];
    $nc_tipe = $d_laptop["c_tipe"];
    $nc_generasi = $d_laptop["c_generasi"];
    $nc_kecepatan = $d_laptop["c_kecepatan"];
    $r_kapasitas = $d_laptop["r_kapasitas"];
    $r_ddr = $d_laptop["r_ddr"];
    $v_merk= $d_laptop["v_merk"];
    $v_ddr = $d_laptop["v_ddr"];
    $v_kapasitas= $d_laptop["v_kapasitas"];
    $v_kecepatan= $d_laptop["v_kecepatan"];
 
    if($n_merk=='HP')
      $sc_merk=4;
    elseif($n_merk=='Asus')
      $sc_merk=5;
    elseif($n_merk=='Lenovo')
      $sc_merk=3;
    elseif($n_merk=='Acer')
      $sc_merk=3;
    elseif($n_merk=='Toshiba')
      $sc_merk=2;
    elseif($n_merk=='MSI')
      $sc_merk=4;
    else
      $sc_merk=1;
    $pangkat_merk= $pangkat_merk + ($sc_merk*$sc_merk);
    $normal_merk=sqrt($pangkat_merk);
    
  

    if($nc_tipe == 'i7')
      $snc_tipe = 5;
    elseif($nc_tipe == 'i5')
      $snc_tipe = 4;
    elseif($nc_tipe == 'R5')
      $snc_tipe = 4;
    elseif($nc_tipe == 'A10')
      $snc_tipe = 3;
    elseif($nc_tipe == 'i3')
      $snc_tipe = 3;
    else
      $snc_tipe = 1;
   
    

    if ($nc_generasi>8)
      $snc_generasi=5;
    elseif ($nc_generasi>5)
      $snc_generasi=4;
    elseif ($nc_generasi>3)
      $snc_generasi=3;
    elseif ($nc_generasi>=2)
      $snc_generasi=2;
    else
      $snc_generasi=1;
   
 
     if ($nc_kecepatan>=4)
      $snc_kecepatan=5;
     elseif ($nc_kecepatan>=3)
      $snc_kecepatan=4;
     elseif ($nc_kecepatan>=2)
      $snc_kecepatan=3;
      else
        $snc_kecepatan=1;

   
    $nc_cpu= 0.4*$snc_tipe + 0.2*$snc_generasi +0.4*$snc_kecepatan;
  
     $pangkat_nc_cpu = $pangkat_nc_cpu+$nc_cpu*$nc_cpu;
     $normal_cpu=sqrt($pangkat_nc_cpu);

    if ($r_kapasitas>8) 
      $sr_kapasitas=5;
    elseif ($r_kapasitas>=6) 
      $sr_kapasitas=4;
    elseif ($r_kapasitas>=4) 
      $sr_kapasitas=3;
    elseif ($r_kapasitas>=2) 
      $sr_kapasitas=2;
    else
      $sr_kapasitas=1;


    if ($r_ddr==4)
      $sr_ddr=5;
    elseif ($r_ddr==3)
      $sr_ddr=3;
    elseif ($r_ddr==2)
      $sr_ddr=1;

    $s_ram=($sr_ddr+$sr_kapasitas)/2;
    $pangkat_ram=$pangkat_ram + $s_ram*$s_ram;
    $normal_ram=sqrt($pangkat_ram);

    if($n_hdd==1024)
      $s_hdd=5;
    elseif($n_hdd==512)
      $s_hdd=3;
    else
      $s_hdd=1;
    $pangkat_hdd=$pangkat_hdd+$s_hdd*$s_hdd;
    $normal_hdd=sqrt($pangkat_hdd);

    if($n_ssd ==512)
      $s_ssd=5;
    elseif($n_ssd ==256)
      $s_ssd=4;
    elseif($n_ssd ==128)
      $s_ssd=3;
    else
      $s_ssd=1;
    $pangkat_ssd=$pangkat_ssd+$s_hdd*$s_ssd;
    $normal_ssd=sqrt($pangkat_ssd);

    if($n_layar>=15.6)
      $s_layar=5;
    elseif($n_layar>=14)
      $s_layar=3;
    else
      $s_layar=1;
    $pangkat_layar = $pangkat_layar+$s_layar*$s_layar;
    $normal_layar=sqrt($pangkat_layar);

    if($n_harga>14000000)
      $s_harga=1;
    elseif($n_harga>11000000)
      $s_harga=2;
    elseif($n_harga>7000000)
      $s_harga=3;
    elseif($n_harga>3500000)
      $s_harga=4;
    else
      $s_harga=5;
    $pangkat_harga=$pangkat_harga +$s_harga*$s_harga;
    $normal_harga=sqrt($pangkat_harga);

    if($v_merk == 'Nvidia')
      $sv_merk=5;
    elseif($v_merk == 'AMD')
      $sv_merk=3;
    else
      $sv_merk=1;

    if($v_kecepatan>=1.4)
      $sv_kecepatan=5;
    elseif($v_kecepatan>=1.1)
      $sv_kecepatan=3;
    else
      $sv_kecepatan=1;

    if($v_ddr==5)
      $sv_ddr=5;
    elseif($v_ddr==4)
      $sv_ddr=4;
    elseif($v_ddr==3)
      $sv_ddr=3;
    else
      $sv_ddr=1;

    if($v_kapasitas>=4)
      $sv_kapasitas=5;
    elseif($v_kapasitas>=4)
      $sv_kapasitas=3;
    else
      $sv_kapasitas =1;
    $s_vga= $sv_kecepatan*0.3 +$sv_ddr*0.3+$sv_kapasitas*0.2+$sv_merk*0.2;
    $pangkat_vga=$pangkat_vga+ $s_vga*$s_vga;
    $normal_vga=sqrt($pangkat_vga);





    $score_laptop = mysqli_query($koneksi,"UPDATE score_laptop set cpu='$nc_cpu', merk='$sc_merk', hdd='$s_hdd', ram='$s_ram', vga='$s_vga', layar='$s_layar', harga='$s_harga',ssd='$s_ssd'  WHERE tipe='$n_tipe'");


}

  //menolah proses dari score laptop
$normal = mysqli_query($koneksi,"SELECT * FROM score_laptop  ORDER BY tipe");
  
  while($d_normal = mysqli_fetch_array($normal)){
    $norm_tipe = $d_normal["tipe"];
    $norm_merk = $d_normal["merk"];
    $norm_cpu = $d_normal["cpu"];
    $norm_ram = $d_normal["ram"];
    $norm_hdd = $d_normal["hdd"];
    $norm_ssd = $d_normal["ssd"];
    $norm_vga = $d_normal["vga"];
    $norm_layar = $d_normal["layar"];
    $norm_harga = $d_normal["harga"];

    //Membuat nilai ternormalisasi
    $merk1=$norm_merk/$normal_merk;
    $cpu1=$norm_cpu/$normal_cpu;
    $ram1=$norm_ram/$normal_ram;
    $hdd1=$norm_hdd/$normal_hdd;
    $ssd1=$norm_ssd/$normal_ssd;
    $vga1=$norm_vga/$normal_vga;
    $layar1=$norm_layar/$normal_layar;
    $harga1=$norm_harga/$normal_harga;
    
    //Membuat normalisasi terbobot
    $merk2=$merk1*$b_merk;
    $cpu2=$cpu1*$b_merk;
    $ram2=$ram1*$b_ram;
    $hdd2=$hdd1*$b_hdd;
    $ssd2=$ssd1*$b_ssd;
    $vga2=$vga1*$b_vga;
    $layar2=$layar1*$b_layar;
    $harga2=$harga1*$b_harga;

    //Membuat normalisasi terbobot dari status
    $rek_merk2=$merk1*$rek_merk;
    $rek_cpu2=$cpu1*$rek_merk;
    $rek_ram2=$ram1*$rek_ram;
    $rek_hdd2=$hdd1*$rek_hdd;
    $rek_ssd2=$ssd1*$rek_ssd;
    $rek_vga2=$vga1*$rek_vga;
    $rek_layar2=$layar1*$rek_layar;
    $rek_harga2=$harga1*$rek_harga;
    
    $normal_laptop = mysqli_query($koneksi,"UPDATE normal_laptop set cpu='$cpu2', merk='$merk2', hdd='$hdd2', ram='$ram2', vga='$vga2', layar='$layar2', harga='$harga2',ssd='$ssd2',harga='$harga2'  WHERE tipe='$norm_tipe'");
    
    $rekom_laptop = mysqli_query($koneksi,"UPDATE rekom_laptop set cpu='$rek_cpu2', merk='$rek_merk2', hdd='$rek_hdd2', ram='$rek_ram2', vga='$rek_vga2', layar='$rek_layar2', harga='$rek_harga2',ssd='$rek_ssd2',harga='$rek_harga2'  WHERE tipe='$norm_tipe'");

    }
    //Mencari nilai terkecil
    $min_ram= mysqli_query($koneksi,"SELECT min(ram) from normal_laptop");
    while($min_ram1 = mysqli_fetch_array($min_ram)){
    $min_ram2 = $min_ram1['min(ram)'];}
    $min_cpu= mysqli_query($koneksi,"SELECT min(cpu) FROM normal_laptop");
    while($min_cpu1 = mysqli_fetch_array($min_cpu)){
    $min_cpu2 = $min_cpu1['min(cpu)'];}
    $min_hdd= mysqli_query($koneksi,"SELECT min(hdd) FROM normal_laptop");
    while($min_hdd1 = mysqli_fetch_array($min_hdd)){
    $min_hdd2 = $min_hdd1['min(hdd)'];}
    $min_ssd= mysqli_query($koneksi,"SELECT min(ssd) FROM normal_laptop");
    while($min_ssd1 = mysqli_fetch_array($min_ssd)){
    $min_ssd2 = $min_ssd1['min(ssd)'];}
    $min_vga= mysqli_query($koneksi,"SELECT min(vga) FROM normal_laptop");
    while($min_vga1 = mysqli_fetch_array($min_vga)){
    $min_vga2 = $min_vga1['min(vga)'];}
    $min_merk= mysqli_query($koneksi,"SELECT min(merk) FROM normal_laptop");
    while($min_merk1 = mysqli_fetch_array($min_merk)){
    $min_merk2 = $min_merk1['min(merk)'];}
    $min_layar= mysqli_query($koneksi,"SELECT min(layar) FROM normal_laptop");
    while($min_layar1 = mysqli_fetch_array($min_layar)){
    $min_layar2 = $min_layar1['min(layar)'];}
    $min_harga= mysqli_query($koneksi,"SELECT min(harga) FROM normal_laptop");
    while($min_harga1 = mysqli_fetch_array($min_harga)){
    $min_harga2 = $min_harga1['min(harga)'];}

    //mencari nilai terbesar
    $pos_ram= mysqli_query($koneksi,"SELECT max(ram) from normal_laptop");
    while($pos_ram1 = mysqli_fetch_array($pos_ram)){
    $pos_ram2 = $pos_ram1['max(ram)'];}
    $pos_cpu= mysqli_query($koneksi,"SELECT max(cpu) FROM normal_laptop");
    while($pos_cpu1 = mysqli_fetch_array($pos_cpu)){
    $pos_cpu2 = $pos_cpu1['max(cpu)'];}
    $pos_hdd= mysqli_query($koneksi,"SELECT max(hdd) FROM normal_laptop");
    while($pos_hdd1 = mysqli_fetch_array($pos_hdd)){
    $pos_hdd2 = $pos_hdd1['max(hdd)'];}
    $pos_ssd= mysqli_query($koneksi,"SELECT max(ssd) FROM normal_laptop");
    while($pos_ssd1 = mysqli_fetch_array($pos_ssd)){
    $pos_ssd2 = $pos_ssd1['max(ssd)'];}
    $pos_vga= mysqli_query($koneksi,"SELECT max(vga) FROM normal_laptop");
    while($pos_vga1 = mysqli_fetch_array($pos_vga)){
    $pos_vga2 = $pos_vga1['max(vga)'];}
    $pos_merk= mysqli_query($koneksi,"SELECT max(merk) FROM normal_laptop");
    while($pos_merk1 = mysqli_fetch_array($pos_merk)){
    $pos_merk2 = $pos_merk1['max(merk)'];}
    $pos_layar= mysqli_query($koneksi,"SELECT max(layar) FROM normal_laptop");
    while($pos_layar1 = mysqli_fetch_array($pos_layar)){
    $pos_layar2 = $pos_layar1['max(layar)'];}
    $pos_harga= mysqli_query($koneksi,"SELECT max(harga) FROM normal_laptop");
    while($pos_harga1 = mysqli_fetch_array($pos_harga)){
    $pos_harga2 = $pos_harga1['max(harga)'];}


    //Mencari nilai terkecil rekomendasi
    $min2_ram= mysqli_query($koneksi,"SELECT min(ram) from rekom_laptop");
    while($min2_ram1 = mysqli_fetch_array($min2_ram)){
    $min2_ram2 = $min2_ram1['min(ram)'];}
    $min2_cpu= mysqli_query($koneksi,"SELECT min(cpu) FROM rekom_laptop");
    while($min2_cpu1 = mysqli_fetch_array($min2_cpu)){
    $min2_cpu2 = $min2_cpu1['min(cpu)'];}
    $min2_hdd= mysqli_query($koneksi,"SELECT min(hdd) FROM rekom_laptop");
    while($min2_hdd1 = mysqli_fetch_array($min2_hdd)){
    $min2_hdd2 = $min2_hdd1['min(hdd)'];}
    $min2_ssd= mysqli_query($koneksi,"SELECT min(ssd) FROM rekom_laptop");
    while($min2_ssd1 = mysqli_fetch_array($min2_ssd)){
    $min2_ssd2 = $min2_ssd1['min(ssd)'];}
    $min2_vga= mysqli_query($koneksi,"SELECT min(vga) FROM rekom_laptop");
    while($min2_vga1 = mysqli_fetch_array($min2_vga)){
    $min2_vga2 = $min2_vga1['min(vga)'];}
    $min2_merk= mysqli_query($koneksi,"SELECT min(merk) FROM rekom_laptop");
    while($min2_merk1 = mysqli_fetch_array($min2_merk)){
    $min2_merk2 = $min2_merk1['min(merk)'];}
    $min2_layar= mysqli_query($koneksi,"SELECT min(layar) FROM rekom_laptop");
    while($min2_layar1 = mysqli_fetch_array($min2_layar)){
    $min2_layar2 = $min2_layar1['min(layar)'];}
    $min2_harga= mysqli_query($koneksi,"SELECT min(harga) FROM rekom_laptop");
    while($min2_harga1 = mysqli_fetch_array($min2_harga)){
    $min2_harga2 = $min2_harga1['min(harga)'];}

    //mencari nilai terbesar rekomendasi
    $pos2_ram= mysqli_query($koneksi,"SELECT max(ram) from rekom_laptop");
    while($pos2_ram1 = mysqli_fetch_array($pos2_ram)){
    $pos2_ram2 = $pos2_ram1['max(ram)'];}
    $pos2_cpu= mysqli_query($koneksi,"SELECT max(cpu) FROM rekom_laptop");
    while($pos2_cpu1 = mysqli_fetch_array($pos2_cpu)){
    $pos2_cpu2 = $pos2_cpu1['max(cpu)'];}
    $pos2_hdd= mysqli_query($koneksi,"SELECT max(hdd) FROM rekom_laptop");
    while($pos2_hdd1 = mysqli_fetch_array($pos2_hdd)){
    $pos2_hdd2 = $pos2_hdd1['max(hdd)'];}
    $pos2_ssd= mysqli_query($koneksi,"SELECT max(ssd) FROM rekom_laptop");
    while($pos2_ssd1 = mysqli_fetch_array($pos2_ssd)){
    $pos2_ssd2 = $pos2_ssd1['max(ssd)'];}
    $pos2_vga= mysqli_query($koneksi,"SELECT max(vga) FROM rekom_laptop");
    while($pos2_vga1 = mysqli_fetch_array($pos2_vga)){
    $pos2_vga2 = $pos2_vga1['max(vga)'];}
    $pos2_merk= mysqli_query($koneksi,"SELECT max(merk) FROM rekom_laptop");
    while($pos2_merk1 = mysqli_fetch_array($pos2_merk)){
    $pos2_merk2 = $pos2_merk1['max(merk)'];}
    $pos2_layar= mysqli_query($koneksi,"SELECT max(layar) FROM rekom_laptop");
    while($pos2_layar1 = mysqli_fetch_array($pos2_layar)){
    $pos2_layar2 = $pos2_layar1['max(layar)'];}
    $pos2_harga= mysqli_query($koneksi,"SELECT max(harga) FROM rekom_laptop");
    while($pos2_harga1 = mysqli_fetch_array($pos2_harga)){
    $pos2_harga2 = $pos2_harga1['max(harga)'];}
    

    $bobot = mysqli_query($koneksi,"SELECT * FROM normal_laptop  ORDER BY tipe");
  
  while($d_bobot = mysqli_fetch_array($bobot)){
    $bobot_tipe = $d_bobot["tipe"];
    $bobot_merk = $d_bobot["merk"];
    $bobot_cpu = $d_bobot["cpu"];
    $bobot_ram = $d_bobot["ram"];
    $bobot_hdd = $d_bobot["hdd"];
    $bobot_ssd = $d_bobot["ssd"];
    $bobot_vga = $d_bobot["vga"];
    $bobot_layar = $d_bobot["layar"];
    $bobot_harga = $d_bobot["harga"];

    //Proses perhitungan jarak solusi ideal pos2itif(D+)
    $poss_merk = pow(($bobot_merk-$pos_merk2), 2);
    $poss_cpu = pow(($bobot_cpu-$pos_cpu2), 2);
    $poss_ram = pow(($bobot_ram-$pos_ram2), 2);
    $poss_hdd = pow(($bobot_hdd-$pos_hdd2), 2);
    $poss_ssd = pow(($bobot_ssd-$pos_ssd2), 2);
    $poss_vga = pow(($bobot_vga-$pos_vga2), 2);
    $poss_layar = pow(($bobot_layar-$pos_merk2), 2);
    $poss_harga = pow(($bobot_harga-$pos_harga2), 2);

    $ideal_positif = sqrt($poss_harga+$poss_layar+$poss_vga+$poss_ssd+$poss_hdd+$poss_ram+$poss_cpu+$poss_merk);

    //Prose perhitungan jarak solusi ideal negatif(D-)
    $neg_merk = pow(($bobot_merk-$min_merk2), 2);
    $neg_cpu = pow(($bobot_cpu-$min_cpu2), 2);
    $neg_ram = pow(($bobot_ram-$min_ram2), 2);
    $neg_hdd = pow(($bobot_hdd-$min_hdd2), 2);
    $neg_ssd = pow(($bobot_ssd-$min_ssd2), 2);
    $neg_vga = pow(($bobot_vga-$min_vga2), 2);
    $neg_layar = pow(($bobot_layar-$min_merk2), 2);
    $neg_harga = pow(($bobot_harga-$min_harga2), 2);

    $ideal_negatif = sqrt($neg_harga+$neg_layar+$neg_vga+$neg_ssd+$neg_hdd+$neg_ram+$neg_cpu+$neg_merk);

    //Penentuan nilai prefensi
    $prefensi = $ideal_negatif/ ($ideal_negatif+$ideal_positif);

    $prefensi_laptop = mysqli_query($koneksi,"UPDATE prefensi set nilai_prefensi='$prefensi'WHERE tipe='$bobot_tipe'");

    
}
    //Mencari rekomendasi dari status

    $bobot2 = mysqli_query($koneksi,"SELECT * FROM rekom_laptop  ORDER BY tipe");
  
  while($d_bobot2 = mysqli_fetch_array($bobot2)){
    $bobot2_tipe = $d_bobot2["tipe"];
    $bobot2_merk = $d_bobot2["merk"];
    $bobot2_cpu = $d_bobot2["cpu"];
    $bobot2_ram = $d_bobot2["ram"];
    $bobot2_hdd = $d_bobot2["hdd"];
    $bobot2_ssd = $d_bobot2["ssd"];
    $bobot2_vga = $d_bobot2["vga"];
    $bobot2_layar = $d_bobot2["layar"];
    $bobot2_harga = $d_bobot2["harga"];

    //Proses perhitungan jarak solusi ideal pos2itif(D+)
    $pos3_merk = pow(($bobot2_merk-$pos2_merk2), 2);
    $pos3_cpu = pow(($bobot2_cpu-$pos2_cpu2), 2);
    $pos3_ram = pow(($bobot2_ram-$pos2_ram2), 2);
    $pos3_hdd = pow(($bobot2_hdd-$pos2_hdd2), 2);
    $pos3_ssd = pow(($bobot2_ssd-$pos2_ssd2), 2);
    $pos3_vga = pow(($bobot2_vga-$pos2_vga2), 2);
    $pos3_layar = pow(($bobot2_layar-$pos2_merk2), 2);
    $pos3_harga = pow(($bobot2_harga-$pos2_harga2), 2);

    $ideal_positif2 = sqrt($pos3_harga+$pos3_layar+$pos3_vga+$pos3_ssd+$pos3_hdd+$pos3_ram+$pos3_cpu+$pos3_merk);

    //Prose perhitungan jarak solusi ideal negatif(D-)
    $nega_merk = pow(($bobot2_merk-$min_merk2), 2);
    $nega_cpu = pow(($bobot2_cpu-$min_cpu2), 2);
    $nega_ram = pow(($bobot2_ram-$min_ram2), 2);
    $nega_hdd = pow(($bobot2_hdd-$min_hdd2), 2);
    $nega_ssd = pow(($bobot2_ssd-$min_ssd2), 2);
    $nega_vga = pow(($bobot2_vga-$min_vga2), 2);
    $nega_layar = pow(($bobot2_layar-$min_merk2), 2);
    $nega_harga = pow(($bobot2_harga-$min_harga2), 2);

    $ideal_negatif2 = sqrt($nega_harga+$nega_layar+$nega_vga+$nega_ssd+$nega_hdd+$nega_ram+$nega_cpu+$nega_merk);

    //Penentuan nilai prefensi
    $prefensi2 = $ideal_negatif2/ ($ideal_negatif2+$ideal_positif2);

    $prefensi_laptop = mysqli_query($koneksi,"UPDATE prefensi set nilai_rek_prefensi='$prefensi2'WHERE tipe='$bobot2_tipe'");

  
    
}

$pilihan= mysqli_query($koneksi,"SELECT tipe from prefensi ORDER BY nilai_prefensi desc");
    while($d_pilihan = mysqli_fetch_array($pilihan)){
    $pilihanku = $d_pilihan['tipe'];
    echo "<br>$pilihanku";

    }
    echo "<br><br>"; 
    echo "<br><br>"; 
$pilihan2= mysqli_query($koneksi,"SELECT tipe FROM `prefensi` ORDER BY `nilai_rek_prefensi` DESC");
    while($d_pilihan2 = mysqli_fetch_array($pilihan2)){
    $pilihanku2 = $d_pilihan2['tipe'];
    echo "<br>$pilihanku2";

    }

    header("location:index.php #kebutuhan");
  if($laptop){
    echo "\n Data berhasil di insert!";
  } else {
    echo "Error :".$laptop."<br>".mysqli_error($koneksi);
  }
 
  mysqli_close($koneksi);
 }
?>