@extends('adminlte::page')

@section('title', 'Inventario de Depresión de Beck')

@section('content_header')
    <h1>Inventario de Depresión de Beck (BDI)</h1>
@stop

@section('content')
    <p> Este cuestionario consta de 21 grupos de afirmaciones. Por favor, lea con atención cada uno de ellos 
        cuidadosamente. Luego elija uno de cada grupo, el que mejor describa el modo como se ha sentido <strong>las 
        últimas dos semanas, incluyendo el día de hoy</strong>. Si varios enunciados de un mismo grupo le parecen 
        igualmente apropiados, marque el número más alto.
    </p>
    <!-- action="{{ route('guardar_respuestas') }}" -->
    <form action="{{}}" method="post">
        @csrf
        <ol>
            <li>
                <p>Tristeza:</p>
                <input type="radio" name="tristeza" value="0" id="tristeza0">
                <label for="tristeza0">No me siento triste.</label><br>

                <input type="radio" name="tristeza" value="1" id="tristeza1">
                <label for="tristeza1">Me siento triste gran parte del tiempo.</label><br>

                <input type="radio" name="tristeza" value="2" id="tristeza2">
                <label for="tristeza2">Me siento triste todo el tiempo.</label><br>

                <input type="radio" name="tristeza" value="3" id="tristeza3">
                <label for="tristeza3">Me siento tan triste o soy tan infeliz que no puedo soportarlo.</label>
            </li>

            <li>
                <p>Pesimismo:</p>
                <input type="radio" name="pesimismo" value="0" id="pesimismo0">
                <label for="pesimismo0">No estoy desalentado respecto del mi futuro.</label><br>

                <input type="radio" name="pesimismo" value="1" id="pesimismo1">
                <label for="pesimismo1">Me siento más desalentado respecto de mi futuro que lo que solía estarlo.</label><br>

                <input type="radio" name="pesimismo" value="2" id="pesimismo2">
                <label for="pesimismo2">No espero que las cosas funcionen para mi.</label><br>

                <input type="radio" name="pesimismo" value="3" id="pesimismo3">
                <label for="pesimismo3">Siento que no hay esperanza para mi futuro y que sólo puede empeorar.</label>
            </li>

            <li>
                <p>Fracaso:</p>
                <input type="radio" name="fracaso" value="0" id="fracaso0">
                <label for="fracaso0">No me siento como un fracasado.</label><br>

                <input type="radio" name="fracaso" value="1" id="fracaso1">
                <label for="fracaso1">He fracasado más de lo que hubiera debido.</label><br>

                <input type="radio" name="fracaso" value="2" id="fracaso2">
                <label for="fracaso2">Cuando miro hacia atrás, veo muchos fracasos.</label><br>

                <input type="radio" name="fracaso" value="3" id="fracaso3">
                <label for="fracaso3">Siento que como persona soy un fracaso total.</label>
            </li>

            <li>
                <p>Pérdida de Placer:</p>
                <input type="radio" name="perdida_placer" value="0" id="perdida_placer0">
                <label for="perdida_placer0">Obtengo tanto placer como siempre por las cosas de las que disfruto.</label><br>

                <input type="radio" name="perdida_placer" value="1" id="perdida_placer1">
                <label for="perdida_placer1">No disfruto tanto de las cosas como solía hacerlo.</label><br>

                <input type="radio" name="perdida_placer" value="2" id="perdida_placer2">
                <label for="perdida_placer2">Obtengo muy poco placer de las cosas que solía disfrutar.</label><br>

                <input type="radio" name="perdida_placer" value="3" id="perdida_placer3">
                <label for="perdida_placer3">No puedo obtener ningún placer de las cosas de las que solía disfrutar.</label>
            </li>

            <li>
                <p>Sentimientos de Culpa:</p>
                <input type="radio" name="culpa" value="0" id="culpa0">
                <label for="culpa0">No me siento particularmente culpable.</label><br>

                <input type="radio" name="culpa" value="1" id="culpa1">
                <label for="culpa1">Me siento culpable respecto de varias cosas que he hecho o que debería haber hecho.</label><br>

                <input type="radio" name="culpa" value="2" id="culpa2">
                <label for "culpa2">Me siento bastante culpable la mayor parte del tiempo.</label><br>

                <input type="radio" name="culpa" value="3" id="culpa3">
                <label for="culpa3">Me siento culpable todo el tiempo.</label>
            </li>
        </ol>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop