<?php

class Tipo_processoTest extends WebTestCase
{
	public $fixtures=array(
		'tipo_processos'=>'Tipo_processo',
	);

	public function testShow()
	{
		$this->open('?r=tipo_processo/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=tipo_processo/create');
	}

	public function testUpdate()
	{
		$this->open('?r=tipo_processo/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=tipo_processo/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=tipo_processo/index');
	}

	public function testAdmin()
	{
		$this->open('?r=tipo_processo/admin');
	}
}
