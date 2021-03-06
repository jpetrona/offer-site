<div class="box span12  form_member">
<div class="box-header">
	<h2><i class="halflings-icon white list"></i><span class="break"></span>MANAGER APPS</h2>
	<div class="box-icon">
		<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
		<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
	</div>
</div>
<div class="box-content">
<?php
$name_app="";
$version="";
$size="";
$link_offer="";
$producer="";
$os="";
$date_update="";
$content_app="";
$file_name="";
$view=0;

?>
<div style="height:40px;margin:5px;">
	<div style="float:right;">
		<span name="check_ssh" class="btn btn-info" href="#" id='button_add_app'>ADD APP</span>
	</div>
	<div style="clear:right;"></div>
</div>
<div id="reponse_post"></div>
<div class="box" style="margin:10px auto !important;padding:5px;width:700px;margin-bottom:10px;display:none" id="box_add_app">
	<div class="box-content form-horizontal" id="form_add_app">
		  <fieldset>
		  	<input type="hidden" name="id_app" value="">
			<div class="control-group">
			  <label class="control-label" for="typeahead">Name:</label>
			  <div class="controls">
				<input type="text" class="span6 typeahead" id="typeahead" name="name_app" value="<?php echo $name_app;?>">
			  </div>
			</div>
			
			<div class="control-group">
			  <label class="control-label" for="typeahead">Version:</label>
			  <div class="controls">
				<input type="text" class="span6 typeahead" id="typeahead" name="version" value="<?php echo $version;?>">
			  </div>
			</div>
			
			<div class="control-group">
			  <label class="control-label" for="typeahead">Size:</label>
			  <div class="controls">
				<input type="text" class="span6 typeahead" id="typeahead" name="size" value="<?php echo $size;?>">
			  </div>
			</div>


			
			<div class="control-group">
			  <label class="control-label" for="typeahead">Link offer:</label>
			  <div class="controls">
				<input type="text" class="span6 typeahead" id="typeahead" name="link_offer" value="<?php echo $link_offer;?>">
			  </div>
			</div>
			<div class="control-group">
			  <label class="control-label" for="typeahead">Producer:</label>
			  <div class="controls">
				<input type="text" class="span6 typeahead" id="typeahead" name="producer" value="<?php echo $producer;?>">
			  </div>
			</div>
			<div class="control-group">
			  <label class="control-label" for="typeahead">View:</label>
			  <div class="controls">
				<input type="text" class="span6 typeahead" id="typeahead" name="view" value="<?php echo $view;?>">
			  </div>
			</div>
			<div class="control-group">
			  <label class="control-label" for="typeahead">Hot:</label>
			  <div class="controls">
				<input type="checkbox" class="span6 typeahead" id="typeahead" name="hot" value="ON">
			  </div>
			</div>
			
			<div class="control-group">
			  <label class="control-label">Status</label>
			  <div class="controls">
				<select name="status_app">
					<option value="0" selected="selected">ON</option>
					<option value="1">OFF</option>
				</select>
			  </div>
			</div>
			<div class="control-group">
			  <label class="control-label" for="date01">OS</label>
			  <div class="controls">
				<select name="os">
					<option value="android"  selected="selected">Android</option>
					<option value="winphone">Window phone</option>
					<option value="ios">iOS</option>
				</select>
			  </div>
			</div>
			<div class="control-group">
			  <label class="control-label" for="date01">Day update</label>
			  
			  <div class="controls">
				<input type="text" class="input-xlarge datepicker" id="date03"  name="date_update" value="<?php echo $date_update;?>">
			  </div>
			</div>

			<div class="control-group">
			  <label class="control-label" for="fileInput">Image</label>
			  <div class="controls">
			  	<div id="form_images" style="float:left"></div>
				<form target="frame_upload" id="form_upload_file_app" action='./jsPost/upload_img.php' method='post' enctype="multipart/form-data">
					<input class="input-file uniform_on" id="fileInput"  name="image" type="file">
				</form>
				<div style="clear:left"></div>
				<iframe src="./jsPost/upload_img.php" id="frame_upload" name="frame_upload" style="width:0px;height:0px;border:0px;"></iframe>
			  </div>
			</div>          
			<div class="control-group">
			  <label class="control-label" for="ckeditor">Content</label>
			  <div class="controls">
				<textarea id="edit_app" rows="10" cols="80" name="content_app" ><?php echo $content_app;?></textarea>
			  </div>
			</div>
			  <button type="button" class="btn btn-primary" id="app_submit"></button>
			  <button type="reset" class="btn">Cancel</button>
		  </fieldset>
	</div>
</div>
<div class="container_table">
<table class="table table-bordered table-striped table-condensed" id="" aria-describedby="DataTables_Table_0_info">
		  <thead>
			  <tr role="row"><th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 166px;" aria-sort="ascending" aria-label="Username: activate to sort column descending">ID</th><th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 166px;" aria-sort="ascending" aria-label="Username: activate to sort column descending">Name</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 243px;" aria-label="Date registered: activate to sort column ascending">OS</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 133px;" aria-label="Role: activate to sort column ascending">Size</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 144px;" aria-label="Status: activate to sort column ascending">Version</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 297px;" aria-label="Actions: activate to sort column ascending">Status</th>
			  <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 297px;" aria-label="Actions: activate to sort column ascending">Actions</th>
			  </tr>
		  </thead>   
		  
	  <tbody role="alert" aria-live="polite" aria-relevant="all">
	<?php
		$listapp_query=mysqli_query($conn,"Select * from app_info");
		$i=0;
		if(mysqli_num_rows($listapp_query))
		while($row=mysqli_fetch_array($listapp_query))
		{
			if($i%2==0)
			{
				echo "<tr class='odd' id='app_id_".$row['id']."'>";
			}
			else
			{
				echo "<tr class='even' id='app_id_".$row['id']."'>";
			}
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['OS']."</td>";
			echo "<td>".$row['size']."</td>";
			echo "<td>".$row['version']."</td>";
			if($row['status']==0)
			{
				$status="<a class='mouse_pointer' onclick='status_off(".$row['id'].")'><center>ON</center></a>";
			}
			else
			{
				$status="<a class='mouse_pointer' onclick='status_on(".$row['id'].")'><center>OFF</center></a>";
			}
			echo "<td  id='status_".$row['id']."'>".$status."</td>";
			echo "<td class='center'><a class='btn btn-info' class='mouse_pointer' onclick='show_form_edit_app(".$row['id'].")'><i class='halflings-icon white edit'></i></a><a class='btn btn-danger' onclick='delete_app(".$row['id'].")'><i class='halflings-icon white trash'></i></a></td>";
			echo "</tr>";
		}
	?>
		</tbody>
</table>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type='text/javascript'>
function show_form_edit_app(id_app)
{
	$.post('./jsPost/form_edit_post.php',{id_app:id_app},function (data){
		if(data=="error")
		{
			alert("Id app don't exist! Please refresh and try again!");
		}
		else
		{
			$("#box_add_app").css("display","block");
			var info_app=data.split("||||");
			document.getElementsByName("id_app")[0].value=info_app[0];
			document.getElementsByName("name_app")[0].value=info_app[1];
			document.getElementsByName("os")[0].value=info_app[2];
			document.getElementsByName("size")[0].value=info_app[3];
			document.getElementsByName("version")[0].value=info_app[4];
			document.getElementsByName("link_offer")[0].value=info_app[5];
			if(info_app[6]!="")
			{
			document.getElementById("form_images").innerHTML="<img src='./<?php echo $dir_img;?>/"+info_app[6]+"' width='50px' height='50px' >";
			}
			document.getElementsByName("hot")[0].checked = false;
			document.getElementsByName("producer")[0].value=info_app[7];
			CKEDITOR.instances['edit_app'].setData(info_app[8]);
			document.getElementsByName("date_update")[0].value=info_app[9];
			document.getElementsByName("status_app")[0].value=info_app[10];
			document.getElementsByName("view")[0].value=info_app[11];
			if(info_app[12]=="ON")
			{
				document.getElementsByName("hot")[0].checked = true;
			}
			document.getElementById("app_submit").innerHTML="Edit app";
		}
	});
}
function status_on(id)
{
	$.post('./jsPost/status_app.php',{status:0,id:id},function (data){
			if(data=="oke")
			{
				document.getElementById("status_"+id).innerHTML="<a class='mouse_pointer' onclick='status_off("+id+")'><center>ON</center></a>";
			}
		});
}
function status_off(id)
{
	$.post('./jsPost/status_app.php',{status:1,id:id},function (data){
			if(data=="oke")
			{
				document.getElementById("status_"+id).innerHTML="<a class='mouse_pointer' onclick='status_on("+id+")'><center>OFF</center></a>";
			}
		});
}


	$(document).ready(function(){
			$( window ).load(function() {
				$("#box_add_app").css("display","none");
			});
			$("#button_add_app").click(function(){
				$("#box_add_app").css("display","block");
				document.getElementsByName("name_app")[0].value="";
				document.getElementsByName("version")[0].value="";
				document.getElementsByName("size")[0].value="";
				document.getElementsByName("link_offer")[0].value="";
				document.getElementsByName("producer")[0].value="";
				document.getElementsByName("date_update")[0].value="";
				document.getElementsByName("image")[0].files[0]="";
				document.getElementsByName("status_app")[0].value=0;
				document.getElementsByName("view").innerHTML=0;
				document.getElementById("form_images").innerHTML="";
				document.getElementById("app_submit").innerHTML="Add app";
				CKEDITOR.instances['edit_app'].setData("");
			});
			
			$("#app_submit").click(function(){
				var type_submit=document.getElementById("app_submit").innerHTML;
				if(type_submit=="Add app")
				{
					var name_app=document.getElementsByName("name_app")[0].value;
					var version=document.getElementsByName("version")[0].value;
					var size=document.getElementsByName("size")[0].value;
					var link_offer=document.getElementsByName("link_offer")[0].value;
					var producer=document.getElementsByName("producer")[0].value;
					var os=document.getElementsByName("os")[0].value;
					var view=document.getElementsByName("view")[0].value;
					var hot=document.getElementsByName("hot")[0].value;
					var date_update=document.getElementsByName("date_update")[0].value;
					var image=$("#form_images img").attr("src");
					if(image===undefined||image===null)
					{
						image="";
					}
					else
					{
						image=image.replace(/(.+)\//,"");
					}
					var content_app=CKEDITOR.instances['edit_app'].getData();
					var content_app=CKEDITOR.instances['edit_app'].getData();
					var	status_app=document.getElementsByName("status_app")[0].value;
					$.post('./jsPost/add_app.php',{name_app:name_app,version:version,size:size,link_offer:link_offer,producer:producer,os:os,date_update:date_update,view:view,content_app:content_app,image:image,status:status_app,hot:hot},function (data){
						if(data=="oke")
						{
							document.getElementsByName("name_app")[0].value="";
							document.getElementsByName("version")[0].value="";
							document.getElementsByName("size")[0].value="";
							document.getElementsByName("link_offer")[0].value="";
							document.getElementsByName("producer")[0].value="";
							document.getElementsByName("os")[0].value="";
							document.getElementsByName("date_update")[0].value="";
							document.getElementsByName("view")[0].value="";
							document.getElementsByName("status_app")[0].value=1;
							document.getElementById("form_images").innerHTML="";
							CKEDITOR.instances['edit_app'].setData("");
							window.location.reload();
						}
						else
						{
							alert(data);
							$("#box_add_app").css("display","block");
						}
					});
				}
				else
				if(type_submit=="Edit app")
				{
					var id=document.getElementsByName("id_app")[0].value;
					var name_app=document.getElementsByName("name_app")[0].value;
					var version=document.getElementsByName("version")[0].value;
					var size=document.getElementsByName("size")[0].value;
					var view=document.getElementsByName("view")[0].value;
					var link_offer=document.getElementsByName("link_offer")[0].value;
					var producer=document.getElementsByName("producer")[0].value;
					var os=document.getElementsByName("os")[0].value;
					var hot=document.getElementsByName("hot")[0].value;
					var date_update=document.getElementsByName("date_update")[0].value;
					var image=$("#form_images img").attr("src");
					image=image.replace(/(.+)\//,"");
					var content_app=CKEDITOR.instances['edit_app'].getData();
					var	status_app=document.getElementsByName("status_app")[0].value;
					$.post('./jsPost/edit_app.php',{id:id,name_app:name_app,version:version,size:size,link_offer:link_offer,producer:producer,os:os,date_update:date_update,content_app:content_app,image:image,status:status_app,view:view,hot:hot},function (data){
						if(data=="oke")
						{
							if(status_app==0)
							{
								status_app="<a class='mouse_pointer' onclick='status_off("+id+")'><center>ON</center></a>";
							}
							else
							{
								status_app="<a class='mouse_pointer' onclick='status_on("+id+")'><center>OFF</center></a>";
							}
							document.getElementById("app_id_"+id).innerHTML="<td>"+id+"</td><td>"+name_app+"</td><td>"+os+"</td><td>"+size+"</td><td>"+version+"</td><td  id='status_"+id+"'>"+status_app+"</td><td class='center'><a class='btn btn-info' class='mouse_pointer' onclick='show_form_edit_app("+id+")';><i class='halflings-icon white edit'></i></a><a class='btn btn-danger' onclick='delete_app("+id+")'><i class='halflings-icon white trash'></i></a></td>";
							document.getElementsByName("name_app")[0].value="";
							document.getElementsByName("version")[0].value="";
							document.getElementsByName("size")[0].value="";
							document.getElementsByName("link_offer")[0].value="";
							document.getElementsByName("producer")[0].value="";
							document.getElementsByName("view")[0].value="";
							document.getElementsByName("os")[0].value="";
							document.getElementsByName("date_update")[0].value="";
							document.getElementsByName("image")[0].files[0]="";
							document.getElementsByName("status_app")[0].value=1;
							document.getElementById("form_images").innerHTML="";
							CKEDITOR.instances['edit_app'].setData("");
							$("#box_add_app").css("display","none");
						}
						else
						{
							$("#box_add_app").css("display","none");
						}
					});
				}
			});
	});
	$("#fileInput").change(function(){

		document.getElementById("form_upload_file_app").submit();
	});
	function delete_app(id_app)
	{
		$("#box_add_app").css("display","none");
		if(confirm('Are you sure delete app id: '+id_app+' ???'))
		{
			$.post('./jsPost/delete_app.php',{id_app:id_app},function (data){
				if(data=="error")
				{
					alert("Delete error! Please try again!");
				}
				else
				{
					alert("Delete success id "+id_app+"!");
					document.getElementById("app_id_"+id_app).innerHTML="";
				}
			});
		}
	}
	function change_img(img)
	{
		if(img=="error")
		{
			alert("Upload error! Please try again!");
		}
		else
		{
			var filename=document.getElementById("form_images").innerHTML="<img src='./<?php echo $dir_img.'/'; ?>"+img+"' width='50px' height='50px' >";
		}
	}
	// Replace the <textarea id="editor1"> with a CKEditor
	// instance, using default configuration.
	CKEDITOR.replace( 'edit_app' );
</script>
</div>
</div>