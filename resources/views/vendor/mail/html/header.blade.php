<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === "Controle de Tarefas")
<img src="http://localhost:8000/img/tapita.png" class="logo" alt="deu bigode">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
