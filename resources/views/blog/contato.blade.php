@extends('template')
@section('content')
    <div class="row">
        <div id="contato" class="col-md-8 col-md-offset-2">
            <h2>Envie sua mensagem</h2>
            <form>
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="Seu nome">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" placeholder="seu e-mail">
                </div>
                <div class="form-group">
                    <label for="email">Mensagem</label>
                    <textarea class="form-control" rows="6"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Enviar</button>
            </form>
        </div>
    </div>
@stop