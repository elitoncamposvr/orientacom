<?php
class Trf2 extends model
{

	public function getList($offset, $user_id)
	{
		$array = array();

		if($user_id == 1){
			$sql = $this->db->prepare("SELECT * FROM trf2 ORDER BY id DESC LIMIT $offset, 100");
			$sql->execute();
		}

		if($user_id != 1){
			$sql = $this->db->prepare("SELECT * FROM trf2 WHERE user_id = '$user_id' ORDER BY id DESC LIMIT $offset, 100");
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

		$sql = $this->db->prepare("SELECT COUNT(*) as sr FROM trf2");
		$sql->execute();
		$row = $sql->fetch();

		$r = $row['sr'];



		return $r;
	}


	public function getInfo($id)
	{
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM trf2 WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function create(
		$ANO_PROPOSTA,
		$NUMERO_DO_PRECATORIO,
		$CREDOR,
		$CPF_CNPJ,
		$ADVOGADO,
		$OAB,
		$REQUERIDO,
		$VALOR,
		$OFICIO,
		$PROCESSO_ORIGINARIO,
		$STATUS,
		$HISTORICO,
		$TEL,
		$CEL,
		$TEL_FIXO,
		$EMAIL,
		$ENDERECO
	) {

		$sql = $this->db->prepare("
		INSERT INTO 
            trf2 
		SET 
			ANO_PROPOSTA = :ANO_PROPOSTA,
			NUMERO_DO_PRECATORIO = :NUMERO_DO_PRECATORIO,
			CREDOR = :CREDOR,
			CPF_CNPJ = :CPF_CNPJ,
			ADVOGADO = :ADVOGADO,
			OAB = :OAB,
			REQUERIDO = :REQUERIDO,
			VALOR = :VALOR,
			OFICIO = :OFICIO,
			PROCESSO_ORIGINARIO = :PROCESSO_ORIGINARIO,
			STATUS = :STATUS,
			HISTORICO = :HISTORICO,
			TEL = :TEL,
			CEL = :CEL,
			TEL_FIXO = :TEL_FIXO,
			EMAIL = :EMAIL,
			ENDERECO = :ENDERECO
		");
		$sql->bindValue(":ANO_PROPOSTA", $ANO_PROPOSTA);
		$sql->bindValue(":NUMERO_DO_PRECATORIO", $NUMERO_DO_PRECATORIO);
		$sql->bindValue(":CREDOR", $CREDOR);
		$sql->bindValue(":CPF_CNPJ", $CPF_CNPJ);
		$sql->bindValue(":ADVOGADO", $ADVOGADO);
		$sql->bindValue(":OAB", $OAB);
		$sql->bindValue(":REQUERIDO", $REQUERIDO);
		$sql->bindValue(":VALOR", $VALOR);
		$sql->bindValue(":OFICIO", $OFICIO);
		$sql->bindValue(":PROCESSO_ORIGINARIO", $PROCESSO_ORIGINARIO);
		$sql->bindValue(":STATUS", $STATUS);
		$sql->bindValue(":HISTORICO", $HISTORICO);
		$sql->bindValue(":TEL", $TEL);
		$sql->bindValue(":CEL", $CEL);
		$sql->bindvalue(":TEL_FIXO", $TEL_FIXO);
		$sql->bindValue(":EMAIL", $EMAIL);
		$sql->bindValue(":ENDERECO", $ENDERECO);
		$sql->execute();
	}

	public function update(
		$ID,
		$ANO_PROPOSTA,
		$NUMERO_DO_PRECATORIO,
		$CREDOR,
		$CPF_CNPJ,
		$ADVOGADO,
		$OAB,
		$REQUERIDO,
		$VALOR,
		$OFICIO,
		$PROCESSO_ORIGINARIO,
		$STATUS,
		$HISTORICO,
		$TEL,
		$CEL,
		$TEL_FIXO,
		$EMAIL,
		$ENDERECO,
		$user_id
	) {

		$sql = $this->db->prepare("
		UPDATE 
            trf2 
		SET  
			ANO_PROPOSTA = :ANO_PROPOSTA,
			NUMERO_DO_PRECATORIO = :NUMERO_DO_PRECATORIO,
			CREDOR = :CREDOR,
			CPF_CNPJ = :CPF_CNPJ,
			ADVOGADO = :ADVOGADO,
			OAB = :OAB,
			REQUERIDO = :REQUERIDO,
			VALOR = :VALOR,
			OFICIO = :OFICIO,
			PROCESSO_ORIGINARIO = :PROCESSO_ORIGINARIO,
			STATUS = :STATUS,
			HISTORICO = :HISTORICO,
			TEL = :TEL,
			CEL = :CEL,
			TEL_FIXO = :TEL_FIXO,
			EMAIL = :EMAIL,
			ENDERECO = :ENDERECO
		WHERE 
			ID = :ID");
		$sql->bindValue(":ID", $ID);
		$sql->bindValue(":ANO_PROPOSTA", $ANO_PROPOSTA);
		$sql->bindValue(":NUMERO_DO_PRECATORIO", $NUMERO_DO_PRECATORIO);
		$sql->bindValue(":CREDOR", $CREDOR);
		$sql->bindValue(":CPF_CNPJ", $CPF_CNPJ);
		$sql->bindValue(":ADVOGADO", $ADVOGADO);
		$sql->bindValue(":OAB", $OAB);
		$sql->bindValue(":REQUERIDO", $REQUERIDO);
		$sql->bindValue(":VALOR", $VALOR);
		$sql->bindValue(":OFICIO", $OFICIO);
		$sql->bindValue(":PROCESSO_ORIGINARIO", $PROCESSO_ORIGINARIO);
		$sql->bindValue(":STATUS", $STATUS);
		$sql->bindValue(":HISTORICO", $HISTORICO);
		$sql->bindValue(":TEL", $TEL);
		$sql->bindValue(":CEL", $CEL);
		$sql->bindvalue(":TEL_FIXO", $TEL_FIXO);
		$sql->bindValue(":EMAIL", $EMAIL);
		$sql->bindValue(":ENDERECO", $ENDERECO);
		$sql->execute();

		if($user_id != 'empty'){
			$sql = $this->db->prepare("UPDATE trf2 SET user_id = '$user_id' WHERE ID = '$ID'");
			$sql->execute();
		}
	}

	public function destroy($id)
	{
		$sql = $this->db->prepare("DELETE FROM trf2 WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();
	}

	public function getSearch($search){
		$array = array();

        $sql = $this->db->prepare("SELECT * FROM trf2 WHERE $search is_active = 0");
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;

	}

	public function settingsEdit($q1, $q2, $q3, $q4, $q5)
	{
		$clientsQuant = 0;
		$sqlClients = $this->db->prepare("SELECT COUNT(*) as sr FROM trf2 WHERE user_id < 1");
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
				$sql = $this->db->prepare("UPDATE trf2 SET user_id = '$user[id]' WHERE user_id < 1 LIMIT 1");
				$sql->execute();
			}
		}

	}
}
