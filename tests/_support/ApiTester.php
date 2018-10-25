<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class ApiTester extends \Codeception\Actor
{
    use _generated\ApiTesterActions;

   /**
    * Define custom actions here
    */

   //Function for getting versions from package api
    public function getVersions($json){

        $vars = get_object_vars ( $json );
        $versions = array();
        foreach($vars as $key=>$value) {
            $versions[] = $key;
        }
        //sort this array to get latest version
        usort($versions, 'version_compare');
        //Lest just send latest version, we just wanna compare latest
        return end($versions);
    }
}
