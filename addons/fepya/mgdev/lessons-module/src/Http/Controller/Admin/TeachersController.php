<?php namespace Mgdev\LessonsModule\Http\Controller\Admin;

use Mgdev\LessonsModule\Teacher\Form\TeacherFormBuilder;
use Mgdev\LessonsModule\Teacher\Table\TeacherTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class TeachersController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param TeacherTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(TeacherTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param TeacherFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(TeacherFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param TeacherFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(TeacherFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
