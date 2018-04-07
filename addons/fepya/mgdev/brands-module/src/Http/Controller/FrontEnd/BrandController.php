<?php namespace Mgdev\BrandsModule\Http\Controller\FrontEnd;

use Anomaly\Streams\Platform\Http\Controller\PublicController;
use Mgdev\BrandsModule\Brand\Contract\BrandRepositoryInterface;
use Mgdev\BrandsModule\Category\Contract\CategoryInterface;
use Mgdev\BrandsModule\Category\Contract\CategoryRepositoryInterface;

/**
 * Created by PhpStorm.
 * User: mgoicocheadev
 * Date: 4/03/18
 * Time: 13:55
 */

class BrandController extends PublicController{

    public function index(CategoryRepositoryInterface $category)
    {
        /* @var CategoryInterface $categories */

        $categories = $category->getAll();

        $this->breadcrumbs->add('Home','/');
        $this->breadcrumbs->add('Marcas','brands');

        $this->template->set('meta_title','Marcas Participantes');

        //dd($categories);


        return $this->view->make('mgdev.module.brands::brand/index',compact('categories'));
    }

    /**
     * @param BrandRepositoryInterface $brands
     * @param $slug
     * @return \Illuminate\Contracts\View\View|mixed
     */
    public function view(BrandRepositoryInterface $brands, $slug)
    {
        /* @var MarcaInterface $brand */
        if(!$brand = $brands->findBySlug($slug)){
            abort(404);
        }


        $this->breadcrumbs->add('Home','/');
        $this->breadcrumbs->add('Model','Marcas');
        $this->breadcrumbs->add($brand->title,$brand->route('view'));

        $this->template->set('meta_title',$brand->title);

        return $this->view->make('mgdev.module.brands::brand/view',compact('brand'));
    }
}