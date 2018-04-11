<?php namespace Mgdev\PhotosModule\Http\Controller\FrontEnd;

use Anomaly\Streams\Platform\Http\Controller\PublicController;
use Mgdev\PhotosModule\Category\Contract\CategoryInterface;
use Mgdev\PhotosModule\Category\Contract\CategoryRepositoryInterface;
use Mgdev\PhotosModule\Album\Contract\AlbumInterface;
use Mgdev\PhotosModule\Album\Contract\AlbumRepositoryInterface;

class AlbumsController extends PublicController{

	public function index(CategoryRepositoryInterface $category, AlbumRepositoryInterface $album){

		 /* @var CategoryInterface $categories */
        $categories = $category->getAll();

        /* @var AlbumInterface $albums */
        $albums = $album->getAllEnables();

        $model = [
        	'categories' => $categories,
        	'albums' => $albums,
        ];

        $this->breadcrumbs->add('Home','/');
        $this->breadcrumbs->add('Almbum de Fotos de FEPYA','albums');

        $this->template->set('meta_title','Album de Fotos de FEPYA');
        $this->template->set('meta_description','Album de Fotos de FEPYA');
        $this->template->set('meta_keywords','Clases, Talleres, Maestros de Pastelería, Profesores de pastelería, Participantes, Fepya, Fepya 2018');       



        return $this->view->make('mgdev.module.photos::album/index',compact('model'));

	}

}