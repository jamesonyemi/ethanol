<?php 
// include 'capture.php';
class Image
		{
			private $image;
			private $width;
			private $height;
			private $mimetype;


			function __construct($filename)
			{
				// read the image file to a binary buffer
				$file_pointer = fopen($filename, 'rb') or die("Image '$filename' not found!");
				$buff = '';
				 while (!feof($file_pointer)) {
				 	$buff .= fgets($file_pointer, 4096);

				 	 // create image and assign it to the variable image
				 	$this->image = imagecreatefromstring($buff);

				 	//extract image information
				 	$info = getimagesize($filename);
				 	$this->width = $info[0];
				 	$this->height = $info[1];
				 	$this->mimetype = $info['mime'];
				 }
				
			}
			
			public function display($value='')
			{
				header("Content-type: {$this->mimetype}");

					switch ($this->mimetype) {
						case 'image/jpeg':
							imagejpeg($this->image);
							break;
						
						case 'image/png':
							imagepng($this->image);
							break;

						case 'image/gif':
							imagegif($this->image);
							break;

						default:
							# code...
							break;
					}
			}
		}

		$Think = new Image($_GET["image"]);

?>
