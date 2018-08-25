<?php

use tecnocen\roa\test\Tester as RoaTester;
use tecnocen\roa\test\TesterTrait as RoaTesterTrait;

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
class ApiTester extends \Codeception\Actor implements RoaTester
{
    use _generated\ApiTesterActions;
    use RoaTesterTrait;

    /**
     * Define custom actions here
     */
}