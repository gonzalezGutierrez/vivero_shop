<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\UsersStoreRequest;
use App\Http\Requests\Admin\Users\UsersUpdateRequest;
use App\Models\Role;
use App\Repositories\Admin\Users\UserRepository;
use Illuminate\Http\Request;

class ClientsController extends Controller
{

    protected $repository;

    public function __construct()
    {
        $this->repository = new UserRepository();
    }

    public function index()
    {
        $users = $this->repository->all_clients([]);
        return view('Admin.clients.index',compact('users'));
    }

    public function create()
    {
        $user = $this->repository->model;
        $roles= Role::pluck('role','id');
        return view('Admin.clients.create',compact('user','roles'));
    }

    public function store(UsersStoreRequest $request)
    {
        try {

            $this->repository->create($request->all());

            return redirect('admin/users')->with('status_success','El usuario fue agregada correctamente');

        }catch (\Exception $exception) {
            dd($exception);
        }
    }

    public function show($id)
    {
        $user = $this->repository->find($id);
        return view('Admin.clients.show',compact('user'));
    }


    public function edit($id)
    {
        $user = $this->repository->find($id);
        $roles= Role::pluck('role','id');
        return view('Admin.clients.edit',compact('user','roles'));
    }

    public function update(UsersUpdateRequest $request, $id)
    {
        try {

            $this->repository->update($request->all(),$id);
            return redirect('admin/users')->with('status_success','El usuario fue actualizado correctamente');

        }catch (\Exception $exception){
            dd($exception);
        }
    }

    public function destroy($id)
    {
        try {
            $this->repository->inactivate($id);
            return redirect('admin/users')->with('status_success','El usuario fue dado de baja correctamente');
        }catch (\Exception $exception) {
            dd($exception);
        }
    }
}
