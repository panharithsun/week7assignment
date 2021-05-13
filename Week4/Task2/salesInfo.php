<?php

    require("paymentMethods.php");

    class Sale {
        private $totalSale = array();

        public function addSale(PaymentMethod $sale) {
            array_push($this->totalSale, $sale);
        }

        public function saleByMethod(PaymentMethod ...$methods) {
            $saleCount = 0;

            foreach($methods as $method) {
                foreach($this->totalSale as $sale) {
                    if ($sale->method == $method->getMethod()) {
                        $saleCount += 1;
                    };
                }
            }    

            echo "<td> $saleCount </td>";
        }
        
        public function sortSales() {
            usort($this->totalSale, function($a, $b) {

                if($a ->getTotalPrice() == $b->getTotalPrice()) {
                    return 0;
                }

                return $a->getTotalPrice() < $b->getTotalPrice() ? 1 : -1;
            });
        }

        public function displaySalesByOrder() {
            $this->sortSales();
            
            foreach($this->totalSale as $sale) {
                $met = $sale->getMethod();
                $tot = $sale->getTotalPrice();

                echo 
                "
                <tr>
                    <th scope=\"row\">$sale->name</th>
                    <td>$sale->price</td>
                    <td>$sale->quantity</td>
                    <td>$met</td>
                    <td>$tot</td>
                </tr>
                ";
            }
        }
    }

?>  