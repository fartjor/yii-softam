<?php

class TelefoneTest extends WebTestCase
{
	public $fixtures=array(
		'telefones'=>'Telefone',
	);

	public function testShow()
	{
		$this->open('?r=telefone/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=telefone/create');
	}

	public function testUpdate()
	{
		$this->open('?r=telefone/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=telefone/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=telefone/index');
	}

	public function testAdmin()
	{
		$this->open('?r=telefone/admin');
	}
}
