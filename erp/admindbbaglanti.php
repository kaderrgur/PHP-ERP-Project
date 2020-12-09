<?php

@ob_start(); @session_start();


// Veritabanı ayarları
$mysql_data = array(
	"host" => "localhost",
	"name" => "erp",
	"user" => "root",
	"pass" => "",
);
// Kullanılan php versiyonu
$php_version = (int) phpversion();

if( $php_version >= 5 ) {
	$db = @new mysqli($mysql_data["host"], $mysql_data["user"], $mysql_data["pass"], $mysql_data["name"]);

	if( $db->connect_errno ) {
		// eğer bağlantı hatası varsa yazdıralım
		die( $db->connect_error );
	}
} else {
	header("Content-type:text/html;charset=ISO-8859-9");
	// Versiyon PHP5'den geride!
	die("Artık PHP5 kullanıyoruz! Yenilikçi ol, sistemini güncelle :)");
}


$cookie_id = "uyekontrolid";

if( isset($_COOKIE[$cookie_id]) && dbcount("admin_id", "admin", "admin_token=".dbexport($_COOKIE[$cookie_id])) ) {
	$giris_yapildimi = 'evet';
	$result = dbquery("SELECT * FROM admin WHERE admin_token=".dbexport($_COOKIE[$cookie_id]));
	$uyebilgi = $result->fetch_assoc();
} else {
	$giris_yapildimi = 'hayir';
	$uyebilgi = array();
}



// bu bir ID mi?
function idval($num=0, $greaterthan=0) {
	if(!is_numeric($greaterthan)) $greaterthan = 0;
	return (intval($num) > $greaterthan && is_numeric($num) ? (intval($num)==0?"0":intval($num)) : "0" );
}
function dbtrim($par) {
    return str_replace(array("'","\""), array("&#39;","&quot;"), $par);
}
function dbuntrim($par) {
    return str_replace(array("&#39;","&quot;"), array("'","\""), $par);
}
function dbexport($x='') {return var_export($x, true);}

// query
function dbquery($query) {
	global $db;
	$sorgu = $db->query($query);
	if( !$sorgu || $db->errno > 0 ) {
		die( $db->error );
	} else {
		return $sorgu;
	}
}


function dbcount($field, $table, $conditions = "") {
	global $db;
	$cond = ($conditions ? " WHERE ".$conditions : "");
	$result = dbquery("SELECT COUNT(".$field.") as t FROM ".$table.$cond);
	if (!$result) {
		die( $db->error );
		return false;
	} else {
		$rows = $result->fetch_array(MYSQLI_NUM);
		return $rows[0];
	}
}
function dbresult($query, $row=0) {
	global $db;
	$result = dbquery($query);
	if (!$result) {
		die( $db->error );
		return false;
	} else {
		$rows = $result->fetch_array(MYSQLI_NUM);
		return $rows[$row];
	}
}
function create_token($length=11) {
    /*for($i=0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }
    return $key;*/
    $keys = implode('', array_merge(range('A', 'Z'), range(0,9), range('a', 'z')));
    do {
    	$token = substr(str_shuffle($keys), 0, $length);
    	$say = dbcount( "admin_id", "admin", "admin_token='".$token."'" );
    } while( $say > 1 );
    return $token;
}
# password encoder
function create_password($password='') {
	// ($password-length * 5) times
	$times = strlen($password) * 18;
	$pass = $password;
	for( $i=0; $i<=$times; $i++ ) {
		$pass = md5($pass);
	}
	return $pass;
}



?>