<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cliente;
use DB;

class ClientesController extends Controller
{

  public function __construct()
  {
  }

  public function index(Request $request)
	{
	    return view('clientes.index', []);
	}

	public function create(Request $request)
	{
	    return view('clientes.add', [
          []
      ]);
	}

	public function edit(Request $request, $id)
	{
		$cliente = Cliente::findOrFail($id);
	    return view('clientes.add', [
	        'model' => $cliente	    ]);
	}

	public function show(Request $request, $id)
	{
		$cliente = Cliente::findOrFail($id);
	    return view('clientes.show', [
	        'model' => $cliente	    ]);
	}

	public function grid(Request $request)
	{
		$len = $_GET['length'];
		$start = $_GET['start'];

		$select = "SELECT *,1,2 ";
		$presql = " FROM clientes a ";
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
		$cliente = null;
		if($request->id > 0) {
      $cliente = Cliente::findOrFail($request->id);
    }	else {
		  $cliente = new Cliente;
		}
    $cliente->nome = $request->nome;
    $cliente->email = $request->email;
    $cliente->data_edicao = $request->data_edicao;
    $cliente->save();

    return redirect('/clientes');
	}

	public function store(Request $request)
	{
		return $this->update($request);
	}

	public function destroy(Request $request, $id) {
		$cliente = Cliente::findOrFail($id);
		$cliente->delete();
		return "OK";
	}

}
