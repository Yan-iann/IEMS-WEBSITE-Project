<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4doJAQerBB62Zh1s',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MEAOgQq335sWKbC3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SV6sJ7aSiMpchAnh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8kK7dfJnUuLtpcHB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMS/firstTime' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'firstTime',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSAdmin/adminDashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminDashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSAdmin/storeUser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeUserInfo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSAdmin/storeUserFaculty' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeUserFaculty',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSAdmin/AdminAccounts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminAccounts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSAdmin/facultyAccounts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminFacultyAccounts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSAdmin/studentAccounts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminStudentAccounts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSAdmin/A_profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Aprofile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSAdmin/A_searchFaculty' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchFaculty',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSAdmin/A_searchStudent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchStudent',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/facultyDashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facultyDashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/storeBone' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeDataBone',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/storeDataRef' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeDataRef',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/storeThesis' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeThesis',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/storeJournal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeJournal',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/wildlife' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wildlife',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/boneCollection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'boneCollection',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/refCollection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'refCollection',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/thesis_paper' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thesis',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/gradThesis_paper' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gradThesis',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/undergradThesis_paper' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'undergradThesis',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/journal_article' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'journal',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Fprofile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/analytics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'analysis',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/requestValidation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Faculty_request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/advanceSearchRequest' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'advanceSearchReq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/searchBone' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchBone',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/advanceSearchBone' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'advanceSearchBone',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/searchRequest' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchReq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/searchWildlife' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchWildlife',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/advanceSearchWildlife' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'advanceSearchWildlife',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/searchThesis' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchThesis',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/advanceSearchThesis' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'advanceSearchThesis',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/searchJournal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchJournal',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/advanceSearchJournal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'advanceSearchJournal',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/advanceSearchRef' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'advanceSearchRef',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/searchRef' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchRef',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/w_sortNameD' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sortNameDesc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/w_sortNameA' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sortNameAsc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/w_sortDateD' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dateAddedDesc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/w_sortDateA' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dateAddedAsc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/t_titleD' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'titleDesc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/t_titleA' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'titleAsc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/t_dateD' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'datePubDesc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/t_dateA' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'datePubAsc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/t_authorD' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'authorDesc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/t_authorA' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'authorAsc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/j_titleD' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'j_titleDesc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/j_titleA' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'j_titleAsc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/j_dateD' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'j_datePubDesc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/j_dateA' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'j_datePubAsc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/j_authorD' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'j_authorDesc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSFaculty/j_authorA' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'j_authorAsc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/studentDashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'studentDashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/S_boneCollection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'S_boneCollection',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/S_refCollection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'S_refCollection',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/thesis_papers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Student_thesis',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/S_gradThesis_paper' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'S_gradThesis',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/S_undergradThesis_paper' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'S_undergradThesis',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/journal_articles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Student_journal',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Student_request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/storeRequest' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeAnno',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/S_searchWildlife' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'S_searchWildlife',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/S_advanceSearchWildlife' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'S_advanceSearchWildlife',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/S_searchThesis' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'S_searchThesis',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/S_advanceSearchThesis' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'S_advanceSearchThesis',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/S_searchJournal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'S_searchJournal',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/S_advanceSearchJournal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'S_advanceSearchJournal',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/S_searchBone' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'S_searchBone',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/S_advanceSearchBone' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'S_advanceSearchBone',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/S_searchRef' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'S_searchRef',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/S_advanceSearchRef' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'S_advanceSearchRef',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/S_profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Sprofile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/S_searchRequest' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchRequest',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/w_sortNameD_S' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sortNameDesc_S',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/w_sortNameA_S' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sortNameAsc_S',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/w_sortDateD_S' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dateAddedDesc_S',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/w_sortDateA_S' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dateAddedAsc_S',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/t_titleD_S' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'titleDesc_S',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/t_titleA_S' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'titleAsc_S',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/t_dateD_S' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'datePubDesc_S',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/t_dateA_S' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'datePubAsc_S',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/t_authorD_S' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'authorDesc_S',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/t_authorA_S' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'authorAsc_S',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/j_titleD_S' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'j_titleDesc_S',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/j_titleA_S' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'j_titleAsc_S',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/j_dateD_S' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'j_datePubDesc_S',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/j_dateA_S' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'j_datePubAsc_S',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/j_authorD_S' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'j_authorDesc_S',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/IEMSStudent/j_authorA_S' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'j_authorAsc_S',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboardGuest' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'guestDashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/G_thesis_papers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Guest_thesis',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/G_gradThesis_paper' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'G_gradThesis',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/G_undergradThesis_paper' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'G_undergradThesis',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/G_journal_articles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Guest_journal',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/G_boneCollection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'G_boneCollection',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/G_refCollection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'G_refCollection',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/G_searchWildlife' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'G_searchWildlife',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/G_advanceSearchWildlife' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'G_advanceSearchWildlife',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/G_searchThesis' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'G_searchThesis',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/G_advanceSearchThesis' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'G_advanceSearchThesis',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/G_searchJournal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'G_searchJournal',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/G_advanceSearchJournal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'G_advanceSearchJournal',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/G_searchBone' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'G_searchBone',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/G_advanceSearchBone' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'G_advanceSearchBone',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/G_searchRef' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'G_searchRef',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/G_advanceSearchRef' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'G_advanceSearchRef',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/w_sortNameD_G' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sortNameDesc_G',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/w_sortNameA_G' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sortNameAsc_G',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/w_sortDateD_G' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dateAddedDesc_G',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/w_sortDateA_G' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dateAddedAsc_G',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/t_titleD_G' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'titleDesc_G',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/t_titleA_G' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'titleAsc_G',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/t_dateD_G' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'datePubDesc_G',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/t_dateA_G' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'datePubAsc_G',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/t_authorD_G' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'authorDesc_G',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/t_authorA_G' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'authorAsc_G',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/j_titleD_G' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'j_titleDesc_G',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/j_titleA_G' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'j_titleAsc_G',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/j_dateD_G' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'j_datePubDesc_G',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/j_dateA_G' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'j_datePubAsc_G',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/j_authorD_G' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'j_authorDesc_G',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/j_authorA_G' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'j_authorAsc_G',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/college' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pBPM6Hrltz6kRjys',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/enrollment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V8bQgE6rKZHyAUhm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/facilities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RkFJWljYfxxMR0Qn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/exhibit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3BIHymNNZ3xMp1u6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/rates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HP2ecEciXWxR8XTa',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/facultystaff' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RCx6SqZY6bWq0ERK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/announcement' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FmlibckFTCcLd5D0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IyXR6mYoqnaad9Ei',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'contact-us.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/construction' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::waE1tmMeRpxjyPtj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mDkOajRm11lEBvME',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/verify-email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.notice',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email/verification-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/confirm-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JNiFkRMx4lW3WNED',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/IEMS(?|/updatePassword/([^/]++)(*:39)|Admin/(?|update(?|User/([^/]++)(*:77)|Password(?|Admin/([^/]++)(*:109)|Student/([^/]++)(*:133)))|deleteUser/([^/]++)(*:162)|A_editProfile/([^/]++)(*:192)|resetPasswordFaculty/([^/]++)(*:229))|Faculty/(?|update(?|Bone/([^/]++)(*:271)|Ref/([^/]++)(*:291)|Wildlife/([^/]++)(*:316)|Thesis/([^/]++)(*:339)|Journal/([^/]++)(*:363)|PasswordFaculty/([^/]++)(*:395)|AnnouncementF/([^/]++)(*:425))|delete(?|Bone/([^/]++)(*:456)|Ref/([^/]++)(*:476)|Wildlife/([^/]++)(*:501)|Thesis/([^/]++)(*:524)|Journal/([^/]++)(*:548)|AnnouncementF/([^/]++)(*:578))|show(?|Wildlife/([^/]++)(*:611)|Thesis/([^/]++)(*:634)|Journal/([^/]++)(*:658))|edit(?|Wildlife/([^/]++)(*:691)|Thesis/([^/]++)(*:714)|Journal/([^/]++)(*:738)|Profile/([^/]++)(*:762)))|Student/(?|update(?|Announcement/([^/]++)(*:813)|PasswordStudent/([^/]++)(*:845))|deleteAnnouncement/([^/]++)(*:881)|S_editProfile/([^/]++)(*:911)))|/announcementDisplay/([^/]++)(*:950)|/reset\\-password/([^/]++)(*:983)|/verify\\-email/([^/]++)/([^/]++)(*:1023))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updatePass',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      77 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateUser',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      109 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updatePassAdmin',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      133 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'resetPasswordStudent',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      162 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deleteUser',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      192 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'editAprofile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      229 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'resetPasswordFaculty',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      271 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateBone',
          ),
          1 => 
          array (
            0 => 'info_ID',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      291 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateRef',
          ),
          1 => 
          array (
            0 => 'info_ID',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      316 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateWildlife',
          ),
          1 => 
          array (
            0 => 'info_ID',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      339 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateThesis',
          ),
          1 => 
          array (
            0 => 'info_ID',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      363 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateJournal',
          ),
          1 => 
          array (
            0 => 'info_ID',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      395 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updatePassFaculty',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      425 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateAnnoF',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      456 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deleteBone',
          ),
          1 => 
          array (
            0 => 'info_ID',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      476 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deleteRef',
          ),
          1 => 
          array (
            0 => 'info_ID',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      501 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deleteWildlife',
          ),
          1 => 
          array (
            0 => 'info_ID',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      524 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deleteThesis',
          ),
          1 => 
          array (
            0 => 'info_ID',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      548 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deleteJournal',
          ),
          1 => 
          array (
            0 => 'info_ID',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      578 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deleteAnnoF',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      611 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'showWildlife',
          ),
          1 => 
          array (
            0 => 'info_ID',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      634 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'showThesis',
          ),
          1 => 
          array (
            0 => 'info_ID',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      658 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'showJournal',
          ),
          1 => 
          array (
            0 => 'info_ID',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      691 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'editWildlife',
          ),
          1 => 
          array (
            0 => 'info_ID',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      714 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'editThesis',
          ),
          1 => 
          array (
            0 => 'info_ID',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      738 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'editJournal',
          ),
          1 => 
          array (
            0 => 'info_ID',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      762 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'editFprofile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      813 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateAnno',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      845 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updatePassStudent',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      881 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deleteAnno',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      911 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'editSprofile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      950 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'accessAnnouncementDisplay',
          ),
          1 => 
          array (
            0 => 'anno_ID',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      983 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1023 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.verify',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::4doJAQerBB62Zh1s' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::4doJAQerBB62Zh1s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MEAOgQq335sWKbC3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:297:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000047a0000000000000000";}";s:4:"hash";s:44:"BhpRCAck8NI1YgXrMPDZTVvCBdcbwt4z6YwfybAhtsQ=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::MEAOgQq335sWKbC3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SV6sJ7aSiMpchAnh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\IEMSWebsite@accessHome',
        'controller' => 'App\\Http\\Controllers\\IEMSWebsite@accessHome',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::SV6sJ7aSiMpchAnh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'firstTime' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMS/firstTime',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFirstime',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@firstTime',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@firstTime',
        'namespace' => NULL,
        'prefix' => '/IEMS',
        'where' => 
        array (
        ),
        'as' => 'firstTime',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updatePass' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'IEMS/updatePassword/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFirstime',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@updatePass',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@updatePass',
        'namespace' => NULL,
        'prefix' => '/IEMS',
        'where' => 
        array (
        ),
        'as' => 'updatePass',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminDashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSAdmin/adminDashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@adminDashboard',
        'controller' => 'App\\Http\\Controllers\\adminController@adminDashboard',
        'namespace' => NULL,
        'prefix' => '/IEMSAdmin',
        'where' => 
        array (
        ),
        'as' => 'adminDashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeUserInfo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'IEMSAdmin/storeUser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@storeUserInfo',
        'controller' => 'App\\Http\\Controllers\\adminController@storeUserInfo',
        'namespace' => NULL,
        'prefix' => '/IEMSAdmin',
        'where' => 
        array (
        ),
        'as' => 'storeUserInfo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeUserFaculty' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'IEMSAdmin/storeUserFaculty',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@storeUserFaculty',
        'controller' => 'App\\Http\\Controllers\\adminController@storeUserFaculty',
        'namespace' => NULL,
        'prefix' => '/IEMSAdmin',
        'where' => 
        array (
        ),
        'as' => 'storeUserFaculty',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateUser' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'IEMSAdmin/updateUser/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@updateUser',
        'controller' => 'App\\Http\\Controllers\\adminController@updateUser',
        'namespace' => NULL,
        'prefix' => '/IEMSAdmin',
        'where' => 
        array (
        ),
        'as' => 'updateUser',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deleteUser' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSAdmin/deleteUser/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@deleteUser',
        'controller' => 'App\\Http\\Controllers\\adminController@deleteUser',
        'namespace' => NULL,
        'prefix' => '/IEMSAdmin',
        'where' => 
        array (
        ),
        'as' => 'deleteUser',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminAccounts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSAdmin/AdminAccounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@adminAccounts',
        'controller' => 'App\\Http\\Controllers\\adminController@adminAccounts',
        'namespace' => NULL,
        'prefix' => '/IEMSAdmin',
        'where' => 
        array (
        ),
        'as' => 'adminAccounts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminFacultyAccounts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSAdmin/facultyAccounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@adminFacultyAccounts',
        'controller' => 'App\\Http\\Controllers\\adminController@adminFacultyAccounts',
        'namespace' => NULL,
        'prefix' => '/IEMSAdmin',
        'where' => 
        array (
        ),
        'as' => 'adminFacultyAccounts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminStudentAccounts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSAdmin/studentAccounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@adminStudentAccounts',
        'controller' => 'App\\Http\\Controllers\\adminController@adminStudentAccounts',
        'namespace' => NULL,
        'prefix' => '/IEMSAdmin',
        'where' => 
        array (
        ),
        'as' => 'adminStudentAccounts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Aprofile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSAdmin/A_profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@Aprofile',
        'controller' => 'App\\Http\\Controllers\\adminController@Aprofile',
        'namespace' => NULL,
        'prefix' => '/IEMSAdmin',
        'where' => 
        array (
        ),
        'as' => 'Aprofile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'editAprofile' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'IEMSAdmin/A_editProfile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@editAprofile',
        'controller' => 'App\\Http\\Controllers\\adminController@editAprofile',
        'namespace' => NULL,
        'prefix' => '/IEMSAdmin',
        'where' => 
        array (
        ),
        'as' => 'editAprofile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchFaculty' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSAdmin/A_searchFaculty',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@searchFaculty',
        'controller' => 'App\\Http\\Controllers\\adminController@searchFaculty',
        'namespace' => NULL,
        'prefix' => '/IEMSAdmin',
        'where' => 
        array (
        ),
        'as' => 'searchFaculty',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchStudent' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSAdmin/A_searchStudent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@searchStudent',
        'controller' => 'App\\Http\\Controllers\\adminController@searchStudent',
        'namespace' => NULL,
        'prefix' => '/IEMSAdmin',
        'where' => 
        array (
        ),
        'as' => 'searchStudent',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updatePassAdmin' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'IEMSAdmin/updatePasswordAdmin/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@updatePassAdmin',
        'controller' => 'App\\Http\\Controllers\\adminController@updatePassAdmin',
        'namespace' => NULL,
        'prefix' => '/IEMSAdmin',
        'where' => 
        array (
        ),
        'as' => 'updatePassAdmin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'resetPasswordFaculty' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'IEMSAdmin/resetPasswordFaculty/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@resetPasswordFaculty',
        'controller' => 'App\\Http\\Controllers\\adminController@resetPasswordFaculty',
        'namespace' => NULL,
        'prefix' => '/IEMSAdmin',
        'where' => 
        array (
        ),
        'as' => 'resetPasswordFaculty',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'resetPasswordStudent' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'IEMSAdmin/updatePasswordStudent/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@resetPasswordStudent',
        'controller' => 'App\\Http\\Controllers\\adminController@resetPasswordStudent',
        'namespace' => NULL,
        'prefix' => '/IEMSAdmin',
        'where' => 
        array (
        ),
        'as' => 'resetPasswordStudent',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facultyDashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/facultyDashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@wildlife',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@wildlife',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'facultyDashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'IEMSFaculty/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\allInfocardMaintain@storeDataWildlife',
        'controller' => 'App\\Http\\Controllers\\allInfocardMaintain@storeDataWildlife',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeDataBone' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'IEMSFaculty/storeBone',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\allInfocardMaintain@storeDataBone',
        'controller' => 'App\\Http\\Controllers\\allInfocardMaintain@storeDataBone',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'storeDataBone',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeDataRef' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'IEMSFaculty/storeDataRef',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\allInfocardMaintain@storeDataRef',
        'controller' => 'App\\Http\\Controllers\\allInfocardMaintain@storeDataRef',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'storeDataRef',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeThesis' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'IEMSFaculty/storeThesis',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\allInfocardMaintain@storeDataThesis',
        'controller' => 'App\\Http\\Controllers\\allInfocardMaintain@storeDataThesis',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'storeThesis',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeJournal' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'IEMSFaculty/storeJournal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\allInfocardMaintain@storeDataJournal',
        'controller' => 'App\\Http\\Controllers\\allInfocardMaintain@storeDataJournal',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'storeJournal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wildlife' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/wildlife',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@wildlife',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@wildlife',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'wildlife',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'boneCollection' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/boneCollection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@boneCollection',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@boneCollection',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'boneCollection',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateBone' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'IEMSFaculty/updateBone/{info_ID}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@updateBone',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@updateBone',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'updateBone',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deleteBone' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/deleteBone/{info_ID}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@deleteBone',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@deleteBone',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'deleteBone',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateRef' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'IEMSFaculty/updateRef/{info_ID}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@updateRef',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@updateRef',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'updateRef',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'refCollection' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/refCollection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@refCollection',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@refCollection',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'refCollection',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deleteRef' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/deleteRef/{info_ID}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@deleteRef',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@deleteRef',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'deleteRef',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'showWildlife' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/showWildlife/{info_ID}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@showWildlife',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@showWildlife',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'showWildlife',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'editWildlife' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/editWildlife/{info_ID}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@editWildlife',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@editWildlife',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'editWildlife',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateWildlife' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'IEMSFaculty/updateWildlife/{info_ID}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@updateWildlife',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@updateWildlife',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'updateWildlife',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deleteWildlife' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/deleteWildlife/{info_ID}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@deleteWildlife',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@deleteWildlife',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'deleteWildlife',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thesis' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/thesis_paper',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@thesis',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@thesis',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'thesis',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gradThesis' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/gradThesis_paper',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@gradThesis',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@gradThesis',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'gradThesis',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'undergradThesis' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/undergradThesis_paper',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@undergradThesis',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@undergradThesis',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'undergradThesis',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'showThesis' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/showThesis/{info_ID}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@showThesis',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@showThesis',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'showThesis',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'editThesis' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/editThesis/{info_ID}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@editThesis',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@editThesis',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'editThesis',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateThesis' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'IEMSFaculty/updateThesis/{info_ID}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@updateThesis',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@updateThesis',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'updateThesis',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deleteThesis' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/deleteThesis/{info_ID}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@deleteThesis',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@deleteThesis',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'deleteThesis',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'journal' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/journal_article',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@journal',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@journal',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'journal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'showJournal' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/showJournal/{info_ID}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@showJournal',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@showJournal',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'showJournal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'editJournal' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/editJournal/{info_ID}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@editJournal',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@editJournal',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'editJournal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateJournal' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'IEMSFaculty/updateJournal/{info_ID}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@updateJournal',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@updateJournal',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'updateJournal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deleteJournal' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/deleteJournal/{info_ID}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@deleteJournal',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@deleteJournal',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'deleteJournal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Fprofile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@Fprofile',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@Fprofile',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'Fprofile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'editFprofile' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'IEMSFaculty/editProfile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@editFprofile',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@editFprofile',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'editFprofile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updatePassFaculty' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'IEMSFaculty/updatePasswordFaculty/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@updatePassFaculty',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@updatePassFaculty',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'updatePassFaculty',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'analysis' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/analytics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@countAnalysis',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@countAnalysis',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'analysis',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Faculty_request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/requestValidation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@request',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@request',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'Faculty_request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'advanceSearchReq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/advanceSearchRequest',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@advanceSearchReq',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@advanceSearchReq',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'advanceSearchReq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateAnnoF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'IEMSFaculty/updateAnnouncementF/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@updateAnnoF',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@updateAnnoF',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'updateAnnoF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deleteAnnoF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/deleteAnnouncementF/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@deleteAnnoF',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@deleteAnnoF',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'deleteAnnoF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchBone' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/searchBone',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@searchBone',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@searchBone',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'searchBone',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'advanceSearchBone' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/advanceSearchBone',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@advanceSearchBone',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@advanceSearchBone',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'advanceSearchBone',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchReq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/searchRequest',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@searchReq',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@searchReq',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'searchReq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchWildlife' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/searchWildlife',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@searchWildlife',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@searchWildlife',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'searchWildlife',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'advanceSearchWildlife' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/advanceSearchWildlife',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@advanceSearchWildlife',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@advanceSearchWildlife',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'advanceSearchWildlife',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchThesis' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/searchThesis',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@searchThesis',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@searchThesis',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'searchThesis',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'advanceSearchThesis' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/advanceSearchThesis',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@advanceSearchThesis',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@advanceSearchThesis',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'advanceSearchThesis',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchJournal' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/searchJournal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@searchJournal',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@searchJournal',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'searchJournal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'advanceSearchJournal' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/advanceSearchJournal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@advanceSearchJournal',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@advanceSearchJournal',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'advanceSearchJournal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'advanceSearchRef' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/advanceSearchRef',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@advanceSearchRef',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@advanceSearchRef',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'advanceSearchRef',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchRef' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/searchRef',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@searchRef',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@searchRef',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'searchRef',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sortNameDesc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/w_sortNameD',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@sortNameDesc',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@sortNameDesc',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'sortNameDesc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sortNameAsc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/w_sortNameA',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@sortNameAsc',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@sortNameAsc',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'sortNameAsc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dateAddedDesc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/w_sortDateD',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@dateAddedDesc',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@dateAddedDesc',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'dateAddedDesc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dateAddedAsc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/w_sortDateA',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@dateAddedAsc',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@dateAddedAsc',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'dateAddedAsc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'titleDesc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/t_titleD',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@titleDesc',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@titleDesc',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'titleDesc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'titleAsc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/t_titleA',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@titleAsc',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@titleAsc',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'titleAsc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'datePubDesc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/t_dateD',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@datePubDesc',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@datePubDesc',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'datePubDesc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'datePubAsc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/t_dateA',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@datePubAsc',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@datePubAsc',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'datePubAsc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'authorDesc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/t_authorD',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@authorDesc',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@authorDesc',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'authorDesc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'authorAsc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/t_authorA',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@authorAsc',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@authorAsc',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'authorAsc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'j_titleDesc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/j_titleD',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@j_titleDesc',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@j_titleDesc',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'j_titleDesc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'j_titleAsc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/j_titleA',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@j_titleAsc',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@j_titleAsc',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'j_titleAsc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'j_datePubDesc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/j_dateD',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@j_datePubDesc',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@j_datePubDesc',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'j_datePubDesc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'j_datePubAsc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/j_dateA',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@j_datePubAsc',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@j_datePubAsc',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'j_datePubAsc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'j_authorDesc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/j_authorD',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@j_authorDesc',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@j_authorDesc',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'j_authorDesc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'j_authorAsc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSFaculty/j_authorA',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isFaculty',
        ),
        'uses' => 'App\\Http\\Controllers\\infocardMaintain@j_authorAsc',
        'controller' => 'App\\Http\\Controllers\\infocardMaintain@j_authorAsc',
        'namespace' => NULL,
        'prefix' => '/IEMSFaculty',
        'where' => 
        array (
        ),
        'as' => 'j_authorAsc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'studentDashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/studentDashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@studentDashboard',
        'controller' => 'App\\Http\\Controllers\\studentController@studentDashboard',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'studentDashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'S_boneCollection' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/S_boneCollection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@boneCollection',
        'controller' => 'App\\Http\\Controllers\\studentController@boneCollection',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'S_boneCollection',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'S_refCollection' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/S_refCollection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@refCollection',
        'controller' => 'App\\Http\\Controllers\\studentController@refCollection',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'S_refCollection',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Student_thesis' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/thesis_papers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@thesis',
        'controller' => 'App\\Http\\Controllers\\studentController@thesis',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'Student_thesis',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'S_gradThesis' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/S_gradThesis_paper',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@gradThesis',
        'controller' => 'App\\Http\\Controllers\\studentController@gradThesis',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'S_gradThesis',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'S_undergradThesis' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/S_undergradThesis_paper',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@undergradThesis',
        'controller' => 'App\\Http\\Controllers\\studentController@undergradThesis',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'S_undergradThesis',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Student_journal' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/journal_articles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@journal',
        'controller' => 'App\\Http\\Controllers\\studentController@journal',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'Student_journal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Student_request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@request',
        'controller' => 'App\\Http\\Controllers\\studentController@request',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'Student_request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeAnno' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'IEMSStudent/storeRequest',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@storeAnno',
        'controller' => 'App\\Http\\Controllers\\studentController@storeAnno',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'storeAnno',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateAnno' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'IEMSStudent/updateAnnouncement/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@updateAnno',
        'controller' => 'App\\Http\\Controllers\\studentController@updateAnno',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'updateAnno',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deleteAnno' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/deleteAnnouncement/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@deleteAnno',
        'controller' => 'App\\Http\\Controllers\\studentController@deleteAnno',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'deleteAnno',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'S_searchWildlife' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/S_searchWildlife',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@searchWildlife',
        'controller' => 'App\\Http\\Controllers\\studentController@searchWildlife',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'S_searchWildlife',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'S_advanceSearchWildlife' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/S_advanceSearchWildlife',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@advanceSearchWildlife',
        'controller' => 'App\\Http\\Controllers\\studentController@advanceSearchWildlife',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'S_advanceSearchWildlife',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'S_searchThesis' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/S_searchThesis',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@searchThesis',
        'controller' => 'App\\Http\\Controllers\\studentController@searchThesis',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'S_searchThesis',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'S_advanceSearchThesis' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/S_advanceSearchThesis',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@advanceSearchThesis',
        'controller' => 'App\\Http\\Controllers\\studentController@advanceSearchThesis',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'S_advanceSearchThesis',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'S_searchJournal' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/S_searchJournal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@searchJournal',
        'controller' => 'App\\Http\\Controllers\\studentController@searchJournal',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'S_searchJournal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'S_advanceSearchJournal' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/S_advanceSearchJournal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@advanceSearchJournal',
        'controller' => 'App\\Http\\Controllers\\studentController@advanceSearchJournal',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'S_advanceSearchJournal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'S_searchBone' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/S_searchBone',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@searchBone',
        'controller' => 'App\\Http\\Controllers\\studentController@searchBone',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'S_searchBone',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'S_advanceSearchBone' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/S_advanceSearchBone',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@advanceSearchBone',
        'controller' => 'App\\Http\\Controllers\\studentController@advanceSearchBone',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'S_advanceSearchBone',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'S_searchRef' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/S_searchRef',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@searchRef',
        'controller' => 'App\\Http\\Controllers\\studentController@searchRef',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'S_searchRef',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'S_advanceSearchRef' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/S_advanceSearchRef',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@advanceSearchRef',
        'controller' => 'App\\Http\\Controllers\\studentController@advanceSearchRef',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'S_advanceSearchRef',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Sprofile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/S_profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@Sprofile',
        'controller' => 'App\\Http\\Controllers\\studentController@Sprofile',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'Sprofile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'editSprofile' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'IEMSStudent/S_editProfile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@editSprofile',
        'controller' => 'App\\Http\\Controllers\\studentController@editSprofile',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'editSprofile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updatePassStudent' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'IEMSStudent/updatePasswordStudent/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@updatePassStudent',
        'controller' => 'App\\Http\\Controllers\\studentController@updatePassStudent',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'updatePassStudent',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchRequest' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/S_searchRequest',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@searchRequest',
        'controller' => 'App\\Http\\Controllers\\studentController@searchRequest',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'searchRequest',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sortNameDesc_S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/w_sortNameD_S',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@sortNameDesc',
        'controller' => 'App\\Http\\Controllers\\studentController@sortNameDesc',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'sortNameDesc_S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sortNameAsc_S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/w_sortNameA_S',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@sortNameAsc',
        'controller' => 'App\\Http\\Controllers\\studentController@sortNameAsc',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'sortNameAsc_S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dateAddedDesc_S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/w_sortDateD_S',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@dateAddedDesc',
        'controller' => 'App\\Http\\Controllers\\studentController@dateAddedDesc',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'dateAddedDesc_S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dateAddedAsc_S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/w_sortDateA_S',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@dateAddedAsc',
        'controller' => 'App\\Http\\Controllers\\studentController@dateAddedAsc',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'dateAddedAsc_S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'titleDesc_S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/t_titleD_S',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@titleDesc',
        'controller' => 'App\\Http\\Controllers\\studentController@titleDesc',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'titleDesc_S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'titleAsc_S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/t_titleA_S',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@titleAsc',
        'controller' => 'App\\Http\\Controllers\\studentController@titleAsc',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'titleAsc_S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'datePubDesc_S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/t_dateD_S',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@datePubDesc',
        'controller' => 'App\\Http\\Controllers\\studentController@datePubDesc',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'datePubDesc_S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'datePubAsc_S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/t_dateA_S',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@datePubAsc',
        'controller' => 'App\\Http\\Controllers\\studentController@datePubAsc',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'datePubAsc_S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'authorDesc_S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/t_authorD_S',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@authorDesc',
        'controller' => 'App\\Http\\Controllers\\studentController@authorDesc',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'authorDesc_S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'authorAsc_S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/t_authorA_S',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@authorAsc',
        'controller' => 'App\\Http\\Controllers\\studentController@authorAsc',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'authorAsc_S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'j_titleDesc_S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/j_titleD_S',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@j_titleDesc',
        'controller' => 'App\\Http\\Controllers\\studentController@j_titleDesc',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'j_titleDesc_S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'j_titleAsc_S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/j_titleA_S',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@j_titleAsc',
        'controller' => 'App\\Http\\Controllers\\studentController@j_titleAsc',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'j_titleAsc_S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'j_datePubDesc_S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/j_dateD_S',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@j_datePubDesc',
        'controller' => 'App\\Http\\Controllers\\studentController@j_datePubDesc',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'j_datePubDesc_S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'j_datePubAsc_S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/j_dateA_S',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@j_datePubAsc',
        'controller' => 'App\\Http\\Controllers\\studentController@j_datePubAsc',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'j_datePubAsc_S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'j_authorDesc_S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/j_authorD_S',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@j_authorDesc',
        'controller' => 'App\\Http\\Controllers\\studentController@j_authorDesc',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'j_authorDesc_S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'j_authorAsc_S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IEMSStudent/j_authorA_S',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\studentController@j_authorAsc',
        'controller' => 'App\\Http\\Controllers\\studentController@j_authorAsc',
        'namespace' => NULL,
        'prefix' => '/IEMSStudent',
        'where' => 
        array (
        ),
        'as' => 'j_authorAsc_S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'guestDashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboardGuest',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@guestDashboard',
        'controller' => 'App\\Http\\Controllers\\guestController@guestDashboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'guestDashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Guest_thesis' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'G_thesis_papers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@thesis',
        'controller' => 'App\\Http\\Controllers\\guestController@thesis',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'Guest_thesis',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'G_gradThesis' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'G_gradThesis_paper',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@gradThesis',
        'controller' => 'App\\Http\\Controllers\\guestController@gradThesis',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'G_gradThesis',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'G_undergradThesis' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'G_undergradThesis_paper',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@undergradThesis',
        'controller' => 'App\\Http\\Controllers\\guestController@undergradThesis',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'G_undergradThesis',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Guest_journal' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'G_journal_articles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@journal',
        'controller' => 'App\\Http\\Controllers\\guestController@journal',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'Guest_journal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'G_boneCollection' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'G_boneCollection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@boneCollection',
        'controller' => 'App\\Http\\Controllers\\guestController@boneCollection',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'G_boneCollection',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'G_refCollection' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'G_refCollection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@refCollection',
        'controller' => 'App\\Http\\Controllers\\guestController@refCollection',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'G_refCollection',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'G_searchWildlife' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'G_searchWildlife',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@searchWildlife',
        'controller' => 'App\\Http\\Controllers\\guestController@searchWildlife',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'G_searchWildlife',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'G_advanceSearchWildlife' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'G_advanceSearchWildlife',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@advanceSearchWildlife',
        'controller' => 'App\\Http\\Controllers\\guestController@advanceSearchWildlife',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'G_advanceSearchWildlife',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'G_searchThesis' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'G_searchThesis',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@searchThesis',
        'controller' => 'App\\Http\\Controllers\\guestController@searchThesis',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'G_searchThesis',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'G_advanceSearchThesis' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'G_advanceSearchThesis',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@advanceSearchThesis',
        'controller' => 'App\\Http\\Controllers\\guestController@advanceSearchThesis',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'G_advanceSearchThesis',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'G_searchJournal' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'G_searchJournal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@searchJournal',
        'controller' => 'App\\Http\\Controllers\\guestController@searchJournal',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'G_searchJournal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'G_advanceSearchJournal' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'G_advanceSearchJournal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@advanceSearchJournal',
        'controller' => 'App\\Http\\Controllers\\guestController@advanceSearchJournal',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'G_advanceSearchJournal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'G_searchBone' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'G_searchBone',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@searchBone',
        'controller' => 'App\\Http\\Controllers\\guestController@searchBone',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'G_searchBone',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'G_advanceSearchBone' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'G_advanceSearchBone',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@advanceSearchBone',
        'controller' => 'App\\Http\\Controllers\\guestController@advanceSearchBone',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'G_advanceSearchBone',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'G_searchRef' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'G_searchRef',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@searchRef',
        'controller' => 'App\\Http\\Controllers\\guestController@searchRef',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'G_searchRef',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'G_advanceSearchRef' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'G_advanceSearchRef',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@advanceSearchRef',
        'controller' => 'App\\Http\\Controllers\\guestController@advanceSearchRef',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'G_advanceSearchRef',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sortNameDesc_G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'w_sortNameD_G',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@sortNameDesc',
        'controller' => 'App\\Http\\Controllers\\guestController@sortNameDesc',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sortNameDesc_G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sortNameAsc_G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'w_sortNameA_G',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@sortNameAsc',
        'controller' => 'App\\Http\\Controllers\\guestController@sortNameAsc',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sortNameAsc_G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dateAddedDesc_G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'w_sortDateD_G',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@dateAddedDesc',
        'controller' => 'App\\Http\\Controllers\\guestController@dateAddedDesc',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dateAddedDesc_G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dateAddedAsc_G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'w_sortDateA_G',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@dateAddedAsc',
        'controller' => 'App\\Http\\Controllers\\guestController@dateAddedAsc',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dateAddedAsc_G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'titleDesc_G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 't_titleD_G',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@titleDesc',
        'controller' => 'App\\Http\\Controllers\\guestController@titleDesc',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'titleDesc_G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'titleAsc_G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 't_titleA_G',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@titleAsc',
        'controller' => 'App\\Http\\Controllers\\guestController@titleAsc',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'titleAsc_G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'datePubDesc_G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 't_dateD_G',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@datePubDesc',
        'controller' => 'App\\Http\\Controllers\\guestController@datePubDesc',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'datePubDesc_G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'datePubAsc_G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 't_dateA_G',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@datePubAsc',
        'controller' => 'App\\Http\\Controllers\\guestController@datePubAsc',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'datePubAsc_G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'authorDesc_G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 't_authorD_G',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@authorDesc',
        'controller' => 'App\\Http\\Controllers\\guestController@authorDesc',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'authorDesc_G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'authorAsc_G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 't_authorA_G',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@authorAsc',
        'controller' => 'App\\Http\\Controllers\\guestController@authorAsc',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'authorAsc_G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'j_titleDesc_G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'j_titleD_G',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@j_titleDesc',
        'controller' => 'App\\Http\\Controllers\\guestController@j_titleDesc',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'j_titleDesc_G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'j_titleAsc_G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'j_titleA_G',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@j_titleAsc',
        'controller' => 'App\\Http\\Controllers\\guestController@j_titleAsc',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'j_titleAsc_G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'j_datePubDesc_G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'j_dateD_G',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@j_datePubDesc',
        'controller' => 'App\\Http\\Controllers\\guestController@j_datePubDesc',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'j_datePubDesc_G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'j_datePubAsc_G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'j_dateA_G',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@j_datePubAsc',
        'controller' => 'App\\Http\\Controllers\\guestController@j_datePubAsc',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'j_datePubAsc_G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'j_authorDesc_G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'j_authorD_G',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@j_authorDesc',
        'controller' => 'App\\Http\\Controllers\\guestController@j_authorDesc',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'j_authorDesc_G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'j_authorAsc_G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'j_authorA_G',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\guestController@j_authorAsc',
        'controller' => 'App\\Http\\Controllers\\guestController@j_authorAsc',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'j_authorAsc_G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pBPM6Hrltz6kRjys' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'college',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\IEMSWebsite@accessCollege',
        'controller' => 'App\\Http\\Controllers\\IEMSWebsite@accessCollege',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pBPM6Hrltz6kRjys',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V8bQgE6rKZHyAUhm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enrollment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\IEMSWebsite@accessEnrollment',
        'controller' => 'App\\Http\\Controllers\\IEMSWebsite@accessEnrollment',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::V8bQgE6rKZHyAUhm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RkFJWljYfxxMR0Qn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facilities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\IEMSWebsite@accessFacilities',
        'controller' => 'App\\Http\\Controllers\\IEMSWebsite@accessFacilities',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RkFJWljYfxxMR0Qn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3BIHymNNZ3xMp1u6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'exhibit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\IEMSWebsite@accessLinus',
        'controller' => 'App\\Http\\Controllers\\IEMSWebsite@accessLinus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3BIHymNNZ3xMp1u6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HP2ecEciXWxR8XTa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'rates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\IEMSWebsite@accessRates',
        'controller' => 'App\\Http\\Controllers\\IEMSWebsite@accessRates',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HP2ecEciXWxR8XTa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RCx6SqZY6bWq0ERK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facultystaff',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\IEMSWebsite@accessFacultyStaff',
        'controller' => 'App\\Http\\Controllers\\IEMSWebsite@accessFacultyStaff',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RCx6SqZY6bWq0ERK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FmlibckFTCcLd5D0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'announcement',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\IEMSWebsite@accessAnnouncement',
        'controller' => 'App\\Http\\Controllers\\IEMSWebsite@accessAnnouncement',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FmlibckFTCcLd5D0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'accessAnnouncementDisplay' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'announcementDisplay/{anno_ID}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\IEMSWebsite@accessAnnouncementDisplay',
        'controller' => 'App\\Http\\Controllers\\IEMSWebsite@accessAnnouncementDisplay',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'accessAnnouncementDisplay',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IyXR6mYoqnaad9Ei' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@index',
        'controller' => 'App\\Http\\Controllers\\ContactController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IyXR6mYoqnaad9Ei',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact-us.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@store',
        'controller' => 'App\\Http\\Controllers\\ContactController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contact-us.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::waE1tmMeRpxjyPtj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'construction',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\IEMSWebsite@underConstruction',
        'controller' => 'App\\Http\\Controllers\\IEMSWebsite@underConstruction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::waE1tmMeRpxjyPtj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mDkOajRm11lEBvME' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mDkOajRm11lEBvME',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8kK7dfJnUuLtpcHB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::8kK7dfJnUuLtpcHB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reset-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.notice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verify-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\EmailVerificationPromptController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Auth\\EmailVerificationPromptController@__invoke',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.notice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verify-email/{id}/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'signed',
          3 => 'throttle:6,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController@__invoke',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'email/verification-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'throttle:6,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\EmailVerificationNotificationController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\EmailVerificationNotificationController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.send',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'confirm-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@show',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JNiFkRMx4lW3WNED' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'confirm-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::JNiFkRMx4lW3WNED',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
