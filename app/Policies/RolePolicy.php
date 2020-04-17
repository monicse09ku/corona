<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Super admin
     * @param  User $user
     * @return boolean
     */
    public function isSuperAdmin($user)
    {
        return $user->isSuperAdmin();
    }

    /**
     * Admin
     * @param  User $user
     * @return boolean
     */
    public function isAdmin($user)
    {
        return $user->hasRole('admin');
    }

    /**
     * Only for trainer
     * @param  User $user
     * @return boolean
     */
    public function isOrgAdmin($user)
    {
        return $user->hasRole('org_admin');
    }

    /**
     * Only for approver
     * @param  User $user
     * @return boolean
     */
    public function isInformer($user)
    {
        return $user->hasRole('informer');
    }

    /**
     * Only for supervisor
     * @param  User $user
     * @return boolean
     */
    public function isViewer($user)
    {
        return $user->hasRole('viewer');
    }

    /**
     * user has create permission
     * @param User $user
     * @param String $roles
     *
     * @return boolean
     */
    public function create($user, $roles)
    {
        return $this->hasPermission($user, $roles);
    }

    /**
     * user has update permission
     * @param User $user
     * @param String $roles
     *
     * @return boolean
     */
    public function update($user, $roles)
    {
        return $this->hasPermission($user, $roles);
    }

    /**
     * user has destroy permission
     * @param User $user
     * @param String $roles
     *
     * @return boolean
     */
    public function destroy($user, $roles = null)
    {
        return $this->hasPermission($user, $roles);
    }

    /**
     * user has view permission
     * @param User $user
     * @param String $roles
     *
     * @return boolean
     */
    public function view($user, $roles)
    {
        return $this->hasPermission($user, $roles);
    }

    /**
     * Check has permission to next step
     */
    protected function hasPermission($user, $role)
    {
        if ($role === '*') {
            return true;
        }

        $roles = $role ? 'super_admin:admin:' . $role : 'super_admin:admin';

        return $user->hasRole(explode(':', $roles));
    }
}
