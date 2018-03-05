<?php namespace Mgdev\LecturesModule\Http\Controller\Admin;

use Mgdev\LecturesModule\Lecture\Form\LectureFormBuilder;
use Mgdev\LecturesModule\Lecture\Table\LectureTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class LecturesController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param LectureTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(LectureTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param LectureFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(LectureFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param LectureFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(LectureFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
