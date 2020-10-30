<?php

namespace app\models\upload;

use Yii;
use yii\base\Model;
use yii\imagine\Image;

class MainphotoUpload extends Model
{
    public $photo;
    public $imageFile;
    public $photo_id;

    public function rules()
    {
        return [
        [['imageFile'], 'file', 'skipOnEmpty' => false,
                                'checkExtensionByMimeType' => false,
                                'mimeTypes' => ['image/jpeg', 'image/png', 'image/jpg'],
                                'extensions' => 'png, jpg, jpeg', ],
        ];
    }

    public function upload()
    {

        if ($this->validate()) {

            $this->imageFile->saveAs('images/mainphoto/'.$this->photo.'.jpg', ['quality' => 40]);

            $size = Image::getImagine()->open('images/mainphoto/'.$this->photo.'.jpg')->getSize();
            $width = $size->getWidth();

            Image::thumbnail('images/mainphoto/'.$this->photo.'.jpg', $width, 768)->
                             save('images/mainphoto/'.$this->photo.'@1024.jpg', ['quality' => 40]);
            Image::thumbnail('images/mainphoto/'.$this->photo.'.jpg', 100, 100)->
                             save('images/mainphoto/'.$this->photo.'@100x100.jpg', ['jpeg_quality' => 40]);
            Image::thumbnail('images/mainphoto/'.$this->photo.'.jpg', 200, 200)->
                             save('images/mainphoto/'.$this->photo.'@200x200.jpg', ['jpeg_quality' => 40]);
            Image::thumbnail('images/mainphoto/'.$this->photo.'.jpg', 380, 220)->
                            save('images/mainphoto/'.$this->photo.'@380x220.jpg', ['quality' => 40]);
            Image::thumbnail('images/mainphoto/'.$this->photo.'.jpg', 600, 250)->
                            save('images/mainphoto/'.$this->photo.'@600x250.jpg', ['quality' => 40]);

            return true;
        } else {
            return false;
        }
    }
}
