<?php namespace Mgdev\LessonsModule\Http\Controller\FrontEnd;
use Anomaly\Streams\Platform\Http\Controller\PublicController;
use Mgdev\LessonsModule\Teacher\Contract\TeacherInterface;
use Mgdev\LessonsModule\Teacher\Contract\TeacherRepositoryInterface;

/**
 * Created by PhpStorm.
 * User: mgoicocheadev
 * Date: 6/04/18
 * Time: 23:45
 */

class TeachersController extends PublicController{


    /**
     * @return mixed
     */
    public function index(TeacherRepositoryInterface $teacherRepository)
    {

        /* @var TeacherInterface $teachers */
        if(!$teachers = $teacherRepository->getAllTeachers()){
            abort(404);
        }

        $this->breadcrumbs->add('Home','/');
        $this->breadcrumbs->add('Profesores','teachers');

        $this->template->set('meta_title','Profesores de FEPYA 2018');
        $this->template->set('meta_description','Profesores y maestros que presentaran sus clases y actividades en la feria FEPYA 2018');
        $this->template->set('meta_keywords','Clases, Talleres, Maestros de Pastelería, Profesores de pastelería, Participantes, Fepya, Fepya 2018');


        return $this->view->make('mgdev.module.lessons::teacher/index',compact('teachers'));
    }

    /**
     * @param TeacherRepositoryInterface $teacherRepository
     * @param $slug
     * @return mixed
     */
    public function view(TeacherRepositoryInterface $teacherRepository, $slug)
    {
        /* @var TeacherInterface $teacher */
        if(!$teacher = $teacherRepository->findBySlug($slug)){
            abort(404);
        }
/*
        $$this->breadcrumbs->add('Home','/');

        $this->breadcrumbs->add($teacher->title,$teacher->route('view'));

        $this->template->set('meta_title',$teacher->meta_title);
        $this->template->set('meta_description',$teacher->meta_description);
        $this->template->set('meta_keywords',$teacher->meta_keywords);
*/

        return $this->view->make('mgdev.module.lessons::teacher/view',compact('teacher'));

    }
}