<template>
    <div class="flex justify-center mt-10">
        <a href="#" class="btn btn-green inline-block px-5 py-2" @click.prevent="confirm(1)">Confirmar asistencia</a>
        <a href="#" class="btn btn-red inline-block px-5 py-2" @click.prevent="confirm(0)">Cancelar asistencia</a>
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
                        console.log(response.data);
                    })
                    .catch((error) => {
                        console.log(error);
                })
        },
    },
};
</script>
