<?php
/**
 * Simple strategy pattern example
 * 
 * 
 * @author Aviv
 */
interface EncryptStrategy {
	public function encrypt();
}

class imageEncrypt implements EncryptStrategy {
	private $data;
	
	public function __construct($data) {
		$this->data  = $data;
	}
	public function encrypt() {
		//...
	}
}

class textEncrypt implements EncryptStrategy{
	private $data;

	public function __construct($data) {
		$this->data  = $data;
	}
	public function encrypt() {
		//...
	}
}





$sampleData = array(array('type'=>'image','data'=>'test.jpeg'),array('type'=>'text','data'=>'blablabla'));
/**
 * @param array $sampleData
 */
function encrypt(array &$sampleData) {
	//@todo A good idea here will be to use Factory pattern to select which encrypt type we need.
	for($i=0;$i<count($sampleData);$i++) {
		switch ($sampleData[$i]['type']) {
			case 'image':
				$sampleData[$i]['data'] = new imageEncrypt($sampleData[$i]['data']);
			break;
			
			case 'text':
				$sampleData[$i]['data'] = new textEncrypt($sampleData[$i]['data']);
			break;	
			
			default:
				
			break;
		}
	}
	return $sampleData;
}
