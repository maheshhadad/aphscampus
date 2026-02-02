<div class="content-wrapper">
		<div class="page_container">
		<div class="box">
				<h3>Edit Couse</h3>
				<div style="padding-top: 50px;padding-left: 10px;padding-right: 10px">
				<div class="row">
                   <div class="col-sm-3"></div>
                    <form action="<?php echo base_url().'index.php/school/edit_course/'.$course[0]['id'] ?>" id="update_course">
                    <div class="col-sm-6">
                        <div class="from-group">
                            <label>Course Name</label>
                            <input type="text" name="name" id="name" value="<?php echo $course[0]['name']; ?>" placeholder="Enter Course Name" class="form-control" />
                        </div><br>
                        <div class="form-group">
                            <label>Enter Course Duration</label>
                            <input required="required" value="<?php echo $course[0]['duration']; ?>" class="form-control" type="text" name="course_duration" id="course_duration" placeholder="Enter Course Duration">
                        </div><br>
                        <div class="form-group">
                            <label>Enter Course Fees</label>
                            <input type="text" required="required" class="form-control" value="<?php echo $course[0]['fees']; ?>" name="course_fees" id="course_fees" placeholder="Enter Course Fees">
                        </div><br>
                        <div class="form-group">
                            <label>Enter Course Stared</label>
                            <input type="text" required="required" name="course_started" id="course_started" value="<?php echo $course[0]['stared']; ?>" class="form-control" placeholder="Enter Course Started">
                        </div><br>
                            <br>
                            <div class="from-group">
                                <input class="btn btn-primary" type="submit" value="Update" />
                            </div><br>
                        </div>            
                </div>
            </div>
		</div>
		</div>
</div>
