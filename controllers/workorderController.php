<?php
class workorderController extends controller
{
	public function __construct()
	{

		$u = new Users();
		if ($u->isLogged() == false) {
			header("Location: " . BASE_URL . "login");
			exit;
		}
	}

	public function index()
	{
		$data = array();
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$offset =  0;

		$data['p'] = 1;
		if (isset($_GET['p']) && !empty($_GET['p'])) {
			$data['p'] = intval($_GET['p']);
			if ($data['p'] == 0) {
				$data['p'] = 1;
			}
		}

		$offset = (15 * ($data['p'] - 1));

		$data['order_list'] = $order->getList($offset, $u->getId());
		$data['order_count'] = $order->getCount();
		$data['p_count'] = ceil($data['order_count'] / 15);
		$data['counter'] = $data['order_count'];

		$this->loadTemplate('workorder', $data);
	}

	public function create()
	{
		$u = new Users();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$this->loadTemplate('workorder_create',);
	}

	public function store()
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$customer = addslashes($_POST['customer']);
		$brand = addslashes($_POST['brand']);
		$model = addslashes($_POST['model']);
		$year = addslashes($_POST['year']);
		$color = addslashes($_POST['color']);
		$license_plate = addslashes($_POST['license_plate']);
		$chassis = addslashes($_POST['chassis']);
		$transmission = addslashes($_POST['transmission']);
		$fuel = addslashes($_POST['fuel']);
		$power = addslashes($_POST['power']);
		$km  = addslashes($_POST['km']);
		$responsible_consultant = addslashes($_POST['responsible_consultant']);
		$responsible_mechanic = addslashes($_POST['responsible_mechanic']);
		$aditional_info = addslashes($_POST['aditional_info']);

		$order->create(
			$u->getId(),
			$customer,
			$brand,
			$model,
			$year,
			$color,
			$license_plate,
			$chassis,
			$transmission,
            $fuel,
            $power,
			$km,
			$responsible_consultant,
            $responsible_mechanic,
            $aditional_info
		);
		header("Location: " . BASE_URL . "workorder");
	}

	public function edit($id)
	{
		$data = array();
		$order = new WorkOrder();
		$u = new Users();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['order_info'] = $order->getInfo($id);
		$this->loadTemplate('workorder_edit', $data);
	}

	// public function update($id)
	// {
	// 	$u = new Users();
	// 	$trf3 = new Trf3();
	// 	$u->setLoggedUser();

	// 	if (!$u->hasPermission('trf3')) {
	// 		header("Location: " . BASE_URL . "home/unauthorized");
	// 	}

	// 	$ano_proposta = addslashes($_POST['ano_proposta']);
	// 	$numero = addslashes($_POST['numero']);
	// 	$ofcreq = addslashes($_POST['ofcreq']);
	// 	$proc_orig = addslashes($_POST['proc_orig']);
	// 	$requerido = addslashes($_POST['requerido']);
	// 	$requerentes = addslashes($_POST['requerentes']);
	// 	$advogado = addslashes($_POST['advogado']);
	// 	$data_conta_liq = addslashes($_POST['data_conta_liq']);
	// 	$vlr_solicitado = addslashes($_POST['vlr_solicitado']);
	// 	$vlr_inscritopr = addslashes($_POST['vlr_inscritopr']);
	// 	$req_bloqueada = addslashes($_POST['req_bloqueada']);
	// 	$situ_requisic = addslashes($_POST['situ_requisic']);
	// 	$natureza = addslashes($_POST['natureza']);
	// 	$cpf = addslashes($_POST['cpf']);
	// 	$assunto = addslashes($_POST['assunto']);
	// 	$status = addslashes($_POST['status']);
	// 	$historico = addslashes($_POST['historico']);
	// 	$tel = addslashes($_POST['tel']);
	// 	$cel = addslashes($_POST['cel']);
	// 	$tel_fixo = addslashes($_POST['tel_fixo']);
	// 	$email = addslashes($_POST['email']);
	// 	$endereco = addslashes($_POST['endereco']);

	// 	if (!empty($_POST['user_id'])) {
	// 		$user_id = addslashes($_POST['user_id']);
	// 	} else {
	// 		$user_id = 'empty';
	// 	}

	// 	$trf3->update(
	// 		$id,
	// 		$ano_proposta,
	// 		$numero,
	// 		$ofcreq,
	// 		$proc_orig,
	// 		$requerido,
	// 		$requerentes,
	// 		$advogado,
	// 		$data_conta_liq,
	// 		$vlr_solicitado,
	// 		$vlr_inscritopr,
	// 		$req_bloqueada,
	// 		$situ_requisic,
	// 		$natureza,
	// 		$cpf,
	// 		$assunto,
	// 		$status,
	// 		$historico,
	// 		$tel,
	// 		$cel,
	// 		$tel_fixo,
	// 		$email,
	// 		$endereco,
	// 		$user_id
	// 	);
	// 	header("Location: " . BASE_URL . "trf3");
	// }

	// public function show($id)
	// {
	// 	$data = array();
	// 	$u = new Users();
	// 	$trf3 = new Trf3();
	// 	$u->setLoggedUser();

	// 	if (!$u->hasPermission('trf3')) {
	// 		header("Location: " . BASE_URL . "home/unauthorized");
	// 	}

	// 	$data['trf3_info'] = $trf3->getInfo($id);
	// 	$this->loadTemplate('trf3_show', $data);
	// }

	public function search()
	{
		$data = array();
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('trf3')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$search = addslashes($_POST['search']);

		$data['list_search'] = $order->getSearch($search);
		$this->loadTemplate("workorder_search", $data);
	}

	// public function destroy($id)
	// {
	// 	$u = new Users();
	// 	$trf3 = new Trf3();
	// 	$u->setLoggedUser();

	// 	if (!$u->hasPermission('trf3')) {
	// 		header("Location: " . BASE_URL . "home/unauthorized");
	// 	}

	// 	$trf3->destroy($id);
	// 	header("Location: " . BASE_URL . "trf3");
	// }

	// public function settings_edit() {
	// 	$u = new Users();
	// 	$trf3 = new Trf3();
	// 	$u->setLoggedUser();

	// 	if (!$u->hasPermission('trf3')) {
	// 		header("Location: " . BASE_URL . "home/unauthorized");
	// 	}

	// 	$q1 = '1';
	// 	$q2 = '10';
	// 	$q3 = '11';
	// 	$q4 = '13';
	// 	$q5 = '14';

	// 	$trf3->settingsEdit($q1, $q2, $q3, $q4, $q5);
	// 	header("Location: " . BASE_URL . "users/settings_success");
	// }

}
