<?php
	$get_client_list = mysql_query("SELECT client_name, project_name, logo_url FROM clients order by client_name");
	if(mysql_num_rows($get_client_list)!=0) {
		$i = 0;
		
		echo "<div class='et_pb_row et_pb_row_7'>";
		while($extract_client_list = mysql_fetch_array($get_client_list)){
			extract($extract_client_list);
			$v_client_name = $manager -> as_unescape($client_name);
			$v_project_name = $manager -> as_unescape($project_name);
			$v_logo_url = $manager -> as_unescape($logo_url);
			
			if(trim($v_logo_url) == ""){
				$v_logo_url = $curr_loc . "no-img.png";
			} else {
				$v_logo_url = $curr_loc . $v_logo_url;
				}
				
			if($i == 4) {
				echo "</div>\n<div class='et_pb_row et_pb_row_8'>";
			}
			
			if($i >= 8){
				
				if($i % 4 == 0) {
					echo "</div>\n<div class='et_pb_row et_pb_row_9 hidden_clients'>";
				}
			}
			
			echo "
			<div class='et_pb_column et_pb_column_1_4'>
				<div class=''>
					<img src='".$v_logo_url."' alt='".$v_client_name."' style='min-width:200px; min-height:200px; max-width:200px; max-height:200px'>
					<br/>
					".$v_client_name."
					<br/>
					<!--<i style='font-size:90%; color:#01b2ac'>".$v_project_name."</i>-->
				</div>
			</div>\n\n";
			$i++;
		}
		echo "</div>";
	}
?>