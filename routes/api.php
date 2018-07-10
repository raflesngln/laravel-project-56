<?php

use App\Product; // ini include modelnya product
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


/* Companies API 
access postman like with this:
for all data  methode GET                   :  http://localhost:8000/api/v1/companies
for detail with id  methode GET             :  http://localhost:8000/api/v1/companies/2
for update methode PUT                      :  http://localhost:8000/api/v1/companies/4
for delete use methode DELETE               :  http://localhost:8000/api/v1/companies/5
*/
Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {
    Route::resource('companies', 'CompaniesController', ['except' => ['create', 'edit']]);
});


Route::post('upload_file', function(Request $request){
    $file = $request->file('photo')->store('uploads');
    return dd($file);
    // var_dump(Input::file('file'));

});


// otehrs API consept
// http://localhost:8000/api/items
Route::get('items', function(){
    return Product::paginate('2');
});
Route::get('items/{item}', function($id){
    return Product::find($id);
});

Route::post('items', function(){
    return Product::create(request()->all());
});

Route::delete('items/{item}', function(Product $item){
    $item->delete();
    return 'success delete';
});

Route::put('items/{id}', function(Product $request, $id){

    $product = Product::find($id);
    $product->update($request->all());
    return $product;
});