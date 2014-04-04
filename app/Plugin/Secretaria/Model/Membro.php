<?php
class Membro extends SecretariaAppModel {
	public $belongsTo = array('Secretaria.Estado', 'Secretaria.Profissao', 'Secretaria.Cargo');
	public $hasMany = array('Secretaria.Relacionamento');
}