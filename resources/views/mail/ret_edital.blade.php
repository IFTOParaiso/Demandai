<p style="color:#333">
    Olá <b>{{$nome}}</b> temos uma notícia para você sobre o edital:<br><br>
    <b>{{$title}}</b><br>
    <i>{{$descricao}}</i><br><br>
    Pois é ele foi <b><u><i>RETIFICADO</i></u></b>, e pode ser do seu interesse dar uma olhada.<br>
    Só lembrando que as inscrições encerram dia <b>{{date('d/m/Y', strtotime($data))}}.</b><br>
    Mais informações você encontra no link abaixo:<br>
    {{$link}}<br>
</p>
