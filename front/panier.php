<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1>Panier</h1>
                <a id="paypal-button"></a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Qté</th>
                        <th scope="col">Désignation</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $total = 0; ?>
                        <?php if (isset($_SESSION['cart'])) { ?>
                            <?php foreach ($_SESSION['cart'] as $key => $p) { ?>
                                <tr>
                                    <th scope="row"><?= $p['quantity']; ?></th>
                                    <td><?= $p['name']; ?></td>
                                    <td><a href="./index.php/panier/del?id=<?= $key; ?>" class="btn btn-danger text-white">Supprimer</a></td>
                                </tr>
                                <?php $total = $total + $p['quantity'] * 10; ?>
                            <?php } ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
        sandbox: 'changer moi'
    },
    // Customize button (optional)
    locale: 'fr_FR',
    style: {
        size: 'small',
        color: 'gold',
        shape: 'pill',
    },
    // Set up a payment
    payment: function (data, actions) {
        return actions.payment.create({
            transactions: [{
                amount: {
                    total: '<?php echo $total; ?>',
                    currency: 'EUR'
                }
            }]
      });
    },
    // Execute the payment
    onAuthorize: function (data, actions) {
        return actions.payment.execute()
        .then(function () {
            // Show a confirmation message to the buyer
            //window.alert('Thank you for your purchase!');
            
            // Redirect to the payment process page
            window.location = "/index.php/pay?paymentID="+data.paymentID+"&token="+data.paymentToken+"&payerID="+data.payerID+"&pid=<?php echo rand(0, 9); ?>";
        });
    }
}, '#paypal-button');
</script>