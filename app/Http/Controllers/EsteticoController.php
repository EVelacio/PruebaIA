<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEsteticoRequest;
use App\Http\Requests\UpdateEsteticoRequest;
use App\Repositories\EsteticoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EsteticoController extends AppBaseController
{
    /** @var  EsteticoRepository */
    private $esteticoRepository;

    public function __construct(EsteticoRepository $esteticoRepo)
    {
        $this->esteticoRepository = $esteticoRepo;
    }

    /**
     * Display a listing of the Estetico.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->esteticoRepository->pushCriteria(new RequestCriteria($request));
        $esteticos = $this->esteticoRepository->all();

        return view('esteticos.index')
            ->with('esteticos', $esteticos);
    }

    /**
     * Show the form for creating a new Estetico.
     *
     * @return Response
     */
    public function create()
    {
        return view('esteticos.create');
    }

    /**
     * Store a newly created Estetico in storage.
     *
     * @param CreateEsteticoRequest $request
     *
     * @return Response
     */
    public function store(CreateEsteticoRequest $request)
    {
        $input = $request->all();

        $estetico = $this->esteticoRepository->create($input);

        Flash::success('Estetico saved successfully.');

        return redirect(route('esteticos.index'));
    }

    /**
     * Display the specified Estetico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estetico = $this->esteticoRepository->findWithoutFail($id);

        if (empty($estetico)) {
            Flash::error('Estetico not found');

            return redirect(route('esteticos.index'));
        }

        return view('esteticos.show')->with('estetico', $estetico);
    }

    /**
     * Show the form for editing the specified Estetico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estetico = $this->esteticoRepository->findWithoutFail($id);

        if (empty($estetico)) {
            Flash::error('Estetico not found');

            return redirect(route('esteticos.index'));
        }

        return view('esteticos.edit')->with('estetico', $estetico);
    }

    /**
     * Update the specified Estetico in storage.
     *
     * @param  int              $id
     * @param UpdateEsteticoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEsteticoRequest $request)
    {
        $estetico = $this->esteticoRepository->findWithoutFail($id);

        if (empty($estetico)) {
            Flash::error('Estetico not found');

            return redirect(route('esteticos.index'));
        }

        $estetico = $this->esteticoRepository->update($request->all(), $id);

        Flash::success('Estetico updated successfully.');

        return redirect(route('esteticos.index'));
    }

    /**
     * Remove the specified Estetico from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estetico = $this->esteticoRepository->findWithoutFail($id);

        if (empty($estetico)) {
            Flash::error('Estetico not found');

            return redirect(route('esteticos.index'));
        }

        $this->esteticoRepository->delete($id);

        Flash::success('Estetico deleted successfully.');

        return redirect(route('esteticos.index'));
    }
}
