<p style="color:#333">
    {{--Olá {{$nome}},<br>--}}
    {{--O Edital {{$title}}<br>--}}
    {{--Falando sobre:<br>--}}
    {{--{{$descricao}}<br>--}}
    {{--Mais informações no Link:{{$link}}<br>--}}
    {{--{{$data}}--}}
    Olá {{$nome}} temos uma notícia para você sobre o edital que foi retificado,que pode ser do seu interesse.<br>
    <b><i>{{$title}}</i></b><br>
    {{$descricao}}<br><br>
    Só lembrando que encerra as inscrições dia {{date('d/M/y', strtotime($data))}}.<br>
    Mais informações você encontra no link:{{$link}}<br>
</p>
