<?php
//Folder containing all images
$dir = '/path/to/folder';
//max age for an image (in seconds)
//    86400sec = 1 day
//	  3600 = 1 Hour
$delafter = 3600;
$imgs = preg_grep('~\.(jpeg|jpg|png)$~', scandir($dir));
$limit = 4;
foreach( $imgs as $img ){
	$limit--;
if($limit > -1) {
	 if( $img != '.' && $img != '..' ){
		$age = filemtime( $dir.'/'.$img );
		if( ( $age + $delafter ) < time() ){
			if( unlink( $dir.'/'.$img ) ){
				$log[] = 'Deleted: '. $img;
			}
			else{
				$log[] = 'Error deleting:'.$img;
			}
		}
		else{
			$log[] = 'Left: '.$img;
		}
	  }
	}
}
header( 'Content-type:text/plain; charset=utf-8' );
echo implode( "\r\n", $log );
?>


    
