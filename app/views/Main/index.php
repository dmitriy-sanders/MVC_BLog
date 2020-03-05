
<?php if($hits || $new): ?>
    <table class="table table-hover border">
        <?php if($hits): ?>
            <thead class="gray-bg">
            <tr class="text-center">
                <th scope="col" colspan="2">Товар</th>
                <th scope="col">Кол-во</th>
                <th scope="col">Цена</th>
                <th scope="col">В корзину</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($hits as $hit): ?>
                <tr class="text-center table-bordered">
                    <td>
                        <img src="https://img.icons8.com/nolan/24/important-mail.png">
                    </td>
                    <td><?= $hit['name'] ?></td>
                    <td><?= $hit['quantity'] ?></td>
                    <td><?= $hit['price'] ?></td>
                    <td>
                        <a href="/cart?add=<?= $hit['id'] ?>">
                            <img src="https://img.icons8.com/material-outlined/24/000000/add-basket.png">
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        <?php endif; ?>

        <?php if($new): ?>
            <thead class="gray-bg">
            <tr class="text-center">
                <th scope="col" colspan="2">Товар</th>
                <th scope="col">Кол-во</th>
                <th scope="col">Цена</th>
                <th scope="col" class="" style="width: 15%">В корзину</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($new as $new_prod): ?>
                <tr class="text-center table-bordered">
                    <td>
                        <img src="https://img.icons8.com/nolan/24/important-mail.png">
                    </td>
                    <td><?= $new_prod['name'] ?></td>
                    <td><?= $new_prod['quantity'] ?></td>
                    <td><?= $new_prod['price'] ?></td>
                    <td>
                        <a href="/cart?add=<?= $new_prod['id'] ?>">
                            <img src="https://img.icons8.com/material-outlined/24/000000/add-basket.png">
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        <?php endif; ?>
    </table>
<?php endif; ?>

