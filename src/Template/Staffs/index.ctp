<div class="row">
<h2>All Staffs <?php echo $this->Html->link('Add', ['action'=> 'add'], ['class'=> 'btn btn-primary pull-right']); ?></h2>
<table>
	<thead>
		<tr>
			<th width="20">Id</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th width="70">Gender</th>
			<th>Salary Range</th>
			<th>Image</th>
			<th>description</th>
			<th>skills</th>
			<th>Phone</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php if(!empty($staffs)) : ?>
		<?php foreach($staffs as $staff) : ?>
		<tr>
			<td width="20"><?php echo $staff->id; ?></td>
			<td><?php echo $staff->first_name; ?></td>
			<td><?php echo $staff->last_name; ?></td>
			<td><?php echo $staff->email; ?></td>
			<td width="70"><?php echo $staff->gender; ?></td>
			<td><?php echo $staff->salary_range; ?></td>
			<td><img src="<?php echo $staff->image; ?>" width="100" alt=""?></td>
			<td><?php echo $staff->description; ?></td>
			<td><?php echo $staff->skills; ?></td>
			<td><?php echo $staff->phone; ?></td>
			<td>
				<?php echo $this->html->link('view', ['action'=>'view', $staff->id], ['class'=> 'btn btn-primary']); ?>
	          <?php echo $this->html->link('edit', ['action'=>'Edit', $staff->id], ['class'=> 'btn btn-warning']); ?>
	          <?php echo $this->Form->postLink(
	          'Delete', ['action'=> 'delete', $staff->id], 
	          ['class'=> 'btn btn-danger'],
	          ['confirm'=> 'Are you Sure?']); 
	          ?>
			</td>
		</tr>
		<?php endforeach; ?>
		<?php endif; ?>
	</tbody>
</table>
</div>