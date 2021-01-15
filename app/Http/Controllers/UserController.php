<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUser;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
//        $users = User::getAll();
//        return view('users.index', ['users' => $users]);
    }

    /**
     * @return mixed
     */
    public function create()
    {
//        return view('users.create', ['licenses' => $licences, 'memberships' => $memberships]);
    }

    /**
     * @param StoreUser $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
//        $user = User::create($request->all());
//        /*     $user->licenses()->attach($request->cats);*/
//        return redirect()->route('users.index');
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(User $user)
    {
//       $this->authorize('update', $user);

        return view('users.edit', ['user' => $user]);
    }

    /**
     * @param UpdateUser $request
     * @param User $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(UpdateUser $request, User $user)
    {
//        $this->authorize('update', $user);

        $user->update($request->all());

        return view('users.show', ['user' => $user]);
    }

    /**
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(User $user)
    {
//        $user->delete();
//        return redirect()->route('users.index');
    }
}

