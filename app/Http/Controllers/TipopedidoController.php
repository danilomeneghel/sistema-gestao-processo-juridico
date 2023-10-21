<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Tipopedido;
use DB;

class TipopedidoController extends Controller
{

  public function __construct()
  {
  }

  public function index(Request $request)
	{
	    return view('tipopedidos.index', []);
	}

	public function create(Request $request)
	{
	    return view('tipopedidos.add', [
          []
      ]);
	}

	public function edit(Request $request, $id)
	{
		$tipopedido = Tipopedido::findOrFail($id);
	    return view('tipopedidos.add', [
	        'model' => $tipopedido	    ]);
	}

	public function show(Request $request, $id)
	{
		$tipopedido = Tipopedido::findOrFail($id);
	    return view('tipopedidos.show', [
	        'model' => $tipopedido	    ]);
	}

	public function grid(Request $request)
	{
		$len = $_GET['length'];
		$start = $_GET['start'];

		$select = "SELECT *,1,2 ";
		$presql = " FROM tipopedidos a ";
		if($_GET['search']['value']) {
			$presql .= " WHERE nome LIKE '%".$_GET['search']['value']."%' ";
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
		$tipopedido = null;
		if($request->id > 0) {
      			$tipopedido = Tipopedido::findOrFail($request->id);
    		} else {
	    		$tipopedido = new Tipopedido;
		}
		$tipopedido->nome = $request->nome;
		$tipopedido->ativo = $request->ativo;
		$tipopedido->save();

		return redirect('/tipopedidos');
	}

	public function store(Request $request)
	{
		return $this->update($request);
	}

	public function destroy(Request $request, $id) {
		$tipopedido = Tipopedido::findOrFail($id);
		$tipopedido->delete();
		return "OK";
	}

}
