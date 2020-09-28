<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Role;
use Illuminate\Contracts\Auth\Guard;

class TeacherRole
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        if ($this->auth->user()->role_id !== Role::TEACHER) {
            abort(403, 'Unauthorized action.');
        }
        return $next($request);
    }
}
