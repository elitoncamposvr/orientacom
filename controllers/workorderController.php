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

	public function visualexterior_create($id)
	{
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
		header("Location: " . BASE_URL . "workorder/show/" . $id);
	}

	public function visualexterior_edit($id)
	{
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
		header("Location: " . BASE_URL . "workorder/show/" . $workorder_id);
	}

	public function tires_create($id)
	{
		$u = new Users();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['workorder_id'] = $id;
		$this->loadTemplate('workorder_tires_create', $data);
	}

	public function tires_store($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$front_right = addslashes($_POST['front_right']);
		$front_right_situation = addslashes($_POST['front_right_situation']);
		$front_right_twi = addslashes($_POST['front_right_twi']);
		$front_right_dot = addslashes($_POST['front_right_dot']);
		$front_left = addslashes($_POST['front_left']);
		$front_left_situation = addslashes($_POST['front_left_situation']);
		$front_left_twi = addslashes($_POST['front_left_twi']);
		$front_left_dot = addslashes($_POST['front_left_dot']);
		$rear_right = addslashes($_POST['rear_right']);
		$rear_right_situation = addslashes($_POST['rear_right_situation']);
		$rear_right_twi = addslashes($_POST['rear_right_twi']);
		$rear_right_dot = addslashes($_POST['rear_right_dot']);
		$rear_left = addslashes($_POST['rear_left']);
		$rear_left_situation = addslashes($_POST['rear_left_situation']);
		$rear_left_twi = addslashes($_POST['rear_left_twi']);
		$rear_left_dot = addslashes($_POST['rear_left_dot']);
		$observations = addslashes($_POST['observations']);

		$order->tiresCreate(
			$id,
			$front_right,
			$front_right_situation,
			$front_right_twi,
			$front_right_dot,
			$front_left,
			$front_left_situation,
			$front_left_twi,
			$front_left_dot,
			$rear_right,
			$rear_right_situation,
			$rear_right_twi,
			$rear_right_dot,
			$rear_left,
			$rear_left_situation,
			$rear_left_twi,
			$rear_left_dot,
			$observations
		);
		header("Location: " . BASE_URL . "workorder/show/" . $id);
	}

	public function tires_edit($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['tires_info'] = $order->tiresInfo($id);
		$this->loadTemplate('workorder_tires_edit', $data);
	}

	public function tires_update($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$workorder_id = addslashes($_POST['workorder_id']);
		$front_right = addslashes($_POST['front_right']);
		$front_right_situation = addslashes($_POST['front_right_situation']);
		$front_right_twi = addslashes($_POST['front_right_twi']);
		$front_right_dot = addslashes($_POST['front_right_dot']);
		$front_left = addslashes($_POST['front_left']);
		$front_left_situation = addslashes($_POST['front_left_situation']);
		$front_left_twi = addslashes($_POST['front_left_twi']);
		$front_left_dot = addslashes($_POST['front_left_dot']);
		$rear_right = addslashes($_POST['rear_right']);
		$rear_right_situation = addslashes($_POST['rear_right_situation']);
		$rear_right_twi = addslashes($_POST['rear_right_twi']);
		$rear_right_dot = addslashes($_POST['rear_right_dot']);
		$rear_left = addslashes($_POST['rear_left']);
		$rear_left_situation = addslashes($_POST['rear_left_situation']);
		$rear_left_twi = addslashes($_POST['rear_left_twi']);
		$rear_left_dot = addslashes($_POST['rear_left_dot']);
		$observations = addslashes($_POST['observations']);

		$order->tiresUpdate(
			$id,
			$front_right,
			$front_right_situation,
			$front_right_twi,
			$front_right_dot,
			$front_left,
			$front_left_situation,
			$front_left_twi,
			$front_left_dot,
			$rear_right,
			$rear_right_situation,
			$rear_right_twi,
			$rear_right_dot,
			$rear_left,
			$rear_left_situation,
			$rear_left_twi,
			$rear_left_dot,
			$observations
		);
		header("Location: " . BASE_URL . "workorder/show/" . $workorder_id);
	}

	public function brakes_create($id)
	{
		$u = new Users();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['workorder_id'] = $id;
		$this->loadTemplate('workorder_brakes_create', $data);
	}

	public function brakes_store($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$oil_level = addslashes($_POST['oil_level']);
		$oil_level_obs = addslashes($_POST['oil_level_obs']);
		$hose_flexible = addslashes($_POST['hose_flexible']);
		$hose_flexible_obs = addslashes($_POST['hose_flexible_obs']);
		$brake_pads = addslashes($_POST['brake_pads']);
		$brake_pads_estimated = addslashes($_POST['brake_pads_estimated']);
		$brake_pads_obs = addslashes($_POST['brake_pads_obs']);
		$brake_discs = addslashes($_POST['brake_discs']);
		$brake_discs_estimated = addslashes($_POST['brake_discs_estimated']);
		$brake_discs_obs = addslashes($_POST['brake_discs_obs']);
		$brake_calipers = addslashes($_POST['brake_calipers']);
		$brake_calipers_obs = addslashes($_POST['brake_calipers_obs']);
		$cover_plates = addslashes($_POST['cover_plates']);
		$cover_plates_obs = addslashes($_POST['cover_plates_obs']);
		$pedal_condition = addslashes($_POST['pedal_condition']);
		$pedal_condition_obs = addslashes($_POST['pedal_condition_obs']);
		$observations = addslashes($_POST['observations']);

		$order->brakesCreate(
			$id,
			$oil_level,
			$oil_level_obs,
			$hose_flexible,
			$hose_flexible_obs,
			$brake_pads,
			$brake_pads_estimated,
			$brake_pads_obs,
			$brake_discs,
			$brake_discs_estimated,
			$brake_discs_obs,
			$brake_calipers,
			$brake_calipers_obs,
			$cover_plates,
			$cover_plates_obs,
			$pedal_condition,
			$pedal_condition_obs,
			$observations
		);
		header("Location: " . BASE_URL . "workorder/show/" . $id);
	}

	public function brakes_edit($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['brakes_info'] = $order->brakesInfo($id);
		$this->loadTemplate('workorder_brakes_edit', $data);
	}

	public function brakes_update($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$workorder_id = addslashes($_POST['workorder_id']);
		$oil_level = addslashes($_POST['oil_level']);
		$oil_level_obs = addslashes($_POST['oil_level_obs']);
		$hose_flexible = addslashes($_POST['hose_flexible']);
		$hose_flexible_obs = addslashes($_POST['hose_flexible_obs']);
		$brake_pads = addslashes($_POST['brake_pads']);
		$brake_pads_estimated = addslashes($_POST['brake_pads_estimated']);
		$brake_pads_obs = addslashes($_POST['brake_pads_obs']);
		$brake_discs = addslashes($_POST['brake_discs']);
		$brake_discs_estimated = addslashes($_POST['brake_discs_estimated']);
		$brake_discs_obs = addslashes($_POST['brake_discs_obs']);
		$brake_calipers = addslashes($_POST['brake_calipers']);
		$brake_calipers_obs = addslashes($_POST['brake_calipers_obs']);
		$cover_plates = addslashes($_POST['cover_plates']);
		$cover_plates_obs = addslashes($_POST['cover_plates_obs']);
		$pedal_condition = addslashes($_POST['pedal_condition']);
		$pedal_condition_obs = addslashes($_POST['pedal_condition_obs']);
		$observations = addslashes($_POST['observations']);

		$order->brakesUpdate(
			$id,
			$oil_level,
			$oil_level_obs,
			$hose_flexible,
			$hose_flexible_obs,
			$brake_pads,
			$brake_pads_estimated,
			$brake_pads_obs,
			$brake_discs,
			$brake_discs_estimated,
			$brake_discs_obs,
			$brake_calipers,
			$brake_calipers_obs,
			$cover_plates,
			$cover_plates_obs,
			$pedal_condition,
			$pedal_condition_obs,
			$observations
		);
		header("Location: " . BASE_URL . "workorder/show/" . $workorder_id);
	}

	public function steeringsystem_create($id)
	{
		$u = new Users();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['workorder_id'] = $id;
		$this->loadTemplate('workorder_steering_system_create', $data);
	}

	public function steeringsystem_store($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$steering_system = addslashes($_POST['steering_system']);
		$steering_type = addslashes($_POST['steering_type']);
		$steering_system_obs = addslashes($_POST['steering_system_obs']);
		$oil_level = addslashes($_POST['oil_level']);
		$oil_level_obs = addslashes($_POST['oil_level_obs']);
		$hoses_fittings = addslashes($_POST['hoses_fittings']);
		$hoses_fittings_obs = addslashes($_POST['hoses_fittings_obs']);
		$observations = addslashes($_POST['observations']);

		$order->steeringSystemCreate(
			$id,
			$steering_system,
			$steering_type,
			$steering_system_obs,
			$oil_level,
			$oil_level_obs,
			$hoses_fittings,
			$hoses_fittings_obs,
			$observations
		);
		header("Location: " . BASE_URL . "workorder/show/" . $id);
	}

	public function steeringsystem_edit($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['steering_info'] = $order->steeringInfo($id);
		$this->loadTemplate('workorder_steering_system_edit', $data);
	}

	public function steeringsystem_update($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$workorder_id = addslashes($_POST['workorder_id']);
		$steering_system = addslashes($_POST['steering_system']);
		$steering_type = addslashes($_POST['steering_type']);
		$steering_system_obs = addslashes($_POST['steering_system_obs']);
		$oil_level = addslashes($_POST['oil_level']);
		$oil_level_obs = addslashes($_POST['oil_level_obs']);
		$hoses_fittings = addslashes($_POST['hoses_fittings']);
		$hoses_fittings_obs = addslashes($_POST['hoses_fittings_obs']);
		$observations = addslashes($_POST['observations']);

		$order->steeringSystemUpdate(
			$id,
			$steering_system,
			$steering_type,
			$steering_system_obs,
			$oil_level,
			$oil_level_obs,
			$hoses_fittings,
			$hoses_fittings_obs,
			$observations
		);
		header("Location: " . BASE_URL . "workorder/show/" . $workorder_id);
	}

	public function fuelsystem_create($id)
	{
		$u = new Users();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['workorder_id'] = $id;
		$this->loadTemplate('workorder_fuel_system_create', $data);
	}

	public function fuelsystem_store($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$pumps_connections = addslashes($_POST['pumps_connections']);
		$pumps_connections_obs = addslashes($_POST['pumps_connections_obs']);
		$tank_hoses = addslashes($_POST['tank_hoses']);
		$tank_hoses_obs = addslashes($_POST['tank_hoses_obs']);
		$observations = addslashes($_POST['observations']);

		$order->fuelSystemCreate(
			$id,
			$pumps_connections,
			$pumps_connections_obs,
			$tank_hoses,
			$tank_hoses_obs,
			$observations
		);
		header("Location: " . BASE_URL . "workorder/show/" . $id);
	}

	public function fuelsystem_edit($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['fuel_info'] = $order->fuelInfo($id);
		$this->loadTemplate('workorder_fuel_system_edit', $data);
	}

	public function fuelsystem_update($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$workorder_id = addslashes($_POST['workorder_id']);
		$pumps_connections = addslashes($_POST['pumps_connections']);
		$pumps_connections_obs = addslashes($_POST['pumps_connections_obs']);
		$tank_hoses = addslashes($_POST['tank_hoses']);
		$tank_hoses_obs = addslashes($_POST['tank_hoses_obs']);
		$observations = addslashes($_POST['observations']);

		$order->fuelSystemUpdate(
			$id,
			$pumps_connections,
			$pumps_connections_obs,
			$tank_hoses,
			$tank_hoses_obs,
			$observations
		);
		header("Location: " . BASE_URL . "workorder/show/" . $workorder_id);
	}

	public function engine_create($id)
	{
		$u = new Users();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['workorder_id'] = $id;
		$this->loadTemplate('workorder_engine_create', $data);
	}

	public function engine_store($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$straps = addslashes($_POST['straps']);
		$straps_obs = addslashes($_POST['straps_obs']);
		$oil_level = addslashes($_POST['oil_level']);
		$oil_level_obs = addslashes($_POST['oil_level_obs']);
		$cooling = addslashes($_POST['cooling']);
		$cooling_obs = addslashes($_POST['cooling_obs']);
		$tank_liquid_level = addslashes($_POST['tank_liquid_level']);
		$tank_liquid_level_obs = addslashes($_POST['tank_liquid_level_obs']);
		$coolant_status = addslashes($_POST['coolant_status']);
		$coolant_status_obs = addslashes($_POST['coolant_status_obs']);
		$hoses_coolant = addslashes($_POST['hoses_coolant']);
		$hoses_coolant_obs = addslashes($_POST['hoses_coolant_obs']);
		$radiator = addslashes($_POST['radiator']);
		$radiator_obs = addslashes($_POST['radiator_obs']);
		$fan_coolant = addslashes($_POST['fan_coolant']);
		$fan_coolant_obs = addslashes($_POST['fan_coolant_obs']);
		$water_pump = addslashes($_POST['water_pump']);
		$water_pump_obs = addslashes($_POST['water_pump_obs']);
		$cables_plugs = addslashes($_POST['cables_plugs']);
		$cables_plugs_obs = addslashes($_POST['cables_plugs_obs']);
		$transmission_system = addslashes($_POST['transmission_system']);
		$transmission_system_type = addslashes($_POST['transmission_system_type']);
		$transmission_system_obs = addslashes($_POST['transmission_system_obs']);
		$gearbox_oil = addslashes($_POST['gearbox_oil']);
		$gearbox_oil_obs = addslashes($_POST['gearbox_oil_obs']);
		$hoods = addslashes($_POST['hoods']);
		$hoods_obs = addslashes($_POST['hoods_obs']);
		$observations = addslashes($_POST['observations']);


		$order->engineCreate(
			$id,
			$straps,
			$straps_obs,
			$oil_level,
			$oil_level_obs,
			$cooling,
			$cooling_obs,
			$tank_liquid_level,
			$tank_liquid_level_obs,
			$coolant_status,
			$coolant_status_obs,
			$hoses_coolant,
			$hoses_coolant_obs,
			$radiator,
			$radiator_obs,
			$fan_coolant,
			$fan_coolant_obs,
			$water_pump,
			$water_pump_obs,
			$cables_plugs,
			$cables_plugs_obs,
			$transmission_system,
			$transmission_system_type,
			$transmission_system_obs,
			$gearbox_oil,
			$gearbox_oil_obs,
			$hoods,
			$hoods_obs,
			$observations
		);
		header("Location: " . BASE_URL . "workorder/show/" . $id);
	}

	public function engine_edit($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['engine_info'] = $order->engineInfo($id);
		$this->loadTemplate('workorder_engine_edit', $data);
	}

	public function engine_update($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$workorder_id = addslashes($_POST['workorder_id']);
		$straps = addslashes($_POST['straps']);
		$straps_obs = addslashes($_POST['straps_obs']);
		$oil_level = addslashes($_POST['oil_level']);
		$oil_level_obs = addslashes($_POST['oil_level_obs']);
		$cooling = addslashes($_POST['cooling']);
		$cooling_obs = addslashes($_POST['cooling_obs']);
		$tank_liquid_level = addslashes($_POST['tank_liquid_level']);
		$tank_liquid_level_obs = addslashes($_POST['tank_liquid_level_obs']);
		$coolant_status = addslashes($_POST['coolant_status']);
		$coolant_status_obs = addslashes($_POST['coolant_status_obs']);
		$hoses_coolant = addslashes($_POST['hoses_coolant']);
		$hoses_coolant_obs = addslashes($_POST['hoses_coolant_obs']);
		$radiator = addslashes($_POST['radiator']);
		$radiator_obs = addslashes($_POST['radiator_obs']);
		$fan_coolant = addslashes($_POST['fan_coolant']);
		$fan_coolant_obs = addslashes($_POST['fan_coolant_obs']);
		$water_pump = addslashes($_POST['water_pump']);
		$water_pump_obs = addslashes($_POST['water_pump_obs']);
		$cables_plugs = addslashes($_POST['cables_plugs']);
		$cables_plugs_obs = addslashes($_POST['cables_plugs_obs']);
		$transmission_system = addslashes($_POST['transmission_system']);
		$transmission_system_type = addslashes($_POST['transmission_system_type']);
		$transmission_system_obs = addslashes($_POST['transmission_system_obs']);
		$gearbox_oil = addslashes($_POST['gearbox_oil']);
		$gearbox_oil_obs = addslashes($_POST['gearbox_oil_obs']);
		$hoods = addslashes($_POST['hoods']);
		$hoods_obs = addslashes($_POST['hoods_obs']);
		$observations = addslashes($_POST['observations']);

		$order->engineUpdate(
			$id,
			$workorder_id,
			$straps,
			$straps_obs,
			$oil_level,
			$oil_level_obs,
			$cooling,
			$cooling_obs,
			$tank_liquid_level,
			$tank_liquid_level_obs,
			$coolant_status,
			$coolant_status_obs,
			$hoses_coolant,
			$hoses_coolant_obs,
			$radiator,
			$radiator_obs,
			$fan_coolant,
			$fan_coolant_obs,
			$water_pump,
			$water_pump_obs,
			$cables_plugs,
			$cables_plugs_obs,
			$transmission_system,
			$transmission_system_type,
			$transmission_system_obs,
			$gearbox_oil,
			$gearbox_oil_obs,
			$hoods,
			$hoods_obs,
			$observations
		);
		header("Location: " . BASE_URL . "workorder/show/" . $workorder_id);
	}
	
	public function suspension_create($id)
	{
		$u = new Users();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['workorder_id'] = $id;
		$this->loadTemplate('workorder_suspension_create', $data);
	}

	public function suspension_store($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$front_shock_absorber = addslashes($_POST['front_shock_absorber']);
		$front_shock_absorber_obs = addslashes($_POST['front_shock_absorber_obs']);
		$rear_shock_absorber = addslashes($_POST['rear_shock_absorber']);
		$rear_shock_absorber_obs = addslashes($_POST['rear_shock_absorber_obs']); 
		$bushings = addslashes($_POST['bushings']); 
		$bushings_obs = addslashes($_POST['bushings_obs']);
		$suspension_pads = addslashes($_POST['suspension_pads']);
		$suspension_pads_obs = addslashes($_POST['suspension_pads_obs']);
		$tray_arm = addslashes($_POST['tray_arm']);
		$tray_arm_obs = addslashes($_POST['tray_arm_obs']);
		$observations = addslashes($_POST['observations']);


		$order->suspensionCreate(
			$id,
			$front_shock_absorber,
			$front_shock_absorber_obs,
			$rear_shock_absorber,
			$rear_shock_absorber_obs,
			$bushings,
			$bushings_obs,
			$suspension_pads,
			$suspension_pads_obs,
			$tray_arm,
			$tray_arm_obs,
			$observations
		);
		header("Location: " . BASE_URL . "workorder/show/" . $id);
	}

	public function suspension_edit($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['suspension_info'] = $order->suspensionInfo($id);
		$this->loadTemplate('workorder_suspension_edit', $data);
	}

	public function suspension_update($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$workorder_id = addslashes($_POST['workorder_id']);
		$front_shock_absorber = addslashes($_POST['front_shock_absorber']);
		$front_shock_absorber_obs = addslashes($_POST['front_shock_absorber_obs']);
		$rear_shock_absorber = addslashes($_POST['rear_shock_absorber']);
		$rear_shock_absorber_obs = addslashes($_POST['rear_shock_absorber_obs']); 
		$bushings = addslashes($_POST['bushings']); 
		$bushings_obs = addslashes($_POST['bushings_obs']);
		$suspension_pads = addslashes($_POST['suspension_pads']);
		$suspension_pads_obs = addslashes($_POST['suspension_pads_obs']);
		$tray_arm = addslashes($_POST['tray_arm']);
		$tray_arm_obs = addslashes($_POST['tray_arm_obs']);
		$observations = addslashes($_POST['observations']);


		$order->suspensionUpdate(
			$id,
			$front_shock_absorber,
			$front_shock_absorber_obs,
			$rear_shock_absorber,
			$rear_shock_absorber_obs,
			$bushings,
			$bushings_obs,
			$suspension_pads,
			$suspension_pads_obs,
			$tray_arm,
			$tray_arm_obs,
			$observations
		);
		header("Location: " . BASE_URL . "workorder/show/" . $workorder_id);
	}
}
