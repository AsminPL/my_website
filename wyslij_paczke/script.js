//Mo¿esz na spokojnie uzywac tego kodu - tylko zmieñ dane!
//Author: AsminPL (my_website ver: 1.0)
//Helped me: ChatGPT
document.addEventListener('DOMContentLoaded', () => {
    const options = document.querySelectorAll('.option.available');
    const shippingDetails = document.getElementById('shipping-details');
    const dynamicAddress = document.getElementById('dynamic-address');

    // dane adresowe (wprowadz tu poprawne i bez polskich znakow zeby sie poprawnie wyswietlaly)
    const addresses = {
        inpost: 'Censored (tutaj wpisz adres)',
        dpd: 'Censored (tutaj wpisz adres)',
        dhl: 'Censored (tutaj wpisz adres)',
        orlen: 'Censored (tutaj wpisz adres)'
    };

    // Animacje01
    shippingDetails.style.height = '0';

    options.forEach(option => {
        option.addEventListener('click', () => {
            options.forEach(opt => opt.classList.remove('selected'));

            option.classList.add('selected');

            const method = option.dataset.method;
            dynamicAddress.textContent = addresses[method] || 'Brak danych adresowych.';

            if (shippingDetails.classList.contains('hidden')) {
                shippingDetails.classList.remove('hidden');
                setTimeout(() => {
                    shippingDetails.style.height = shippingDetails.scrollHeight + 'px';
                    // Reset height do auto po zakoñczeniu animacji, ¿eby zawartoœæ mog³a siê dostosowaæ
                    shippingDetails.addEventListener('transitionend', function handler() {
                        shippingDetails.style.height = 'auto';
                        shippingDetails.removeEventListener('transitionend', handler);
                    });
                }, 10);
            } else {
                 shippingDetails.style.height = shippingDetails.scrollHeight + 'px';
                 setTimeout(() => {
                    shippingDetails.style.height = 'auto';
                 }, 500);
            }
        });
    });
});