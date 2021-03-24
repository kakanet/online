<?php

date_default_timezone_set('Asia/Jakarta');
include('./config/config.php');
require_once 'src/FrameBot.php';
$bot = new FrameBot($datasa['token'], $datasa['usernamebot']);
require_once ('./include/formatbytesbites.php');
require_once ('./include/routeros_api.class.php');

//=====================================================================================================

$bot->cmd('promo|/promo', function () {
	global $datasa;
	$mikrotik_ip 		 = $datasa['ipaddress'];
	$mikrotik_username = $datasa['user'];
	$mikrotik_password = $datasa['password'];
	$API = new routeros_api();
	$info = bot::message();
	$id = $info['chat']['id'];
	$iduser = $info['from']['id'];
	$msgid = $info['message_id'];
	$x1 = "=========================\nPROMO PC ATAS ADALAH \n=========================\n👨‍💻PROMO GRATIS = 3 bayar + 1 gratis : \n~ Bila kamu membawa teman ber-3 (semuanya main Rp.10.000), maka kamu dapat waktu main gratis sampai teman kamu pulang.\n=========================\n👨‍💻PROMO MURAH = harga diskon : \n~ Bila kamu datang ber-5 (semuanya main Rp.10.000), maka semuanya waktunya 5 jam\n=========================\ncatatan : \nwaktu PROMO tidak bisa disimpan, kecuali mati lampu. \nmau menggunakan promo hubungi wa 0823-5300-4376\n=========================\nkembali ke menu awal ketik : /start \n=========================";
	Bot::sendMessage($x1);
	return Bot::sendMessage($text, $options);
	
});

$bot->cmd('bonus|/bonus', function () {
	global $datasa;
	$mikrotik_ip 		 = $datasa['ipaddress'];
	$mikrotik_username = $datasa['user'];
	$mikrotik_password = $datasa['password'];
	$API = new routeros_api();
	$info = bot::message();
	$id = $info['chat']['id'];
	$iduser = $info['from']['id'];
	$msgid = $info['message_id'];
	$x1 = "BONUS PC ATAS ADALAH \n=========================\n👨‍💻Main Rp.10.000 (3 jam 20 menit) \nbonus waktu 30 menit \n=========================\n👨‍💻Main Rp.12.000 (4 jam) \nbonus waktu 1 jam \n=========================\n👨‍💻Main Rp.15.000 (5 jam) \nbonus waktu 2 jam \n=========================\n👨‍💻Main Rp.18.000 (6 jam) \nbonus waktu 3 jam \n=========================\n👨‍💻Main Rp.20.000 (6 jam 40 menit) \nbonus waktu 4 jam \n=========================\ncara ambil bonus, bila waktu mu tersisa 5 menit, silahkan buka menu, lalu klik ambil bonus, lalu klik tekan bel, maka waktu mu akan bertambah otomatis \n\ncatatan : waktu bonus tidak bisa disimpan \n=========================\nkembali ke menu awal ketik : /start \n=========================";
	Bot::sendMessage($x1);
	return Bot::sendMessage($text, $options);
	
});

$bot->cmd('/booking|booking|/Booking|Booking|/BOOKING|BOOKING', function () {
	global $datasa;
	$mikrotik_ip 		 = $datasa['ipaddress'];
	$mikrotik_username = $datasa['user'];
	$mikrotik_password = $datasa['password'];
	$API = new routeros_api();
	$info = bot::message();
	$id = $info['chat']['id'];
	$iduser = $info['from']['id'];
	$msgid = $info['message_id'];
	$booking = "=========================\n👨‍💻 SYARAT BOOKING PC :\n=========================\n🌟 kamu menuju warnet (otw)\n🌟 bila mau booking pc, caranya tekan link ini:  https://bit.ly/warnetselongan";
	$cek = "========================= \nmau cek nomor lain \ncaranya ketik: /start \n=========================";
	Bot::sendMessage($booking);
	Bot::sendMessage($cek);
	return Bot::sendMessage($text, $options);
	
});




//start baru
$bot->cmd('start|/start|/bawah|bawah|BAWAH|Bawah|/Bawah|/atas|atas|!atas|Atas|/ATAS|/Atas|ATAS|/hotspot|hotspot', function () {
	global $datasa;
	$mikrotik_ip 		 = $datasa['ipaddress'];
	$mikrotik_username = $datasa['user'];
	$mikrotik_password = $datasa['password'];
	$API = new routeros_api();
	$info = bot::message();
	$id = $info['chat']['id'];
	$iduser = $info['from']['id'];
	$msgid = $info['message_id'];
	date_default_timezone_set('Asia/Makassar');
	$waktu = date("H:i:s a");
	$x1 = "INFORMASI\n=========================\npesan ini dibalas otomatis oleh bot, saat ini jam : $waktu , semua komputer sedang kosong\n=========================";
	Bot::sendMessage($x1);
	return Bot::sendMessage($text, $options);
	
});

//harga
$bot->cmd('harga|/harga', function () {
	global $datasa;
	$mikrotik_ip 		 = $datasa['ipaddress'];
	$mikrotik_username = $datasa['user'];
	$mikrotik_password = $datasa['password'];
	$API = new routeros_api();
	$info = bot::message();
	$id = $info['chat']['id'];
	$iduser = $info['from']['id'];
	$msgid = $info['message_id'];
	$x1 = "=========================\n💎 HARGA ATAS DAN BAWAH 💎 \n=========================\n🎉 HARGA NORMAL ATAS 🎉 \n1.000  = 10 menit \n2.000  = 30 menit \n3.000  = 50 menit \n4.000  = 1 jam 10 menit \n5.000  = 1 jam 40 menit \n6.000  = 2 jam \n7.000  = 2 jam 20 menit \n8.000  = 2 jam 40 menit \n9.000  = 3 jam \n10000 = 3 jam 20 menit \n11000 = 3 jam 40 menit \n12000 = 4 jam \n13000 = 4 jam 20 menit \n14000 = 4 jam 40 menit \n15000 = 5 jam \n16000 = 5 jam 20 menit \n17000 = 5 jam 40 menit \n18000 = 6 jam \n19000 = 6 jam 20 menit \n20000 = 6 jam 40 menit \n=========================\n🎉PAKET KHUSUS ATAS 🎉 \n15.000 = 7 jam \n20.000 = 10 jam \n=========================\n🎉 HARGA NORMAL BAWAH 🎉 \n10000 = 2 jam \n11000 = 2 jam 12 menit \n12000 = 2 jam 24 menit \n13000 = 2 jam 36 menit \n14000 = 2 jam 48 menit \n15000 = 3 jam \n16000 = 3 jam 12 menit \n17000 = 3 jam 24 menit \n18000 = 3 jam 36 menit \n19000 = 3 jam 48 menit \n20000 = 4 jam \n=========================\n🎉PAKET KHUSUS BAWAH 🎉 \n20.000 = 5 jam \n35.000 = 10 jam \n=========================\nKETERANGAN : \n🎉 harga normal waktunya bisa disimpan \n🎉 harga paket waktunya tidak bisa disimpan \n=========================\n=========================\nkembali ke menu awal ketik : /start";
	Bot::sendMessage($x1);
	return Bot::sendMessage($text, $options);
	
});


$bot->run();