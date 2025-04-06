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
                    <div class="box-body">
						<form id="dynamicForm" action="<?php echo base_url('admin/service/courses_blog_desc_update/');?>" enctype="multipart/form-data" method="POST">
                        	<div class="row form-group">
                                <div class="col-md-1"></div>
                                <div class="col-sm-12 col-md-12">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                     
                                        <div class="col-md-6 col-12">
                                            <h4>First Round  Schedule:</h4>
                                            <div id="inputContainer">
                                            <!-- Initial row -->
                                            <?php if (!empty($schedule['Events'])): ?>
                                             <?php foreach ($schedule['Events'] as $key => $event): ?>
                                            <div class="input-row">
                                                <div class="input-field">
                                                     <input type="text" placeholder="Event Name" name="Events[]" value="<?= $event; ?>" required>
                                                </div>
                                                <div class="input-field">
                                                    <input type="text" placeholder="Date Information" name="Dates[]" value="<?= $schedule['Dates'][$key]; ?>" required>
                                                </div>
                                                <button type="button" class="remove-btn" onclick="removeRow(this)">Remove</button>
                                            </div>
                                             <?php endforeach; ?>
                <?php endif; ?>
                                        </div>
                                        
                                        <button type="button" class="add-row-btn" onclick="addNewRow()">Add New Row</button>
                                        </div>
                                      <div class="col-md-6 col-12">
                                          <h4>Registration Fee(Non Refundable):</h4>
                                      <div id="inputContainer1">
                                            <!-- Initial row -->
                                             <?php if (!empty($schedule['Institution_type'])): ?>
                                             <?php foreach ($schedule['Institution_type'] as $key => $type): ?>
                                            <div class="input-row">
                                                <div class="input-field">
                                                      <input type="text" placeholder="Institution Type" name="Institution_type[]" value="<?= $type; ?>" required>
                                                </div>
                                                <div class="input-field">
                                                    <input type="text" placeholder="Security Money" name="Security_Money[]" value="<?= $schedule['Security_Money'][$key]; ?>" required>
                                                </div>
                                                <button type="button" class="remove-btn" onclick="removeRow1(this)">Remove</button>
                                            </div>
                                              <?php endforeach; ?>
                                                <?php endif; ?>
                                        </div>
                                        
                                        <button type="button" class="add-row-btn" onclick="addNewRow1()">Add New Row</button>
                                      </div>
                                       <div class="col-md-6 col-12">
                                          <h4>Registration Fee(Refundable):</h4>
                                      <div id="inputContainer2">
                                            <!-- Initial row -->
                                              <?php if (!empty($schedule['Institution_type_refundable'])): ?>
                                             <?php foreach ($schedule['Institution_type_refundable'] as $key => $type): ?>
                                            <div class="input-row">
                                                <div class="input-field">
                                                    <input type="text" placeholder="Institution Type" name="Institution_type_refundable[]" value="<?= $type; ?>" required>
                                                </div>
                                                <div class="input-field">
                                                    <input type="text" placeholder="Security Money" name="Security_Money_refundable[]" value="<?= $schedule['Security_Money_refundable'][$key]; ?>" required>
                                                </div>
                                                <button type="button" class="remove-btn" onclick="removeRow2(this)">Remove</button>
                                            </div>
                                              <?php endforeach; ?>
                                                <?php endif; ?>
                                        </div>
                                        
                                        <button type="button" class="add-row-btn" onclick="addNewRow2()">Add New Row</button>
                                       </div>
                                          <div class="col-md-6 col-12">
                                             <h4>Second Round  (All India Quota):</h4>
                                        <div id="inputContainer3">
                                            <!-- Initial row -->
                                             <?php if (!empty($schedule['second_event'])): ?>
                                             <?php foreach ($schedule['second_event'] as $key => $type): ?>
                                            <div class="input-row">
                                                <div class="input-field">
                                                    <input type="text" placeholder="Events" name="second_event[]" value="<?= $type; ?>" required>
                                                </div>
                                                <div class="input-field">
                                                    <input type="text" placeholder="Dates" name="second_Date[]" value="<?= $schedule['second_Date'][$key]; ?>" required>
                                                </div>
                                                <button type="button" class="remove-btn" onclick="removeRow3(this)">Remove</button>
                                            </div>
                                              <?php endforeach; ?>
                                                <?php endif; ?>
                                        </div>
                                        
                                        <button type="button" class="add-row-btn" onclick="addNewRow3()">Add New Row</button>
                                          </div>

                                          <div class="col-md-6 col-12">
                                             <h4>Third Round  (All India Quota)::</h4>
                                        <div id="inputContainer4">
                                            <!-- Initial row -->
                                              <?php if (!empty($schedule['third_event'])): ?>
                                             <?php foreach ($schedule['third_event'] as $key => $type): ?>
                                            <div class="input-row">
                                                <div class="input-field">
                                                    <input type="text" placeholder="Events" name="third_event[]" value="<?= $type; ?>" required>
                                                </div>
                                                <div class="input-field">
                                                   <input type="text" placeholder="Dates" name="third_date[]" value="<?= isset($schedule['third_date'][$key]) ? $schedule['third_date'][$key] : ''; ?>" required>
                                                </div>
                                                <button type="button" class="remove-btn" onclick="removeRow4(this)">Remove</button>
                                            </div>
                                               <?php endforeach; ?>
                                                <?php endif; ?>
                                        </div>
                                        
                                        <button type="button" class="add-row-btn" onclick="addNewRow4()">Add New Row</button>
                                          </div>
                                           <div class="col-md-6 col-12">
                                             <h4>VACANCY ROUND 1 for Government Colleges:</h4>
                                        <div id="inputContainer5">
                                            <!-- Initial row -->
                                             <?php if (!empty($schedule['round_1_events'])): ?>
                                             <?php foreach ($schedule['round_1_events'] as $key => $type): ?>
                                            <div class="input-row">
                                                <div class="input-field">
                                                    <input type="text" placeholder="Events" name="round_1_events[]" value="<?= $type; ?>"   required>
                                                </div>
                                                <div class="input-field">
                                                    <input type="text" placeholder="Dates" name="round_1_dates[]" value="<?= $schedule['round_1_dates'][$key]; ?>" required>
                                                </div>
                                                <button type="button" class="remove-btn" onclick="removeRow5(this)">Remove</button>
                                            </div>
                                             <?php endforeach; ?>
                                                <?php endif; ?>
                                        </div>
                                        
                                        <button type="button" class="add-row-btn" onclick="addNewRow5()">Add New Row</button>
                                          </div>
                                           <div class="col-md-6 col-12">
                                             <h4>VACANCY ROUND 2 for Government Colleges:</h4>
                                        <div id="inputContainer6">
                                            <!-- Initial row -->
                                              <?php if (!empty($schedule['round_2_events'])): ?>
                                             <?php foreach ($schedule['round_2_events'] as $key => $type): ?>
                                            <div class="input-row">
                                                <div class="input-field">
                                                    <input type="text" placeholder="Events" name="round_2_events[]"  value="<?= $type; ?>"  required>
                                                </div>
                                                <div class="input-field">
                                                    <input type="text" placeholder="Dates" name="round_2_dates[]" value="<?= $schedule['round_2_dates'][$key]; ?>" required>
                                                </div>
                                                <button type="button" class="remove-btn" onclick="removeRow6(this)">Remove</button>
                                            </div>
                                            <?php endforeach; ?>
                                                <?php endif; ?>
                                        </div>
                                        
                                        <button type="button" class="add-row-btn" onclick="addNewRow6()">Add New Row</button>
                                          </div>
                                          <div class="col-md-6 col-12">
                                             <h4>VACANCY ROUND for Deemed Universities:</h4>
                                        <div id="inputContainer7">
                                            <!-- Initial row -->
                                             <?php if (!empty($schedule['Deemed_events'])): ?>
                                             <?php foreach ($schedule['Deemed_events'] as $key => $type): ?>
                                            <div class="input-row">
                                                <div class="input-field">
                                                    <input type="text" placeholder="Events" name="Deemed_events[]" value="<?= $type; ?>" required>
                                                </div>
                                                <div class="input-field">
                                                    <input type="text" placeholder="Dates" name="Deemed_dates[]" value="<?= $schedule['Deemed_dates'][$key]; ?>" required>
                                                </div>
                                                <button type="button" class="remove-btn" onclick="removeRow7(this)">Remove</button>
                                            </div>
                                            <?php endforeach; ?>
                                                <?php endif; ?>
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
                    <input type="text" placeholder="Event Name" name="Events[]" required>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Date Information" name="Dates[]" required>
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
                                                    <input type="text" placeholder="Institution Type" name="Institution_type[]" required>
                                                </div>
                                                <div class="input-field">
                                                    <input type="text" placeholder="Security Money" name="Security_Money[]" required>
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
                                                    <input type="text" placeholder="Institution Type" name="Institution_type_refundable[]" required>
                                                </div>
                                                <div class="input-field">
                                                    <input type="text" placeholder="Security Money" name="Security_Money_refundable[]" required>
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
                                                    <input type="text" placeholder="Events" name="second_event[]" required>
                                                </div>
                                                <div class="input-field">
                                                    <input type="text" placeholder="Dates" name="second_Date[]" required>
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
                                                    <input type="text" placeholder="Events" name="third_event[]" required>
                                                </div>
                                                <div class="input-field">
                                                    <input type="text" placeholder="Dates" name="third_date[]" required>
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
                                                    <input type="text" placeholder="Events" name="round_1_events[]" required>
                                                </div>
                                                <div class="input-field">
                                                    <input type="text" placeholder="Dates" name="round_1_dates[]" required>
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
          function addNewRow6() {
            const container = document.getElementById('inputContainer6');
            const newRow = document.createElement('div');
            newRow.className = 'input-row';
            
            newRow.innerHTML = `
                 <div class="input-field">
                                                    <input type="text" placeholder="Events" name="round_2_events[]" required>
                                                </div>
                                                <div class="input-field">
                                                    <input type="text" placeholder="Dates" name="round_2_dates[]" required>
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
                                                    <input type="text" placeholder="Events" name="Deemed_events[]" required>
                                                </div>
                                                <div class="input-field">
                                                    <input type="text" placeholder="Dates" name="Deemed_dates[]" required>
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
    