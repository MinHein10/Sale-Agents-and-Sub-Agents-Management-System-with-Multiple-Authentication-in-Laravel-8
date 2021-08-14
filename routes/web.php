<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AgentManageController;
use App\Http\Controllers\Admin\AgentOrderController;
use App\Http\Controllers\Admin\ExcelAgentController;
use App\Http\Controllers\Admin\ExcelSubAgentController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\SubAgentController;
use App\Models\Category;
use App\Models\Agent;
use App\Models\Product;
use Illuminate\Support\Facades\Http;



Route::get('/', function () {
    return view('welcome');
});

// <------------------------- Agent Management -------------------------------->
Route::resource('manageagent',AgentManageController::class);
Route::get('insertagent',function(){
        $regions = Http::get('http://myancity.devsm.net/api/regions')->json();
        return view('agent/add',compact('regions'));
});
Route::resource('managesubagent',SubAgentController::class);

// <---------------- Excel Route ------------------>
Route::get('importExportView', [ExcelAgentController::class, 'importExportView'])->name('excel');
Route::get('export', [ExcelAgentController::class, 'export'])->name('export');
Route::post('import', [ExcelAgentController::class, 'import'])->name('import');
Route::get('importExportView-subagent', [ExcelSubAgentController::class, 'importExportView'])->name('subagent.excel');
Route::get('export-subagent', [ExcelSubAgentController::class, 'export'])->name('subagent.export');
Route::post('import-subagent', [ExcelSubAgentController::class, 'import'])->name('subagent.import');



// <---------------- Category Route ------------------>
Route::resource('category',CategoryController::class);
Route::get('insertcategories',function(){
    return view('categories/add');
})->name('insert.categories');

// <---------------- Product Route ------------------>
Route::resource('product',ProductController::class);
Route::get('insertproducts',function(){
    $categories = Category::all();
    return view('products/add',compact('categories'));
})->name('insert.products');

// <---------------- Packages Route ------------------>
Route::resource('package',PackageController::class);
Route::get('insert-package',function(){
    $products = Product::all();
    return view('packages.add',compact('products'));
})->name('insert.packages');

Route::resource('agents-orders',AgentOrderController::class);
Route::get('/agentorders-status',[AgentOrderController::class,'changeStatus'])->name('change.status');

Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class,'home'])->middleware('auth');

Route::get('/verified', function () {
    return 'email verified';
})->middleware('verified');


// <------------------------------ Admin Dashboard ------------------------------>
Route::get('/login/admin', [\App\Http\Controllers\Auth\LoginController::class, 'showAdminLoginForm']);
Route::post('/login/admin', [\App\Http\Controllers\Auth\LoginController::class, 'adminLogin']);

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {

    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.dashboard');

});





// <------------------------------ Agent Dashboard ------------------------------>
Route::get('/login/agent', [\App\Http\Controllers\Auth\LoginController::class, 'showAgentLoginForm'])->name('agent.showlogin');
Route::get('/register/agent', [\App\Http\Controllers\Auth\RegisterController::class, 'showAgentRegisterForm']);

Route::post('/login/agent', [\App\Http\Controllers\Auth\LoginController::class, 'agentLogin'])->name('agent.login');
Route::post('/register/agent,',[\App\Http\Controllers\Auth\RegisterController::class, 'createAgent'])->name('register.agentcreate');

Route::group(['prefix' => 'agent', 'middleware' =>['auth:agent']], function (){

    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'agent']);

    // Auth::routes(['verify' => true]);

    Route::get('/home', [HomeController::class,'home'])->name('home');

    Route::get('/verified', function () {
        return 'email verified';
    })->middleware('verified:agent.verification.notice,agents');

});

Route::get('/login/subagent', [\App\Http\Controllers\Auth\LoginController::class, 'showSubAgentLoginForm']);
Route::post('/login/subagent', [\App\Http\Controllers\Auth\LoginController::class, 'subagentLogin']);
Route::get('/register/subagent', [\App\Http\Controllers\Auth\RegisterController::class, 'showSubAgentRegisterForm']);
Route::group(['prefix' => 'subagent', 'middleware' =>['auth:subagent']], function (){
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'subagent']);
});
