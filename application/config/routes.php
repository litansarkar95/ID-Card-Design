<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'authentication';
$route['404_override'] = 'page_not_found';
$route['translate_uri_dashes'] = FALSE;
$route["logout"] = "authentication/logout"; 


// $route['userform/:any'] = "userform/index";
// $route['userformsubmit/:any'] = 'userform/userformsubmit';
 $route['thanks'] = 'userform/thanks';
 $route['import'] = 'import';
 $route["p-form/(:any)"] = "profile/details/$1";

define('EXT', '.php');
require_once( BASEPATH . 'database/DB' . EXT );
$db = & DB();

$db->select("org_fields.*, organizations.slug org_slug")->from("org_fields");
$db->join("organizations", "org_fields.organization_id = organizations.id");
$result = $db->get()->result();
foreach ($result as $value) {
    $route["up-form/(:num)"] = "Userform/index/$1";
    $route["userformsubmit"."/".ReplaceR($value->org_slug)] = "userForm/userformsubmit";
}


function ReplaceR($data) {
    $data = trim($data);
    $data = str_replace("'", "", $data);
    $data = str_replace("!", "", $data);
    $data = str_replace("@", "", $data);
    $data = str_replace("#", "", $data);
    $data = str_replace("$", "", $data);
    $data = str_replace("%", "", $data);
    $data = str_replace("^", "", $data);
    $data = str_replace("&", "", $data);
    $data = str_replace("*", "", $data);
    $data = str_replace("(", "", $data);
    $data = str_replace(")", "", $data);
    $data = str_replace("+", "", $data);
    $data = str_replace("=", "", $data);
    $data = str_replace(",", "", $data);
    $data = str_replace(":", "", $data);
    $data = str_replace(";", "", $data);
    $data = str_replace("|", "", $data);
    $data = str_replace("'", "", $data);
    $data = str_replace('"', "", $data);
    $data = str_replace("?", "", $data);
    $data = str_replace("'", "", $data);
    $data = str_replace(".", "-", $data);
    $data = strtolower(str_replace("  ", "-", $data));
    $data = strtolower(str_replace(" ", "-", $data));
    $data = strtolower(str_replace("__", "-", $data));
    $data = strtolower(str_replace("_", "-", $data));
    $data = strtolower(str_replace("--", "-", $data));
    return $data;
 }