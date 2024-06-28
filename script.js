document.addEventListener('DOMContentLoaded', function() {
    const addExperienciaButton = document.getElementById('add-experiencia');
    const experienciasContainer = document.getElementById('experiencias');
    let experienciaIndex = 1;

    addExperienciaButton.addEventListener('click', function() {
        experienciaIndex++;

        const div = document.createElement('div');
        div.classList.add('experiencia');

        div.innerHTML = `
            <label for="cargo${experienciaIndex}">Cargo:</label>
            <input type="text" id="cargo${experienciaIndex}" name="cargo[]">
            <label for="empresa${experienciaIndex}">Empresa:</label>
            <input type="text" id="empresa${experienciaIndex}" name="empresa[]">
            <label for="periodo${experienciaIndex}">Período:</label>
            <input type="text" id="periodo${experienciaIndex}" name="periodo[]">
            <button type="button" class="remove-experiencia">Remover</button>
        `;

        experienciasContainer.appendChild(div);
    });

    experienciasContainer.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-experiencia')) {
            e.target.parentNode.remove();
        }
    });
});
