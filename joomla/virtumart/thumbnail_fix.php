// \administrator\components\com_virtuemart\models\media.php


public function attachImages($objects,$type,$mime='',$limit=0){
		if(!empty($objects)){
			if(!is_array($objects)) $objects = array($objects);
			foreach($objects as $k => $object){
				if(!is_object($object)){
					$object = $this->createVoidMedia($type,$mime);
				}

				if(empty($object->virtuemart_media_id)) $virtuemart_media_id = null; else $virtuemart_media_id = $object->virtuemart_media_id;
				$object->images = $this->createMediaByIds($virtuemart_media_id,$type,$mime,$limit);
				
				foreach ($object->images as &$image)
				{
					if (empty($image->file_url_thumb)) {
					  $image->file_url_thumb = $image->getFileUrlThumb(); 
					}
				}
				//This should not be used in fact. It is for legacy reasons there.
				if(isset($object->images[0]->file_url_thumb)){
					$object->file_url_thumb = $object->images[0]->file_url_thumb;
					$object->file_url = $object->images[0]->file_url;
				}
			}
		}
	}
