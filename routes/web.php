<?php

use App\Http\Controllers\Clients\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\userController;
use App\Http\Controllers\Employees\EmployeeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Employees\EmployeeProjectController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\DesignationsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[AppController::class, 'index']);

Route::get('/password-reset-notification', function () {
    return view('notification.password-request');
})->name('password.reset.notification');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->prefix('admin')->group(function () {
    //employees routes
    Route::get('/employee-list', [userController::class, 'employeeList'])->name('admin.employee.list');
    Route::get('/client-list', [userController::class, 'clientList'])->name('admin.client.list');
   
    Route::get('/export-users',[userController::class, 'exportUser'])->name('exportUser');
    Route::get('/send-employee-link', [EmployeeController::class, 'sendLink'])->name('admin.sendLink.employee');
    Route::post('/send-employee-link', [EmployeeController::class, 'sendLinkStore'])->name('admin.sendLink.employee');
    Route::get('/send-client-link', [ClientController::class, 'sendLink'])->name('admin.sendLink.client');
    Route::post('/send-client-link', [ClientController::class, 'sendLinkStore'])->name('admin.sendLink.client');

   
    Route::get('/add-employee', [userController::class, 'createEmployee'])->name('admin.add.employee');
    Route::post('/add-employee', [userController::class, 'storeEmployee'])->name('admin.add.employee');
    Route::get('/add-client', [userController::class, 'createClient'])->name('admin.add.client');
    Route::post('/add-client', [userController::class, 'storeClient'])->name('admin.add.client');
    Route::get('/employee-view/{id}',[UserController::class,'viewEmployee'])->name('admin.view.employee');
    Route::get('/client-view/{id}',[UserController::class,'viewClient'])->name('admin.view.client');
    Route::get('/employee-edit/{id}',[UserController::class,'editEmployee'])->name('admin.edit.employee');
    Route::get('/client-edit/{id}',[UserController::class,'editClient'])->name('admin.edit.client');
    Route::get('/employee-delete/{id}',[UserController::class,'deleteEmployee'])->name('admin.delete.employee');
    Route::get('/client-delete/{id}',[UserController::class,'deleteClient'])->name('admin.delete.client');
    Route::post('/employee-photo-update',[UserController::class,'photoUpdateEmployee'])->name('admin.photoUpdate.employee');
    Route::post('/client-photo-update',[UserController::class,'photoUpdateClient'])->name('admin.photoUpdate.client');
    Route::post('/employee-info-update',[UserController::class,'infoUpdateEmployee'])->name('admin.infoUpdate.employee');
    Route::post('/employee-company-info-update',[UserController::class,'companyInfoUpdateEmployee'])->name('admin.companyInfoUpdate.employee');
    Route::post('/employee-financial-info-update',[UserController::class,'financialInfoUpdateEmployee'])->name('admin.financialInfoUpdate.employee');
    Route::post('/client-info-update',[UserController::class,'infoUpdateClient'])->name('admin.infoUpdate.client');
    Route::post('/client-company-info-update',[UserController::class,'companyInfoUpdateClient'])->name('admin.companyInfoUpdate.client');
    Route::post('/client-financial-info-update',[UserController::class,'financialInfoUpdateClient'])->name('admin.financialInfoUpdate.client');
    
    //projects
    Route::get('projects',[ProjectController::class,'index'])->name('projects');
    Route::post('add-projects',[ProjectController::class,'store'])->name('add.project');
    Route::get('employee-assign-projects',[ProjectController::class,'assignEmployee'])->name('employee.assign');
    Route::post('employee-assign-projects',[ProjectController::class,'storeAssignEmployee'])->name('employee.assign');

    //company profile
    route::get('/setting-profile',[CompanyProfileController::class, 'index'])->name('setting.profile');
    route::post('/setting-profile-company-details',[CompanyProfileController::class, 'storeCompanyDetails'])->name('setting.profile.companyDetails');
    route::post('/setting-profile-logo-header-footer',[CompanyProfileController::class, 'storeLogoHeaderFooter'])->name('setting.profile.logoHeaderFooter');
    route::post('/setting-profile-payment-account',[CompanyProfileController::class, 'storePaymentAccount'])->name('setting.profile.paymentAccount');
    
    //Departments
    route::get('/departments',[DepartmentsController::class, 'index'])->name('departments');
    route::post('/add-departments',[DepartmentsController::class, 'store'])->name('add.departments');
    route::get('/edit-departments/{id}',[DepartmentsController::class, 'edit'])->name('edit.departments');
    route::post('/update-departments',[DepartmentsController::class, 'update'])->name('update.departments');
    route::get('/fetch-admin-department',[DepartmentsController::class, 'fetchAdminDepartment'])->name('admin.fetch.departents');
    
   
    //Designation
    route::get('/designations',[DesignationsController::class, 'index'])->name('designations');
    route::post('/add-designations',[DesignationsController::class, 'store'])->name('add.designations');
    route::get('/edit-designations/{id}',[DesignationsController::class, 'edit'])->name('edit.designations');
    route::post('/update-designations',[DesignationsController::class, 'update'])->name('update.designations');
    route::get('/fetch-designation/{id}',[DesignationsController::class, 'fetchDesignation'])->name('admin.fetch.designation');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->prefix('employee')->group(function () {
    //employees routes
    // Route::get('/employee-list', [userController::class, 'index'])->name('admin.employee.list');
    Route::get('/dashboard', function () {
        return view('employees.dashboard');
    })->name('dashboard.employee');
    Route::get('projects',[EmployeeProjectController::class,'index'])->name('employee.projects');
    Route::post('/start-work',[EmployeeProjectController::class,'workLogs'])->name('employee.start.work');
    Route::post('/work-break',[EmployeeProjectController::class,'workBreak'])->name('employee.work.break');
    Route::get('/set-profiledata-employee/',[userController::class,'setProfileEmployee'])->name('set.profile.employee');
    Route::post('/set-profiledata-employee/',[userController::class,'setProfileDataEmployee'])->name('set.profile.employee');
    Route::get('/employee-view/{id}',[UserController::class,'view'])->name('view.employee');
    Route::get('/employee-edit/{id}',[UserController::class,'edit'])->name('edit.employee');
    Route::get('/employee-delete/{id}',[UserController::class,'delete'])->name('delete.employee');
    Route::post('/employee-photo-update',[UserController::class,'photoUpdate'])->name('photoUpdate.employee');
    Route::post('/employee-info-update',[UserController::class,'infoUpdate'])->name('infoUpdate.employee');
    Route::post('/employee-company-info-update',[UserController::class,'companyInfoUpdate'])->name('companyInfoUpdate.employee');
    Route::post('/employee-financial-info-update',[UserController::class,'financialInfoUpdate'])->name('financialInfoUpdate.employee');
    
    //company profile
    route::get('/setting-profile',[CompanyProfileController::class, 'index'])->name('setting.profile');
    route::post('/setting-profile-company-details',[CompanyProfileController::class, 'storeCompanyDetails'])->name('setting.profile.companyDetails');
    route::post('/setting-profile-logo-header-footer',[CompanyProfileController::class, 'storeLogoHeaderFooter'])->name('setting.profile.logoHeaderFooter');
    route::post('/setting-profile-payment-account',[CompanyProfileController::class, 'storePaymentAccount'])->name('setting.profile.paymentAccount');
         
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->prefix('client')->group(function () {
    //employees routes
    // Route::get('/employee-list', [userController::class, 'index'])->name('admin.employee.list');
    Route::get('/dashboard', function () {
        return view('clients.dashboard');
    })->name('dashboard.client');
    Route::get('/set-profiledata-client/',[userController::class,'setProfileClient'])->name('set.profile.client');
    Route::post('/set-profiledata-client/',[userController::class,'setProfileDataClient'])->name('set.profile.client');
    // Route::get('/employee-view/{id}',[UserController::class,'view'])->name('view.employee');
    // Route::get('/employee-edit/{id}',[UserController::class,'edit'])->name('edit.employee');
    // Route::get('/employee-delete/{id}',[UserController::class,'delete'])->name('delete.employee');
    // Route::post('/employee-photo-update',[UserController::class,'photoUpdate'])->name('photoUpdate.employee');
    // Route::post('/employee-info-update',[UserController::class,'infoUpdate'])->name('infoUpdate.employee');
    // Route::post('/employee-company-info-update',[UserController::class,'companyInfoUpdate'])->name('companyInfoUpdate.employee');
    // Route::post('/employee-financial-info-update',[UserController::class,'financialInfoUpdate'])->name('financialInfoUpdate.employee');
    
    //company profile
    route::get('/setting-profile',[CompanyProfileController::class, 'index'])->name('setting.profile');
    route::post('/setting-profile-company-details',[CompanyProfileController::class, 'storeCompanyDetails'])->name('setting.profile.companyDetails');
    route::post('/setting-profile-logo-header-footer',[CompanyProfileController::class, 'storeLogoHeaderFooter'])->name('setting.profile.logoHeaderFooter');
    route::post('/setting-profile-payment-account',[CompanyProfileController::class, 'storePaymentAccount'])->name('setting.profile.paymentAccount');
         
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';