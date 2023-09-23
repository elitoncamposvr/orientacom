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

	public function settingsEdit($q1, $q2, $q3, $q4, $q5)
	{
		$clientsQuant = 0;
		$sqlClients = $this->db->prepare("SELECT COUNT(*) as sr FROM trf3 WHERE user_id < 1");
		$sqlClients->execute();
		$row = $sqlClients->fetch();
		$clientsQuant = $row['sr'];

		$usersQuant = 0;
		$sqlUsers = $this->db->prepare("SELECT COUNT(*) as sr FROM users WHERE id_group = '$q1' OR id_group = '$q2' OR id_group = '$q3' OR id_group = '$q4' OR id_group = '$q5'");
		$sqlUsers->execute();
		$row = $sqlUsers->fetch();
		$usersQuant = $row['sr'];

		$usersArray = array();
		$sqlUsersArray = $this->db->prepare("SELECT * FROM users WHERE id_group = '$q1' OR id_group = '$q2' OR id_group = '$q3' OR id_group = '$q4' OR id_group = '$q5'");
		$sqlUsersArray->execute();
		if ($sqlUsersArray->rowCount() > 0) {
			$usersArray = $sqlUsersArray->fetchAll();
		}

		$clients_usuarios = $clientsQuant / $usersQuant;

		foreach ($usersArray as $user) {

			for ($i = 0; $i < $clients_usuarios; $i++) {
				$sql = $this->db->prepare("UPDATE trf3 SET user_id = '$user[id]' WHERE user_id < 1 LIMIT 1");
				$sql->execute();
			}
		}
	}
}
