<?php

class FuncionarioTest extends WebTestCase
{
	public $fixtures=array(
		'funcionarios'=>'Funcionario',
	);

	public function testShow()
	{
		$this->open('?r=funcionario/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=funcionario/create');
	}

	public function testUpdate()
	{
		$this->open('?r=funcionario/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=funcionario/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=funcionario/index');
	}

	public function testAdmin()
	{
		$this->open('?r=funcionario/admin');
	}
}
