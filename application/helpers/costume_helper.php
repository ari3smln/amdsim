<?php
function seo_title($str) {
    $c = array (' ');
    $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');
    
    $str = str_replace($d, '', $str); 
    // Hilangkan karakter yang telah disebutkan di array $d
    
    $str = strtolower(str_replace($c, '-', $str)); 
    // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
    return $str;
}

function no_space($str) {
    $c = array (' ');
    $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');
    
    $str = str_replace($d, '', $str); 
    // Hilangkan karakter yang telah disebutkan di array $d
    
    $str = strtolower(str_replace($c, '-', $str)); 
    // Ganti spasi dengan tanda _ dan ubah hurufnya menjadi kecil semua
    return $str;
}


function with_space($str) {
    //$c = array ('');
    $d = array ('-','_','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');
    
    //$str = str_replace($d, '', $str); 
    // Hilangkan karakter yang telah disebutkan di array $d
    
    $str = strtolower(str_replace($d, ' ', $str)); 
    // Ganti - dengan tanda spasi dan ubah hurufnya menjadi kecil semua
    return $str;
}

function price_output($value) {
    $d = array (' ','.','Rp','$');    
    $s = strtolower(str_replace($d, '', $value)); 
    return $s;
}


function check_session_backend()
{
    $CI = & get_instance();
    $session = $CI->session->userdata('status_login');
    if($session!='oke')
    {
        redirect('backend/auth/login');
    }
}
function check_session_backend_login()
{
    $CI = & get_instance();
    $session = $CI->session->userdata('status_login');
    if($session=='oke')
    {
        redirect('backend/dashboard');
    }
}
function check_session_front(){
    $ci=& get_instance();
    if(! $ci->session->userdata('staff_login')) 
    redirect(base_url());
}

function check_session_front_login(){
    $ci=& get_instance();
    if($ci->session->userdata('staff_login')) 
    redirect('backend/dashboard');
}

function rupiah($value) {
    $rupiah = "Rp. ".number_format($value,0,',','.');
    return  $rupiah; 
    // hasilnya menjadi :
    // Rp. 10.000
}

function dollar($value) {
    $rupiah = "$. ".number_format($value, 0, ',', '.');
    return  $rupiah; 
    // hasilnya menjadi :
    // 10.000
}

function rupiah2($value) {
    $rupiah = "Rp. <span style='float:right'>".number_format($value, 0, ',', '.')."</span>";
    return  $rupiah; 
    // hasilnya menjadi :
    // Rp.  10.000
    // Rp.   3.000
    // Rp.     500
}
function RemoveSpecialChar($value){
    $result  = preg_replace('/[^a-zA-Z0-9_ -]/s','',$value);
    return $result;
}
function bulan_en($value) {
    switch ($value){        
        case 1: return 'January';
            break;
        case 2: return 'February';
            break;
        case 3: return 'March';
            break;
        case 4: return 'April';
            break;
        case 5: return 'May';
            break;
        case 6: return 'June';
            break;
        case 7: return 'July';
            break;
        case 8: return 'August';
            break;
        case 9: return 'September';
            break;
        case 10: return 'October';
            break;
        case 11: return 'November';
            break;
        case 12: return 'December';
            break;
    }
}

function bulan_id($value) {
    switch ($value){        
        case 1: return 'Januari';
            break;
        case 2: return 'Februari';
            break;
        case 3: return 'Maret';
            break;
        case 4: return 'April';
            break;
        case 5: return 'Mei';
            break;
        case 6: return 'Juni';
            break;
        case 7: return 'Juli';
            break;
        case 8: return 'Agustus';
            break;
        case 9: return 'September';
            break;
        case 10: return 'Oktober';
            break;
        case 11: return 'November';
            break;
        case 12: return 'Desember';
            break;
    }
}

function bulan($value) {
    switch ($value){        
        case 1: return 'Januari';
            break;
        case 2: return 'Februari';
            break;
        case 3: return 'Maret';
            break;
        case 4: return 'April';
            break;
        case 5: return 'Mei';
            break;
        case 6: return 'Juni';
            break;
        case 7: return 'Juli';
            break;
        case 8: return 'Agustus';
            break;
        case 9: return 'September';
            break;
        case 10: return 'Oktober';
            break;
        case 11: return 'November';
            break;
        case 12: return 'Desember';
            break;
    }
}

function bln($value) {
    switch ($value){        
        case 1: return 'Jan';
            break;
        case 2: return 'Feb';
            break;
        case 3: return 'Mar';
            break;
        case 4: return 'Apr';
            break;
        case 5: return 'Mei';
            break;
        case 6: return 'Jun';
            break;
        case 7: return 'Jul';
            break;
        case 8: return 'Ags';
            break;
        case 9: return 'Sep';
            break;
        case 10: return 'Okt';
            break;
        case 11: return 'Nov';
            break;
        case 12: return 'Des';
            break;
    }
}

function bulan_en_value($value) {
    switch ($value){        
        case 'January': return '1';
            break;
        case 'February': return '2';
            break;
        case 'March': return '3';
            break;
        case 'April': return '4';
            break;
        case 'May': return '5';
            break;
        case 'June': return '6';
            break;
        case 'July': return '7';
            break;
        case 'August': return '8';
            break;
        case 'September': return '9';
            break;
        case 'October': return '10';
            break;
        case 'November': return '11';
            break;
        case 'December': return '12';
            break;
    }
}

function bulan_value($value) {
    switch ($value){        
        case 'Januari': return '1';
            break;
        case 'Februari': return '2';
            break;
        case 'Maret': return '3';
            break;
        case 'April': return '4';
            break;
        case 'Mei': return '5';
            break;
        case 'Juni': return '6';
            break;
        case 'Juli': return '7';
            break;
        case 'Agustus': return '8';
            break;
        case 'September': return '9';
            break;
        case 'Oktober': return '10';
            break;
        case 'November': return '11';
            break;
        case 'Desember': return '12';
            break;
    }
}

function tgl_indo($value) {
    // dari 2015-12-20 00:00:00        
    $hari = substr($value,8,2);
    $bulan = bulan(substr($value,5,2));
    $tahun = substr($value,0,4);
    $tgl_indonesia = "$hari $bulan $tahun"; 
    
    return $tgl_indonesia;
    // menjadi 20-12-2015
}
function getRomawi($bln){
                switch ($bln){
                    case 1: 
                        return "I";
                        break;
                    case 2:
                        return "II";
                        break;
                    case 3:
                        return "III";
                        break;
                    case 4:
                        return "IV";
                        break;
                    case 5:
                        return "V";
                        break;
                    case 6:
                        return "VI";
                        break;
                    case 7:
                        return "VII";
                        break;
                    case 8:
                        return "VIII";
                        break;
                    case 9:
                        return "IX";
                        break;
                    case 10:
                        return "X";
                        break;
                    case 11:
                        return "XI";
                        break;
                    case 12:
                        return "XII";
                        break;
                }
}
function tgl_jam_indo($value) { 
    // dari 2015-12-20 00:00:00
    $jam        = substr($value,11,2);
    $menit      = substr($value,14,2);
    $detik      = substr($value,17,2);
    $hari       = substr($value,8,2);
    $bulan      = substr($value,5,2);
    $tahun      = substr($value,0,4);    
    $tgl_jam_indo = "$hari-$bulan-$tahun $jam:$menit";
    
    return $tgl_jam_indo;
    // menjadi 20-12-2015 00:00
}

function jam($value) { 
    // dari 00:00:00
    $jam   = substr($value,0,2);
    $menit = substr($value,3,2);
    $jams  = "$jam:$menit"; 
    return $jams;
    // menjadi 00:00
}

function jam_indo($value) { 
    // dari 2015-12-20 00:00:00
    $jam   = substr($value,11,2);
    $menit = substr($value,14,2);
    $jam_indo = "$jam:$menit";    
    return $jam_indo;
    // menjadi 00:00
}

function tgl_db($value) { 
    // dari 31-12-2015
	$hari  = substr($value,0,2);
	$bulan = substr($value,3,2);
    $tahun = substr($value,6,4);
	$tgl_db = "$tahun-$bulan-$hari";	
    return $tgl_db;
    // menjadi 2015-12-31
}

function tgl_db2($value) { 
    // dari 1 april 2016
    $tgl = explode (" ", $value);
	$hari  = $tgl[0];
	$bulan = bulan_value($tgl[1]);
    $tahun = $tgl[2];
	$tgl_db2 = "$tahun-$bulan-$hari"; 
	return $tgl_db2;
    // menjadi 2016-04-01
}

function tgl_en_db($value) { 
    // dari 1 July 2016
    $tgl = explode (" ", $value);
	$hari  = $tgl[0];
	$bulan = bulan_en_value($tgl[1]);
    $tahun = $tgl[2];
	$tgl_en_db = "$tahun-$bulan-$hari"; 
	return $tgl_en_db;
    // menjadi 2016-04-01
}

function tgl_indo_db($value) { 
    // dari 1 Juli 2016
    $tgl = explode (" ", $value);
	$hari  = $tgl[0];
	$bulan = bulan_value($tgl[1]);
    $tahun = $tgl[2];
	$tgl_indo_db = "$tahun-$bulan-$hari"; 
	return $tgl_indo_db;
    // menjadi 2016-04-01
}

function bulan_tahun($value){
    // dari 2015-12-20
    $bulan   = bulan(substr($value,5,2));
    $tahun   = substr($value,0,4);
    $bulan_tahun = "$bulan $tahun";
    return $bulan_tahun;
    // menjadi Desember 2015
}

function date_indo($value){
    // dari 2015-12-20 00:00:00 / 2015-12-20
    $hari    = substr($value,8,2);
    $bulan   = substr($value,5,2);
    $tahun   = substr($value,0,4);
    $date_indo = "$hari-$bulan-$tahun";
    return $date_indo;
    // menjadi 20 Desember 2015
}

function date_en($value){
    // dari 2015-12-20 00:00:00 / 2015-12-20
    $hari    = substr($value,8,2);
    $bulan   = substr($value,5,2);
    $tahun   = substr($value,0,4);
    $date_en = "$hari/$bulan/$tahun";
    return $date_en;
    // menjadi 20/12/2015
}

function date_bulan_indo($value){
    // dari 20-12-2015
    $hari    = substr($value,0,2);
    $bulan   = bulan(substr($value,3,2));
    $tahun   = substr($value,6,4);
    $date_bulan_indo = "$hari $bulan $tahun";
    return $date_bulan_indo;
    // menjadi 20 December 2015
}

function date_db($value){
    // dari 20-12-2015
    $hari  = substr($value,0,2);
    $bulan = substr($value,3,2);
    $tahun = substr($value,6,4);
    $date_db  = "$tahun-$bulan-$hari";
    return $date_db; 
    // menjadi 2015-12-20
}

function date_time_indo($value){    
    // dari 2015-12-20 00:00:00 
    $jam        = substr($value,11,2);
    $menit      = substr($value,14,2);
    $detik      = substr($value,17,2);
    $hari       = substr($value,8,2);
    $bulan      = bulan(substr($value,5,2));
    $tahun      = substr($value,0,4);
    $date_time_indo = "$hari $bulan $tahun $jam:$menit";
    return $date_time_indo;
    // menjadi 20 Desember 2015 00:00
}
function date_url($value){    
    // dari 2015-12-20 00:00:00 
    $jam        = substr($value,11,2);
    $menit      = substr($value,14,2);
    $detik      = substr($value,17,2);
    $hari       = substr($value,8,2);
    $bulan      = substr($value,5,2);
    $tahun      = substr($value,0,4);
    $date_time_indo = "$hari$bulan$tahun$jam$menit$detik";
    return $date_time_indo;
    // menjadi 20 Desember 2015 00:00
}
function date_url_db($value){    
    // dari 2015-12-20 00:00:00 
    $hari       = substr($value,0,2);
    $bulan      = substr($value,2,2);
    $tahun      = substr($value,4,4);

    $jam        = substr($value,8,2);
    $menit      = substr($value,10,2);
    $detik      = substr($value,12,2);

    
    $date_time_indo = "$tahun-$bulan-$hari $jam:$menit:$detik";
    return $date_time_indo;
    // menjadi 20 Desember 2015 00:00
}
function kode_generator($nama_tbl,$nama_kolom,$inisial_kode,$mulai_karakter,$jml_karakter,$kode_awal) {
    $CI=& get_instance();
    
    $chek=$CI->db->query("SELECT $nama_kolom FROM $nama_tbl ORDER BY $nama_kolom DESC");
    
    if($chek->num_rows()>0){
        $chek=$chek->row_array();
        $lastKode=$chek[$nama_kolom];
        $ambil=  substr($lastKode, $mulai_karakter, $jml_karakter)+1;
        $newCode=  $inisial_kode.sprintf("%0".$jml_karakter."s",$ambil);
        return $newCode;
    } else{
        return $kode_awal;
    }
}

function kode_unik($length) {
    $random = "";
    srand((double)microtime()*1000000);     
    $data = "abcdefghijklmnopqrstuvwxyz0123456789";     
    for($i = 0; $i < $length; $i++) { $random .= substr($data, (rand()%(strlen($data))), 1); }     
    return $random;
}

function kode_acak($length) {
    $random = "";
    srand((double)microtime()*1000000);     
    $data = "ABC1239JKLMN67QRSTUVWXYZ54ABCGHTKLI1230PQ45ZX67VNM89WJ0FGH457P89Z";     
    for($i = 0; $i < $length; $i++) { $random .= substr($data, (rand()%(strlen($data))), 1); }     
    return $random;
}

function SelisihTgl($tgl_dateline, $tgl_kembali) {
    // Mendapatkan tanggal detline
    //$tgl_dateline_pcs = explode ("-", $tgl_dateline);
    //$tgl_dateline_pcs = $tgl_dateline_pcs[2]."-".$tgl_dateline_pcs[1]."-".$tgl_dateline_pcs[0];
    // Mendapatkan tanggal kembali/transaksi
    //$tgl_kembali_pcs = explode ("-", $tgl_kembali);
    //$tgl_kembali_pcs = $tgl_kembali_pcs[2]."- ".$tgl_kembali_pcs[1]."-".$tgl_kembali_pcs[0];
    // Menghitung selisih
    //$selisih = strtotime ($tgl_kembali_pcs - strtotime ($tgl_dateline_pcs);
    $selisih = strtotime ($tgl_kembali) - strtotime ($tgl_dateline);
    
    // Pembulatan selisih kedalam tanggal
    $selisih = $selisih / 86400;
    
    if ($selisih >=1) {$hasil = floor($selisih);} else {$hasil = 0;}
    return $hasil;
}

function datehourcount($datestart, $dateend) {
    $start = strtotime($datestart);
    //$startdate = strtotime(date('Y-m-d 00:00:00', $start));
    
    $end = strtotime($dateend);
    //$enddate = strtotime(date('Y-m-d 00:00:00', $end));
    
    //$diff = ($tsYmdNow - $tsYmdDate)/(60*60*24);
    $diffs =  abs($end - $start)/(3600);
    return $diffs;
}

function datecount($s, $e) {
    $s = strtotime($s);
    $e = strtotime($e);    
    return ($e - $s)/ (24 *3600);
}

function datecount_cuti($s, $e) {
    $s = strtotime($s);
    $e = strtotime($e);    
    return (($e - $s) / (24 *3600))+1;
}

function timecount($jam_masuk,$jam_keluar) {
    list($h,$m,$s)  = explode(":",$jam_masuk);
    $dtAwal         = mktime($h,$m,$s,"1","1","1");
    
    list($h,$m,$s)  = explode(":",$jam_keluar);
    $dtAkhir        = mktime($h,$m,$s,"1","1","1");
    
    $dtSelisih      = $dtAkhir-$dtAwal;    
    $totalmenit     = $dtSelisih/60;
    $jam            = explode(".",$totalmenit/60);
    $sisamenit      = ($totalmenit/60)-$jam[0];
    $sisamenit2     = $sisamenit*60;
    $jml_jam        = $jam[0];
    //return $jml_jam." jam ".$sisamenit2." menit";
    return $jml_jam;
}

function timecount_cuti($jam_masuk,$jam_keluar) {
    list($h,$m,$s)  = explode(":",$jam_masuk);
    $dtAwal         = mktime($h,$m,$s,"1","1","1");
    
    list($h,$m,$s)  = explode(":",$jam_keluar);
    $dtAkhir        = mktime($h,$m,$s,"1","1","1");
    
    $dtSelisih      = $dtAkhir-$dtAwal;    
    $totalmenit     = $dtSelisih/60;
    $jam            = explode(".",$totalmenit/60);
    $sisamenit      = ($totalmenit/60)-$jam[0];
    $sisamenit2     = $sisamenit*60;
    $jml_jam        = $jam[0];
    
    return $jml_jam;
}
