<?php

namespace App\Providers;

use App\Permission;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        /**
         * NOTE!!
         * First time migration will fails, because permissions table doesn't exists.
         */

        foreach($this->getPermissions() as $permission) {
            $gate->define($permission->name, function($user) use ($permission) {
                foreach ($permission->roles as $role) {
                    if($user->hasRole($role->name)) return true;
                }
                return false;
            });
        }
    }

    private function getPermissions()
    {
        return Permission::all();
    }
}
