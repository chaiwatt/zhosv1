<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Livewire\Registry\Opdcard\Opdcard;
use App\Http\Controllers\UserPositionController;
use App\Http\Livewire\Registry\OpdcardHn\OpdcardHn;
use App\Http\Livewire\Settings\RoleManagement\Role;
use App\Http\Livewire\Settings\RoleManagement\Task;
use App\Http\Livewire\Registry\Opdcard\OpdcardDetail;
use App\Http\Livewire\Screen\NurseScreen\NurseScreen;
use App\Http\Livewire\Settings\RoleManagement\Module;
use App\Http\Livewire\Registry\IpdcardRent\IpdcardRent;
use App\Http\Livewire\Registry\OpdcardRent\OpdcardRent;
use App\Http\Livewire\Registry\PatientDeath\PatientDeath;
use App\Http\Livewire\Registry\VisitRegister\VisitRegister;
use App\Http\Livewire\Doctor\DoctorWorkbench\DoctorWorkbench;


Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => 'auth'], function() {
    Route::group(['prefix' => 'dashboard'], function (){
        Route::get('', DashboardController::class)->name('dashboard');
        Route::group(['prefix' => 'registry'], function (){
            Route::get('opdcard', Opdcard::class)->name('dashboard.registry.opdcard');
            Route::get('opdcard-detail', OpdcardDetail::class)->name('dashboard.registry.opdcard-detail');
            Route::get('patient_death', PatientDeath::class)->name('dashboard.registry.patient_death');
            Route::get('opdcard_rent', OpdcardRent::class)->name('dashboard.registry.opdcard_rent');
            Route::get('ipdcard_rent', IpdcardRent::class)->name('dashboard.registry.ipdcard_rent');
            Route::get('visit_register', VisitRegister::class)->name('dashboard.registry.visit_register');
            Route::get('opdcard_hn', OpdcardHn::class)->name('dashboard.registry.opdcard_hn');
        });
        Route::group(['prefix' => 'screen'], function (){
            Route::get('nurse_screen', NurseScreen::class)->name('dashboard.screen.nurse_screen');
        });
        Route::group(['prefix' => 'doctor'], function (){
            Route::get('doctor_workbench', DoctorWorkbench::class)->name('dashboard.doctor.doctor_workbench');
        });
        Route::group(['prefix' => 'setting'], function (){
            Route::group(['prefix' => 'role_management'], function (){
                Route::get('role', Role::class)->name('dashboard.setting.role_management.role');
                Route::get('module', Module::class)->name('dashboard.setting.role_management.module');
                Route::get('task', Task::class)->name('dashboard.setting.role_management.task');
            });
        });
    });
});


