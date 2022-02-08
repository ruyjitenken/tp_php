<?php

function random_invoice_nb() {
	$rand_nb = rand(1000, 2000);
	echo $rand_nb;
}

function randomDate() {
	$datemin = strtotime('1 January 2021');
	$datemax = strtotime('1 January 2022');
	$randomTime = mt_rand($datemin, $datemax);
	
	echo date('m.d.y', $randomTime);
}


// Random


function random_ref() {
	$random_ref = rand(100, 500);
	echo $random_ref;
}

function random_price() {
	$random_price = rand(100, 500);
	echo $random_price.' €';
}

function random_quantity() {
	$random_quantity = rand(1, 50);
	echo $random_quantity;
}












?>