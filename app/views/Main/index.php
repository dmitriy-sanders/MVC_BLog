<div class="row">
    <div class="col col-md-3">
        <?php require_once VIEWS . "/parts/categories.php"; ?>
    </div>
    <div class="col-md-9">
        <?php if($hits || $new): ?>
            <table class="table table-hover border">
                <?php if($hits): ?>
                    <thead class="gray-bg">
                    <tr class="text-center">
                        <th scope="col" colspan="2">Product</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Add to Cart</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($hits as $hit): ?>
                        <tr class="text-center">
                            <td>
                                <svg class="bi bi-star-fill" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.612 17.443c-.386.198-.824-.149-.746-.592l.83-4.73-3.522-3.356c-.33-.314-.16-.888.282-.95l4.898-.696 2.184-4.327c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L10 15.187l-4.389 2.256z"/>
                                </svg>
                            </td>
                            <td><?= $hit['name'] ?></td>
                            <td><?= $hit['quantity'] ?></td>
                            <td><?= $hit['price'] ?></td>
                            <td>
                                <a href="#">
                                    <svg class="bi bi-bell-fill" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 18a2 2 0 002-2H8a2 2 0 002 2zm.995-14.901a1 1 0 10-1.99 0A5.002 5.002 0 005 8c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                <?php endif; ?>

                <?php if($new): ?>
                    <thead class="gray-bg">
                    <tr class="text-center">
                        <th scope="col" colspan="2">Product</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col" class="" style="width: 15%">Add to Cart</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($new as $new_prod): ?>
                        <tr class="text-center">
                            <td>
                                <svg class="bi bi-star-fill" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.612 17.443c-.386.198-.824-.149-.746-.592l.83-4.73-3.522-3.356c-.33-.314-.16-.888.282-.95l4.898-.696 2.184-4.327c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L10 15.187l-4.389 2.256z"/>
                                </svg>
                            </td>
                            <td><?= $new_prod['name'] ?></td>
                            <td><?= $new_prod['quantity'] ?></td>
                            <td><?= $new_prod['price'] ?></td>
                            <td>
                                <a href="#">
                                    <svg class="bi bi-bell-fill" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 18a2 2 0 002-2H8a2 2 0 002 2zm.995-14.901a1 1 0 10-1.99 0A5.002 5.002 0 005 8c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                <?php endif; ?>
            </table>
        <?php endif; ?>
    </div>
</div>
