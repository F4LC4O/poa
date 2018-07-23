@extends('layouts/reqlayout')


@section('cabecalho')

<script type='text/javascript'>
    var indice =1;
    function addFields(){
        //localiza a div com o ID 'container'. Ela vai conter todos os elementos gerados
        var container = document.getElementById("container");
        
        //cria uma nova div 'amostra1'
        var divAmostra = document.createElement("div");
        divAmostra.name = "amostra" + indice;
        //divamostra.id = "amostra" + indice;
        divAmostra.style = "border-style: solid; border-color: orange"
        container.appendChild(divAmostra);
        
        //***********cria os elementos de formulário**********************************
        //Label Número
        var lblNumero = document.createElement("label");
        lblNumero.textContent = "Número";
        divAmostra.appendChild(lblNumero);

        //input Número
        var inpNumero = document.createElement("input");
        inpNumero.type = "text";
        inpNumero.name = "numero[]";
        inpNumero.size = 3;
        inpNumero.required = true;
        divAmostra.appendChild(inpNumero);

        //label numero_campo
        var lblNumeroCampo = document.createElement("label");
        lblNumeroCampo.textContent = "Número de campo";
        divAmostra.appendChild(lblNumeroCampo);

        //input Número_campo
        var inpNumeroCampo = document.createElement("input");
        inpNumeroCampo.type = "text";
        inpNumeroCampo.name = "numero_campo[]";
        inpNumeroCampo.size = 13;
        inpNumeroCampo.required = true;
        divAmostra.appendChild(inpNumeroCampo);

        //label data_coleta
        var lblDataColeta = document.createElement("label");
        lblDataColeta.textContent = "Data da coleta";
        divAmostra.appendChild(lblDataColeta);

        //input data_coleta
        var inpDataColeta = document.createElement("input");
        inpDataColeta.type = "date";
        inpDataColeta.name = "data_coleta[]";
        inpDataColeta.required = true;
        divAmostra.appendChild(inpDataColeta);

        //label latitude
        var lblLatitude = document.createElement("label");
        lblLatitude.textContent = "Latitude";
        divAmostra.appendChild(lblLatitude);

        //input latitude
        var inpLatitude = document.createElement("input");
        inpLatitude.type = "number";
        inpLatitude.step = 0.00001;
        inpLatitude.name = "latitude[]";
        inpLatitude.required = true;
        divAmostra.appendChild(inpLatitude);

        //label longitude
        var lblLongitude = document.createElement("label");
        lblLongitude.textContent = "Longitude";
        divAmostra.appendChild(lblLongitude);

        //input longitude
        var inpLongitude = document.createElement("input");
        inpLongitude.type = "number";
        inpLongitude.step = 0.00001;
        inpLongitude.name = "longitude[]";
        inpLongitude.required = true;
        divAmostra.appendChild(inpLongitude);

        //label numero_laboratorio
        var lblNumeroLaboratorio = document.createElement("label");
        lblNumeroLaboratorio.textContent = "Número de laboratório";
        divAmostra.appendChild(lblNumeroLaboratorio);

        //input Número_laboratorio
        var inpNumeroLaboratorio = document.createElement("input");
        inpNumeroLaboratorio.type = "text";
        inpNumeroLaboratorio.name = "numero_laboratorio[]";
        inpNumeroLaboratorio.size = 13;
        inpNumeroLaboratorio.required = true;
        divAmostra.appendChild(inpNumeroLaboratorio);        

        //label numero_lote
        var lblNumeroLote = document.createElement("label");
        lblNumeroLote.textContent = "Número de lote";
        divAmostra.appendChild(lblNumeroLote);

        //input Número_lote
        var inpNumeroLote = document.createElement("input");
        inpNumeroLote.type = "text";
        inpNumeroLote.name = "numero_lote[]";
        inpNumeroLote.size = 13;
        inpNumeroLote.required = true;
        divAmostra.appendChild(inpNumeroLote);

        //label data_lote
        var lblDataLote = document.createElement("label");
        lblDataLote.textContent = "Data do lote";
        divAmostra.appendChild(lblDataLote);

        //input data_lote
        var inpDataLote = document.createElement("input");
        inpDataLote.type = "date";
        inpDataLote.name = "data_lote[]";
        inpDataLote.required = true;
        divAmostra.appendChild(inpDataLote);

        //label litotipo
        var lblLitotipo = document.createElement("label");
        lblLitotipo.textContent = "Litotipo";
        divAmostra.appendChild(lblLitotipo);

        //input select litotipo
        var inpLitotipo = document.createElement("select");
        inpLitotipo.name = "litotipo[]";
        divAmostra.appendChild(inpLitotipo);

        //preenche combo de litotipos
        var arrayLito = <?php echo json_encode($litotipos); ?>; //array passado pelo controlador. essa linha é usada para passar ele pro javascript
        //alert(JSON.stringify(arrayLito));
        for(var j=0; j<arrayLito.length; j++){
            var opt = document.createElement("option");
            opt.value = arrayLito[j].id;
            opt.text = arrayLito[j].nome_litotipo;
            inpLitotipo.appendChild(opt);
        }

        //adiciona o link para remover
        var linkRemove = document.createElement('a');
        linkRemove.href="#";
        linkRemove.onclick=function(){ this.parentElement.remove(); };
        linkRemove.innerHTML= "Remover amostra";
        divAmostra.appendChild(linkRemove);
        
        indice++;
    }
</script>

@endsection



@section('conteudo')

    <h1>Nova requisição</h1>

    <form method="post" action={{route('reqlab.store')}}>
        @csrf
        <label>Nome do projeto</label>
        <input type="text" name="nome_projeto" placeholder="Nome do projeto" required>
        <br>

        <label>Centro de custo</label>
        <input type="text" name="centro_custo" placeholder="Centro de custo" required>
        <br>

        <label>Material</label>
        <select name="fk_material">
            @foreach($materials as $mat)
                <option value="{{$mat->id}}">{{$mat->nome_material}}</option>
            @endforeach
        </select>
        <br>

        <label>Petrografia</label>
        <select name="fk_petrografia">
            @foreach($petrografias as $pet)
                <option value="{{$pet->id}}">{{$pet->nome_petrografia}}</option>
            @endforeach
        </select>
        <br>

        <label>Geoquímica</label>
        <select name="fk_geoquimica">
            @foreach($geoquimicas as $geo)
                <option value="{{$geo->id}}">{{$geo->nome_geoquimica}}</option>
            @endforeach
        </select>
        <br>

        <label>Finalidade</label>
        <select name="fk_finalidade">
            @foreach($finalidades as $fin)
                <option value="{{$fin->id}}">{{$fin->nome_finalidade}}</option>
            @endforeach
        </select>
        <br>

        <a href="#" id="filldetails" onclick="addFields()">Adiciona amostra</a>

        <div id="container" style="border-style: dashed"> </div>

        <button>Enviar</button>
    </form>

    
    

@endsection