// localStorageUtils.js

export const LocalStorageUtils = {
    saveItem(key, value) {
        localStorage.setItem(key, value);
        console.log(`Guardando ${value} con key: ${key}`);
    },
    
    loadItem(key) {
        return localStorage.getItem(key);
    },

    loadAllItems(inputs) {
        inputs.forEach(input => {
            const value = this.loadItem(input.dataset.key);
            if (value) {
                input.value = value;
            }
        });
    },

    clearItem(key) {
        localStorage.removeItem(key);
        console.log(`Eliminando key: ${key}`);
    },

    clearAll(items) {
        items.forEach(input => {
            this.clearItem(input.dataset.key);
        });
    },

	// Nueva función para guardar todos los inputs
    saveAllItems(inputs) {
        inputs.forEach(input => {
            const key = input.dataset.key;
            if (key) {
                this.saveItem(key, input.value);
            }
        });
    },
};
