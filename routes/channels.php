<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

/**
** Basic Routes for a RESTful service:
**
** Route::get($uri, $callback);
** Route::post($uri, $callback);
** Route::put($uri, $callback);
** Route::delete($uri, $callback);
**
**/
 
Route::get('products', function () {
    return response(['Product 1', 'Product 2', 'Product 3'],200);
});
 
Route::get('products/{product}', function ($productId) {
    return response()->json(['productId' => "{$productId}"], 200);
});
  
 
Route::post('products', function() {
    return  response()->json([
            'message' => 'Create success'
        ], 201);
});
 
Route::put('products/{product}', function() {
    return  response()->json([
            'message' => 'Update success'
        ], 200);
});
 
Route::delete('products/{product}',function() {
    return  response()->json(null, 204);
});
