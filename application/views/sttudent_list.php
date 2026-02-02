<div class="content-wrapper">
		<div class="page_container">
		<div class="box">
				<h3>Attendance</h3>
				<div style="padding-top: 50px;padding-left: 10px;padding-right: 10px">
				<div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover example" >
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php  
                                            $i=1;
                                            foreach($student_list as $student)
                                            {

                                              $all_count=sizeof($this->CM->select_data('attendance_manage','status',array('student_id'=>$student['id'])));
                                              $all_countp=sizeof($this->CM->select_data('attendance_manage','status',array('student_id'=>$student['id'],'status'=>'Present')));

                                            ?>
                                              <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $student['name']; ?></td>
                                                <td><?php echo $all_count*$all_countp/100; ?>%</td>
                                                <td><a href="<?php echo base_url().'index.php/attendance/add_attendance/'.$student['id'] ?>" class="btn btn-info"><i class="fa fa-eye"></i></td>
                                              </tr>
                                              <?php 
                                              $i++;
                                            }
                                              ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
		</div>
		</div>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Attendance</h4>
      </div>
      <div class="modal-body">
      	<form action="<?php  echo base_url().'index.php/school/Attendance' ?>" id="add_Attendance_form">
        <div class="form-group">
        	<label>Enter Attendance Name</label>
        	<input type="text" name="name" required="required" class="form-control" id="name" placeholder="Enter Class Name">
        </div>
        <div class="form-group">
            <label>Enter Attendance Duration</label>
            <input required="required" class="form-control" type="text" name="Attendance_duration" id="Attendance_duration" placeholder="Enter Attendance Duration">
        </div>
        <div class="form-group">
            <label>Enter Attendance Fees</label>
            <input type="text" required="required" class="form-control" name="Attendance_fees" id="Attendance_fees" placeholder="Enter Attendance Fees">
        </div>
        <div class="form-group">
            <label>Enter Attendance Stared</label>
            <input type="text" required="required" name="Attendance_started" id="Attendance_started" class="form-control" placeholder="Enter Attendance Started">
        </div>
        <div class="form-group">
        	<button class="btn btn-primary" type="submit">Add</button>
        </div>
       </form>
      </div>
    </div>

  </div>
</div>