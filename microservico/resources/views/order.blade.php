<!DOCTYPE html>
<html>
<head>
    <title>Criar Pedido</title>
</head>
<body>
    <h1>Criar Novo Pedido</h1>

    @csrf
    <form id="orderForm" method="POST" action="{{ route('order.store') }}">
        <div>
            <label>Produto:</label>
            <input type="text" name="product" id="product" required>
        </div>
        <div>
            <label>Quantidade:</label>
            <input type="number" name="quantity" id="quantity" required>
        </div>
        <button type="submit">Criar Pedido</button>
    </form>

    <div id="resultado"></div>

</body>
</html>
