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
        $this->breadcrumbs->add('Clases y Talleres','lectures');

        $this->template->set('meta_title','Clases y Talleres de FEPYA 2018');
        $this->template->set('meta_description','Clases y Talleres que seran dictados por los profesores y participantes de la feria FEPYA 2018.');
        $this->template->set('meta_keywords','Clases, Talleres, Maestros de Pastelería, Profesores de pastelería, Participantes, Fepya, Fepya 2018');

        //dd($categories);




        return $this->view->make('mgdev.module.lessons::lesson/index',compact('categories'));
    }
}