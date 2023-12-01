import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.flash = (message = 'Success') => {
    window.dispatchEvent(new CustomEvent('flash', {
        detail: { message: message }
    }));
}

window.openModal = (modalName) => {
    window.dispatchEvent(new CustomEvent('open-modal', {
        detail: modalName
    }));
}

window.closeModal = (modalName) => {
    window.dispatchEvent(new CustomEvent('close-modal', {
        detail: modalName
    }));
}
