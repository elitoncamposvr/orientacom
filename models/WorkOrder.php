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
		$ano_proposta,
		$numero,
		$ofcreq,
		$proc_orig,
		$requerido,
		$requerentes,
		$advogado,
		$data_conta_liq,
		$vlr_solicitado,
		$vlr_inscritopr,
		$req_bloqueada,
		$situ_requisic,
		$natureza,
		$cpf,
		$assunto,
		$status,
		$historico,
		$tel,
		$cel,
		$tel_fixo,
		$email,
		$endereco,
		$user_id

	) {

		$sql = $this->db->prepare("
		UPDATE 
            trf3 
		SET  
			ano_proposta = :ano_proposta,
			numero = :numero,
			ofcreq = :ofcreq,
			proc_orig = :proc_orig,
			requerido = :requerido,
			requerentes = :requerentes,
			advogado = :advogado,
			data_conta_liq = :data_conta_liq,
			vlr_solicitado = :vlr_solicitado,
			vlr_inscritopr = :vlr_inscritopr,
			req_bloqueada = :req_bloqueada,
			situ_requisic = :situ_requisic,
			natureza = :natureza,
			cpf = :cpf,
			assunto = :assunto,
			status = :status,
			historico = :historico,
			tel = :tel,
			cel = :cel,
			tel_fixo = :tel_fixo,
			email = :email,
			endereco = :endereco
		WHERE 
			id = :id");

		$sql->bindValue(":id", $id);
		$sql->bindValue(":ano_proposta", $ano_proposta);
		$sql->bindValue(":numero", $numero);
		$sql->bindValue(":ofcreq", $ofcreq);
		$sql->bindValue(":proc_orig", $proc_orig);
		$sql->bindValue(":requerido", $requerido);
		$sql->bindValue(":requerentes", $requerentes);
		$sql->bindValue(":advogado", $advogado);
		$sql->bindValue(":data_conta_liq", $data_conta_liq);
		$sql->bindValue(":vlr_solicitado", $vlr_solicitado);
		$sql->bindValue(":vlr_inscritopr", $vlr_inscritopr);
		$sql->bindValue(":req_bloqueada", $req_bloqueada);
		$sql->bindValue(":situ_requisic", $situ_requisic);
		$sql->bindValue(":natureza", $natureza);
		$sql->bindValue(":cpf", $cpf);
		$sql->bindValue(":assunto", $assunto);
		$sql->bindValue(":status", $status);
		$sql->bindValue(":historico", $historico);
		$sql->bindValue(":tel", $tel);
		$sql->bindValue(":cel", $cel);
		$sql->bindValue(":tel_fixo", $tel_fixo);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":endereco", $endereco);
		$sql->execute();


		if ($user_id != 'empty') {
			$sql = $this->db->prepare("UPDATE trf3 SET user_id = '$user_id' WHERE id = '$id'");
			$sql->execute();
		}
	}

	public function getSearch($search)
	{
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM workorder WHERE customer LIKE '%$search%'");
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function destroy($id)
	{
		$sql = $this->db->prepare("DELETE FROM trf3 WHERE id = :id");
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
