<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Inventory extends Eloquent
{
	
	protected $table = 'inventory_receipts';
	public $timestamps = false;


}