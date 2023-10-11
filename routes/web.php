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
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ServiceDetailController;
use App\Http\Controllers\Front\ProjectDetailController;
use App\Http\Controllers\Front\ReviewsController;
use App\Http\Controllers\Admin\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\Auth\ChangePasswordController;

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

        Route::get('/', [HomeController::class, 'index']);
        Route::get('/service_detail/{id}', [ServiceDetailController::class, 'index'])->name('serviceDetails');
        Route::get('/contact-us', [App\Http\Controllers\Front\EnquiriesController::class, 'index'])->name("contactForm");
        Route::post('contact/store', [App\Http\Controllers\Front\EnquiriesController::class, 'sendEmail'])->name('contactsSave');
        Route::get('/project_detail/{id}', [ProjectDetailController::class, 'index'])->name('projectDetails');
        Route::get('/reviews', [ReviewsController::class, 'index'])->name('reviewsDetails');
        Route::post('reviews/store', [ReviewsController::class, 'store'])->name('reviewsSave');
        Route::get('/careers', [App\Http\Controllers\Front\CareerController::class, 'index'])->name('careersDetails');
        Route::post('careers/store', [App\Http\Controllers\Front\CareerController::class, 'store'])->name('careersSave');


    Route::prefix("/admin")->namespace("Admin")->group(function(){
         Route::namespace("Auth")->group(function(){
             Route::group(["middleware" => ["guest:admin"]], function () {
                Route::get("login", [App\Http\Controllers\Admin\Auth\LoginController::class, 'login',])->name('login');
                Route::post("login", [App\Http\Controllers\Admin\Auth\LoginController::class, 'postLogin',]);
                //forgot password
                Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
                Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
                Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
                Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

                
        });
        
        Route::get("logout", [App\Http\Controllers\Admin\Auth\LoginController::class, "logout",])->name("adminLogout");
        
        
    });

    Route::group(['middleware' => ["auth:admin"]], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('adminHome');
        Route::get("/dashboard", [DashboardController::class, 'index'])->name('adminDashboard');
        //change password
        Route::get('change-password', [ChangePasswordController::class, 'index'])->name('changePassword');
        Route::post('change-password', [ChangePasswordController::class, 'store'])->name('change.password ');
        
        //users
        Route::get("/users", [UsersController::class, 'index'])->name("userList");
        Route::get('users/create', [UsersController::class, 'create'])->name('userCreate');
        Route::post('users/store', [UsersController::class, 'store'])->name('userSave');
        Route::get('users/edit/{id}', [UsersController::class, 'edit'])->name('userEdit');
        Route::put('users/update/{id}', [UsersController::class, 'update'])->name('userUpdate');
        Route::get('users/delete/{id}', [UsersController::class, 'destroy'])->name('userDelete');
        Route::get('users/profile', [UsersController::class, 'profile'])->name('userProfile');
        Route::post('users/profile_update/{id}', [UsersController::class, 'profile_update'])->name('user.profile.Update');

        
        //projects
        Route::get("/projects", [ProjectsController::class, 'index'])->name("projectList");
        Route::get('/projects/create', [ProjectsController::class, 'create'])->name('projectsCreate');
        Route::post('/projects/store', [ProjectsController::class, 'store'])->name('projectsSave');
        Route::get('/projects/edit/{id}', [ProjectsController::class, 'edit'])->name('projectsEdit');
        Route::post('/projects/update/{id}', [ProjectsController::class, 'update'])->name('projectsUpdate');
        Route::get('/projects/delete/{id}', [ProjectsController::class, 'destroy'])->name('projectsDelete');
        Route::get('/projects/status/{id}', [ProjectsController::class, 'project_status'])->name('updateStatus');
        Route::get('/projects/featured/{id}', [ProjectsController::class, 'project_featured_status'])->name('featuredStatus');
        // Route::any('/projects/projects_image/{id}', [App\Http\Controllers\Admin\ProjectsController::class, 'projects_image'])->name('productImages');
        

        //category
        Route::get("/category", [CategoryController::class, 'index'])->name("categoryList");
        Route::get('category/create', [CategoryController::class, 'create'])->name('categoryCreate');
        Route::post('category/store', [CategoryController::class, 'store'])->name('categorySave');
        Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('categoryEdit');
        Route::post('category/update/{id}', [CategoryController::class, 'update'])->name('categoryUpdate');
        Route::get('category/delete/{id}', [CategoryController::class, 'destroy'])->name('categoryDelete');
        Route::get('category/status/{id}', [CategoryController::class, 'status'])->name('categoryStatus');
        //page
        Route::get("/page", [PagesController::class, 'index'])->name("pageList");
        Route::get('page/create', [PagesController::class, 'create'])->name('pageCreate');
        Route::post('page/store', [PagesController::class, 'store'])->name('pageSave');
        Route::get('page/edit/{id}', [PagesController::class, 'edit'])->name('pageEdit');
        Route::post('page/update/{id}', [PagesController::class, 'update'])->name('pageUpdate');
        Route::get('page/delete/{id}', [PagesController::class, 'destroy'])->name('pageDelete');
        Route::get('page/page_status/{id}', [PagesController::class, 'page_status'])->name('pageStatus');
     
        
        //setting
        Route::get("/setting", [SettingController::class, 'index'])->name("settingsList");
        Route::get('setting/create', [SettingController::class, 'create'])->name('settingsCreate');
        Route::post('setting/store', [SettingController::class, 'store'])->name('settingsSave');
        Route::get('setting/edit/{id}', [SettingController::class, 'edit'])->name('settingsEdit');
        Route::post('setting/setting_update/{id}', [SettingController::class, 'setting_update'])->name('settingsUpdate');
        Route::get('setting/delete/{id}', [SettingController::class, 'destroy'])->name('settingsDelete');
        Route::get('setting/setting_status/{id}', [SettingController::class, 'setting_status'])->name('settingsStatus');
		
		 //service
        Route::get("/service", [ServicesController::class, 'index'])->name("servicesList");
        Route::get('service/create', [ServicesController::class, 'create'])->name('servicesCreate');
        Route::post('service/store', [ServicesController::class, 'store'])->name('servicesSave');
        Route::get('service/edit/{id}', [ServicesController::class, 'edit'])->name('servicesEdit');
        Route::post('service/service_update/{id}', [ServicesController::class, 'service_update'])->name('servicesUpdate');
        Route::get('service/delete/{id}', [ServicesController::class, 'destroy'])->name('servicesDelete');
        Route::get('service/service_status/{id}', [ServicesController::class, 'service_status'])->name('servicesStatus');
		
		 //Contact Enquiries
        Route::get("/enquiries", [App\Http\Controllers\Admin\EnquiriesController::class, 'index'])->name("enquiriesList");
        Route::get('enquiries/reply/{id}', [EnquiriesController::class, 'reply'])->name('enquiriesReply');
        Route::post('enquiries/enquiries_reply/{id}', [EnquiriesController::class, 'enquiries_reply'])->name('replyUpdate');
        Route::get('enquiries/delete/{id}', [EnquiriesController::class, 'destroy'])->name('enquiriesDelete');
	
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
         Route::get("/techstacks", [TechstacksController::class, 'index'])->name("techstacksList");
         Route::get('techstacks/create', [TechstacksController::class, 'create'])->name('techstacksCreate');
         Route::post('techstacks/store', [TechstacksController::class, 'store'])->name('techstacksSave');
         Route::get('techstacks/edit/{id}', [TechstacksController::class, 'edit'])->name('techstacksEdit');
         Route::post('techstacks/update/{id}', [TechstacksController::class, 'update'])->name('techstacksUpdate');
         Route::get('techstacks/delete/{id}', [TechstacksController::class, 'techstacks'])->name('techstacksDelete');
         Route::get('techstacks/techstacks_status/{id}', [TechstacksController::class, 'techstacks_status'])->name('techstacksStatus');

         
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

        //faq
        Route::get("/faqs", [FaqController::class, 'index'])->name("faqsList");
        Route::get('faqs/create', [FaqController::class, 'create'])->name('faqsCreate');
        Route::post('faqs/store', [FaqController::class, 'store'])->name('faqsSave');
        Route::get('faqs/edit/{id}', [FaqController::class, 'edit'])->name('faqsEdit');
        Route::post('faqs/update/{id}', [FaqController::class, 'update'])->name('faqsUpdate');
        Route::get('faqs/delete/{id}', [FaqController::class, 'faqs'])->name('faqsDelete');
        Route::get('faqs/faqs_status/{id}', [FaqController::class, 'faqs_status'])->name('faqsStatus');
 
        
        //careers
        Route::get("/careers", [CareerController::class, 'index'])->name("careersList");
        Route::get('careers/reply/{id}', [CareerController::class, 'reply'])->name('careersReply');
        Route::post('careers/careers_reply/{id}', [CareerController::class, 'careers_reply'])->name('careers.reply.Update');
        Route::get('careers/delete/{id}', [CareerController::class, 'careers'])->name('careersDelete');
       
          
      
    });
});
