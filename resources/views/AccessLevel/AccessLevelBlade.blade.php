@extends('AccessLevel.AccessLevelParent')
@section('content')
	<h1 align="center">Access Level Setting</h1>
	<h4 align="center">You can set anyonces privalage form here by type or particular</h4>
	<hr>
	<div class="container">
		<div class="row">
			<div class="col-sm-offset-4 col-sm-8">
				<div class="container">
					<!-- By Group or Particular -->
				    <div class="col-sm-6">
		    			<label >Select Type</label>
						<select class="form-control groupList" id="groupList">
						    <option>--- Select Type ---</option>
						    <option>Doctor</option>
						    <option>Patitent</option>
						    <option>Staff</option>
						</select>
	    			</div>

	    			<!-- By Group -->
				    <div class="col-sm-6" id = "memberListDiv">
		    			<label >Select type of Group</label>
						<select class="form-control memberList" id="memberList">
						    <option>All</option>
						    <option>TPN/18/01</option>
						    <option>TPN/18/02</option>
						    <option>TPN/18/03</option>
						    <option>TPN/18/04</option>
						    <option>TPN/18/05</option>
						    <option>TPN/18/06</option>
						    <option>TPN/18/07</option>
						    <option>TPN/18/08</option>
						</select>
	    			</div>
				</div>
				

    			
			</div>
			
		</div>
		<hr>
		<br>
		<!-- table -->
		<div class="row" id = "pluginListTable">
			<div class="col-sm-offset-4 col-sm-4">
				<div class="panel panel-default">
				    <div class="panel-heading">
				        <h4 class="panel-title">Set privilege</h4>
				    </div>
				    <table id="resp_table" class="table toggle-square table-bordered table-striped" data-filter="#table_search" data-page-size="40">
				        <thead>
		                    <tr>
		                        <th data-toggle="true">Modules</th>
		                        <th data-hide="phone,tablet">Enable/Disable</th>

		                    </tr>
				        </thead>
		                <tbody>
		                    <tr>
		                        <td><h4>All Modules</h4></td>
		                        <td></td>
		                    </tr>
		                    <tr>
		                        <td>All Modules (Only for Super Admin)</td>
		                        <td data-value=""><input type="checkbox" name="superadmin" id="superadmin"></td>
		                    </tr>
					        <tr>
					        	<td><h4>Settings</h4></td>
					        	<td></td>
					        </tr>
						    <tr>
						        <td>Financial Year Details</td>
						        <td data-value=""><input type="checkbox" name="financialyear" id="financialyear"></td>
						    </tr>
						    <tr>
						        <td>Hospital Registrartion</td>
						        <td data-value=""><input type="checkbox" name="hospitalregistration" id="hospitalregistration"></td>
						    </tr>
						    <tr>
						        <td>Add Department</td>
						        <td data-value=""><input type="checkbox" name="hospitaldepartment" id="hospitaldepartment"></td>
						    </tr>
					        <tr>
					        	<td>Add Employee Type</td>
					        	<td data-value=""><input type="checkbox" name="employeetype" id="employeetype"></td>
					        </tr>
					        <tr>
					        	<td>Privilages</td>
					        	<td data-value=""><input type="checkbox" name="privilage" id="privilage"></td>
					        </tr>
					        <tr>
					        	<td>Doctor Import</td>
					        	<td data-value=""><input type="checkbox" name="doctor_import" id="doctor_import"></td>
					        </tr>
					        <tr>
					        	<td>Staff Import</td>
					        	<td data-value=""><input type="checkbox" name="staff_import" id="staff_import"></td>
					        </tr>
					        <tr>
					        	<td>Patient Import</td>
					        	<td data-value=""><input type="checkbox" name="patient_import" id="patient_import">
					        	</td>
					        </tr>
					        <tr>
					        	<td>Users</td>
					        	<td data-value=""><input type="checkbox" name="users" id="users"></td>
					        </tr>
					        <tr>
					        	<td><h4>Hospital Bulidings</h4></td>
					        	<td></td>
					        </tr>
					        <tr>
					        	<td>Add Bulidings</td>
					        	<td data-value=""><input type="checkbox" name="buliding" id="buliding"></td>
					        </tr>
					        <tr>
					        	<td>Add Floor</td><td data-value=""><input type="checkbox" name="floor" id="floor"></td>
					        </tr>
					        <tr>
					        	<td><h4>Staff</h4></td>
					        	<td></td>
					        </tr>
					        <tr>
					        	<td>Staff Registrartion</td>
					        	<td data-value=""><input type="checkbox" name="staff" id="staff"></td>
					        </tr>
					        <tr>
					        	<td>Print List</td>
					        	<td data-value=""><input type="checkbox" name="staff_print" id="staff_print"></td>
					        </tr>
					        <tr>
					        	<td><h4>Doctor Details</h4></td>
					    	    <td></td>
					        </tr>
					        <tr>
					        	<td>Specialization</td>
					        	<td data-value=""><input type="checkbox" name="specialization" id="specialization"></td>
					        </tr>
					        <tr>
					        	<td>Designation</td>
					        	<td data-value=""><input type="checkbox" name="designation" id="designation"></td>
					        </tr>
					        <tr>
					        	<td>Doctor Registrartion</td><td data-value=""><input type="checkbox" name="doctor" id="doctor"></td>
					        </tr>
					        <tr>
					        	<td>Print List</td>
					        	<td data-value=""><input type="checkbox" name="doctor_print" id="doctor_print"></td>
					        </tr>
					        <tr>
					        	<td><h4>Laboratory login</h4></td>
					        	<td></td>
					        </tr>
					        <tr>
						        <td>Add Test</td>
						        <td data-value=""><input type="checkbox" name="addtest" id="addtest"></td>
						    </tr>
					        <tr>
					        	<td>New Appointment</td>
					        	<td data-value=""><input type="checkbox" name="testappointment" id="testappointment"></td>
					        </tr>
					        <tr>
					        	<td>Test result</td>
					        	<td data-value=""><input type="checkbox" name="testresult" id="testresult"></td>
					        </tr>
					        <tr>
					        	<td>View Test results</td>
					        	<td data-value=""><input type="checkbox" name="viewresult" id="viewresult"></td>
					        </tr>
					    </tbody>
				    </table>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="panel panel-default">
				    <div class="panel-heading">
				        <h4 class="panel-title">Set privilege</h4>
				    </div>
				    <table id="resp_table" class="table toggle-square table-bordered table-striped" data-filter="#table_search" data-page-size="40">
				        <thead>
		                    <tr>
		                        <th data-toggle="true">Modules</th>
		                        <th data-hide="phone,tablet">Enable/Disable</th>

		                    </tr>
				        </thead>
		                <tbody>
		                    <tr>
		                        <td><h4>All Modules</h4></td>
		                        <td></td>
		                    </tr>
		                    <tr>
		                        <td>All Modules (Only for Super Admin)</td>
		                        <td data-value=""><input type="checkbox" name="superadmin" id="superadmin"></td>
		                    </tr>
					        <tr>
					        	<td><h4>Settings</h4></td>
					        	<td></td>
					        </tr>
						    <tr>
						        <td>Financial Year Details</td>
						        <td data-value=""><input type="checkbox" name="financialyear" id="financialyear"></td>
						    </tr>
						    <tr>
						        <td>Hospital Registrartion</td>
						        <td data-value=""><input type="checkbox" name="hospitalregistration" id="hospitalregistration"></td>
						    </tr>
						    <tr>
						        <td>Add Department</td>
						        <td data-value=""><input type="checkbox" name="hospitaldepartment" id="hospitaldepartment"></td>
						    </tr>
					        <tr>
					        	<td>Add Employee Type</td>
					        	<td data-value=""><input type="checkbox" name="employeetype" id="employeetype"></td>
					        </tr>
					        <tr>
					        	<td>Privilages</td>
					        	<td data-value=""><input type="checkbox" name="privilage" id="privilage"></td>
					        </tr>
					        <tr>
					        	<td>Doctor Import</td>
					        	<td data-value=""><input type="checkbox" name="doctor_import" id="doctor_import"></td>
					        </tr>
					        <tr>
					        	<td>Staff Import</td>
					        	<td data-value=""><input type="checkbox" name="staff_import" id="staff_import"></td>
					        </tr>
					        <tr>
					        	<td>Patient Import</td>
					        	<td data-value=""><input type="checkbox" name="patient_import" id="patient_import">
					        	</td>
					        </tr>
					        <tr>
					        	<td>Users</td>
					        	<td data-value=""><input type="checkbox" name="users" id="users"></td>
					        </tr>
					        <tr>
					        	<td><h4>Hospital Bulidings</h4></td>
					        	<td></td>
					        </tr>
					        <tr>
					        	<td>Add Bulidings</td>
					        	<td data-value=""><input type="checkbox" name="buliding" id="buliding"></td>
					        </tr>
					        <tr>
					        	<td>Add Floor</td><td data-value=""><input type="checkbox" name="floor" id="floor"></td>
					        </tr>
					        <tr>
					        	<td><h4>Staff</h4></td>
					        	<td></td>
					        </tr>
					        <tr>
					        	<td>Staff Registrartion</td>
					        	<td data-value=""><input type="checkbox" name="staff" id="staff"></td>
					        </tr>
					        <tr>
					        	<td>Print List</td>
					        	<td data-value=""><input type="checkbox" name="staff_print" id="staff_print"></td>
					        </tr>
					        <tr>
					        	<td><h4>Doctor Details</h4></td>
					    	    <td></td>
					        </tr>
					        <tr>
					        	<td>Specialization</td>
					        	<td data-value=""><input type="checkbox" name="specialization" id="specialization"></td>
					        </tr>
					        <tr>
					        	<td>Designation</td>
					        	<td data-value=""><input type="checkbox" name="designation" id="designation"></td>
					        </tr>
					        <tr>
					        	<td>Doctor Registrartion</td><td data-value=""><input type="checkbox" name="doctor" id="doctor"></td>
					        </tr>
					        <tr>
					        	<td>Print List</td>
					        	<td data-value=""><input type="checkbox" name="doctor_print" id="doctor_print"></td>
					        </tr>
					        <tr>
					        	<td><h4>Laboratory login</h4></td>
					        	<td></td>
					        </tr>
					        <tr>
						        <td>Add Test</td>
						        <td data-value=""><input type="checkbox" name="addtest" id="addtest"></td>
						    </tr>
					        <tr>
					        	<td>New Appointment</td>
					        	<td data-value=""><input type="checkbox" name="testappointment" id="testappointment"></td>
					        </tr>
					        <tr>
					        	<td>Test result</td>
					        	<td data-value=""><input type="checkbox" name="testresult" id="testresult"></td>
					        </tr>
					        <tr>
					        	<td>View Test results</td>
					        	<td data-value=""><input type="checkbox" name="viewresult" id="viewresult"></td>
					        </tr>
					    </tbody>
				    </table>
				</div>
			</div>
		</div>
	</div>


	<script type="text/javascript">
		
	</script>
	<script type="text/javascript" src="{{url('/')}}/js/AccessLevel.js"></script>
@endsection