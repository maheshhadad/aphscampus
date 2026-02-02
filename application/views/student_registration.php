<div class="content-wrapper">
		<div class="page_container">
		<div class="box">
				<h3>Student (<?php echo sizeof($students) ?>) <a href="javascript:;" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Add New Student</a></h3>
				<div style="padding-top: 50px;padding-left: 10px;padding-right: 10px">
				<div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover example" >
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Father's Name</th>
                                                    <th>E-Mail</th>
                                                    <th>Category</th>
                                                    <th>Class</th>
                                                    <th>Date of Birth</th>
                                                    <th>Join Date</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                             <tbody>
                                            <?php 
                                            $i=1;
                                            foreach($students as $student)
                                            {
                                            ?>
                                                <tr class="odd gradeX">
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $student['name']; ?></td>
                                                     <td><?php echo $student['fname']; ?></td>
                                                     <td><?php echo $student['email']; ?></td>
                                                     <td><?php echo $student['category']; ?></td>
                                                     <td><?php echo $student['class']; ?></td>
                                                    <td><?php echo $student['dob']; ?></td>
                                                    <td><?php echo $student['join_date']; ?></td>
                                                   <td><input type="checkbox" class="change_status" data-table="student" value="1" data-id="<?php echo $student['id']  ?>" <?php if($student['status']==1) { echo "checked"; } ?>  name="status_<?php echo $student['id']  ?>" > Active</td>
                                                    <td>
                                                    	<a href="<?php echo base_url().'index.php/student/delete_student/'.$student['id'] ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    	<a href="<?php echo base_url().'index.php/student/edit_student/'.$student['id'] ?>" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                    </td>
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
        <h4 class="modal-title">Add New Student</h4>
      </div>
      <div class="modal-body">
      	<form action="<?php  echo base_url().'index.php/student/student_registration' ?>" id="add_student_form">
        <div class="form-group">
        	<label>Enter Student Name</label>
        	<input type="text" name="name" required="required" class="form-control" id="sname" placeholder="Enter Student Name">
        </div>
        <div class="form-group">
            <label>Enter Father Name</label>
            <input type="text" name="fname" required="required" class="form-control" id="fname" placeholder="Enter Father Name">
        </div>
        <div class="form-group">
            <label>Enter E-Mail </label>
            <input type="email" name="email" required="required" class="form-control" id="email_user" placeholder="Enter E-Mail">
        </div>
        <div class="form-group">
            <label>Enter studentegory</label>
            <select name="studentegory" id="studentegory" class="form-control">
                <option value=""> Select </option>
                <?php 
                foreach($all_studentegory as $student)
                {
                    ?>
                    <option><?php echo $student['name']; ?></option>
                    <?php 
                }
                ?>     
            </select>
        </div>
        <div class="form-group">
            <label>Enter Class</label>
            <select class="form-control" name="class" id="class">
                <option value=""> Select </option>
                <?php 
                foreach($classes as $class)
                {
                    ?>
                    <option><?php echo $class['name']; ?></option>
                    <?php 
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Enter Student DOB</label>
            <input type="date" name="dob" required="required" class="form-control" id="dob" placeholder="Enter DOB">
        </div>
        <div class="form-group">
            <label>Enter Join Date</label>
            <input type="date" name="join_date" required="required" class="form-control" id="join_date" placeholder="Enter Student Name">
        </div>
        <div class="form-group">
        	<button class="btn btn-primary" type="submit">Add</button>
        </div>
       </form>
      </div>
    </div>

  </div>
</div>