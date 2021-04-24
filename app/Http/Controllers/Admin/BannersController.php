<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Categories\CategoryStoreRequest;
use App\Repositories\Admin\Banners\BannerRepository;
use Illuminate\Http\Request;

class BannersController extends Controller
{
    protected $repository;
    protected $bannerRepository;

    public function __construct()
    {
        $this->repository = new BannerRepository();

    }

    public function index()
    {
        $banners = $this->repository->all([]);
        $banner  = $this->repository->model;
        return view('Admin.banners.index',compact('banners','banner'));
    }

    public function destroy($id)
    {
        try {
            $this->repository->inactivate($id);
            return redirect('admin/banners')->with('status_success','El banner fue dada de baja correctamente');
        }catch (\Exception $exception) {
            dd($exception);
        }
    }
}
