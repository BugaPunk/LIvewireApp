<div    x-data="{open:false}" 
        x-show="open" 
        @notify.window="Toastify({
                        text: $event.detail.message,
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: 'top',
                        position: 'right',
                        stopOnFocus: true,
                        style: {
                            background: ($event.detail.title === 'success') ? 'linear-gradient(to right, #7c3aed, #4338ca)' : 'linear-gradient(to right, #e11d48, #be185d)',
                        },
        }).showToast();">
</div>