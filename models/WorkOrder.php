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
}
