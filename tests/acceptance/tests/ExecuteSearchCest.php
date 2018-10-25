<?php

include_once('tests/acceptance/pages/HomePage.php');

/**
 * @group search
 */

class ExecuteSearchCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage(Pages\HomePage::URL);
        //first click to search bar like a user
        $I->click(Pages\HomePage::$searchBarLayer);
        //fill fields
        $I->fillField(Pages\HomePage::$searchBar,"barcelona");
        $I->waitForElement(Pages\HomePage::$searchAutoCompleteFirstSuggestion);
        $I->click(Pages\HomePage::$searchAutoCompleteFirstSuggestion);

        $I->click(Pages\HomePage::$checkIn);
        $I->click(Pages\HomePage::pickDate(2,1));
        $I->wait(2);
        $I->click(Pages\HomePage::pickDate(3,2));

        $I->click(Pages\HomePage::$searchSubmitButton);
        $I->see("No Results Found");
    }
}
