<?php
/**
 * Simple PHP Adapter example
 * Good when using with API's for examples
 */


class TwillioSMSProvider { //existing API Example
	public function send($to,$text) {
		//Sending SMS..
	}
}
//

//OUR SMS Adapter
interface SMSAdapter {
	public function sendSMS($to,$text) {}
}


//OUR Twillio Adapter
class SMSTwillioAdapter implements SMSAdapter {
	private $twillio;
	
	public function __construct(TwillioSMSProvider $twillioSMSProvider) {
		$this->twillio = $twillioSMSProvider;
	}
	
	public function sendSMS($to, $text) {
		$this->twillio->send($to, $text);
	}
}


//Usage example
$twilio = new SMSTwillioAdapter(new TwillioSMSProvider());
$twilio->sendSMS($to, $text);
