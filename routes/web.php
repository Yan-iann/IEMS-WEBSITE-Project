<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\allInfocardMaintain;
use App\Http\Controllers\infocardMaintain;
use App\Http\Controllers\adminController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\guestController;
use App\Http\Controllers\IEMSWebsite;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisteredUserController;

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

//main landing page of the site
Route::get('/', [IEMSWebsite::class, 'accessHome']); //access announcement table
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');

Route::prefix('IEMS')->middleware('auth','isFirstime')->group(function(){
    Route::get('/firstTime', [RegisteredUserController::class, 'firstTime'])->name('firstTime');
    Route::post('/updatePassword/{id}',[RegisteredUserController::class, 'updatePass'])->name('updatePass');
});

Route::prefix('IEMSAdmin')->middleware('auth','isAdmin')->group(function(){
    Route::get('/adminDashboard', [adminController::class, 'adminDashboard'])->name('adminDashboard');
    Route::post('/storeUser',[adminController::class, 'storeUserInfo'])->name('storeUserInfo');
    Route::post('/storeUserFaculty',[adminController::class, 'storeUserFaculty'])->name('storeUserFaculty');
    Route::post('/updateUser/{id}',[adminController::class, 'updateUser'])->name('updateUser');
    Route::get('/deleteUser/{id}',[adminController::class, 'deleteUser'])->name('deleteUser');
    Route::get('/AdminAccounts', [adminController::class, 'adminAccounts'])->name('adminAccounts');
    Route::get('/facultyAccounts', [adminController::class, 'adminFacultyAccounts'])->name('adminFacultyAccounts');
    Route::get('/studentAccounts', [adminController::class, 'adminStudentAccounts'])->name('adminStudentAccounts');
    Route::get('/A_profile',[adminController::class, 'Aprofile'])->name('Aprofile');
    Route::post('/A_editProfile/{id}',[adminController::class, 'editAprofile'])->name('editAprofile');
    Route::get('/A_searchFaculty',[adminController::class, 'searchFaculty'])->name('searchFaculty');
    Route::get('/A_searchStudent',[adminController::class, 'searchStudent'])->name('searchStudent');
});

Route::prefix('IEMSFaculty')->middleware('auth','isFaculty')->group(function(){
    Route::get('/facultyDashboard', [infocardMaintain::class, 'wildlife'])->name('facultyDashboard');
    Route::post('/store',[allInfocardMaintain::class,'storeDataWildlife'])->name('store');
    Route::post('/storeBone',[allInfocardMaintain::class,'storeDataBone'])->name('storeDataBone');
    Route::post('/storeDataRef',[allInfocardMaintain::class,'storeDataRef'])->name('storeDataRef');
    Route::post('/storeThesis',[allInfocardMaintain::class,'storeDataThesis'])->name('storeThesis');
    Route::post('/storeJournal',[allInfocardMaintain::class,'storeDataJournal'])->name('storeJournal');
    //for bone
    Route::get('/wildlife',[infocardMaintain::class, 'wildlife'])->name('wildlife');
    Route::get('/boneCollection',[infocardMaintain::class, 'boneCollection'])->name('boneCollection');
    Route::post('/updateBone/{info_ID}',[infocardMaintain::class, 'updateBone'])->name('updateBone');
    Route::get('/deleteBone/{info_ID}',[infocardMaintain::class, 'deleteBone'])->name('deleteBone');
    //for reference
    Route::post('/updateRef/{info_ID}',[infocardMaintain::class, 'updateRef'])->name('updateRef');
    Route::get('/refCollection',[infocardMaintain::class, 'refCollection'])->name('refCollection');
    Route::get('/deleteRef/{info_ID}',[infocardMaintain::class, 'deleteRef'])->name('deleteRef');
    //for critters
    Route::get('/showWildlife/{info_ID}',[infocardMaintain::class, 'showWildlife'])->name('showWildlife');
    Route::get('/editWildlife/{info_ID}',[infocardMaintain::class, 'editWildlife'])->name('editWildlife');
    Route::post('/updateWildlife/{info_ID}',[infocardMaintain::class, 'updateWildlife'])->name('updateWildlife');
    Route::get('/deleteWildlife/{info_ID}',[infocardMaintain::class, 'deleteWildlife'])->name('deleteWildlife');
    //for thesis
    Route::get('/thesis_paper',[infocardMaintain::class, 'thesis'])->name('thesis');
    Route::get('/gradThesis_paper',[infocardMaintain::class, 'gradThesis'])->name('gradThesis');
    Route::get('/undergradThesis_paper',[infocardMaintain::class, 'undergradThesis'])->name('undergradThesis');
    Route::get('/showThesis/{info_ID}',[infocardMaintain::class, 'showThesis'])->name('showThesis');
    Route::get('/editThesis/{info_ID}',[infocardMaintain::class, 'editThesis'])->name('editThesis');
    Route::post('/updateThesis/{info_ID}',[infocardMaintain::class, 'updateThesis'])->name('updateThesis');
    Route::get('/deleteThesis/{info_ID}',[infocardMaintain::class, 'deleteThesis'])->name('deleteThesis');
    //for journal
    Route::get('/journal_article',[infocardMaintain::class, 'journal'])->name('journal');
    Route::get('/showJournal/{info_ID}',[infocardMaintain::class, 'showJournal'])->name('showJournal');
    Route::get('/editJournal/{info_ID}',[infocardMaintain::class, 'editJournal'])->name('editJournal');
    Route::post('/updateJournal/{info_ID}',[infocardMaintain::class, 'updateJournal'])->name('updateJournal');
    Route::get('/deleteJournal/{info_ID}',[infocardMaintain::class, 'deleteJournal'])->name('deleteJournal');
    //for profile
    Route::get('/profile',[infocardMaintain::class, 'Fprofile'])->name('Fprofile');
    Route::post('/editProfile/{id}',[infocardMaintain::class, 'editFprofile'])->name('editFprofile');
    
    
    //for analytics
    Route::get('/analytics',[infocardMaintain::class, 'countAnalysis'])->name('analysis');
    //for request
    Route::get('/requestValidation',[infocardMaintain::class, 'request'])->name('Faculty_request');
    Route::get('/advanceSearchRequest',[infocardMaintain::class, 'advanceSearchReq'])->name('advanceSearchReq');
    Route::post('/updateAnnouncementF/{id}',[infocardMaintain::class, 'updateAnnoF'])->name('updateAnnoF');
    Route::get('/deleteAnnouncementF/{id}',[infocardMaintain::class, 'deleteAnnoF'])->name('deleteAnnoF');
    //for searching
    Route::get('/searchBone',[infocardMaintain::class, 'searchBone'])->name('searchBone');
    Route::get('/advanceSearchBone',[infocardMaintain::class, 'advanceSearchBone'])->name('advanceSearchBone');
    Route::get('/searchRequest',[infocardMaintain::class, 'searchReq'])->name('searchReq');
    Route::get('/searchWildlife',[infocardMaintain::class, 'searchWildlife'])->name('searchWildlife');
    Route::get('/advanceSearchWildlife',[infocardMaintain::class, 'advanceSearchWildlife'])->name('advanceSearchWildlife');
    Route::get('/searchThesis',[infocardMaintain::class, 'searchThesis'])->name('searchThesis');
    Route::get('/advanceSearchThesis',[infocardMaintain::class, 'advanceSearchThesis'])->name('advanceSearchThesis');
    Route::get('/searchJournal',[infocardMaintain::class, 'searchJournal'])->name('searchJournal');
    Route::get('/advanceSearchJournal',[infocardMaintain::class, 'advanceSearchJournal'])->name('advanceSearchJournal');
    Route::get('/advanceSearchRef',[infocardMaintain::class, 'advanceSearchRef'])->name('advanceSearchRef');
    Route::get('/searchRef',[infocardMaintain::class, 'searchRef'])->name('searchRef');
});

Route::prefix('IEMSStudent')->middleware('auth','isStudent')->group(function(){
    Route::get('/studentDashboard', [studentController::class, 'studentDashboard'])->name('studentDashboard');
    Route::get('/S_boneCollection',[studentController::class, 'boneCollection'])->name('S_boneCollection');
    Route::get('/S_refCollection',[studentController::class, 'refCollection'])->name('S_refCollection');
    Route::get('/thesis_papers',[studentController::class, 'thesis'])->name('Student_thesis');
    Route::get('/S_gradThesis_paper',[studentController::class, 'gradThesis'])->name('S_gradThesis');
    Route::get('/S_undergradThesis_paper',[studentController::class, 'undergradThesis'])->name('S_undergradThesis');
    Route::get('/journal_articles',[studentController::class, 'journal'])->name('Student_journal');
    Route::get('/request',[studentController::class, 'request'])->name('Student_request');
    Route::post('/storeRequest',[studentController::class, 'storeAnno'])->name('storeAnno');
    Route::post('/updateAnnouncement/{id}',[studentController::class, 'updateAnno'])->name('updateAnno');
    Route::get('/deleteAnnouncement/{id}',[studentController::class, 'deleteAnno'])->name('deleteAnno');
    Route::get('/S_searchWildlife',[studentController::class, 'searchWildlife'])->name('S_searchWildlife');
    Route::get('/S_advanceSearchWildlife',[studentController::class, 'advanceSearchWildlife'])->name('S_advanceSearchWildlife');
    Route::get('/S_searchThesis',[studentController::class, 'searchThesis'])->name('S_searchThesis');
    Route::get('/S_advanceSearchThesis',[studentController::class, 'advanceSearchThesis'])->name('S_advanceSearchThesis');
    Route::get('/S_searchJournal',[studentController::class, 'searchJournal'])->name('S_searchJournal');
    Route::get('/S_advanceSearchJournal',[studentController::class, 'advanceSearchJournal'])->name('S_advanceSearchJournal');
    Route::get('/S_searchBone',[studentController::class, 'searchBone'])->name('S_searchBone');
    Route::get('/S_advanceSearchBone',[studentController::class, 'advanceSearchBone'])->name('S_advanceSearchBone');
    Route::get('/S_searchRef',[studentController::class, 'searchRef'])->name('S_searchRef');
    Route::get('/S_advanceSearchRef',[studentController::class, 'advanceSearchRef'])->name('S_advanceSearchRef');
    Route::get('/S_profile',[studentController::class, 'Sprofile'])->name('Sprofile');
    Route::post('/S_editProfile/{id}',[studentController::class, 'editSprofile'])->name('editSprofile');
});

//FOR GUEST///////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/dashboardGuest', [guestController::class, 'guestDashboard'])->name('guestDashboard');
Route::get('/G_thesis_papers',[guestController::class, 'thesis'])->name('Guest_thesis');
Route::get('/G_gradThesis_paper',[guestController::class, 'gradThesis'])->name('G_gradThesis');
Route::get('/G_undergradThesis_paper',[guestController::class, 'undergradThesis'])->name('G_undergradThesis');
Route::get('/G_journal_articles',[guestController::class, 'journal'])->name('Guest_journal');
Route::get('/G_boneCollection',[guestController::class, 'boneCollection'])->name('G_boneCollection');
Route::get('/G_refCollection',[guestController::class, 'refCollection'])->name('G_refCollection');

//for searching
Route::get('/G_searchWildlife',[guestController::class, 'searchWildlife'])->name('G_searchWildlife');
Route::get('/G_advanceSearchWildlife',[guestController::class, 'advanceSearchWildlife'])->name('G_advanceSearchWildlife');
Route::get('/G_searchThesis',[guestController::class, 'searchThesis'])->name('G_searchThesis');
Route::get('/G_advanceSearchThesis',[guestController::class, 'advanceSearchThesis'])->name('G_advanceSearchThesis');
Route::get('/G_searchJournal',[guestController::class, 'searchJournal'])->name('G_searchJournal');
Route::get('/G_advanceSearchJournal',[guestController::class, 'advanceSearchJournal'])->name('G_advanceSearchJournal');
Route::get('/G_searchBone',[guestController::class, 'searchBone'])->name('G_searchBone');
Route::get('/G_advanceSearchBone',[guestController::class, 'advanceSearchBone'])->name('G_advanceSearchBone');
Route::get('/G_searchRef',[guestController::class, 'searchRef'])->name('G_searchRef');
Route::get('/G_advanceSearchRef',[guestController::class, 'advanceSearchRef'])->name('G_advanceSearchRef');

//SITE ///////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/college',[IEMSWebsite::class, 'accessCollege']);
Route::get('/enrollment',[IEMSWebsite::class, 'accessEnrollment']);
Route::get('/facilities',[IEMSWebsite::class, 'accessFacilities']);
Route::get('/exhibit',[IEMSWebsite::class, 'accessLinus']);
Route::get('/rates',[IEMSWebsite::class, 'accessRates']);
Route::get('/facultystaff',[IEMSWebsite::class, 'accessFacultyStaff']); //access faculty table
Route::get('/announcement',[IEMSWebsite::class, 'accessAnnouncement']); //access announcement table
Route::get('/announcementDisplay/{anno_ID}',[IEMSWebsite::class, 'accessAnnouncementDisplay'])->name('accessAnnouncementDisplay'); // access announcement
Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact-us.store');
require __DIR__.'/auth.php';



