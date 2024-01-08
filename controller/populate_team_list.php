<?php
	$get_team_list = mysql_query("SELECT CONCAT(firstname, ' ', lastname) as complete_name, job_title, avatar_url FROM team order by list_order");
	if(mysql_num_rows($get_team_list)!=0) {
		$i = 0;
		
		while($extract_team_list = mysql_fetch_array($get_team_list)){
			extract($extract_team_list);
			$hdteam = "";
			$v_avatar_url = $manager -> as_unescape($avatar_url);
			$v_complete_name = $manager -> as_unescape($complete_name);
			$v_job_title = $manager -> as_unescape($job_title);
			
			if(trim($avatar_url) == ""){
				$v_avatar_url = $curr_loc . "no-img.png";
			} else {
				$v_avatar_url = $curr_loc . $v_avatar_url;
				}
			
			if($i > 5) {
					$hdteam = "hidden_team";
			}

				echo "
				<div id='' class='et_pb_team_item et_pb_grid_item ".$hdteam."'>
						<span class='et_portfolio_image'>
							<img src='".$v_avatar_url."' alt='".$v_complete_name."' width='300px' height='530px' />
						</span>
					<h4 style='margin-top:10px; margin-bottom:-10px'><span class='crew_cl'>".trim($v_complete_name)."</span></h4>
					<span class='et_pb_member_position'>".trim($v_job_title)."</span>
				</div>\n\n";
			$i++;
		}
	}
?>
