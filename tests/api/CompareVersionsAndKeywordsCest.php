<?php
use GuzzleHttp\Client;

class CompareVersionsAndKeywordsCest
{
    public function _before(ApiTester $I)
    {
    }

    public function compareVersionsAndKeywords(\ApiTester $I)
    {
        $I-> sendGet('p/league/plates.json');
        $I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK); // 200
        $I->seeResponseIsJson();
        $pResponse = json_decode($I->grabResponse());
        $pLatestVersion = $I->getVersions($pResponse->packages->{'league/plates'});

        $I-> sendGet('packages/league/plates.json');
        $I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK); // 200
        $I->seeResponseIsJson();
        $packagesResponse = json_decode($I->grabResponse());
        $packagesLatestVersion = $I->getVersions($packagesResponse->package->versions);

        //Lets check if latest versions are matching
        $I->comment("comparing latest versions");
        if($packagesLatestVersion != $pLatestVersion ){
             throw new Exception("Version match failed! 
                                 \n packagesVersion: ".$packagesLatestVersion."
                                 \n pVersion:".$pLatestVersion
             );
        }


        //Compare keywords
        $I->comment("comparing keyword arrays");
        $pKeywords = $pResponse->packages->{'league/plates'}->$pLatestVersion->keywords;
        $packageKeywords = $packagesResponse->package->versions->$packagesLatestVersion->keywords;

        if($pKeywords !== $packageKeywords){
            throw new Exception("Keywords match failed! 
                                 \n packages Keywords: ".json_encode($pKeywords)."
                                 \n p Keywords:".json_encode($packageKeywords)
            );
        }

        //Extract list of keywords
        foreach ($pResponse->packages->{'league/plates'} as $key=>$value ){
            $extractedVersions[] = $key;
        }
        $I->comment("Extracted Versions ");
        foreach ($extractedVersions as $val){
            $I->comment($val);
        }


    }

}
