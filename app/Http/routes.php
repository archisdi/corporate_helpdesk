<?php

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('home', 'PageController@home');
    Route::get('profile', 'PageController@profile');

    Route::get('tickets/new', 'OperatorController@ShowNew');
    Route::get('ticket/create', 'EmployeeController@CreateTicket');
    Route::post('ticket/create', 'EmployeeController@StoreTicket');
    Route::get('tickets/view/{id}', 'PageController@ViewTicket');
    Route::get('ticket/{id}', 'PageController@ShowTicket');
    Route::get('ticket/respond/{id}', 'OperatorController@RespondTicket');
    Route::post('tickets/respond', 'OperatorController@ProcessRespond');
    Route::post('ticket','EmployeeController@Confirmation');

    Route::get('assignments','ITController@ShowAssignments');
    Route::post('assignments','ITController@process');
    Route::get('assignments/{id}','ITController@ShowAssignmentDetail');

    Route::get('manual','EmployeeController@showManual');

    Route::get('/', function () {
        return redirect('login');
    });
});
