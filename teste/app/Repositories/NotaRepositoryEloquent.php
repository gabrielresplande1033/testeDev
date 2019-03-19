<?php

namespace App\Repositories;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\NotaRepository;
use App\Entities\Nota;
use App\Validators\NotaValidator;

/**
 * Class NotaRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class NotaRepositoryEloquent extends BaseRepository implements NotaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Nota::class;
    }



    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function retornaNotaComValorTotal()
    {
        $resultado = $this->scopeQuery(function ($query) {
            return $query
                ->selectRaw("nota.id, nota.numero_nota, cliente.nome_cliente, nota.valor_total_nota as valor")
                ->join("cliente", "cliente.id", "=", "nota.cliente_id");
        })->all();

        return $resultado;
    }

    public function relatorio($request)
    {
        $query = (new Nota())->newQuery();

        if (isset($request->dataInicial)) {
            $dataInicial = Carbon::createFromFormat('d/m/Y', $request->dataInicial);
            $dataInicial = $dataInicial->format('Y-m-d');
            $query->whereDate('created_at', '>=', $dataInicial);
        }

        if (isset($request->dataFinal)) {
            $dataFinal = Carbon::createFromFormat('d/m/Y', $request->dataFinal);
            $dataFinal = $dataFinal->format('Y-m-d');
            $query->whereDate('created_at', '<=', $dataFinal);
        }

        if (isset($request->valor_total_nota)) {
            $query->where('valor_total_nota', '>=', $request->valor_total_nota);
        }

        if (isset($request->cliente_id)) {
            $query->where('cliente_id', '=', $request->cliente_id);
        }

        $query->groupBy('nota.id');

        return $query->get();
    }

}
