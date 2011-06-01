<?php

class ProcessoTest extends WebTestCase
{
	public $fixtures=array(
		'processos'=>'Processo',
	);

	public function testShow()
	{
		$this->open('?r=processo/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=processo/create');
	}

	public function testUpdate()
	{
		$this->open('?r=processo/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=processo/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=processo/index');
	}

	public function testAdmin()
	{
		$this->open('?r=processo/admin');
	}
}
