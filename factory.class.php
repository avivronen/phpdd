<?php
	/**
	 * Simple factory usage example
	 * @author Aviv Ronen
	 */

	interface Shape {
		public function draw();
	}
	
	class Star implements Shape {
		public $x;
		public $y;
		public $width;
		public $height;
		
		public function draw() {
			echo "Drawing Star...";
		}
	}
	
	class Globe implements Shape {
		public function draw() {
			echo "Drawing Globe..";
		}
	}
	
	class shapeFactory {
		public function createShape($type) {
			switch ($type) {
				case 'Star':
					return new Star();
				break;
				
				case 'Globe':
					return new Globe();
				break;	

				default:
					return false;
				break;
			}
		}
	}
	
	
	
//usage examples	
$shapeFactory = new shapeFactory();
$star = $shapeFactory->createShape('Star');
?>