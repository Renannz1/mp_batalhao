<!-- Modal de Confirmação -->
<div class="modal fade" id="excluirModal" tabindex="-1" aria-labelledby="excluirModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="excluirModalLabel">Confirmar Exclusão</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
        </div>
        <div class="modal-body">
          Você tem certeza que deseja excluir esta medida? Esta ação não pode ser desfeita.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <a href="{{ route('excluir-assistida', ['id' => $assistida->id]) }}" id="confirmarExcluir" class="btn btn-danger">Excluir</a>
        </div>
      </div>
    </div>
</div>

