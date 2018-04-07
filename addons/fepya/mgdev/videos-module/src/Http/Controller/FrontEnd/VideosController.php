<?php namespace Mgdev\VideosModule\Http\Controller\FrontEnd;
use Anomaly\Streams\Platform\Http\Controller\PublicController;
use Mgdev\VideosModule\Video\Contract\VideoInterface;
use Mgdev\VideosModule\Video\Contract\VideoRepositoryInterface;

/**
 * Created by PhpStorm.
 * User: mgoicocheadev
 * Date: 7/04/18
 * Time: 00:50
 */

class VideosController extends PublicController{

    /**
     * @return \Illuminate\Contracts\View\View|mixed
     */
    public function index()
    {

        $this->breadcrumbs->add('Home','/');
        $this->breadcrumbs->add('Galeria de Videos','videos');

        $this->template->set('meta_title','Galeria de Videos de FEPYA 2018');
        $this->template->set('meta_description','Galeria de videos de la feria FEPYA 2018.');
        $this->template->set('meta_keywords','Galeria, Videos, Fepya, Fepya 2018');

        return $this->view->make('mgdev.module.videos::video/index');
    }

    /**
     * @param VideoRepositoryInterface $videoRepository
     * @param $slug
     * @return \Illuminate\Contracts\View\View|mixed
     */
    public function view(VideoRepositoryInterface $videoRepository, $slug)
    {
        /* @var VideoInterface $album */
        if(!$video = $videoRepository->findBySlug($slug)){
            abort(404);
        }

        $this->breadcrumbs->add('Home','/');

        $this->breadcrumbs->add($video->title,$video->route('view'));

        return $this->view->make('mgdev.module.videos::video/view',compact('video'));


    }
}