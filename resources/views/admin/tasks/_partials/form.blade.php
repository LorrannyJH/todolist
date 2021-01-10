@csrf
<div class="row">
    <div class="form-group col-12 col-sm-8">
        <label for="name">Nome</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $task->name ?? '') }}">
    </div>
    <div class="form-group col-12 col-sm-4">
        <label>Status</label>
        <div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="done" id="done" value="1"
                <?= old('done', $task->done ?? 0) == 1 ? 'checked' : '' ?>>
                <label class="form-check-label" for="done">Realizado</label>
            </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="done" id="undone" value="0"
                <?= old('done', $task->done ?? 0) == 0 ? 'checked' : '' ?>>
                <label class="form-check-label" for="undone">Não realizado</label>
            </div>
        </div>
    </div>
</div>