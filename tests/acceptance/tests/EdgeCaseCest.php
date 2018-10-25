<?php
/**
 * @group edge
 */

include_once('tests/acceptance/pages/HomePage.php');
include_once('tests/acceptance/pages/LoginPage.php');


class EdgeCaseCest
{



    public function _before(AcceptanceTester $I)
    {

    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $email = 'user@phptravels.com';
        $pass = 'demouser';
        $firstName = 'Johny';
        $surName = 'Smith';
        // in this test we are filling fields with unexpected data
        $I->amOnPage(Pages\HomePage::URL);
        $I->click(Pages\HomePage::$accountButton);
        $I->click(Pages\HomePage::$loginButton);
        $I->waitForElementVisible(Pages\LoginPage::$loginButton);
        $I->fillField(Pages\LoginPage::$emailField,$email);
        $I->fillField(Pages\LoginPage::$passField,$pass);
        $I->click(Pages\LoginPage::$loginButton);
        $I->waitForText('Hi, '.$firstName.' '.$surName.'');
        $I->click(\Pages\LoginPage::$profileTab);
        $I->fillField(\Pages\LoginPage::$phoneField,'Hot tamale, Hot hot tamale, hot tamale hot, hot!
                                                           Do you like tamale, hot hot tamale?');
        $I->fillField(\Pages\LoginPage::$addressField,'foo<script>alert(1)</script>');



    }
}
