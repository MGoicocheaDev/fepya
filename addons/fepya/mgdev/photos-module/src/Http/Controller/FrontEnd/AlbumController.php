<?php namespace Mgdev\PhotosModule\Http\Controller\FrontEnd;
use Anomaly\Streams\Platform\Http\Controller\PublicController;

/**
 * Created by PhpStorm.
 * User: mgoicocheadev
 * Date: 29/03/18
 * Time: 15:51
 */




class AlbumController extends PublicController
{
    public function index(){
        return $this->view->make('mgdev.module.photos::album/index');
    }
}