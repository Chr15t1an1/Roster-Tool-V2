<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('/integrations/shopify/', function () {

    return  response()->json(['success' => 'success'], 200);


    
  #Capture Request Object.
  $request = Request();

  #Captue Payload | Array
  $payload = $request->all();




  // return gettype($payload);

  // $payload_string = json_encode($payload);
  // $payload_object = json_decode($payload_string);

//  return "<pre>".print_r($payload)."</pre>";

  return  response()->json(['success' => 'success'], 200);
});
