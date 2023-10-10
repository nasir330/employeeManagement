<!-- Admin onselect info start -->
<div id="admin" class="card">
    <div class="card-header">
        Admin
    </div>
    <div class="card-body">
        <div class="row mb-2">
            <div class="col-md-6">
                <label for="adminPhone">Phone Number:</label>
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
                    <input type="tel" class="form-control" id="adminPhone" name="adminPhone">
                </div>
            </div>
            <div class="col-md-6">
                <label for="adminWhatsapp" class="mb-0">Whatsapp</label>
                <div class="input-group mb-2">
                    <input type="text" name="adminWhatsapp" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <label for="adminDepartment" class="mb-0">Department</label>
                <div class="input-group mb-2">
                    <select id="adminDepartment" name="adminDepartment" class="form-select form-control" required>
                        <option value="">--Select Department--</option>
                        @foreach($departments as $key=> $department)
                        <option value="{{$department->id}}">
                            {{$department->department}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <label for="adminDesignation" class="mb-0">Designation</label>
                <div class="input-group mb-2">
                    <select id="adminDesignation" name="adminDesignation" class="form-select form-control" required>

                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <label for="adminSalaryType" class="mb-0">Salary Type</label>
                <div class="input-group mb-2">
                    <select name="adminSalaryType" class="form-select form-control" required>
                        <option value="">--Salary Type--</option>
                        <option value="Monthly">Monthly</option>
                        <option value="Weekly">Weekly</option>
                        <option value="Daily">Daily</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <label for="adminPayScale" class="mb-0">Pay Scale</label>
                <div class="input-group mb-2">
                    <select name="adminPayScale" class="form-select form-control" required>
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
<!-- Admin onselect info end -->