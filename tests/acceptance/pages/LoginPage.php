<?php
/**
 * Created by PhpStorm.
 * User: gokha
 * Date: 10/25/2018
 * Time: 21:54
 */

namespace Pages;

class LoginPage
{
    const URL = 'login';

    static $emailField = '//*[@placeholder="Email"]';
    static $passField = '//*[@placeholder="Password"]';
    static $loginButton = '//*[@id="loginfrm"]/button';
    static $profileTab = '//*[@href="#profile"]';
    static $phoneField= '//*[@placeholder="Phone"]';
    static $addressField= '//*[@placeholder="Address"]';



}