<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth; 
use App\Models\Student;
use App\Models\Admin;
use App\Models\Teacher;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Auth::viaRequest('student', function ($request) {
            
            return $request->user()->isStudent();
        });

        Auth::viaRequest('teacher', function ($request) {
            // p($request);
            return $request->user()->isTeacher();
        });

        Auth::viaRequest('admin', function ($request) {
            return $request->user()->isAdmin();
        });
    }
}
