<link rel="stylesheet" href="../styles/style.css">
<link rel="stylesheet" href="../styles/media.query.css">

<div class="agendamento">
    <h1>Valor total:</h1>
    <?php 
        if($_POST){
            $servico = $_POST["servico"];

            switch($servico){
                case "trocaDeOleo":
                    echo "<p id='preco'>R$ 150,00</p>";
                break;
                case "alinhamento":
                    echo "<p id='preco'>R$ 100,00</p>";
                break;
                case "balanceamento":
                    echo "<p id='preco'>R$ 80,00</p>";
                break;
                case "revisaoGeral":
                    echo "<p id='preco'>R$ 300,00</p>";
                break;
                default:
                    echo "<p id='preco'>Serviço inexistente.</p>";
                break;
            }
        }
    ?>
</div>