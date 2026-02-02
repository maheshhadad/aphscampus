<div class="content-wrapper">
		<div class="page_container">
		<div class="box">
				<h3>Edit Class</h3>
				<div style="padding-top: 50px;padding-left: 10px;padding-right: 10px">
				<div class="row">
                   <div class="col-sm-3"></div>
                    <form action="<?php echo base_url().'index.php/school/edit_class/'.$classes[0]['id'] ?>" id="update_class">
                    <div class="col-sm-6">
                        <div class="from-group">
                            <label>Class Name</label>
                            <input type="text" name="name" id="name" value="<?php echo $classes[0]['name']; ?>" placeholder="Enter Class Name" class="form-control" />
                        </div><br>
                        <div class="from-group">
                            <label>Category</label>
                            <select class="form-control" name="cat" id="cat">
                                <option value=""> Select </option>
                                <?php 
                                foreach($cats as $c1)
                                {
                                    ?>
                                    <option <?php if($c1['name'] == $classes[0]['cat']) { echo "selected"; } ?> ><?php echo $c1['name']; ?></option>
                                    <?php 
                                }
                                ?>
                            </select>
                        </div><br>
                        <div class="from-group">
                            <input class="btn btn-primary" type="submit" value="Update" />
                        </div><br>
                    </div>            
                </div>
            </div>
		</div>
		</div>
</div>
