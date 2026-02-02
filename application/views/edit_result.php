<div class="content-wrapper">
		<div class="page_container">
		<div class="box">
				<h3>Edit Results</h3>
				<div style="padding-top: 50px;padding-left: 10px;padding-right: 10px">
				<div class="table-responsive">
              <form action="<?php  echo base_url().'index.php/result/edit_result/'.$this->uri->segment(3) ?>" id="edit_result_form">
        <div class="form-group">
          <label>Select Student</label>
          <select required="required" name="student" id="select_student" class="form-control">
            <option value="">Select</option>
            <?php 
            foreach($all_student as $student)
            {
              ?>
              <option <?php if($all_result[0]['student_id']==$student['id']) { echo 'selected'; } ?> id="st_<?php echo $student['id'] ?>" data-val="<?php echo $student['class']  ?>" value="<?php echo $student['id'] ?>"><?php echo $student['name']; ?></option>
              <?php 
            }
            ?>
          </select>
        </div>
        <div class="form-group">
            <label>Select Exam</label>
            <select required="required" name="exam" id="exam" class="form-control">
            <option value="">Select</option>
            <?php 
            foreach($all_exam as $exam)
            {
              ?>
              <option  <?php if($all_result[0]['exam_name']==$exam['title']) { echo 'selected'; } ?>><?php echo $exam['title'] ?></option>
              <?php 
            }
            ?>
          </select>
        </div>
        <div class="form-group">
            <label>Result</label>
            <input required="required" value="<?php echo $all_result[0]['result'] ?>" tyoe="text" name="result" id="result" class="form-control" placeholder="Result" />
        </div>
        <div class="form-group">
          <button class="btn btn-primary" type="submit">Update</button>
        </div>
       </form>
          </div>
      </div>
		</div>
		</div>
</div>
