<?php
namespace Controller;

include "/xampp/htdocs/Codelab/Traits/ResponseFormatter.php";
include "/xampp/htdocs/Codelab/Controller/Controller.php";

use Traits\ResponseFormatter;

class ProductController extends Controller{ 
    use ResponseFormatter;

    public function __construct(){
        $this->controllerName = "Get All Product"; 
        $this->controllerMethod = "GET";
}
    public function getAllProduct(){
    // Array Dummy Data 
    $dummyData = [
    "Air Mineral",
    "Kebab",
    "Spaghetti",
    "Jus Jambu"
    ];

    $response = [
        "controller_attribute" => $this->getControllerAttribute(), 
        "product" => $dummyData
    ];
    return $this->responseFormatter (200, "Success", $response);
    }
};