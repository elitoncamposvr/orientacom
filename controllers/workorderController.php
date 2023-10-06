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

		$data['visual_exterior_status'] = $order->visualExteriorStatus($id);
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

	public function visualexterior_create($id){
		$u = new Users();
        $u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['workorder_id'] = $id;
		$this->loadTemplate('workorder_visualexterior_create', $data);
	}

	public function visualexterior_store($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$front_hood = addslashes($_POST['front_hood']);
		$front_hood_obs = addslashes($_POST['front_hood_obs']);
		$rearview_mirror_right = addslashes($_POST['rearview_mirror_right']);
		$rearview_mirror_right_obs = addslashes($_POST['rearview_mirror_right_obs']);
		$rearview_mirror_left = addslashes($_POST['rearview_mirror_left']);
		$rearview_mirror_left_obs = addslashes($_POST['rearview_mirror_left_obs']);
		$front_headlight_right = addslashes($_POST['front_headlight_right']);
		$front_headlight_right_obs = addslashes($_POST['front_headlight_right_obs']);
		$front_headlight_left = addslashes($_POST['front_headlight_left']);
		$front_headlight_left_obs = addslashes($_POST['front_headlight_left_obs']);
		$front_bumper = addslashes($_POST['front_bumper']);
		$front_bumper_obs = addslashes($_POST['front_bumper_obs']);
		$front_fenders_right = addslashes($_POST['front_fenders_right']);
		$front_fenders_right_obs = addslashes($_POST['front_fenders_right_obs']);
		$front_fenders_left = addslashes($_POST['front_fenders_left']);
		$front_fenders_left_obs = addslashes($_POST['front_fenders_left_obs']);
		$front_window_right = addslashes($_POST['front_window_right']);
		$front_window_right_obs = addslashes($_POST['front_window_right_obs']);
		$front_window_left = addslashes($_POST['front_window_left']);
		$front_window_left_obs = addslashes($_POST['front_window_left_obs']);
		$front_door_right = addslashes($_POST['front_door_right']);
		$front_door_right_obs = addslashes($_POST['front_door_right_obs']);
		$front_door_left = addslashes($_POST['front_door_left']);
		$front_door_left_obs = addslashes($_POST['front_door_left_obs']);
		$rear_window_right = addslashes($_POST['rear_window_right']);
		$rear_window_right_obs = addslashes($_POST['rear_window_right_obs']); 
		$rear_window_left = addslashes($_POST['rear_window_left']);
		$rear_window_left_obs = addslashes($_POST['rear_window_left_obs']); 
		$rear_fenders_right = addslashes($_POST['rear_fenders_right']);
		$rear_fenders_right_obs = addslashes($_POST['rear_fenders_right_obs']); 
		$rear_fenders_left = addslashes($_POST['rear_fenders_left']);
		$rear_fenders_left_obs = addslashes($_POST['rear_fenders_left_obs']); 
		$rear_trunk_lid = addslashes($_POST['rear_trunk_lid']);
		$rear_trunk_lid_obs = addslashes($_POST['rear_trunk_lid_obs']);
		$upper_trunk_lid = addslashes($_POST['upper_trunk_lid']); 
		$upper_trunk_lid_obs = addslashes($_POST['upper_trunk_lid_obs']);
		$taillight_right = addslashes($_POST['taillight_right']);
		$taillight_right_obs = addslashes($_POST['taillight_right_obs']);
		$taillight_left = addslashes($_POST['taillight_left']); 
		$taillight_left_obs = addslashes($_POST['taillight_left_obs']); 
		$rear_window = addslashes($_POST['rear_window']);
		$rear_window_obs = addslashes($_POST['rear_window_obs']);
		$front_windshield = addslashes($_POST['front_windshield']);
		$front_windshield_obs = addslashes($_POST['front_windshield_obs']);
		$rear_bumper = addslashes($_POST['rear_bumper']);
		$rear_bumper_obs = addslashes($_POST['rear_bumper_obs']);
		$rear_door_right = addslashes($_POST['rear_door_right']);
		$rear_door_right_obs = addslashes($_POST['rear_door_right_obs']);
		$rear_door_left = addslashes($_POST['rear_door_left']);
		$rear_door_left_obs = addslashes($_POST['rear_door_left_obs']);
		$roof = addslashes($_POST['roof']);
		$roof_obs = addslashes($_POST['roof_obs']);
		$convertible_top = addslashes($_POST['convertible_top']);
		$convertible_top_obs = addslashes($_POST['convertible_top_obs']);
		$protective_film = addslashes($_POST['protective_film']);
		$protective_film_obs = addslashes($_POST['protective_film_obs']); 
		$airfoil = addslashes($_POST['airfoil']);
		$airfoil_obs = addslashes($_POST['airfoil_obs']);
		$accident_warning_sings = addslashes($_POST['accident_warning_sings']);
		$accident_warning_sings_obs = addslashes($_POST['accident_warning_sings_obs']); 
		$observations = addslashes($_POST['observations']); 


		$order->visualExteriorCreate(
			$id,
			$front_hood,
			$front_hood_obs,
			$rearview_mirror_right,
			$rearview_mirror_right_obs,
			$rearview_mirror_left,
			$rearview_mirror_left_obs,
			$front_headlight_right,
			$front_headlight_right_obs,
			$front_headlight_left,
			$front_headlight_left_obs,
			$front_bumper,
			$front_bumper_obs,
			$front_fenders_right,
			$front_fenders_right_obs,
			$front_fenders_left,
			$front_fenders_left_obs,
			$front_window_right,
			$front_window_right_obs,
			$front_window_left,
			$front_window_left_obs,
			$front_door_right,
			$front_door_right_obs,
			$front_door_left,
			$front_door_left_obs,
			$rear_window_right,
			$rear_window_right_obs,
			$rear_window_left,
			$rear_window_left_obs,
			$rear_fenders_right,
			$rear_fenders_right_obs,
			$rear_fenders_left,
			$rear_fenders_left_obs,
			$rear_trunk_lid,
			$rear_trunk_lid_obs,
			$upper_trunk_lid,
			$upper_trunk_lid_obs,
			$taillight_right,
			$taillight_right_obs,
			$taillight_left,
			$taillight_left_obs,
			$rear_window,
			$rear_window_obs,
			$front_windshield,
			$front_windshield_obs,
			$rear_bumper,
			$rear_bumper_obs,
			$rear_door_right,
			$rear_door_right_obs,
			$rear_door_left,
			$rear_door_left_obs,
			$roof,
			$roof_obs,
			$convertible_top,
			$convertible_top_obs,
			$protective_film,
			$protective_film_obs,
			$airfoil,
			$airfoil_obs,
			$accident_warning_sings,
			$accident_warning_sings_obs,
			$observations


		);
		header("Location: " . BASE_URL . "workorder/show/".$id);
	}

	public function visualexterior_edit($id){
		$u = new Users();
		$order = new WorkOrder();
        $u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['visualexterior_info'] = $order->visualExteriorInfo($id);
		$this->loadTemplate('workorder_visualexterior_edit', $data);
	}

	public function visualexterior_update($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$workorder_id = addslashes($_POST['workorder_id']);
		$front_hood = addslashes($_POST['front_hood']);
		$front_hood_obs = addslashes($_POST['front_hood_obs']);
		$rearview_mirror_right = addslashes($_POST['rearview_mirror_right']);
		$rearview_mirror_right_obs = addslashes($_POST['rearview_mirror_right_obs']);
		$rearview_mirror_left = addslashes($_POST['rearview_mirror_left']);
		$rearview_mirror_left_obs = addslashes($_POST['rearview_mirror_left_obs']);
		$front_headlight_right = addslashes($_POST['front_headlight_right']);
		$front_headlight_right_obs = addslashes($_POST['front_headlight_right_obs']);
		$front_headlight_left = addslashes($_POST['front_headlight_left']);
		$front_headlight_left_obs = addslashes($_POST['front_headlight_left_obs']);
		$front_bumper = addslashes($_POST['front_bumper']);
		$front_bumper_obs = addslashes($_POST['front_bumper_obs']);
		$front_fenders_right = addslashes($_POST['front_fenders_right']);
		$front_fenders_right_obs = addslashes($_POST['front_fenders_right_obs']);
		$front_fenders_left = addslashes($_POST['front_fenders_left']);
		$front_fenders_left_obs = addslashes($_POST['front_fenders_left_obs']);
		$front_window_right = addslashes($_POST['front_window_right']);
		$front_window_right_obs = addslashes($_POST['front_window_right_obs']);
		$front_window_left = addslashes($_POST['front_window_left']);
		$front_window_left_obs = addslashes($_POST['front_window_left_obs']);
		$front_door_right = addslashes($_POST['front_door_right']);
		$front_door_right_obs = addslashes($_POST['front_door_right_obs']);
		$front_door_left = addslashes($_POST['front_door_left']);
		$front_door_left_obs = addslashes($_POST['front_door_left_obs']);
		$rear_window_right = addslashes($_POST['rear_window_right']);
		$rear_window_right_obs = addslashes($_POST['rear_window_right_obs']); 
		$rear_window_left = addslashes($_POST['rear_window_left']);
		$rear_window_left_obs = addslashes($_POST['rear_window_left_obs']); 
		$rear_fenders_right = addslashes($_POST['rear_fenders_right']);
		$rear_fenders_right_obs = addslashes($_POST['rear_fenders_right_obs']); 
		$rear_fenders_left = addslashes($_POST['rear_fenders_left']);
		$rear_fenders_left_obs = addslashes($_POST['rear_fenders_left_obs']); 
		$rear_trunk_lid = addslashes($_POST['rear_trunk_lid']);
		$rear_trunk_lid_obs = addslashes($_POST['rear_trunk_lid_obs']);
		$upper_trunk_lid = addslashes($_POST['upper_trunk_lid']); 
		$upper_trunk_lid_obs = addslashes($_POST['upper_trunk_lid_obs']);
		$taillight_right = addslashes($_POST['taillight_right']);
		$taillight_right_obs = addslashes($_POST['taillight_right_obs']);
		$taillight_left = addslashes($_POST['taillight_left']); 
		$taillight_left_obs = addslashes($_POST['taillight_left_obs']); 
		$rear_window = addslashes($_POST['rear_window']);
		$rear_window_obs = addslashes($_POST['rear_window_obs']);
		$front_windshield = addslashes($_POST['front_windshield']);
		$front_windshield_obs = addslashes($_POST['front_windshield_obs']);
		$rear_bumper = addslashes($_POST['rear_bumper']);
		$rear_bumper_obs = addslashes($_POST['rear_bumper_obs']);
		$rear_door_right = addslashes($_POST['rear_door_right']);
		$rear_door_right_obs = addslashes($_POST['rear_door_right_obs']);
		$rear_door_left = addslashes($_POST['rear_door_left']);
		$rear_door_left_obs = addslashes($_POST['rear_door_left_obs']);
		$roof = addslashes($_POST['roof']);
		$roof_obs = addslashes($_POST['roof_obs']);
		$convertible_top = addslashes($_POST['convertible_top']);
		$convertible_top_obs = addslashes($_POST['convertible_top_obs']);
		$protective_film = addslashes($_POST['protective_film']);
		$protective_film_obs = addslashes($_POST['protective_film_obs']); 
		$airfoil = addslashes($_POST['airfoil']);
		$airfoil_obs = addslashes($_POST['airfoil_obs']);
		$accident_warning_sings = addslashes($_POST['accident_warning_sings']);
		$accident_warning_sings_obs = addslashes($_POST['accident_warning_sings_obs']); 
		$observations = addslashes($_POST['observations']); 


		$order->visualExteriorUpdate(
			$id,
			$front_hood,
			$front_hood_obs,
			$rearview_mirror_right,
			$rearview_mirror_right_obs,
			$rearview_mirror_left,
			$rearview_mirror_left_obs,
			$front_headlight_right,
			$front_headlight_right_obs,
			$front_headlight_left,
			$front_headlight_left_obs,
			$front_bumper,
			$front_bumper_obs,
			$front_fenders_right,
			$front_fenders_right_obs,
			$front_fenders_left,
			$front_fenders_left_obs,
			$front_window_right,
			$front_window_right_obs,
			$front_window_left,
			$front_window_left_obs,
			$front_door_right,
			$front_door_right_obs,
			$front_door_left,
			$front_door_left_obs,
			$rear_window_right,
			$rear_window_right_obs,
			$rear_window_left,
			$rear_window_left_obs,
			$rear_fenders_right,
			$rear_fenders_right_obs,
			$rear_fenders_left,
			$rear_fenders_left_obs,
			$rear_trunk_lid,
			$rear_trunk_lid_obs,
			$upper_trunk_lid,
			$upper_trunk_lid_obs,
			$taillight_right,
			$taillight_right_obs,
			$taillight_left,
			$taillight_left_obs,
			$rear_window,
			$rear_window_obs,
			$front_windshield,
			$front_windshield_obs,
			$rear_bumper,
			$rear_bumper_obs,
			$rear_door_right,
			$rear_door_right_obs,
			$rear_door_left,
			$rear_door_left_obs,
			$roof,
			$roof_obs,
			$convertible_top,
			$convertible_top_obs,
			$protective_film,
			$protective_film_obs,
			$airfoil,
			$airfoil_obs,
			$accident_warning_sings,
			$accident_warning_sings_obs,
			$observations


		);
		header("Location: " . BASE_URL . "workorder/show/".$workorder_id);
	}

}
