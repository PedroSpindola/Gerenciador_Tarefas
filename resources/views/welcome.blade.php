@extends('layouts.main')
@section('content')
    <div class="container my-5"> 
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="text-center">
                    <h1 class="display-4 fw-bold mb-4 text-primary">
                        Bem-vindo ao Gerenciador de Tarefas!
                    </h1>
                    <p class="lead text-secondary mb-4">
                        Sua plataforma intuitiva e eficiente para organizar o dia a dia, planejar projetos e garantir que
                        nada escape ao seu controle.
                        Nós entendemos a importância de manter suas prioridades claras e, por isso, construímos uma
                        ferramenta que simplifica a gestão de cada item da sua lista.
                    </p>
                    <p class="text-muted mb-5">
                        Com nosso sistema, você pode <b>criar, visualizar, editar e acompanhar o progresso</b> de todas as suas
                        tarefas. Desde pequenos afazeres diários até grandes metas,
                        tenha total controle sobre o que é mais importante para você. Marque como <b>concluído</b> o que já foi
                        feito, mantenha <b>pendente</b> o que ainda precisa de atenção e tenha a tranquilidade de saber que
                        seus dados estão seguros e sempre à mão.
                        Comece agora mesmo a transformar a forma como você gerencia suas responsabilidades!
                    </p>

                    <a href="{{ route('tarefas.index') }}" class="btn btn-primary btn-lg shadow-sm">
                        Ver Minhas Tarefas <i class="bi bi-arrow-right-short"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection