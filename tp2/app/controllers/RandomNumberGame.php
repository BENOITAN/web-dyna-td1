/**
 * Controller RandomNumberGame
 **/
class RandomNumberGame extends ControllerBase{
    const SESSION_KEY="random";

$number=\mt_rand(1,10);

USession::set(self::SESSION_KEY, $number);

$number=USession::get(self::SESSION_KEY);

if(USession::exists(self::SESSION_KEY)){
    //Faire quelque chose si la variable existe
}

$number=URequest::post("number");