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
    Route::post('/updatePasswordAdmin/{id}',[adminController::class, 'updatePassAdmin'])->name('updatePassAdmin');
    Route::post('/resetPasswordFaculty/{id}',[adminController::class, 'resetPasswordFaculty'])->name('resetPasswordFaculty');
    Route::post('/updatePasswordStudent/{id}',[adminController::class, 'resetPasswordStudent'])->name('resetPasswordStudent');
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
    Route::post('/updatePasswordFaculty/{id}',[infocardMaintain::class, 'updatePassFaculty'])->name('updatePassFaculty');


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

    Route::get('/w_sortNameD',[infocardMaintain::class, 'sortNameDesc'])->name('sortNameDesc');
    Route::get('/w_sortNameA',[infocardMaintain::class, 'sortNameAsc'])->name('sortNameAsc');
    Route::get('/w_sortDateD',[infocardMaintain::class, 'dateAddedDesc'])->name('dateAddedDesc');
    Route::get('/w_sortDateA',[infocardMaintain::class, 'dateAddedAsc'])->name('dateAddedAsc');
    Route::get('/t_titleD',[infocardMaintain::class, 'titleDesc'])->name('titleDesc');
    Route::get('/t_titleA',[infocardMaintain::class, 'titleAsc'])->name('titleAsc');
    Route::get('/t_dateD',[infocardMaintain::class, 'datePubDesc'])->name('datePubDesc');
    Route::get('/t_dateA',[infocardMaintain::class, 'datePubAsc'])->name('datePubAsc');
    Route::get('/t_authorD',[infocardMaintain::class, 'authorDesc'])->name('authorDesc');
    Route::get('/t_authorA',[infocardMaintain::class, 'authorAsc'])->name('authorAsc');

    Route::get('/j_titleD',[infocardMaintain::class, 'j_titleDesc'])->name('j_titleDesc');
    Route::get('/j_titleA',[infocardMaintain::class, 'j_titleAsc'])->name('j_titleAsc');
    Route::get('/j_dateD',[infocardMaintain::class, 'j_datePubDesc'])->name('j_datePubDesc');
    Route::get('/j_dateA',[infocardMaintain::class, 'j_datePubAsc'])->name('j_datePubAsc');
    Route::get('/j_authorD',[infocardMaintain::class, 'j_authorDesc'])->name('j_authorDesc');
    Route::get('/j_authorA',[infocardMaintain::class, 'j_authorAsc'])->name('j_authorAsc');
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
    Route::post('/updatePasswordStudent/{id}',[studentController::class, 'updatePassStudent'])->name('updatePassStudent');
    Route::get('/S_searchRequest',[studentController::class, 'searchRequest'])->name('searchRequest');

    Route::get('/w_sortNameD_S',[studentController::class, 'sortNameDesc'])->name('sortNameDesc_S');
    Route::get('/w_sortNameA_S',[studentController::class, 'sortNameAsc'])->name('sortNameAsc_S');
    Route::get('/w_sortDateD_S',[studentController::class, 'dateAddedDesc'])->name('dateAddedDesc_S');
    Route::get('/w_sortDateA_S',[studentController::class, 'dateAddedAsc'])->name('dateAddedAsc_S');
    Route::get('/t_titleD_S',[studentController::class, 'titleDesc'])->name('titleDesc_S');
    Route::get('/t_titleA_S',[studentController::class, 'titleAsc'])->name('titleAsc_S');
    Route::get('/t_dateD_S',[studentController::class, 'datePubDesc'])->name('datePubDesc_S');
    Route::get('/t_dateA_S',[studentController::class, 'datePubAsc'])->name('datePubAsc_S');
    Route::get('/t_authorD_S',[studentController::class, 'authorDesc'])->name('authorDesc_S');
    Route::get('/t_authorA_S',[studentController::class, 'authorAsc'])->name('authorAsc_S');

    Route::get('/j_titleD_S',[studentController::class, 'j_titleDesc'])->name('j_titleDesc_S');
    Route::get('/j_titleA_S',[studentController::class, 'j_titleAsc'])->name('j_titleAsc_S');
    Route::get('/j_dateD_S',[studentController::class, 'j_datePubDesc'])->name('j_datePubDesc_S');
    Route::get('/j_dateA_S',[studentController::class, 'j_datePubAsc'])->name('j_datePubAsc_S');
    Route::get('/j_authorD_S',[studentController::class, 'j_authorDesc'])->name('j_authorDesc_S');
    Route::get('/j_authorA_S',[studentController::class, 'j_authorAsc'])->name('j_authorAsc_S');
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

Route::get('/w_sortNameD_G',[guestController::class, 'sortNameDesc'])->name('sortNameDesc_G');
Route::get('/w_sortNameA_G',[guestController::class, 'sortNameAsc'])->name('sortNameAsc_G');
Route::get('/w_sortDateD_G',[guestController::class, 'dateAddedDesc'])->name('dateAddedDesc_G');
Route::get('/w_sortDateA_G',[guestController::class, 'dateAddedAsc'])->name('dateAddedAsc_G');
Route::get('/t_titleD_G',[guestController::class, 'titleDesc'])->name('titleDesc_G');
Route::get('/t_titleA_G',[guestController::class, 'titleAsc'])->name('titleAsc_G');
Route::get('/t_dateD_G',[guestController::class, 'datePubDesc'])->name('datePubDesc_G');
Route::get('/t_dateA_G',[guestController::class, 'datePubAsc'])->name('datePubAsc_G');
Route::get('/t_authorD_G',[guestController::class, 'authorDesc'])->name('authorDesc_G');
Route::get('/t_authorA_G',[guestController::class, 'authorAsc'])->name('authorAsc_G');

Route::get('/j_titleD_G',[guestController::class, 'j_titleDesc'])->name('j_titleDesc_G');
Route::get('/j_titleA_G',[guestController::class, 'j_titleAsc'])->name('j_titleAsc_G');
Route::get('/j_dateD_G',[guestController::class, 'j_datePubDesc'])->name('j_datePubDesc_G');
Route::get('/j_dateA_G',[guestController::class, 'j_datePubAsc'])->name('j_datePubAsc_G');
Route::get('/j_authorD_G',[guestController::class, 'j_authorDesc'])->name('j_authorDesc_G');
Route::get('/j_authorA_G',[guestController::class, 'j_authorAsc'])->name('j_authorAsc_G');


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
Route::get('/construction',[IEMSWebsite::class,'underConstruction']);
require __DIR__.'/auth.php';



