<?php

require_once(__DIR__ . '/../autoload.php');

$MessageBird = new \MessageBird\Client('36raAETaX0viZXGpk1EI9iCMG'); // Set your own API access key here.

$Message             = new \MessageBird\Objects\Message();
$Message->originator = 'MessageBird';
$Message->recipients = array(+917526812579);
$Message->body       = 'This is a test baha  message.';

try {
    $MessageResult = $MessageBird->messages->create($Message);
    var_dump($MessageResult);

} catch (\MessageBird\Exceptions\AuthenticateException $e) {
    // That means that your accessKey is unknown
    echo 'wrong login';

} catch (\MessageBird\Exceptions\BalanceException $e) {
    // That means that you are out of credits, so do something about it.
    echo 'no balance';

} catch (\Exception $e) {
    echo $e->getMessage();
}
