<?php namespace Mgdev\PhotosModule\Http\Controller\FrontEnd;
use Anomaly\Streams\Platform\Http\Controller\PublicController;
use Mgdev\PhotosModule\Album\Contract\AlbumRepositoryInterface;

/**
 * Created by PhpStorm.
 * User: mgoicocheadev
 * Date: 29/03/18
 * Time: 15:51
 */




class AlbumController extends PublicController
{
    /**
     * @return \Illuminate\Contracts\View\View|mixed
     */
    public function index(){
        $this->breadcrumbs->add('Home','/');
        $this->breadcrumbs->add('Galeria de fotos','albums');

        $this->template->set('meta_title','Galeria de fotos de FEPYA 2018');
        $this->template->set('meta_description','Galeria de fotos de la feria FEPYA 2018.');
        $this->template->set('meta_keywords','Galeria, Fotos, Fepya, Fepya 2018');

        return $this->view->make('mgdev.module.photos::album/index');
    }

    public function view(AlbumRepositoryInterface $albumRepository, $slug)
    {
        /* @var AlbumInterface $album */
        if(!$album = $albumRepository->findBySlug($slug)){
            abort(404);
        }

        $this->breadcrumbs->add('Home','/');

        $this->breadcrumbs->add($album->title,$album->route('view'));

        return $this->view->make('mgdev.module.photos::album/view',compact('album'));


    }
}