<?php echo $this->Form->create($staff, ['type'=> 'file']); ?>
<fieldset>
    <legend>Add Staff</legend>
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
    		<input type="radio" name="gender" id="gender" value="male"> Male
    		<input type="radio" name="gender" id="gender" value="female"> Female
    		<input type="radio" name="gender" id="gender" value="others"> Others
    	</div>
    </div>
  	<div class="form-group">
      <label for="salary_range">Select a Salary Range</label>
      <select name="salary_range" class="form-control">
        <option value="10000-20000">10000-20000</option>
        <option value="21000-30000">21000-30000</option>
        <option value="31000-40000">31000-40000</option>
      </select>
  	</div>
    <div class="form-group">
      <?php echo $this->Form->input('file', ['type'=>'file', 'class'=> 'form-control', 'id'=>'file']); ?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->textarea('description', ['class'=> 'form-control', 'id'=>'description', 'placeholder'=>'description']); ?>
    </div>
    <div class="form-group">
      <label for="skills">Select your Skills: </label>
      <input type="checkbox" name="skills[]" value="web-design"> Web Design
      <input type="checkbox" name="skills[]" value="graphic-design"> Graphics Design
      <input type="checkbox" name="skills[]" value="web-development"> Web Development
      <input type="checkbox" name="skills[]" value="laravel"> Laravel
    </div>
    <div class="form-group">
      <?php echo $this->Form->input('phone', ['class'=> 'form-control', 'id'=>'phone', 'placeholder'=>'Your Phone']); ?>
    </div>
    <?php echo $this->Form->button(__('Add Staff'), ['class'=> 'btn btn-primary']); ?>
    <?php echo $this->html->link('Back', ['action'=>'index'], ['class'=> 'btn btn-primary']); ?>
  </fieldset>
<?php echo $this->Form->end(); ?>
