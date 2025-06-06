<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::prefix('api')->group(function () {
	Route::post('/creator/get-tables', [\BriqueAdminCreator\AdminCreatorController::class, 'getTables'])->name('creator-get-tables');
	Route::post('/creator/get-table-structure', [\BriqueAdminCreator\AdminCreatorController::class, 'getTableStructure'])->name('creator-get-table-structure');

	Route::post('/creator/brique/generate-resource-code', [\BriqueAdminCreator\AdminCreatorController::class, 'getGeneratedCode'])->name('creator-generate-resource-code');

	Route::post('/creator/save-resource', [\BriqueAdminCreator\AdminCreatorController::class, 'saveConfig'])->name('creator-save-resource');
	Route::post('/creator/load-resource', [\BriqueAdminCreator\AdminCreatorController::class, 'loadConfig'])->name('creator-load-resource');

	Route::get('/creator/brique/generate-code/{code}', [\BriqueAdminCreator\AdminCreatorController::class, 'generateCode'])->name('creator-generate-code');

	//CREATOR
	Route::post('/creator/check-directory', [\BriqueAdminCreator\AdminCreatorController::class, 'checkDirectory']);
	Route::post('/creator/save-file', [\BriqueAdminCreator\AdminCreatorController::class, 'saveFile']);
	Route::post('/creator/get-table-json', [\BriqueAdminCreator\AdminCreatorController::class, 'getTableJSON']);
	Route::get('/creator/download-file/{fileName}/{versionName}', [\BriqueAdminCreator\AdminCreatorController::class, 'downloadFile']);
});