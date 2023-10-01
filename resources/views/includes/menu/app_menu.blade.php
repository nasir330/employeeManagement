<div id="left-sidebar" class="sidebar">
    <div class="row">
        <div class="col-auto text-white">
            <h4>{{Auth::user()->employees->firstName. ' '.Auth::user()->employees->lastName }}</h4>
        </div>
        <!-- <div class="col-auto d-flex justify-content-end">
            <a href="javascript:void(0)" class="menu_option float-right">
                <i style="font-size:22px;" class="fa-solid fa-bars" data-toggle="tooltip" data-placement="left"
                    title="Grid & List Toggle"></i>
            </a>
        </div> -->
    </div>
    <nav id="left-sidebar-nav" class="sidebar-nav">
        <ul class="metismenu">
            <li class="active">
                <a href="{{route('dashboard')}}">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            @if(Auth::user()->userType==1)
            <li>
                <a href="javascript:void(0)" class="has-arrow arrow-c">
                    <i class="fa-solid fa-user-tie"></i>
                    <span>Employee</span>
                </a>
                <ul>
                    <li>
                        <a href="{{route('admin.sendLink.employee')}}">
                            <i class="fa-solid fa-user-check"></i>
                            Send Link
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.add.employee')}}">
                            <i class="fa-solid fa-user-check"></i>
                            Add New
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.employee.list')}}">
                            <i class="fa-solid fa-user-group"></i>
                            Employee List
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)" class="has-arrow arrow-c">
                    <i class="fa-solid fa-user-tie"></i>
                    <span>Clients</span>
                </a>
                <ul>
                    <li>
                        <a href="{{route('admin.sendLink.client')}}">
                            <i class="fa-solid fa-user-check"></i>
                            Send Link
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.add.employee')}}">
                            <i class="fa-solid fa-user-check"></i>
                            Add New
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.employee.list')}}">
                            <i class="fa-solid fa-user-group"></i>
                            Clients List
                        </a>
                    </li>
                </ul>
            </li>
            @endif
         
            <li>
                <a href="javascript:void(0)" class="has-arrow arrow-c">
                    <i class="fa-solid fa-clipboard-user"></i>
                    <span>Project Manage</span>
                </a>
                <ul>
                    <li>
                        <a href="{{route('projects')}}">
                            <i class="fa-solid fa-user-check"></i>
                            Create Project
                        </a>
                    </li>
                    <li>
                        <a href="{{route('employee.assign')}}">
                            <i class="fa-solid fa-file-lines"></i>
                            Assign Employee
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)" class="has-arrow arrow-c">
                    <i class="fa-solid fa-clipboard-user"></i>
                    <span>Attendance</span>
                </a>
                <ul>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-user-check"></i>
                            Daily Attendance
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-file-lines"></i>
                            Attendance Report
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)" class="has-arrow arrow-c">
                    <i class="fa-solid fa-bed"></i>
                    <span>Leaves</span>
                </a>
                <ul>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-plus"></i>
                            Add Leaves
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-sliders"></i>
                            Manage Leaves
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)" class="has-arrow arrow-c">
                    <i class="fa-solid fa-coins"></i>
                    <span>Payrolls</span>
                </a>
                <ul>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-ticket"></i>
                            Create Payslip
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-list"></i>
                            Payslip List
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)" class="has-arrow arrow-c">
                    <i class="fa-solid fa-flag"></i>
                    <span>Holidays</span>
                </a>
                <ul>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-plus"></i>
                            Add Holiday
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-sliders"></i>
                            Manage Holiday
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0)" class="has-arrow arrow-c">
                    <i class="fa-solid fa-gear"></i>
                    <span>Settings</span>
                </a>
                <ul>
                    <li>
                        <a href="{{route('setting.profile')}}">
                            <i class="fa-solid fa-building"></i>
                            Company Details
                        </a>
                    </li>
                    <li>
                        <a href="{{route('departments')}}">
                            <i class="fa-solid fa-tags"></i>
                            Departments
                        </a>
                    </li>
                    <li>
                        <a href="{{route('designations')}}">
                            <i class="fa-solid fa-id-badge"></i>
                            Designation
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-calculator"></i>
                            Allowance & Deduction
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-money-bill-trend-up"></i>
                            Payscale
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-bed"></i>
                            Leave Type
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-mountain-sun"></i>
                            Shift
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0)">
                    <i class="fa-solid fa-user-gear"></i>
                    <span>Managers</span>
                </a>
            </li>
            <li>
                <a href="login.html">
                    <i class="fa-solid fa-file-csv"></i>
                    Activity Log
                </a>
            </li>

        </ul>
    </nav>
</div>