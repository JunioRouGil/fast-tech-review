<?php
    /**
    * 
    * Exibe uma lista de links definindo assim, os filtros que serão passados para a API via GET
    */
    echo '<p>Buscar Cervejas com ABV maior que 4%. <a href="http://localhost/api/api.php?filtro=0">AQUI</a></p>';
    echo '<p>Buscar Cervejas com ABV menor que 4%. <a href="http://localhost/api/api.php?filtro=1">AQUI</a></p>';
    echo '<p>Buscar Cervejas com IBU maior que 40 (Forte). <a href="http://localhost/api/api.php?filtro=2">AQUI</a></p>';
    echo '<p>Buscar Cervejas com IBU menor que 35 (Suave). <a href="http://localhost/api/api.php?filtro=3">AQUI</a></p>';
    echo '<p>Buscar Cervejas com EBC maior que 8 (Escura). <a href="http://localhost/api/api.php?filtro=4">AQUI</a></p>';
    echo '<p>Buscar Cervejas com EBC menor que 8 (Clara). <a href="http://localhost/api/api.php?filtro=5">AQUI</a></p>';
    echo '<p>Buscar Cervejas com o nome "Buzz". <a href="http://localhost/api/api.php?filtro=6">AQUI</a></p>';
    
    echo '<h3>Siglas</h3>';
    echo '<p><strong>ABV:</strong> Percentual de alcool da cerveja.</p>';
    echo '<p><strong>IBU:</strong> Escala do amargor da cerveja.</p>';
    echo '<p><strong>EBC:</strong> Utilizada para medir a cor da cerveja.';