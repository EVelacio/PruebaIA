<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSecretariaRequest;
use App\Http\Requests\UpdateSecretariaRequest;
use App\Repositories\SecretariaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SecretariaController extends AppBaseController
{
    /** @var  SecretariaRepository */
    private $secretariaRepository;

    public function __construct(SecretariaRepository $secretariaRepo)
    {
        $this->secretariaRepository = $secretariaRepo;
    }

    /**
     * Display a listing of the Secretaria.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->secretariaRepository->pushCriteria(new RequestCriteria($request));
        $secretarias = $this->secretariaRepository->all();

        return view('secretarias.index')
            ->with('secretarias', $secretarias);
    }

    /**
     * Show the form for creating a new Secretaria.
     *
     * @return Response
     */
    public function create()
    {
        return view('secretarias.create');
    }

    /**
     * Store a newly created Secretaria in storage.
     *
     * @param CreateSecretariaRequest $request
     *
     * @return Response
     */
    public function store(CreateSecretariaRequest $request)
    {
        $input = $request->all();

        $secretaria = $this->secretariaRepository->create($input);

        Flash::success('Secretaria saved successfully.');

        return redirect(route('secretarias.index'));
    }

    /**
     * Display the specified Secretaria.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $secretaria = $this->secretariaRepository->findWithoutFail($id);

        if (empty($secretaria)) {
            Flash::error('Secretaria not found');

            return redirect(route('secretarias.index'));
        }

        return view('secretarias.show')->with('secretaria', $secretaria);
    }

    /**
     * Show the form for editing the specified Secretaria.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $secretaria = $this->secretariaRepository->findWithoutFail($id);

        if (empty($secretaria)) {
            Flash::error('Secretaria not found');

            return redirect(route('secretarias.index'));
        }

        return view('secretarias.edit')->with('secretaria', $secretaria);
    }

    /**
     * Update the specified Secretaria in storage.
     *
     * @param  int              $id
     * @param UpdateSecretariaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSecretariaRequest $request)
    {
        $secretaria = $this->secretariaRepository->findWithoutFail($id);

        if (empty($secretaria)) {
            Flash::error('Secretaria not found');

            return redirect(route('secretarias.index'));
        }

        $secretaria = $this->secretariaRepository->update($request->all(), $id);

        Flash::success('Secretaria updated successfully.');

        return redirect(route('secretarias.index'));
    }

    /**
     * Remove the specified Secretaria from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $secretaria = $this->secretariaRepository->findWithoutFail($id);

        if (empty($secretaria)) {
            Flash::error('Secretaria not found');

            return redirect(route('secretarias.index'));
        }

        $this->secretariaRepository->delete($id);

        Flash::success('Secretaria deleted successfully.');

        return redirect(route('secretarias.index'));
    }
}
