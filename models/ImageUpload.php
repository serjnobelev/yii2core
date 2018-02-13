<?php
/**
 * Created by PhpStorm.
 * User: serjnobelev
 * Date: 2/4/18
 * Time: 18:37
 */

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class ImageUpload extends Model
{
    public $image;
    public $imagePath = 'uploads';

    public function rules()
    {
        return [
            [['image'], 'required'],
            [['image'], 'file', 'extensions' => 'jpg,png']
        ];
    }

    public function uploadFile(UploadedFile $file, $oldImageName)
    {
        $this->image = $file->name;
        if($this->validate()){
            $this->deleteImage($oldImageName);
            $imageName = time() . '_' . $this->image;
            $file->saveAs($this->imageDir() . $imageName);
            return $imageName;
        }
    }

    public function deleteImage($oldImageName)
    {
        if(!empty($oldImageName) && file_exists($this->imageDir() . $oldImageName)){
            unlink($this->imageDir() . $oldImageName);
        }
    }

    public function imageDir()
    {
        return Yii::getAlias('@web') . $this->imagePath . DIRECTORY_SEPARATOR;
    }
}