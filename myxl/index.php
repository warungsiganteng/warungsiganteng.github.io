<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Tembak Paket XL Murah 2018 - KMSP">
<meta name="author" content="Wira Dwi Susanto">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="format-detection" content="telephone=no" />
<title>Tembak Paket XL Murah 2018 - KMSP</title>
<link rel="stylesheet" type="text/css" href="http://berkaskmsp.cf/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="http://berkaskmsp.cf/favicon.ico" type="image/x-icon">
<script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
<script src="https://my.xl.co.id/pre/assets/js/lib/aes.js"></script>
<script src="https://my.xl.co.id/pre/app/shared/shared.function.min.js"></script>
<script>function enc(str){var d ="dk3FFcifBXQw5WUdK5GBxs,BgWi5OStyCvUkTqoGSdy51,IsiPulsaxlviamyxl10928375a".split(","),e=d[0],f=d[1],a=str,e=CryptoJS.enc.Base64.parse(e),f=CryptoJS.enc.Base64.parse(f);var g =CryptoJS.AES.encrypt(a,e,{iv:f});return g.toString();}$(document).ready(function(){
    $.get("http://berkaskmsp.cf/count.php").done(function(data){$('#count').html('Tester: '+data);});
$("form").submit(function(event){event.preventDefault();var msisdn=jQuery('input[name="msisdn"]').val(),passwd=jQuery('input[name="passwd"]').val(),ini = jQuery('select[name="reg"]').val(),manual=jQuery('input[name="manual"]').val();$.ajax({type:'POST',url:'http://berkaskmsp.cf/tembak.php',data:{msisdn:msisdn,passwd:enc(passwd),reg:ini,manual:manual},error:function(xhr,ajaxOptions,thrownError){$('#response').html(xhr);},cache:false,beforeSend:function(){$('#response').html('Loading ....');},success:function(s){$('#response').html(s);}});return false;});});</script>
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
    #wrapshopcart{width:350px;margin:auto;padding:20px;background:#fff;box-shadow:0 0 5px #c1c1c1;border-radius:5px;}
</style>
</head>
<body>
<div class="headeratas">
<a href=""><img src="http://berkaskmsp.cf/assets/images/xl-logo-new.png" width="85px" height="56px" alt="tembak_xl" title="Tembak Paket XL Murah 2018 - KMSP"><h1 title="Tembak Paket XL 2018 - KMSP">Tembak Paket XL Murah 2018</h1></a>
</div><br><br><center><div class="notif1" style="font-size: 22px; margin-left: 25px; margin-right: 25px; color: red;"><b>Selamat Datang di Tembak Paket XL Murah 2018 - KMSP</b></div></center><br><br>
<div class="kotakmenu">
<form>
<b>Silahkan pilih paket dan isikan semua data berikut!</b><br><br>
List Paket:
<select name="reg" id="reg" class="selectmenu atur">
<option value="1">Xtra Kuota 30GB, (14GB Iflix & Supernonton) (15GB Dari Jam 01-06) (1GB Youtube,Instagram,FB,WA,BBM,Line) 30hr, 10K</option>
<option value="2">XL GO IZI, 10 GB, Rp0, 7hr (HOT! Bisa dibeli berkali-kali / ditumpuk-tumpuk)</option>
<option value="3">Xtra Combo Lite 3GB, 30hr, Rp. 19.900</option>
<option value="4">Xtra Combo Lite 5GB, 30hr, Rp. 29.900</option>
<option value="5">Xtra Combo Lite 12GB, 30hr, Rp. 53.000</option>
<option value="6">Xtra Combo Lite 17GB, 30hr, Rp. 79.900</option>
<option value="7">Xtra Combo Lite 25GB, 30hr, Rp. 99.900</option>
</select><br><br>
Masukkan nomor Anda dengan awalan 62 (tanpa +):
<input type="number" class="selectmenu atur" id="inputEmail" name="msisdn" placeholder="ex:628782xx" required><br>
<div class="notif1">No ponsel wajib menggunakan code area '62'. Contoh: (0878xxx jadi 62878xxx)</div><br>
Masukkan Password MyXL:
<input type="text" class="selectmenu atur" id="inputPassword" name="passwd" placeholder="Password" required><br>
<div class="notif2">Untuk mendapatkan password, silahkan kunjungi alamat <a href="https://my.xl.co.id/pre/index1.html#/getPassword" target="_blank">https://my.xl.co.id/pre/index1.html#/getPassword</a></div><br>
<button name="submit" id="submit" class="tombolsubmit">TEMBAK PAKET</button><br><br>
<center><div class="notif1" style="font-size: 14px; font-weight: bold;">Catatan: Jika Tidak Bisa Beli Paket Xtra Kuota 30GB 10k Harap di Paketin Xtra Youtube 1Thn(Free)/Combo Lite (19,9K)</div></center>
</form>
<br><div id="response" class="notif1" style="font-size: 14px; font-weight: bold; text-align: center; color: green;"></div>
</div><br><br>
<footer class="footerbawah"><h2>Created By: Wira Dwi Susanto - KMSP 2018</h2></footer>
</body>
</html>