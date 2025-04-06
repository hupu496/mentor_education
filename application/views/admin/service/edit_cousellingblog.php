<section class="content">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="box">
                	<div class="box-header with-border">
                    	<div class="box-title">
                        	<a href="<?php echo base_url('admin/service/cousellingblog_list') ;?>">
                            	<button class="btn btn-sm btn-success"><i class="fa fa-plus"></i>COUSELLING BLOG LIST</button>
                        	</a>
                        </div>
                        <!--<div class="pull-right"><a href="" class="btn btn-sm btn-primary"> STAFF LIST </a></div>-->
                    </div>
                    <div class="box-body">
						<form action="<?php echo base_url('admin/service/update_couselling');?>" enctype="multipart/form-data" method="POST">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                        	<div class="row form-group">
                                <div class="col-md-1"></div>
                                <div class="col-sm-12 col-md-12">                                
                                        
                                         <div class="row form-group">
                                            <label class="col-sm-12 col-md-2 col-form-label">Heading<span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                            <div id="inputContainer">
                                            <!-- Initial row -->
                                             <?php if (!empty($schedule['heading'])): ?>
                                             <?php foreach ($schedule['heading'] as $key => $event): ?>
                                           
                                                <div class="col-md-6">
                                                  <div class="input-field">
                                                    <input class="form-control" type="text" placeholder="Heading" name="heading[]" value="<?= $event; ?>" required>
                                                   </div>
                                                
                                                <button type="button" class="remove-btn btn btn-sm" onclick="removeRow(this)">Remove</button>
                                                </div>
                                                 <?php endforeach; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        
                                        <button type="button" class="add-row-btn btn btn-sm" onclick="addNewRow()">Add New Row</button>
                                        </div>
                                        </div>
                                        <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Heading Description<span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                        <input type="text" class="form-control" name="cousellingname" value="<?php echo $couselling_blog['cousellingname']; ?>">
                                        </div>
                                        </div>
                                          <div class="row form-group">
                                            <label class="col-sm-12 col-md-2 col-form-label">Description<span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <div id="inputContainer1">
                                            <!-- Initial row -->
                                               <?php if (!empty($schedule['description'])): ?>
                                             <?php foreach ($schedule['description'] as $key => $event): ?>
                                            <div class="input-row">
                                                
                                                <div class="col-md-6">
                                                  <div class="input-field">
                                                    <input class="form-control" type="text" placeholder="description" name="description[]" value="<?= $event; ?>" required>
                                                </div>
                                                
                                                <button type="button" class="remove-btn btn btn-sm" onclick="removeRow1(this)">Remove</button>
                                                </div>
                                            </div>
                                              <?php endforeach; ?>
                                                <?php endif; ?>
                                        </div>
                                        
                                        <button type="button" class="add-row-btn btn btn-sm" onclick="addNewRow1()">Add New Row</button>
                                        </div>
                                        </div>
                                         <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Standard Plan Price<span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                        <!-- <textarea cols="5" rows="4" class="form-control" name="standard_plan_price" placeholder="Write Plan Price..."></textarea> -->
                                        <input type="text" class="form-control" name="standard_plan_price" value="<?php echo $couselling_blog['standard_plan_price']; ?>">
                                        </div>
                                        </div>
                                         <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Premium Plan Price<span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                        <!-- <textarea cols="5" rows="4" class="form-control" name="preminum_plan_price" placeholder="Write Plan Price..."></textarea> -->
                                        <input type="text" class="form-control" name="preminum_plan_price" id="" value="<?php echo $couselling_blog['preminum_plan_price']; ?>" >
                                        </div>
                                        </div>
                                          <div class="row form-group">
                                            <label class="col-sm-12 col-md-2 col-form-label">Standard Text<span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <div id="inputContainer2">
                                            <!-- Initial row -->
                                             <?php if (!empty($schedule['standard_text'])): ?>
                                             <?php foreach ($schedule['standard_text'] as $key => $event): ?>
                                            <div class="input-row">
                                                
                                                <div class="col-md-6">
                                                  <div class="input-field">
                                                    <input class="form-control" type="text" placeholder="description" name="standard_text[]" value="<?= $event; ?>" required>
                                                </div>
                                                
                                                <button type="button" class="remove-btn btn btn-sm" onclick="removeRow2(this)">Remove</button>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                                <?php endif; ?>
                                        </div>
                                        
                                        <button type="button" class="add-row-btn btn btn-sm" onclick="addNewRow2()">Add New Row</button>
                                        </div>
                                        </div>
                                          <div class="row form-group">
                                            <label class="col-sm-12 col-md-2 col-form-label">Premium Text<span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <div id="inputContainer3">
                                            <!-- Initial row -->
                                             <?php if (!empty($schedule['premium_text'])): ?>
                                             <?php foreach ($schedule['premium_text'] as $key => $event): ?>
                                            <div class="input-row">
                                                
                                                <div class="col-md-6">
                                                  <div class="input-field">
                                                    <input class="form-control" type="text" placeholder="description" name="premium_text[]" value="<?= $event; ?>" required>
                                                </div>
                                                
                                                <button type="button" class="remove-btn btn btn-sm" onclick="removeRow3(this)">Remove</button>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                                <?php endif; ?>
                                        </div>
                                        
                                        <button type="button" class="add-row-btn btn btn-sm" onclick="addNewRow3()">Add New Row</button>
                                        </div>
                                        </div>
                                         
                                      
                                       
                        
                                  <div class="row">
                                  <div class="col-md-1"></div>
                                  <div class="col-md-2 text-center"> 
                                    <input type="submit"  class="btn btn-success btn-block btn-md"  />
                                </div>
                            </div>
                        </form>                    
                    </div>
               	</div>
         	</div>
       	</div>
    </section>
    <!-- /.content -->
<script>
  // Array to store the submitted data
        let coursesData = [];
        let idCounter = 1;
        
        // Function to add a new input row
        function addNewRow() {
            const container = document.getElementById('inputContainer');
            const newRow = document.createElement('div');
            newRow.className = 'input-row';
            
            newRow.innerHTML = `
                <div class="input-field">
                  <input class="form-control" type="text" placeholder="Heading" name="heading[]" required>
                </div>
                
                <button type="button" class="remove-btn btn btn-sm" onclick="removeRow(this)">Remove</button>
            `;
            
            container.appendChild(newRow);
        }
        
        // Function to remove an input row
        function removeRow(button) {
            const inputRows = document.querySelectorAll('.input-row');
            
            // Only remove if there's more than one row
            if (inputRows.length > 1) {
                button.parentElement.remove();
            } else {
                alert("At least one row is required!");
            }
        }
        // gdfgdfg
         function addNewRow1() {
            const container = document.getElementById('inputContainer1');
            const newRow = document.createElement('div');
            newRow.className = 'input-row';
            
            newRow.innerHTML = `
                <div class="input-field">
                  <input class="form-control" type="text" placeholder="Heading" name="description[]" required>
                </div>
                
                <button type="button" class="remove-btn btn btn-sm" onclick="removeRow1(this)">Remove</button>
            `;
            
            container.appendChild(newRow);
        }
        
        // Function to remove an input row
        function removeRow1(button) {
            const inputRows = document.querySelectorAll('.input-row');
            
            // Only remove if there's more than one row
            if (inputRows.length > 1) {
                button.parentElement.remove();
            } else {
                alert("At least one row is required!");
            }
        }
        // dsfasdf
         function addNewRow2() {
            const container = document.getElementById('inputContainer2');
            const newRow = document.createElement('div');
            newRow.className = 'input-row';
            
            newRow.innerHTML = `
                <div class="input-field">
                  <input class="form-control" type="text" placeholder="Heading" name="standard_text[]" required>
                </div>
                
                <button type="button" class="remove-btn btn btn-sm" onclick="removeRow2(this)">Remove</button>
            `;
            
            container.appendChild(newRow);
        }
        
        // Function to remove an input row
        function removeRow2(button) {
            const inputRows = document.querySelectorAll('.input-row');
            
            // Only remove if there's more than one row
            if (inputRows.length > 1) {
                button.parentElement.remove();
            } else {
                alert("At least one row is required!");
            }
        }
        function addNewRow3() {
            const container = document.getElementById('inputContainer3');
            const newRow = document.createElement('div');
            newRow.className = 'input-row';
            
            newRow.innerHTML = `
                <div class="input-field">
                  <input class="form-control" type="text" placeholder="Heading" name="premium_text[]" required>
                </div>
                
                <button type="button" class="remove-btn btn btn-sm" onclick="removeRow3(this)">Remove</button>
            `;
            
            container.appendChild(newRow);
        }
        
        // Function to remove an input row
        function removeRow3(button) {
            const inputRows = document.querySelectorAll('.input-row');
            
            // Only remove if there's more than one row
            if (inputRows.length > 1) {
                button.parentElement.remove();
            } else {
                alert("At least one row is required!");
            }
        }
</script> 