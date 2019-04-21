<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClinicoRequest;
use App\Http\Requests\UpdateClinicoRequest;
use App\Repositories\ClinicoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ClinicoController extends AppBaseController
{
    /** @var  ClinicoRepository */
    private $clinicoRepository;

    public function __construct(ClinicoRepository $clinicoRepo)
    {
        $this->clinicoRepository = $clinicoRepo;
    }

    /**
     * Display a listing of the Clinico.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->clinicoRepository->pushCriteria(new RequestCriteria($request));
        $clinicos = $this->clinicoRepository->all();

        return view('clinicos.index')
            ->with('clinicos', $clinicos);
    }

    /**
     * Show the form for creating a new Clinico.
     *
     * @return Response
     */
    public function create()
    {
        return view('clinicos.create');
    }

    /**
     * Store a newly created Clinico in storage.
     *
     * @param CreateClinicoRequest $request
     *
     * @return Response
     */
    public function store(CreateClinicoRequest $request)
    {
        $input = $request->all();

        $clinico = $this->clinicoRepository->create($input);

        Flash::success('Clinico saved successfully.');

        return redirect(route('clinicos.index'));
    }

    /**
     * Display the specified Clinico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $clinico = $this->clinicoRepository->findWithoutFail($id);

        if (empty($clinico)) {
            Flash::error('Clinico not found');

            return redirect(route('clinicos.index'));
        }

        return view('clinicos.show')->with('clinico', $clinico);
    }

    /**
     * Show the form for editing the specified Clinico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $clinico = $this->clinicoRepository->findWithoutFail($id);

        if (empty($clinico)) {
            Flash::error('Clinico not found');

            return redirect(route('clinicos.index'));
        }

        return view('clinicos.edit')->with('clinico', $clinico);
    }

    /**
     * Update the specified Clinico in storage.
     *
     * @param  int              $id
     * @param UpdateClinicoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClinicoRequest $request)
    {
        $clinico = $this->clinicoRepository->findWithoutFail($id);

        if (empty($clinico)) {
            Flash::error('Clinico not found');

            return redirect(route('clinicos.index'));
        }

        $clinico = $this->clinicoRepository->update($request->all(), $id);

        Flash::success('Clinico updated successfully.');

        return redirect(route('clinicos.index'));
    }

    /**
     * Remove the specified Clinico from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $clinico = $this->clinicoRepository->findWithoutFail($id);

        if (empty($clinico)) {
            Flash::error('Clinico not found');

            return redirect(route('clinicos.index'));
        }

        $this->clinicoRepository->delete($id);

        Flash::success('Clinico deleted successfully.');

        return redirect(route('clinicos.index'));
    }
}
