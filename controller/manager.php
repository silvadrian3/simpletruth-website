<?php 
class manager
{
	public function as_update($table,$rows,$where) {
	       for($i = 0; $i < count($where); $i++){
                if($i%2 != 0) {
                    if(is_string($where[$i])) {
						$where[$i] = '"'.$where[$i].'"';
                    }
                }
            }
			
            $where = implode('=',$where);

            $update = 'UPDATE '.$table.' SET ';
            $keys = array_keys($rows); 
            for($i = 0; $i < count($rows); $i++) {
                if(is_string($rows[$keys[$i]])){
                    $update .= $keys[$i].'="'.$rows[$keys[$i]].'"';
                } else {
                    $update .= $keys[$i].'='.$rows[$keys[$i]];
					}
                 
                if($i != count($rows)-1) {
                    $update .= ','; 
                }
            }
			
            $update .= ' WHERE '.$where;
            $query = @mysql_query($update);
            if($query) {
                return true; 
            } else {
                return false; 
				}
    }
	
	public function as_create($table, $cols, $values) {
		$insert = 'INSERT INTO '.$table.' ('.$cols.') ';

		for($i = 0; $i < count($values); $i++) {
			if(is_string($values[$i]))
				$values[$i] = '"'.$values[$i].'"';
		}
		
		$values = implode(',',$values);
		$insert .= ' VALUES ('.$values.')';
		$ins = @mysql_query($insert); 
			if($ins)
				return true; 
			else
				return mysql_error();
    }
	
	public function as_delete($table, $where) {
		$delete = 'DELETE FROM '.$table.' WHERE '.$where; 
		$del = @mysql_query($delete);
		
		if($del) {
			return true; 
		} else {
		   return false; 
		}
    }
	
	public function as_truncate($table) {
		$truncate = 'TRUNCATE TABLE '.$table; 
		$trunc = @mysql_query($truncate);
		
		if($trunc) {
			return true; 
		} else {
		   return false; 
			}
    }
	
	public function as_filter($val){
		$val = trim($val);
		$val = addslashes($val);
		$val = mysql_real_escape_string($val);
		return $val;
	}
	
	public function as_unescape($val) {
		$val = stripslashes($val);
		return $val;
	}
	
	public function as_get_browser(){
		return $_SERVER['HTTP_USER_AGENT'];
	}
	
	public function as_get_ip(){
		$ip = "";
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			} else {
				$ip = $_SERVER['REMOTE_ADDR'];
				}
		return $ip;
	}
	
	public function as_error_reporting($page, $msg){
		$body = "<html>
					<body>
						<table cellpadding='0' cellspacing='0' style='width:100%; border-left:solid 1px #ccc; border-right:solid 1px #ccc; border-bottom:solid 1px #ccc; padding:0;font-family:calibri, arial'>
							<tr>
								<td style='border-top:solid 1px #ccc; width:20%; padding:3px 7px' valign='top'>Date</td>
								<td style='border-top:solid 1px #ccc; width:80%; padding:3px 7px'>".date("M d Y H:i:s")."</td>
							</tr>
							<tr>
								<td style='border-top:solid 1px #ccc; width:20%; padding:3px 0px 3px 7px' valign='top'>Page</td>
								<td style='border-top:solid 1px #ccc; width:80%; padding:3px 0px 3px 7px'>".$page."</td>
							</tr>
							<tr>
								<td style='border-top:solid 1px #ccc; width:20%; padding:3px 7px' valign='top'>Error Message</td>
								<td style='border-top:solid 1px #ccc; width:80%; padding:3px 7px'>".$msg."</td>
							</tr>
						</table>
					</body>
				</html>";
				
		$email = new PHPMailer();
		$email -> From = 'no-reply@simpletruth.ph';
		$email -> FromName = "SimpleTruth";
		$email -> Subject = "Error Reporting";
		$email -> Body = $body;
		$email -> AddAddress('adrian.silva@lophils.com');
		$email -> IsHTML(true);
			
			if(!$email -> Send()) {
				echo $email -> ErrorInfo;
				}
	}
}
?>