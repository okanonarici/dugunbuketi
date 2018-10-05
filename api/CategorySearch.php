<?php
  include ("../sistem/config.php");
  include ("../sistem/function.php");

if($_POST){
	$_code = 200;
	$type = p("type");
	$array = array();

	Switch($type){

		case 'SearchButton':

			$search_val = p("search_val");

			if(!$search_val){
				$array["error"] = "Lüften boş bırakmayınız!";
			}else {
				$oldtime=time() + 60;
				$get_ip=getUserIP();
				query("INSERT IGNORE INTO limitage VALUES ('$get_ip','0','$oldtime')");
				$time=time();
				$s_check = row(query("SELECT COUNT(*) as `total` FROM limitage WHERE ip = '$get_ip' AND (counter < '10' AND time >= '$time') OR time < '$time'"));
				if ($s_check['total']==1) {
					$s_query = query("SELECT place FROM cities WHERE city LIKE '%$search_val%'");
					if(rows($s_query)>0){
						$array["ok"] = '';
						while($res=row($s_query)) {
							$array["ok"] .= $res['place'].'<br>';
						}
					}else {
						$array["error"] = "Aranan kriterde sonuç bulunamadı";
					}
					$setto=row(query("SELECT `counter`,`time` FROM `limitage` WHERE ip = '$get_ip'"));
					if (($setto['counter']<10) && ($setto['time']>=$time)) {
						query("UPDATE limitage SET counter = counter + '1' WHERE ip = '$get_ip'");
					} else {
						query("UPDATE limitage SET counter = '1', time = '$oldtime' WHERE ip = '$get_ip'");
					}
				} else {
					$array["error"] = "1 Dakika içerisinde 10'dan fazla talep gönderdiniz!";
				}
			}

		break;

	}
	SetHeader($_code);
	echo json_encode($array);

}else{
	echo "Yapılması istenen diğer kontroller alanı";
}
