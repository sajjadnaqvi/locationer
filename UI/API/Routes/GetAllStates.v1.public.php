<?php

/**
 * @apiGroup           State
 * @apiName            getAllStates
 *
 * @api                {GET} /v1/states Get All States
 * @apiDescription     Get all states,query parameters supporting search criteria available here
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User, manage-states, view-state
 *
 * @apiParam           {String}  filter include columns e.g. id;name
 * @apiParam           {String}  search search columns e.g. name:search-users
 * @apiParam           {String}  orderBy name of column e.g. id
 * @apiParam           {String}  sortedBy asc or desc
 * @apiParam           {Integer}  page page number
 * @apiParam           {String}  include country,city
 * @apiParam           {Integer}  limit records per page
 *
 * @apiUse             GeneralSuccessMultipleResponse
 */

use App\Containers\Vendor\Locationer\UI\API\Controllers\StateController;
use Illuminate\Support\Facades\Route;

Route::get('states', [StateController::class, 'getAllStates'])
    ->name('api_location_get_all_states')
    ->middleware(['auth:api']);
