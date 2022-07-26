<template>
    <div class="flex justify-center sm:gap-6 gap-2 sm:mx-0 mx-3 mt-4">
        <button id="btn-yes" :class="currentUser.attend == 1 ? 'disabled': ''" class="btn btn-green inline-block sm:px-10 px-6 py-2" @click.prevent="confirm(1)">¡Si asistiré!</button>
        <button id="btn-no" :class="currentUser.attend == 0 ? 'disabled': ''" class="btn btn-red inline-block sm:px-5 px-2 py-2" @click.prevent="confirm(0)">No podré asistir</button>
    </div>
</template>

<script>
export default {
    name: 'ConfirmAttend',
    props: {
        currentUser: {
            type: Object,
            required: true
        }
    },
    data() {
        return {
            attend: 0,
        };
    },
    methods: {
        confirm(data) {
            axios.post('/api/attend', { attend: data, user: this.currentUser.uuid})
                    .then((response) => {
                        if(response.data.attend) {
                            $('#btn-yes').addClass('disabled');
                            $('#btn-no').removeClass('disabled');

                            sweetAlert.fire(
                              'Gracias confirmar',
                              'Nos vemos muy pronto',
                              'success'
                            );
                        } else {
                            $('#btn-yes').removeClass('disabled');
                            $('#btn-no').addClass('disabled');

                            sweetAlert.fire(
                              'Sentimos que no puedas acompañarnos',
                              'Esperamos vernos en otro momento',
                              'success'
                            );
                        }
                    })
                    .catch((error) => {
                        console.log(error);
                })
        },
    },
};
</script>
