<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Processo;
use App\Pedido;
use App\Cliente;
use DB;

class ProcessosController extends Controller
{

  public function __construct()
  {
  }

  public function index(Request $request)
	{
	    return view('processos.index', []);
	}

	public function create(Request $request)
	{
      $pedidos = Pedido::all();
      $clientes = Cliente::all();
	    return view('processos.add', ['pedidos' => $pedidos, 'clientes' => $clientes, 'selecionaCliente' => 1]);
	}

	public function edit(Request $request, $id)
	{
		  $processo = Processo::findOrFail($id);
      $pedidos = Pedido::all();
      $clientes = Cliente::all();
	    return view('processos.add', ['model' => $processo, 'pedidos' => $pedidos, 'clientes' => $clientes, 'selecionaCliente' => $processo->cliente->id]);
	}

	public function show(Request $request, $id)
	{
		  $processo = Processo::findOrFail($id);
	    return view('processos.show', ['model' => $processo]);
	}

	public function grid(Request $request)
	{
		$len = $_GET['length'];
		$start = $_GET['start'];

		$select = "SELECT a.id, a.nro_processo, a.data_distribuicao, a.valor_causa, a.vara, a.cidade, a.uf, a.data_criacao,1,2 ";
		$presql = " FROM processos a ";
		if($_GET['search']['value']) {
			$presql .= " WHERE nro_processo LIKE '%".$_GET['search']['value']."%' ";
		}

		$presql .= "  ";

		$sql = $select.$presql." LIMIT ".$start.",".$len;

		$qcount = DB::select("SELECT COUNT(a.id) c".$presql);
		$count = $qcount[0]->c;
		$results = DB::select($sql);
		$ret = [];

		foreach ($results as $row) {
			$r = [];
			foreach ($row as $value) {
				$r[] = $value;
			}
			$ret[] = $r;
		}

		$ret['data'] = $ret;
		$ret['recordsTotal'] = $count;
		$ret['iTotalDisplayRecords'] = $count;

		$ret['recordsFiltered'] = count($ret);
		$ret['draw'] = $_GET['draw'];

		echo json_encode($ret);
	}

	public function update(Request $request) {
		$processo = null;
		if($request->id > 0) {
      $processo = Processo::findOrFail($request->id);
    }	else {
	    $processo = new Processo;
		}
    $processo->id_cliente = $request->id_cliente;
    $processo->nro_processo = $request->nro_processo;
    $processo->data_distribuicao = $request->data_distribuicao;
    $processo->valor_causa = $request->valor_causa;
    $processo->vara = $request->vara;
    $processo->cidade = $request->cidade;
    $processo->uf = $request->uf;
    $processo->data_edicao = $request->data_edicao;
    $processo->save();

    $pedido = Pedido::find($request->pedido);
    $processo->pedido()->attach($pedido);

    return redirect('/processos');
	}

	public function store(Request $request)
	{
		return $this->update($request);
	}

	public function destroy(Request $request, $id) {
		$processo = Processo::findOrFail($id);
		$processo->delete();
		return "OK";
	}

}
