<html>
    <head>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            header {
                width: 100%;
                position: relative;
            }
            
            header .haymay-description {
                position: relative;
                left: 100px;
            }

            header .haymay-description img {
                position: absolute;
                top: 10px;
                left: 1rem;
                height: 6rem;
                width: 6rem;

                margin: 0 0 1rem 0;
            }


            header .haymay-description .description {
                position: absolute;
                top: 120px;
            }

            header .shopkeeper-description {
                position: absolute;
                left: 450px;
                top: 120px;
            }


            header .shopkeeper-description h2 {
                margin: 0 0 1rem 0;
            }

            main {
                position: relative;
                top: 250px;
                left: 100px;
            }

            main .consumer-data .data{

                position: relative;
            }

            main .consumer-data .data .box {
                border: 1px solid black;
                height: 2.5rem;
                width: 70%;

                padding: 0.25rem;

                position: relative;
            }

            main table {
                margin: 2rem 0 0 0;
                width: 70%;
            }

            main table thead th {
                height: 3rem;
                text-align: center;
                border: 1px solid black;
                background: #B50B40;
                color: white;
            }

            main table tbody td {
                height: 3rem;
                text-align: center;
                border: 1px solid black;
                color: black;
            }

            main .product-items {
                position: relative;
            }

            main .product-items .table-header {

                position: relative;
            }

            main .product-items .table-header .box-table {
                text-align: center;
                height: 3rem;

                position: relative;

                background: #B50B40;
                color: white;
            }

            main .description {
                margin: 1.5rem 0 0 0;
                position: relative;

                width: 70%;
            }

            main .description .row {
                position: relative;

            }

            main .description .row .box {
                position: relative;
                border: 1px solid black;
            }

            .height-3 {
                height: 3rem;
            }

            main .description .row .box .payment-title {
                position: relative;


                height: 2rem;
                border-bottom: 1px solid black;

                color: white;
                background: #B50B40;
            }

            main .description .row .box .payment-main {
                position: relative;
            }

            main .description .row .box .payment-main .type {
                align-items: center;
            }

            .space-around {
                justify-content: space-around;
            }

            .border-top-1 {
                border-top: 1px solid black;
            }

            .padding-1 {
                padding: 0.5rem;
            }

            footer {
                position: relative;
            }

            footer .slogan {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;

                background: #B50B40;
                color: white;

                height: 4rem;
            }

            footer .file-number {
                display: flex;
                flex-direction: row;
                justify-content: flex-end;

                margin: 1rem 0 0 0;
            }
        </style>
    </head>
    <body>
        <header>
            <div class="haymay-description">
                <img src="https://cdn.pixabay.com/photo/2016/11/29/03/44/animal-1867125_960_720.jpg" alt="Logo">

                <div class="description">
                    <h3>pdf.com.br</h3>
                    <p>contato@pdf.com.br</p>
                    <p>(65) 99252-4116</p>
                    <p>São Paulo - SP</p>
                </div>
            </div>

            <div class="shopkeeper-description">
                <h2>{{$shopkeeper["name"]}}</h2>
                <p>Email: {{$shopkeeper["email"]}}</p>
                <p>Telefone: {{$shopkeeper["phone"]}}</p>
            </div>
        </header>

        <main>
            <div class="consumer-data">
                <h2>Dados do Consumidor</h2>
                <div class="data">
                    <div class="box">
                        <h5>Nome: </h5>
                        <p>{{$name}}</p>
                    </div>
                    <div class="box">
                        <h5>Email: </h5>
                        <p>{{$email}}</p>
                    </div>
                    <div class="box">
                        <h5>Telefone: </h5>
                        <p>{{$phone}}</p>
                    </div>
                    <div class="box">
                        <h5>Endereço de Entrega: </h5>
                        <p>{{$address}}</p>
                    </div>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Quantidade</th>
                        <th>Descrição</th>
                        <th>Preço Unitário</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>
                                <p>{{$product["quantity"]}}</p>
                            </td>
                            <td>
                                <p>{{$product["description"]}}</p>
                            </td>
                            <td>
                                <p>R$ {{$product["price"]}}</p>
                            </td>
                            <td>
                                <p>R$ {{$product["total"]}}</p>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td>Total</td>
                        <td>R$ {{$total_buy}}</td>
                    </tr>
                </tfoot>
            </table>
            <div class="description">
                <div class="row">
                    <div class="box height-3 padding-1">
                        <h4>Assinatura: </h4>
                    </div>
                    <div class="box">
                        <div class="payment-title padding-1">
                            <h4>Pagamento</h4>
                        </div>
                        <div class="payment-main padding-1">
                            <div class="payment-type">
                                <h3>Forma de Pagamento</h3>
                            </div>
                            <div class="type">
                                <p>
                                    {{$payment["paymentType"]}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="box padding-1">
                        <h4>Data: {{$date}}</h4>
                    </div>
                    <div class="box padding-1">
                        <h4>Hora: {{$hour}}</h4>
                    </div>
                    <div class="box row space-around padding-1">
                        <div class="flag">
                            <h3>Bandeira do Cartão</h3>
                        </div>
                        <div class="result">
                            <p>{{$payment["flag"]}}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="box">
                        <div class="row space-around padding-1">
                            <div class="condition">
                                <h3>Condições de Pagamento: </h3>
                            </div>
                            <div class="result">
                                <p>{{$payment["paymentCondition"]}}</p>
                            </div>
                        </div>
                        <div class="row space-around border-top-1 padding-1">
                            <div class="status-text">
                                <h3>Status</h3>
                            </div>
                            <div class="result">
                                <p>{{$payment["status"]}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="file-number">
                    Romaneio nº {{$sellItemId}}
                </div>
                <footer>
                    <div class="slogan">
                        <h3>Haymay - Um Jeito Diferente de Comprar!</h3>
                        <h5>Obrigado pela Confiança</h5>
                    </div>
                </footer>
            </div>

        </main>
    </body>
</html>