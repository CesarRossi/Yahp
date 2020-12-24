<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	private $prods;
	
	public function index()
    {
		return view('container');
    }
	
	

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('form',array('inserido'=>false, 'insercao'=>false, 'erro'=>null));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		if(strpos('A,B,C',substr($request->prodLoc,0,1)) === false ){
			$erro = "Corredor ".substr($request->prodLoc,0,1)." não encontrado, são permitidos apenas os corredores A, B e C";
			return view('form', array('inserido'=>false, 'insercao'=>true, 'erro'=>$erro));
		}elseif(strpos('1,2,3,4', substr($request->prodLoc,1,1)) === false){
			$erro = "Prateleira ".substr($request->prodLoc,1,1)." não encontrada, são permitidas apenas as prateleiras 1, 2, 3 e 4";
			return view('form', array('inserido'=>false, 'insercao'=>true, 'erro'=>$erro));
		}elseif(strpos('D,E', substr($request->prodLoc,2,1)) === false){
			$erro = "Lado ".substr($request->prodLoc,2,1)." não encontrado, são permitidos apenas os lados 'D' e 'E'";
			return view('form', array('inserido'=>false, 'insercao'=>true, 'erro'=>$erro));
		}
		$sql = "Insert into produtos(descricao, localizacao) VALUES (?,?)";
		$sql2 = "Insert into produtos(descricao, localizacao) VALUES ('".$request->prodDesc."','".$request->prodLoc."')";
		$sqlLog = "Insert into log(evento, comando) values (?,?)";
        \DB::insert($sqlLog, ['Insert', $sql2]);
		$inserido = \DB::insert($sql, [$request->prodDesc, $request->prodLoc]);
		if($inserido){
			return view('form', array('inserido'=>true, 'insercao'=>true, 'erro'=>null));
		}else{
			return view('form', array('inserido'=>false, 'insercao'=>true, 'erro'=>null));
		}
		
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prods = \DB::select('Select id, descricao, localizacao from produtos order by 1',[1]);
		return view('grid', compact('prods'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
