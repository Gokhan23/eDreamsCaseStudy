<?php
/**
 * @group exception
 */

include_once('tests/acceptance/pages/HomePage.php');
include_once('tests/acceptance/pages/LoginPage.php');


class GettingExceptionCaseCest
{



    public function _before(AcceptanceTester $I)
    {

    }

    // In this case we are getting 500 exception
    // Oddly satisfying situation for QA's :)
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage(Pages\HomePage::URL);
        $I->click(\Pages\HomePage::$checkIn);
        $I->fillField(\Pages\HomePage::$checkIn,'12345');
        $I->fillField(\Pages\HomePage::$checkOut,'12345');
        $I->click(\Pages\HomePage::$searchSubmitButton);
        $I->see("No Results Found");


    }
}
