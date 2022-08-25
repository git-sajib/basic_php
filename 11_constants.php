<?php
/* Inheritance */
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
$trigger = 'edited';
$flash = new FlashMessage();

switch ($trigger) {
    case 'created':
        $flash->productStored();
        break;

        case 'edited':
            $flash->productUpdated();
            break;

            case 'deleted':
                $flash->productDeleted();
                break;

                case 'error':
                    $flash->error();
}
?>