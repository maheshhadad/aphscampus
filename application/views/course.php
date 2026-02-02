<div class="content-wrapper">
		<div class="page_container">
		<div class="box">
				<h3>Course (<?php echo sizeof($course) ?>) <a href="javascript:;" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Add New Course</a></h3>
				<div style="padding-top: 50px;padding-left: 10px;padding-right: 10px">
				<div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover example" >
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Duration</th>
                                                    <th>Stared</th>
                                                    <th>Fees</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            $i=1;
                                            foreach($course as $c1)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?php echo  $i; ?></td>
                                                     <td><?php echo  $c1['name']; ?></td>
                                                      <td><?php echo  $c1['duration']; ?></td>
                                                       <td><?php echo  $c1['stared']; ?></td>
                                                       <td><?php echo  $c1['fees']; ?></td>
                                                       <td><input type="checkbox" class="change_status" data-table="course" value="1" data-id="<?php echo $c1['id']  ?>" <?php if($c1['status']==1) { echo "checked"; } ?>  name="status_<?php echo $c1['id']  ?>" > Active</td>
                                                    <td>
                                                       <td>
                                                           <a href="<?php echo base_url().'index.php/school/delete_course/'.$c1['id'] ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                        <a href="<?php echo base_url().'index.php/school/edit_course/'.$c1['id'] ?>" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
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
        <h4 class="modal-title">Add New Course</h4>
      </div>
      <div class="modal-body">
      	<form action="<?php  echo base_url().'index.php/school/course' ?>" id="add_course_form">
        <div class="form-group">
        	<label>Enter Course Name</label>
        	<input type="text" name="name" required="required" class="form-control" id="name" placeholder="Enter Class Name">
        </div>
        <div class="form-group">
            <label>Enter Course Duration</label>
            <input required="required" class="form-control" type="text" name="course_duration" id="course_duration" placeholder="Enter Course Duration">
        </div>
        <div class="form-group">
            <label>Enter Course Fees</label>
            <input type="text" required="required" class="form-control" name="course_fees" id="course_fees" placeholder="Enter Course Fees">
        </div>
        <div class="form-group">
            <label>Enter Course Stared</label>
            <input type="text" required="required" name="course_started" id="course_started" class="form-control" placeholder="Enter Course Started">
        </div>
        <div class="form-group">
        	<button class="btn btn-primary" type="submit">Add</button>
        </div>
       </form>
      </div>
    </div>

  </div>
</div>