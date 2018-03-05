<?php namespace Mgdev\PhotosModule\Http\Controller\Admin;

use Mgdev\PhotosModule\Album\Form\AlbumFormBuilder;
use Mgdev\PhotosModule\Album\Table\AlbumTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class AlbumsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param AlbumTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(AlbumTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param AlbumFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(AlbumFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param AlbumFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(AlbumFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
