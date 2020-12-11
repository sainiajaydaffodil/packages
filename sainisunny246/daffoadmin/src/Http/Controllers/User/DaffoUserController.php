<?php

namespace SainiSunny246\DaffoAdmin\Http\Controllers;

use SainiSunny246\DaffoAdmin\Http\Controllers\DaffoAdminController;

/**
 * User Controller for Daffo Admin Panel
 *
 * @author sainisunny246@gmail.com
 */
class DaffoUserController extends DaffoAdminController{
    
    /**
     * Daffo User Construct
     */
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * Function to list all users 
     */
    public function index()
    {
        return view('user.index');
    }
    
    /**
     * Function to create new User 
     */
    public function create()
    {
        echo  "in Create function";die;
    }
    
    /**
     * FUnction to store new user
     */
    public function store()
    {
        echo "in store function";die;
    }
    
    /**
     * Function to edit existing user
     */
    public function edit()
    {
        echo "in edit function";die;
    }
    
    /**
     * FUnction to update existing user
     */
    public function update()
    {
        echo  "in update function";die;
    }
    
    /**
     * Function to delete existing user
     */
    public function delete()
    {
        echo "in delete function";die;
    }
}
