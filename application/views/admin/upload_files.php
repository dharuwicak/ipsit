<div class='container'>
	<table class="table table-hover">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Upload Date</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
				<?php if(is_array($files)) : ?>
				<?php foreach($files as $row) : ?>
				<?php 
				echo "<tr>";
		        echo          "<td>".$row['id']."</td>";
		        echo          "<td>".$row['title']."</td>";
		        echo          "<td>".$row['category']."</td>";
		        echo          "<td>".$row['date']."</td>";
		        echo          "<td><button class='btn' type='button'>Large button</button></td>";
		        echo        "</tr>"; 
				?>
				<?php endforeach; ?>
				<?php endif; ?>
			</tbody>
    </table>
		<?php echo form_open_multipart('admin/upload_file'); ?>
		<input type="file" name="file_upload" />
		<input type="submit" name="upload" value="upload"; />
		<php echo form_close(); ?>
</div>