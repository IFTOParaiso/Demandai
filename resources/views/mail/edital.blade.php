<p style="color:#333">
        Olá <b>{{$nome}}</b> temos uma boa notícia para você, foi lançado um novo edital que pode ser do seu interesse.<br><br>
        <b>{{$title}}</b><br>
        <i>{{$descricao}}</i><br><br>
        Só lembrando que as inscrições encerram dia <b>{{date('d/m/Y', strtotime($data))}}.</b><br>
        Mais informações você encontra no link abaixo:<br>
        {{$link}}<br>
</p>
