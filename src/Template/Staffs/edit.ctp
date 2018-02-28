<?php echo $this->Form->create($staff, ['type'=> 'file']); ?>
<fieldset>
    <legend>Edit Staff</legend>
    <div class="row">
	    <div class="form-group col-sm-6">
	      <?php echo $this->Form->input('first_name', ['class'=> 'form-control', 'id'=>'first_name', 'placeholder'=>'Fist Name']); ?>
	    </div>
	    <div class="form-group col-sm-6">
	      <?php echo $this->Form->input('last_name', ['class'=> 'form-control', 'id'=>'last_name', 'placeholder'=>'Last Name']); ?>
	    </div>
    </div>
    <div class="row">
      <div class="form-group col-sm-6">
        <?php echo $this->Form->input('email', ['class'=> 'form-control', 'type'=>'email', 'id'=>'email', 'placeholder'=>'Your Email']); ?>
      </div>
    	<div class="form-group col-sm-6">
    		<label for="gender">Select Gender</label>
    		<input type="radio" name="gender" id="gender" value="male" <?php if($staff->gender == 'male') echo "checked";  ?>> Male
    		<input type="radio" name="gender" id="gender" value="female" <?php if($staff->gender == 'female') echo "checked";  ?>> Female
    		<input type="radio" name="gender" id="gender" value="others" <?php if($staff->gender == 'others') echo "checked";  ?>> Others
    	</div>
    </div>
  	<div class="form-group">
      <label for="salary_range">Select a Salary Range</label>
      <select name="salary_range" class="form-control">
        <option value="10000-20000" <?php if($staff->salary_range == '10000-20000') echo "selected";  ?>>10000-20000</option>
        <option value="21000-30000" <?php if($staff->salary_range == '21000-30000') echo "selected";  ?>>21000-30000</option>
        <option value="31000-40000" <?php if($staff->salary_range == '31000-40000') echo "selected";  ?>>31000-40000</option>
      </select>
  	</div>
    <div class="form-group">
      <?php echo $this->Form->input('file', ['type'=>'file', 'class'=> 'form-control', 'id'=>'file']); ?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->textarea('description', ['class'=> 'form-control', 'id'=>'description', 'placeholder'=>'description']); ?>
    </div>
    <div class="form-group">
      <?php $skills = explode(',', $staff->skills); ?>
      <label for="skills">Select your Skills: </label>
      <input type="checkbox" name="skills[]" value="web-design" <?php if(in_array('web-design', $skills)) echo "checked"; ?>> Web Design
      <input type="checkbox" name="skills[]" value="graphic-design" <?php if(in_array('graphic-design', $skills)) echo "checked"; ?>> Graphics Design
      <input type="checkbox" name="skills[]" value="web-development" <?php if(in_array('web-development', $skills)) echo "checked"; ?>> Web Development
      <input type="checkbox" name="skills[]" value="laravel" <?php if(in_array('laravel', $skills)) echo "checked"; ?>> Laravel
    </div>
    <div class="form-group">
      <?php echo $this->Form->input('phone', ['class'=> 'form-control', 'id'=>'phone', 'placeholder'=>'Last Name']); ?>
    </div>
    <?php echo $this->Form->button(__('Update Staff'), ['class'=> 'btn btn-primary']); ?>
    
  </fieldset>
<?php echo $this->Form->end(); ?>
