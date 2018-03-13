<?php namespace Mgdev\LecturesModule\Http\Controller\FrontEnd;

use Anomaly\Streams\Platform\Http\Controller\PublicController;
use Mgdev\LecturesModule\Category\Contract\CategoryInterface;
use Mgdev\LecturesModule\Category\Contract\CategoryRepositoryInterface;

/**
 * Created by PhpStorm.
 * User: mgoicocheadev
 * Date: 13/03/18
 * Time: 04:55
 */

class LectureController extends PublicController{

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


        return $this->view->make('mgdev.module.lectures::lecture/index',compact('categories'));
    }

}