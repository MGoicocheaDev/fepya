<?php namespace Mgdev\LessonsModule\Http\Controller\FrontEnd;

use Anomaly\Streams\Platform\Http\Controller\PublicController;
use Mgdev\LessonsModule\Category\Contract\CategoryInterface;
use Mgdev\LessonsModule\Category\Contract\CategoryRepositoryInterface;
use Mgdev\LessonsModule\Lesson\Contract\LessonInterface;
use Mgdev\LessonsModule\Lesson\Contract\LessonRepositoryInterface;


/**
 * Created by PhpStorm.
 * User: mgoicocheadev
 * Date: 6/04/18
 * Time: 23:16
 */

class LessonsController extends PublicController{

    /**
     * @param CategoryRepositoryInterface $category
     * @return \Illuminate\Contracts\View\View|mixed
     */
    public function index(CategoryRepositoryInterface $category)
    {
        /* @var CategoryInterface $categories */

        $categories = $category->getAll();


        $this->breadcrumbs->add('Home','/');
        $this->breadcrumbs->add('Clases y Talleres','lessons');

        $this->template->set('meta_title','Clases y Talleres de FEPYA 2018');
        $this->template->set('meta_description','Clases y Talleres que seran dictados por los profesores y participantes de la feria FEPYA 2018.');
        $this->template->set('meta_keywords','Clases, Talleres, Maestros de Pastelería, Profesores de pastelería, Participantes, Fepya, Fepya 2018');

        //dd($categories);




        return $this->view->make('mgdev.module.lessons::lesson/index',compact('categories'));
    }

    public function view(LessonRepositoryInterface $lessonRepository, $slug)
    {
        /* @var LessonInterface $lesson */
        if(!$lesson = $lessonRepository->findBySlug($slug)){
            abort(404);
        }

        $this->breadcrumbs->add('Home','/');

        $this->breadcrumbs->add($lesson->title,$lesson->route('view'));

        $this->template->set('meta_description',$lesson->meta_title);
        $this->template->set('meta_description',$lesson->meta_description);
       // $this->template->set('meta_keywords',$lesson->meta_keywords);


        return $this->view->make('mgdev.module.lessons::lesson/view',compact('lesson'));

    }



}