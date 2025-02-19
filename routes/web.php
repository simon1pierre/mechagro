<?php

use App\Http\Controllers\Admin\AdminMainController;
use App\Http\Controllers\Admin\MachineController;
use App\Http\Controllers\MasterMachineController;
use App\Http\Controllers\Seller\SellerMainController;
use App\Http\Controllers\Customer\CustomerMainController;


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//landing page
Route::get('/', function () {
    return view('home');
});

//admin routes
Route::middleware(['auth', 'verified', 'rolemanager:admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::controller(AdminMainController::class)->group(function(){
            Route::get('/dashboard', 'index')->name('admin');

            Route::get('/bookings/manage', 'bookingmanage')->name('manage.bookings');
            Route::get('/user/manage', 'usermanage')->name('manage.users');
            Route::get('/user/{id}', 'showuser')->name('show.user');
            Route::put('/user/update/{id}', 'updateuser')->name('update.user');
            Route::delete('/user/delete/{id}', 'deleteuser')->name('delete.user');

            

            Route::get('/settings', 'setting')->name('admin.settings');
        });
        Route::controller(MachineController::class)->group(function(){
            Route::get('/machine/create', 'machinecreate')->name('machine.create');
            Route::get('/machine/manage', 'machinemanage')->name('machine.manage');
        });

        Route::controller(MasterMachineController::class)->group(function(){
            Route::post('/store/machine', 'storemachine')->name('store.machine');
            Route::get('/machine/{id}', 'showmachine')->name('show.machine');
            Route::put('/machine/update/{id}', 'updatemachine')->name('update.machine');
            Route::delete('/machine/delete/{id}', 'deletemachine')->name('delete.machine');

            
            
        });

    });    
});

// farmer
Route::middleware(['auth', 'verified', 'rolemanager:vendor'])->group(function () {
    Route::prefix('vendor')->group(function () {
        Route::controller(SellerMainController::class)->group(function(){
            Route::get('/dashboard', 'index')->name('vendor');
           
   
        });

    });
    
});


//customer routes
Route::middleware(['auth', 'verified', 'rolemanager:customer'])->group(function () {
    Route::prefix('user')->group(function () {
        Route::controller(CustomerMainController::class)->group(function(){
            Route::get('/dashboard', 'index')->name('dashboard');
                 
        }); 
    });
    
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
