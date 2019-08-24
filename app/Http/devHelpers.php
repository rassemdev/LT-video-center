<?php

function generateRandomString($length = 12)
{
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';

	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}

function getFileName($fielData)
{
	$productImage = $fielData;
	$extension = $productImage->getClientOriginalExtension();
	$randomName = generateRandomString();
	$fileName = $randomName.'.'.$extension;
	return $fileName;
}

function pr($data = array())
{
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}
function prd($data = array())
{
	echo "<pre>";
	print_r($data);
	echo "</pre>";die;
}
function prta($data = array())
{
	echo "<pre>";
	print_r($data->toArray());
	echo "</pre>";
}
