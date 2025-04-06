<style>
        .form-container {
            background-color: #f5f5f5;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .input-row {
            display: flex;
            margin-bottom: 15px;
            align-items: center;
        }
        .input-field {
            flex: 1;
            margin-right: 10px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background-color: #0066cc;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }
        button:hover {
            background-color: #0055aa;
        }
        .remove-btn {
            background-color: #ff4444;
        }
        .remove-btn:hover {
            background-color: #cc0000;
        }
        .add-row-btn {
            background-color: #28a745;
        }
        .add-row-btn:hover {
            background-color: #218838;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #0066cc;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    
</style>
<section class="content">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="box">
                	<div class="box-header with-border">
                    	<div class="box-title">
                        	<a href="<?php echo base_url('admin/service/admissionnews_list') ;?>">
                            	<button class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Admission News List</button>
                        	</a>
                        </div>
                    </div>
                    <div class="box-body">
						<form id="dynamicForm" action="<?php echo base_url('admin/service/insert_admissionnews/');?>" enctype="multipart/form-data" method="POST">
                        	<div class="row form-group">
                               
                                <div class="col-sm-12 col-md-12">
                                    <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Select Blog <span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                           <select class="form-control" name="subservice_id" id="courses" required>
                                            <?php if(!empty($servilist)){
                                                foreach($servilist as $value){ ?>
                                                 <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                                            <?php } }?>
                                           
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                            <h4>Exam Name:</h4>
                                        <div >
                                            <!-- Initial row -->
                                            <div class="input-row">
                                                <div class="input-field">
                                                    <input type="text" placeholder="Exam Name" name="exam_name" required>
                                                </div>
                                            </div>
                                        </div>
                                        
                                       
                                    </div>
                                     
                                    <div class="col-md-6 col-12">
                                            <h4>Quick Summary:</h4>
                                            <div id="inputContainer">
                                            <!-- Initial row -->
                                            <div class="input-row">
                                                <div class="input-field">
                                                    <input type="text" placeholder="Exam Particulars" name="Exam_Particulars[]" required>
                                                </div>
                                                <div class="input-field">
                                                    <input type="text" placeholder="Exam Details" name="ExamDetails[]" required>
                                                </div>
                                                <button type="button" class="remove-btn" onclick="removeRow(this)">Remove</button>  
                                            </div>
                                            
                                        </div>
                                            <button type="button" class="add-row-btn" onclick="addNewRow()">Add New Row</button>
                                    </div>
                                      <div class="col-md-6 col-12">
                                          <h4>Result Date and Registration Date :</h4>
                                      <div id="inputContainer1">
                                            <!-- Initial row -->
                                            <div class="input-row">
                                                <div class="input-field">
                                                    <input type="text" placeholder="Events" name="Events[]" required>
                                                </div>
                                                <div class="input-field">
                                                    <input type="text" placeholder="Dates" name="Dates[]" required>
                                                </div>
                                                <button type="button" class="remove-btn" onclick="removeRow1(this)">Remove</button>
                                            </div>
                                        </div>
                                        
                                        <button type="button" class="add-row-btn" onclick="addNewRow1()">Add New Row</button>
                                      </div>
                                       <div class="col-md-6 col-12">
                                          <h4>Exam Eligibility Criteria:</h4>
                                      <div id="inputContainer2">
                                            <!-- Initial row -->
                                            <div class="input-row">
                                                <div class="input-field">
                                                    <input type="text" placeholder="Entrance Exam" name="EntranceExam[]" required>
                                                </div>
                                                <div class="input-field">
                                                    <input type="text" placeholder="Eligibility Criteria" name="EligibilityCriteria[]" required>
                                                </div>
                                                <button type="button" class="remove-btn" onclick="removeRow2(this)">Remove</button>
                                            </div>
                                        </div>
                                        
                                        <button type="button" class="add-row-btn" onclick="addNewRow2()">Add New Row</button>
                                       </div>
                                          <div class="col-md-6 col-12">
                                             <h4>Exam Pattern :</h4>
                                        <div id="inputContainer3">
                                            <!-- Initial row -->
                                            <div class="input-row">
                                                <div class="input-field">
                                                    <input type="text" placeholder="Sections" name="Sections[]" required>
                                                </div>
                                                <div class="input-field">
                                                    <input type="text" placeholder="Allotted Time" name="AllottedTime[]" required>
                                                </div>
                                                <div class="input-field">
                                                    <input type="text" placeholder="Questions" name="Questions[]" required>
                                                </div>
                                                <button type="button" class="remove-btn" onclick="removeRow3(this)">Remove</button>
                                            </div>
                                        </div>
                                        
                                        <button type="button" class="add-row-btn" onclick="addNewRow3()">Add New Row</button>
                                          </div>

                                          <div class="col-md-6 col-12">
                                             <h4>Registration Process :</h4>
                                        <div id="inputContainer4">
                                            <!-- Initial row -->
                                            <div class="input-row">
                                                <div class="input-field">
                                                    <input type="text" placeholder="Registration Process" name="RegistrationProcess[]" required>
                                                </div>
                                                
                                                <button type="button" class="remove-btn" onclick="removeRow4(this)">Remove</button>
                                            </div>
                                        </div>
                                        
                                        <button type="button" class="add-row-btn" onclick="addNewRow4()">Add New Row</button>
                                          </div>
                                           <div class="col-md-6 col-12">
                                             <h4>Documents Required at the time of Admission :</h4>
                                        <div id="inputContainer5">
                                            <!-- Initial row -->
                                            <div class="input-row">
                                                <div class="input-field">
                                                    <input type="text" placeholder="Events" name="DocumentsRequired[]" required>
                                                </div>
                                                
                                                <button type="button" class="remove-btn" onclick="removeRow5(this)">Remove</button>
                                            </div>
                                        </div>
                                        
                                        <button type="button" class="add-row-btn" onclick="addNewRow5()">Add New Row</button>
                                          </div>
                                           <div class="col-md-6 col-12">
                                             <h4>Accepting Colleges Seats Intake:</h4>
                                        <div id="inputContainer6">
                                            <!-- Initial row -->
                                            <div class="input-row">
                                                <div class="input-field">
                                                    <input type="text" placeholder="Name Program" name="Nameprogram[]" required>
                                                </div>
                                                <div class="input-field">
                                                    <input type="text" placeholder="Campus" name="Campus[]" required>
                                                </div>
                                                  <div class="input-field">
                                                    <input type="text" placeholder="Seats" name="Seats[]" required>
                                                </div>
                                                <button type="button" class="remove-btn" onclick="removeRow6(this)">Remove</button>
                                            </div>
                                        </div>
                                        
                                        <button type="button" class="add-row-btn" onclick="addNewRow6()">Add New Row</button>
                                          </div>
                                          <div class="col-md-6 col-12">
                                             <h4>Fees Session:</h4>
                                        <div id="inputContainer7">
                                            <!-- Initial row -->
                                            <div class="input-row">
                                                <div class="input-field">
                                                    <input type="text" placeholder="Program" name="Program[]" required>
                                                </div>
                                                <div class="input-field">
                                                    <input type="text" placeholder="Fees" name="fee[]" required>
                                                </div>
                                                <button type="button" class="remove-btn" onclick="removeRow7(this)">Remove</button>
                                            </div>
                                        </div>
                                        
                                        <button type="button" class="add-row-btn" onclick="addNewRow7()">Add New Row</button>
                                          </div>
                                        <button type="submit">Submit Data</button>
                                 
                                
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
                    <input type="text" placeholder="Exam Particulars" name="Exam_Particulars[]" required>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Exam Details" name="ExamDetails[]" required>
                </div>
                <button type="button" class="remove-btn" onclick="removeRow(this)">Remove</button>
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
        // Registration fee non refundable
          function addNewRow1() {
            const container = document.getElementById('inputContainer1');
            const newRow = document.createElement('div');
            newRow.className = 'input-row';
            
            newRow.innerHTML = `
                 <div class="input-field">
                                                    <input type="text" placeholder="Events" name="Events[]" required>
                                                </div>
                                                <div class="input-field">
                                                    <input type="text" placeholder="Dates" name="Dates[]" required>
                                                </div>
                                                <button type="button" class="remove-btn" onclick="removeRow1(this)">Remove</button>
                                            </div>
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
        // Refundable
         function addNewRow2() {
            const container = document.getElementById('inputContainer2');
            const newRow = document.createElement('div');
            newRow.className = 'input-row';
            newRow.innerHTML = `
                 <div class="input-field">
                                                    <input type="text" placeholder="Entrance Exam" name="EntranceExam[]" required>
                                                </div>
                                                <div class="input-field">
                                                    <input type="text" placeholder="Eligibility Criteria" name="EligibilityCriteria[]" required>
                                                </div>
                                                <button type="button" class="remove-btn" onclick="removeRow2(this)">Remove</button>
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
        // second evenet
          function addNewRow3() {
            const container = document.getElementById('inputContainer3');
            const newRow = document.createElement('div');
            newRow.className = 'input-row';
            
            newRow.innerHTML = `
                 <div class="input-field">
                                                    <input type="text" placeholder="Sections" name="Sections[]" required>
                                                </div>
                                                <div class="input-field">
                                                    <input type="text" placeholder="Allotted Time" name="AllottedTime[]" required>
                                                </div>
                                                 <div class="input-field">
                                                    <input type="text" placeholder="Questions" name="Questions[]" required>
                                                </div>
                                                <button type="button" class="remove-btn" onclick="removeRow3(this)">Remove</button>
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
        // third event
       function addNewRow4() {
            const container = document.getElementById('inputContainer4');
            const newRow = document.createElement('div');
            newRow.className = 'input-row';
            
            newRow.innerHTML = `
                 <div class="input-field">
                                                    <input type="text" placeholder="Registration Process" name="RegistrationProcess[]" required>
                                                </div>
                                                <button type="button" class="remove-btn" onclick="removeRow4(this)">Remove</button>
            `;
            
            container.appendChild(newRow);
        }
        
        // Function to remove an input row
        function removeRow4(button) {
            const inputRows = document.querySelectorAll('.input-row');
            
            // Only remove if there's more than one row
            if (inputRows.length > 1) {
                button.parentElement.remove();
            } else {
                alert("At least one row is required!");
            }
        }
            // first round of event
             function addNewRow5() {
            const container = document.getElementById('inputContainer5');
            const newRow = document.createElement('div');
            newRow.className = 'input-row';
            
            newRow.innerHTML = `
                 <div class="input-field">
                                                    <input type="text" placeholder="Documents Required" name="DocumentsRequired[]" required>
                                                </div>
                                                <button type="button" class="remove-btn" onclick="removeRow5(this)">Remove</button>
            `;
            
            container.appendChild(newRow);
        }
        
        // Function to remove an input row
        function removeRow5(button) {
            const inputRows = document.querySelectorAll('.input-row');
            
            // Only remove if there's more than one row
            if (inputRows.length > 1) {
                button.parentElement.remove();
            } else {
                alert("At least one row is required!");
            }
        }
            // first round of event
     function addNewRow6() {
            const container = document.getElementById('inputContainer6');
            const newRow = document.createElement('div');
            newRow.className = 'input-row';
            
            newRow.innerHTML = `
                 <div class="input-field">
                    <input type="text" placeholder="Name of the program" name="Nameprogram[]" required>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Campus" name="Campus[]" required>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Campus" name="Seats[]" required>
                    </div>
                    <button type="button" class="remove-btn" onclick="removeRow6(this)">Remove</button>
            `;
            
            container.appendChild(newRow);
        }
        
        // Function to remove an input row
         function removeRow6(button) {
            const inputRows = document.querySelectorAll('.input-row');
            
            // Only remove if there's more than one row
            if (inputRows.length > 1) {
                button.parentElement.remove();
            } else {
                alert("At least one row is required!");
            }
        }       
          function addNewRow7() {
            const container = document.getElementById('inputContainer7');
            const newRow = document.createElement('div');
            newRow.className = 'input-row';
            
            newRow.innerHTML = `
                 <div class="input-field">
                                                    <input type="text" placeholder="Program" name="Program[]" required>
                                                </div>
                                                <div class="input-field">
                                                    <input type="text" placeholder="Fee" name="fee[]" required>
                                                </div>
                                                <button type="button" class="remove-btn" onclick="removeRow7(this)">Remove</button>
            `;
            
            container.appendChild(newRow);
        }
        
        // Function to remove an input row
         function removeRow7(button) {
            const inputRows = document.querySelectorAll('.input-row');
            
            // Only remove if there's more than one row
            if (inputRows.length > 1) {
                button.parentElement.remove();
            } else {
                alert("At least one row is required!");
            }
        }           
    </script>
    