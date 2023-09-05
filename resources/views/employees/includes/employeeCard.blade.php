 <!-- Employee onselect info start -->
 <div id="employee" class="card">
     <div class="card-header">
         Employee
     </div>
     <div class="card-body">
         <div class="col mb-2">
             <label for="employeePhone">Phone Number:</label>
             <div class="input-group">
                 <div class="input-group-prepend">
                     <div class="dropdown">
                         <button class="btn btn-secondary dropdown-toggle" type="button" id="countryDropdown"
                             data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <span class="flag-icon flag-icon-us"></span>
                         </button>
                         <div class="dropdown-menu" aria-labelledby="countryDropdown">
                             <a class="dropdown-item" href="#" data-code="+1" data-flag="us">
                                 <span class="flag-icon flag-icon-us"></span> United
                                 States (+1)
                             </a>
                             <a class="dropdown-item" href="#" data-code="+44" data-flag="gb">
                                 <span class="flag-icon flag-icon-gb"></span> United
                                 Kingdom (+44)
                             </a>
                             <!-- Add more dropdown items for each country -->
                         </div>
                     </div>
                 </div>
                 <div class="input-group-prepend">
                     <input style="width:80px;" type="text" class="form-control" id="countryCode" name="countryCode">
                 </div>
                 <input type="tel" class="form-control" id="employeePhone" name="employeePhone">
             </div>
         </div>
         <div class="col">
             <label for="employeeWhatsapp" class="mb-0">Whatsapp</label>
             <div class="input-group mb-2">
                 <input type="text" name="employeeWhatsapp" class="form-control">
             </div>
         </div>
         <div class="row mb-2">
             <div class="col-md-6">
                 <label for="employeeDepartment" class="mb-0">Department</label>
                 <div class="input-group mb-2">
                     <select id="employeeDepartment" name="department" class="form-select form-control" required>
                         <option value="">--Select Department--</option>
                         @foreach($departments as $key=> $department)
                         <option value="{{$department->id}}">
                             {{$department->department}}</option>
                         @endforeach
                     </select>
                 </div>
             </div>
             <div class="col-md-6">
                 <label for="employeeDesignation" class="mb-0">Designation</label>
                 <div class="input-group mb-2">
                     <select id="employeeDesignation" name="designation" class="form-select form-control" required>

                     </select>
                 </div>
             </div>
             <div class="col-md-6">
                 <label for="employeeSalaryType" class="mb-0">Salary Type</label>
                 <div class="input-group mb-2">
                     <select name="employeeSalaryType" class="form-select form-control" required>
                         <option value="">--Salary Type--</option>
                         <option value="Monthly">Monthly</option>
                         <option value="Weekly">Weekly</option>
                         <option value="Daily">Daily</option>
                     </select>
                 </div>
             </div>
             <div class="col-md-6">
                 <label for="employeePayScale" class="mb-0">Pay Scale</label>
                 <div class="input-group mb-2">
                     <select name="employeePayScale" class="form-select form-control" required>
                         <option value="">--Pay Scale--</option>
                         <option value="10000">10000</option>
                         <option value="2400">2400</option>
                         <option value="50">50</option>
                     </select>
                 </div>
             </div>

         </div>
     </div>
 </div>
 <!-- Employee onselect info end -->