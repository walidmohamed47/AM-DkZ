<?php

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
use App\Color;
use App\Product;
use App\Inventory;

use App\Size;
use App\Brand;
use App\Supplier;
session_start();
Route::get('/', 'RoleController@login');

Route::get('/booknow','bookingController@book');
Route::get('/booknow-ar','bookingController@book_ar');

Route::get('/bookInside/{id}','bookingController@bookInside');
Route::post('/bookInside/{id}','bookingController@bookInside');
Route::get('/viewBooking','bookingController@viewBooking');
Route::post('/viewBooking','bookingController@viewBooking');
Route::get('/editBooking/{id}','bookingController@editBooking');
Route::post('/editBooking/{id}','bookingController@editBooking');

Route::get('/createSafe','bookingController@createSafe');
Route::post('/createSafe','bookingController@createSafe');
Route::get('/viewSafe','bookingController@viewSafe');
Route::get('/roomDistribution','bookingController@distribution');

Route::post('/viewSafe','bookingController@viewSafe');
Route::post('/updatePayment','bookingController@updatePayment');


Route::get('/bookingpage', function (Request $request){
   return view('layouts.booking');
});
Route::get('/exercise', function (){
   return view('layouts.exercise');
});
Route::get('/food', function (){
   return view('layouts.food');
});
Route::get('/maintenance', function (){
   return view('layouts.maintenance');
});
Route::get('/extras', function (){
   return view('layouts.extra');
});
Route::get('/housekeeping', function (){
   return view('layouts.housekeeping');
});
Route::get('/fi', function (){
   return view('layouts.fi');
});

//fitness tools & Equipment
Route::get('/viewFitnessItems','ExerciseController@viewFitnessItems');

Route::get('/schedulelaundryextra','extraserviceController@schedulelaundry');
Route::post('/scheduleLaundryextra','extraserviceController@schedulelaundry');
Route::post('/assignLaundryExtra','extraserviceController@assignLaundry');
Route::get('/schedulespaextra','extraserviceController@schedulespa');
Route::post('/scheduleSpaExtra','extraserviceController@schedulespa');
Route::post('/assignSpaExtra','extraserviceController@assignSpa');

Route::get('/scheduleexerciseextra','extraserviceController@scheduleexercise');
Route::post('/scheduleExerciseExtra','extraserviceController@scheduleexercise');
Route::post('/assignExerciseExtra','extraserviceController@assignExercise');
Route::post('/LaundryassignExtra','extraserviceController@assignLaundryExtra');
Route::post('/SpaassignExtra','extraserviceController@assignSpaExtra');
Route::post('/ExerciseassignExtra','extraserviceController@assignExerciseExtra');
Route::post('/viewschedulelaundryextra','extraserviceController@assignExerciseExtra');
Route::post('/viewschedulespaextra','extraserviceController@assignExerciseExtra');
Route::post('/viewscheduleexerciseextra','extraserviceController@viewScheduledExercise');
Route::post('/viewScheduledExtraLaundnry','extraserviceController@viewScheduledLaundry');
Route::post('/viewScheduledExtraSpa','extraserviceController@viewScheduledSpa');

Route::get('/scheduleLaundrextra', function (){
   return view('extraservices.scheduleSpa');
});

Route::get('/scheduleexerciseextra', function (){
   return view('extraservices.scheduleExercise');
});


Route::get('/viewschedulelaundryextra', function (){
   return view('extraservices.viewAssignedLaundry');
});
Route::get('/viewschedulespaextra', function (){
   return view('extraservices.viewAssignedSpa');
});
Route::get('/viewscheduleexerciseextra', function (){
   return view('extraservices.viewAssignedExercise');
});

Route::get('/userDetails/{id}','userController@details');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'userController@view')->name('home');
Route::post('/profile', 'userController@view')->name('home');
Route::get('/profile_ar', 'userController@view_ar')->name('home');
Route::post('/profile_ar', 'userController@view_ar')->name('home');
Route::get('/addUser', 'userController@addUser');
Route::post('/addUser', 'userController@addUser');
Route::get('/currentUsers','userController@viewUsers');
Route::post('/currentUsers','userController@viewUsers');

Route::get('/addUserProfile', 'userController@addUserProfile');
Route::post('/addUserProfile', 'userController@addUserProfile');
Route::get('/createQuestionnaire','questionnaireController@create');
Route::post('/createQuestionnaire','questionnaireController@create');
Route::get('/createQuestionnaire_ar','questionnaireController@create_ar');
Route::post('/createQuestionnaire_ar','questionnaireController@create_ar');


Route::get('/questionnaireinside','bookingController@createQuestionaire');
Route::post('/questionnaireinside','bookingController@createQuestionaire');

Route::get('/updateQuestionnaire/{id}','userController@createQuestionaire');
Route::post('/updateQuestionnaire/{id}','userController@createQuestionaire');

Route::get('/book','bookingController@book');
Route::get('/summary_inside','bookingController@summary_inside');
Route::post('/summary_inside','bookingController@summary_inside');
Route::get('/summary','bookingController@summary');
Route::post('/summary','bookingController@summary');
Route::post('/book','bookingController@book');

Route::get('/book_ar','bookingController@book_ar');

Route::post('/book_ar','bookingController@book_ar');

Route::get('/complete/{day}','bookingController@complete');
Route::post('/complete/{day}','bookingController@complete');

Route::get('/complete_ar/{day}','bookingController@complete_ar');
Route::post('/complete_ar/{day}','bookingController@complete_ar');

Route::get('/completeInside/{day}','bookingController@completeInside');
Route::post('/completeInside/{day}','bookingController@completeInside');
//Route::get('/calendar','bookingController@calendar');
Route::get('/calendar_ar','bookingController@calendar_ar');
Route::get('/calendar','bookingController@calendar');


Route::get('/calendarInside','bookingController@calendarInside');
Route::get('/updateBooking/{id}','bookingController@update');
Route::post('/updateBooking/{id}','bookingController@update');
Route::get('/deleteBooking/{id}','bookingController@delete');

Route::get('/viewRooms','RoomController@view');
Route::get('/createRoom','RoomController@create');
Route::post('/createRoom','RoomController@create');
Route::get('/updateRoom/{id}','RoomController@update');
Route::get('/detailsRoom/{id}','RoomController@details');
Route::get('/evaluation','bookingController@evaluate');
Route::post('/evaluation','bookingController@evaluate');

Route::get('/viewEvaluation','bookingController@viewEvaluation');
Route::post('/viewEvaluation','bookingController@viewEvaluation');
Route::get('/evaluation_online','bookingController@evaluation_online');

Route::get('/pay/{id}','bookingController@pay');
Route::post('/pay/{id}','bookingController@pay');
Route::get('/payonline/{id}','bookingController@payonline');
Route::post('/payonline/{id}','bookingController@payonline');
Route::get('/getpaid','bookingController@getpaid');
Route::get('/increase_bullets','userController@addbullets');
Route::get('/decrease','userController@decreasebullets');
Route::get('/view_transactions_bullets','userController@viewIncreasedBullets');
Route::get('/view_decreased','userController@viewDecreasedBullets');
Route::post('/increase_bullets','userController@addbullets');
Route::post('/decrease','userController@decreasebullets');

Route::post('/updateRoom/{id}','RoomController@update');
Route::get('/deleteRoom/{id}','RoomController@delete');

Route::get('/viewDepartments','DepartmentController@view');
Route::get('/createDepartment','DepartmentController@create');
Route::post('/createDepartment','DepartmentController@create');
Route::get('/updateDepartment/{id}','DepartmentController@update');
Route::post('/updateDepartment/{id}','DepartmentController@update');
Route::get('/deleteDepartment/{id}','DepartmentController@delete');

Route::get('/viewJobs','JobController@view');
Route::get('/createRole','RoleController@create');
Route::post('/createRole','RoleController@create');
Route::get('/login-admin','RoleController@login');
Route::get('/logout-admin','RoleController@logout');

Route::post('/login-admin','RoleController@login');
Route::get('/viewRoles','RoleController@viewRoles');
Route::get('/deleteRole/{id}','RoleController@delete');
Route::get('/viewPrices','RoomController@viewPrices');
Route::post('/updatePrices/{id}','RoomController@updatePrices');

Route::get('/createJob','JobController@create');
Route::post('/createJob','JobController@create');
Route::get('/updateJob/{id}','JobController@update');
Route::post('/updateJob/{id}','JobController@update');
Route::get('/deleteJob/{id}','JobController@delete');



Route::get('/welcome', function(Request $request){
    return view('layouts.welcome');
});

Route::get('/welcome','WelcomeController@welcome');

Route::get('/administration', function(Request $request){
    return view('layouts.administration');
});
Route::get('/HR', function(Request $request){
    return view('layouts.HR');
});

Route::get('/spa', function(Request $request){
    return view('layouts.spa');
});
Route::get('/laundry', function(Request $request){
    return view('layouts.laundry');
});
Route::get('/viewFloors','FloorController@view');
Route::get('/createFloor','FloorController@create');
Route::post('/createFloor','FloorController@create');
Route::get('/updateFloor/{id}','FloorController@update');
Route::post('/updateFloor/{id}','FloorController@update');
Route::get('/deleteFloor/{id}','FloorController@delete');

Route::get('/viewLocations','LocationController@view');
Route::get('/createLocation','LocationController@create');
Route::post('/createLocation','LocationController@create');
Route::get('/updateLocation/{id}','LocationController@update');
Route::post('/updateLocation/{id}','LocationController@update');
Route::get('/deleteLocation/{id}','LocationController@delete');

Route::get('/viewEmployee','EmployeeController@view');
Route::get('/createEmployee','EmployeeController@create');
Route::post('/createEmployee','EmployeeController@create');
Route::get('/addVacation/{id}','EmployeeController@addVacation');
Route::post('/addVacation/{id}','EmployeeController@addVacation');
Route::get('/updateEmployee/{id}','EmployeeController@update');
Route::get('/deleteEmployee/{id}','EmployeeController@delete');
Route::get('/detailsEmployee/{id}','EmployeeController@details');

Route::post('/updateEmployee/{id}','EmployeeController@update');
Route::get('/viewVacations/{id}','EmployeeController@viewVacation');
Route::get('/deleteVacation/{id}','EmployeeController@deleteVacation');
Route::get('/emails','settingController@email');
Route::post('/updateemails/{id}','settingController@email');
Route::get('/booking_emails','settingController@booking_emails');
Route::post('/update_booking_email/{id}','settingController@booking_emails');
Route::get('/left_email','settingController@left_email');
Route::post('/update_left_email/{id}','settingController@left_email');
Route::get('/rejection_email','settingController@rejection_email');
Route::post('/update_rejection_email/{id}','settingController@rejection_email');
Route::get('/cancellation_email','settingController@cancellation_email');
Route::post('/update_cancellation_email/{id}','settingController@cancellation_email');

Route::get('/update_terms','settingController@update_terms');
Route::post('/update_terms/{id}','settingController@update_terms');
Route::get('/update_participate','settingController@update_participate');
Route::post('/update_participate/{id}','settingController@update_participate');
Route::get('/update_liability','settingController@update_liability');
Route::post('/update_liability/{id}','settingController@update_liability');
Route::get('/appearance','settingController@appearance');
Route::post('/updateappearance/{id}','settingController@appearance');
Route::get('/viewUsers','userController@viewall');
Route::get('/updateUser/{id}','userController@updateUser');
Route::post('/updateUser/{id}','userController@updateUser');
Route::get('/deleteUser/{id}','userController@deleteUser');

Route::get('/viewExercise','ExerciseController@view');
Route::get('/viewExercise/{id}','ExerciseController@show');
Route::get('/createExercise','ExerciseController@create');
Route::get('/deleteExercise/{id}','ExerciseController@delete');
Route::get('/deleteScehdule/{id}/{date}','ExerciseController@destroy');

Route::post('/createExercise','ExerciseController@create');
Route::post('/calendarExercise','ExerciseController@get_users');
Route::post('/assignExercise','ExerciseController@assignExercise');

Route::get('/assign',['as'=>'assign','uses'=>'ExerciseController@get_users']);
Route::post('/calendar','ExerciseController@assign');
Route::get('/unassign/{id}','ExerciseController@delete_assign');
Route::get('/trackExercise/{id}',['as'=>'trackExercise','uses'=>'ExerciseController@track']);
Route::get('/editExercise/{id}','ExerciseController@edit');
Route::post('/editExercise/{id}',['as'=>'editExercise','uses'=>'ExerciseController@update']);
Route::get('/viewReport',['as'=>'report','uses'=>'reportController@allExercise']);
Route::get('/viewReport/{id}','reportController@dailyExercise');
Route::get('/track','ExerciseController@viewAssigned');
Route::post('/viewAssigned','ExerciseController@selectAssignedToView');



Route::get('/viewSupplier','SupplierController@view');
Route::get('/createSupplier','SupplierController@create');
Route::post('/createSupplier','SupplierController@create');

Route::get('/viewMaintenance','MaintenanceController@view');
Route::get('/createMaintenance','MaintenanceController@create');
Route::post('/createMaintenance','MaintenanceController@create');
Route::get('/maintenanceDetails/{id}','MaintenanceController@details');
Route::get('/deletemaintenance/{id}','MaintenanceController@delete');
Route::get('/deletemaintenance/{id}','MaintenanceController@delete');
Route::get('/scheduleMaintenance','MaintenanceController@schedule');
Route::post('/scheduleMaintenance','MaintenanceController@schedule');
Route::post('/assignMaintenance','MaintenanceController@assign');
Route::post('/Maintenanceassign','MaintenanceController@assignMaintenance');
Route::get('/viewScheduleMaintenance','MaintenanceController@viewScheduled');
Route::post('/viewScheduleMaintenance','MaintenanceController@viewScheduled');
Route::get('/maintenancereport','MaintenanceController@report');
Route::post('/maintenancereport','MaintenanceController@report');


Route::get('/viewCobon','CobonController@view');
Route::get('/createCobon','CobonController@create');
Route::post('/createCobon','CobonController@create');

Route::get('/deleteCobon/{id}','CobonController@delete');
Route::get('/updateCobon/{id}','CobonController@update');
Route::post('/updateCobon/{id}','CobonController@update');

Route::get('/viewReferral','RewardController@viewReferral');
Route::post('/updateReferral/{id}','RewardController@updateReferral');
Route::get('/viewReward','RewardController@viewReward');
Route::post('/updateReward/{id}','RewardController@updateReward');
Route::get('/viewCashback','RewardController@viewCashback');
Route::post('/updateCashback/{id}','RewardController@updateCashback');
Route::get('/viewExtrabullets','RewardController@viewExtra');
Route::post('/updateExtrabullets/{id}','RewardController@updateExtra');
Route::get('/viewExercisebullets','RewardController@viewExercise');
Route::post('/updateExercisebullets/{id}','RewardController@updateExercise');

Route::get('/viewPoints','PointsController@view');
Route::get('/createPoints','PointsController@create');
Route::post('/createPoints','PointsController@create');

Route::get('/updatePoints/{id}','PointsController@update');
Route::post('/updatePoints/{id}','PointsController@update');
Route::get('/deletePoints/{id}','PointsController@delete');

Route::get('/detailsCobon/{id}','CobonController@details');
Route::get('/detailsPoints/{id}','PointsController@details');


Route::get('/historyBooking','bookingController@history');
Route::get('/history_ar','bookingController@history_ar');
Route::get('/weight_bullets','bookingController@weight_bullets');
Route::post('/weight_bullets','bookingController@weight_bullets');
Route::get('/view_weight_bullets','bookingController@view_weight_bullets');
Route::get('/viewSettings','bookingController@viewSettings');
Route::post('/updateSettings/{id}','bookingController@updateSettings');

Route::get('/programGet'			,'bookingController@programGet');
Route::post('/programPost/{id}'		,'bookingController@programPost');
Route::get('/modeOfStayGet'			,'bookingController@modeOfStayGet');
Route::post('/modeOfStayPost/{id}'	,'bookingController@modeOfStayPost');
Route::get('/price_egp'      ,'bookingController@spot_prices_egp');
Route::post('/price_egp'      ,'bookingController@spot_prices_egp');

Route::get('/price_usd'      ,'bookingController@spot_prices_usd');
Route::post('/price_usd'      ,'bookingController@spot_prices_usd');
Route::get('/pay_bullets/{id}'      ,'bookingController@pay_bullets');
Route::get('/pay_bullets_online/{id}'      ,'bookingController@pay_bullets_online');


Route::get('/viewIngredient','ingredientController@view');
Route::get('/createIngredient','ingredientController@create');
Route::post('/createIngredient','ingredientController@create');
Route::get('/detailsIngredient/{id}','ingredientController@details');
Route::get('/updateIngredient/{id}','ingredientController@update');
Route::post('/updateIngredient/{id}','ingredientController@update');
Route::get('/deleteIngredient/{id}','ingredientController@delete');

Route::get('/viewMeals','mealController@view_meal');
Route::get('/createMeals','mealController@create_meal');
Route::post('/createMeals','mealController@create_meal');
Route::get('/deleteMeals/{id}','mealController@delete_meal');
Route::get('/updateMeals/{id}','mealController@updat_meal');
Route::post('/updateMeals/{id}','mealController@updat_meal');
Route::post('/selectMealsviewMeals','mealController@selectMealsviewMeals');

Route::get('/viewRecipes','mealController@view');
Route::get('/createRecipes','mealController@create');
Route::post('/createRecipes','mealController@create');
Route::get('/deleteRecipes/{id}','mealController@delete');
Route::get('/updateRecipes/{id}','mealController@update');
Route::post('/updateRecipes/{id}','mealController@update');

Route::get('/createMealsIngredient/{id}','mealsIngredientsController@create');
Route::post('/createMealsIngredient/{id}','mealsIngredientsController@create');

Route::get('/createMealsIngredient/{id}','mealsIngredientsController@view');

Route::get('/viewSelected/{id}','selectedController@view');

Route::get('/viewType/{id}','mealController@viewType');
Route::post('/tracktype/{id}','mealController@viewType');


//Route::get('/viewTracker/{id}','bookingMealsController@view');

Route::get('/viewTracker/{id}','bookingMealsController@create');
Route::post('/viewTracker/{id}','bookingMealsController@create');
Route::get('/options', function() {return view('/booking.option');});
Route::get('/viewAssigned/{id}','bookingMealsController@viewAssigned');
Route::get('/viewArrival','bookingController@viewArrivalList');
Route::post('/viewArrival','bookingController@viewArrivalList');
Route::get('/viewDispatcher','bookingController@viewDispatcher');
Route::post('/viewDispatcher','bookingController@viewDispatcher');


Route::get('/viewService','serviceTypeController@view');
Route::get('/createService','serviceTypeController@create');
Route::post('/createService','serviceTypeController@create');
Route::get('/updateService/{id}','serviceTypeController@update');
Route::post('/updateService/{id}','serviceTypeController@update');
Route::get('/deleteService/{id}','serviceTypeController@delete');

Route::get('/createLaundry','laundryController@create');
Route::post('/createLaundry','laundryController@create');
Route::get('/viewLaundry','laundryController@view');
Route::get('/deleteLaundry/{id}','laundryController@delete');
Route::get('/schedulelaundry','laundryController@schedule');
Route::post('/scheduleLaundry','laundryController@schedule');
Route::post('/assignLaundry','laundryController@assign');
Route::post('/Laundryassign','laundryController@assignLaundry');

Route::get('/viewScheduledLaundry','laundryController@viewScheduled');
Route::post('/viewScheduledLaundry','laundryController@viewScheduled');

Route::get('/schedulelaundryBooking','laundryController@scheduleBooking');
Route::post('/scheduleLaundryBooking','laundryController@scheduleBooking');
Route::post('/assignLaundryBooking','laundryController@assignBooking');
Route::post('/LaundryassignBooking','laundryController@assignLaundryBooking');
Route::get('/viewScheduledLaundryBooking','laundryController@viewScheduledBooking');
Route::post('/viewScheduledLaundryBooking','laundryController@viewScheduledBooking');

Route::get('/updateLaundry/{id}','laundryController@update');
Route::post('/updateLaundry/{id}','laundryController@update');

Route::get('/createLaundryBooking','laundryBookingController@create');
Route::post('/createLaundryBooking','laundryBookingController@create');
Route::get('/createLaundryBooking','laundryBookingController@create');
Route::get('/viewLaundryBooking','laundryBookingController@viewAll');
Route::get('/updateLaundryBooking/{id}','laundryBookingController@update');
Route::post('/updateLaundryBooking/{id}','laundryBookingController@update');
Route::get('/deleteLaundryBooking/{id}','laundryBookingController@delete');

Route::get('/createLaundryCamp','laundryCampController@create');
Route::post('/createLaundryCamp','laundryCampController@create');
Route::get('/createLaundryCamp','laundryCampController@view');
Route::get('/viewLaundryCamp','laundryCampController@viewAll');
Route::get('/updateLaundryCamp/{id}','laundryCampController@update');
Route::post('/updateLaundryCamp/{id}','laundryCampController@update');
Route::get('/deleteLaundryCamp/{id}','laundryCampController@delete');

Route::get('/createHouseKeeping','houseKeepingController@create');
Route::post('/createHouseKeeping','houseKeepingController@create');
Route::get('/createHouseKeeping','houseKeepingController@create');
Route::get('/viewExceptionHouse','houseKeepingController@viewAll');
Route::post('/viewExceptionHouse','houseKeepingController@viewAll');

Route::get('/updateHouseKeeping/{id}','houseKeepingController@update');
Route::post('/updateHouseKeeping/{id}','houseKeepingController@update');
Route::get('/deleteHouseKeeping/{id}','houseKeepingController@delete');
Route::get('/scheduleHouse','houseKeepingController@schedule');
Route::post('/scheduleHouse','houseKeepingController@schedule');
Route::post('/assignHouse','houseKeepingController@assign');
Route::post('/Houseassign','houseKeepingController@assignHouse');
Route::get('/viewScheduledHouse','houseKeepingController@viewScheduled');
Route::get('/viewMatrilaAndTools','houseKeepingController@viewMaterilasAndTools');


Route::post('/viewScheduledHouse','houseKeepingController@viewScheduled');
Route::get('/followup','houseKeepingController@followup');
Route::post('/followup','houseKeepingController@followup');

Route::get('/viewExtra','extraController@regular_view');
Route::post('/viewExtra','extraController@view');


Route::get('/createExtra','extraController@create');
Route::post('/createExtra','extraController@create');

Route::get('/scheduleSpa_1st_step',['as'=>'scheduleSpa_1st_step','uses'=>'extraController@schedule']);

Route::post('/scheduleSpa','extraController@schedule');

Route::post('/assignSpa','extraController@assign');
Route::post('/spaassign','extraController@assignSpa');

Route::get('/viewScheduledSpa','extraController@viewScheduled_regular');
Route::post('/viewScheduledSpa','extraController@viewScheduled');

Route::get('/updateExtra/{id}','extraController@update');
Route::post('/updateExtra/{id}','extraController@update');
Route::get('/deleteExtra/{id}','extraController@delete');

Route::get('/createBookingExtra','bookingExtraController@create');
Route::post('/createBookingExtra','bookingExtraController@create');
Route::get('/viewBookingExtra','bookingExtraController@viewAll');
Route::get('/deleteBookingExtra/{id}','bookingExtraController@delete');


Route::get('/createExtraCamp','extraCampController@create');
Route::post('/createExtraCamp','extraCampController@create');
Route::get('/viewExtraCamp','extraCampController@view');
Route::get('/updateExtraCamp/{id}','extraCampController@update');
Route::post('/updateExtraCamp/{id}','extraCampController@update');
Route::get('/deleteExtraCamp/{id}','extraCampController@delete');

Route::get('/createExtraCampBooking','extraCampBookingController@create');
Route::post('/createExtraCampBooking','extraCampBookingController@create');
Route::get('/viewExtraCampBooking','extraCampBookingController@view');
Route::get('/updateExtraCampBooking/{id}','extraCampBookingController@update');
Route::post('/updateExtraCampBooking/{id}','extraCampBookingController@update');
Route::get('/deleteExtraCampBooking/{id}','extraCampBookingController@delete');
Route::get('/viewDeliveredHouseKeeping','houseKeepingController@delivered');
Route::get('/viewUndeliveredHouseKeeping','houseKeepingController@undelivered');

Route::get('/viewDeliveredLaundryBooking','laundryBookingController@delivered');
Route::get('/viewUndeliveredLaundryBooking','laundryBookingController@undelivered');

Route::get('/viewDeliveredLaundryCamp','laundryCampController@delivered');
Route::get('/viewUndeliveredLaundryCamp','laundryCampController@undelivered');


Route::get('/viewOutSource','outSourceController@view');
Route::get('/createOutSource','outSourceController@create');
Route::post('/createOutSource','outSourceController@create');
Route::get('/updateOutSource/{id}','outSourceController@update');
Route::post('/updateOutSource/{id}','outSourceController@update');
Route::get('/deleteOutSource/{id}','outSourceController@delete');

Route::get('/viewBank','bankController@view');
Route::get('/createBank','bankController@create');
Route::post('/createBank','bankController@create');
Route::get('/updateBank/{id}','bankController@update');
Route::post('/updateBank/{id}','bankController@update');
Route::get('/deleteBank/{id}','bankController@delete');

Route::get('/viewExpenses','expensesController@view');
Route::get('/createExpenses','expensesController@create');
Route::post('/createExpenses','expensesController@create');
Route::get('/updateExpenses/{id}','expensesController@update');
Route::post('/updateExpenses/{id}','expensesController@update');
Route::get('/deleteExpenses/{id}','expensesController@delete');

Route::get('/viewRevenues','revenuesController@view');
Route::get('/createRevenues','revenuesController@create');
Route::post('/createRevenues','revenuesController@create');
Route::get('/updateRevenues/{id}','revenuesController@update');
Route::post('/updateRevenues/{id}','revenuesController@update');
Route::get('/deleteRevenues/{id}','revenuesController@delete');

Route::get('/viewPayments','paymentController@view');
Route::get('/createPayments','paymentController@create');
Route::post('/createPayments','paymentController@create');
Route::get('/updatePayments/{id}','paymentController@update');
Route::post('/updatePayments/{id}','paymentController@update');
Route::get('/deletePayments/{id}','paymentController@delete');
Route::get('/paymentreport','paymentController@report');
Route::post('/paymentreport','paymentController@report');

Route::get('/viewIncome','inComeController@view');
Route::get('/createIncome','inComeController@create');
Route::post('/createIncome','inComeController@create');
Route::get('/updateIncome/{id}','inComeController@update');
Route::post('/updateIncome/{id}','inComeController@update');
Route::get('/deleteIncome/{id}','inComeController@delete');
Route::get('/revenuereport','inComeController@report');
Route::post('/revenuereport','inComeController@report');

Route::get('/viewDollar','dollarController@view');
Route::get('/createDollar','dollarController@create');
Route::post('/createDollar','dollarController@create');
Route::get('/updateDollar/{id}','dollarController@update');
Route::post('/updateDollar/{id}','dollarController@update');

Route::get('/viewFi','fiController@view');
Route::get('/viewAllFi','fiController@viewAll');

Route::get('/viewMoney','payController@view');
Route::post('/viewMoney','payController@view');

Route::get('/viewRevMoney','payController@viewRev');
Route::post('/viewRevMoney','payController@viewRev');

Route::get('/viewIngMoney','payController@viewIng');
Route::post('/viewIngMoney','payController@viewIng');

Route::get('/viewCampMoney','payController@viewCamp');
Route::post('/viewCampMoney','payController@viewCamp');

Route::get('/viewSpaMoney','payController@viewSpa');
Route::post('/viewSpaMoney','payController@viewSpa');

Route::get('/viewLanMoney','payController@viewLan');
Route::post('/viewLanMoney','payController@viewLan');

Route::get('/viewBookMoney','payController@viewBook');
Route::post('/viewBookMoney','payController@viewBook');


Route::get('/assignMeal',['as'=>'assignMeal','uses'=>'bookingMealsController@get_users']);
Route::post('/calendarMeal','bookingMealsController@get_users');
Route::post('/viewDays','bookingMealsController@assignExercise');
Route::post('/calendar_meal','bookingMealsController@assign');

Route::get('/assingAllMeals','bookingMealsController@view');
Route::post('/trackmeal','bookingMealsController@view');


/* Start Walid Works*/


/* Start Walid Works*/

Route::get('ViewBrand', 'BrandController@viewBrand');
route::get('/addBrand','BrandController@addBrand');
route::post('/addBrand','BrandController@addBrand');
route::get('/addBrand/{id}',function ($id){
    $brand=Brand::find($id);
    $brand->delete();
    return redirect("ViewBrand");
});
Route::get('editBrand/{id}','BrandController@editBrand');
Route::post('editBrand/{id}','BrandController@editBrand');
/*End Route Size */

/*Start Route Color */
Route::get('ViewColor', 'ColorController@viewColor');
route::get('/addColor','ColorController@addColor');
route::post('/addColor','ColorController@addColor');
route::get('/addColor/{id}',function ($id){
    $color=Color::find($id);
    $color->delete();
    return redirect("ViewColor");
});
Route::get('editColor/{id}','ColorController@editColor');
Route::post('editColor/{id}','ColorController@editColor');
/*End Route Color */

/*Start Route Supplier */
Route::get('ViewSupplier', 'SupplierController@viewSupplier');
route::get('/addSupplier','SupplierController@addSupplier');
route::post('/addSupplier','SupplierController@addSupplier');
route::get('/addSupplier/{id}',function ($id){
    $supplier=Supplier::find($id);
    $supplier->delete();
    return redirect("ViewSupplier");
});
Route::get('editSupplier/{id}','SupplierController@editSupplier');
Route::post('editSupplier/{id}','SupplierController@editSupplier');
/*End Route Supplier */

/*Start Route Size */
Route::get('ViewSize', 'SizeController@viewSize');
route::get('/addSize','SizeController@addSize');
route::post('/addSize','SizeController@addSize');
route::get('/addSize/{id}',function ($id){
    $size=Size::find($id);
    $size->delete();
    return redirect("ViewSize");
});
Route::get('editSize/{id}','SizeController@editSize');
Route::post('editSize/{id}','SizeController@editSize');
/*End Route Size */

/*Start Route History */
Route::get('ViewHistory', 'HistoryController@viewHistory');
route::get('/addHistory','HistoryController@addHistory');
route::post('/addHistory','HistoryController@addHistorypost');
/*End Route History */

/*Start Route Product */
Route::get('ViewProduct', 'ProductController@viewProduct');
route::get('/addProduct','ProductController@addProduct');
route::post('/addProduct','ProductController@addProductpost');
route::get('/addProduct/{id}',function ($id){
    $product=Product::find($id);
    $product->delete();
    return redirect("ViewProduct");
});
Route::get('editProduct/{id}','ProductController@editProduct');
Route::post('editProduct/{id}','ProductController@editProduct');
/*End Route Product */

/*Start Route Inventory */
Route::get('/SearchForSuppliersAndItProduct','InventoryController@search');
Route::post('/SearchForSuppliersAndItProduct','InventoryController@search');

Route::get('searchPost','InventoryController@searchPost');
Route::get('takeFromInventory/{id}', 'InventoryController@takeFromInventory');
Route::post('takeFromInventory/{id}', 'InventoryController@takeFromInventoryPost');
Route::get('ViewInventory', 'InventoryController@viewInventory');
route::get('/addInventory','InventoryController@addInventory');
route::post('/addInventory','InventoryController@addInventorypost');
route::get('/addInventory/{id}',function ($id){
    $inventory=Inventory::find($id);
    $inventory->delete();
    return redirect("ViewInventory");
});
Route::get('editInventory/{id}','InventoryController@editInventory');
Route::post('editInventory/{id}','InventoryController@editInventory');
/*End Route Inventory */

/*Start Route BookingTest */
Route::get('/viewBookingTest'		, 'BookingTestController@selectBookingTests');
Route::post('/viewBookingTest'		, 'BookingTestController@viewBookingTest');
route::get('/addBookingTest'		,'BookingTestController@addBookingTest');
route::post('/addBookingTest'		,'BookingTestController@addBookingTest');
route::get('/deleteBookingTest/{id}','BookingTestController@deleteBookingTest');

/*End Route BookingTest */

/*Start Route Roll */
Route::get('viewSalaryByMonth'			, 'SalaryController@viewSalaryByMonth');
Route::post('viewSalaryByMonth'			, 'SalaryController@viewSalaryByMonth');
Route::post('viewSalaryByPerson/{id}'	, 'SalaryController@viewSalaryByPerson');
Route::get('viewSalaryByPerson/{id}'	, 'SalaryController@viewSalaryByPerson');
route::get('/addSalary'					,'SalaryController@addSalary');
route::post('/addSalary'				,'SalaryController@addSalary');
/*End Route Roll */

route::get('/addBookingTest'		,'BookingTestController@addBookingTest');
route::post('/addBookingTest'		,'BookingTestController@addBookingTest');
route::get('/deleteBookingTest/{id}','BookingTestController@deleteBookingTest');
/*Start Route Test */
Route::get('/viewTest'					, 'TestController@selectTestsToView');
Route::post('/viewTest'					, 'TestController@viewTest');
route::get('/addTest'					,'TestController@addTest');
route::post('/addTest'					,'TestController@addTest');
route::get('/addTest/{id}'				,'TestController@deleteTest');
Route::get('editTest/{id}'				,'TestController@editTest');
Route::post('editTest/{id}'				,'TestController@editTest');
/*End Route Test */
/*Start Route Currency */
Route::get('viewCurrency'		, 'CurrencyController@viewCurrency');
route::get('/addCurrency'		,'CurrencyController@addCurrency');
route::post('/addCurrency'		,'CurrencyController@addCurrency');
route::get('/deleteCurrency/{id}'	,'CurrencyController@deleteCurrency');
Route::get('editCurrency/{id}'	,'CurrencyController@editCurrency');
Route::post('editCurrency/{id}'	,'CurrencyController@editCurrency');


Route::get('/viewUnit'			,'unitController@view');
Route::get('/createUnit'		,'unitController@create');
Route::post('/createUnit'		,'unitController@create');
Route::get('editUnit/{id}'		,'unitController@editUnit');
Route::post('editUnit/{id}'		,'unitController@editUnit');
Route::get('/equivalent_units/{id}'	,'unitController@view_equivalent');
Route::get('/add_equivalent/{id}' ,'unitController@add_equivalent');
Route::post('/add_equivalent/{id}' ,'unitController@add_equivalent');

//Start Route Category
Route::get('viewCategory'		, 'CategoryController@viewCategory');
route::get('/addCategory'		,'CategoryController@addCategory');
route::post('/addCategory'		,'CategoryController@addCategory');
route::get('/addCategory/{id}'	,'CategoryController@deleteCategory');
Route::get('editCategory/{id}'	,'CategoryController@editCategory');
Route::post('editCategory/{id}'	,'CategoryController@editCategory');
/*End Route Currency */

/*Start Route Spot */
Route::get('viewSpot'			, 'SpotController@viewSpot');
route::get('/addSpot'			,'SpotController@addSpot');
route::post('/addSpot'			,'SpotController@addSpot');
route::get('/deleteSpot/{id}'	,'SpotController@delete');
route::get('/detailsSpot/{id}'	,'SpotController@detailsSpot');
Route::get ('editSpot/{id}'		,'SpotController@editSpot');
Route::post('editSpot/{id}'		,'SpotController@editSpot');
/*End Route Spot */

/*Start Route SpotTypes */
Route::get('viewSpotTypes'        ,'SpotController@viewSpotTypes');
route::get('/createSpotType'      ,'SpotController@createSpotType');
route::post('/createSpotType'     ,'SpotController@createSpotType');
route::get('/updateSpotType/{id}' ,'SpotController@updateSpotType');
Route::post('/updateSpotType/{id}','SpotController@updateSpotType');
Route::get('/deleteSpotType/{id}','SpotController@deleteSpotType');
/*End Route SpotTypes */

Route::get('/viewItem'		, 'ItemController@viewItem');
route::get('/addItem'		,'ItemController@addItem');
route::post('/addItem'		,'ItemController@addItem');
route::get('/deleteItem/{id}'	,'ItemController@delete');
Route::get ('editItem/{id}'	,'ItemController@editItem');
Route::post('editItem/{id}'	,'ItemController@editItem');
/*Start Route Type */
Route::get('viewTypeOfInventory'		, 'TypeController@viewTypeOfInventory');
route::get('/addTypeOfInventory'		,'TypeController@addTypeOfInventory');
route::post('/addTypeOfInventory'		,'TypeController@addTypeOfInventory');
route::get('/addTypeOfInventory/{id}'	,'TypeController@deleteType');
Route::get('editTypeOfInventory/{id}'	,'TypeController@editTypeOfInventory');
Route::post('editTypeOfInventory/{id}'	,'TypeController@editTypeOfInventory');
/*End Route Spot */



/*Start Route medical */
Route::get('/viewMedical'    , 'medicalController@view');
route::get('/createMedical'   ,'medicalController@create');
route::post('/createMedical'    ,'medicalController@create');
route::get('/deleteMedical/{id}' ,'medicalController@delete');
Route::get ('updateMedical/{id}' ,'medicalController@update');
Route::post('updateMedical/{id}' ,'medicalController@update');
/*Start Route medical */

/*Start Route medical */
Route::get('/viewPhysiotherapy'    , 'PhysiotherapyController@regular_view');

Route::post('/viewPhysiotherapy'    , 'PhysiotherapyController@view');

Route::get('/SPA_ToolsView'    , 'SPA_ToolsController@regular_view');
Route::post('/SPA_ToolsView'    , 'SPA_ToolsController@view');




route::get('/createPhysiotherapy'   ,'PhysiotherapyController@create');

route::post('/createPhysiotherapy'    ,'PhysiotherapyController@create');

route::get('/ajaxInPhysiotherapy'   ,'PhysiotherapyController@ajaxInPhysiotherapy');

route::get('/deletePhysiotherapy/{id}' ,'PhysiotherapyController@delete');
Route::get ('updatePhysiotherapy/{id}' ,'PhysiotherapyController@update');
Route::post('updatePhysiotherapy/{id}' ,'PhysiotherapyController@update');
/*Start Route medical */


/*Start Route ShopBooing */

Route::get('takeFromInventory/{id}', 'InventoryController@takeFromInventory');
Route::post('takeFromInventory/{id}', 'InventoryController@takeFromInventoryPost');
Route::get('ViewShopBooking', 'ShopBookingController@viewShopBooking');
Route::get('viewShopBookingSale', 'ShopBookingController@viewShopBookingSale');
route::get('/addInventory','InventoryController@addInventory');
route::post('/addInventory','InventoryController@addInventorypost');
route::get('/addInventory/{id}',function ($id){
    $inventory=Inventory::find($id);
    $inventory->delete();
    return redirect("ViewInventory");
});
Route::get('editInventory/{id}','InventoryController@editInventory');
Route::post('editInventory/{id}','InventoryController@editInventory');
Route::get('/searchShop','ShopBookingController@searchShop');
Route::post('/searchShop','ShopBookingController@searchShop');
Route::get('/searchIncoming','ShopBookingController@searchIncoming');
Route::post('/searchIncoming','ShopBookingController@searchIncoming');


/*End Route ShopBooing */

// Start Route Bill
Route::get('/createBill','BillController@createBill');
Route::post('/createBill','BillController@createBill');

###########################################################################################################
###########################################################################################################
//Start Route DataBaseItem

route::get('/createDatabaseItem'    ,'DataBaseItemController@create');
route::post('/createDatabaseItem'   ,'DataBaseItemController@create');
route::get('/viewDatabaseItem'      ,'DataBaseItemController@view');
route::post('/viewDatabaseItem'    ,'DataBaseItemController@viewDate');
route::get('/viewStockItem'         ,'DataBaseItemController@viewStockItem');
route::post('/viewStockItem'       ,'DataBaseItemController@viewStockItems');
route::get('/incomingStock'         ,'DataBaseItemController@incomingStock');
route::post('/incomingStock'        ,'DataBaseItemController@incomingStocks');
route::post('/fetchUnit'            ,'DataBaseItemController@fetchUnit');

route::get('/manualIncreaseDataBaseItem'    ,'DataBaseItemController@manualIncreaseDataBaseItem');
route::post('/manualIncreaseDataBaseItem'   ,'DataBaseItemController@manualIncreaseDataBaseItem');

route::get('/manualDecreaseDataBaseItem'    ,'DataBaseItemController@manualIncreaseDataBaseItem');
route::post('/manualDecreaseDataBaseItem'   ,'DataBaseItemController@manualIncreaseDataBaseItem');

route::get('/viewQtyAdjustmentLog'    ,'DataBaseItemController@viewQtyAdjustmentLog');
route::post('/viewQtyAdjustmentLog'   ,'DataBaseItemController@viewQtyAdjustmentLogs');

route::get('/welcomePacksAssign'    ,'DataBaseItemController@welcomePacksAssign');
route::post('/welcomePacksAssign'   ,'DataBaseItemController@welcomePacksAssign');

route::get('/viewWelcomePacksPage'    ,'DataBaseItemController@viewWelcomePacksPage');
route::post('/welcomePacksView'   ,'DataBaseItemController@viewWelcomePacks');

route::get('/purchaseOrdersCreate'    ,'DataBaseItemController@purchaseOrdersCreate');
route::post('/purchaseOrdersCreate'   ,'DataBaseItemController@purchaseOrdersCreate');

route::get('/purchaseOrdersViewPO'    ,'DataBaseItemController@purchaseOrdersViewPO');
route::post('/purchaseOrdersViewPO'   ,'DataBaseItemController@purchaseOrdersViewPO');

route::get('/purchaseOrdersViewPOsLog'    ,'DataBaseItemController@purchaseOrdersViewPOsLog');
route::post('/purchaseOrdersViewPOsLog'   ,'DataBaseItemController@purchaseOrdersViewPOsLog');

route::post('/fetchItem'   ,'DataBaseItemController@fetchItem');
route::post('/fetchSupplier'   ,'DataBaseItemController@fetchSupplier');
// End Route DataBaseItem
###########################################################################################################
###########################################################################################################

//Start Route ItemInventory
Route::get('viewItemInventory'					,'ItemInventoryController@viewItemInventory');
route::get('/addItemInventoryFirstTime'			,'ItemInventoryController@addItemInventoryFirstTime');
route::post('/addItemInventoryFirstTime'		,'ItemInventoryController@addItemInventoryFirstTime');
route::get('/addItemInventoryWithBarcode/{id}'	,'ItemInventoryController@addItemInventoryWithBarcode');
route::post('/addItemInventoryWithBarcode/{id}'	,'ItemInventoryController@addItemInventoryWithBarcode');
Route::get('editItemInventory/{id}'				,'ItemInventoryController@editItemInventory');
Route::post('editItemInventory/{id}'			,'ItemInventoryController@editItemInventory');
route::get('/deleteItemInventory/{id}'			,'ItemInventoryController@deleteItemInventory');
route::get('/addItemInInventory'				,'ItemInventoryController@addItemInInventory');
route::post('/addItemInInventory'				,'ItemInventoryController@addItemInInventory');
Route::get('viewItemInInventory'				,'ItemInventoryController@viewItemInInventory');
Route::get('/inventory', function(Request $request){
    return view('layouts.inventory');
});
//End Route ItemInventory


//Start Route ItemShop
Route::get('/fetchItemShop'		,'ItemShopController@fetchItemShop');
route::post('/fetchItemShop'	,'ItemShopController@fetchItemShop');
//i need to check the quntity of items
route::post('/sale'				,'ItemShopController@sale');
Route::get('/shop', function(Request $request){
    return view('layouts.shop');
});
Route::get('/refunds'	,'ItemShopController@refunds');
route::post('/refunds'	,'ItemShopController@refunds');

//End Route ItemShop


/* i don't finished it i need to work it
** Route::get('viewAllThingAboutItemInventory'		,'ItemInventoryController@viewAllThingAboutItemInventory');
** Route::get('viewItemOutInventory'				,'ItemInventoryController@viewItemOutInventory');
*/
Route::get('/viewDailyFood','InventoryController@viewDailyFood');
Route::get('/discountIngredient/{id}/{quantitiy}','InventoryController@discount');

Route::get('/viewDetailsMeal/{id}','mealController@viewDetails');


Route::get('/viewClasses','classController@view');
Route::get('/createClasses','classController@create');
Route::post('/createClasses','classController@create');

Route::get('/deleteClasses/{id}','classController@delete');

Route::get('/viewReport','bookingMealsController@report');
Route::post('/viewReport','bookingMealsController@report');


Route::get('/viewEvaluateHouse','EvaController@view');
Route::get('/createEvaluateHouse','EvaController@create');
Route::post('/createEvaluateHouse','EvaController@create');
Route::get('/updateEvaluateHouse/{id}','EvaController@update');
Route::post('/updateEvaluateHouse/{id}','EvaController@update');

Route::get('/viewEvaluateHouseKeeping','EvaHouseController@view');
Route::post('/viewEvaluateHouseKeeping','EvaHouseController@view');

Route::get('/createEvaluateHouseKeeping','EvaHouseController@create');
Route::post('/createEvaluateHouseKeeping','EvaHouseController@create');
Route::get('/login',function (){

    return view("auth.alogin");
});
Route::get('/login_ar',function (){

    return view("auth.login");
});

Route::post('/login','Auth\LoginController@login');
Route::post('/register','Auth\RegisterController@register');

Route::get('/register',function (){

    return view("auth.aregester");
});
Route::get('/register_ar',function (){

    return view("auth.register");
});

// End Route Bill

/* End Walid Works */
Route::get('/appointment','mealController@appointment');
Route::post('/appointment','mealController@appointment');

/*Reports routes */
Route::get('/BookingReport','reportController@BookingReport');
Route::post('/BookingReports','reportController@BookingReports');

Route::get('/ConsumptionReport','ReportConsumptionController@ConsumptionReport');
Route::post('/ConsumptionReport','ReportConsumptionController@ConsumptionReport');

Route::get('/BeverageCostingReport','ReportConsumptionController@BeverageCostingReport');
Route::post('/BeverageCostingReport','ReportConsumptionController@BeverageCostingReport');

Route::get('/BeverageListReport','ReportConsumptionController@BeverageListReport');
Route::post('/BeverageListReport','ReportConsumptionController@BeverageListReport');

Route::get('/MealPlanReport','ReportConsumptionController@MealPlanReport');
Route::post('/MealPlanReport','ReportConsumptionController@MealPlanReport');

Route::get('/WeaklyMealPlanReport','ReportConsumptionController@WeaklyMealPlanReport');
Route::post('/WeaklyMealPlanReport','ReportConsumptionController@WeaklyMealPlanReport');

Route::get('/CostingReport','ReportConsumptionController@CostingReport');
Route::post('/CostingReport','ReportConsumptionController@CostingReport');

Route::post('/createBeverage','mealController@createBeverage');
Route::get('/createBeverage','mealController@createBeverage');

Route::get('/viewBeverage','mealController@viewBeverage');
Route::post('/viewBeverage','mealController@viewBeverage');

Route::get('/deletebeverage','mealController@deletebeverage');
Route::post('/deletebeverage','mealController@deletebeverage');

Route::get('/IngredientReport','mealController@IngredientReport');
Route::post('/IngredientReport','mealController@IngredientReport');

Route::get('/IndividualMealPlanReport','ReportConsumptionController@IndividualMealPlanReport');
Route::post('/IndividualMealPlanReport','ReportConsumptionController@IndividualMealPlanReport');

Route::get('/IngredientListReport','ReportConsumptionController@IngredientListReport');
Route::post('/IngredientListReport','ReportConsumptionController@IngredientListReport');

Route::get('/IngredientExpiryReport','ReportConsumptionController@IngredientExpiryReport');
Route::post('/IngredientExpiryReport','ReportConsumptionController@IngredientExpiryReport');

Route::get('/MealDetailedReport','ReportConsumptionController@MealDetailedReport');
Route::post('/MealDetailedReport','ReportConsumptionController@MealDetailedReport');

Route::get('/RecipeDetailedReport','ReportConsumptionController@RecipeDetailedReport');
Route::post('/RecipeDetailedReport','ReportConsumptionController@RecipeDetailedReport');

Route::get('/MealsPlanReport','ReportConsumptionController@MealsPlanReport');
Route::post('/MealsPlanReport','ReportConsumptionController@MealsPlanReport');

Route::get('/MealTimeReport','ReportConsumptionController@MealTimeReport');
Route::post('/MealTimeReport','ReportConsumptionController@MealTimeReport');

Route::get('/MealsListReport','ReportConsumptionController@MealsListReport');
Route::post('/MealsListReport','ReportConsumptionController@MealsListReport');

Route::get('/RecipesListReport','ReportConsumptionController@RecipesListReport');
Route::post('/RecipesListReport','ReportConsumptionController@RecipesListReport');

Route::post('/ActivityList','reportController@CampOccupancyChart');
Route::post('/CampOccupancyChart','reportController@CampOccupancyChart');



Route::get('/ActivityListReport','ActivityReportContoller@showActivityList');
Route::post('/ActivityListReports','ActivityReportContoller@showActivityListPostRequest');

Route::get('/ActivityDetailedReport','ActivityReportContoller@showActivityDetailed');
Route::post('/ActivityDetailedReports','ActivityReportContoller@showActivityDetailedPost');

Route::get('/FitnessToolsAndEquipment','ActivityReportContoller@FitnessToolsAndEquipment');
Route::post('/FitnessToolsAndEquipments','ActivityReportContoller@FitnessToolsAndEquipmentPost');

Route::get('/individualActivitiesPlanReport','ActivityReportContoller@individualActivitiesPlanReport');
Route::post('/individualActivitiesPlanReports','ActivityReportContoller@individualActivitiesPlanReportPost');

Route::get('/GuestFitnesTest','ActivityReportContoller@GuestFitnesTest');
Route::post('/GuestFitnesTests','ActivityReportContoller@GuestFitnesTestPost');


Route::get('/GuestHealthOverview','ActivityReportContoller@GuestHealthOverview');
Route::post('/GuestHealthOverviews','ActivityReportContoller@GuestHealthOverviewPost');


Route::get('/GuestQuesionnaire','ActivityReportContoller@GuestQuesionnaire');
Route::post('/GuestQuesionnaires','ActivityReportContoller@GuestQuesionnairePost');


Route::get('/GuestsEvaluationCollective','ActivityReportContoller@GuestsEvaluationCollective');
Route::post('/GuestsEvaluationCollectives','ActivityReportContoller@GuestsEvaluationCollectivePost');


Route::get('/MedicalAndFitnesCondition','ActivityReportContoller@MedicalAndFitnesCondition');
Route::post('/MedicalAndFitnesConditions','ActivityReportContoller@MedicalAndFitnesConditionPost');


Route::get('/CampWeeklyActivity','ActivityReportContoller@CampWeeklyActivity');
Route::post('/CampWeeklyActivitys','ActivityReportContoller@CampWeeklyActivityPost');

Route::get('/CampActivitiesPlanDetailed','ActivityReportContoller@CampActivitiesPlanDetailed');
Route::post('/CampActivitiesPlanDetaileds','ActivityReportContoller@CampActivitiesPlanDetailedPost');



Route::get('/FitnesTestsStandard','ActivityReportContoller@FitnesTestsStandard');
Route::post('/FitnesTestsStandards','ActivityReportContoller@FitnesTestsStandardPost');
