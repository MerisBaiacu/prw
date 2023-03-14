<?php
    $linha = readline();
    $valores = explode(' ', $linha);
    $num = intval($valores[0]);
    $quant = intval($valores[1]);

    switch($num){
        case "1": 
        $total = 4.00 * $quant;
        $total = number_format($total, 2, ".","");
        echo "Total: R$ $total\n";
        break;
            case "2": 
            $total = 4.50 * $quant;
            $total = number_format($total, 2, ".","");
            echo "Total: R$ $total\n";
            break;
                case "3": 
                $total = 5.00 * $quant;
                $total = number_format($total, 2, ".","");
                echo "Total: R$ $total\n";
                break;
                    case "4": 
                    $total = 2.00 * $quant;
                    $total = number_format($total, 2, ".","");
                    echo "Total: R$ $total\n";
                    break;
                        case "5": 
                        $total = 1.50 * $quant;
                        $total = number_format($total, 2, ".","");
                        echo "Total: R$ $total\n";
                        break;
    }
?>