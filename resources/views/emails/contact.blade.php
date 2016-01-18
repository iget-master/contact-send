<p><strong>Nome:</strong> {!! $data['name'] !!}</p>
<p><strong>Email:</strong> {!! $data['email'] !!}</p>
@if (array_key_exists('phone', $data))
    <p><strong>Telefone:</strong> {!! $data['phone'] !!}</p>
@endif

<p><strong>Assunto:</strong> {!! $data['subject'] !!}</p>

<p>Mensagem:</p>
<p>{!! $data['message'] !!}</p>


