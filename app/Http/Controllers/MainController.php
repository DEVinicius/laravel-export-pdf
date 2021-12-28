<?php
namespace App\Http\Controllers;

use PDF;

class MainController extends Controller {
    public function index() {
        $data = [
            "shopkeeper" => [
                "name" => "Agavi Materiais Elétricos",
                "email" => "vinicius.lojista@mailinator.com",
                "phone" => "(11) 123124-036124127"
            ],
            "name" => "Vinicius Pereira de Oliveira",
            "email" => "vinicius.teste@mailinator.com",
            "phone" => "(11)9 12314-7081",
            "address" => "Rua Transisito Guerra, 51 - Jd. Silva [ CEP: 12352-400 ]",
            "products" => [
                [
                    "quantity" => "2",
                    "description" => "Garrafa Agua mineral Sem Gas 1L",
                    "price" => "5,00",
                    "total" => "10,00"
                ],
                [
                    "quantity" => "2",
                    "description" => "Sacos de cimento",
                    "price" => "25,00",
                    "total" => "50,00"
                ],
                [
                    "quantity" => "1",
                    "description" => "Colher de Pedreiro",
                    "price" => "25,00",
                    "total" => "25,00"
                ]
            ],
            "total_buy" => "85,00",
            "date" => "12/12/2021",
            "hour" => "12:20",
            "payment" => [
                "paymentType" => "Cartão",
                "flag" => "MasterCard",
                "paymentCondition" => "A vista",
                "status" => "PAGO"
            ],
            "sellItemId" => "66124125262626"
        ];
        
        view()->share('index',$data);
        $pdf = PDF::loadView("index", $data);
        return $pdf->stream();
    
        return view('index', $data);
    }
}