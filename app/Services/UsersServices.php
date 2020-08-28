<?php
namespace App\Services;

class UsersServices {
    public function isCheckPermission($recurse, $profile) {
        if($profile === 'admin') {
            if(Auth()->user()->type !== $profile) {
                return view('not-permission');
            }
        }
    }
}