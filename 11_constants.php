<?php
class FlashMessage{
    const created = 'Your product has been successfully added';
    const edited = 'Your product has been successfully edited';
    const deleted = 'Your product has been successfully deleted';
    const error = 'Something went wrong';

    public function productStored(){
        echo self::created;
    }
    public function productUpdated(){
        echo self::edited;
    }
    public function productDeleted(){
        echo self::deleted;
    }
    public function error(){
        echo self::error;
    }


}
?>