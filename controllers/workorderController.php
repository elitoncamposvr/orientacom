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

	public function update($id)
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

		$order->update(
			$id,
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

	public function show($id)
	{
		$data = array();
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['order_info'] = $order->getInfo($id);
		$this->loadTemplate('workorder_show', $data);
	}

	public function search()
	{
		$data = array();
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$search = addslashes($_POST['search']);

		$data['list_search'] = $order->getSearch($search);
		$this->loadTemplate("workorder_search", $data);
	}

	public function destroy($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$order->destroy($id);
		header("Location: " . BASE_URL . "workorder");
	}

}
