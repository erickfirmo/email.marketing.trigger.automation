



@extends('layouts.dadmin')

@section('content')

@include('admin.partials._navbar')
@include('admin.partials._sidebar')
<!-- Main Container Start -->
<main class="main--container">
            <!-- Page Header Start -->
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Page Title Start -->
                            <h2 class="page--title h5">Mensagens</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.mensagens.index') }}">Mensagens</a></li>
                                <li class="breadcrumb-item active"><span>Todas</span></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </section>
            <!-- Page Header End -->

            <!-- Main Content Start -->
            <section class="main--content">
                <div class="panel">
                    <!-- Records Header Start -->
                    <div class="records--header">
                        <div class="title fa-envelope">
                            <h3 class="h3">Mensagens</h3>
                            <p>{{ count($mensagens) == 1 ? count($mensagens).' Mensagem encontrada' : count($mensagens).' Mensagens encontradas' }}</p>
                        </div>

                    </div>
                    <!-- Records Header End -->
                </div>

                @include('admin.partials._alert')


                <div class="panel">

                    <div class="records--list" data-title="Lista de mensagens">
                        <table id="recordsListView">
                            <thead>
                                <tr>
                                    <!-- <th>ID</th> -->
                                    <th>Visualizar E-mail</th>
                                    <th class="not-sortable">Ações</th>
                                    <th>Título</th>
                                    <th>Instituição</th>
                                    <!-- <th>Conteúdo do SMS</th> -->
                                    <th>Arquivo do E-mail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mensagens as $mensagem)
                                <tr id="{{ 'mensagem-'.$mensagem->id }}">
                                    <td><a href="{{ $mensagem->getUrl() }}" target="{{ $mensagem->getUrl() == '#' ? '_self' : '_blank'}}" class="text-center d-block"><i class="fas fa-eye"></i></a></td>
                                    <td><a href="{{ route('admin.mensagens.edit', $mensagem->id ) }}">Editar</a></td>
                                    <td>{{ $mensagem->titulo }}</td>
                                    <td>{{ $mensagem->tipo_de_acao_da_instituicao()->exists() ? $mensagem->tipo_de_acao_da_instituicao->instituicao->prefixo : '(nenhuma)' }}</td>
                                    <!-- <td>{{-- $mensagem->conteudo_do_sms --}}</td> -->
                                    <td>{{ $mensagem->nome_do_arquivo.'.html' }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Records List End -->
                </div>
            </section>
            <!-- Main Content End -->

    @include('admin.partials._footer')
</main>
<!-- Main Container End -->


@endsection

