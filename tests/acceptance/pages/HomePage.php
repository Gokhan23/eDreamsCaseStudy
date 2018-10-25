<?php
/**
 * Created by PhpStorm.
 * User: gokha
 * Date: 10/25/2018
 * Time: 02:06
 */
namespace Pages;
class HomePage extends \Helper\Acceptance
{
    const URL = '/';

    static $searchBar = '//*[@id="select2-drop"]/div/input';
    static $searchBarLayer = '//*[@id="s2id_autogen8"]';
    static $searchAutoCompleteFirstSuggestion = '(//*[@class="select2-match"])[1]';
    static $searchSubmitButton = "(//*[@type= 'submit'])[1]";
    static $adultCountInput = '//*[@id="adultInput"]';
    static $childCountInput = '//*[@id="childInput"]';
    static $checkIn = '(//*[@placeholder="Check in"])[1]';
    static $checkOut = '(//*[@placeholder="Check out"])[1]';

    // we can use this function to pick specific date,
    // since I don't know when are you going to execute this test,
    // I will only pick second available day in the calendar
    /***
     * @param $availableDay
     * @param $calendar
     * @return string
     *
     *
     * calendar param
     * checkIn = 1
     * checkOut = 2
     */
    static function pickDate($availableDay = 0, $calendar = 0)
    {
        return "//td[@class='day  active']/following-sibling::td";
    }

    static $accountButton = '(//*[@id="li_myaccount"]/a)[2]';
    static $loginButton = '(//*[@href="https://www.phptravels.net/login"])[2]';

}