@php
    $infoModal = $idInfoModal ?? '';
    $messageInfo = $message ?? '';
@endphp

<div class="modal second" id="{{ $infoModal }}">
    <div class="modal-dialog info">
        <div class="modal-content info">
            <div class="modal-header info">
                <h5 class="modal-title info">¿Cómo se calcula el nivel de anemia? <i class="fa-solid fa-circle-info"></i></h5>
                <button class="close" onclick="closeModal('{{ $infoModal }}')">&times;</button>
            </div>
            <div class="modal-body info">
                <div class ="message-container info">{!! $messageInfo !!}</div>
            </div>
            <!--<div class="modal-footer success">
                <button type="button" class="btn btn-secondary" onclick="closeModal('{{ $infoModal }}')">Cerrar</button>
            </div>--> 
        </div>
    </div>
</div>
