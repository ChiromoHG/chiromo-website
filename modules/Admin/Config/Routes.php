<?php

$routes->group('admin', ['namespace' => 'Modules\Admin\Controllers'], function($routes){
    $routes->get("auth/login", "Admin::login");
    $routes->get('auth/logout', 'ManageUsers::logout');
    $routes->post('auth/user-login', 'ManageUsers::loginUser');
});

$routes->group('admin', ['namespace' => 'Modules\Admin\Controllers', 'filter' => 'isLoggedInFilter'], function($routes){
    $routes->get('dashboard', 'Admin::dashboard');
    $routes->get('dashboard/manage_users', 'ManageUsers::manageUsers');
    $routes->get('dashboard/manage_users/edit_user/(:segment)', 'ManageUsers::editUser/$1');
    $routes->get('dashboard/manage_users/edit_role/(:segment)', 'ManageUsers::editRole/$1');
    $routes->get('dashboard/manage_users/profile', 'ManageUsers::profile');
    $routes->get('dashboard/manage_assessments', 'Assessments::assessment');

    //    ajax calls
    $routes->post('roles/create', 'ManageUsers::newRole');
    $routes->get('roles/getRoles', 'ManageUsers::getRoles');
    $routes->post('users/createUser', 'ManageUsers::createUser');
    $routes->get('users/getUsers', 'ManageUsers::getUsers');
    $routes->post('users/updateUser/(:segment)', 'ManageUsers::updateUser/$1');
    $routes->post('users/updateUserProfile/(:segment)', 'ManageUsers::updateUserProfile/$1');
});
