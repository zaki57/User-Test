<?php
/**
 * Created by PhpStorm.
 * User: instaveritas
 * Date: 29/08/18
 * Time: 4:18 PM
 */

//query-16

$users = User::where('active', true)->where('age', '25')->get();

//query-17

$users = User::select('id', 'username', 'name')->get();

//query-18

$users = User::where('age', '>', 30, 'OR', 'id' , '<', 10)->get();

//query-19


