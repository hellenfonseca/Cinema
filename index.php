<script type="text/javascript">

window.onload = function() {  
    var formularios = document.getElementsByClassName("formularios");

    for(var i=0; i<formularios.length; i++)
        formularios[i].style.display = "none";

    var diretor = document.getElementsByClassName("diretor");

    for(var i=0; i<diretor.length; i++)
        diretor[i].onclick = function(event) {

            var target;
            if (!event)
                event = window.event; //para o IE
        
            if (event.srcElement)
                target = event.srcElement; //para o IE
            else {
                target = event.target;
                if (target.nodeType == 3) //para o Safari
                    target = target.parentNode;
            }
    
        for(var j=0; j<formularios.length; j++) {
            if(formularios[j].id != target.value)
                formularios[j].style.display = "none";
            else
                formularios[j].style.display = "block";
        }

    }
}
</script>


<h1>Database Diretor</h1>
<h2>Escolha uma opção</h2>
<form>
    <input name="diretor" class="diretor" type="radio" value="create" /> Inserir
    <input name="diretor" class="diretor" type="radio" value="read" /> Consultar Todos
    <input name="diretor" class="diretor" type="radio" value="update" /> Atualizar
    <input name="diretor" class="diretor" type="radio" value="delete" /> Remover
</form>


<div id="create" class="formularios">
    <form action="dashboard.php" method="POST">
    Nome<br><input type="text" name="nome"/><br>
    Endereço<br><input type="text" name="endereco"/><br>
    Telefone<br><input type="text" name="telefone"/><br>
    Email<br><input type="text" name="email"/><br><br>
    <input type="submit" name="create"/>
    <input type="reset" />
    </form>
</div>

<div id="read" class="formularios">
    <table>
    <thead>
        <tr>
            <td><strong>ID</td>
            <td><strong>Nome</td>
            <td><strong>Endereço</td>
            <td><strong>Telefone</td>
            <td><strong>Email</td>
        </tr>
    </thead>
    </tbody>
        <?php
        require "CRUD_Diretor.php";
        $diretores = new CRUD_Diretor();
        $query = $diretores->getAll();

        for ($i=0; $i < count($query); $i++) {
        ?>
        <tr>
            <td><?= $query[$i]->getId() ?></td>
            <td><?= $query[$i]->getNome() ?></td>
            <td><?= $query[$i]->getEndereco() ?></td>
            <td><?= $query[$i]->getTelefone() ?></td>
            <td><?= $query[$i]->getEmail() ?></td>
            <br>
        </tr>
        <?php
        }
        ?>
    </tbody>
    </table>
</div>

<div id="update" class="formularios">
    <form action="dashboard.php" method="POST">
        ID<br><input type="number" name="id"/><br>
        Nome<br><input type="text" name="nome"/><br>
        Endereço<br><input type="text" name="endereco"/><br>
        Telefone<br><input type="text" name="telefone"/><br>
        Email<br><input type="text" name="email"/><br><br>
        <input type="submit" name="update"/>
        <input type="reset" />
    </form>
</div>

<div id="delete" class="formularios">
    <form action="dashboard.php" method="POST">
        ID<br><input type="number" name="id"/><br><br>
        <input type="submit" name="delete" />
        <input type="reset" />
    </form>
</div>