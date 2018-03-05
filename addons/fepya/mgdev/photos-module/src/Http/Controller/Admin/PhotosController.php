<?php namespace Mgdev\PhotosModule\Http\Controller\Admin;

use Mgdev\PhotosModule\Photo\Form\PhotoFormBuilder;
use Mgdev\PhotosModule\Photo\Table\PhotoTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class PhotosController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param PhotoTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(PhotoTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param PhotoFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(PhotoFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param PhotoFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(PhotoFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
