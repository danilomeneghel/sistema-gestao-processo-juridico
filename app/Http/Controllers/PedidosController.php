<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pedido;
use DB;

class PedidosController extends Controller
{

  public function __construct()
  {
  }

  public function index(Request $request)
	{
	    return view('pedidos.index', []);
	}

	public function create(Request $request)
	{
	    return view('pedidos.add', [
          []
      ]);
	}

	public function edit(Request $request, $id)
	{
		$pedido = Pedido::findOrFail($id);
	    return view('pedidos.add', [
	        'model' => $pedido	    ]);
	}

	public function show(Request $request, $id)
	{
		$pedido = Pedido::findOrFail($id);
	    return view('pedidos.show', [
	        'model' => $pedido	    ]);
	}

	public function grid(Request $request)
	{
		$len = $_GET['length'];
		$start = $_GET['start'];

		$select = "SELECT *,1,2 ";
		$presql = " FROM pedidos a ";
		if($_GET['search']['value']) {
			$presql .= " WHERE tipo_pedido LIKE '%".$_GET['search']['value']."%' ";
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
		$pedido = null;
		if($request->id > 0) {
      $pedido = Pedido::findOrFail($request->id);
    }	else {
	    $pedido = new Pedido;
		}
    $pedido->tipo_pedido = $request->tipo_pedido;
    $pedido->valor_risco_provavel = $request->valor_risco_provavel;
    $pedido->status = $request->status;
    $pedido->data_edicao = $request->data_edicao;
    $pedido->save();

    return redirect('/pedidos');
	}

	public function store(Request $request)
	{
		return $this->update($request);
	}

	public function destroy(Request $request, $id) {
		$pedido = Pedido::findOrFail($id);
		$pedido->delete();
		return "OK";
	}

}
