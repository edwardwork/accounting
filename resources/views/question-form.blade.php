<div x-data="init()">
    <button @click.prevent="$dispatch('open-modal', 'question-form')"
            class="fixed right-4 bottom-4 rounded-full bg-[#786F51] text-white w-16 h-16 text-4xl z-10">
        ?
    </button>

    <x-modal name="question-form" :show="false" focusable>
        <form class="p-8 rounded-lg shadow-lg text-center">
            <div class="flex flex-col mb-4 text-left">
                <label class="mb-2 text-white" for="email">Email</label>
                <input type="text"
                       id="email"
                       name="email"
                       required
                       x-model="form.email"
                       placeholder="Please, enter your email"
                       class="p-2 rounded text-black">
            </div>
            <div class="flex flex-col mb-4 text-left">
                <label class="mb-2 text-white" for="name">Name</label>
                <input type="text"
                       id="name"
                       name="name"
                       required
                       x-model="form.name"
                       placeholder="Please, enter your name"
                       class="p-2 rounded text-black">
            </div>
            <div class="flex flex-col mb-4 text-left">
                <label class="mb-2 text-white" for="question">Ask your question</label>
                <textarea required
                          x-model="form.question"
                          id="question"
                          name="question"
                          cols="30"
                          rows="5"
                          class="p-2 rounded text-black"></textarea>
            </div>
            <button @click.prevent="submitForm" type="button"
                    class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                Send
            </button>
        </form>
    </x-modal>
</div>

<script>
    function clearErrors() {
        document.querySelectorAll('.error-message').forEach(el => el.remove());
    }

    function showErrorMessage(el, message) {
        const newEl = document.createElement('span');
        newEl.classList.add('error-message', 'text-sm', 'text-red-600', 'dark:text-red-400', 'space-y-1');
        newEl.innerText = message;
        el.after(newEl);
    }

    function handleResponse(response) {
        clearErrors();

        if (response.success) {
            setTimeout(() => closeModal('question-form'), 100);
            flash(response.message);
        }

        if (response.success === false && response.errors) {
            for (let responseKey in response.errors) {
                const input = document.querySelector('[name="' + responseKey + '"]');
                showErrorMessage(input, response.errors[responseKey][0])
            }
        }
    }

    function init() {
        return {
            form: {
                email: '{{ Auth::user() ? Auth::user()->email : ''}}',
                name: '{{ Auth::user() ? Auth::user()->name : ''}}',
                question: '',
            },
            submitForm() {
                clearErrors();

                fetch('{{ route('create-question') }}', {
                    method: 'POST',
                    body: JSON.stringify(this.form),
                    headers: {
                        'Accept': 'application/json; charset=UTF-8',
                        'Content-Type': 'application/json;',
                    },
                })
                    .then(response => response.json())
                    .then(handleResponse)
                    .then(() => this.form.question = '');
            },
        };
    }
</script>
