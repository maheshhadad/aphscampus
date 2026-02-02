<div class="content-wrapper">
		<div class="page_container">
		<div class="box">
				<h3>Edit Attendance</h3>
				<div style="padding-top: 50px;padding-left: 10px;padding-right: 10px">
			   <div class="row">
          <div class="col-sm-12">

                <form action="<?php  echo base_url().'index.php/attendance/edit_attendance/'.$this->uri->segment(3); ?>" id="edit_Attendance_form">
                  <div class="form-group">
                    <label>Enter Status</label>
                    <input type="hidden" name="student_id" id="student_id" value="<?php echo $attendance[0]['student_id'] ?>">
                    <select required="required" class="form-control" name="status" id="status">
                        <option <?php if($attendance[0]['status']=='Present') { echo "selected"; } ?> >Present</option>
                        <option <?php if($attendance[0]['status']=='Apsent') { echo "selected"; } ?> >Apsent</option>
                    </select>
                  </div>
                  <div class="form-group">
                      <label>Select Date</label>
                      <input required="required" value="<?php echo $attendance[0]['date'] ?>" id="date" type="date" name="date" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Enter Remarks</label>
                      <textarea required="required"  name="remarks" id="remarks" class="form-control"><?php echo $attendance[0]['remarks'] ?></textarea>
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
</div>
