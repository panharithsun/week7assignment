<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>
</head>
<body>
    <?php   
        require("salesInfo.php");

        $sales = new Sale();

        $sales->addSale(new ABA("Item 1", 5, 1));
        $sales->addSale(new Wing("Item 2", 3, 2));
        $sales->addSale(new ABA("Item 3", 4, 1));
        $sales->addSale(new ABA("Item 4", 5, 1));
        $sales->addSale(new PiPay("Item 5", 6, 1));
        $sales->addSale(new ABA("Item 6", 10, 1));
        $sales->addSale(new Wing("Item 7", 15, 1));
        $sales->addSale(new Wing("Item 8", 2, 1));
    ?>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Item</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Method</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sales->displaySalesByOrder();
            ?>
            </tr>
            <tr class="table-success">
                <td colspan="4">Number of sales by ABA method: </td>
                <?php
                    $sales->saleByMethod(new ABA("temp", 0, 0));
                ?>
            </tr>
            <tr class="table-success">
                <td colspan="4">Number of sales by PiPay and Wing method: </td>
                <?php
                    $sales->saleByMethod(new PiPay("temp", 0, 0), new Wing("temp", 0, 0));
                ?>
            </tr>
        </tbody>
    </table>
</body>
</html>