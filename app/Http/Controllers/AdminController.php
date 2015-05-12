<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;

class AdminController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    private $user, $users, $operators, $teachers, $students;


    /**
     * @param User $user
     *
     */
    public function __construct(User $user)
    {
        $this->users = $user->paginate();
        $this->operators = $user->whereRole(2)->paginate();
        $this->teachers = $user->whereRole(4)->paginate();
        $this->students = $user->whereRole(5)->paginate();
        $this->user = $user;
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\View\View
     *
     * get admin dashboard
     */

    public function index()
    {
        return view('admin.index');
    }

    /**
     * @return view to all users collection
     *
     * with $user data
     */
    public function all()
    {
        return view('admin.users.all')->with('users', $this->users);
    }

    public function operators()
    {
        return view('admin.users.operator')->with('operators', $this->operators);
    }

    public function teachers()
    {
        return view('admin.users.teachers')->with('teachers', $this->teachers);
    }


    /**
     * @return view  to student collection
     *
     */
    public function students()
    {
        return view('')->with('students', $this->students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateUserRequest $request, User $user)
    {
        $user->create([
            'username' => $request->get('username'),
            'password' => bcrypt($request->get('password')),
            'name'     => $request->get('name'),
            'email'    => $request->get('email'),
            'role'     => $request->get('role')
        ]);
        flash()->info('Created a New User !!');

        return redirect()->route('admin.all');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($username)
    {
        $user = $this->user->find($username);

        return view('admin.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($username)
    {
        $user = $this->user->find($username);

        return view('admin.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function update($username, Request $request)
    {
        $user = $this->user->find($username);

        $user->fill([
            'username' => $request->get('username'),
            'name'     => $request->get('name'),
            'email'    => $request->get('email')
        ])->save();
        flash()->info('Successfully Updated ' . $user->name . ' !!');

        return redirect()->intended(route('admin.all'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($username)
    {
        $this->user->whereUsername($username)->delete();
        flash()->success('Delete User !!');

        return redirect()->route('admin.all');
    }

}
