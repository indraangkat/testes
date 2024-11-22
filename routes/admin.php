<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin as ADMIN;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'admin']], function () {
	Route::resource('role', 	     			ADMIN\RoleController::class);
	Route::resource('admin', 	     			ADMIN\AdminController::class);

	//add resource route for SatuanController
	Route::get('pasien',	[ADMIN\SatuanController::class, 'index'])->name('satuan.index');
	Route::get('pasien/print',	[ADMIN\SatuanController::class, 'print'])->name('satuan.print');
	Route::get('pasien/create',	[ADMIN\SatuanController::class, 'create'])->name('satuan.create');
	Route::post('pasien',	[ADMIN\SatuanController::class, 'store'])->name('satuan.store');
	Route::get('pasien/{pasien}/edit',	[ADMIN\SatuanController::class, 'edit'])->name('satuan.edit');
	Route::put('pasien/{pasien}',	[ADMIN\SatuanController::class, 'update'])->name('satuan.update');
	Route::delete('pasien/{pasien}',	[ADMIN\SatuanController::class, 'destroy'])->name('satuan.destroy');

	Route::resource('developer-settings',     	ADMIN\DeveloperSettingsController::class);

	Route::get('dashboard', 					[ADMIN\DashboardController::class, 'index'])->name('dashboard.index');
	Route::get('profile', 						[ADMIN\ProfileController::class, 'settings']);
	Route::put('profile/update/{type}', 		[ADMIN\ProfileController::class, 'update'])->name('profile.update');
});
