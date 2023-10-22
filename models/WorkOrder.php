<?php
class WorkOrder extends model
{

	public function getList($offset, $user_id)
	{
		$array = array();

		if ($user_id == 1) {
			$sql = $this->db->prepare("SELECT * FROM workorder ORDER BY id DESC LIMIT $offset, 100");
			$sql->execute();
		}

		if ($user_id != 1) {
			$sql = $this->db->prepare("SELECT * FROM workorder WHERE user_id = '$user_id' ORDER BY id DESC LIMIT $offset, 100");
			$sql->execute();
		}

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}


	public function getCount()
	{
		$r = 0;

		$sql = $this->db->prepare("SELECT COUNT(*) as sr FROM workorder");
		$sql->execute();
		$row = $sql->fetch();

		$r = $row['sr'];



		return $r;
	}


	public function getInfo($id)
	{
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM workorder WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function create(
		$user_id,
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
	) {

		$sql = $this->db->prepare("
		INSERT INTO 
            workorder 
		SET 
            user_id = :user_id,
			customer = :customer,
			brand = :brand,
			model = :model,
			year = :year,
			color = :color,
			license_plate = :license_plate,
			chassis = :chassis,
			transmission = :transmission,
            fuel = :fuel,
            power = :power,
			km = :km,
            responsible_consultant = :responsible_consultant,
            responsible_mechanic = :responsible_mechanic,
            aditional_info = :aditional_info
		");

		$sql->bindValue(":user_id", $user_id);
		$sql->bindValue(":customer", $customer);
		$sql->bindValue(":brand", $brand);
		$sql->bindValue(":model", $model);
		$sql->bindValue(":year", $year);
		$sql->bindValue(":color", $color);
		$sql->bindValue(":license_plate", $license_plate);
		$sql->bindValue(":chassis", $chassis);
		$sql->bindValue(":transmission", $transmission);
		$sql->bindValue(":fuel", $fuel);
		$sql->bindValue(":power", $power);
		$sql->bindValue(":km", $km);
		$sql->bindValue(":responsible_consultant", $responsible_consultant);
		$sql->bindValue(":responsible_mechanic", $responsible_mechanic);
		$sql->bindValue(":aditional_info", $aditional_info);
		$sql->execute();
	}

	public function update(
		$id,
		$user_id,
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

	) {

		$sql = $this->db->prepare("
		UPDATE 
            workorder 
		SET  
			user_id = :user_id,
			customer = :customer,
			brand = :brand,
			model = :model,
			year = :year,
			color = :color,
			license_plate = :license_plate,
			chassis = :chassis,
			transmission = :transmission,
			fuel = :fuel,
			power = :power,
			km = :km,
			responsible_consultant = :responsible_consultant,
			responsible_mechanic = :responsible_mechanic,
			aditional_info = :aditional_info
		WHERE 
			id = :id");

		$sql->bindValue(":id", $id);
		$sql->bindValue(":user_id", $user_id);
		$sql->bindValue(":customer", $customer);
		$sql->bindValue(":brand", $brand);
		$sql->bindValue(":model", $model);
		$sql->bindValue(":year", $year);
		$sql->bindValue(":color", $color);
		$sql->bindValue(":license_plate", $license_plate);
		$sql->bindValue(":chassis", $chassis);
		$sql->bindValue(":transmission", $transmission);
		$sql->bindValue(":fuel", $fuel);
		$sql->bindValue(":power", $power);
		$sql->bindValue(":km", $km);
		$sql->bindValue(":responsible_consultant", $responsible_consultant);
		$sql->bindValue(":responsible_mechanic", $responsible_mechanic);
		$sql->bindValue(":aditional_info", $aditional_info);
		$sql->execute();
	}

	public function getSearch($search)
	{
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM workorder WHERE customer LIKE '%$search%' OR brand LIKE '%$search%' OR model LIKE '%$search%' OR chassis LIKE '%$search%' OR license_plate LIKE '%$search%'");
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function destroy($id)
	{
		$sql = $this->db->prepare("DELETE FROM workorder WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();
	}

	public function visualExteriorStatus($workorder_id)
	{
		$r = 0;

		$sql = $this->db->prepare("SELECT COUNT(*) as sr FROM exterior_visual WHERE workorder_id = :workorder_id");
		$sql->bindValue(":workorder_id", $workorder_id);
		$sql->execute();
		$row = $sql->fetch();

		$r = $row['sr'];

		return $r;
	}

	public function visualExteriorInfo($id)
	{
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM exterior_visual WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function visualExteriorCreate(
		$workorder_id,
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
	) {
		$sql = $this->db->prepare("
			INSERT INTO 
				exterior_visual 
			SET
				status = 1, 
				workorder_id = :workorder_id, 
				front_hood = :front_hood, 
				front_hood_obs = :front_hood_obs, 
				rearview_mirror_right = :rearview_mirror_right, 
				rearview_mirror_right_obs = :rearview_mirror_right_obs, 
				rearview_mirror_left = :rearview_mirror_left, 
				rearview_mirror_left_obs = :rearview_mirror_left_obs, 
				front_headlight_right = :front_headlight_right, 
				front_headlight_right_obs = :front_headlight_right_obs, 
				front_headlight_left = :front_headlight_left, 
				front_headlight_left_obs = :front_headlight_left_obs, 
				front_bumper = :front_bumper, 
				front_bumper_obs = :front_bumper_obs,
				front_fenders_right = :front_fenders_right,
				front_fenders_right_obs = :front_fenders_right,
				front_fenders_left = :front_fenders_left,
				front_fenders_left_obs = :front_fenders_left_obs,
				front_window_right = :front_window_right,
				front_window_right_obs = :front_window_right_obs,
				front_window_left = :front_window_left,
				front_window_left_obs = :front_window_left_obs,
				front_door_right = :front_door_right,
				front_door_right_obs = :front_door_right_obs,
				front_door_left = :front_door_left,
				front_door_left_obs = :front_door_left_obs,
				rear_window_right = :rear_window_right,
				rear_window_right_obs = :rear_window_right_obs,
				rear_window_left = :rear_window_left,
				rear_window_left_obs = :rear_window_left_obs,
				rear_fenders_right = :rear_fenders_right,
				rear_fenders_right_obs = :rear_fenders_right_obs,
				rear_fenders_left = :rear_fenders_left,
				rear_fenders_left_obs = :rear_fenders_left_obs,
				rear_trunk_lid = :rear_trunk_lid,
				rear_trunk_lid_obs = :rear_trunk_lid_obs,
				upper_trunk_lid = :upper_trunk_lid,
				upper_trunk_lid_obs = :upper_trunk_lid_obs,
				taillight_right = :taillight_right,
				taillight_right_obs = :taillight_right_obs,
				taillight_left = :taillight_left,
				taillight_left_obs = :taillight_left_obs,
				rear_window = :rear_window,
				rear_window_obs = :rear_window_obs,
				front_windshield = :front_windshield,
				front_windshield_obs = :front_windshield_obs,
				rear_bumper = :rear_bumper,
				rear_bumper_obs = :rear_bumper_obs,
				rear_door_right = :rear_door_right,
				rear_door_right_obs = :rear_door_right_obs,
				rear_door_left = :rear_door_left,
				rear_door_left_obs = :rear_door_left_obs,
				roof = :roof,
				roof_obs = :roof_obs,
				convertible_top = :convertible_top,
				convertible_top_obs = :convertible_top_obs,
				protective_film = :protective_film,
				protective_film_obs = :protective_film_obs,
				airfoil = :airfoil,
				airfoil_obs = :airfoil_obs,
				accident_warning_sings = :accident_warning_sings,
				accident_warning_sings_obs = :accident_warning_sings_obs,
				observations = :observations
				");

		$sql->bindValue(":workorder_id", $workorder_id);
		$sql->bindValue(":front_hood", $front_hood);
		$sql->bindValue(":front_hood_obs", $front_hood_obs);
		$sql->bindValue(":rearview_mirror_right", $rearview_mirror_right);
		$sql->bindValue(":rearview_mirror_right_obs", $rearview_mirror_right_obs);
		$sql->bindValue(":rearview_mirror_left", $rearview_mirror_left);
		$sql->bindValue(":rearview_mirror_left_obs", $rearview_mirror_left_obs);
		$sql->bindvalue(":front_headlight_right", $front_headlight_right);
		$sql->bindvalue(":front_headlight_right_obs", $front_headlight_right_obs);
		$sql->bindValue(":front_headlight_left", $front_headlight_left);
		$sql->bindValue(":front_headlight_left_obs", $front_headlight_left_obs);
		$sql->bindValue(":front_bumper", $front_bumper);
		$sql->bindValue(":front_bumper_obs", $front_bumper_obs);
		$sql->bindValue(":front_fenders_right", $front_fenders_right);
		$sql->bindValue(":front_fenders_right_obs", $front_fenders_right_obs);
		$sql->bindValue(":front_fenders_left", $front_fenders_left);
		$sql->bindValue(":front_fenders_left_obs", $front_fenders_left_obs);
		$sql->bindValue(":front_window_right", $front_window_right);
		$sql->bindValue(":front_window_right_obs", $front_window_right_obs);
		$sql->bindValue(":front_window_left", $front_window_left);
		$sql->bindValue(":front_window_left_obs", $front_window_left_obs);
		$sql->bindValue(":front_door_right", $front_door_right);
		$sql->bindValue(":front_door_right_obs", $front_door_right_obs);
		$sql->bindValue(":front_door_left", $front_door_left);
		$sql->bindValue(":front_door_left_obs", $front_door_left_obs);
		$sql->bindValue(":rear_window_right", $rear_window_right);
		$sql->bindValue(":rear_window_right_obs", $rear_window_right_obs);
		$sql->bindValue(":rear_window_left", $rear_window_left);
		$sql->bindValue(":rear_window_left_obs", $rear_window_left_obs);
		$sql->bindValue(":rear_fenders_right", $rear_fenders_right);
		$sql->bindValue(":rear_fenders_right_obs", $rear_fenders_right_obs);
		$sql->bindValue(":rear_fenders_left", $rear_fenders_left);
		$sql->bindValue(":rear_fenders_left_obs", $rear_fenders_left_obs);
		$sql->bindValue(":rear_trunk_lid", $rear_trunk_lid);
		$sql->bindValue(":rear_trunk_lid_obs", $rear_trunk_lid_obs);
		$sql->bindValue(":upper_trunk_lid", $upper_trunk_lid);
		$sql->bindValue(":upper_trunk_lid_obs", $upper_trunk_lid_obs);
		$sql->bindValue(":taillight_right", $taillight_right);
		$sql->bindValue(":taillight_right_obs", $taillight_right_obs);
		$sql->bindValue(":taillight_left", $taillight_left);
		$sql->bindValue(":taillight_left_obs", $taillight_left_obs);
		$sql->bindValue(":rear_window", $rear_window);
		$sql->bindValue(":rear_window_obs", $rear_window_obs);
		$sql->bindValue(":front_windshield", $front_windshield);
		$sql->bindValue(":front_windshield_obs", $front_windshield_obs);
		$sql->bindValue(":rear_bumper", $rear_bumper);
		$sql->bindValue(":rear_bumper_obs", $rear_bumper_obs);
		$sql->bindValue(":rear_door_right", $rear_door_right);
		$sql->bindValue(":rear_door_right_obs", $rear_door_right_obs);
		$sql->bindValue(":rear_door_left", $rear_door_left);
		$sql->bindValue(":rear_door_left_obs", $rear_door_left_obs);
		$sql->bindValue(":roof", $roof);
		$sql->bindValue(":roof_obs", $roof_obs);
		$sql->bindValue(":convertible_top", $convertible_top);
		$sql->bindValue(":convertible_top_obs", $convertible_top_obs);
		$sql->bindValue(":protective_film", $protective_film);
		$sql->bindValue(":protective_film_obs", $protective_film_obs);
		$sql->bindValue(":airfoil", $airfoil);
		$sql->bindValue(":airfoil_obs", $airfoil_obs);
		$sql->bindValue(":accident_warning_sings", $accident_warning_sings);
		$sql->bindValue(":accident_warning_sings_obs", $accident_warning_sings_obs);
		$sql->bindValue(":observations", $observations);
		$sql->execute();

		$last_id = $this->db->lastInsertId();
		$id = $workorder_id;

		$sql2 = $this->db->prepare("UPDATE workorder SET visual_exterior_id = '$last_id' WHERE id = '$id'");
		$sql2->execute();
	}

	public function visualExteriorUpdate(
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
	) {
		$sql = $this->db->prepare("
			UPDATE
				exterior_visual 
			SET
				front_hood = :front_hood, 
				front_hood_obs = :front_hood_obs, 
				rearview_mirror_right = :rearview_mirror_right, 
				rearview_mirror_right_obs = :rearview_mirror_right_obs, 
				rearview_mirror_left = :rearview_mirror_left, 
				rearview_mirror_left_obs = :rearview_mirror_left_obs, 
				front_headlight_right = :front_headlight_right, 
				front_headlight_right_obs = :front_headlight_right_obs, 
				front_headlight_left = :front_headlight_left, 
				front_headlight_left_obs = :front_headlight_left_obs, 
				front_bumper = :front_bumper, 
				front_bumper_obs = :front_bumper_obs,
				front_fenders_right = :front_fenders_right,
				front_fenders_right_obs = :front_fenders_right,
				front_fenders_left = :front_fenders_left,
				front_fenders_left_obs = :front_fenders_left_obs,
				front_window_right = :front_window_right,
				front_window_right_obs = :front_window_right_obs,
				front_window_left = :front_window_left,
				front_window_left_obs = :front_window_left_obs,
				front_door_right = :front_door_right,
				front_door_right_obs = :front_door_right_obs,
				front_door_left = :front_door_left,
				front_door_left_obs = :front_door_left_obs,
				rear_window_right = :rear_window_right,
				rear_window_right_obs = :rear_window_right_obs,
				rear_window_left = :rear_window_left,
				rear_window_left_obs = :rear_window_left_obs,
				rear_fenders_right = :rear_fenders_right,
				rear_fenders_right_obs = :rear_fenders_right_obs,
				rear_fenders_left = :rear_fenders_left,
				rear_fenders_left_obs = :rear_fenders_left_obs,
				rear_trunk_lid = :rear_trunk_lid,
				rear_trunk_lid_obs = :rear_trunk_lid_obs,
				upper_trunk_lid = :upper_trunk_lid,
				upper_trunk_lid_obs = :upper_trunk_lid_obs,
				taillight_right = :taillight_right,
				taillight_right_obs = :taillight_right_obs,
				taillight_left = :taillight_left,
				taillight_left_obs = :taillight_left_obs,
				rear_window = :rear_window,
				rear_window_obs = :rear_window_obs,
				front_windshield = :front_windshield,
				front_windshield_obs = :front_windshield_obs,
				rear_bumper = :rear_bumper,
				rear_bumper_obs = :rear_bumper_obs,
				rear_door_right = :rear_door_right,
				rear_door_right_obs = :rear_door_right_obs,
				rear_door_left = :rear_door_left,
				rear_door_left_obs = :rear_door_left_obs,
				roof = :roof,
				roof_obs = :roof_obs,
				convertible_top = :convertible_top,
				convertible_top_obs = :convertible_top_obs,
				protective_film = :protective_film,
				protective_film_obs = :protective_film_obs,
				airfoil = :airfoil,
				airfoil_obs = :airfoil_obs,
				accident_warning_sings = :accident_warning_sings,
				accident_warning_sings_obs = :accident_warning_sings_obs,
				observations = :observations
			WHERE 
				id = :id
				");

		$sql->bindValue(":id", $id);
		$sql->bindValue(":front_hood", $front_hood);
		$sql->bindValue(":front_hood_obs", $front_hood_obs);
		$sql->bindValue(":rearview_mirror_right", $rearview_mirror_right);
		$sql->bindValue(":rearview_mirror_right_obs", $rearview_mirror_right_obs);
		$sql->bindValue(":rearview_mirror_left", $rearview_mirror_left);
		$sql->bindValue(":rearview_mirror_left_obs", $rearview_mirror_left_obs);
		$sql->bindvalue(":front_headlight_right", $front_headlight_right);
		$sql->bindvalue(":front_headlight_right_obs", $front_headlight_right_obs);
		$sql->bindValue(":front_headlight_left", $front_headlight_left);
		$sql->bindValue(":front_headlight_left_obs", $front_headlight_left_obs);
		$sql->bindValue(":front_bumper", $front_bumper);
		$sql->bindValue(":front_bumper_obs", $front_bumper_obs);
		$sql->bindValue(":front_fenders_right", $front_fenders_right);
		$sql->bindValue(":front_fenders_right_obs", $front_fenders_right_obs);
		$sql->bindValue(":front_fenders_left", $front_fenders_left);
		$sql->bindValue(":front_fenders_left_obs", $front_fenders_left_obs);
		$sql->bindValue(":front_window_right", $front_window_right);
		$sql->bindValue(":front_window_right_obs", $front_window_right_obs);
		$sql->bindValue(":front_window_left", $front_window_left);
		$sql->bindValue(":front_window_left_obs", $front_window_left_obs);
		$sql->bindValue(":front_door_right", $front_door_right);
		$sql->bindValue(":front_door_right_obs", $front_door_right_obs);
		$sql->bindValue(":front_door_left", $front_door_left);
		$sql->bindValue(":front_door_left_obs", $front_door_left_obs);
		$sql->bindValue(":rear_window_right", $rear_window_right);
		$sql->bindValue(":rear_window_right_obs", $rear_window_right_obs);
		$sql->bindValue(":rear_window_left", $rear_window_left);
		$sql->bindValue(":rear_window_left_obs", $rear_window_left_obs);
		$sql->bindValue(":rear_fenders_right", $rear_fenders_right);
		$sql->bindValue(":rear_fenders_right_obs", $rear_fenders_right_obs);
		$sql->bindValue(":rear_fenders_left", $rear_fenders_left);
		$sql->bindValue(":rear_fenders_left_obs", $rear_fenders_left_obs);
		$sql->bindValue(":rear_trunk_lid", $rear_trunk_lid);
		$sql->bindValue(":rear_trunk_lid_obs", $rear_trunk_lid_obs);
		$sql->bindValue(":upper_trunk_lid", $upper_trunk_lid);
		$sql->bindValue(":upper_trunk_lid_obs", $upper_trunk_lid_obs);
		$sql->bindValue(":taillight_right", $taillight_right);
		$sql->bindValue(":taillight_right_obs", $taillight_right_obs);
		$sql->bindValue(":taillight_left", $taillight_left);
		$sql->bindValue(":taillight_left_obs", $taillight_left_obs);
		$sql->bindValue(":rear_window", $rear_window);
		$sql->bindValue(":rear_window_obs", $rear_window_obs);
		$sql->bindValue(":front_windshield", $front_windshield);
		$sql->bindValue(":front_windshield_obs", $front_windshield_obs);
		$sql->bindValue(":rear_bumper", $rear_bumper);
		$sql->bindValue(":rear_bumper_obs", $rear_bumper_obs);
		$sql->bindValue(":rear_door_right", $rear_door_right);
		$sql->bindValue(":rear_door_right_obs", $rear_door_right_obs);
		$sql->bindValue(":rear_door_left", $rear_door_left);
		$sql->bindValue(":rear_door_left_obs", $rear_door_left_obs);
		$sql->bindValue(":roof", $roof);
		$sql->bindValue(":roof_obs", $roof_obs);
		$sql->bindValue(":convertible_top", $convertible_top);
		$sql->bindValue(":convertible_top_obs", $convertible_top_obs);
		$sql->bindValue(":protective_film", $protective_film);
		$sql->bindValue(":protective_film_obs", $protective_film_obs);
		$sql->bindValue(":airfoil", $airfoil);
		$sql->bindValue(":airfoil_obs", $airfoil_obs);
		$sql->bindValue(":accident_warning_sings", $accident_warning_sings);
		$sql->bindValue(":accident_warning_sings_obs", $accident_warning_sings_obs);
		$sql->bindValue(":observations", $observations);
		$sql->execute();
	}

	public function tiresInfo($id)
	{
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM tires WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}


	public function tiresCreate(
		$workorder_id,
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
	) {
		$sql = $this->db->prepare("
			INSERT INTO 
				tires 
			SET
				status = 1, 
				workorder_id = :workorder_id, 
				front_right = :front_right,
				front_right_situation = :front_right_situation,
				front_right_twi = :front_right_twi,
				front_right_dot = :front_right_dot,
				front_left = :front_left,
				front_left_situation = :front_left_situation,
				front_left_twi = :front_left_twi,
				front_left_dot = :front_left_dot,
				rear_right = :rear_right,
				rear_right_situation = :rear_right_situation,
				rear_right_twi = :rear_right_twi,
				rear_right_dot = :rear_right_dot,
				rear_left = :rear_left,
				rear_left_situation = :rear_left_situation,
				rear_left_twi = :rear_left_twi,
				rear_left_dot = :rear_left_dot,
				observations = :observations
				");

		$sql->bindValue(":workorder_id", $workorder_id);
		$sql->bindValue(":front_right", $front_right);
		$sql->bindValue(":front_right_situation", $front_right_situation);
		$sql->bindValue(":front_right_twi", $front_right_twi);
		$sql->bindValue(":front_right_dot", $front_right_dot);
		$sql->bindValue(":front_left", $front_left);
		$sql->bindValue(":front_left_situation", $front_left_situation);
		$sql->bindValue(":front_left_twi", $front_left_twi);
		$sql->bindValue(":front_left_dot", $front_left_dot);
		$sql->bindValue(":rear_right", $rear_right);
		$sql->bindValue(":rear_right_situation", $rear_right_situation);
		$sql->bindValue(":rear_right_twi", $rear_right_twi);
		$sql->bindValue(":rear_right_dot", $rear_right_dot);
		$sql->bindValue(":rear_left", $rear_left);
		$sql->bindValue(":rear_left_situation", $rear_left_situation);
		$sql->bindValue(":rear_left_twi", $rear_left_twi);
		$sql->bindValue(":rear_left_dot", $rear_left_dot);
		$sql->bindValue(":observations", $observations);
		$sql->execute();

		$last_id = $this->db->lastInsertId();
		$id = $workorder_id;

		$sql2 = $this->db->prepare("UPDATE workorder SET tires_id = '$last_id' WHERE id = '$id'");
		$sql2->execute();
	}

	public function tiresUpdate(
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
	) {
		$sql = $this->db->prepare("
			UPDATE
				tires 
			SET
				front_right = :front_right,
				front_right_situation = :front_right_situation,
				front_right_twi = :front_right_twi,
				front_right_dot = :front_right_dot,
				front_left = :front_left,
				front_left_situation = :front_left_situation,
				front_left_twi = :front_left_twi,
				front_left_dot = :front_left_dot,
				rear_right = :rear_right,
				rear_right_situation = :rear_right_situation,
				rear_right_twi = :rear_right_twi,
				rear_right_dot = :rear_right_dot,
				rear_left = :rear_left,
				rear_left_situation = :rear_left_situation,
				rear_left_twi = :rear_left_twi,
				rear_left_dot = :rear_left_dot,
				observations = :observations
			WHERE id = :id
				");

		$sql->bindValue(":id", $id);
		$sql->bindValue(":front_right", $front_right);
		$sql->bindValue(":front_right_situation", $front_right_situation);
		$sql->bindValue(":front_right_twi", $front_right_twi);
		$sql->bindValue(":front_right_dot", $front_right_dot);
		$sql->bindValue(":front_left", $front_left);
		$sql->bindValue(":front_left_situation", $front_left_situation);
		$sql->bindValue(":front_left_twi", $front_left_twi);
		$sql->bindValue(":front_left_dot", $front_left_dot);
		$sql->bindValue(":rear_right", $rear_right);
		$sql->bindValue(":rear_right_situation", $rear_right_situation);
		$sql->bindValue(":rear_right_twi", $rear_right_twi);
		$sql->bindValue(":rear_right_dot", $rear_right_dot);
		$sql->bindValue(":rear_left", $rear_left);
		$sql->bindValue(":rear_left_situation", $rear_left_situation);
		$sql->bindValue(":rear_left_twi", $rear_left_twi);
		$sql->bindValue(":rear_left_dot", $rear_left_dot);
		$sql->bindValue(":observations", $observations);
		$sql->execute();
	}

	public function brakesInfo($id)
	{
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM brakes WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}


	public function brakesCreate(
		$workorder_id,
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
	) {
		$sql = $this->db->prepare("
			INSERT INTO 
				brakes 
			SET
				status = 1, 
				workorder_id = :workorder_id,
				oil_level = :oil_level,
				oil_level_obs = :oil_level_obs,
				hose_flexible = :hose_flexible,
				hose_flexible_obs = :hose_flexible_obs,
				brake_pads = :brake_pads,
				brake_pads_estimated = :brake_pads_estimated,
				brake_pads_obs = :brake_pads_obs,
				brake_discs = :brake_discs,
				brake_discs_estimated = :brake_discs_estimated,
				brake_discs_obs = :brake_discs_obs,
				brake_calipers = :brake_calipers,
				brake_calipers_obs = :brake_calipers_obs,
				cover_plates = :cover_plates,
				cover_plates_obs = :cover_plates_obs,
				pedal_condition = :pedal_condition,
				pedal_condition_obs = :pedal_condition_obs,
				observations = :observations
				");

		$sql->bindValue(":workorder_id", $workorder_id);
		$sql->bindValue(":oil_level", $oil_level);
		$sql->bindValue(":oil_level_obs", $oil_level_obs);
		$sql->bindValue(":hose_flexible", $hose_flexible);
		$sql->bindValue(":hose_flexible_obs", $hose_flexible_obs);
		$sql->bindValue(":brake_pads", $brake_pads);
		$sql->bindValue(":brake_pads_estimated", $brake_pads_estimated);
		$sql->bindValue(":brake_pads_obs", $brake_pads_obs);
		$sql->bindValue(":brake_discs", $brake_discs);
		$sql->bindValue(":brake_discs_estimated", $brake_discs_estimated);
		$sql->bindValue(":brake_discs_obs", $brake_discs_obs);
		$sql->bindValue(":brake_calipers", $brake_calipers);
		$sql->bindValue(":brake_calipers_obs", $brake_calipers_obs);
		$sql->bindValue(":cover_plates", $cover_plates);
		$sql->bindValue(":cover_plates_obs", $cover_plates_obs);
		$sql->bindValue(":pedal_condition", $pedal_condition);
		$sql->bindValue(":pedal_condition_obs", $pedal_condition_obs);
		$sql->bindValue(":observations", $observations);
		$sql->execute();

		$last_id = $this->db->lastInsertId();
		$id = $workorder_id;

		$sql2 = $this->db->prepare("UPDATE workorder SET brakes_id = '$last_id' WHERE id = '$id'");
		$sql2->execute();
	}

	public function brakesUpdate(
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
	) {
		$sql = $this->db->prepare("
		UPDATE
			brakes 
		SET
			oil_level = :oil_level,
			oil_level_obs = :oil_level_obs,
			hose_flexible = :hose_flexible,
			hose_flexible_obs = :hose_flexible_obs,
			brake_pads = :brake_pads,
			brake_pads_estimated = :brake_pads_estimated,
			brake_pads_obs = :brake_pads_obs,
			brake_discs = :brake_discs,
			brake_discs_estimated = :brake_discs_estimated,
			brake_discs_obs = :brake_discs_obs,
			brake_calipers = :brake_calipers,
			brake_calipers_obs = :brake_calipers_obs,
			cover_plates = :cover_plates,
			cover_plates_obs = :cover_plates_obs,
			pedal_condition = :pedal_condition,
			pedal_condition_obs = :pedal_condition_obs,
			observations = :observations
		WHERE
			id = :id
			");

		$sql->bindValue(":id", $id);
		$sql->bindValue(":oil_level", $oil_level);
		$sql->bindValue(":oil_level_obs", $oil_level_obs);
		$sql->bindValue(":hose_flexible", $hose_flexible);
		$sql->bindValue(":hose_flexible_obs", $hose_flexible_obs);
		$sql->bindValue(":brake_pads", $brake_pads);
		$sql->bindValue(":brake_pads_estimated", $brake_pads_estimated);
		$sql->bindValue(":brake_pads_obs", $brake_pads_obs);
		$sql->bindValue(":brake_discs", $brake_discs);
		$sql->bindValue(":brake_discs_estimated", $brake_discs_estimated);
		$sql->bindValue(":brake_discs_obs", $brake_discs_obs);
		$sql->bindValue(":brake_calipers", $brake_calipers);
		$sql->bindValue(":brake_calipers_obs", $brake_calipers_obs);
		$sql->bindValue(":cover_plates", $cover_plates);
		$sql->bindValue(":cover_plates_obs", $cover_plates_obs);
		$sql->bindValue(":pedal_condition", $pedal_condition);
		$sql->bindValue(":pedal_condition_obs", $pedal_condition_obs);
		$sql->bindValue(":observations", $observations);
		$sql->execute();
	}

	public function steeringInfo($id)
	{
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM steering WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function steeringSystemCreate(
		$workorder_id,
		$steering_system,
		$steering_type,
		$steering_system_obs,
		$oil_level,
		$oil_level_obs,
		$hoses_fittings,
		$hoses_fittings_obs,
		$observations
	) {
		$sql = $this->db->prepare("
			INSERT INTO 
				steering 
			SET
				status = 1, 
				workorder_id = :workorder_id,
				steering_system = :steering_system,
				steering_type = :steering_type,
				steering_system_obs = :steering_system_obs,
				oil_level = :oil_level,
				oil_level_obs = :oil_level_obs,
				hoses_fittings = :hoses_fittings,
				hoses_fittings_obs = :hoses_fittings_obs,
				observations = :observations
				");

		$sql->bindValue(":workorder_id", $workorder_id);
		$sql->bindValue(":steering_system", $steering_system);
		$sql->bindValue(":steering_type", $steering_type);
		$sql->bindValue(":steering_system_obs", $steering_system_obs);
		$sql->bindValue(":oil_level", $oil_level);
		$sql->bindValue(":oil_level_obs", $oil_level_obs);
		$sql->bindValue(":hoses_fittings", $hoses_fittings);
		$sql->bindValue(":hoses_fittings_obs", $hoses_fittings_obs);
		$sql->bindValue(":observations", $observations);
		$sql->execute();

		$last_id = $this->db->lastInsertId();
		$id = $workorder_id;

		$sql2 = $this->db->prepare("UPDATE workorder SET steering_system_id = '$last_id' WHERE id = '$id'");
		$sql2->execute();
	}

	public function steeringSystemUpdate(
		$id,
		$steering_system,
		$steering_type,
		$steering_system_obs,
		$oil_level,
		$oil_level_obs,
		$hoses_fittings,
		$hoses_fittings_obs,
		$observations
	) {
		$sql = $this->db->prepare("
			UPDATE
				steering 
			SET
				steering_system = :steering_system,
				steering_type = :steering_type,
				steering_system_obs = :steering_system_obs,
				oil_level = :oil_level,
				oil_level_obs = :oil_level_obs,
				hoses_fittings = :hoses_fittings,
				hoses_fittings_obs = :hoses_fittings_obs,
				observations = :observations
			WHERE
				id = :id
				");

		$sql->bindValue(":id", $id);
		$sql->bindValue(":steering_system", $steering_system);
		$sql->bindValue(":steering_type", $steering_type);
		$sql->bindValue(":steering_system_obs", $steering_system_obs);
		$sql->bindValue(":oil_level", $oil_level);
		$sql->bindValue(":oil_level_obs", $oil_level_obs);
		$sql->bindValue(":hoses_fittings", $hoses_fittings);
		$sql->bindValue(":hoses_fittings_obs", $hoses_fittings_obs);
		$sql->bindValue(":observations", $observations);
		$sql->execute();
	}

	public function fuelInfo($id)
	{
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM fuel_system WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function fuelSystemCreate(
		$workorder_id,
		$pumps_connections,
		$pumps_connections_obs,
		$tank_hoses,
		$tank_hoses_obs,
		$observations
	) {
		$sql = $this->db->prepare("
			INSERT INTO 
				fuel_system 
			SET
				status = 1, 
				workorder_id = :workorder_id,
				pumps_connections = :pumps_connections,
				pumps_connections_obs = :pumps_connections_obs,
				tank_hoses = :tank_hoses,
				tank_hoses_obs = :tank_hoses_obs,
				observations = :observations
				");

		$sql->bindValue(":workorder_id", $workorder_id);
		$sql->bindValue(":pumps_connections", $pumps_connections);
		$sql->bindValue(":pumps_connections_obs", $pumps_connections_obs);
		$sql->bindValue(":tank_hoses", $tank_hoses);
		$sql->bindValue(":tank_hoses_obs", $tank_hoses_obs);
		$sql->bindValue(":observations", $observations);
		$sql->execute();

		$last_id = $this->db->lastInsertId();
		$id = $workorder_id;

		$sql2 = $this->db->prepare("UPDATE workorder SET fuel_system_id = '$last_id' WHERE id = '$id'");
		$sql2->execute();
	}

	public function fuelSystemUpdate(
		$id,
		$pumps_connections,
		$pumps_connections_obs,
		$tank_hoses,
		$tank_hoses_obs,
		$observations
	) {
		$sql = $this->db->prepare("
			UPDATE
				fuel_system 
			SET
				pumps_connections = :pumps_connections,
				pumps_connections_obs = :pumps_connections_obs,
				tank_hoses = :tank_hoses,
				tank_hoses_obs = :tank_hoses_obs,
				observations = :observations
			WHERE 
				id = :id
				");

		$sql->bindValue(":id", $id);
		$sql->bindValue(":pumps_connections", $pumps_connections);
		$sql->bindValue(":pumps_connections_obs", $pumps_connections_obs);
		$sql->bindValue(":tank_hoses", $tank_hoses);
		$sql->bindValue(":tank_hoses_obs", $tank_hoses_obs);
		$sql->bindValue(":observations", $observations);
		$sql->execute();
	}

	public function engineInfo($id)
	{
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM engine WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function engineCreate(
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
	) {
		$sql = $this->db->prepare("
			INSERT INTO 
				engine 
			SET
				status = 1, 
				workorder_id = :workorder_id,
				straps = :straps,
				straps_obs = :straps_obs,
				oil_level = :oil_level,
				oil_level_obs = :oil_level_obs,
				cooling = :cooling,
				cooling_obs = :cooling_obs,
				tank_liquid_level = :tank_liquid_level,
				tank_liquid_level_obs = :tank_liquid_level_obs,
				coolant_status = :coolant_status,
				coolant_status_obs = :coolant_status_obs,
				hoses_coolant = :hoses_coolant,
				hoses_coolant_obs = :hoses_coolant_obs,
				radiator = :radiator,
				radiator_obs = :radiator_obs,
				fan_coolant = :fan_coolant,
				fan_coolant_obs = :fan_coolant_obs,
				water_pump = :water_pump,
				water_pump_obs = :water_pump_obs,
				cables_plugs = :cables_plugs,
				cables_plugs_obs = :cables_plugs_obs,
				transmission_system = :transmission_system,
				transmission_system_type = :transmission_system_type,
				transmission_system_obs = :transmission_system_obs,
				gearbox_oil = :gearbox_oil,
				gearbox_oil_obs = :gearbox_oil_obs,
				hoods = :hoods,
				hoods_obs = :hoods_obs,
				observations = :observations
				");

		$sql->bindValue(":workorder_id", $workorder_id);
		$sql->bindValue(":straps", $straps);
		$sql->bindValue(":straps_obs", $straps_obs);
		$sql->bindValue(":oil_level", $oil_level);
		$sql->bindValue(":oil_level_obs", $oil_level_obs);
		$sql->bindValue(":cooling", $cooling);
		$sql->bindValue(":cooling_obs", $cooling_obs);
		$sql->bindValue(":tank_liquid_level", $tank_liquid_level);
		$sql->bindValue(":tank_liquid_level_obs", $tank_liquid_level_obs);
		$sql->bindValue(":coolant_status", $coolant_status);
		$sql->bindValue(":coolant_status_obs", $coolant_status_obs);
		$sql->bindValue(":hoses_coolant", $hoses_coolant);
		$sql->bindValue(":hoses_coolant_obs", $hoses_coolant_obs);
		$sql->bindValue(":radiator", $radiator);
		$sql->bindValue(":radiator_obs", $radiator_obs);
		$sql->bindValue(":fan_coolant", $fan_coolant);
		$sql->bindValue(":fan_coolant_obs", $fan_coolant_obs);
		$sql->bindValue(":water_pump", $water_pump);
		$sql->bindValue(":water_pump_obs", $water_pump_obs);
		$sql->bindValue(":cables_plugs", $cables_plugs);
		$sql->bindValue(":cables_plugs_obs", $cables_plugs_obs);
		$sql->bindValue(":transmission_system", $transmission_system);
		$sql->bindValue(":transmission_system_type", $transmission_system_type);
		$sql->bindValue(":transmission_system_obs", $transmission_system_obs);
		$sql->bindValue(":gearbox_oil", $gearbox_oil);
		$sql->bindValue(":gearbox_oil_obs", $gearbox_oil_obs);
		$sql->bindValue(":hoods", $hoods);
		$sql->bindValue(":hoods_obs", $hoods_obs);
		$sql->bindValue(":observations", $observations);
		$sql->execute();

		$last_id = $this->db->lastInsertId();
		$id = $workorder_id;

		$sql2 = $this->db->prepare("UPDATE workorder SET engine_id = '$last_id' WHERE id = '$id'");
		$sql2->execute();
	}

	public function engineUpdate(
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
	) {

		$sql = $this->db->prepare("
			UPDATE
				engine 
			SET
				workorder_id = :workorder_id,
				straps = :straps,
				straps_obs = :straps_obs,
				oil_level = :oil_level,
				oil_level_obs = :oil_level_obs,
				cooling = :cooling,
				cooling_obs = :cooling_obs,
				tank_liquid_level = :tank_liquid_level,
				tank_liquid_level_obs = :tank_liquid_level_obs,
				coolant_status = :coolant_status,
				coolant_status_obs = :coolant_status_obs,
				hoses_coolant = :hoses_coolant,
				hoses_coolant_obs = :hoses_coolant_obs,
				radiator = :radiator,
				radiator_obs = :radiator_obs,
				fan_coolant = :fan_coolant,
				fan_coolant_obs = :fan_coolant_obs,
				water_pump = :water_pump,
				water_pump_obs = :water_pump_obs,
				cables_plugs = :cables_plugs,
				cables_plugs_obs = :cables_plugs_obs,
				transmission_system = :transmission_system,
				transmission_system_type = :transmission_system_type,
				transmission_system_obs = :transmission_system_obs,
				gearbox_oil = :gearbox_oil,
				gearbox_oil_obs = :gearbox_oil_obs,
				hoods = :hoods,
				hoods_obs = :hoods_obs,
				observations = :observations
			WHERE
				id = :id
				");

		$sql->bindValue(":id", $id);
		$sql->bindValue(":workorder_id", $workorder_id);
		$sql->bindValue(":straps", $straps);
		$sql->bindValue(":straps_obs", $straps_obs);
		$sql->bindValue(":oil_level", $oil_level);
		$sql->bindValue(":oil_level_obs", $oil_level_obs);
		$sql->bindValue(":cooling", $cooling);
		$sql->bindValue(":cooling_obs", $cooling_obs);
		$sql->bindValue(":tank_liquid_level", $tank_liquid_level);
		$sql->bindValue(":tank_liquid_level_obs", $tank_liquid_level_obs);
		$sql->bindValue(":coolant_status", $coolant_status);
		$sql->bindValue(":coolant_status_obs", $coolant_status_obs);
		$sql->bindValue(":hoses_coolant", $hoses_coolant);
		$sql->bindValue(":hoses_coolant_obs", $hoses_coolant_obs);
		$sql->bindValue(":radiator", $radiator);
		$sql->bindValue(":radiator_obs", $radiator_obs);
		$sql->bindValue(":fan_coolant", $fan_coolant);
		$sql->bindValue(":fan_coolant_obs", $fan_coolant_obs);
		$sql->bindValue(":water_pump", $water_pump);
		$sql->bindValue(":water_pump_obs", $water_pump_obs);
		$sql->bindValue(":cables_plugs", $cables_plugs);
		$sql->bindValue(":cables_plugs_obs", $cables_plugs_obs);
		$sql->bindValue(":transmission_system", $transmission_system);
		$sql->bindValue(":transmission_system_type", $transmission_system_type);
		$sql->bindValue(":transmission_system_obs", $transmission_system_obs);
		$sql->bindValue(":gearbox_oil", $gearbox_oil);
		$sql->bindValue(":gearbox_oil_obs", $gearbox_oil_obs);
		$sql->bindValue(":hoods", $hoods);
		$sql->bindValue(":hoods_obs", $hoods_obs);
		$sql->bindValue(":observations", $observations);
		$sql->execute();
	}

	public function suspensionInfo($id)
	{
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM suspension WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function suspensionCreate(
		$workorder_id,
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
	) {

		$sql = $this->db->prepare("
			INSERT INTO 
				suspension 
			SET
				status = 1, 
				workorder_id = :workorder_id,
				front_shock_absorber = :front_shock_absorber,
				front_shock_absorber_obs = :front_shock_absorber_obs,
				rear_shock_absorber = :rear_shock_absorber,
				rear_shock_absorber_obs = :rear_shock_absorber_obs,
				bushings = :bushings,
				bushings_obs = :bushings_obs,
				suspension_pads = :suspension_pads,
				suspension_pads_obs = :suspension_pads_obs,
				tray_arm = :tray_arm,
				tray_arm_obs = :tray_arm_obs,
				observations = :observations
				");

		$sql->bindValue(":workorder_id", $workorder_id);
		$sql->bindValue(":front_shock_absorber", $front_shock_absorber);
		$sql->bindValue(":front_shock_absorber_obs", $front_shock_absorber_obs);
		$sql->bindValue(":rear_shock_absorber", $rear_shock_absorber);
		$sql->bindValue(":rear_shock_absorber_obs", $rear_shock_absorber_obs);
		$sql->bindValue(":bushings", $bushings);
		$sql->bindValue(":bushings_obs", $bushings_obs);
		$sql->bindValue(":suspension_pads", $suspension_pads);
		$sql->bindValue(":suspension_pads_obs", $suspension_pads_obs);
		$sql->bindValue(":tray_arm", $tray_arm);
		$sql->bindValue(":tray_arm_obs", $tray_arm_obs);
		$sql->bindValue(":observations", $observations);
		$sql->execute();

		$last_id = $this->db->lastInsertId();
		$id = $workorder_id;

		$sql2 = $this->db->prepare("UPDATE workorder SET suspension_id = '$last_id' WHERE id = '$id'");
		$sql2->execute();
	}

	public function suspensionUpdate(
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
	) {

		$sql = $this->db->prepare("
			UPDATE
				suspension 
			SET
				front_shock_absorber = :front_shock_absorber,
				front_shock_absorber_obs = :front_shock_absorber_obs,
				rear_shock_absorber = :rear_shock_absorber,
				rear_shock_absorber_obs = :rear_shock_absorber_obs,
				bushings = :bushings,
				bushings_obs = :bushings_obs,
				suspension_pads = :suspension_pads,
				suspension_pads_obs = :suspension_pads_obs,
				tray_arm = :tray_arm,
				tray_arm_obs = :tray_arm_obs,
				observations = :observations
			WHERE
				id = :id
				");

		$sql->bindValue(":id", $id);
		$sql->bindValue(":front_shock_absorber", $front_shock_absorber);
		$sql->bindValue(":front_shock_absorber_obs", $front_shock_absorber_obs);
		$sql->bindValue(":rear_shock_absorber", $rear_shock_absorber);
		$sql->bindValue(":rear_shock_absorber_obs", $rear_shock_absorber_obs);
		$sql->bindValue(":bushings", $bushings);
		$sql->bindValue(":bushings_obs", $bushings_obs);
		$sql->bindValue(":suspension_pads", $suspension_pads);
		$sql->bindValue(":suspension_pads_obs", $suspension_pads_obs);
		$sql->bindValue(":tray_arm", $tray_arm);
		$sql->bindValue(":tray_arm_obs", $tray_arm_obs);
		$sql->bindValue(":observations", $observations);
		$sql->execute();
	}

	public function generalInfo($id)
	{
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM general_items WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function generalCreate(
		$workorder_id,
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
	) {

		$sql = $this->db->prepare("
			INSERT INTO 
				general_items 
			SET
				status = 1, 
				workorder_id = :workorder_id,
				air_conditioning = :air_conditioning,
				air_conditioning_obs = :air_conditioning_obs,
				windshield_reservoir_level = :windshield_reservoir_level,
				windshield_reservoir_level_obs = :windshield_reservoir_level_obs,
				windscreen_spray = :windscreen_spray,
				windscreen_spray_obs = :windscreen_spray,
				vanes = :vanes,
				vanes_obs = :vanes_obs,
				battery = :battery,
				battery_obs = :battery_obs,
				bumper_core = :bumper_core,
				bumper_core_obs = :bumper_core_obs,
				airbox = :airbox,
				airbox_obs = :airbox_obs,
				exhaust = :exhaust,
				exhaust_obs = :exhaust_obs,
				fixing_cables_wires = :fixing_cables_wires,
				fixing_cables_wires_obs = :fixing_cables_wires_obs,
				electronic_diagnostics = :electronic_diagnostics,
				electronic_diagnostics_obs = :electronic_diagnostics_obs,
				observations = :observations
				");

		$sql->bindValue(":workorder_id", $workorder_id);
		$sql->bindValue(":air_conditioning", $air_conditioning);
		$sql->bindValue(":air_conditioning_obs", $air_conditioning_obs);
		$sql->bindValue(":windshield_reservoir_level", $windshield_reservoir_level);
		$sql->bindValue(":windshield_reservoir_level_obs", $windshield_reservoir_level_obs);
		$sql->bindValue(":windscreen_spray", $windscreen_spray);
		$sql->bindValue(":windscreen_spray_obs", $windscreen_spray_obs);
		$sql->bindValue(":vanes", $vanes);
		$sql->bindValue(":vanes_obs", $vanes_obs);
		$sql->bindValue(":battery", $battery);
		$sql->bindValue(":battery_obs", $battery_obs);
		$sql->bindValue(":bumper_core", $bumper_core);
		$sql->bindValue(":bumper_core_obs", $bumper_core_obs);
		$sql->bindValue(":airbox", $airbox);
		$sql->bindValue(":airbox_obs", $airbox_obs);
		$sql->bindValue(":exhaust", $exhaust);
		$sql->bindValue(":exhaust_obs", $exhaust_obs);
		$sql->bindValue(":fixing_cables_wires", $fixing_cables_wires);
		$sql->bindValue(":fixing_cables_wires_obs", $fixing_cables_wires_obs);
		$sql->bindValue(":electronic_diagnostics", $electronic_diagnostics);
		$sql->bindValue(":electronic_diagnostics_obs", $electronic_diagnostics_obs);
		$sql->bindValue(":observations", $observations);
		$sql->execute();

		$last_id = $this->db->lastInsertId();
		$id = $workorder_id;

		$sql2 = $this->db->prepare("UPDATE workorder SET general_items_id = '$last_id' WHERE id = '$id'");
		$sql2->execute();
	}

	public function generalUpdate(
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
	) {

		$sql = $this->db->prepare("
			UPDATE
				general_items 
			SET
				air_conditioning = :air_conditioning,
				air_conditioning_obs = :air_conditioning_obs,
				windshield_reservoir_level = :windshield_reservoir_level,
				windshield_reservoir_level_obs = :windshield_reservoir_level_obs,
				windscreen_spray = :windscreen_spray,
				windscreen_spray_obs = :windscreen_spray_obs,
				vanes = :vanes,
				vanes_obs = :vanes_obs,
				battery = :battery,
				battery_obs = :battery_obs,
				bumper_core = :bumper_core,
				bumper_core_obs = :bumper_core_obs,
				airbox = :airbox,
				airbox_obs = :airbox_obs,
				exhaust = :exhaust,
				exhaust_obs = :exhaust_obs,
				fixing_cables_wires = :fixing_cables_wires,
				fixing_cables_wires_obs = :fixing_cables_wires_obs,
				electronic_diagnostics = :electronic_diagnostics,
				electronic_diagnostics_obs = :electronic_diagnostics_obs,
				observations = :observations
			WHERE
				id = :id
				");

		$sql->bindValue(":id", $id);
		$sql->bindValue(":air_conditioning", $air_conditioning);
		$sql->bindValue(":air_conditioning_obs", $air_conditioning_obs);
		$sql->bindValue(":windshield_reservoir_level", $windshield_reservoir_level);
		$sql->bindValue(":windshield_reservoir_level_obs", $windshield_reservoir_level_obs);
		$sql->bindValue(":windscreen_spray", $windscreen_spray);
		$sql->bindValue(":windscreen_spray_obs", $windscreen_spray_obs);
		$sql->bindValue(":vanes", $vanes);
		$sql->bindValue(":vanes_obs", $vanes_obs);
		$sql->bindValue(":battery", $battery);
		$sql->bindValue(":battery_obs", $battery_obs);
		$sql->bindValue(":bumper_core", $bumper_core);
		$sql->bindValue(":bumper_core_obs", $bumper_core_obs);
		$sql->bindValue(":airbox", $airbox);
		$sql->bindValue(":airbox_obs", $airbox_obs);
		$sql->bindValue(":exhaust", $exhaust);
		$sql->bindValue(":exhaust_obs", $exhaust_obs);
		$sql->bindValue(":fixing_cables_wires", $fixing_cables_wires);
		$sql->bindValue(":fixing_cables_wires_obs", $fixing_cables_wires_obs);
		$sql->bindValue(":electronic_diagnostics", $electronic_diagnostics);
		$sql->bindValue(":electronic_diagnostics_obs", $electronic_diagnostics_obs);
		$sql->bindValue(":observations", $observations);
		$sql->execute();
	}

	public function lightglassInfo($id)
	{
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM light_glass WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function lightglassCreate(
		$workorder_id,
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
	) {

		$sql = $this->db->prepare("
			INSERT INTO 
				light_glass 
			SET
				status = 1, 
				workorder_id = :workorder_id,
				low_beam_drive = :low_beam_drive,
				low_beam_drive_obs = :low_beam_drive_obs,
				high_beam_drive = :high_beam_drive,
				high_beam_drive_obs = :high_beam_drive_obs,
				flashlights = :flashlights,
				flashlights_obs = :flashlights_obs,
				longrange_headlamp = :longrange_headlamp,
				longrange_headlamp_obs = :longrange_headlamp_obs,
				brake_light = :brake_light,
				brake_light_obs = :brake_light_obs,
				reverse_light = :reverse_light,
				reverse_light_obs = :reverse_light_obs,
				sensors_cameras = :sensors_cameras,
				sensors_cameras_obs = :sensors_cameras_obs,
				dashboard_lights = :dashboard_lights,
				dashboard_lights_obs = :dashboard_lights_obs,
				interior_lighting = :interior_lighting,
				interior_lighting_obs = :interior_lighting_obs,
				internal_light = :internal_light,
				internal_light_obs = :internal_light_obs,
				arrow_light_right = :arrow_light_right,
				arrow_light_right_obs = :arrow_light_right_obs,
				arrow_light_left = :arrow_light_left,
				arrow_light_left_obs = :arrow_light_left_obs,
				warning_flashers = :warning_flashers,
				warning_flashers_obs = :warning_flashers_obs,
				headlight_washing = :headlight_washing,
				headlight_washing_obs = :headlight_washing_obs,
				front_windshield_wiper = :front_windshield_wiper,
				front_windshield_wiper_obs = :front_windshield_wiper_obs,
				rear_windshield_wiper = :rear_windshield_wiper,
				rear_windshield_wiper_obs = :rear_windshield_wiper_obs,
				sunshade = :sunshade,
				sunshade_obs = :sunshade_obs,
				glass_heating = :glass_heating,
				glass_heating_obs = :glass_heating_obs,
				rearview_adjustments = :rearview_adjustments,
				rearview_adjustments_obs = :rearview_adjustments_obs,
				electric_windows = :electric_windows,
				electric_windows_obs = :electric_windows_obs,
				observations = :observations
				");

		$sql->bindValue(":workorder_id", $workorder_id);
		$sql->bindValue(":low_beam_drive", $low_beam_drive);
		$sql->bindValue(":low_beam_drive_obs", $low_beam_drive_obs);
		$sql->bindValue(":high_beam_drive", $high_beam_drive);
		$sql->bindValue(":high_beam_drive_obs", $high_beam_drive_obs);
		$sql->bindValue(":flashlights", $flashlights);
		$sql->bindValue(":flashlights_obs", $flashlights_obs);
		$sql->bindValue(":longrange_headlamp", $longrange_headlamp);
		$sql->bindValue(":longrange_headlamp_obs", $longrange_headlamp_obs);
		$sql->bindValue(":brake_light", $brake_light);
		$sql->bindValue(":brake_light_obs", $brake_light_obs);
		$sql->bindValue(":reverse_light", $reverse_light);
		$sql->bindValue(":reverse_light_obs", $reverse_light_obs);
		$sql->bindValue(":sensors_cameras", $sensors_cameras);
		$sql->bindValue(":sensors_cameras_obs", $sensors_cameras_obs);
		$sql->bindValue(":dashboard_lights", $dashboard_lights);
		$sql->bindValue(":dashboard_lights_obs", $dashboard_lights_obs);
		$sql->bindValue(":interior_lighting", $interior_lighting);
		$sql->bindValue(":interior_lighting_obs", $interior_lighting_obs);
		$sql->bindValue(":internal_light", $internal_light);
		$sql->bindValue(":internal_light_obs", $internal_light_obs);
		$sql->bindValue(":arrow_light_right", $arrow_light_right);
		$sql->bindValue(":arrow_light_right_obs", $arrow_light_right_obs);
		$sql->bindValue(":arrow_light_left", $arrow_light_left);
		$sql->bindValue(":arrow_light_left_obs", $arrow_light_left_obs);
		$sql->bindValue(":warning_flashers", $warning_flashers);
		$sql->bindValue(":warning_flashers_obs", $warning_flashers_obs);
		$sql->bindValue(":headlight_washing", $headlight_washing);
		$sql->bindValue(":headlight_washing_obs", $headlight_washing_obs);
		$sql->bindValue(":front_windshield_wiper", $front_windshield_wiper);
		$sql->bindValue(":front_windshield_wiper_obs", $front_windshield_wiper_obs);
		$sql->bindValue(":rear_windshield_wiper", $rear_windshield_wiper);
		$sql->bindValue(":rear_windshield_wiper_obs", $rear_windshield_wiper_obs);
		$sql->bindValue(":sunshade", $sunshade);
		$sql->bindValue(":sunshade_obs", $sunshade_obs);
		$sql->bindValue(":glass_heating", $glass_heating);
		$sql->bindValue(":glass_heating_obs", $glass_heating_obs);
		$sql->bindValue(":rearview_adjustments", $rearview_adjustments);
		$sql->bindValue(":rearview_adjustments_obs", $rearview_adjustments_obs);
		$sql->bindValue(":electric_windows", $electric_windows);
		$sql->bindValue(":electric_windows_obs", $electric_windows_obs);
		$sql->bindValue(":observations", $observations);
		$sql->execute();

		$last_id = $this->db->lastInsertId();
		$id = $workorder_id;

		$sql2 = $this->db->prepare("UPDATE workorder SET light_glass_id = '$last_id' WHERE id = '$id'");
		$sql2->execute();
	}

	public function lightglassUpdate(
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
	) {

		$sql = $this->db->prepare("
			UPDATE
				light_glass 
			SET
				low_beam_drive = :low_beam_drive,
				low_beam_drive_obs = :low_beam_drive_obs,
				high_beam_drive = :high_beam_drive,
				high_beam_drive_obs = :high_beam_drive_obs,
				flashlights = :flashlights,
				flashlights_obs = :flashlights_obs,
				longrange_headlamp = :longrange_headlamp,
				longrange_headlamp_obs = :longrange_headlamp_obs,
				brake_light = :brake_light,
				brake_light_obs = :brake_light_obs,
				reverse_light = :reverse_light,
				reverse_light_obs = :reverse_light_obs,
				sensors_cameras = :sensors_cameras,
				sensors_cameras_obs = :sensors_cameras_obs,
				dashboard_lights = :dashboard_lights,
				dashboard_lights_obs = :dashboard_lights_obs,
				interior_lighting = :interior_lighting,
				interior_lighting_obs = :interior_lighting_obs,
				internal_light = :internal_light,
				internal_light_obs = :internal_light_obs,
				arrow_light_right = :arrow_light_right,
				arrow_light_right_obs = :arrow_light_right_obs,
				arrow_light_left = :arrow_light_left,
				arrow_light_left_obs = :arrow_light_left_obs,
				warning_flashers = :warning_flashers,
				warning_flashers_obs = :warning_flashers_obs,
				headlight_washing = :headlight_washing,
				headlight_washing_obs = :headlight_washing_obs,
				front_windshield_wiper = :front_windshield_wiper,
				front_windshield_wiper_obs = :front_windshield_wiper_obs,
				rear_windshield_wiper = :rear_windshield_wiper,
				rear_windshield_wiper_obs = :rear_windshield_wiper_obs,
				sunshade = :sunshade,
				sunshade_obs = :sunshade_obs,
				glass_heating = :glass_heating,
				glass_heating_obs = :glass_heating_obs,
				rearview_adjustments = :rearview_adjustments,
				rearview_adjustments_obs = :rearview_adjustments_obs,
				electric_windows = :electric_windows,
				electric_windows_obs = :electric_windows_obs,
				observations = :observations
			WHERE
				id = :id
				");

		$sql->bindValue(":id", $id);
		$sql->bindValue(":low_beam_drive", $low_beam_drive);
		$sql->bindValue(":low_beam_drive_obs", $low_beam_drive_obs);
		$sql->bindValue(":high_beam_drive", $high_beam_drive);
		$sql->bindValue(":high_beam_drive_obs", $high_beam_drive_obs);
		$sql->bindValue(":flashlights", $flashlights);
		$sql->bindValue(":flashlights_obs", $flashlights_obs);
		$sql->bindValue(":longrange_headlamp", $longrange_headlamp);
		$sql->bindValue(":longrange_headlamp_obs", $longrange_headlamp_obs);
		$sql->bindValue(":brake_light", $brake_light);
		$sql->bindValue(":brake_light_obs", $brake_light_obs);
		$sql->bindValue(":reverse_light", $reverse_light);
		$sql->bindValue(":reverse_light_obs", $reverse_light_obs);
		$sql->bindValue(":sensors_cameras", $sensors_cameras);
		$sql->bindValue(":sensors_cameras_obs", $sensors_cameras_obs);
		$sql->bindValue(":dashboard_lights", $dashboard_lights);
		$sql->bindValue(":dashboard_lights_obs", $dashboard_lights_obs);
		$sql->bindValue(":interior_lighting", $interior_lighting);
		$sql->bindValue(":interior_lighting_obs", $interior_lighting_obs);
		$sql->bindValue(":internal_light", $internal_light);
		$sql->bindValue(":internal_light_obs", $internal_light_obs);
		$sql->bindValue(":arrow_light_right", $arrow_light_right);
		$sql->bindValue(":arrow_light_right_obs", $arrow_light_right_obs);
		$sql->bindValue(":arrow_light_left", $arrow_light_left);
		$sql->bindValue(":arrow_light_left_obs", $arrow_light_left_obs);
		$sql->bindValue(":warning_flashers", $warning_flashers);
		$sql->bindValue(":warning_flashers_obs", $warning_flashers_obs);
		$sql->bindValue(":headlight_washing", $headlight_washing);
		$sql->bindValue(":headlight_washing_obs", $headlight_washing_obs);
		$sql->bindValue(":front_windshield_wiper", $front_windshield_wiper);
		$sql->bindValue(":front_windshield_wiper_obs", $front_windshield_wiper_obs);
		$sql->bindValue(":rear_windshield_wiper", $rear_windshield_wiper);
		$sql->bindValue(":rear_windshield_wiper_obs", $rear_windshield_wiper_obs);
		$sql->bindValue(":sunshade", $sunshade);
		$sql->bindValue(":sunshade_obs", $sunshade_obs);
		$sql->bindValue(":glass_heating", $glass_heating);
		$sql->bindValue(":glass_heating_obs", $glass_heating_obs);
		$sql->bindValue(":rearview_adjustments", $rearview_adjustments);
		$sql->bindValue(":rearview_adjustments_obs", $rearview_adjustments_obs);
		$sql->bindValue(":electric_windows", $electric_windows);
		$sql->bindValue(":electric_windows_obs", $electric_windows_obs);
		$sql->bindValue(":observations", $observations);
		$sql->execute();
	}

	public function interiorInfo($id)
	{
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM interior_visual WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function interiorCreate(
		$workorder_id,
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
	) {

		$sql = $this->db->prepare("
			INSERT INTO 
				interior_visual 
			SET
				status = 1, 
				workorder_id = :workorder_id,
				safety_lock = :safety_lock,
				safety_lock_obs = :safety_lock_obs,
				remote_controls = :remote_controls,
				remote_controls_obs = :remote_controls_obs,
				immobilizer = :immobilizer,
				immobilizer_obs = :immobilizer_obs,
				ignition = :ignition,
				ignition_obs = :ignition_obs,
				steering_whell_lock = :steering_whell_lock,
				steering_whell_lock_obs = :steering_whell_lock_obs,
				horn = :horn,
				horn_obs = :horn_obs,
				instrument_panel = :instrument_panel,
				instrument_panel_obs = :instrument_panel_obs,
				multifunction_steering_whell = :multifunction_steering_whell,
				multifunction_steering_whell_obs = :multifunction_steering_whell_obs,
				column_adjustment = :column_adjustment,
				column_adjustment_obs = :column_adjustment_obs,
				airbag = :airbag,
				airbag_obs = :airbag_obs,
				central_diagnostics = :central_diagnostics,
				central_diagnostics_obs = :central_diagnostics_obs,
				hood_opening = :hood_opening,
				hood_opening_obs = :hood_opening_obs,
				panel_controls = :panel_controls,
				panel_controls_obs = :panel_controls_obs,
				onboard_clock = :onboard_clock,
				onboard_clock_obs = :onboard_clock_obs,
				pcm = :pcm,
				pcm_obs = :pcm_obs,
				audio = :audio,
				audio_obs = :audio_obs,
				seat_heating = :seat_heating,
				seat_heating_obs = :seat_heating_obs,
				steering_whell_heating = :steering_whell_heating,
				steering_whell_heating_obs = :steering_whell_heating_obs,
				seat_memory = :seat_memory,
				seat_memory_obs = :seat_memory_obs,
				cup_holder = :cup_holder,
				cup_holder_obs = :cup_holder_obs,
				glove_compartment = :glove_compartment,
				glove_compartment_obs = :glove_compartment_obs,
				belt_adjustment = :belt_adjustment,
				belt_adjustment_obs = :belt_adjustment_obs,
				movable_roof = :movable_roof,
				movable_roof_obs = :movable_roof_obs,
				air_conditioning = :air_conditioning,
				air_conditioning_obs = :air_conditioning_obs,
				cabriolet = :cabriolet,
				cabriolet_obs = :cabriolet_obs,
				locking_lids = :locking_lids,
				locking_lids_obs = :locking_lids_obs,
				ceiling_cladding = :ceiling_cladding,
				ceiling_cladding_obs = :ceiling_cladding_obs,			
				observations = :observations
				");

		$sql->bindValue(":workorder_id", $workorder_id);
		$sql->bindValue(":safety_lock", $safety_lock);
		$sql->bindValue(":safety_lock_obs", $safety_lock_obs);
		$sql->bindValue(":remote_controls", $remote_controls);
		$sql->bindValue(":remote_controls_obs", $remote_controls_obs);
		$sql->bindValue(":immobilizer", $immobilizer);
		$sql->bindValue(":immobilizer_obs", $immobilizer_obs);
		$sql->bindValue(":ignition", $ignition);
		$sql->bindValue(":ignition_obs", $ignition_obs);
		$sql->bindValue(":steering_whell_lock", $steering_whell_lock);
		$sql->bindValue(":steering_whell_lock_obs", $steering_whell_lock_obs);
		$sql->bindValue(":horn", $horn);
		$sql->bindValue(":horn_obs", $horn_obs);
		$sql->bindValue(":instrument_panel", $instrument_panel);
		$sql->bindValue(":instrument_panel_obs", $instrument_panel_obs);
		$sql->bindValue(":multifunction_steering_whell", $multifunction_steering_whell);
		$sql->bindValue(":multifunction_steering_whell_obs", $multifunction_steering_whell_obs);
		$sql->bindValue(":column_adjustment", $column_adjustment);
		$sql->bindValue(":column_adjustment_obs", $column_adjustment_obs);
		$sql->bindValue(":airbag", $airbag);
		$sql->bindValue(":airbag_obs", $airbag_obs);
		$sql->bindValue(":central_diagnostics", $central_diagnostics);
		$sql->bindValue(":central_diagnostics_obs", $central_diagnostics_obs);
		$sql->bindValue(":hood_opening", $hood_opening);
		$sql->bindValue(":hood_opening_obs", $hood_opening_obs);
		$sql->bindValue(":panel_controls", $panel_controls);
		$sql->bindValue(":panel_controls_obs", $panel_controls_obs);
		$sql->bindValue(":onboard_clock", $onboard_clock);
		$sql->bindValue(":onboard_clock_obs", $onboard_clock_obs);
		$sql->bindValue(":pcm", $pcm);
		$sql->bindValue(":pcm_obs", $pcm_obs);
		$sql->bindValue(":audio", $audio);
		$sql->bindValue(":audio_obs", $audio_obs);
		$sql->bindValue(":seat_heating", $seat_heating);
		$sql->bindValue(":seat_heating_obs", $seat_heating_obs);
		$sql->bindValue(":steering_whell_heating", $steering_whell_heating);
		$sql->bindValue(":steering_whell_heating_obs", $steering_whell_heating_obs);
		$sql->bindValue(":seat_memory", $seat_memory);
		$sql->bindValue(":seat_memory_obs", $seat_memory_obs);
		$sql->bindValue(":cup_holder", $cup_holder);
		$sql->bindValue(":cup_holder_obs", $cup_holder_obs);
		$sql->bindValue(":glove_compartment", $glove_compartment);
		$sql->bindValue(":glove_compartment_obs", $glove_compartment_obs);
		$sql->bindValue(":belt_adjustment", $belt_adjustment);
		$sql->bindValue(":belt_adjustment_obs", $belt_adjustment_obs);
		$sql->bindValue(":movable_roof", $movable_roof);
		$sql->bindValue(":movable_roof_obs", $movable_roof_obs);
		$sql->bindValue(":air_conditioning", $air_conditioning);
		$sql->bindValue(":air_conditioning_obs", $air_conditioning_obs);
		$sql->bindValue(":cabriolet", $cabriolet);
		$sql->bindValue(":cabriolet_obs", $cabriolet_obs);
		$sql->bindValue(":locking_lids", $locking_lids);
		$sql->bindValue(":locking_lids_obs", $locking_lids_obs);
		$sql->bindValue(":ceiling_cladding", $ceiling_cladding);
		$sql->bindValue(":ceiling_cladding_obs", $ceiling_cladding_obs);
		$sql->bindValue(":observations", $observations);
		$sql->execute();

		$last_id = $this->db->lastInsertId();
		$id = $workorder_id;

		$sql2 = $this->db->prepare("UPDATE workorder SET interior_visual_id = '$last_id' WHERE id = '$id'");
		$sql2->execute();
	}

	public function interiorUpdate(
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
	) {

		$sql = $this->db->prepare("
		UPDATE
			interior_visual 
		SET
			safety_lock = :safety_lock,
			safety_lock_obs = :safety_lock_obs,
			remote_controls = :remote_controls,
			remote_controls_obs = :remote_controls_obs,
			immobilizer = :immobilizer,
			immobilizer_obs = :immobilizer_obs,
			ignition = :ignition,
			ignition_obs = :ignition_obs,
			steering_whell_lock = :steering_whell_lock,
			steering_whell_lock_obs = :steering_whell_lock_obs,
			horn = :horn,
			horn_obs = :horn_obs,
			instrument_panel = :instrument_panel,
			instrument_panel_obs = :instrument_panel_obs,
			multifunction_steering_whell = :multifunction_steering_whell,
			multifunction_steering_whell_obs = :multifunction_steering_whell_obs,
			column_adjustment = :column_adjustment,
			column_adjustment_obs = :column_adjustment_obs,
			airbag = :airbag,
			airbag_obs = :airbag_obs,
			central_diagnostics = :central_diagnostics,
			central_diagnostics_obs = :central_diagnostics_obs,
			hood_opening = :hood_opening,
			hood_opening_obs = :hood_opening_obs,
			panel_controls = :panel_controls,
			panel_controls_obs = :panel_controls_obs,
			onboard_clock = :onboard_clock,
			onboard_clock_obs = :onboard_clock_obs,
			pcm = :pcm,
			pcm_obs = :pcm_obs,
			audio = :audio,
			audio_obs = :audio_obs,
			seat_heating = :seat_heating,
			seat_heating_obs = :seat_heating_obs,
			steering_whell_heating = :steering_whell_heating,
			steering_whell_heating_obs = :steering_whell_heating_obs,
			seat_memory = :seat_memory,
			seat_memory_obs = :seat_memory_obs,
			cup_holder = :cup_holder,
			cup_holder_obs = :cup_holder_obs,
			glove_compartment = :glove_compartment,
			glove_compartment_obs = :glove_compartment_obs,
			belt_adjustment = :belt_adjustment,
			belt_adjustment_obs = :belt_adjustment_obs,
			movable_roof = :movable_roof,
			movable_roof_obs = :movable_roof_obs,
			air_conditioning = :air_conditioning,
			air_conditioning_obs = :air_conditioning_obs,
			cabriolet = :cabriolet,
			cabriolet_obs = :cabriolet_obs,
			locking_lids = :locking_lids,
			locking_lids_obs = :locking_lids_obs,
			ceiling_cladding = :ceiling_cladding,
			ceiling_cladding_obs = :ceiling_cladding_obs,			
			observations = :observations
		WHERE
			id = :id
			");

		$sql->bindValue(":id", $id);
		$sql->bindValue(":safety_lock", $safety_lock);
		$sql->bindValue(":safety_lock_obs", $safety_lock_obs);
		$sql->bindValue(":remote_controls", $remote_controls);
		$sql->bindValue(":remote_controls_obs", $remote_controls_obs);
		$sql->bindValue(":immobilizer", $immobilizer);
		$sql->bindValue(":immobilizer_obs", $immobilizer_obs);
		$sql->bindValue(":ignition", $ignition);
		$sql->bindValue(":ignition_obs", $ignition_obs);
		$sql->bindValue(":steering_whell_lock", $steering_whell_lock);
		$sql->bindValue(":steering_whell_lock_obs", $steering_whell_lock_obs);
		$sql->bindValue(":horn", $horn);
		$sql->bindValue(":horn_obs", $horn_obs);
		$sql->bindValue(":instrument_panel", $instrument_panel);
		$sql->bindValue(":instrument_panel_obs", $instrument_panel_obs);
		$sql->bindValue(":multifunction_steering_whell", $multifunction_steering_whell);
		$sql->bindValue(":multifunction_steering_whell_obs", $multifunction_steering_whell_obs);
		$sql->bindValue(":column_adjustment", $column_adjustment);
		$sql->bindValue(":column_adjustment_obs", $column_adjustment_obs);
		$sql->bindValue(":airbag", $airbag);
		$sql->bindValue(":airbag_obs", $airbag_obs);
		$sql->bindValue(":central_diagnostics", $central_diagnostics);
		$sql->bindValue(":central_diagnostics_obs", $central_diagnostics_obs);
		$sql->bindValue(":hood_opening", $hood_opening);
		$sql->bindValue(":hood_opening_obs", $hood_opening_obs);
		$sql->bindValue(":panel_controls", $panel_controls);
		$sql->bindValue(":panel_controls_obs", $panel_controls_obs);
		$sql->bindValue(":onboard_clock", $onboard_clock);
		$sql->bindValue(":onboard_clock_obs", $onboard_clock_obs);
		$sql->bindValue(":pcm", $pcm);
		$sql->bindValue(":pcm_obs", $pcm_obs);
		$sql->bindValue(":audio", $audio);
		$sql->bindValue(":audio_obs", $audio_obs);
		$sql->bindValue(":seat_heating", $seat_heating);
		$sql->bindValue(":seat_heating_obs", $seat_heating_obs);
		$sql->bindValue(":steering_whell_heating", $steering_whell_heating);
		$sql->bindValue(":steering_whell_heating_obs", $steering_whell_heating_obs);
		$sql->bindValue(":seat_memory", $seat_memory);
		$sql->bindValue(":seat_memory_obs", $seat_memory_obs);
		$sql->bindValue(":cup_holder", $cup_holder);
		$sql->bindValue(":cup_holder_obs", $cup_holder_obs);
		$sql->bindValue(":glove_compartment", $glove_compartment);
		$sql->bindValue(":glove_compartment_obs", $glove_compartment_obs);
		$sql->bindValue(":belt_adjustment", $belt_adjustment);
		$sql->bindValue(":belt_adjustment_obs", $belt_adjustment_obs);
		$sql->bindValue(":movable_roof", $movable_roof);
		$sql->bindValue(":movable_roof_obs", $movable_roof_obs);
		$sql->bindValue(":air_conditioning", $air_conditioning);
		$sql->bindValue(":air_conditioning_obs", $air_conditioning_obs);
		$sql->bindValue(":cabriolet", $cabriolet);
		$sql->bindValue(":cabriolet_obs", $cabriolet_obs);
		$sql->bindValue(":locking_lids", $locking_lids);
		$sql->bindValue(":locking_lids_obs", $locking_lids_obs);
		$sql->bindValue(":ceiling_cladding", $ceiling_cladding);
		$sql->bindValue(":ceiling_cladding_obs", $ceiling_cladding_obs);
		$sql->bindValue(":observations", $observations);
		$sql->execute();
	}

	public function  getReportPDF($id){
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM workorder WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

		
		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;

	}
}
