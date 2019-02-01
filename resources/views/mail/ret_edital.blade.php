<p style="color:#333">
    {{--Olá {{$nome}},<br>--}}
    {{--O Edital {{$title}}<br>--}}
    {{--Falando sobre:<br>--}}
    {{--{{$descricao}}<br>--}}
    {{--Mais informações no Link:{{$link}}<br>--}}
    {{--{{$data}}--}}
    Olá {{$nome}}, o edital "<b>{{$title}}</b>" foi retificado.<br>
    {{--<b><i>{{$title}}</i></b><br>--}}
    Descrição do edital: {{$descricao}}<br><br>
    Só lembrando que encerra as inscrições dia {{date('d/M/y', strtotime($data))}}.<br>
    Mais informações você encontra no link:{{$link}}<br>
</p>
