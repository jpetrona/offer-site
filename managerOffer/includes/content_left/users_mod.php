<?php
	if(isset($_GET['from']))
	{
		$from=$_GET['from'];
		if($from=="")
		{
			$from=$first_week;
		}
		else
		{
			$from=date('Y-m-d',strtotime(addslashes($_GET['from'])));
		}
	}
	else
	{
		$from=$first_week;
	}
	if(isset($_GET['to']))
	{
		$to=$_GET['to'];
		if($to=="")
		{
			$to=$last_week;
		}
		else
		{
			$to=date('Y-m-d',strtotime(addslashes($_GET['to'])));
		}
	}
	else
	{
		$to=$last_week;
	}
	
?>
<div class="box span12  form_member">
<div class="box-header">
	<h2><i class="halflings-icon white list"></i><span class="break"></span>MANAGER MEMBERS</h2>
	<div class="box-icon">
		<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
		<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
	</div>
</div>
<div class="box-content-static">
		<div style="float:right;">
			<span name="check_ssh" class="btn btn-info" href="#" id="button_add_app" onclick="add_user()">ADD MEMBERS</span>
		</div>
	<div style="clear:right;"></div>
<div id="reponse_post"></div>
<div class="container_table">
<table style="" id="list_members" cellpadding="0" cellspacing="0" border="0" id="table" class="table table-bordered table-striped table-condensed">
	  <?php
			echo "<tr><td colspan='8'><center><h2>Statistics from the date $from to day $to</h2></center></td></tr>"
	  ?>
			  <tr><th>User Name</th><th>Email</th><th>Points</th><th>Money</th><th>Group Name</th><th >Active</th><th>Banned</th><th>Manager</th>
			  </tr>
		<?php 		
		if(isset($_GET['page'])&&$_GET['page']>0)
		{
			$limit=addslashes($_GET['page'])*$numSplitPage;
			$page=addslashes($_GET['page']);
		}
		else
		{
			$limit='0';
			$page='0';
		}
		$sumUsers=mysqli_query($conn,"SELECT * FROM members where groupName='$groupName' order by points desc");
		$users_query=mysqli_query($conn,"SELECT * FROM members where groupName='$groupName' order by points desc limit $limit,$numSplitPage") or die (mysqli_error());
		$sumPoint=0;
		while($user = mysqli_fetch_assoc($users_query)) {
			if($user['banned']==1)
			{
				$banned="<div class='ban_".$user['userName']."'><center><a  style='color:red' class='mousepointer' onclick=\"unban_user('".$user['userName']."')\">UNBAN</a></center></div>";
			}
			else
			{
				$banned="<div class='ban_".$user['userName']."'><center><a style='color:green' class='mousepointer' onclick=\"ban_user('".$user['userName']."')\">BAN</a></center></div>";
			}
			if($user['active']==0)
			{
				$verify="<div class='verify_".$user['userName']."'><center><a style='color:red' class='mousepointer' onclick=\"verify('".$user['userName']."')\">Verify</a></center></div>";
			}
			else
			{
				$verify="<span style='color:green'>Verified</span>";
			}
			$query_point=mysqli_query($conn,"Select sum(points) as sumpoints from leads where DATE(date)>='$from' and DATE(date)<='$to' and userName='".addslashes($user['userName'])."'");
			$row_point=mysqli_fetch_array($query_point);
			$sumpoints=$row_point['sumpoints'];
			if($sumpoints=="")
			{
				$sumpoints=0;
			}
			$sumPoint+=$user['points'];
			echo '<tr id="tr_'.$user['userName'].'">';
			echo '<td class="tb_break_word">'. $user['userName'] .'</td>';
			echo '<td class="tb_break_word">'. $user['email'] .'</td>';
			echo '<td class="tb_break_word">'. $sumpoints.'</td>';
			echo '<td class="tb_break_word">'. formatMoney($sumpoints*$ratio_vnd) .'</td>';
			//echo '<td>'. formatMoney($user['points']*200*30/100) .'</td>';
			//echo '<td>' . $user['leadedOffers'] . '</td>';
			//echo '<td>' . $user['ip'] . '</td>';
			//echo '<td>' . $user['port'] . '</td>';
			//echo '<td class="tb_break_word">' . substr($user['date'],0,10) . '</td>';
			echo '<td class="tb_break_word">' . $user['groupName'] . '</td>';
			echo '<td class="tb_break_word">' . $verify . '</td>';
			echo "<td class='tb_break_word'><div class='ban_".$user['userName']."'>$banned</td>";
			echo "<td class='tb_break_word'><center><a class='btn btn-warning button_tb manager mousepointer' onclick=\"mod_edit_user('".addslashes($user['userName'])."')\">EDIT</a></center></td>";
			echo '</tr>';
		}
	function formatMoney($number, $fractional=false)
	{ 
		if ($fractional) { 
			$number = sprintf('%.2f', $number); 
		} 
		while (true) { 
			$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number); 
			if ($replaced != $number) { 
				$number = $replaced; 
			} else { 
				break; 
			} 
		} 
		return $number; 
	}
				?>
</table>
</div>
<?php
	$num_row_users=mysqli_num_rows($sumUsers);
	$numRows=round($num_row_users/$numSplitPage);
	if(($numRows*$numSplitPage)<$num_row_users)
	{
		$numRows++;
	}
	if($numRows>0)
	{
	?>
	<div class="row-fluid">
	<div class="span12 center">
		<div class="dataTables_paginate paging_bootstrap pagination">
		<ul>
			<?php
				if($page!='0')
				{
					echo "<li class='prev'>";
					echo "<a href='./index.php?users=yes&page=0&from=$from&to=$to'>← Previous</a>";
					echo "</li>";
				}
				else
				{
					echo "<li class='prev disabled'>";
					echo "<a>← Previous</a>";
					echo "</li>";
				}
				for($i=1;$i<$numRows;$i++)
				{
					if($i==($page+1))
					{
					echo "<li class='active'><a>$i</a></li>";
					}
					else
					{
					echo "<li><a href='./index.php?users=yes&page=".($i-1)."&from=$from&to=$to'>$i</a></li>";
					}
				}
				if($page>=$numRows-2)
				{
					echo "<li class='next disabled'><a>Next → </a></li>";
				}
				else
				{
					echo "<li class='next'><a href='./index.php?users=yes&page=".($numRows-2)."&from=$from&to=$to'>Next → </a></li>";
				}
			?>
			
		</ul>
		</div>
	</div>
	</div>
	<?php
	}
?>
</div>
</div>