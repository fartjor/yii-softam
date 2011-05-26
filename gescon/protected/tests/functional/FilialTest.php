<?php

class FilialTest extends WebTestCase
{
	public $fixtures=array(
		'filials'=>'Filial',
	);

	public function testShow()
	{
		$this->open('?r=filial/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=filial/create');
	}

	public function testUpdate()
	{
		$this->open('?r=filial/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=filial/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=filial/index');
	}

	public function testAdmin()
	{
		$this->open('?r=filial/admin');
	}
}
