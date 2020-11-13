<div id="sidebar">
    <a href="{{route('app')}}" class="sidebar-item flex-center-between">
        <div>DashBoard</div>
        <div>></div>
    </a>
    <a href="{{route('manage-service')}}" class="sidebar-item flex-center-between">
        <div>Vincular Serviço</div>
        <div>></div>
    </a>
    <div class="sidebar-item-dad">
        <div class="sidebar-item-dad-button border-radius flex-center-between">
            <div class="sidebar-item-text">Gerenciar</div>
            <div class="sidebar-item-icon">></div>
        </div>

        <div class="sidebar-item-expansive">
            <a href="{{route('manage-user')}}" class="sidebar-item-child border-radius">Cliente</a>
            <a href="{{route('manage-type_service')}}" class="sidebar-item-child border-radius">Tipo de Serviço</a>
            <a href="{{route('manage-collaborator')}}" class="sidebar-item-child border-radius">Colaborador</a>
        </div>
    </div>
</div>
