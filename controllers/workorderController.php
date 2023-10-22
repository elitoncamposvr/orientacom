<?php
require_once __DIR__ . '/../vendor/autoload.php';
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

	public function general_create($id)
	{
		$u = new Users();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['workorder_id'] = $id;
		$this->loadTemplate('workorder_general_create', $data);
	}

	public function general_store($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$air_conditioning = addslashes($_POST['air_conditioning']);
		$air_conditioning_obs = addslashes($_POST['air_conditioning_obs']);
		$windshield_reservoir_level = addslashes($_POST['windshield_reservoir_level']);
		$windshield_reservoir_level_obs = addslashes($_POST['windshield_reservoir_level_obs']);
		$windscreen_spray = addslashes($_POST['windscreen_spray']);
		$windscreen_spray_obs = addslashes($_POST['windscreen_spray_obs']);
		$vanes = addslashes($_POST['vanes']);
		$vanes_obs = addslashes($_POST['vanes_obs']);
		$battery = addslashes($_POST['battery']);
		$battery_obs = addslashes($_POST['battery_obs']);
		$bumper_core = addslashes($_POST['bumper_core']);
		$bumper_core_obs = addslashes($_POST['bumper_core_obs']);
		$airbox = addslashes($_POST['airbox']);
		$airbox_obs = addslashes($_POST['airbox_obs']);
		$exhaust = addslashes($_POST['exhaust']);
		$exhaust_obs = addslashes($_POST['exhaust_obs']);
		$fixing_cables_wires = addslashes($_POST['fixing_cables_wires']);
		$fixing_cables_wires_obs = addslashes($_POST['fixing_cables_wires_obs']);
		$electronic_diagnostics = addslashes($_POST['electronic_diagnostics']);
		$electronic_diagnostics_obs = addslashes($_POST['electronic_diagnostics_obs']);
		$observations = addslashes($_POST['observations']);


		$order->generalCreate(
			$id,
			$air_conditioning,
			$air_conditioning_obs,
			$windshield_reservoir_level,
			$windshield_reservoir_level_obs,
			$windscreen_spray,
			$windscreen_spray_obs,
			$vanes,
			$vanes_obs,
			$battery,
			$battery_obs,
			$bumper_core,
			$bumper_core_obs,
			$airbox,
			$airbox_obs,
			$exhaust,
			$exhaust_obs,
			$fixing_cables_wires,
			$fixing_cables_wires_obs,
			$electronic_diagnostics,
			$electronic_diagnostics_obs,
			$observations
		);
		header("Location: " . BASE_URL . "workorder/show/" . $id);
	}

	public function general_edit($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['general_info'] = $order->generalInfo($id);
		$this->loadTemplate('workorder_general_edit', $data);
	}

	public function general_update($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$workorder_id = addslashes($_POST['workorder_id']);
		$air_conditioning = addslashes($_POST['air_conditioning']);
		$air_conditioning_obs = addslashes($_POST['air_conditioning_obs']);
		$windshield_reservoir_level = addslashes($_POST['windshield_reservoir_level']);
		$windshield_reservoir_level_obs = addslashes($_POST['windshield_reservoir_level_obs']);
		$windscreen_spray = addslashes($_POST['windscreen_spray']);
		$windscreen_spray_obs = addslashes($_POST['windscreen_spray_obs']);
		$vanes = addslashes($_POST['vanes']);
		$vanes_obs = addslashes($_POST['vanes_obs']);
		$battery = addslashes($_POST['battery']);
		$battery_obs = addslashes($_POST['battery_obs']);
		$bumper_core = addslashes($_POST['bumper_core']);
		$bumper_core_obs = addslashes($_POST['bumper_core_obs']);
		$airbox = addslashes($_POST['airbox']);
		$airbox_obs = addslashes($_POST['airbox_obs']);
		$exhaust = addslashes($_POST['exhaust']);
		$exhaust_obs = addslashes($_POST['exhaust_obs']);
		$fixing_cables_wires = addslashes($_POST['fixing_cables_wires']);
		$fixing_cables_wires_obs = addslashes($_POST['fixing_cables_wires_obs']);
		$electronic_diagnostics = addslashes($_POST['electronic_diagnostics']);
		$electronic_diagnostics_obs = addslashes($_POST['electronic_diagnostics_obs']);
		$observations = addslashes($_POST['observations']);


		$order->generalUpdate(
			$id,
			$air_conditioning,
			$air_conditioning_obs,
			$windshield_reservoir_level,
			$windshield_reservoir_level_obs,
			$windscreen_spray,
			$windscreen_spray_obs,
			$vanes,
			$vanes_obs,
			$battery,
			$battery_obs,
			$bumper_core,
			$bumper_core_obs,
			$airbox,
			$airbox_obs,
			$exhaust,
			$exhaust_obs,
			$fixing_cables_wires,
			$fixing_cables_wires_obs,
			$electronic_diagnostics,
			$electronic_diagnostics_obs,
			$observations
		);
		header("Location: " . BASE_URL . "workorder/show/" . $workorder_id);
	}

	public function lightglass_create($id)
	{
		$u = new Users();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['workorder_id'] = $id;
		$this->loadTemplate('workorder_light_glass_create', $data);
	}

	public function lightglass_store($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$low_beam_drive = addslashes($_POST['low_beam_drive']);
		$low_beam_drive_obs = addslashes($_POST['low_beam_drive_obs']);
		$high_beam_drive = addslashes($_POST['high_beam_drive']);
		$high_beam_drive_obs = addslashes($_POST['high_beam_drive_obs']);
		$flashlights = addslashes($_POST['flashlights']);
		$flashlights_obs = addslashes($_POST['flashlights_obs']);
		$longrange_headlamp = addslashes($_POST['longrange_headlamp']);
		$longrange_headlamp_obs = addslashes($_POST['longrange_headlamp_obs']);
		$brake_light = addslashes($_POST['brake_light']);
		$brake_light_obs = addslashes($_POST['brake_light_obs']);
		$reverse_light = addslashes($_POST['reverse_light']);
		$reverse_light_obs = addslashes($_POST['reverse_light_obs']);
		$sensors_cameras = addslashes($_POST['sensors_cameras']);
		$sensors_cameras_obs = addslashes($_POST['sensors_cameras_obs']);
		$dashboard_lights = addslashes($_POST['dashboard_lights']);
		$dashboard_lights_obs = addslashes($_POST['dashboard_lights_obs']);
		$interior_lighting = addslashes($_POST['interior_lighting']);
		$interior_lighting_obs = addslashes($_POST['interior_lighting_obs']);
		$internal_light = addslashes($_POST['internal_light']);
		$internal_light_obs = addslashes($_POST['internal_light_obs']);
		$arrow_light_right = addslashes($_POST['arrow_light_right']);
		$arrow_light_right_obs = addslashes($_POST['arrow_light_right_obs']);
		$arrow_light_left = addslashes($_POST['arrow_light_left']);
		$arrow_light_left_obs = addslashes($_POST['arrow_light_left_obs']);
		$warning_flashers = addslashes($_POST['warning_flashers']);
		$warning_flashers_obs = addslashes($_POST['warning_flashers_obs']);
		$headlight_washing = addslashes($_POST['headlight_washing']);
		$headlight_washing_obs = addslashes($_POST['headlight_washing_obs']);
		$front_windshield_wiper = addslashes($_POST['front_windshield_wiper']);
		$front_windshield_wiper_obs = addslashes($_POST['front_windshield_wiper_obs']);
		$rear_windshield_wiper = addslashes($_POST['rear_windshield_wiper']);
		$rear_windshield_wiper_obs = addslashes($_POST['rear_windshield_wiper_obs']);
		$sunshade = addslashes($_POST['sunshade']);
		$sunshade_obs = addslashes($_POST['sunshade_obs']);
		$glass_heating = addslashes($_POST['glass_heating']);
		$glass_heating_obs = addslashes($_POST['glass_heating']);
		$rearview_adjustments = addslashes($_POST['rearview_adjustments']);
		$rearview_adjustments_obs = addslashes($_POST['rearview_adjustments_obs']);
		$electric_windows = addslashes($_POST['electric_windows']);
		$electric_windows_obs = addslashes($_POST['electric_windows_obs']);
		$observations = addslashes($_POST['observations']);


		$order->lightglassCreate(
			$id,
			$low_beam_drive,
			$low_beam_drive_obs,
			$high_beam_drive,
			$high_beam_drive_obs,
			$flashlights,
			$flashlights_obs,
			$longrange_headlamp,
			$longrange_headlamp_obs,
			$brake_light,
			$brake_light_obs,
			$reverse_light,
			$reverse_light_obs,
			$sensors_cameras,
			$sensors_cameras_obs,
			$dashboard_lights,
			$dashboard_lights_obs,
			$interior_lighting,
			$interior_lighting_obs,
			$internal_light,
			$internal_light_obs,
			$arrow_light_right,
			$arrow_light_right_obs,
			$arrow_light_left,
			$arrow_light_left_obs,
			$warning_flashers,
			$warning_flashers_obs,
			$headlight_washing,
			$headlight_washing_obs,
			$front_windshield_wiper,
			$front_windshield_wiper_obs,
			$rear_windshield_wiper,
			$rear_windshield_wiper_obs,
			$sunshade,
			$sunshade_obs,
			$glass_heating,
			$glass_heating_obs,
			$rearview_adjustments,
			$rearview_adjustments_obs,
			$electric_windows,
			$electric_windows_obs,
			$observations
		);
		header("Location: " . BASE_URL . "workorder/show/" . $id);
	}

	public function lightglass_edit($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['lightglass_info'] = $order->lightglassInfo($id);
		$this->loadTemplate('workorder_light_glass_edit', $data);
	}

	public function lightglass_update($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$workorder_id = addslashes($_POST['workorder_id']);
		$low_beam_drive = addslashes($_POST['low_beam_drive']);
		$low_beam_drive_obs = addslashes($_POST['low_beam_drive_obs']);
		$high_beam_drive = addslashes($_POST['high_beam_drive']);
		$high_beam_drive_obs = addslashes($_POST['high_beam_drive_obs']);
		$flashlights = addslashes($_POST['flashlights']);
		$flashlights_obs = addslashes($_POST['flashlights_obs']);
		$longrange_headlamp = addslashes($_POST['longrange_headlamp']);
		$longrange_headlamp_obs = addslashes($_POST['longrange_headlamp_obs']);
		$brake_light = addslashes($_POST['brake_light']);
		$brake_light_obs = addslashes($_POST['brake_light_obs']);
		$reverse_light = addslashes($_POST['reverse_light']);
		$reverse_light_obs = addslashes($_POST['reverse_light_obs']);
		$sensors_cameras = addslashes($_POST['sensors_cameras']);
		$sensors_cameras_obs = addslashes($_POST['sensors_cameras_obs']);
		$dashboard_lights = addslashes($_POST['dashboard_lights']);
		$dashboard_lights_obs = addslashes($_POST['dashboard_lights_obs']);
		$interior_lighting = addslashes($_POST['interior_lighting']);
		$interior_lighting_obs = addslashes($_POST['interior_lighting_obs']);
		$internal_light = addslashes($_POST['internal_light']);
		$internal_light_obs = addslashes($_POST['internal_light_obs']);
		$arrow_light_right = addslashes($_POST['arrow_light_right']);
		$arrow_light_right_obs = addslashes($_POST['arrow_light_right_obs']);
		$arrow_light_left = addslashes($_POST['arrow_light_left']);
		$arrow_light_left_obs = addslashes($_POST['arrow_light_left_obs']);
		$warning_flashers = addslashes($_POST['warning_flashers']);
		$warning_flashers_obs = addslashes($_POST['warning_flashers_obs']);
		$headlight_washing = addslashes($_POST['headlight_washing']);
		$headlight_washing_obs = addslashes($_POST['headlight_washing_obs']);
		$front_windshield_wiper = addslashes($_POST['front_windshield_wiper']);
		$front_windshield_wiper_obs = addslashes($_POST['front_windshield_wiper_obs']);
		$rear_windshield_wiper = addslashes($_POST['rear_windshield_wiper']);
		$rear_windshield_wiper_obs = addslashes($_POST['rear_windshield_wiper_obs']);
		$sunshade = addslashes($_POST['sunshade']);
		$sunshade_obs = addslashes($_POST['sunshade_obs']);
		$glass_heating = addslashes($_POST['glass_heating']);
		$glass_heating_obs = addslashes($_POST['glass_heating']);
		$rearview_adjustments = addslashes($_POST['rearview_adjustments']);
		$rearview_adjustments_obs = addslashes($_POST['rearview_adjustments_obs']);
		$electric_windows = addslashes($_POST['electric_windows']);
		$electric_windows_obs = addslashes($_POST['electric_windows_obs']);
		$observations = addslashes($_POST['observations']);


		$order->lightglassUpdate(
			$id,
			$low_beam_drive,
			$low_beam_drive_obs,
			$high_beam_drive,
			$high_beam_drive_obs,
			$flashlights,
			$flashlights_obs,
			$longrange_headlamp,
			$longrange_headlamp_obs,
			$brake_light,
			$brake_light_obs,
			$reverse_light,
			$reverse_light_obs,
			$sensors_cameras,
			$sensors_cameras_obs,
			$dashboard_lights,
			$dashboard_lights_obs,
			$interior_lighting,
			$interior_lighting_obs,
			$internal_light,
			$internal_light_obs,
			$arrow_light_right,
			$arrow_light_right_obs,
			$arrow_light_left,
			$arrow_light_left_obs,
			$warning_flashers,
			$warning_flashers_obs,
			$headlight_washing,
			$headlight_washing_obs,
			$front_windshield_wiper,
			$front_windshield_wiper_obs,
			$rear_windshield_wiper,
			$rear_windshield_wiper_obs,
			$sunshade,
			$sunshade_obs,
			$glass_heating,
			$glass_heating_obs,
			$rearview_adjustments,
			$rearview_adjustments_obs,
			$electric_windows,
			$electric_windows_obs,
			$observations
		);
		header("Location: " . BASE_URL . "workorder/show/" . $workorder_id);
	}

	public function interior_create($id)
	{
		$u = new Users();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['workorder_id'] = $id;
		$this->loadTemplate('workorder_interior_visual_create', $data);
	}

	public function interior_store($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$safety_lock = addslashes($_POST['safety_lock']);
		$safety_lock_obs = addslashes($_POST['safety_lock_obs']);
		$remote_controls = addslashes($_POST['remote_controls']);
		$remote_controls_obs = addslashes($_POST['remote_controls_obs']);
		$immobilizer = addslashes($_POST['immobilizer']);
		$immobilizer_obs = addslashes($_POST['immobilizer_obs']);
		$ignition = addslashes($_POST['ignition']);
		$ignition_obs = addslashes($_POST['ignition_obs']);
		$steering_whell_lock = addslashes($_POST['steering_whell_lock']);
		$steering_whell_lock_obs = addslashes($_POST['steering_whell_lock_obs']);
		$horn = addslashes($_POST['horn']);
		$horn_obs = addslashes($_POST['horn_obs']);
		$instrument_panel = addslashes($_POST['instrument_panel']);
		$instrument_panel_obs = addslashes($_POST['instrument_panel_obs']);
		$multifunction_steering_whell = addslashes($_POST['multifunction_steering_whell']);
		$multifunction_steering_whell_obs = addslashes($_POST['multifunction_steering_whell_obs']);
		$column_adjustment = addslashes($_POST['column_adjustment']);
		$column_adjustment_obs = addslashes($_POST['column_adjustment_obs']);
		$airbag = addslashes($_POST['airbag']);
		$airbag_obs = addslashes($_POST['airbag_obs']);
		$central_diagnostics = addslashes($_POST['central_diagnostics']);
		$central_diagnostics_obs = addslashes($_POST['central_diagnostics_obs']);
		$hood_opening = addslashes($_POST['hood_opening']);
		$hood_opening_obs = addslashes($_POST['hood_opening_obs']);
		$panel_controls = addslashes($_POST['panel_controls']);
		$panel_controls_obs = addslashes($_POST['panel_controls_obs']);
		$onboard_clock = addslashes($_POST['onboard_clock']);
		$onboard_clock_obs = addslashes($_POST['onboard_clock_obs']);
		$pcm = addslashes($_POST['pcm']);
		$pcm_obs = addslashes($_POST['pcm_obs']);
		$audio = addslashes($_POST['audio']);
		$audio_obs = addslashes($_POST['audio_obs']);
		$seat_heating = addslashes($_POST['seat_heating']);
		$seat_heating_obs = addslashes($_POST['seat_heating_obs']);
		$steering_whell_heating = addslashes($_POST['steering_whell_heating']);
		$steering_whell_heating_obs = addslashes($_POST['steering_whell_heating_obs']);
		$seat_memory = addslashes($_POST['seat_memory']);
		$seat_memory_obs = addslashes($_POST['seat_memory_obs']);
		$cup_holder = addslashes($_POST['cup_holder']);
		$cup_holder_obs = addslashes($_POST['cup_holder_obs']);
		$glove_compartment = addslashes($_POST['glove_compartment']);
		$glove_compartment_obs = addslashes($_POST['glove_compartment_obs']);
		$belt_adjustment = addslashes($_POST['belt_adjustment']);
		$belt_adjustment_obs = addslashes($_POST['belt_adjustment_obs']);
		$movable_roof = addslashes($_POST['movable_roof']);
		$movable_roof_obs = addslashes($_POST['movable_roof_obs']);
		$air_conditioning = addslashes($_POST['air_conditioning']);
		$air_conditioning_obs = addslashes($_POST['air_conditioning_obs']);
		$cabriolet = addslashes($_POST['cabriolet']);
		$cabriolet_obs = addslashes($_POST['cabriolet_obs']);
		$locking_lids = addslashes($_POST['locking_lids']);
		$locking_lids_obs = addslashes($_POST['locking_lids_obs']);
		$ceiling_cladding = addslashes($_POST['ceiling_cladding']);
		$ceiling_cladding_obs = addslashes($_POST['ceiling_cladding_obs']);
		$observations = addslashes($_POST['observations']);


		$order->interiorCreate(
			$id,
			$safety_lock,
			$safety_lock_obs,
			$remote_controls,
			$remote_controls_obs,
			$immobilizer,
			$immobilizer_obs,
			$ignition,
			$ignition_obs,
			$steering_whell_lock,
			$steering_whell_lock_obs,
			$horn,
			$horn_obs,
			$instrument_panel,
			$instrument_panel_obs,
			$multifunction_steering_whell,
			$multifunction_steering_whell_obs,
			$column_adjustment,
			$column_adjustment_obs,
			$airbag,
			$airbag_obs,
			$central_diagnostics,
			$central_diagnostics_obs,
			$hood_opening,
			$hood_opening_obs,
			$panel_controls,
			$panel_controls_obs,
			$onboard_clock,
			$onboard_clock_obs,
			$pcm,
			$pcm_obs,
			$audio,
			$audio_obs,
			$seat_heating,
			$seat_heating_obs,
			$steering_whell_heating,
			$steering_whell_heating_obs,
			$seat_memory,
			$seat_memory_obs,
			$cup_holder,
			$cup_holder_obs,
			$glove_compartment,
			$glove_compartment_obs,
			$belt_adjustment,
			$belt_adjustment_obs,
			$movable_roof,
			$movable_roof_obs,
			$air_conditioning,
			$air_conditioning_obs,
			$cabriolet,
			$cabriolet_obs,
			$locking_lids,
			$locking_lids_obs,
			$ceiling_cladding,
			$ceiling_cladding_obs,
			$observations
		);
		header("Location: " . BASE_URL . "workorder/show/" . $id);
	}

	public function interior_edit($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['interior'] = $order->InteriorInfo($id);
		$this->loadTemplate('workorder_interior_visual_edit', $data);
	}

	public function interior_update($id)
	{
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$workorder_id = addslashes($_POST['workorder_id']);
		$safety_lock = addslashes($_POST['safety_lock']);
		$safety_lock_obs = addslashes($_POST['safety_lock_obs']);
		$remote_controls = addslashes($_POST['remote_controls']);
		$remote_controls_obs = addslashes($_POST['remote_controls_obs']);
		$immobilizer = addslashes($_POST['immobilizer']);
		$immobilizer_obs = addslashes($_POST['immobilizer_obs']);
		$ignition = addslashes($_POST['ignition']);
		$ignition_obs = addslashes($_POST['ignition_obs']);
		$steering_whell_lock = addslashes($_POST['steering_whell_lock']);
		$steering_whell_lock_obs = addslashes($_POST['steering_whell_lock_obs']);
		$horn = addslashes($_POST['horn']);
		$horn_obs = addslashes($_POST['horn_obs']);
		$instrument_panel = addslashes($_POST['instrument_panel']);
		$instrument_panel_obs = addslashes($_POST['instrument_panel_obs']);
		$multifunction_steering_whell = addslashes($_POST['multifunction_steering_whell']);
		$multifunction_steering_whell_obs = addslashes($_POST['multifunction_steering_whell_obs']);
		$column_adjustment = addslashes($_POST['column_adjustment']);
		$column_adjustment_obs = addslashes($_POST['column_adjustment_obs']);
		$airbag = addslashes($_POST['airbag']);
		$airbag_obs = addslashes($_POST['airbag_obs']);
		$central_diagnostics = addslashes($_POST['central_diagnostics']);
		$central_diagnostics_obs = addslashes($_POST['central_diagnostics_obs']);
		$hood_opening = addslashes($_POST['hood_opening']);
		$hood_opening_obs = addslashes($_POST['hood_opening_obs']);
		$panel_controls = addslashes($_POST['panel_controls']);
		$panel_controls_obs = addslashes($_POST['panel_controls_obs']);
		$onboard_clock = addslashes($_POST['onboard_clock']);
		$onboard_clock_obs = addslashes($_POST['onboard_clock_obs']);
		$pcm = addslashes($_POST['pcm']);
		$pcm_obs = addslashes($_POST['pcm_obs']);
		$audio = addslashes($_POST['audio']);
		$audio_obs = addslashes($_POST['audio_obs']);
		$seat_heating = addslashes($_POST['seat_heating']);
		$seat_heating_obs = addslashes($_POST['seat_heating_obs']);
		$steering_whell_heating = addslashes($_POST['steering_whell_heating']);
		$steering_whell_heating_obs = addslashes($_POST['steering_whell_heating_obs']);
		$seat_memory = addslashes($_POST['seat_memory']);
		$seat_memory_obs = addslashes($_POST['seat_memory_obs']);
		$cup_holder = addslashes($_POST['cup_holder']);
		$cup_holder_obs = addslashes($_POST['cup_holder_obs']);
		$glove_compartment = addslashes($_POST['glove_compartment']);
		$glove_compartment_obs = addslashes($_POST['glove_compartment_obs']);
		$belt_adjustment = addslashes($_POST['belt_adjustment']);
		$belt_adjustment_obs = addslashes($_POST['belt_adjustment_obs']);
		$movable_roof = addslashes($_POST['movable_roof']);
		$movable_roof_obs = addslashes($_POST['movable_roof_obs']);
		$air_conditioning = addslashes($_POST['air_conditioning']);
		$air_conditioning_obs = addslashes($_POST['air_conditioning_obs']);
		$cabriolet = addslashes($_POST['cabriolet']);
		$cabriolet_obs = addslashes($_POST['cabriolet_obs']);
		$locking_lids = addslashes($_POST['locking_lids']);
		$locking_lids_obs = addslashes($_POST['locking_lids_obs']);
		$ceiling_cladding = addslashes($_POST['ceiling_cladding']);
		$ceiling_cladding_obs = addslashes($_POST['ceiling_cladding_obs']);
		$observations = addslashes($_POST['observations']);


		$order->interiorUpdate(
			$id,
			$safety_lock,
			$safety_lock_obs,
			$remote_controls,
			$remote_controls_obs,
			$immobilizer,
			$immobilizer_obs,
			$ignition,
			$ignition_obs,
			$steering_whell_lock,
			$steering_whell_lock_obs,
			$horn,
			$horn_obs,
			$instrument_panel,
			$instrument_panel_obs,
			$multifunction_steering_whell,
			$multifunction_steering_whell_obs,
			$column_adjustment,
			$column_adjustment_obs,
			$airbag,
			$airbag_obs,
			$central_diagnostics,
			$central_diagnostics_obs,
			$hood_opening,
			$hood_opening_obs,
			$panel_controls,
			$panel_controls_obs,
			$onboard_clock,
			$onboard_clock_obs,
			$pcm,
			$pcm_obs,
			$audio,
			$audio_obs,
			$seat_heating,
			$seat_heating_obs,
			$steering_whell_heating,
			$steering_whell_heating_obs,
			$seat_memory,
			$seat_memory_obs,
			$cup_holder,
			$cup_holder_obs,
			$glove_compartment,
			$glove_compartment_obs,
			$belt_adjustment,
			$belt_adjustment_obs,
			$movable_roof,
			$movable_roof_obs,
			$air_conditioning,
			$air_conditioning_obs,
			$cabriolet,
			$cabriolet_obs,
			$locking_lids,
			$locking_lids_obs,
			$ceiling_cladding,
			$ceiling_cladding_obs,
			$observations
		);
		header("Location: " . BASE_URL . "workorder/show/" . $workorder_id);
	}

	public function report($id)
	{
		$data = array();
		$u = new Users();
		$order = new WorkOrder();
		$u->setLoggedUser();

		if (!$u->hasPermission('workorder')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['order_info'] = $order->getReportPDF($id);

		ob_start();
		$this->loadView('workorder_pdf', $data);
		$report = ob_get_contents();
		ob_end_clean();


		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'margin_left' => 5,
			'margin_right' => 5,
			'margin_top' => 5,
			'margin_bottom' => 5,
			'margin_header' => 20,
			'margin_footer' => 20,

		]);

		$mpdf->WriteHTML($report);
		$mpdf->Output();

		// $data['workorder_id'] = $id;

		// $this->loadView('workorder_pdf', $data);
	}
}
