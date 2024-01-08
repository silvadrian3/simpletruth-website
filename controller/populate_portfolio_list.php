<?php
	$get_portfolio_list = mysql_query("SELECT title, description, display_picture, video_url FROM portfolio");
	if(mysql_num_rows($get_portfolio_list)!=0) {
		$i = 0;
		
		while($extract_portfolio_list = mysql_fetch_array($get_portfolio_list)){
			extract($extract_portfolio_list);
			$hdportfolio = "";
			$v_title = $manager -> as_unescape($title);
			$v_description = $manager -> as_unescape($description);
			$v_display_picture = $manager -> as_unescape($display_picture);
			$v_video_id = $manager -> as_unescape($video_url);
			
			if(trim($v_display_picture) == ""){
				$v_display_picture = $curr_loc . "no-img.png";
			} else {
				$v_display_picture = $curr_loc . $v_display_picture;
				}
				
			if($i > 5) {
					$hdportfolio = "hidden_portfolio";
			}
			
			echo "
				<div id='' class='et_pb_portfolio_item et_pb_grid_item ".$hdportfolio."'>
				<span onclick=showPopup('".$v_video_id."')>
					<span class='et_portfolio_image'>
						<img src='".$v_display_picture."' alt='".$v_title."' width='400px' height='210px'/>
						<span class='et_overlay'></span>
					</span>
				</span>
				<h2>".$v_title."</h2>
				<i style='font-size:90%; color:#01b2ac'>".$v_description."</i>
			</div>\n\n";
			$i++;
		}
		echo "</div>";
	}
?>