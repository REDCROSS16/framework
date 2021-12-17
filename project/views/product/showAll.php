<table class="table">
    <tr>
        <th>Продукт</th>
        <th>Категория</th>
        <th>Цена</th>
        <th>количество</th>
    </tr>

    <?php foreach ($products as $product) {
        echo "<tr>
            <td>{$product['name']}</td>
            <td>{$product['category']}</td>
            <td>{$product['price']}</td>
            <td>{$product['quantity']}</td>
        </tr>";
    }
    ?>
</table>