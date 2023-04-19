<?php

namespace [[appns]]Http\Controllers;

use Illuminate\Http\Request;
use [[appns]]Http\Requests;
use [[appns]]Http\Controllers\Controller;
use [[appns]][[model_uc]];
use DB;

class [[controller_name]]Controller extends Controller
{

  public function __construct()
  {
  }

  public function index(Request $request)
	{
	    return view('[[view_folder]].index', []);
	}

	public function create(Request $request)
	{
	    return view('[[view_folder]].add', [
          []
      ]);
	}

	public function edit(Request $request, $id)
	{
		$[[model_singular]] = [[model_uc]]::findOrFail($id);
	    return view('[[view_folder]].add', [
	        'model' => $[[model_singular]]
	    ]);
	}

	public function show(Request $request, $id)
	{
		$[[model_singular]] = [[model_uc]]::findOrFail($id);
	    return view('[[view_folder]].show', [
	        'model' => $[[model_singular]]
	    ]);
	}

	public function grid(Request $request)
	{
		$len = $_GET['length'];
		$start = $_GET['start'];

		$select = "SELECT *,1,2 ";
		$presql = " FROM [[prefix]][[tablename]] a ";
		if($_GET['search']['value']) {
			$presql .= " WHERE [[first_column_nonid]] LIKE '%".$_GET['search']['value']."%' ";
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
		$[[model_singular]] = null;
		if($request->id > 0) {
    $[[model_singular]] = [[model_uc]]::findOrFail($request->id);
    }	else {
		$[[model_singular]] = new [[model_uc]];
		}
    [[foreach:columns]]
		[[if:i.name=='id']]
    $[[model_singular]]->[[i.name]] = $request->[[i.name]]?:0;
		[[endif]]
		[[if:i.name!='id']]
    $[[model_singular]]->[[i.name]] = $request->[[i.name]];
		[[endif]]
    [[endforeach]]
    $[[model_singular]]->save();

    return redirect('/[[route_path]]');
	}

	public function store(Request $request)
	{
		return $this->update($request);
	}

	public function destroy(Request $request, $id) {
		$[[model_singular]] = [[model_uc]]::findOrFail($id);
		$[[model_singular]]->delete();
		return "OK";
	}

}
