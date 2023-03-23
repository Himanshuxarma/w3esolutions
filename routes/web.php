<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\MetalsController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\EnquiriesController;
use App\Http\Controllers\Admin\BannersController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\TechstacksController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\DomainController;
use App\Http\Controllers\Front\HomeController;

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

Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index']);
Route::get('/servicedetail/{id}', [App\Http\Controllers\Front\ServiceDetailController::class, 'index'])->name('serviceDetails');
Route::get('/contact-us', [App\Http\Controllers\Front\EnquiriesController::class, 'index'])->name("contactForm");
Route::post('contact/store', [App\Http\Controllers\Front\EnquiriesController::class, 'sendEmail'])->name('contactsSave');
Route::get('/projectdetail/{id}', [App\Http\Controllers\Front\ProjectDetailController::class, 'index'])->name('projectDetails');


    Route::prefix("/admin")->namespace("Admin")->group(function(){
         Route::namespace("Auth")->group(function(){
             Route::group(["middleware" => ["guest:admin"]], function () {
                Route::get("login", [App\Http\Controllers\Admin\Auth\LoginController::class, 'login',])->name('login');
                Route::post("login", [App\Http\Controllers\Admin\Auth\LoginController::class, 'postLogin',]);
        });
        Route::get("logout", [App\Http\Controllers\Admin\Auth\LoginController::class, "logout",])->name("adminLogout");
    });

    Route::group(['middleware' => ["auth:admin"]], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('adminHome');
        Route::get("/dashboard", [DashboardController::class, 'index'])->name('adminDashboard');
        //users
        Route::get("/users", [App\Http\Controllers\Admin\UsersController::class, 'index'])->name("userList");
        Route::get('users/create', [App\Http\Controllers\Admin\UsersController::class, 'create'])->name('userCreate');
        Route::post('users/store', [App\Http\Controllers\Admin\UsersController::class, 'store'])->name('userSave');
        Route::get('users/edit/{id}', [App\Http\Controllers\Admin\UsersController::class, 'edit'])->name('userEdit');
        Route::put('users/update/{id}', [App\Http\Controllers\Admin\UsersController::class, 'update'])->name('userUpdate');
        Route::get('users/delete/{id}', [App\Http\Controllers\Admin\UsersController::class, 'destroy'])->name('userDelete');

        
        //projects
        Route::get("/projects", [App\Http\Controllers\Admin\ProjectsController::class, 'index'])->name("projectList");
        Route::get('/projects/create', [App\Http\Controllers\Admin\ProjectsController::class, 'create'])->name('projectsCreate');
        Route::post('/projects/store', [App\Http\Controllers\Admin\ProjectsController::class, 'store'])->name('projectsSave');
        Route::get('/projects/edit/{id}', [App\Http\Controllers\Admin\ProjectsController::class, 'edit'])->name('projectsEdit');
        Route::post('/projects/update/{id}', [App\Http\Controllers\Admin\ProjectsController::class, 'update'])->name('projectsUpdate');
        Route::get('/projects/delete/{id}', [App\Http\Controllers\Admin\ProjectsController::class, 'destroy'])->name('projectsDelete');
        Route::get('/projects/status/{id}', [App\Http\Controllers\Admin\ProjectsController::class, 'project_status'])->name('updateStatus');
        Route::get('/projects/featured/{id}', [App\Http\Controllers\Admin\ProjectsController::class, 'project_featured_status'])->name('featuredStatus');
        // Route::any('/projects/projects_image/{id}', [App\Http\Controllers\Admin\ProjectsController::class, 'projects_image'])->name('productImages');
        

        //category
        Route::get("/category", [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name("categoryList");
        Route::get('category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('categoryCreate');
        Route::post('category/store', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('categorySave');
        Route::get('category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('categoryEdit');
        Route::post('category/update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('categoryUpdate');
        Route::get('category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('categoryDelete');
        Route::get('category/status/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'status'])->name('categoryStatus');
        //page
        Route::get("/page", [App\Http\Controllers\Admin\PagesController::class, 'index'])->name("pageList");
        Route::get('page/create', [App\Http\Controllers\Admin\PagesController::class, 'create'])->name('pageCreate');
        Route::post('page/store', [App\Http\Controllers\Admin\PagesController::class, 'store'])->name('pageSave');
        Route::get('page/edit/{id}', [App\Http\Controllers\Admin\PagesController::class, 'edit'])->name('pageEdit');
        Route::post('page/update/{id}', [App\Http\Controllers\Admin\PagesController::class, 'update'])->name('pageUpdate');
        Route::get('page/delete/{id}', [App\Http\Controllers\Admin\PagesController::class, 'destroy'])->name('pageDelete');
        Route::get('page/page_status/{id}', [App\Http\Controllers\Admin\PagesController::class, 'page_status'])->name('pageStatus');
     
        
        //setting
        Route::get("/setting", [App\Http\Controllers\Admin\SettingController::class, 'index'])->name("settingsList");
        Route::get('setting/create', [App\Http\Controllers\Admin\SettingController::class, 'create'])->name('settingsCreate');
        Route::post('setting/store', [App\Http\Controllers\Admin\SettingController::class, 'store'])->name('settingsSave');
        Route::get('setting/edit/{id}', [App\Http\Controllers\Admin\SettingController::class, 'edit'])->name('settingsEdit');
        Route::post('setting/setting_update/{id}', [App\Http\Controllers\Admin\SettingController::class, 'setting_update'])->name('settingsUpdate');
        Route::get('setting/delete/{id}', [App\Http\Controllers\Admin\SettingController::class, 'destroy'])->name('settingsDelete');
        Route::get('setting/setting_status/{id}', [App\Http\Controllers\Admin\SettingController::class, 'setting_status'])->name('settingsStatus');
		
		 //service
        Route::get("/service", [App\Http\Controllers\Admin\ServicesController::class, 'index'])->name("servicesList");
        Route::get('service/create', [App\Http\Controllers\Admin\ServicesController::class, 'create'])->name('servicesCreate');
        Route::post('service/store', [App\Http\Controllers\Admin\ServicesController::class, 'store'])->name('servicesSave');
        Route::get('service/edit/{id}', [App\Http\Controllers\Admin\ServicesController::class, 'edit'])->name('servicesEdit');
        Route::post('service/service_update/{id}', [App\Http\Controllers\Admin\ServicesController::class, 'service_update'])->name('servicesUpdate');
        Route::get('service/delete/{id}', [App\Http\Controllers\Admin\ServicesController::class, 'destroy'])->name('servicesDelete');
        Route::get('service/service_status/{id}', [App\Http\Controllers\Admin\ServicesController::class, 'service_status'])->name('servicesStatus');
		
		 //Contact Enquiries
        Route::get("/enquiries", [App\Http\Controllers\Admin\EnquiriesController::class, 'index'])->name("enquiriesList");
	
		//Banners
        Route::get("/banners", [BannersController::class, 'index'])->name("bannersList");
        Route::get('banners/create', [BannersController::class, 'create'])->name('bannersCreate');
        Route::post('banners/store', [BannersController::class, 'store'])->name('bannersSave');
        Route::get('banners/edit/{id}', [BannersController::class, 'edit'])->name('bannersEdit');
        Route::post('banners/update', [BannersController::class, 'update'])->name('bannersUpdate');
        Route::get('banners/delete/{id}', [BannersController::class, 'destroy'])->name('bannersDelete');
        Route::get('banners/banner_status/{id}', [BannersController::class, 'banner_status'])->name('bannersStatus');

        //testimonial 
        Route::get("/testimonial", [TestimonialController::class, 'index'])->name("testimonialsList");
        Route::get('testimonial/create', [TestimonialController::class, 'create'])->name('testimonialsCreate');
        Route::post('testimonial/store', [TestimonialController::class, 'store'])->name('testimonialsSave');
        Route::get('testimonial/edit/{id}', [TestimonialController::class, 'edit'])->name('testimonialsEdit');
        Route::post('testimonial/update/{id}', [TestimonialController::class, 'update'])->name('testimonialsUpdate');
        Route::get('testimonial/delete/{id}', [TestimonialController::class, 'destroy'])->name('testimonialsDelete');
        Route::get('testimonial/testimonials_status/{id}', [TestimonialController::class, 'testimonials_status'])->name('testimonialsStatus');

         //techstacks
         Route::get("/techstacks", [App\Http\Controllers\Admin\TechstacksController::class, 'index'])->name("techstacksList");
         Route::get('techstacks/create', [App\Http\Controllers\Admin\TechstacksController::class, 'create'])->name('techstacksCreate');
         Route::post('techstacks/store', [App\Http\Controllers\Admin\TechstacksController::class, 'store'])->name('techstacksSave');
         Route::get('techstacks/edit/{id}', [App\Http\Controllers\Admin\TechstacksController::class, 'edit'])->name('techstacksEdit');
         Route::post('techstacks/update/{id}', [App\Http\Controllers\Admin\TechstacksController::class, 'update'])->name('techstacksUpdate');
         Route::get('techstacks/delete/{id}', [App\Http\Controllers\Admin\TechstacksController::class, 'techstacks'])->name('techstacksDelete');
         Route::get('techstacks/techstacks_status/{id}', [App\Http\Controllers\Admin\TechstacksController::class, 'techstacks_status'])->name('techstacksStatus');

         
		//employees
        Route::get("/employees", [EmployeeController::class, 'index'])->name("employeesList");
        Route::get('employees/create', [EmployeeController::class, 'create'])->name('employeesCreate');
        Route::post('employees/store', [EmployeeController::class, 'store'])->name('employeesSave');
        Route::get('employees/edit/{id}', [EmployeeController::class, 'edit'])->name('employeesEdit');
        Route::post('employees/update/{id}', [EmployeeController::class, 'update'])->name('employeesUpdate');
        Route::get('employees/delete/{id}', [EmployeeController::class, 'destroy'])->name('employeesDelete');
        Route::get('employees/employee_status/{id}', [EmployeeController::class, 'employee_status'])->name('employeesStatus');
          //domains
          Route::get("/domains", [DomainController::class, 'index'])->name("domainsList");
          Route::get('domains/create', [DomainController::class, 'create'])->name('domainsCreate');
          Route::post('domains/store', [DomainController::class, 'store'])->name('domainsSave');
          Route::get('domains/edit/{id}', [DomainController::class, 'edit'])->name('domainsEdit');
          Route::post('domains/update/{id}', [DomainController::class, 'update'])->name('domainsUpdate');
          Route::get('domains/delete/{id}', [DomainController::class, 'domains'])->name('domainsDelete');
          Route::get('domains/domains_status/{id}', [DomainController::class, 'domains_status'])->name('domainsStatus');
 
          
      
    });
});
