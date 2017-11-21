<?php

namespace app\components\helpers;

use Imagine\Image\Box;
use yii\imagine\Image;

class FileSaver
{
    private $_files;
    private $_dir;
    private $_thumb;
    private $_name;


    function __construct($uploadedFile)
    {
        $this->_files = $uploadedFile;
        $this->_dir = '/web/uploads/';
        $this->_thumb = '/web/uploads/thumbs/';
        $this->_name = time() . rand(100, 10000000);
    }

    public function savePhoto()
    {
        $this->_files->saveAs($_SERVER['DOCUMENT_ROOT'] . $this->_dir . $this->_name . '.' . $this->_files->extension);

        if (file_exists($_SERVER['DOCUMENT_ROOT'] . $this->_dir . $this->_name . '.' . $this->_files->extension)) {
            $image = Image::getImagine()->open($_SERVER['DOCUMENT_ROOT'] . $this->_dir . $this->_name . '.' . $this->_files->extension);

            if (($image->getSize()->getWidth() > 900) || ($image->getSize()->getHeight() > 900)) {
                $ratio = $image->getSize()->getWidth() / $image->getSize()->getHeight();

                if ($ratio > 1) {
                    $width = 900;
                    $height = 900 / $ratio;
                    $box = new Box($width, $height);
                    $image->resize($box)->save($_SERVER['DOCUMENT_ROOT'] . $this->_dir . $this->_name . '.' . $this->_files->extension);
                } else {
                    $height = 900;
                    $width = 900 / $ratio;
                    $box = new Box($width, $height);
                    $image->resize($box)->save($_SERVER['DOCUMENT_ROOT'] . $this->_dir . $this->_name . '.' . $this->_files->extension);
                }
            }
        }

        return $this->_dir . $this->_name . '.' . $this->_files->extension;
    }

    public function savePhotoThumb()
    {
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . $this->_dir . $this->_name . '.' . $this->_files->extension)) {
            $image = Image::getImagine()->open($_SERVER['DOCUMENT_ROOT'] . $this->_dir . $this->_name . '.' . $this->_files->extension);
            $image->resize(new Box(100, 100));
            $image->save($_SERVER['DOCUMENT_ROOT'] . $this->_thumb . $this->_name . '.' . $this->_files->extension);
        }
        return $this->_thumb . $this->_name . '.' . $this->_files->extension;
    }


}